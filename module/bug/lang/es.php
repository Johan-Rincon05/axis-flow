<?php
/**
 * The bug module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     bug
 * @version     $Id: en.php 4536 2013-03-02 13:39:37Z wwccss $
 * @link        https://www.zentao.net
 */
/* Fieldlist. */
$lang->bug->common           = 'Bug';
$lang->bug->plural           = 'Bugs';
$lang->bug->id               = 'ID';
$lang->bug->product          = $lang->productCommon;
$lang->bug->branch           = 'Branch/Platform';
$lang->bug->module           = 'Módulo';
$lang->bug->project          = $lang->projectCommon;
$lang->bug->execution        = $lang->execution->common;
$lang->bug->kanban           = 'Kanban';
$lang->bug->storyVersion     = "Versión de {$lang->SRCommon}";
$lang->bug->color            = 'Color';
$lang->bug->title            = 'Nombre';
$lang->bug->severity         = 'Severidad';
$lang->bug->pri              = 'Prioridad';
$lang->bug->type             = 'Tipo';
$lang->bug->os               = 'Sistema operativo';
$lang->bug->browser          = 'Navegador web';
$lang->bug->hardware         = 'Hardware';
$lang->bug->result           = 'Resultado';
$lang->bug->repo             = 'Repositorio vinculado';
$lang->bug->mr               = 'Solicitud de combinación';
$lang->bug->entry            = 'Ruta del código';
$lang->bug->lines            = 'Línea de código';
$lang->bug->v1               = 'Versión 1';
$lang->bug->v2               = 'Versión 2';
$lang->bug->issueKey         = 'Clave de incidencia de Sonarqube';
$lang->bug->repoType         = 'Tipo de repositorio';
$lang->bug->steps            = 'Pasos para reproducir';
$lang->bug->status           = 'Estado';
$lang->bug->subStatus        = 'Sub-status';
$lang->bug->activatedCount   = 'Cantidad de activaciones';
$lang->bug->activatedDate    = 'Activado el';
$lang->bug->confirmed        = 'Confirmado';
$lang->bug->toTask           = 'A Tarea';
$lang->bug->toStory          = "Convertir en {$lang->SRCommon}";
$lang->bug->feedbackBy       = 'Descubierto por';
$lang->bug->notifyEmail      = 'Correo del descubridor';
$lang->bug->mailto           = 'Enviar a';
$lang->bug->openedBy         = 'Reportante';
$lang->bug->openedDate       = 'Reportado el';
$lang->bug->openedBuild      = 'Versión afectada';
$lang->bug->assignedTo       = 'Asignado a';
$lang->bug->assignedToMe     = 'Asignado a mí';
$lang->bug->assignedDate     = 'Asignado el';
$lang->bug->resolvedBy       = 'Resuelto por';
$lang->bug->resolution       = 'Resolución';
$lang->bug->resolvedBuild    = 'Build corregido';
$lang->bug->resolvedDate     = 'Resuelto el';
$lang->bug->deadline         = 'Fecha de vencimiento';
$lang->bug->plan             = 'Plan vinculado';
$lang->bug->closedBy         = 'Cerrado por';
$lang->bug->closedDate       = 'Cerrado el';
$lang->bug->duplicateBug     = 'Bug duplicado';
$lang->bug->lastEditedBy     = 'Última edición por';
$lang->bug->caseVersion      = 'Versión del caso de prueba';
$lang->bug->testtask         = 'Solicitud de prueba';
$lang->bug->files            = 'Archivo';
$lang->bug->keywords         = 'Palabras clave';
$lang->bug->lastEditedDate   = 'Editado el';
$lang->bug->fromCase         = 'Caso de prueba de origen';
$lang->bug->toCase           = 'Generar caso de prueba';
$lang->bug->colorTag         = 'Etiqueta de color';
$lang->bug->fixedRate        = 'Tasa de corrección';
$lang->bug->noticefeedbackBy = 'Notificar al informante';
$lang->bug->selectProjects   = "Seleccionar {$lang->projectCommon}";
$lang->bug->nextStep         = 'Siguiente';
$lang->bug->noProject        = "No se seleccionó {$lang->projectCommon}.";
$lang->bug->noExecution      = "No se seleccionó {$lang->execution->common}.";
$lang->bug->story            = 'Historia';
$lang->bug->task             = 'Tarea';
$lang->bug->relatedBug       = 'Bugs relacionados';
$lang->bug->case             = 'Caso de prueba de origen';
$lang->bug->linkMR           = 'MRs relacionados';
$lang->bug->linkPR           = 'PRs relacionados';
$lang->bug->linkCommit       = 'PRs relacionados';
$lang->bug->productplan      = $lang->bug->plan;
$lang->bug->codeBranch       = 'Rama de código';
$lang->bug->unlinkBranch     = 'Desvincular rama de código';
$lang->bug->branchName       = 'Nombre de la rama';
$lang->bug->branchFrom       = 'Crear desde';
$lang->bug->codeRepo         = 'Repositorio de código';

