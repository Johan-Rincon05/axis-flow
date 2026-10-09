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

    /* Textos en chino que ZenTao guarda en la BD al instalar (grupos de graficos/tablas, plantillas de documento, dimensiones, pantallas). */
    $zh = [
        '业务需求说明书' => 'Especificación de requisitos de negocio', '产品' => 'Producto', '人员' => 'Personal', '任务' => 'Tarea',
        '其他' => 'Otros', '内置数据分组' => 'Grupo de datos integrado', '发布' => 'Lanzamiento', '工时' => 'Horas de trabajo',
        '工期' => 'Duración', '开发' => 'Desarrollo', '成本' => 'Costo', '接口设计文档' => 'Documento de diseño de interfaz',
        '数据库设计文档' => 'Documento de diseño de base de datos', '文档' => 'Documento', '概要设计说明书' => 'Especificación de diseño preliminar',
        '测试' => 'Pruebas', '用例' => 'Casos de prueba', '用户手册' => 'Manual de usuario', '用户需求说明书' => 'Especificación de requisitos de usuario',
        '程序代码' => 'Código fuente', '系统测试用例' => 'Casos de prueba de sistema', '系统测试计划' => 'Plan de pruebas de sistema',
        '组织' => 'Organización', '行为' => 'Comportamiento', '计划' => 'Plan', '设计' => 'Diseño', '详细设计说明书' => 'Especificación de diseño detallado',
        '说明' => 'Descripción', '质量保证计划' => 'Plan de aseguramiento de calidad', '进度' => 'Avance', '迭代' => 'Sprint',
        '配置管理计划' => 'Plan de gestión de configuración', '集成测试用例' => 'Casos de prueba de integración', '集成测试计划' => 'Plan de pruebas de integración',
        '需求' => 'Requerimiento', '项目' => 'Proyecto', '项目计划' => 'Plan de proyecto', '项目集' => 'Programa',
        '项目需求规格说明书' => 'Especificación de requisitos del proyecto',
    ];
    $m = $pdo->prepare("UPDATE `{$prefix}module` SET `name`=? WHERE `name`=?");
    foreach($zh as $from => $to) $m->execute([$to, $from]);

    $dim = ['宏观管理维度' => 'Gestión macro', '效能管理维度' => 'Gestión de eficiencia', '质量管理维度' => 'Gestión de calidad'];
    $d = $pdo->prepare("UPDATE `{$prefix}dimension` SET `name`=? WHERE `name`=?");
    foreach($dim as $from => $to) $d->execute([$to, $from]);

    $scr = [
        1 => ['Panorama de datos macro', 'Conozca rápidamente el estado actual de la empresa'],
        2 => ['Resumen anual de la empresa', 'Consulte los datos acumulados de la empresa por año'],
        3 => ['Resumen del año', 'Resumen anual del trabajo por año, departamento y persona'],
        4 => ['Ranking anual', 'Ranking de avance, inversión y resultados por programa, proyecto, producto y persona'],
        5 => ['Burndown de iteraciones', 'Consulte el burndown de todas las iteraciones abiertas'],
        6 => ['Datos de proyectos completados en el año', 'Conozca la productividad de los proyectos completados'],
        7 => ['Seguimiento de proyectos en curso', 'Seguimiento macro de los datos de proceso de los proyectos del año en curso'],
        8 => ['Panorama de calidad de la empresa', 'Datos de calidad para tener una visión global de la producción'],
        1001 => ['Chequeo mensual de salud de AXIS FLOW', 'Chequeo de salud de la aplicación para mejorar continuamente la gestión de proyectos'],
    ];
    $sc = $pdo->prepare("UPDATE `{$prefix}screen` SET `name`=?, `desc`=? WHERE `id`=? AND `name` REGEXP '[一-龥]'");
    foreach($scr as $id => $v) $sc->execute([$v[0], $v[1], $id]);

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
