<?php
/**
 * The install module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     install
 * @version     $Id: en.php 4972 2013-07-02 06:50:10Z zhujinyonging@gmail.com $
 * @link        https://www.zentao.net
 */
$lang->install = new stdclass();

$lang->install->common = 'Instalar';
$lang->install->next   = 'Siguiente';
$lang->install->pre    = 'Volver';
$lang->install->reload = 'Actualizar';
$lang->install->error  = 'Error ';

$lang->install->officeDomain = 'https://www.zentao.pm';

$lang->install->start            = 'Instalar ahora';
$lang->install->keepInstalling   = 'Continuar instalando la versión actual';
$lang->install->seeLatestRelease = 'Buscar actualizaciones';
$lang->install->welcome          = '¡Gracias por elegir AXIS FLOW!';
$lang->install->license          = 'Contrato de licencia';
$lang->install->desc             = <<<EOT
ZenTao Project Management Software (ZenTao PMS) es un software de código abierto publicado bajo la licencia <a href='http://zpl.pub/page/zplv12.html' target='_blank'>ZPL</a> o <a href='https://www.gnu.org/licenses/agpl-3.0.en.html' target='_blank'>AGPL</a>. Es una plataforma todo en uno que integra la gestión de productos, proyectos y pruebas, junto con automatización de oficina y gestión organizacional, lo que la convierte en la mejor opción para las pequeñas y medianas empresas.

Construido con PHP y MySQL sobre el framework PHP propio de ZenTao, ofrece alta extensibilidad, lo que permite a desarrolladores y organizaciones externas desarrollar extensiones o personalizar ZenTao fácilmente.
EOT;
$lang->install->links = <<<EOT
ZenTao PMS es desarrollado por <strong><a href='https://easycorp.cn' target='_blank' class='text-danger'>ZenTao Software (Qingdao) Group Co., Ltd </a></strong>.
Sitio web oficial: <a href='https://www.zentao.net' target='_blank'>https://www.zentao.net</a>
Soporte técnico: <a href='https://www.zentao.net/ask/' target='_blank'>https://www.zentao.net/ask/</a>
Síganos en LinkedIn: <a href='https://www.linkedin.com/company/1156596/' target='_blank'>ZenTao Software</a>
Facebook: <a href='https://www.facebook.com/natureeasysoft' target='_blank'>ZenTao Software</a>
Twitter: <a href='https://twitter.com/ZentaoA' target='_blank'>ZenTao ALM</a>
Actualmente está instalando la versión: <strong class='text-danger'>%s</strong>.
EOT;

$lang->install->selectMode          = "Seleccionar modo";
$lang->install->introduction        = "Introducción a las funciones de AXIS FLOW 15.0+ ";
$lang->install->howToUse            = "¿Cómo planea usar la nueva versión de AXIS FLOW?";
$lang->install->guideVideo          = 'https://dl.zentao.net/vedio/program0716.mp4';
$lang->install->introductionContent = <<<EOT
<div>
<h4>Estimados usuarios, bienvenidos a ZenTao PMS.</h4>
<p>ZenTao tiene dos modos de gestión desde la versión 15.0. Uno es el modo de gestión clásico, que ofrece dos funciones centrales, Producto y Proyecto; el otro es un nuevo modo de gestión de proyectos, con Programa y Ejecución añadidos. A continuación se presenta el nuevo modo:</p>
<div class='block-content'>
<div class='block-details'><p class='block-title'><i class='icon icon-program'></i> <strong>Programa</strong></p>
<p>El Programa se usa para gestionar un grupo de productos y proyectos, y los directivos de la empresa o la PMO pueden usarlo para la planeación estratégica.</p></div>
<div class='block-details block-right'>
<p class='block-title'><i class='icon icon-product'></i> <strong>Producto</strong></p>
<p>Los productos desglosan la estrategia corporativa en requerimientos accionables, permitiendo a los gerentes de producto crear planes de lanzamiento.<p>
</div>
<div class='block-details'>
<p class='block-title'><i class='icon icon-project'></i> <strong>Proyecto</strong></p>
<p>Los proyectos organizan los recursos para I+D y dan seguimiento a todo el proceso de gestión para garantizar una entrega eficiente y de alta calidad.</p>
</div>
<div class='block-details block-right'>
<p class='block-title'><i class='icon icon-run'></i> <strong>Ejecución</strong></p>
<p>La Ejecución se usa para desglosar, asignar y dar seguimiento a las tareas, asegurando que los objetivos del proyecto se cumplan a nivel individual.<p>
</div>
</div>
<div class='text-center introduction-link'>
<a href='https://dl.zentao.net/zentao/zentaoconcept.pdf' target='_blank' class='btn btn-wide btn-info'><i class='icon icon-p-square'></i> Introducción en documento</a>
<a href='j a v a s c r i p t :showVideo()' class='btn btn-wide btn-info'><i class='icon icon-video-play'></i> Introducción en video</a>
</div>
</div>
EOT;

