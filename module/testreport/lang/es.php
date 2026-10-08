<?php
$lang->testreport->common       = 'Informe de pruebas';
$lang->testreport->id           = 'ID';
$lang->testreport->browse       = 'Informes de pruebas';
$lang->testreport->create       = 'Crear informe';
$lang->testreport->edit         = 'Editar informe';
$lang->testreport->delete       = 'Eliminar informe';
$lang->testreport->export       = 'Exportar';
$lang->testreport->exportAction = 'Exportar informe';
$lang->testreport->view         = 'Detalle del informe';
$lang->testreport->recreate     = 'Volver a crear';

$lang->testreport->title       = 'Título del informe';
$lang->testreport->product     = $lang->productCommon;
$lang->testreport->bugTitle    = 'Bug';
$lang->testreport->storyTitle  = 'Historia';
$lang->testreport->project     = $lang->projectCommon;
$lang->testreport->execution   = 'Ejecución';
$lang->testreport->object      = "{$lang->projectCommon}/Execution";
$lang->testreport->testtask    = 'Solicitud de prueba';
$lang->testreport->tasks       = $lang->testreport->testtask;
$lang->testreport->startEnd    = 'Inicio y fin';
$lang->testreport->owner       = 'Responsable';
$lang->testreport->members     = 'Usuarios';
$lang->testreport->begin       = 'Inicio';
$lang->testreport->end         = 'Fin';
$lang->testreport->stories     = 'Historia probada';
$lang->testreport->bugs        = 'Bug probado';
$lang->testreport->builds      = 'Información del Build';
$lang->testreport->goal        = $lang->projectCommon . ' Objetivo';
$lang->testreport->cases       = 'Caso';
$lang->testreport->bugInfo     = 'Distribución de Bugs';
$lang->testreport->report      = 'Resumen';
$lang->testreport->legacyBugs  = 'Bugs restantes';
$lang->testreport->createdBy   = 'Creado por';
$lang->testreport->createdDate = 'Fecha de creación';
$lang->testreport->objectID    = 'Objeto';
$lang->testreport->objectType  = 'Tipo de objeto';
$lang->testreport->profile     = 'Perfil';
$lang->testreport->value       = 'Valor';
$lang->testreport->none        = 'Ninguno';
$lang->testreport->all         = 'Todos los informes';
$lang->testreport->deleted     = 'Eliminado';
$lang->testreport->selectTask  = 'Crear informe por solicitud';

$lang->testreport->legendBasic       = 'Información básica';
$lang->testreport->legendStoryAndBug = 'Alcance de las pruebas';
$lang->testreport->legendBuild       = 'Rondas de pruebas';
$lang->testreport->legendCase        = 'Casos vinculados';
$lang->testreport->legendLegacyBugs  = 'Bugs restantes';
$lang->testreport->legendReport      = 'Informe';
$lang->testreport->legendComment     = 'Resumen';
$lang->testreport->legendMore        = 'Más';
$lang->testreport->date              = 'Fecha';

$lang->testreport->bugSeverityGroups   = 'Distribución de Bugs por severidad';
$lang->testreport->bugTypeGroups       = 'Distribución de Bugs por tipo';
$lang->testreport->bugStatusGroups     = 'Distribución de Bugs por estado';
$lang->testreport->bugOpenedByGroups   = 'Distribución de Bugs por reportante';
$lang->testreport->bugResolvedByGroups = 'Distribución de Bugs por resolutor';
$lang->testreport->bugResolutionGroups = 'Distribución de Bugs por resolución';
$lang->testreport->bugModuleGroups     = 'Distribución de Bugs por módulo';
$lang->testreport->bugStageGroups      = 'Distribución de Bugs por prioridad';
$lang->testreport->bugHandleGroups     = 'Distribución del procesamiento diario de Bugs';
$lang->testreport->legacyBugs          = 'Bugs restantes';
$lang->testreport->bugConfirmedRate    = 'Tasa de Bugs confirmados (Resolución corregida o pospuesta / estado resuelto o cerrado)';
$lang->testreport->bugCreateByCaseRate = 'Tasa de Bugs reportados desde casos (Bugs reportados en casos / Bugs nuevos)';

