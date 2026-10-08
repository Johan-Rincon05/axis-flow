<?php
/**
 * Actualiza en la BD los nombres/descripciones de los graficos, tablas dinamicas y metricas integradas
 * (que se guardan al instalar) con lo definido en module/bi/config/*.php (ya traducido al espanol).
 * Se ejecuta una sola vez por version de contenido (marcador en config/.axis-bi-<hash>).
 */
error_reporting(0);
$root = getenv('ZENTAO_ROOT') ?: '/var/www/zentao';
if(!is_file("$root/config/my.php")) exit(0);

$hash   = md5(implode('', array_map('md5_file', array_merge(glob("$root/module/bi/config/*.php"), glob("$root/module/metric/config/*.php")))));
$marker = "$root/config/.axis-bi-$hash";
if(is_file($marker)) exit(0);

chdir("$root/www");
$_SERVER['REQUEST_METHOD'] = 'GET'; $_SERVER['HTTP_HOST'] = 'localhost'; $_SERVER['REQUEST_URI'] = '/'; $_SERVER['SCRIPT_NAME'] = '/index.php'; $_SERVER['SERVER_NAME'] = 'localhost';
include "$root/framework/router.class.php";
include "$root/framework/control.class.php";
include "$root/framework/model.class.php";
include "$root/framework/helper.class.php";
global $app, $config, $lang, $dbh;
try
{
    $app = router::createApp('pms', $root, 'router');
    if(!$app->checkInstalled()) exit(0);
    $app->setClientLang('es');
    $common = $app->loadCommon();
    $bi      = $common->loadModel('bi');
    $install = $common->loadModel('install');
    $bi->dao->clearTablesDescCache();

    $sqls = array_merge($bi->prepareBuiltinChartSQL('update'), $bi->prepareBuiltinMetricSQL('update'));

    /* Tablas dinamicas: el modelo solo inserta versiones nuevas; aqui se refrescan los textos de la version existente. */
    foreach($config->bi->builtin->pivots as $pivot)
    {
        $pivot = (object)$pivot;
        list($p, $spec, ) = $bi->preparePivotObject($pivot);
        $data = array();
        foreach(array('name', 'desc', 'settings', 'filters', 'fields', 'langs', 'vars') as $f) if(property_exists($spec, $f)) $data[$f] = $spec->$f;
        if(!$data) continue;
        $set = array(); foreach($data as $k => $v) $set[] = "`$k`=" . ($v === null ? 'NULL' : $dbh->quote((string)$v));
        $sqls[] = "UPDATE " . TABLE_PIVOTSPEC . " SET " . implode(',', $set) . " WHERE `pivot`=" . (int)$spec->pivot . " AND `version`=" . $dbh->quote((string)$spec->version);
    }

    $done = 0;
    $dbh->beginTransaction();
    foreach($sqls as $sql)
    {
        $sql = $install->replaceContantsInSQL($sql);
        if(empty($sql)) continue;
        $dbh->exec($sql); $done++;
    }
    $dbh->commit();
    file_put_contents($marker, date('c'));
    echo "axis-refresh-bi: $done sentencias\n";
}
catch(Throwable $e)
{
    if(isset($dbh) && $dbh->inTransaction()) $dbh->rollBack();
    fwrite(STDERR, 'axis-refresh-bi: ' . $e->getMessage() . "\n");
}