$lang->install->newReleased = "<strong class='text-danger'>Aviso</strong>: la última versión <strong class='text-danger'>%s</strong> está disponible en el sitio web oficial, publicada el %s.";
$lang->install->or          = 'O';
$lang->install->checking    = 'Verificación del sistema';
$lang->install->ok          = 'Aprobado(√)';
$lang->install->fail        = 'Fallido(×)';
$lang->install->loaded      = 'Cargado';
$lang->install->unloaded    = 'No cargado';
$lang->install->exists      = 'Se encontraron ';
$lang->install->notExists   = 'No encontrado ';
$lang->install->writable    = 'Escritura permitida ';
$lang->install->notWritable = 'Sin permiso de escritura ';
$lang->install->phpINI      = 'Archivo de configuración de PHP';
$lang->install->checkItem   = 'Elemento';
$lang->install->current     = 'Configuración actual';
$lang->install->result      = 'Resultado';
$lang->install->action      = 'Sugerencias';

$lang->install->phpVersion = 'Versión de PHP';
$lang->install->phpFail    = 'La versión de PHP debe ser 5.2.0 o superior';

$lang->install->pdo           = 'Extensión PDO';
$lang->install->pdoFail       = 'Modifique el archivo de configuración de PHP para cargar la extensión PDO.';
$lang->install->pdoMySQL      = 'Extensión PDO_MySQL';
$lang->install->pdoMySQLFail  = 'Modifique el archivo de configuración de PHP para cargar la extensión pdo_mysql.';
$lang->install->json          = 'Extensión JSON';
$lang->install->jsonFail      = 'Modifique el archivo de configuración de PHP para cargar la extensión JSON.';
$lang->install->openssl       = 'Extensión OpenSSL';
$lang->install->opensslFail   = 'Modifique el archivo de configuración de PHP para cargar la extensión OPENSSL.';
$lang->install->mbstring      = 'Extensión Mbstring';
$lang->install->mbstringFail  = 'Modifique el archivo de configuración de PHP para cargar la extensión MBSTRING.';
$lang->install->zlib          = 'Extensión Zlib';
$lang->install->zlibFail      = 'Modifique el archivo de configuración de PHP para cargar la extensión ZLIB.';
$lang->install->curl          = 'Extensión Curl';
$lang->install->curlFail      = 'Modifique el archivo de configuración de PHP para cargar la extensión CURL.';
$lang->install->filter        = 'Extensión de filtro';
$lang->install->filterFail    = 'Modifique el archivo de configuración de PHP para cargar la extensión FILTER.';
$lang->install->gd            = 'Extensión GD';
$lang->install->gdFail        = 'Modifique el archivo de configuración de PHP para cargar la extensión GD.';
$lang->install->iconv         = 'Extensión Iconv';
$lang->install->iconvFail     = 'Modifique el archivo de configuración de PHP para cargar la extensión ICONV.';
$lang->install->tmpRoot       = 'Directorio de archivos temporales';
$lang->install->dataRoot      = 'Directorio de archivos cargados';
$lang->install->session       = 'Directorio de almacenamiento de sesiones';
$lang->install->sessionFail   = 'Modifique el archivo de configuración de PHP para establecer session.save_path. <br />Si usa el Panel BT, vaya a "App Store" en el BT Web Panel, abra la configuración de PHP, vaya al elemento "Session Configuration", seleccione files y haga clic en Guardar. En versiones anteriores, el archivo de configuración de PHP debe modificarse manualmente.';
$lang->install->mkdirWin      = '<p>Es necesario crear el directorio %s. El comando es:<br /> mkdir %s</p>';
$lang->install->chmodWin      = 'Es necesario modificar los permisos del directorio "%s".';
$lang->install->mkdirLinux    = '<p>Es necesario crear el directorio %s.<br /> El comando es:<br /> mkdir -p %s</p>';
$lang->install->chmodLinux    = 'Es necesario modificar los permisos del directorio "%s".<br />El comando es:<br />chmod 777 -R %s';

