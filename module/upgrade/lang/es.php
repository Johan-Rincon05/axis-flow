<?php
/**
 * The upgrade module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     upgrade
 * @version     $Id: en.php 5119 2013-07-12 08:06:42Z wyd621@gmail.com $
 * @link        https://www.zentao.net
 */
global $config;
$lang->upgrade->common          = 'Actualizar versión';
$lang->upgrade->welcome         = 'Bienvenido a la actualización de ZenTao';
$lang->upgrade->execute         = 'Actualización de versión';
$lang->upgrade->versionTips     = 'Actualizando a';
$lang->upgrade->changeTips      = '%s cambios de datos';
$lang->upgrade->progress        = 'Progreso';
$lang->upgrade->executedChanges = "Ejecutados: <span id='executedCount'>0</span> / %s";
$lang->upgrade->start           = 'Iniciar';
$lang->upgrade->result          = 'Actualizar estado';
$lang->upgrade->fail            = 'Falló la actualización. La versión actual de ZenTao es ';
$lang->upgrade->successTip      = 'Exitoso';
$lang->upgrade->success         = "<p>¡Felicitaciones! Su ZenTao se ha actualizado correctamente.</p>";
$lang->upgrade->tohome          = 'Ir a ZenTao';
$lang->upgrade->notice          = 'Aviso';
$lang->upgrade->checkExtension  = 'Verificar extensiones';
$lang->upgrade->consistency     = 'Verificación de consistencia';
$lang->upgrade->backupNotice    = <<<EOT
<p>Elevated database privileges are required. Please use an administrator account.</p>
<p>Warning: Back up your database before proceeding to prevent potential data loss.</p>
<pre class='leading-6 mt-1 p-3'>
1. Backups can be performed via GUI management tools.
2. Use the DIsql tool for backup.
$> BACKUP DATABASE BACKUPSET <span class='font-bold text-danger'>'filename'</span>;
The backup set directory "filename" will be generated in the default backup path upon completion.
The default path is defined by BAK_PATH in dm.ini. If BAK_PATH is not configured, the bak directory under SYSTEM_PATH is used by default.
This is the simplest backup command. For advanced options, please refer to the online backup syntax documentation.
</pre>
EOT;

if($config->db->driver == 'dm')
{
    $lang->upgrade->backupNotice = <<<EOT
<p>The upgrade requires high database privileges, please use the root user.</p>
<p>Please backup your database before updating ZenTao!</p>
<pre class='leading-6 mt-1 p-3'>
1. It can be backed up by graphical client tools.
2. Use DIsql tool to back up data.
   $> BACKUP DATABASE BACKUPSET <span class='font-bold text-danger'>'filename'</span>;
   After the statement is executed, a backup set directory named "filename" is generated in the default backup path.
   The default backup path is the path configured with BAK_PATH in dm.ini. If BAK_PATH is not configured, bak in SYSTEM_PATH is used by default.
   This is the simplest database backup statement,To set additional backup options, you need to understand the syntax of the online backup database.
</pre>
EOT;
}

$lang->upgrade->confirmBackup      = 'He respaldado la base de datos';
$lang->upgrade->setStatusFileTitle = 'Complete lo siguiente antes de actualizar';
$lang->upgrade->createWinFile      = 'Abra la terminal y ejecute: <span id="command" class="font-bold text-danger">echo > %s</span>';
$lang->upgrade->createLinuxFile    = 'Ejecute <span id="command" class="font-bold text-danger">touch %s</span> en la terminal.';
$lang->upgrade->deleteStatusFile   = 'También puede eliminar <span class="font-bold text-danger">%s</span> y crear un nuevo archivo <span class="font-bold text-danger">ok.txt</span> (déjelo vacío).';
$lang->upgrade->confirmStatusFile  = 'He leído y seguido las instrucciones anteriores.';
$lang->upgrade->safeDeleteFile     = 'Por seguridad del sistema, es necesario eliminar los archivos.';

