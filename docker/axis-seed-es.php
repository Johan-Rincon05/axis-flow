<?php
/**
 * Siembra en la tabla zt_lang las filas del idioma "es" (clon traducido de las de "en").
 * Idempotente: usa INSERT IGNORE, nunca pisa personalizaciones hechas desde la interfaz.
 */
$root = getenv('ZENTAO_ROOT') ?: '/var/www/zentao';
$my   = "$root/config/my.php";
if(!is_file($my)) exit(0);

class AxisCfg { public function __get($n) { $this->$n = new AxisCfg(); return $this->$n; } }
$config = new AxisCfg();
if(!function_exists('getWebRoot'))  { function getWebRoot() { return '/'; } }
if(!function_exists('getEnvData'))  { function getEnvData($k, $d = '') { $v = getenv($k); return $v === false ? $d : $v; } }
ob_start(); include $my; ob_end_clean();
if(empty($config->db->host) || is_object($config->db->host)) exit(0);
$prefix = $config->db->prefix ?? 'zt_';

$dsn = "mysql:host={$config->db->host};port=" . ($config->db->port ?? 3306) . ";dbname={$config->db->name};charset=utf8mb4";
$pdo = null;
for($i = 0; $i < 20 && !$pdo; $i++)
{
    try { $pdo = new PDO($dsn, $config->db->user, $config->db->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); }
    catch(Exception $e) { sleep(3); }
}
if(!$pdo) { fwrite(STDERR, "axis-seed-es: sin conexion a la BD\n"); exit(0); }

$words = [
    'Epic' => 'Épica', 'Story' => 'Historia', 'Feature' => 'Funcionalidad', 'Requirement' => 'Requerimiento',
    'Software Requirement' => 'Requerimiento de software', 'User Requirement' => 'Requerimiento de usuario',
    'Relate' => 'Relacionado', 'Dependence' => 'Dependencia', 'Depended On' => 'Dependido por',
    'Repetition' => 'Duplicado', 'Quote' => 'Cita', 'Quoted' => 'Citado',
    'All' => 'Todos', 'Others' => 'Otros', 'Other' => 'Otro', 'IE series' => 'Serie IE',
    'Firefox series' => 'Serie Firefox', 'Opera series' => 'Serie Opera',
];
$tr = fn($v) => $words[$v] ?? $v;

try
{
    $t = $prefix . 'lang';
    $rows = $pdo->query("SELECT * FROM `$t` WHERE `lang`='en'")->fetchAll(PDO::FETCH_ASSOC);
    $cols = array_values(array_diff($pdo->query("SHOW COLUMNS FROM `$t`")->fetchAll(PDO::FETCH_COLUMN), ['id']));
    $ins  = $pdo->prepare("INSERT IGNORE INTO `$t` (`" . implode('`,`', $cols) . "`) VALUES (" . implode(',', array_fill(0, count($cols), '?')) . ")");
    $n = 0;
    foreach($rows as $r)
    {
        $r['lang'] = 'es';
        $json = json_decode($r['value'], true);
        if(is_array($json)) $r['value'] = json_encode(array_map($tr, $json), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        else                $r['value'] = $tr($r['value']);
        $ins->execute(array_map(fn($c) => $r[$c] ?? null, $cols));
        $n += $ins->rowCount();
    }
    if($n) echo "axis-seed-es: $n filas nuevas en $t\n";

    /* Moneda por defecto: solo si sigue con el valor del instalador (CNY). */
    $c = $prefix . 'config';
    $cur = $pdo->query("SELECT `value` FROM `$c` WHERE `owner`='system' AND `module`='project' AND `section`='' AND `key`='defaultCurrency'")->fetchColumn();
    if($cur === 'CNY')
    {
        $pdo->exec("UPDATE `$c` SET `value`='COP' WHERE `owner`='system' AND `module`='project' AND `section`='' AND `key`='defaultCurrency'");
        $pdo->exec("UPDATE `$c` SET `value`='COP,USD,EUR,MXN' WHERE `owner`='system' AND `module`='project' AND `section`='' AND `key`='unitList' AND `value`='CNY,USD'");
        echo "axis-seed-es: moneda por defecto COP\n";
    }

    /* Paneles (bloques) creados en ingles al instalar: se regeneran una sola vez con los titulos en espanol. */
    $marker = "$root/config/.axis-blocks-es";
    if(!is_file($marker))
    {
        $b = $prefix . 'block';
        $english = $pdo->query("SELECT COUNT(*) FROM `$b` WHERE `title` IN ('Guides','My Work','Recents','Zentao Dynamic','Statistics','Team Achievements') OR `title` LIKE '%statistics%' OR `title` LIKE 'Unclosed%' OR `title` LIKE 'Recent %'")->fetchColumn();
        if($english > 0)
        {
            $pdo->exec("DELETE FROM `$b` WHERE `dashboard` IN ('my','doc','product','project','qa','execution','singleproduct')");
            $pdo->exec("DELETE FROM `$c` WHERE `section`='common' AND `key`='blockInited' AND `module` IN ('my','doc','product','project','qa','execution','singleproduct')");
            echo "axis-seed-es: paneles regenerados en espanol\n";
        }
        @file_put_contents($marker, date('c'));
    }
}
catch(Exception $e) { fwrite(STDERR, 'axis-seed-es: ' . $e->getMessage() . "\n"); }