$lang->install->timezone       = 'Establecer zona horaria';
$lang->install->defaultLang    = 'Idioma predeterminado';
$lang->install->dbDriver       = 'Controlador de base de datos';
$lang->install->dbHost         = 'Host de la base de datos';
$lang->install->dbHostNote     = 'Si 127.0.0.1 no es accesible, pruebe con localhost.';
$lang->install->dbPort         = 'Puerto del host';
$lang->install->dbEncoding     = 'Juego de caracteres de la base de datos';
$lang->install->dbUser         = 'Usuario de la base de datos';
$lang->install->dbPassword     = 'Contraseña de la base de datos';
$lang->install->dbName         = 'Nombre de la base de datos';
$lang->install->dbSchema       = 'Esquema de la base de datos';
$lang->install->dbSchemaNote   = 'Esquema para Gauss/PostgreSQL; MySQL lo ignora.';
$lang->install->dbPrefix       = 'Prefijo de tabla';
$lang->install->clearDB        = 'Limpiar datos existentes';
$lang->install->importDemoData = 'Importar datos de demostración';
$lang->install->working        = 'Modo de operación';

$lang->install->dbDriverList = array();
$lang->install->dbDriverList['mysql']     = 'MySQL';

$lang->install->requestTypes['GET']       = 'GET';
$lang->install->requestTypes['PATH_INFO'] = 'PATH_INFO';

$lang->install->workingList['full']      = 'Gestión del ciclo de vida de aplicaciones';

$lang->install->errorConnectDB      = 'Falló la conexión con la base de datos.';
$lang->install->errorDBName         = ' no se permite el carácter “.” en el nombre de la base de datos';
$lang->install->errorDBSchema       = 'Nombre de esquema no válido.';
$lang->install->errorCreateDB       = 'Falló la creación de la base de datos.';
$lang->install->errorTableExists    = 'La tabla de datos ya existe. Si AXIS FLOW ya se instaló antes, regrese al paso anterior y limpie los datos, luego continúe con la instalación.';
$lang->install->errorCreateTable    = 'La creación de la tabla falló.';
$lang->install->errorEngineInnodb   = 'Su MySQL no admite el motor de tablas InnoDB. Modifíquelo a MyISAM e inténtelo de nuevo.';
$lang->install->errorImportDemoData = 'Error al importar los datos de demostración.';
$lang->install->errorDBUserPriv     = '¡El usuario actual de la base de datos no tiene permisos suficientes! \\nCambie al usuario root o use la siguiente sentencia SQL para otorgar permisos al usuario actual：\\n';

$lang->install->setConfig          = 'Crear archivo de configuración';
$lang->install->key                = 'Elemento';
$lang->install->value              = 'Valor';
$lang->install->saveConfig         = 'Guardar archivo de configuración';
$lang->install->save2File          = '<div class="text-warning">Copie el contenido del cuadro de texto anterior y guárdelo en "<strong> %s </strong>". Puede cambiar este archivo de configuración más adelante.</div>';
$lang->install->saved2File         = 'El archivo de configuración se ha guardado en " <strong>%s</strong> ". Puede modificar este archivo más adelante.';
$lang->install->errorNotSaveConfig = 'El archivo de configuración no está guardado.';
$lang->install->errorNotInitConfig = 'El archivo de configuración no ha sido creado.';

global $app;
$lang->install->CSRFNotice = "La defensa CSRF está habilitada en el sistema. Si no la necesita, comuníquese con el administrador para deshabilitarla manualmente en el archivo {$app->basePath}config/config.php.";

$lang->install->getPriv  = 'Establecer administrador';
$lang->install->company  = 'Nombre de la empresa';
$lang->install->account  = 'Cuenta de administrador';
$lang->install->password = 'Contraseña de administrador';

$lang->install->placeholder = new stdclass();
$lang->install->placeholder->password = 'La contraseña debe tener ≥ 6 caracteres, con una combinación de letras mayúsculas, minúsculas y números.';