$lang->bug->abbr = new stdclass();
$lang->bug->abbr->module         = 'Módulo';
$lang->bug->abbr->severity       = 'Severidad';
$lang->bug->abbr->status         = 'Estado';
$lang->bug->abbr->activatedCount = 'Cantidad de activaciones';
$lang->bug->abbr->confirmed      = 'Confirmar';
$lang->bug->abbr->openedBy       = 'Reportante';
$lang->bug->abbr->openedDate     = 'Reportado el';
$lang->bug->abbr->assignedTo     = 'Asignado a';
$lang->bug->abbr->resolvedBy     = 'Resolver';
$lang->bug->abbr->resolution     = 'Resolución';
$lang->bug->abbr->resolvedDate   = 'Resuelto el';
$lang->bug->abbr->deadline       = 'Fecha de vencimiento';
$lang->bug->abbr->lastEditedBy   = 'Editado por';
$lang->bug->abbr->lastEditedDate = 'Editado el';
$lang->bug->abbr->assignToMe     = 'Asignado a mí';
$lang->bug->abbr->openedByMe     = 'Reportados por mí';
$lang->bug->abbr->resolvedByMe   = 'Resueltos por mí';

/* Method list. */
$lang->bug->index              = 'Inicio de Bugs';
$lang->bug->browse             = 'Lista de Bugs';
$lang->bug->create             = 'Reportar bug';
$lang->bug->batchCreate        = 'Reportar por lote';
$lang->bug->createCase         = 'Crear caso de prueba';
$lang->bug->copy               = 'Copiar Bug';
$lang->bug->edit               = 'Editar Bug';
$lang->bug->batchEdit          = 'Editar por lote';
$lang->bug->view               = 'Detalles del Bug';
$lang->bug->delete             = 'Eliminar';
$lang->bug->deleteAction       = 'Eliminar Bug';
$lang->bug->confirm            = 'Confirmar';
$lang->bug->confirmAction      = 'Confirmar Bug';
$lang->bug->batchConfirm       = 'Confirmar por lote';
$lang->bug->assignTo           = 'Asignar';
$lang->bug->assignAction       = 'Asignado a';
$lang->bug->batchAssignTo      = 'Asignar por lote';
$lang->bug->resolve            = 'Resolver';
$lang->bug->resolveAction      = 'Resolver bug';
$lang->bug->batchResolve       = 'Resolver por lote';
$lang->bug->createAB           = 'Add';
$lang->bug->close              = 'Cerrar';
$lang->bug->closeAction        = 'Cerrar Bug';
$lang->bug->batchClose         = 'Cerrar por lote';
$lang->bug->activate           = 'Activar';
$lang->bug->activateAction     = 'Activar Bug';
$lang->bug->batchActivate      = 'Activar por lote';
$lang->bug->reportChart        = 'Informe';
$lang->bug->reportAction       = 'Informe de Bugs';
$lang->bug->export             = 'Exportar datos';
$lang->bug->exportAction       = 'Exportar Bugs';
$lang->bug->confirmStoryChange = "Confirmar cambio de {$lang->SRCommon}";
$lang->bug->search             = 'Buscar';
$lang->bug->batchChangeModule  = 'Editar módulos por lote';
$lang->bug->batchChangeBranch  = 'Editar ramas por lote';
$lang->bug->batchChangePlan    = 'Editar planes por lote';
$lang->bug->linkBugs           = 'Vincular Bug';
$lang->bug->unlinkBug          = 'Desvincular Bug';