$lang->upgrade->selectVersion = 'Seleccionar versión';
$lang->upgrade->copyCommand   = 'Copiar comando';
$lang->upgrade->copySuccess   = 'Copiado';
$lang->upgrade->copyFail      = 'Su navegador no admite copiar. Cópielo manualmente.';
$lang->upgrade->continue      = 'Continuar actualización';
$lang->upgrade->noteVersion   = "Asegúrese de seleccionar la versión correcta; de lo contrario, podrían perderse datos.";
$lang->upgrade->fromVersion   = 'Versión actual';
$lang->upgrade->toVersion     = 'Actualizar a';
$lang->upgrade->confirm       = 'Confirmar SQL';
$lang->upgrade->sureExecute   = 'Ejecutar';
$lang->upgrade->upgradingTips = 'Actualización en curso. Espere. ¡No actualice la página, ni apague o reinicie el equipo!';
$lang->upgrade->executeFailed = 'La solicitud de actualización se interrumpió. Actualice la página para reintentar. Los cambios completados se omitirán automáticamente y no se ejecutarán de nuevo.';

$lang->upgrade->dataProcess           = 'Proceso de datos';
$lang->upgrade->dataProcessTip        = 'El procesamiento de datos está en curso. ¡Espere y no actualice la página ni cierre el navegador!';
$lang->upgrade->dataProcessStepsTitle = 'Pasos';
$lang->upgrade->dataProcessProcessed  = 'Procesados: %s / %s';

$lang->upgrade->tableEngine = new stdClass();
$lang->upgrade->tableEngine->common  = 'Actualizar motor de tablas';
$lang->upgrade->tableEngine->change  = 'Actualizar el motor de la tabla de base de datos %s a InnoDB';
$lang->upgrade->tableEngine->todo    = 'Por actualizar';
$lang->upgrade->tableEngine->done    = 'Actualizado';
$lang->upgrade->tableEngine->failed  = 'Omitido';
$lang->upgrade->tableEngine->success = 'El motor de la tabla %s ha sido actualizado a InnoDB.';
$lang->upgrade->tableEngine->fail    = 'Se omitió la actualización del motor de la tabla %s.';
$lang->upgrade->tableEngine->busy    = 'La tabla %s está en uso. Reintentando...';

$lang->upgrade->charset = new stdClass();
$lang->upgrade->charset->common  = 'Actualizar juego de caracteres';
$lang->upgrade->charset->update  = 'Actualizar';
$lang->upgrade->charset->change  = 'Actualizar el juego de caracteres de la tabla de base de datos %s';
$lang->upgrade->charset->success = 'El juego de caracteres de la tabla %s ha sido actualizado.';
$lang->upgrade->charset->fail    = 'Se omitió la actualización del juego de caracteres de la tabla %s. Motivo: %s.';

$lang->upgrade->dbView = new stdClass();
$lang->upgrade->dbView->common     = 'Actualizar vistas de la base de datos';
$lang->upgrade->dbView->todo       = 'Actualizar';
$lang->upgrade->dbView->regenerate = 'Actualizar la vista de base de datos %s';

$lang->upgrade->noNeedProcess = 'Nada que procesar';
$lang->upgrade->forbiddenExt  = 'Las siguientes extensiones son incompatibles con la nueva versión y se han deshabilitado automáticamente:';
$lang->upgrade->updateFile    = 'Se requiere actualizar la información de los adjuntos.';
$lang->upgrade->showSQLLog    = 'Se detectaron inconsistencias en la base de datos. Intentando repararlas. A continuación se muestran las sentencias SQL de reparación:';
$lang->upgrade->noticeErrSQL  = 'Se detectaron inconsistencias en la base de datos y falló la reparación automática. Ejecute manualmente las siguientes sentencias SQL y luego actualice la página para volver a verificar.';
$lang->upgrade->execCommand   = 'Ejecute el comando anterior en el servidor y luego actualice la página.';
$lang->upgrade->afterExec     = 'Modifique la base de datos manualmente según los mensajes de error anteriores y luego actualice la página.';
$lang->upgrade->mergeProgram  = 'Importación de datos';
$lang->upgrade->mergeTips     = 'Consejos de migración de datos';
$lang->upgrade->toPMS15Guide  = 'Actualización a ZenTao Open Source v15';
$lang->upgrade->toPRO10Guide  = 'Actualización a ZenTao profession v10 ';
$lang->upgrade->toBIZ5Guide   = 'Actualización a ZenTao enterprise v5 ';
$lang->upgrade->toMAXGuide    = 'Actualización a la versión ZenTao ultimate';