$lang->install->errorEmpty['company']  = "{$lang->install->company} no debe estar vacío.";
$lang->install->errorEmpty['account']  = "{$lang->install->account} no debe estar vacío.";
$lang->install->errorEmpty['password'] = "{$lang->install->password} no debe estar vacío.";

$lang->install->langList['1'] = array('module' => 'process', 'key' => 'support', 'value' => 'Proceso de soporte');
$lang->install->langList['2'] = array('module' => 'process', 'key' => 'engineering', 'value' =>  'Proceso de ingeniería');
$lang->install->langList['3'] = array('module' => 'process', 'key' => 'project', 'value' => 'Gestión de proyectos');

$lang->install->processList['11'] = 'Gestión de proyectos';
$lang->install->processList['12'] = 'Planificación del proyecto';
$lang->install->processList['13'] = 'Monitoreo del proyecto';
$lang->install->processList['14'] = 'Gestión de riesgos';
$lang->install->processList['15'] = 'Gestión de cierre';
$lang->install->processList['16'] = 'Gestión cuantitativa de proyectos';
$lang->install->processList['17'] = 'Desarrollo de historias';
$lang->install->processList['18'] = 'Diseño y desarrollo';
$lang->install->processList['19'] = 'Implementación y pruebas';
$lang->install->processList['20'] = 'Prueba del sistema';
$lang->install->processList['21'] = 'Aceptación del cliente';
$lang->install->processList['22'] = 'Aseguramiento de la calidad';
$lang->install->processList['23'] = 'Gestión de la configuración';
$lang->install->processList['24'] = 'Análisis de métricas';
$lang->install->processList['25'] = 'Análisis de causas y resolución';
$lang->install->processList['26'] = 'Análisis de decisión';