/* Query condition list. */
$lang->bug->assignToMe         = 'Asignado a mí';
$lang->bug->openedByMe         = 'Reportados por mí';
$lang->bug->resolvedByMe       = 'Resueltos por mí';
$lang->bug->closedByMe         = 'Cerrado por mí';
$lang->bug->assignedByMe       = 'Asignado por mí';
$lang->bug->assignToNull       = 'Sin asignar';
$lang->bug->unResolved         = 'Sin resolver';
$lang->bug->toClosed           = 'Por cerrar';
$lang->bug->unclosed           = 'Abierto';
$lang->bug->unconfirmed        = 'Sin confirmar';
$lang->bug->longLifeBugs       = 'Obsoleto';
$lang->bug->postponedBugs      = 'Retrasado';
$lang->bug->overdueBugs        = 'Bug vencido';
$lang->bug->allBugs            = 'Todos';
$lang->bug->byQuery            = 'Buscar';
$lang->bug->needConfirm        = 'Historia cambiada';
$lang->bug->allProject         = 'Todos los proyectos';
$lang->bug->allProduct         = 'Todos ' . $lang->productCommon . 's';
$lang->bug->my                 = 'Mi';
$lang->bug->yesterdayResolved  = 'Bugs resueltos ayer ';
$lang->bug->yesterdayConfirmed = 'Bugs confirmados ayer ';
$lang->bug->yesterdayClosed    = 'Bugs cerrados ayer ';

$lang->bug->deleted        = 'Eliminado';
$lang->bug->labelConfirmed = 'Confirmado';
$lang->bug->labelPostponed = 'Retrasado';
$lang->bug->changed        = 'Cambiado';
$lang->bug->storyChanged   = 'Historia cambiada';
$lang->bug->ditto          = 'Ídem';

/* Page tags. */
$lang->bug->lblAssignedTo = 'Asignado a';
$lang->bug->lblMailto     = 'Enviar a';
$lang->bug->lblLastEdited = 'Última edición por';
$lang->bug->lblResolved   = 'Resuelto por';
$lang->bug->loadAll       = 'Cargar todo';
$lang->bug->createBuild   = 'Nuevo';

global $config;
/* Legend list. */
$lang->bug->legendBasicInfo             = 'Información básica';
$lang->bug->legendAttach                = 'Archivo';
$lang->bug->legendPRJExecStoryTask      = "{$lang->SRCommon}/{$lang->executionCommon}/Historia/Tarea";
$lang->bug->legendExecStoryTask         = "{$lang->SRCommon}/Story/Task";
$lang->bug->lblTypeAndSeverity          = 'Type/Severity';
$lang->bug->lblSystemBrowserAndHardware = 'System/Browser';
$lang->bug->legendSteps                 = 'Pasos para reproducir';
$lang->bug->legendComment               = 'Comentario';
$lang->bug->legendLife                  = 'Ciclo de vida del Bug';
$lang->bug->legendMisc                  = 'Varios';
$lang->bug->legendRelated               = 'Información relacionada';
$lang->bug->legendThisWeekCreated       = 'Nuevo esta semana';

/* Template. */
$lang->bug->tplStep   = "<p>[Steps]</p><p></p>";
$lang->bug->tplResult = "<p>[Results]</p><p></p>";
$lang->bug->tplExpect = "<p>[Expectations]</p><p></p>";

/* Value list for each field. */
$lang->bug->severityList[0] = '';
$lang->bug->severityList[1] = '1';
$lang->bug->severityList[2] = '2';
$lang->bug->severityList[3] = '3';
$lang->bug->severityList[4] = '4';