$lang->upgrade->line            = 'Línea de producto';
$lang->upgrade->allLines        = "Todas las líneas de producto";
$lang->upgrade->program         = 'Programa y proyecto de destino';
$lang->upgrade->existProgram    = 'Programas existentes';
$lang->upgrade->existProject    = 'Proyectos existentes';
$lang->upgrade->existLine       = 'Líneas de producto existentes';
$lang->upgrade->product         = $lang->productCommon;
$lang->upgrade->project         = 'Iteración';
$lang->upgrade->repo            = 'Repositorio';
$lang->upgrade->mergeRepo       = 'Combinar repositorio';
$lang->upgrade->setProgram      = 'Asignar proyecto a programa';
$lang->upgrade->setProject      = "Assign {$lang->executionCommon} to Project";
$lang->upgrade->dataMethod      = 'Método de migración de datos';
$lang->upgrade->selectMergeMode = 'Seleccione un método de combinación de datos';
$lang->upgrade->mergeMode       = 'Método de fusión de datos:';
$lang->upgrade->begin           = 'Inicia el';
$lang->upgrade->end             = 'Termina el';
$lang->upgrade->unknownDate     = 'Proyectos sin programar';
$lang->upgrade->selectProject   = 'El proyecto de destino';
$lang->upgrade->programName     = 'Nombre del programa';
$lang->upgrade->projectName     = 'Nombre del proyecto';
$lang->upgrade->projectManage   = 'Administrar proyecto';
$lang->upgrade->compatibleEXT   = 'Compatibilidad de extensiones';
$lang->upgrade->fileName        = 'Nombre del archivo';
$lang->upgrade->list            = ' Lista';
$lang->upgrade->next            = 'Siguiente';
$lang->upgrade->back            = 'Volver';

$lang->upgrade->upgradeDocs    = 'Actualizar datos de documentos';
$lang->upgrade->upgradingDocs  = 'Actualizando documentos, espere...';
$lang->upgrade->upgradeDocsTip = 'Se encontraron %s elementos relacionados con documentos para actualizar';

$lang->upgrade->upgradeDocTemplates    = 'Actualizar datos de plantillas de documentos';
$lang->upgrade->upgradingDocTemplates  = 'Actualizando plantillas de documentos, espere...';
$lang->upgrade->upgradeDocTemplatesTip = 'Actualizando datos históricos de plantillas. Después podrá verlos y gestionarlos en la Plaza de plantillas.';

$lang->upgrade->weeklyReportTitle        = 'Semana % s (% s ~% s)';
$lang->upgrade->milestoneTitle           = 'Informe de hitos';
$lang->upgrade->upgradeProjectReports    = "Upgrade {$lang->projectCommon} Report Data";
$lang->upgrade->upgradingProjectReports  = "Upgrading {$lang->projectCommon} report data, please wait...";
$lang->upgrade->upgradeProjectReportsTip = "Found %s {$lang->projectCommon} report-related items to upgrade";

$lang->upgrade->newProgram        = 'Crear';
$lang->upgrade->editedName        = 'Renombrado a';
$lang->upgrade->projectEmpty      = 'El proyecto no puede estar vacío.';
$lang->upgrade->mergeSummary      = "Estimado usuario, hay %s elementos en su sistema pendientes de migrar.";
$lang->upgrade->productCount      = "%s {$lang->productCommon}";
$lang->upgrade->projectCount      = "%s {$lang->projectCommon}";
$lang->upgrade->mergeByProject    = "There are 2 data migration methods available. If your historical {$lang->projectCommon} are long-term, we recommend upgrading them as Projects.</br>If they are short-term, we recommend upgrading them as {$lang->executionCommon}.";
$lang->upgrade->mergeRepoTips     = "Combine los repositorios seleccionados en el producto seleccionado.";
$lang->upgrade->needBuild4Add     = 'Esta actualización requiere nuevos índices. Vaya a [Administración -> Sistema -> Reconstruir índice] para volver a crearlos.';
$lang->upgrade->needChangeEngine  = 'Algunas tablas aún no se han convertido al motor InnoDB. Continúe en [Admin -> Sistema -> Procesamiento de datos -> Motor de tablas].';
$lang->upgrade->needChangeCharset = 'Algunas tablas aún no se han convertido al juego de caracteres de destino. Continúe en [Admin -> Sistema -> Procesamiento de datos -> Juego de caracteres].';
$lang->upgrade->errorEngineInnodb = 'La base de datos actual no admite el motor InnoDB. Cambie a MyISAM e inténtelo de nuevo.';
$lang->upgrade->duplicateProject  = "Los nombres de proyecto deben ser únicos dentro de un programa. Cambie el nombre de los proyectos duplicados.";
$lang->upgrade->upgradeTips       = "Los datos históricos eliminados no se migrarán y no podrán restaurarse después de la actualización.";
$lang->upgrade->moveEXTFileFail   = 'La migración de archivos falló. Ejecute el comando anterior y actualice.';
$lang->upgrade->deleteDirTip      = 'Las siguientes carpetas interferirán con las funciones del sistema después de la actualización. Elimínelas.';
$lang->upgrade->errorNoProduct    = "Please select the {$lang->productCommon} to be merged.";
$lang->upgrade->errorNoExecution  = "Please select the {$lang->projectCommon} to be merged.";
$lang->upgrade->moveExtFileTip    = <<<EOT
<p>The new version will apply extension compatibility to historical customizations and plugins. To ensure these functions remain active, the related files must be migrated to extension/custom; otherwise, they will no longer work.</p>
<p>Please confirm if your system has any customizations or plugins. If not, you can uncheck the files below. If you are unsure, we recommend keeping them checked to avoid any issues.</p>
EOT;