$lang->install->basicmeasList['2'] = array('name' => 'Tamaño inicial de requerimientos de usuario del proyecto', 'unit' => 'Puntos de historia o puntos de función', 'definition' => 'Suma del tamaño de la versión de línea base de la primera especificación de requerimientos del CLIENTE de cada producto del proyecto');
$lang->install->basicmeasList['3'] = array('name' => 'Escala inicial de requerimientos de software del proyecto', 'unit' => 'Puntos de historia o puntos de función', 'definition' => 'Suma del tamaño de la primera versión de línea base de la especificación de requerimientos de software de cada producto del proyecto');
$lang->install->basicmeasList['4'] = array('name' => 'Escala en tiempo real de los requerimientos de usuario del proyecto', 'unit' => 'Puntos de historia o puntos de función', 'definition' => 'Tamaño real de los requerimientos de usuario del proyecto');
$lang->install->basicmeasList['5'] = array('name' => 'Escala en tiempo real de los requerimientos de software del proyecto', 'unit' => 'Puntos de historia o puntos de función', 'definition' => 'Escala real de los requerimientos de software del proyecto');
$lang->install->basicmeasList['6'] = array('name' => 'Tamaño estimado del proyecto', 'unit' => 'Puntos de historia o puntos de función', 'definition' => 'El tamaño estimado del proyecto cuando fue estimado originalmente');
$lang->install->basicmeasList['8'] = array('name' => 'Días de planificación de la fase de requerimientos del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de requerimientos del proyecto');
$lang->install->basicmeasList['9'] = array('name' => 'Número de días planificados en la fase de diseño del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de diseño del proyecto');
$lang->install->basicmeasList['10'] = array('name' => 'Número de días planificados en la fase de desarrollo del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de desarrollo del proyecto');
$lang->install->basicmeasList['11'] = array('name' => 'Número de días planificados en la fase de pruebas del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de pruebas del proyecto');
$lang->install->basicmeasList['12'] = array('name' => 'Días reales de la fase de requerimientos del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de requerimientos del proyecto');
$lang->install->basicmeasList['13'] = array('name' => 'Días reales de la fase de diseño del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de diseño del proyecto');
$lang->install->basicmeasList['14'] = array('name' => 'Cantidad real de días durante la fase de desarrollo del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de I+D del proyecto');
$lang->install->basicmeasList['15'] = array('name' => 'Cantidad real de días durante la fase de pruebas del proyecto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de pruebas del proyecto');
$lang->install->basicmeasList['26'] = array('name' => 'Días planificados por fase de requerimientos del producto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de requerimientos del producto');
$lang->install->basicmeasList['27'] = array('name' => 'Días planificados por etapa de diseño del producto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de diseño del producto');
$lang->install->basicmeasList['28'] = array('name' => 'Días planificados por fase de desarrollo del producto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de desarrollo del producto');
$lang->install->basicmeasList['29'] = array('name' => 'Días planificados por fase de pruebas del producto', 'unit' => 'Día', 'definition' => 'Suma de los días planificados de todas las fases de pruebas del producto');
$lang->install->basicmeasList['30'] = array('name' => 'Días reales de la etapa de requerimientos del producto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de requerimientos del producto');
$lang->install->basicmeasList['31'] = array('name' => 'Días reales de la etapa de diseño del producto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de diseño del producto');
$lang->install->basicmeasList['32'] = array('name' => 'Por días reales de la etapa de desarrollo del producto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de desarrollo del producto');
$lang->install->basicmeasList['33'] = array('name' => 'Por días reales de la fase de pruebas del producto', 'unit' => 'Día', 'definition' => 'Suma de los días reales de todas las fases de pruebas del producto');
$lang->install->basicmeasList['34'] = array('name' => 'Horas de trabajo estimadas en tiempo real de las tareas del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente para todas las tareas del proyecto');
$lang->install->basicmeasList['35'] = array('name' => 'Total de horas de trabajo estimadas en tiempo real de los requerimientos del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente para todas las tareas de requerimientos del proyecto');
$lang->install->basicmeasList['36'] = array('name' => 'Total de tiempo estimado en tiempo real del trabajo de diseño del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente para todas las tareas de diseño del proyecto');
$lang->install->basicmeasList['37'] = array('name' => 'Total de tiempo estimado en tiempo real del desarrollo del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente para todas las tareas de desarrollo del proyecto');
$lang->install->basicmeasList['38'] = array('name' => 'Total de tiempo estimado en tiempo real del trabajo de pruebas del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente para todas las tareas de pruebas del proyecto');
$lang->install->basicmeasList['39'] = array('name' => 'Horas-hombre reales consumidas por las tareas del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre reales consumidas por todas las tareas del proyecto');
$lang->install->basicmeasList['40'] = array('name' => 'Número real de horas-hombre consumidas por el trabajo de requerimientos del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre reales consumidas por todas las tareas de requerimientos del proyecto');
$lang->install->basicmeasList['41'] = array('name' => 'Número real de horas-hombre consumidas por el trabajo de diseño del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre reales consumidas por todas las tareas de diseño del proyecto');
$lang->install->basicmeasList['42'] = array('name' => 'Número real de horas-hombre consumidas por el trabajo de desarrollo del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre reales consumidas por todas las tareas de desarrollo del proyecto');
$lang->install->basicmeasList['43'] = array('name' => 'Número real de horas-hombre consumidas por el trabajo de pruebas del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre reales consumidas por todas las tareas de pruebas del proyecto');
$lang->install->basicmeasList['44'] = array('name' => 'Total de horas iniciales estimadas del trabajo de desarrollo del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas de trabajo estimadas inicialmente de todo el trabajo de desarrollo en la primera versión de línea base del plan del proyecto');
$lang->install->basicmeasList['45'] = array('name' => 'Total de horas iniciales estimadas del trabajo de diseño del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente de todo el trabajo de diseño en la primera versión de línea base del plan del proyecto');
$lang->install->basicmeasList['46'] = array('name' => 'Total de horas de trabajo iniciales estimadas de las pruebas del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente de todo el trabajo de pruebas en la primera versión de línea base del plan del proyecto');
$lang->install->basicmeasList['47'] = array('name' => 'Total de horas iniciales estimadas del trabajo requerido para el proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente de todo el trabajo de requerimientos en la primera versión de línea base del plan del proyecto');
$lang->install->basicmeasList['48'] = array('name' => 'Total de horas de trabajo iniciales estimadas de las tareas del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente para todas las tareas de la primera versión de línea base del plan del proyecto');
$lang->install->basicmeasList['49'] = array('name' => 'Número final estimado de horas de desarrollo del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas de trabajo estimadas inicialmente de todas las tareas de desarrollo en la última versión de línea base del plan del proyecto');
$lang->install->basicmeasList['50'] = array('name' => 'Total de horas de trabajo finales estimadas de los requerimientos del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas de trabajo estimadas inicialmente de todas las tareas de requerimientos en la última versión de línea base del plan del proyecto');
$lang->install->basicmeasList['51'] = array('name' => 'Número final estimado de horas de pruebas del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente de todas las tareas de pruebas en la última versión de línea base del plan del proyecto');
$lang->install->basicmeasList['52'] = array('name' => 'Total final estimado de horas de trabajo del diseño del proyecto', 'unit' => 'Hora','definition' => 'La suma de las horas-hombre estimadas inicialmente de todas las tareas de diseño en la última versión de línea base del plan del proyecto');
$lang->install->basicmeasList['53'] = array('name' => 'Total de horas de trabajo finales estimadas de las tareas del proyecto', 'unit' => 'Hora', 'definition' => 'La suma de las horas-hombre estimadas inicialmente para todas las tareas de la última versión de línea base del plan del proyecto');