$lang->bug->priList[0] = '';
$lang->bug->priList[1] = '1';
$lang->bug->priList[2] = '2';
$lang->bug->priList[3] = '3';
$lang->bug->priList[4] = '4';

$lang->bug->osList['']         = '';
$lang->bug->osList['all']      = 'Todos';
$lang->bug->osList['windows']  = 'Windows';
$lang->bug->osList['win11']    = 'Windows 11';
$lang->bug->osList['win10']    = 'Windows 10';
$lang->bug->osList['win8']     = 'Windows 8';
$lang->bug->osList['win7']     = 'Windows 7';
$lang->bug->osList['winxp']    = 'Windows XP';
$lang->bug->osList['osx']      = 'Mac OS';
$lang->bug->osList['android']  = 'Android';
$lang->bug->osList['ios']      = 'IOS';
$lang->bug->osList['linux']    = 'Linux';
$lang->bug->osList['ubuntu']   = 'Ubuntu';
$lang->bug->osList['chromeos'] = 'Chrome OS';
$lang->bug->osList['fedora']   = 'Fedora';
$lang->bug->osList['unix']     = 'Unix';
$lang->bug->osList['others']   = 'Otros';

$lang->bug->browserList['']        = '';
$lang->bug->browserList['all']     = 'Todos';
$lang->bug->browserList['chrome']  = 'Chrome';
$lang->bug->browserList['edge']    = 'Edge';
$lang->bug->browserList['ie']      = 'Serie IE';
$lang->bug->browserList['ie11']    = 'IE11';
$lang->bug->browserList['ie10']    = 'IE10';
$lang->bug->browserList['ie9']     = 'IE9';
$lang->bug->browserList['ie8']     = 'IE8';
$lang->bug->browserList['firefox'] = 'Serie Firefox';
$lang->bug->browserList['opera']   = 'Serie Opera';
$lang->bug->browserList['safari']  = 'Safari';
$lang->bug->browserList['360']     = 'Serie 360';
$lang->bug->browserList['qq']      = 'Serie QQ';
$lang->bug->browserList['other']   = 'Otros';

$lang->bug->typeList['']                = '';
$lang->bug->typeList['codeerror']       = 'Error de código';
$lang->bug->typeList['config']          = 'Configuración';
$lang->bug->typeList['install']         = 'Instalación';
$lang->bug->typeList['security']        = 'Seguridad';
$lang->bug->typeList['performance']     = 'Rendimiento';
$lang->bug->typeList['standard']        = 'Especificación estándar';
$lang->bug->typeList['automation']      = 'Script de prueba';
$lang->bug->typeList['designdefect']    = 'Defecto de diseño';
$lang->bug->typeList['codeimprovement'] = 'Mejora de código';
$lang->bug->typeList['others']          = 'Otros';

$lang->bug->statusList['']         = '';
$lang->bug->statusList['active']   = 'Activado';
$lang->bug->statusList['resolved'] = 'Resuelto';
$lang->bug->statusList['closed']   = 'Cerrado';

$lang->bug->confirmedList[''] = '';
$lang->bug->confirmedList[1] = 'Sí';
$lang->bug->confirmedList[0] = 'No';

$lang->bug->resolutionList['']           = '';
$lang->bug->resolutionList['bydesign']   = 'Funciona como se diseñó';
$lang->bug->resolutionList['duplicate']  = 'Duplicado';
$lang->bug->resolutionList['external']   = '	Causa externa';
$lang->bug->resolutionList['fixed']      = 'Resuelto';
$lang->bug->resolutionList['notrepro']   = 'No reproducible';
$lang->bug->resolutionList['postponed']  = 'Pospuesto';
$lang->bug->resolutionList['willnotfix'] = 'No se corregirá';
$lang->bug->resolutionList['tostory']    = 'Convertir a historia';

/* Statistical statement. */
$lang->bug->report = new stdclass();
$lang->bug->report->common = 'Informe';
$lang->bug->report->select = 'Seleccionar tipo de informe';
$lang->bug->report->create = 'Crear informe';