$lang->upgrade->projectType['project']   = "Upgrade historical {$lang->projectCommon} as Projects";
$lang->upgrade->projectType['execution'] = "Upgrade historical {$lang->projectCommon} as {$lang->executionCommon}";

$lang->upgrade->createProjectTip = <<<EOT
<p>After the upgrade, each historical {$lang->projectCommon} will map directly to a new Project.</p>
<p>The system will create an {$lang->executionCommon} with the same name for each historical {$lang->projectCommon}. Tasks, stories, bugs, and other data will then be migrated into these corresponding {$lang->executionCommon}.</p>
EOT;

$lang->upgrade->createExecutionTip = <<<EOT
<p>The system will upgrade historical {$lang->projectCommon} as {$lang->executionCommon}.</p>
<p>After the upgrade, the data from historical {$lang->projectCommon} will be mapped to {$lang->executionCommon} under the new Projects.</p>
EOT;

$lang->upgrade->mergeModes = array();
$lang->upgrade->mergeModes['project']   = "Auto-merge data: Upgrade historical {$lang->projectCommon} as Projects";
$lang->upgrade->mergeModes['execution'] = "Auto-merge data: Upgrade historical {$lang->projectCommon} as {$lang->executionCommon}";
$lang->upgrade->mergeModes['manually']  = 'Combinar datos manualmente';

$lang->upgrade->mergeProjectTip   = "Historical {$lang->projectCommon} will be synchronized directly to the new Projects. Meanwhile, the system will create an {$lang->executionCommon} with the same name for each, and migrate all tasks, stories, bugs, and other data into the corresponding {$lang->executionCommon}.";
$lang->upgrade->mergeExecutionTip = "The system will automatically create Projects by year and merge historical {$lang->projectCommon} data into the corresponding Projects.";
$lang->upgrade->createProgramTip  = "Meanwhile, a default Program will be created to contain all {$lang->projectCommon}.";
$lang->upgrade->mergeManuallyTip  = 'Puede seleccionar manualmente el método de fusión de datos.';

$lang->upgrade->defaultGroup = 'Grupo predeterminado';

include dirname(__FILE__) . '/version.php';

$lang->upgrade->recoveryActions = new stdclass();
$lang->upgrade->recoveryActions->cancel = 'Cancelar';
$lang->upgrade->recoveryActions->review = 'Revisión';

$lang->upgrade->remark     = 'Notas';
$lang->upgrade->remarkDesc = 'También puede cambiar el modo en Administración -> Sistema -> Modo.';

$lang->upgrade->upgradingTip = 'Actualizando el sistema, espere...';

$lang->upgrade->addTraincoursePrivTips = "Para ayudar a los usuarios a aprender mejor la gestión de proyectos, hemos otorgado a todos los grupos de privilegios acceso a los cursos de la Academia y a las bibliotecas de práctica de forma predeterminada. Si no necesita esta función, puede deshabilitarla en Administración -> Sistema -> Activación de funciones.";