$lang->install->selectedMode     = 'Modo de selección';
$lang->install->selectedModeTips = 'Puede ir a Administración - Personalizar - Modo para configurarlo más tarde.';

$lang->install->groupList['ADMIN']['name']        = 'Administración';
$lang->install->groupList['ADMIN']['desc']        = 'Administrador del sistema';
$lang->install->groupList['DEV']['name']          = 'Dev';
$lang->install->groupList['DEV']['desc']          = 'Desarrollador';
$lang->install->groupList['QA']['name']           = 'Prueba';
$lang->install->groupList['QA']['desc']           = 'Probador';
$lang->install->groupList['PM']['name']           = 'PM';
$lang->install->groupList['PM']['desc']           = 'Gerente del proyecto';
$lang->install->groupList['PO']['name']           = 'PO';
$lang->install->groupList['PO']['desc']           = 'Product Owner';
$lang->install->groupList['TD']['name']           = 'Gerente de desarrollo';
$lang->install->groupList['TD']['desc']           = 'Gerente de desarrollo';
$lang->install->groupList['PD']['name']           = 'PD';
$lang->install->groupList['PD']['desc']           = 'Director de producto';
$lang->install->groupList['QD']['name']           = 'QD';
$lang->install->groupList['QD']['desc']           = 'Director de pruebas';
$lang->install->groupList['TOP']['name']          = 'Gerente sénior';
$lang->install->groupList['TOP']['desc']          = 'Gerente sénior';
$lang->install->groupList['OTHERS']['name']       = 'Otros';
$lang->install->groupList['OTHERS']['desc']       = 'otros usuarios';
$lang->install->groupList['LIMITED']['name']      = 'Usuario restringido';
$lang->install->groupList['LIMITED']['desc']      = 'Grupo de usuarios restringido (solo edición de contenido relacionado)';
$lang->install->groupList['PROJECTADMIN']['name'] = 'Administrador del proyecto';
$lang->install->groupList['PROJECTADMIN']['desc'] = 'Los administradores del proyecto pueden gestionar los permisos del proyecto.';
$lang->install->groupList['LITEADMIN']['name']    = 'Administración';
$lang->install->groupList['LITEADMIN']['desc']    = 'Grupos de usuarios de gestión de operaciones';
$lang->install->groupList['LITEPROJECT']['name']  = 'Gestión de proyectos';
$lang->install->groupList['LITEPROJECT']['desc']  = 'Grupos de usuarios de gestión de operaciones';
$lang->install->groupList['LITETEAM']['name']     = 'Miembros del equipo';
$lang->install->groupList['LITETEAM']['desc']     = 'Grupos de usuarios de gestión de operaciones';

$lang->install->groupList['IPDPRODUCTPLAN']['name'] = 'Planificador de producto';
$lang->install->groupList['IPDDEMAND']['name']      = 'Analista de historias';
$lang->install->groupList['IPDPMT']['name']         = 'Miembros de PMT';
$lang->install->groupList['IPDADMIN']['name']       = 'Administradores';

$lang->install->groupList['DEVOPSADMIN']['name']     = 'ADMIN DEVOPS';
$lang->install->groupList['DEVOPSINSPECTOR']['name'] = 'INSPECTOR DEVOPS';
$lang->install->groupList['DEVOPSUSER']['name']      = 'DESARROLLADOR DEVOPS';