$lang->bug->report->charts['bugsPerExecution']      = $lang->executionCommon . ' Cantidad de Bugs';
$lang->bug->report->charts['bugsPerBuild']          = 'Bugs por Build';
$lang->bug->report->charts['bugsPerModule']         = 'Bugs por módulo';
$lang->bug->report->charts['openedBugsPerDay']      = 'Bugs nuevos por día';
$lang->bug->report->charts['resolvedBugsPerDay']    = 'Bugs resueltos por día';
$lang->bug->report->charts['closedBugsPerDay']      = 'Bugs cerrados por día';
$lang->bug->report->charts['openedBugsPerUser']     = 'Bugs reportados por usuario';
$lang->bug->report->charts['resolvedBugsPerUser']   = 'Bugs resueltos por usuario';
$lang->bug->report->charts['closedBugsPerUser']     = 'Bugs cerrados por usuario';
$lang->bug->report->charts['bugsPerSeverity']       = 'Bugs por severidad';
$lang->bug->report->charts['bugsPerResolution']     = 'Bugs por resolución';
$lang->bug->report->charts['bugsPerStatus']         = 'Bugs por estado';
$lang->bug->report->charts['bugsPerActivatedCount'] = 'Bugs por cantidad de activaciones';
$lang->bug->report->charts['bugsPerPri']            = 'Bugs por prioridad';
$lang->bug->report->charts['bugsPerType']           = 'Bugs por tipo';
$lang->bug->report->charts['bugsPerAssignedTo']     = 'Bugs por responsable';
//$lang->bug->report->charts['bugLiveDays']        = 'Bug Handling Time Report';
//$lang->bug->report->charts['bugHistories']       = 'Bug Handling Steps Report';

$lang->bug->report->options = new stdclass();
$lang->bug->report->options->graph  = new stdclass();
$lang->bug->report->options->type   = 'pie';
$lang->bug->report->options->width  = 500;
$lang->bug->report->options->height = 140;

$lang->bug->report->bugsPerExecution      = new stdclass();
$lang->bug->report->bugsPerBuild          = new stdclass();
$lang->bug->report->bugsPerModule         = new stdclass();
$lang->bug->report->openedBugsPerDay      = new stdclass();
$lang->bug->report->resolvedBugsPerDay    = new stdclass();
$lang->bug->report->closedBugsPerDay      = new stdclass();
$lang->bug->report->openedBugsPerUser     = new stdclass();
$lang->bug->report->resolvedBugsPerUser   = new stdclass();
$lang->bug->report->closedBugsPerUser     = new stdclass();
$lang->bug->report->bugsPerSeverity       = new stdclass();
$lang->bug->report->bugsPerResolution     = new stdclass();
$lang->bug->report->bugsPerStatus         = new stdclass();
$lang->bug->report->bugsPerActivatedCount = new stdclass();
$lang->bug->report->bugsPerType           = new stdclass();
$lang->bug->report->bugsPerPri            = new stdclass();
$lang->bug->report->bugsPerAssignedTo     = new stdclass();
$lang->bug->report->bugLiveDays           = new stdclass();
$lang->bug->report->bugHistories          = new stdclass();

$lang->bug->report->bugsPerExecution->graph      = new stdclass();
$lang->bug->report->bugsPerBuild->graph          = new stdclass();
$lang->bug->report->bugsPerModule->graph         = new stdclass();
$lang->bug->report->openedBugsPerDay->graph      = new stdclass();
$lang->bug->report->resolvedBugsPerDay->graph    = new stdclass();
$lang->bug->report->closedBugsPerDay->graph      = new stdclass();
$lang->bug->report->openedBugsPerUser->graph     = new stdclass();
$lang->bug->report->resolvedBugsPerUser->graph   = new stdclass();
$lang->bug->report->closedBugsPerUser->graph     = new stdclass();
$lang->bug->report->bugsPerSeverity->graph       = new stdclass();
$lang->bug->report->bugsPerResolution->graph     = new stdclass();
$lang->bug->report->bugsPerStatus->graph         = new stdclass();
$lang->bug->report->bugsPerActivatedCount->graph = new stdclass();
$lang->bug->report->bugsPerType->graph           = new stdclass();
$lang->bug->report->bugsPerPri->graph            = new stdclass();
$lang->bug->report->bugsPerAssignedTo->graph     = new stdclass();
$lang->bug->report->bugLiveDays->graph           = new stdclass();
$lang->bug->report->bugHistories->graph          = new stdclass();