$lang->testreport->bugStageList = array();
$lang->testreport->bugStageList['generated'] = 'Bugs generados';
$lang->testreport->bugStageList['legacy']    = 'Bugs heredados';
$lang->testreport->bugStageList['resolved']  = 'Bugs resueltos';

$lang->testreport->featureBar['browse']['all'] = 'Todos';

$lang->testreport->caseSummary     = 'Total de <strong>%s</strong> casos. <strong>%s</strong> casos ejecutados. <strong>%s</strong> resultados generados. <strong>%s</strong> casos fallidos.';
$lang->testreport->buildSummary    = 'Se probaron <strong>%s</strong> builds.';
$lang->testreport->confirmDelete   = '¿Desea eliminar este informe?';
$lang->testreport->moreNotice      = "Se pueden extender más funciones consultando <a href='https://www.zentao.net/page/extension.html' target='_blank'>el manual de extensiones de ZenTao</a>, o puede contactarnos en support@zentaoalm.com para personalizaciones.";
$lang->testreport->exportNotice    = "Exportado por <a href='https://www.zentao.net' target='_blank' style='color:grey'>ZenTao</a>";
$lang->testreport->noReport        = "No se ha generado ningún informe. Seleccione una solicitud para generar un informe de pruebas.";
$lang->testreport->foundBugTip     = "Bugs encontrados en el período de este Build y cuyo Build afectado está en este período de pruebas.";
$lang->testreport->legacyBugTip    = "Bugs activos o Bugs que no se resolvieron en el período de pruebas.";
$lang->testreport->activatedBugTip = "Bugs reactivados durante la tarea de prueba.";
$lang->testreport->fromCaseBugTip  = "Bugs encontrados al ejecutar casos durante el período de pruebas.";
$lang->testreport->errorTrunk      = "No se puede crear un informe de pruebas para trunk. ¡Modifique el Build vinculado!";
$lang->testreport->noTestTask      = "No test requests for this {$lang->productCommon}, so no reports can be generated. Please go to {$lang->productCommon} which has test requests and then generate the report.";
$lang->testreport->noObjectID      = "No test request or {$lang->executionCommon} is selected, so no report can be generated.";
$lang->testreport->moreProduct     = "Testing reports can only be generated for the same {$lang->productCommon}.";
$lang->testreport->hiddenCase      = "Ocultar %s casos de uso";
$lang->testreport->goalTip         = "Descriptive information about the {$lang->execution->common} of this build";
$lang->testreport->runDateTips     = "Algunos registros de ejecución de casos exceden el rango de tiempo (último momento: %s), no se incluyen en el informe de pruebas";
$lang->testreport->ignore          = "Ignorar";

$lang->testreport->bugSummary = <<<EOD
Total <strong>%s</strong> Bugs reported <i class='icon icon-help text-light' data-placement='top' data-title="{$lang->testreport->foundBugTip}" data-type='black' data-toggle='tooltip'></i>，
<strong>%s</strong> Bugs remained unresolved <i class='icon icon-help text-light' data-placement='top' data-title="{$lang->testreport->legacyBugTip}" data-type='black' data-toggle='tooltip'></i>.
<strong>%s</strong> Bugs reactivated  <i class='icon icon-help text-light' data-placement='top' data-title="{$lang->testreport->activatedBugTip}" data-type='black' data-toggle='tooltip'></i>.
<strong>%s</strong> Bugs found from the running of cases <i class='icon icon-help text-light' data-placement='top' data-title="{$lang->testreport->fromCaseBugTip}" data-type='black' data-toggle='tooltip'></i>.
Bug Effective Rate: <strong>%s</strong>，Bugs reported from cases: <strong>%s</strong>.
EOD;