$lang->install->cronList[''] = 'Monitorear Cron';
$lang->install->cronList['moduleName=execution&methodName=computeBurn'] = 'Actualizar gráfico burndown';
$lang->install->cronList['moduleName=report&methodName=remind']         = 'Recordatorio diario de tareas';
$lang->install->cronList['moduleName=svn&methodName=run']               = 'Sincronizar SVN';
$lang->install->cronList['moduleName=git&methodName=run']               = 'Sincronizar GIT';
$lang->install->cronList['moduleName=backup&methodName=backup']         = 'Respaldar datos y archivos';
$lang->install->cronList['moduleName=mail&methodName=asyncSend']        = 'Enviar correos de forma asíncrona';
$lang->install->cronList['moduleName=webhook&methodName=asyncSend']     = 'Enviar webhook de forma asíncrona';
$lang->install->cronList['moduleName=admin&methodName=deleteLog']       = 'Eliminar registros vencidos';
$lang->install->cronList['moduleName=errorlog&methodName=deleteLog']    = 'Eliminar registros de errores vencidos';
$lang->install->cronList['moduleName=todo&methodName=createCycle']      = 'Crear pendientes recurrentes';
$lang->install->cronList['moduleName=ci&methodName=initQueue']          = 'Crear tareas recurrentes';
$lang->install->cronList['moduleName=ci&methodName=checkCompileStatus'] = 'Sincronizar estado de Jenkins';
$lang->install->cronList['moduleName=ci&methodName=exec']               = 'Ejecutar Jenkins';

$lang->install->dbProgress      = "Instalando tablas de la base de datos";
$lang->install->dbProgressLabel = 'Progreso';
$lang->install->dbExecutingTips = 'Espere. No actualice, apague ni cierre el sistema.';
$lang->install->dbFinish        = "Tablas de la base de datos instaladas correctamente";
$lang->install->dbFail          = 'Falló la instalación de las tablas de la base de datos. Verifique que la conexión de red sea estable, que la configuración de la base de datos sea correcta y que el usuario tenga permiso para crear tablas. También puede volver a la página anterior, seleccionar "Borrar datos existentes" e intentar de nuevo.';
$lang->install->success         = "¡Instalado!";
$lang->install->login           = 'Inicio de sesión de AXIS FLOW';
$lang->install->register        = 'Registro en la comunidad de ZenTao';

$lang->install->successLabel       = "<p>Ha instalado AXIS FLOW correctamente %s.</p>";
$lang->install->successNoticeLabel = "<p>Ha instalado AXIS FLOW %s.<strong class='text-danger'> Por favor elimine install.php</strong>.</p>";
$lang->install->congratulations    = "¡Felicitaciones! AXIS FLOW se instaló correctamente.";
$lang->install->joinZentao         = <<<EOT
<p>Nota: Para mantenerse al día con las últimas noticias de ZenTao, regístrese en la Comunidad ZenTao (<a href='https://www.zentao.net' class='alert-link' target='_blank'>www.zentao.net</a>).</p>
EOT;

$lang->install->product = array('chanzhi', 'zdoo', 'xuanxuan', 'ydisk', 'meshiot');

$lang->install->promotion = "Productos recomendados de la familia AXIS FLOW:";

$lang->install->chanzhi       = new stdclass();
$lang->install->chanzhi->name = 'ZSITE';
$lang->install->chanzhi->logo = 'images/main/chanzhi.ico';
$lang->install->chanzhi->url  = 'https://www.zsite.com';
$lang->install->chanzhi->desc = <<<EOD
<ul>
<li>Sistema profesional de portal de marketing empresarial</li>
<li>Rico en funciones, con una interfaz intuitiva y fácil de usar</li>
<li>Altamente optimizado para SEO, con atención a cada detalle</li>
<li>¡Código abierto y gratuito para uso comercial ilimitado!</li>
</ul>
EOD;

$lang->install->zdoo = new stdclass();
$lang->install->zdoo->name = 'Colaboración ZDOO';
$lang->install->zdoo->logo = 'images/main/zdoo.ico';
$lang->install->zdoo->url  = 'https://www.zdoo.com';
$lang->install->zdoo->desc = <<<EOD
<ul>
<li>CRM y seguimiento de pedidos</li>
<li>Tareas de proyecto, anuncios y documentos</li>
<li>Gestión de efectivo: ingresos y gastos</li>
<li>Foros, blogs y flujos de actividad</li>
</ul>
EOD;