$lang->bug->report->bugsPerExecution->graph->xAxisName = $lang->executionCommon;
$lang->bug->report->bugsPerBuild->graph->xAxisName     = 'Build';
$lang->bug->report->bugsPerModule->graph->xAxisName    = 'Módulo';

$lang->bug->report->openedBugsPerDay->type             = 'bar';
$lang->bug->report->openedBugsPerDay->graph->xAxisName = 'Fecha';

$lang->bug->report->resolvedBugsPerDay->type             = 'bar';
$lang->bug->report->resolvedBugsPerDay->graph->xAxisName = 'Fecha';

$lang->bug->report->closedBugsPerDay->type             = 'bar';
$lang->bug->report->closedBugsPerDay->graph->xAxisName = 'Fecha';

$lang->bug->report->openedBugsPerUser->graph->xAxisName   = 'Usuario';
$lang->bug->report->resolvedBugsPerUser->graph->xAxisName = 'Usuario';
$lang->bug->report->closedBugsPerUser->graph->xAxisName   = 'Usuario';

$lang->bug->report->bugsPerSeverity->graph->xAxisName       = 'Severidad';
$lang->bug->report->bugsPerResolution->graph->xAxisName     = 'Resolución';
$lang->bug->report->bugsPerStatus->graph->xAxisName         = 'Estado';
$lang->bug->report->bugsPerActivatedCount->graph->xAxisName = 'Cantidad de activaciones';
$lang->bug->report->bugsPerPri->graph->xAxisName            = 'Prioridad';
$lang->bug->report->bugsPerType->graph->xAxisName           = 'Tipo';
$lang->bug->report->bugsPerAssignedTo->graph->xAxisName     = 'Responsable';
$lang->bug->report->bugLiveDays->graph->xAxisName           = 'Tiempo de resolución';
$lang->bug->report->bugHistories->graph->xAxisName          = 'Pasos de resolución';