$lang->upgrade->storyStageList['']           = '';
$lang->upgrade->storyStageList['wait']       = 'En espera';
$lang->upgrade->storyStageList['planned']    = 'Planificado';
$lang->upgrade->storyStageList['projected']  = 'Proyectado';
$lang->upgrade->storyStageList['designing']  = 'Diseñando';
$lang->upgrade->storyStageList['designed']   = 'Diseñado';
$lang->upgrade->storyStageList['developing'] = 'Desarrollando';
$lang->upgrade->storyStageList['developed']  = 'Desarrollado';
$lang->upgrade->storyStageList['testing']    = 'Pruebas';
$lang->upgrade->storyStageList['tested']     = 'Probado';
$lang->upgrade->storyStageList['verified']   = 'Aceptado';
$lang->upgrade->storyStageList['rejected']   = 'Aceptación fallida';
$lang->upgrade->storyStageList['delivering'] = 'Entregando';
$lang->upgrade->storyStageList['delivered']  = 'Entregado';
$lang->upgrade->storyStageList['released']   = 'Lanzado';
$lang->upgrade->storyStageList['closed']     = 'Cerrado';

$lang->upgrade->flowFields['program']   = 'Programa';
$lang->upgrade->flowFields['product']   = 'Producto';
$lang->upgrade->flowFields['project']   = 'Proyecto';
$lang->upgrade->flowFields['execution'] = 'Ejecución';

$lang->upgrade->defaultCharterApprovalFlow = new stdclass();
$lang->upgrade->defaultCharterApprovalFlow->projectApproval = new stdclass();
$lang->upgrade->defaultCharterApprovalFlow->projectApproval->title = 'Flujo de inicio de proyecto';
$lang->upgrade->defaultCharterApprovalFlow->projectApproval->desc  = 'Diseñe el proceso de aprobación para solicitudes de inicio de proyecto.';

$lang->upgrade->defaultCharterApprovalFlow->completionApproval = new stdclass();
$lang->upgrade->defaultCharterApprovalFlow->completionApproval->title = 'Flujo de cierre de proyecto';
$lang->upgrade->defaultCharterApprovalFlow->completionApproval->desc  = 'Diseñe el proceso de aprobación para solicitudes de cierre de proyecto.';

$lang->upgrade->defaultCharterApprovalFlow->cancelProjectApproval = new stdclass();
$lang->upgrade->defaultCharterApprovalFlow->cancelProjectApproval->title = 'Flujo de cancelación de proyecto';
$lang->upgrade->defaultCharterApprovalFlow->cancelProjectApproval->desc  = 'Diseñe el proceso de aprobación para cancelar inicios de proyecto.';

$lang->upgrade->defaultCharterApprovalFlow->activateProjectApproval = new stdclass();
$lang->upgrade->defaultCharterApprovalFlow->activateProjectApproval->title = 'Flujo de reactivación de proyecto';
$lang->upgrade->defaultCharterApprovalFlow->activateProjectApproval->desc  = 'Diseñe el proceso de aprobación para reactivar inicios de proyecto.';

$lang->upgrade->deliverableModule['plan']   = 'Plan';
$lang->upgrade->deliverableModule['story']  = 'Historia';
$lang->upgrade->deliverableModule['design'] = 'Diseño';
$lang->upgrade->deliverableModule['test']   = 'Prueba';
$lang->upgrade->deliverableModule['other']  = 'Otro';

$lang->upgrade->reviewObjectList['PP']         = 'Plan del proyecto';
$lang->upgrade->reviewObjectList['QAP']        = 'Plan de aseguramiento de la calidad';
$lang->upgrade->reviewObjectList['CMP']        = 'Plan de gestión de la configuración';
$lang->upgrade->reviewObjectList['ITP']        = 'Plan de pruebas de integración';
$lang->upgrade->reviewObjectList['ERS']        = 'Descripción de la épica';
$lang->upgrade->reviewObjectList['URS']        = 'Descripción de la funcionalidad';
$lang->upgrade->reviewObjectList['SRS']        = 'Especificación de requerimientos del proyecto';
$lang->upgrade->reviewObjectList['HLDS']       = 'Descripción del diseño de alto nivel';
$lang->upgrade->reviewObjectList['DDS']        = 'Declaración de diseño detallado';
$lang->upgrade->reviewObjectList['DBDS']       = 'Declaración de diseño de base de datos';
$lang->upgrade->reviewObjectList['ADS']        = 'Declaración de diseño de interfaz';
$lang->upgrade->reviewObjectList['Code']       = 'Código';
$lang->upgrade->reviewObjectList['intergrate'] = 'Integrar casos de prueba';
$lang->upgrade->reviewObjectList['STP']        = 'Plan de pruebas del sistema';
$lang->upgrade->reviewObjectList['system']     = 'Casos de prueba del sistema';
$lang->upgrade->reviewObjectList['UM']         = 'Manual del usuario';