$lang->install->ydisk = new stdclass();
$lang->install->ydisk->name = 'YDisk';
$lang->install->ydisk->logo = 'images/main/ydisk.ico';
$lang->install->ydisk->url  = 'http://www.ydisk.cn';
$lang->install->ydisk->desc = <<<EOD
<ul>
  <li>Autoalojado: se implementa en su propia máquina</li>
  <li>Almacenamiento ilimitado: depende del tamaño de su disco duro</li>
  <li>Transmisión rápida: tan rápida como lo permita su ancho de banda</li>
  <li>Seguro: 12 permisos para cualquier configuración estricta</li>
</ul>
EOD;

$lang->install->meshiot = new stdclass();
$lang->install->meshiot->name = 'MeshIoT';
$lang->install->meshiot->logo = 'images/main/meshiot.ico';
$lang->install->meshiot->url  = 'https://www.meshiot.com';
$lang->install->meshiot->desc = <<<EOD
<ul>
  <li>Rendimiento: una puerta de enlace puede monitorear 65.536 equipos</li>
  <li>Accesibilidad: protocolo de comunicación por radio único que cubre un radio de 2.500 m</li>
  <li>Sistema de atenuación: más de 200 sensores y monitores</li>
  <li>Batería disponible: no requiere cambios en ningún equipo de su sitio</li>
</ul>
EOD;

$lang->install->solution = new stdclass();
$lang->install->solution->skip        = 'Omitir';
$lang->install->solution->skipInstall = 'Omitir';
$lang->install->solution->log         = 'Registro de instalación';
$lang->install->solution->title       = 'Configuración de la aplicación de la plataforma CI&CD';
$lang->install->solution->progress    = 'Instalación de la plataforma CI&CD';
$lang->install->solution->desc        = 'Bienvenido a la plataforma CI&CD. Al instalar la plataforma, instalaremos simultáneamente las siguientes aplicaciones para ayudarle a comenzar rápidamente.';
$lang->install->solution->overMemory  = 'La memoria insuficiente impide la instalación simultánea. Se recomienda instalar las aplicaciones manualmente después de iniciar la plataforma.';

$lang->install->changeModes = [];
$lang->install->changeModes['create'] = 'Agregar';
$lang->install->changeModes['update'] = 'Actualizar';
$lang->install->changeModes['delete'] = 'Eliminar';

$lang->install->changeActions = [];
$lang->install->changeActions['createView']  = 'Crear vista de base de datos %VIEW%';
$lang->install->changeActions['dropView']    = 'Eliminar vista de base de datos %VIEW%';
$lang->install->changeActions['createTable'] = 'Crear tabla de base de datos %TABLE%';
$lang->install->changeActions['dropTable']   = 'Eliminar tabla de base de datos %TABLE%';
$lang->install->changeActions['renameTable'] = 'Renombrar la tabla de base de datos %OLD% a %NEW%';
$lang->install->changeActions['addField']    = 'Agregar el campo %FIELD% a la tabla %TABLE% de la base de datos';
$lang->install->changeActions['modifyField'] = 'Modificar el campo %FIELD% en la tabla de base de datos %TABLE%';
$lang->install->changeActions['dropField']   = 'Eliminar campo %FIELD% de la tabla de base de datos %TABLE%';
$lang->install->changeActions['renameField'] = 'Renombrar el campo %OLD% de la tabla %TABLE% a %NEW%';
$lang->install->changeActions['addIndex']    = 'Agregar el índice %INDEX% a la tabla %TABLE% de la base de datos';
$lang->install->changeActions['dropIndex']   = 'Eliminar índice %INDEX% de la tabla de base de datos %TABLE%';
$lang->install->changeActions['insertValue'] = 'Insertar datos en la tabla de base de datos %TABLE%';
$lang->install->changeActions['updateValue'] = 'Actualizar datos en la tabla de base de datos %TABLE%';
$lang->install->changeActions['deleteValue'] = 'Eliminar datos de la tabla de base de datos %TABLE%';
$lang->install->changeActions['other']       = 'Otras operaciones';