/* Operating record. */
$lang->bug->action = new stdclass();
$lang->bug->action->resolved             = array('main' => '$date, resuelto por <strong>$actor</strong> y la resolución es <strong>$extra</strong> $appendLink.', 'extra' => 'resolutionList');
$lang->bug->action->tostory              = array('main' => '$date, convertido en <strong>Historia</strong> con ID <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->totask               = array('main' => '$date, importado como <strong>Tarea</strong> con ID <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->converttotask        = array('main' => '$date, convertido en <strong>Tarea</strong> con ID <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->linked2plan          = array('main' => '$date, vinculado al Plan <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->unlinkedfromplan     = array('main' => '$date, desvinculado del Plan <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->linked2build         = array('main' => '$date, vinculado al Build <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->unlinkedfrombuild    = array('main' => '$date, desvinculado del Build <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->unlinkedfromrelease  = array('main' => '$date, desvinculado del Lanzamiento <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->linked2release       = array('main' => '$date, vinculado al Lanzamiento <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->linked2revision      = array('main' => '$date, vinculado al Commit <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->unlinkedfromrevision = array('main' => '$date, desvinculado del Commit <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->linkrelatedbug       = array('main' => '$date, vinculado al Bug <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->bug->action->unlinkrelatedbug     = array('main' => '$date, desvinculado del Bug <strong>$extra</strong> por <strong>$actor</strong>.');

$lang->bug->featureBar['browse']['all']          = 'Todos';
$lang->bug->featureBar['browse']['unclosed']     = $lang->bug->unclosed;
$lang->bug->featureBar['browse']['openedbyme']   = $lang->bug->openedByMe;
$lang->bug->featureBar['browse']['assigntome']   = $lang->bug->assignToMe;
$lang->bug->featureBar['browse']['resolvedbyme'] = $lang->bug->resolvedByMe;
$lang->bug->featureBar['browse']['assignedbyme'] = $lang->bug->assignedByMe;
$lang->bug->featureBar['browse']['more']         = $lang->more;

$lang->bug->moreSelects['browse']['more']['unresolved']    = $lang->bug->unResolved;
$lang->bug->moreSelects['browse']['more']['unconfirmed']   = $lang->bug->unconfirmed;
$lang->bug->moreSelects['browse']['more']['assigntonull']  = $lang->bug->assignToNull;
$lang->bug->moreSelects['browse']['more']['longlifebugs']  = $lang->bug->longLifeBugs;
$lang->bug->moreSelects['browse']['more']['toclosed']      = $lang->bug->toClosed;
$lang->bug->moreSelects['browse']['more']['postponedbugs'] = $lang->bug->postponedBugs;
$lang->bug->moreSelects['browse']['more']['overduebugs']   = $lang->bug->overdueBugs;
$lang->bug->moreSelects['browse']['more']['needconfirm']   = $lang->bug->needConfirm;

$lang->bug->placeholder = new stdclass();
$lang->bug->placeholder->chooseBuilds = 'Seleccionar build';
$lang->bug->placeholder->newBuildName = 'Nombre del nuevo Build';
$lang->bug->placeholder->duplicate    = 'Ingrese las palabras clave.';

/* Interactive prompt. */
$lang->bug->notice = new stdclass();
$lang->bug->notice->summary               = "<strong>%s</strong> Bug(s) en esta página, <strong>%s</strong> sin resolver.";
$lang->bug->notice->unClosedSummary       = "Total de %s Bug(s) en esta página, %s abiertos.";
$lang->bug->notice->checkedSummary        = "{checked} elemento(s) seleccionado(s). Total de {total} elementos.";
$lang->bug->notice->confirmChangeProduct  = "Cambiar {$lang->productCommon} modificará {$lang->executionCommon}, {$lang->SRCommon} y las tareas vinculadas. ¿Seguro que desea continuar?";
$lang->bug->notice->confirmDelete         = '¿Seguro que desea eliminar este Bug?';
$lang->bug->notice->remindTask            = 'Este Bug se convirtió en una tarea. ¿Desea actualizar el estado de la tarea (ID: %s)?';
$lang->bug->notice->skipClose             = 'El Bug %s no está en estado "Resuelto" y no se puede cerrar. Se omitirá automáticamente.';
$lang->bug->notice->executionAccessDenied = "No tiene permiso para acceder a {$lang->executionCommon} a la que pertenece este Bug.";
$lang->bug->notice->confirmUnlinkBuild    = "Al cambiar el Build corregido se eliminará el vínculo con el Build anterior. ¿Seguro que desea desvincular este Bug de %s?";
$lang->bug->notice->noSwitchBranch        = 'El módulo del bug %s no está en la rama actual. Se omitirá automáticamente.';
$lang->bug->notice->confirmToStory        = 'El bug se cerrará automáticamente después de convertirse en historia. Motivo de cierre: Convertido a historia.';
$lang->bug->notice->productDitto          = "Este Bug y el anterior no pertenecen al mismo {$lang->productCommon}.";
$lang->bug->notice->noBug                 = 'Aún no hay Bugs.';
$lang->bug->notice->noModule              = '<div>No hay información de módulos disponible.</div><div>Configure los módulos de pruebas.</div>';
$lang->bug->notice->delayWarning          = "<strong class='text-danger'>Posponer por %s día(s)</strong>";
$lang->bug->notice->skipNotActive         = "El Bug %s ya está Resuelto o Cerrado y no se modificará.";

$lang->bug->error = new stdclass();
$lang->bug->error->notExist             = "Bug no encontrado.";
$lang->bug->error->cannotActivate       = 'Los Bugs que no están en estado "Resuelto" o "Cerrado" no se pueden activar.';
$lang->bug->error->stepsNotEmpty        = "Los pasos para reproducir no pueden estar vacíos.";
$lang->bug->error->duplicateBugNotExist = 'El Bug duplicado no existe.';
