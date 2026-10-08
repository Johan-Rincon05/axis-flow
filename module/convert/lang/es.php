<?php
/**
 * The convert module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     convert
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->convert->common  = 'Importado';
$lang->convert->index   = 'Página principal';

$lang->convert->start   = 'Iniciar';
$lang->convert->desc    = <<<EOT
<p>Bienvenido al Asistente de migración del sistema. Esta herramienta le ayudará a migrar datos de sistemas externos a ZenTao.</p>
<strong>La migración de datos implica riesgos potenciales. Antes de continuar, le recomendamos encarecidamente respaldar su base de datos y los archivos de datos asociados. Asegúrese también de que ningún otro usuario esté realizando operaciones en el sistema durante el proceso de migración</strong>
EOT;

$lang->convert->setConfig      = 'Configuración del sistema de origen';
$lang->convert->setBugfree     = 'Configuración de Bugfree';
$lang->convert->setRedmine     = 'Configuración de Redmine';
$lang->convert->checkBugFree   = 'Verificar Bugfree';
$lang->convert->checkRedmine   = 'Verificar Redmine';
$lang->convert->convertRedmine = 'Migrar desde Redmine';
$lang->convert->convertBugFree = 'Migrar desde BugFree';

$lang->convert->selectSource     = 'Seleccione el sistema de origen y su versión.';
$lang->convert->mustSelectSource = "Se requiere un sistema de origen.";

$lang->convert->direction             = "Migrar incidencia de {$lang->executionCommon}";
$lang->convert->questionTypeOfRedmine = 'Tipo de incidencia en Redmine';
$lang->convert->aimTypeOfZentao       = 'Tipo de incidencia en AXIS FLOW';

$lang->convert->jiraUserMode = array();
$lang->convert->jiraUserMode['account'] = 'Usar cuenta de Jira';
$lang->convert->jiraUserMode['email']   = 'Usar correo de Jira';

$lang->convert->confluenceUserMode = array();
$lang->convert->confluenceUserMode['account'] = 'Usar cuenta de Confluence';
$lang->convert->confluenceUserMode['email']   = 'Usar correo de Confluence';

$lang->convert->directionList['bug']   = 'Bug';
$lang->convert->directionList['task']  = 'Tarea';
$lang->convert->directionList['story'] = $lang->SRCommon;

$lang->convert->sourceList['BugFree'] = array('bugfree_1' => '1.x', 'bugfree_2' => '2.x');
$lang->convert->sourceList['Redmine'] = array('Redmine_1.1' => '1.1');

$lang->convert->setting     = 'Configuración';
$lang->convert->checkConfig = 'Verificar configuraciones';
$lang->convert->add         = 'Agregar';
$lang->convert->title       = 'Título';

$lang->convert->ok          = '<span class="text-success"><i class="icon-check-sign"></i> Aprobado </span>';
$lang->convert->fail        = '<span class="text-danger"><i class="icon-remove-sign"></i> Fallido</span>';

$lang->convert->dbHost      = 'Servidor de base de datos';
$lang->convert->dbPort      = 'Puerto del servidor';
$lang->convert->dbUser      = 'Nombre de usuario de la base de datos';
$lang->convert->dbPassword  = 'Contraseña de la base de datos';
$lang->convert->dbName      = 'Base de datos de %s';
$lang->convert->dbCharset   = 'Codificación de la base de datos de %s';
$lang->convert->dbPrefix    = 'Prefijo de tabla de %s';
$lang->convert->installPath = 'Directorio raíz de instalación de %s';

$lang->convert->checkDB    = 'Base de datos';
$lang->convert->checkTable = 'Tabla';
$lang->convert->checkPath  = 'Ruta de instalación';

$lang->convert->execute    = 'Iniciar migración';
$lang->convert->item       = 'Elementos';
$lang->convert->count      = 'Conteo';
$lang->convert->info       = 'Detalles';

$lang->convert->bugfree = new stdclass();
$lang->convert->bugfree->users      = 'Usuario';
$lang->convert->bugfree->executions = $lang->executionCommon;
$lang->convert->bugfree->modules    = 'Módulo';
$lang->convert->bugfree->bugs       = 'Bug';
$lang->convert->bugfree->cases      = 'Caso de prueba';
$lang->convert->bugfree->results    = 'Resultado de la prueba';
$lang->convert->bugfree->actions    = 'Historial';
$lang->convert->bugfree->files      = 'Adjuntos';

$lang->convert->redmine = new stdclass();
$lang->convert->redmine->users        = 'Usuario';
$lang->convert->redmine->groups       = 'Grupo de usuarios';
$lang->convert->redmine->products     = $lang->productCommon;
$lang->convert->redmine->executions   = $lang->executionCommon;
$lang->convert->redmine->stories      = 'Historia';
$lang->convert->redmine->tasks        = 'Tarea';
$lang->convert->redmine->bugs         = 'Bug';
$lang->convert->redmine->productPlans = $lang->productCommon . 'Plan';
$lang->convert->redmine->teams        = 'Equipo';
$lang->convert->redmine->releases     = 'Lanzamiento';
$lang->convert->redmine->builds       = 'Build';
$lang->convert->redmine->docLibs      = 'Biblioteca de documentos';
$lang->convert->redmine->docs         = 'Documentos';
$lang->convert->redmine->files        = 'Adjuntos';

$lang->convert->errorFileNotExits  = 'No se encontró el archivo %s.';
$lang->convert->errorUserExists    = 'El usuario %s ya existe.';
$lang->convert->errorGroupExists   = 'El grupo %s ya existe.';
$lang->convert->errorBuildExists   = 'El Build %s ya existe.';
$lang->convert->errorReleaseExists = 'El lanzamiento %s ya existe.';
$lang->convert->errorCopyFailed    = 'No se pudo copiar el archivo %s.';
$lang->convert->importFailed       = 'Error al importar. Actualice la página e intente de nuevo.';

$lang->convert->setParam = 'Configure los elementos de coincidencia de la migración.';

$lang->convert->statusType = new stdclass();
$lang->convert->priType    = new stdclass();

$lang->convert->aimType           = 'Tipos de incidencia';
$lang->convert->statusType->bug   = 'Tipo de estado (estado del bug)';
$lang->convert->statusType->story = 'Tipo de estado (estado de la historia)';
$lang->convert->statusType->task  = 'Tipo de estado (estado de la tarea)';
$lang->convert->priType->bug      = 'Tipo de prioridad (estado del bug)';
$lang->convert->priType->story    = 'Tipo de prioridad (estado de la historia)';
$lang->convert->priType->task     = 'Tipo de prioridad (estado de la tarea)';

$lang->convert->issue = new stdclass();
$lang->convert->issue->redmine = 'Redmine';
$lang->convert->issue->zentao  = 'AXIS FLOW';
$lang->convert->issue->goto    = 'Asignar a';

$lang->convert->jira = new stdclass();
$lang->convert->jira->method           = 'Seleccionar método de migración';
$lang->convert->jira->back             = 'Volver';
$lang->convert->jira->next             = 'Siguiente';
$lang->convert->jira->importFromDB     = 'Importación de base de datos';
$lang->convert->jira->importFromFile   = 'Importación de archivo';
$lang->convert->jira->importFromAPI    = 'Importación de API';
$lang->convert->jira->mapJira2Zentao   = 'Asignar Jira a AXIS FLOW';
$lang->convert->jira->database         = 'Base de datos de Jira';
$lang->convert->jira->domain           = 'Dominio de Jira';
$lang->convert->jira->admin            = 'Cuenta de administrador de Jira';
$lang->convert->jira->token            = 'Contraseña/Token de Jira';
$lang->convert->jira->apiToken         = 'Token de Jira';
$lang->convert->jira->dbNameNotice     = "Ingrese el nombre de la base de datos de Jira.";
$lang->convert->jira->importNotice     = 'Advertencia: la importación de datos conlleva riesgos. Asegúrese de completar los siguientes pasos en orden antes de fusionar.';
$lang->convert->jira->accountNotice    = 'Para las cuentas de correo, el texto antes del símbolo "@" se usará como nombre de usuario. Los caracteres que excedan el límite de 30 se truncarán.';
$lang->convert->jira->userExceeds      = 'El límite de licencia actual del sistema es de %s usuarios. Verifique que el total de usuarios después de la importación no exceda este límite, ya que el proceso de importación se cancelará si lo excede.';
$lang->convert->jira->apiError         = 'No se puede conectar a la API de Jira. Verifique su dominio de Jira, nombre de usuario y token de API.';
$lang->convert->jira->dbDesc           = 'Ideal para instancias de Jira autoalojadas (Server o Data Center) con acceso a la base de datos.';
$lang->convert->jira->fileDesc         = 'Ideal para Jira Cloud o cuando el acceso a la base de datos está restringido.';
$lang->convert->jira->apiDesc          = 'Ideal para Jira Cloud o cuando no se puede acceder a la base de datos ni a los archivos del servidor.';
$lang->convert->jira->jiraObject       = 'Incidencias de Jira';
$lang->convert->jira->zentaoObject     = 'Objetos de AXIS FLOW';
$lang->convert->jira->jiraLinkType     = 'Relaciones de Jira';
$lang->convert->jira->zentaoLinkType   = 'Relaciones de AXIS FLOW';
$lang->convert->jira->jiraResolution   = 'Resolución de Jira';
$lang->convert->jira->zentaoResolution = 'Resolución de AXIS FLOW';
$lang->convert->jira->zentaoReason     = 'Motivo de cierre de historia de AXIS FLOW';
$lang->convert->jira->jiraStatus       = 'Estado de incidencias de Jira';
$lang->convert->jira->storyStatus      = 'Estado de historia de AXIS FLOW';
$lang->convert->jira->storyStage       = 'Fase de historia de AXIS FLOW';
$lang->convert->jira->bugStatus        = 'Estado de Bug de AXIS FLOW';
$lang->convert->jira->taskStatus       = 'Estado de tarea de AXIS FLOW';
$lang->convert->jira->objectField      = 'Mapeo de campos';
$lang->convert->jira->objectStatus     = 'Mapeo de estados';
$lang->convert->jira->objectAction     = 'Mapeo de acciones';
$lang->convert->jira->objectResolution = 'Mapeo de resoluciones';
$lang->convert->jira->jiraField        = 'Campo de Jira %s';
$lang->convert->jira->jiraStatus       = 'Estado de Jira %s';
$lang->convert->jira->jiraAction       = 'Acción de Jira %s';
$lang->convert->jira->jiraResolution   = 'Resolución de Jira %s';
$lang->convert->jira->zentaoField      = 'Campo de %s en AXIS FLOW';
$lang->convert->jira->zentaoStatus     = 'Estado de %s en AXIS FLOW';
$lang->convert->jira->zentaoStage      = 'Fase de %s en AXIS FLOW';
$lang->convert->jira->zentaoAction     = 'Acción de %s en AXIS FLOW';
$lang->convert->jira->zentaoReason     = 'Motivo de cierre de %s en AXIS FLOW';
$lang->convert->jira->zentaoResolution = 'Resolución de %s en AXIS FLOW';
$lang->convert->jira->initJiraUser     = 'Establecer usuarios de Jira';
$lang->convert->jira->importJira       = 'Seleccionar método de importación';
$lang->convert->jira->start            = 'Iniciar migración';

$lang->convert->jira->dbNameEmpty        = 'El nombre de la base de datos de Jira es obligatorio.';
$lang->convert->jira->invalidDB          = 'Nombre de base de datos no válido.';
$lang->convert->jira->invalidTable       = 'Esta base de datos no es una base de datos de Jira.';
$lang->convert->jira->notReadAndWrite    = 'Directorio no encontrado o acceso denegado. Cree %s con permisos de lectura/escritura.';
$lang->convert->jira->notExistEntities   = 'El archivo %s no existe.';
$lang->convert->jira->passwordNotice     = 'Establezca la contraseña predeterminada para los usuarios migrados a AXIS FLOW. Más adelante los usuarios podrán actualizar sus contraseñas en AXIS FLOW.';
$lang->convert->jira->groupNotice        = 'Establezca el grupo de permisos predeterminado para los usuarios migrados a AXIS FLOW.';
$lang->convert->jira->mapObjectNotice    = 'Al definir el mapeo de campos, si se selecciona “Crear como nuevo flujo de trabajo”, se creará automáticamente un nuevo objeto de flujo de trabajo al importar.';
$lang->convert->jira->mapFieldNotice     = 'Los campos integrados de Jira se asociaron automáticamente. Defina las asignaciones de los campos personalizados. Si se selecciona “Crear nuevo”, se crearán nuevos campos al importar; los campos sin asignar no se importarán.';
$lang->convert->jira->mapStatusNotice    = 'Al definir el mapeo de estados, los estados sin mapear se asignarán automáticamente a %s después de la migración.';
$lang->convert->jira->mapReasonNotice    = 'Al definir el mapeo de resoluciones, si se selecciona “Crear nuevo”, se generarán nuevas resoluciones durante la migración. Las resoluciones sin mapear tomarán por defecto el valor “Hecho”.';
$lang->convert->jira->mapRelationNotice  = 'Al definir el mapeo de relaciones, si se selecciona “Crear nuevo”, se crearán automáticamente nuevos tipos de vínculo al importar. Las relaciones sin mapear no se importarán.';
$lang->convert->jira->changeItems        = "Se actualizó %s — valor anterior: “%s”, valor nuevo: “%s.”";
$lang->convert->jira->passwordDifferent  = 'Las contraseñas no coinciden.';
$lang->convert->jira->passwordEmpty      = 'La contraseña no puede estar vacía.';
$lang->convert->jira->passwordLess       = 'La contraseña debe tener al menos seis caracteres.';
$lang->convert->jira->importSuccessfully = 'Migración de Jira completada.';
$lang->convert->jira->getDataResult      = "Se obtuvieron datos de <strong class='text-danger'>%s</strong>. Se procesaron <strong class='%scount'>%s</strong> registros de datos；";
$lang->convert->jira->getDataSuccess     = 'Datos de Jira obtenidos y procesados. Importación de datos de Jira en curso.';
$lang->convert->jira->importResult       = "Se importaron <strong class='text-danger'>%s</strong> entradas de datos y se procesaron <strong class='%s count'>%s</strong> registros.";
$lang->convert->jira->importing          = 'Importación de datos en curso; no salga de esta página.';
$lang->convert->jira->importingAB        = 'Migrando datos...';
$lang->convert->jira->imported           = 'Migración de datos completada.';
$lang->convert->jira->restore            = 'La migración anterior no se completó. ¿Desea continuar desde donde se quedó?';
$lang->convert->jira->noCustomeFields    = 'Este objeto no tiene campos que requieran configuración. Haga clic en Siguiente.';

$lang->convert->jira->zentaoObjectList['']            = '';
$lang->convert->jira->zentaoObjectList['epic']        = 'Épica';
$lang->convert->jira->zentaoObjectList['requirement'] = 'Funcionalidad';
$lang->convert->jira->zentaoObjectList['story']       = 'Historia';
$lang->convert->jira->zentaoObjectList['task']        = 'Tarea';
$lang->convert->jira->zentaoObjectList['testcase']    = 'Caso de prueba';
$lang->convert->jira->zentaoObjectList['bug']         = 'Bug';

$lang->convert->jira->zentaoLinkTypeList['subTaskLink']  = 'Tarea padre-hija';
$lang->convert->jira->zentaoLinkTypeList['subStoryLink'] = 'Historia padre-hija';
$lang->convert->jira->zentaoLinkTypeList['duplicate']    = 'Duplicado';
$lang->convert->jira->zentaoLinkTypeList['relates']      = 'Relación mutua';

$lang->convert->jira->steps['object']     = 'Mapeo de objetos';
$lang->convert->jira->steps['objectData'] = 'Mapeo de datos de objetos';
$lang->convert->jira->steps['relation']   = 'Mapeo global de relaciones';
$lang->convert->jira->steps['user']       = 'Migrar usuario de Jira';
$lang->convert->jira->steps['confirme']   = 'Confirmación de datos de migración';

$lang->convert->jira->importSteps['db'][1]   = 'Respalde las bases de datos de AXIS FLOW y de Jira.';
$lang->convert->jira->importSteps['db'][2]   = 'Evite usar AXIS FLOW durante la importación para prevenir problemas de rendimiento del servidor. Asegúrese de que no haya otros usuarios activos en el sistema durante el proceso.';
$lang->convert->jira->importSteps['db'][3]   = 'Importe la base de datos de Jira en la instancia de MySQL utilizada por AXIS FLOW y asígnele un nombre distinto al de la base de datos de AXIS FLOW.';
$lang->convert->jira->importSteps['db'][4]   = "Coloque el directorio de adjuntos de Jira <strong class='text-danger'>attachments</strong> en <strong class='text-danger'>%s</strong> y asegúrese de que el servidor de AXIS FLOW tenga suficiente espacio en disco.";
$lang->convert->jira->importSteps['db'][5]   = "Después de completar los pasos anteriores, ingrese el nombre de la base de datos de Jira para continuar.";

$lang->convert->jira->importSteps['file'][1] = 'Respalde la base de datos de AXIS FLOW y los archivos de Jira.';
$lang->convert->jira->importSteps['file'][2] = 'Evite usar AXIS FLOW durante la importación para prevenir problemas de rendimiento del servidor. Asegúrese de que no haya otros usuarios activos en el sistema durante el proceso.';
$lang->convert->jira->importSteps['file'][3] = "Coloque el archivo de respaldo de Jira <strong class='text-danger'>entities.xml</strong> en <strong class='text-danger'>%s</strong> y otorgue permisos de lectura y escritura a ese directorio.";
$lang->convert->jira->importSteps['file'][4] = "Coloque el directorio de adjuntos de Jira <strong class='text-danger'>attachments</strong> en <strong class='text-danger'>%s</strong> y asegúrese de que el servidor de AXIS FLOW tenga suficiente espacio en disco.";
$lang->convert->jira->importSteps['file'][5] = "Ingrese su dominio actual de Jira, la cuenta de administrador y la contraseña o token para garantizar la integridad de los datos.";
$lang->convert->jira->importSteps['file'][6] = "Haga clic en Siguiente después de completar los pasos anteriores.";

$lang->convert->jira->importSteps['api'][1] = 'Respaldar la base de datos de ZenTao.';
$lang->convert->jira->importSteps['api'][2] = 'Evite usar ZenTao durante la importación para prevenir problemas de rendimiento del servidor. Asegúrese de que no haya otros usuarios activos en el sistema durante el proceso.';
$lang->convert->jira->importSteps['api'][3] = 'Ingrese el nombre de dominio, la cuenta de administrador y la contraseña/Token del entorno actual de Jira.';
$lang->convert->jira->importSteps['api'][4] = "Una vez completados los pasos anteriores, haga clic en Siguiente.";

$lang->convert->jira->objectList['user']       = 'Usuario';
$lang->convert->jira->objectList['project']    = 'Proyecto';
$lang->convert->jira->objectList['issue']      = 'Incidencia';
$lang->convert->jira->objectList['build']      = 'Build';
$lang->convert->jira->objectList['issuelink']  = 'Relación';
$lang->convert->jira->objectList['worklog']    = 'Registro de trabajo';
$lang->convert->jira->objectList['action']     = 'Comentario';
$lang->convert->jira->objectList['changeitem'] = 'Historial de cambios';
$lang->convert->jira->objectList['file']       = 'Archivo';

$lang->convert->jira->buildinFields = array();
$lang->convert->jira->buildinFields['summary']              = array('name'=> 'Título',           'jiraField' => 'summary',              'control' => 'input',        'optionType' => 'custom', 'type' => 'varchar',    'length' => '255', 'buildin' => false);
$lang->convert->jira->buildinFields['pri']                  = array('name'=> 'Prioridad',        'jiraField' => 'priority',             'control' => 'select',       'optionType' => 'custom', 'type' => 'int',        'length' => '3', 'buildin' => false);
$lang->convert->jira->buildinFields['resolution']           = array('name'=> 'Resolución',      'jiraField' => 'resolution',           'control' => 'select',       'optionType' => 'custom', 'type' => 'varchar',    'length' => '255', 'buildin' => false);
$lang->convert->jira->buildinFields['reporter']             = array('name'=> 'Reportante',        'jiraField' => 'reporter',             'control' => 'select',       'optionType' => 'user',   'type' => 'varchar',    'length' => '255');
$lang->convert->jira->buildinFields['duedate']              = array('name'=> 'Fecha de vencimiento',        'jiraField' => 'duedate',              'control' => 'date',         'optionType' => 'custom', 'type' => 'date',       'length' => '0', 'buildin' => false);
$lang->convert->jira->buildinFields['resolutiondate']       = array('name'=> 'Fecha de resolución', 'jiraField' => 'resolutiondate',       'control' => 'datetime',     'optionType' => 'custom', 'type' => 'datetime',   'length' => '0', 'buildin' => false);
$lang->convert->jira->buildinFields['votes']                = array('name'=> 'Votos',           'jiraField' => 'votes',                'control' => 'integer',      'optionType' => 'custom', 'type' => 'int',        'length' => '6');
$lang->convert->jira->buildinFields['environment']          = array('name'=> 'Entorno',     'jiraField' => 'environment',          'control' => 'textarea',     'optionType' => 'custom', 'type' => 'text',       'length' => '0');
$lang->convert->jira->buildinFields['timeoriginalestimate'] = array('name'=> 'Estimado',       'jiraField' => 'timeoriginalestimate', 'control' => 'decimal',      'optionType' => 'custom', 'type' => 'decimal',    'length' => '0');
$lang->convert->jira->buildinFields['timespent']            = array('name'=> 'Costo',            'jiraField' => 'timespent',            'control' => 'decimal',      'optionType' => 'custom', 'type' => 'decimal',    'length' => '0');
$lang->convert->jira->buildinFields['desc']                 = array('name'=> 'Descripción',     'jiraField' => 'description',          'control' => 'richtext',     'optionType' => 'custom', 'type' => 'mediumtext', 'length' => '0', 'buildin' => false);