$lang->upgrade->baselineReview = array();
$lang->upgrade->baselineReview['baseline'] = 'Revisión de línea base';
$lang->upgrade->baselineReview['change']   = 'Revisión de cambios del proyecto';

$lang->upgrade->changeModes = [];
$lang->upgrade->changeModes['create'] = 'Add';
$lang->upgrade->changeModes['update'] = 'Actualizar';
$lang->upgrade->changeModes['delete'] = 'Eliminar';

$lang->upgrade->changeActions = [];
$lang->upgrade->changeActions['createView']  = 'Crear vista de base de datos %VIEW%';
$lang->upgrade->changeActions['dropView']    = 'Eliminar vista de base de datos %VIEW%';
$lang->upgrade->changeActions['createTable'] = 'Crear tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['dropTable']   = 'Eliminar tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['renameTable'] = 'Renombrar la tabla de base de datos %OLD% a %NEW%';
$lang->upgrade->changeActions['addField']    = 'Agregar el campo %FIELD% a la tabla %TABLE% de la base de datos';
$lang->upgrade->changeActions['modifyField'] = 'Modificar el campo %FIELD% en la tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['dropField']   = 'Eliminar campo %FIELD% de la tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['renameField'] = 'Renombrar el campo %OLD% de la tabla %TABLE% a %NEW%';
$lang->upgrade->changeActions['createIndex'] = 'Agregar el índice %INDEX% a la tabla %TABLE% de la base de datos';
$lang->upgrade->changeActions['dropIndex']   = 'Eliminar índice %INDEX% de la tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['insertValue'] = 'Insertar datos en la tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['updateValue'] = 'Actualizar datos en la tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['deleteValue'] = 'Eliminar datos de la tabla de base de datos %TABLE%';
$lang->upgrade->changeActions['method']      = 'Ejecutar el método %METHOD% del módulo %MODULE%';
$lang->upgrade->changeActions['other']       = 'Otras operaciones';

$lang->upgrade->upgradeFeatureDesc = 'La versión 22.4 integra potentes capacidades de DevOps 4.0';

$lang->upgrade->upgradeFeatures = array();
$lang->upgrade->upgradeFeatures[1][] = array('icon' => 'rocket',    'title' => 'Actualización integral', 'desc' => 'El motor GitFox de desarrollo propio integrado conecta los pipelines de CI/CD para habilitar la gestión del ciclo de vida completo del código.');
$lang->upgrade->upgradeFeatures[1][] = array('icon' => 'code-fork', 'title' => 'Tipos de rama',          'desc' => 'Tipos de rama personalizables con reglas configurables para una gestión estandarizada.');
$lang->upgrade->upgradeFeatures[1][] = array('icon' => 'bell',      'title' => 'Webhook',               'desc' => 'La configuración de Webhook a nivel de repositorio facilita la integración con sistemas externos para notificaciones en tiempo real.');
$lang->upgrade->upgradeFeatures[1][] = array('icon' => 'checkbox',  'title' => 'Escaneo de código',         'desc' => 'Incluye más de 2000 reglas de escaneo integradas que detectan automáticamente incumplimientos de especificaciones y riesgos potenciales para un control riguroso de la calidad del código.');
$lang->upgrade->upgradeFeatures[2][] = array('icon' => 'code',      'title' => 'Gestión de código',       'desc' => 'Compatibilidad total con la gestión de repositorios Git y la visualización de repositorios SVN.');
$lang->upgrade->upgradeFeatures[2][] = array('icon' => 'review',    'title' => 'Revisión de código',           'desc' => 'Se pueden iniciar revisiones en cada push o solicitud de fusión para controlar estrictamente la calidad del código.');
$lang->upgrade->upgradeFeatures[2][] = array('icon' => 'flow',      'title' => 'Capacidades del pipeline', 'desc' => 'Admite importar pipelines populares (p. ej., Jenkins) con varios modos de activación configurables.');
$lang->upgrade->upgradeFeatures[2][] = array('icon' => 'stack',     'title' => 'Repositorio de artefactos',   'desc' => 'Gestión de artefactos multinivel y multitipo. Interconecta los flujos de CI/CD para garantizar una transferencia de artefactos segura y eficiente.');
