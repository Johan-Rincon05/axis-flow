<?php
/**
 * The execution module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     execution
 * @version     $Id: en.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */
/* Fields. */
$lang->execution->allExecutions       = 'Todos ' . $lang->execution->common . 's';
$lang->execution->allExecutionAB      = 'Lista de ejecuciones';
$lang->execution->id                  = $lang->executionCommon . ' ID';
$lang->execution->type                = $lang->executionCommon . ' Tipo';
$lang->execution->name                = "{$lang->executionCommon} Name";
$lang->execution->code                = "{$lang->executionCommon} Code";
$lang->execution->projectName         = $lang->projectCommon;
$lang->execution->project             = $lang->projectCommon;
$lang->execution->execId              = "{$lang->execution->common} ID";
$lang->execution->execName            = "{$lang->execution->common} Name";
$lang->execution->execCode            = "{$lang->execution->common} Code";
$lang->execution->execType            = 'Tipo de ejecución';
$lang->execution->lifetime            = $lang->projectCommon . ' Duración';
$lang->execution->attribute           = 'Tipo de fase';
$lang->execution->percent             = 'Carga de trabajo %';
$lang->execution->milestone           = 'Hito';
$lang->execution->parent              = $lang->projectCommon;
$lang->execution->path                = 'Ruta';
$lang->execution->grade               = 'Nivel';
$lang->execution->output              = 'Salida';
$lang->execution->version             = 'Versión';
$lang->execution->parentVersion       = 'Versión padre';
$lang->execution->planDuration        = 'Duración del plan';
$lang->execution->realDuration        = 'Duración real';
$lang->execution->openedVersion       = 'Versión de apertura';
$lang->execution->lastEditedBy        = 'Editado por última vez por';
$lang->execution->lastEditedDate      = 'Fecha de última edición';
$lang->execution->suspendedDate       = 'Fecha de suspensión';
$lang->execution->vision              = 'Visión';
$lang->execution->displayCards        = 'Máximo de tarjetas por columna';
$lang->execution->fluidBoard          = 'Ancho de la columna';
$lang->execution->stage               = 'Fase';
$lang->execution->pri                 = 'Prioridad';
$lang->execution->openedBy            = 'Abierto por';
$lang->execution->openedDate          = 'Fecha de apertura';
$lang->execution->closedBy            = 'Cerrado por';
$lang->execution->closedDate          = 'Fecha de cierre';
$lang->execution->canceledBy          = 'Cancelado por';
$lang->execution->canceledDate        = 'Fecha de cancelación';
$lang->execution->begin               = 'Inicio planificado';
$lang->execution->end                 = 'Fin planificado';
$lang->execution->dateRange           = 'Duración del plan';
$lang->execution->realBeganAB         = 'Inicio real';
$lang->execution->realEndAB           = 'Fin real';
$lang->execution->teamCount           = 'número de personas';
$lang->execution->realBegan           = 'Inicio real';
$lang->execution->realEnd             = 'Fin real';
$lang->execution->to                  = 'A';
$lang->execution->days                = ' Días';
$lang->execution->day                 = ' Días';
$lang->execution->workHour            = ' Horas';
$lang->execution->workHourUnit        = 'h';
$lang->execution->totalHours          = ' Horas disponibles';
$lang->execution->totalDays           = ' Días disponibles';
$lang->execution->status              = $lang->executionCommon . ' Estado';
$lang->execution->execStatus          = 'Estado';
$lang->execution->subStatus           = 'Subestado';
$lang->execution->desc                = "{$lang->executionCommon} Description";
$lang->execution->execDesc            = 'Descripción';
$lang->execution->owner               = 'Responsable';
$lang->execution->PO                  = "{$lang->executionCommon} Owner";
$lang->execution->PM                  = "{$lang->executionCommon} Manager";
$lang->execution->execPM              = "Responsable de la ejecución";
$lang->execution->QD                  = 'Gerente de pruebas';
$lang->execution->RD                  = 'Responsable de lanzamientos';
$lang->execution->release             = 'Lanzamiento';
$lang->execution->acl                 = 'Control de acceso';
$lang->execution->auth                = 'Privilegios';
$lang->execution->teamName            = 'Nombre del equipo';
$lang->execution->teamSetting         = 'Configuración del equipo';
$lang->execution->updateOrder         = 'Posición';
$lang->execution->order               = "Rank {$lang->executionCommon}";
$lang->execution->orderAB             = "Posición";
$lang->execution->products            = "Link {$lang->productCommon}";
$lang->execution->whitelist           = 'Lista blanca';
$lang->execution->addWhitelist        = 'Agregar lista blanca';
$lang->execution->unbindWhitelist     = 'Quitar de la lista blanca';
$lang->execution->totalEstimate       = 'Estimaciones';
$lang->execution->totalConsumed       = 'Costo';
$lang->execution->totalLeft           = 'Izquierda';
$lang->execution->progress            = ' Progreso';
$lang->execution->hours               = 'Estimado: %s, Costo: %s, Restante: %s.';
$lang->execution->viewBug             = 'Bugs';
$lang->execution->noProduct           = "No {$lang->productCommon} yet.";
$lang->execution->noStory             = "Aún no hay historias.";
$lang->execution->createStory         = "Crear historia";
$lang->execution->storyTitle          = "Nombre de la historia";
$lang->execution->storyView           = "Detalle de la historia";
$lang->execution->all                 = "All {$lang->executionCommon}s";
$lang->execution->undone              = 'Sin finalizar ';
$lang->execution->unclosed            = 'Sin cerrar';
$lang->execution->closedExecution     = 'Ejecución cerrada';
$lang->execution->typeDesc            = "OPS {$lang->executionCommon} has no {$lang->SRCommon}, Bug, Build, or Test features.";
$lang->execution->mine                = 'Mine: ';
$lang->execution->involved            = 'Mío';
$lang->execution->other               = 'Otros';
$lang->execution->deleted             = 'Eliminado';
$lang->execution->delayed             = 'Retrasado';
$lang->execution->product             = $lang->execution->products;
$lang->execution->readjustTime        = "Adjust {$lang->executionCommon} Begin and End";
$lang->execution->readjustTask        = 'Ajustar inicio y fin de la tarea';
$lang->execution->effort              = 'Esfuerzo';
$lang->execution->storyEstimate       = 'Estimación de la historia';
$lang->execution->newEstimate         = 'Nueva estimación';
$lang->execution->reestimate          = 'Reestimar';
$lang->execution->selectRound         = 'Seleccionar ronda';
$lang->execution->average             = 'Promedio';
$lang->execution->relatedMember       = 'Equipo';
$lang->execution->member              = 'Miembro';
$lang->execution->watermark           = 'Exportado por AXIS FLOW';
$lang->execution->burnXUnit           = '(Date)';
$lang->execution->burnYUnit           = '(Hours)';
$lang->execution->count               = '(Count)';
$lang->execution->waitTasks           = 'Tareas en espera';
$lang->execution->viewByUser          = 'Por usuario';
$lang->execution->oneProduct          = "Only one stage can be linked {$lang->productCommon}";
$lang->execution->noLinkProduct       = "Not linked {$lang->productCommon}!";
$lang->execution->recent              = 'Visitas recientes: ';
$lang->execution->noTeam              = 'Por el momento no hay miembros del equipo';
$lang->execution->or                  = ' or ';
$lang->execution->selectProject       = 'Seleccione ' . $lang->projectCommon;
$lang->execution->unfoldClosed        = 'Desplegar cerrados';
$lang->execution->editName            = 'Editar nombre';
$lang->execution->setWIP              = 'Configuración de WIP';
$lang->execution->sortColumn          = 'Orden de tarjetas Kanban';
$lang->execution->batchCreateStory    = "Batch create {$lang->SRCommon}";
$lang->execution->batchCreateTask     = 'Crear tarea por lote';
$lang->execution->kanbanNoLinkProduct = "Kanban not linked {$lang->productCommon}";
$lang->execution->myTask              = "Mi tarea";
$lang->execution->list                = 'Lista';
$lang->execution->allProject          = 'Todos';
$lang->execution->method              = 'Método';
$lang->execution->sameAsParent        = "Igual que el padre";
$lang->execution->selectStoryPlan     = 'Seleccionar plan';
$lang->execution->parentStage         = 'Etapa padre';

/* Fields of zt_team. */
$lang->execution->root          = 'Raíz';
$lang->execution->estimate      = 'Estimación';
$lang->execution->estimateHours = 'Estimación';
$lang->execution->consumed      = 'Consumido';
$lang->execution->consumedHours = 'Costo';
$lang->execution->left          = 'Izquierda';
$lang->execution->leftHours     = 'Izquierda';

$lang->execution->copyTeamTip        = "copy {$lang->projectCommon}/{$lang->execution->common} team members";
$lang->execution->daysGreaterProject = 'Los días no pueden ser mayores que los días de la ejecución 『%s』';
$lang->execution->errorHours         = 'Horas/Día no puede ser mayor que『24』';
$lang->execution->agileplusMethodTip = "When creating executions in an Agile Plus {$lang->projectCommon}, both {$lang->executionCommon} and Kanban management methods are supported.";
$lang->execution->typeTip            = "Bajo la etapa padre de tipo 'mixto' se pueden crear subetapas de otros tipos, mientras que en los demás niveles padre-hijo el tipo es consistente.";
$lang->execution->waterfallTip       = "In the Waterfall {$lang->projectCommon} or in the Waterfall + {$lang->projectCommon},";
$lang->execution->progressTip        = 'Progreso total = Consumido / (Consumido + Restante)';
$lang->execution->limitedTip         = "Limited users can only edit tasks that are relevant to them and cannot create new tasks. Relevant tasks include those assigned to them, completed tasks, canceled tasks, closed tasks, and the last edited tasks, but exclude those copied to them. \nIf a user was not a limited user before but is now classified as one, they will still have permissions for tasks they created in the past.";
$lang->execution->stageFrozenTip     = 'Una vez establecida la línea base de la etapa, no se permite %s.';
$lang->execution->createChildStage   = 'crear etapa hija';
$lang->execution->ganttDrag          = 'Arrastrar';
$lang->execution->frozenTip          = 'La etapa %s ha sido congelada y no se podrá editar.';
$lang->execution->createTaskTip1     = 'No se pueden crear tareas para una historia padre.';
$lang->execution->createTaskTip2     = 'Solo se pueden crear tareas para historias de desarrollo activas.';

$lang->execution->start    = 'Iniciar';
$lang->execution->activate = 'Activar';
$lang->execution->putoff   = 'Retraso';
$lang->execution->suspend  = 'Suspender';
$lang->execution->close    = 'Cerrar';
$lang->execution->export   = 'Exportar';
$lang->execution->next     = "Siguiente";

$lang->execution->endList[7]   = '1 semana';
$lang->execution->endList[14]  = '2 semanas';
$lang->execution->endList[31]  = '1 mes';
$lang->execution->endList[62]  = '2 meses';
$lang->execution->endList[93]  = '3 meses';
$lang->execution->endList[186] = '6 meses';
$lang->execution->endList[365] = '1 año';

$lang->execution->lifeTimeList['short'] = "Short-Term";
$lang->execution->lifeTimeList['long']  = "Long-Term";
$lang->execution->lifeTimeList['ops']   = "CI&CD";

$lang->execution->cfdTypeList['story'] = "View by {$lang->SRCommon}";
$lang->execution->cfdTypeList['task']  = "Ver por tarea";
$lang->execution->cfdTypeList['bug']   = "Ver por Bug";

$lang->team->account    = 'Usuario';
$lang->team->realname   = 'Nombre';
$lang->team->role       = 'Rol';
$lang->team->roleAB     = 'Mi rol';
$lang->team->join       = 'Unido';
$lang->team->hours      = 'Hours/day';
$lang->team->days       = 'Día';
$lang->team->totalHours = 'Total de horas';

$lang->team->limited            = 'Usuario limitado';
$lang->team->limitedList['yes'] = 'Sí';
$lang->team->limitedList['no']  = 'No';

$lang->execution->basicInfo = 'Información básica';
$lang->execution->otherInfo = 'Otra información';

/* Field value list. */
$lang->execution->statusList['wait']      = 'En espera';
$lang->execution->statusList['doing']     = 'En curso';
$lang->execution->statusList['suspended'] = 'Suspendido';
$lang->execution->statusList['closed']    = 'Cerrado';

$lang->execution->aclList['open']    = "Inherited {$lang->projectCommon} ACL (for who can access the current {$lang->projectCommon})";
$lang->execution->aclList['private'] = "Private (for team members and {$lang->projectCommon} stakeholders)";

$lang->execution->kanbanAclList['open']    = "Inherited {$lang->projectCommon}";
$lang->execution->kanbanAclList['private'] = 'Privado';

$lang->execution->storyPoint = 'Punto de historia';

$lang->execution->burnByList['left']       = 'Ver por horas restantes';
$lang->execution->burnByList['estimate']   = "Ver por horas planificadas";
$lang->execution->burnByList['storyPoint'] = 'Ver por puntos de historia';

/* Method list. */
$lang->execution->index                     = "{$lang->executionCommon} Home";
$lang->execution->task                      = 'Lista de tareas';
$lang->execution->groupTask                 = 'Vista de grupo';
$lang->execution->story                     = 'Lista de historias';
$lang->execution->qa                        = 'QA';
$lang->execution->bug                       = 'Lista de Bugs';
$lang->execution->testcase                  = 'Lista de casos de prueba';
$lang->execution->dynamic                   = 'Recientes';
$lang->execution->latestDynamic             = 'Recientes';
$lang->execution->build                     = 'Lista de Builds';
$lang->execution->testtask                  = 'Solicitud';
$lang->execution->burn                      = 'Burndown';
$lang->execution->computeBurn               = 'Actualizar';
$lang->execution->computeCFD                = 'Calcular diagramas de flujo acumulado';
$lang->execution->fixFirst                  = 'Editar estimaciones del primer día';
$lang->execution->team                      = 'Miembros';
$lang->execution->doc                       = 'Documento';
$lang->execution->doclib                    = 'Biblioteca de documentos';
$lang->execution->manageProducts            = 'Vinculado ' . $lang->productCommon . 's';
$lang->execution->linkStory                 = 'Vincular historias';
$lang->execution->linkStoryByPlan           = 'Vincular historias por plan';
$lang->execution->linkPlan                  = 'Planes vinculados';
$lang->execution->plans                     = $lang->execution->linkPlan;
$lang->execution->unlinkStoryTasks          = 'Desvincular';
$lang->execution->linkedProducts            = "Linked {$lang->productCommon}s";
$lang->execution->unlinkedProducts          = "Unlinked {$lang->productCommon}s";
$lang->execution->view                      = "Detalle de la ejecución";
$lang->execution->startAction               = "Iniciar ejecución";
$lang->execution->activateAction            = "Activar ejecución";
$lang->execution->delayAction               = "Retrasar ejecución";
$lang->execution->suspendAction             = "Suspender ejecución";
$lang->execution->closeAction               = "Cerrar ejecución";
$lang->execution->testtaskAction            = "Solicitud de ejecución";
$lang->execution->teamAction                = "Miembros de la ejecución";
$lang->execution->kanbanAction              = "Kanban de ejecución";
$lang->execution->printKanbanAction         = "Imprimir Kanban";
$lang->execution->treeAction                = "Vista de árbol de ejecuciones";
$lang->execution->exportAction              = "Exportar ejecución";
$lang->execution->computeBurnAction         = "Actualizar burndown";
$lang->execution->create                    = "Create {$lang->executionCommon}";
$lang->execution->createExec                = "Create {$lang->execution->common}";
$lang->execution->createAction              = "Create {$lang->execution->common}";
$lang->execution->copyExec                  = "Copy {$lang->execution->common}";
$lang->execution->copy                      = "Copy {$lang->executionCommon}";
$lang->execution->delete                    = "Delete {$lang->executionCommon}";
$lang->execution->deleteAB                  = "Eliminar ejecución";
$lang->execution->browse                    = "{$lang->executionCommon} List";
$lang->execution->edit                      = "Edit {$lang->executionCommon}";
$lang->execution->editAction                = "Editar ejecución";
$lang->execution->batchEdit                 = "Editar";
$lang->execution->batchEditAction           = "Editar por lote";
$lang->execution->batchChangeStatus         = "Cambiar estado por lote";
$lang->execution->manageMembers             = 'Administrar equipo';
$lang->execution->manageTeamMember          = 'Miembros';
$lang->execution->unlinkMember              = 'Quitar miembro';
$lang->execution->unlinkStory               = 'Desvincular historia';
$lang->execution->unlinkStoryAB             = 'Desvincular';
$lang->execution->batchUnlinkStory          = 'Desvincular historias por lote';
$lang->execution->importTask                = 'Transferir tarea';
$lang->execution->importPlanStories         = 'Vincular historias por plan';
$lang->execution->importBug                 = 'Importar Bug';
$lang->execution->tree                      = 'Árbol';
$lang->execution->treeTask                  = 'Mostrar solo tareas';
$lang->execution->treeStory                 = 'Mostrar solo historias';
$lang->execution->treeViewTask              = 'Tarea en vista de árbol';
$lang->execution->treeViewStory             = 'Historia en vista de árbol';
$lang->execution->storyKanban               = 'Kanban de historias';
$lang->execution->storySort                 = 'Clasificar historia';
$lang->execution->importPlanStory           = "{$lang->executionCommon} is created!\nDo you want to import %s that have been linked to the plan? Only active %s can be imported.";
$lang->execution->importEditPlanStory       = "{$lang->executionCommon} is edited!\nDo you want to import %s that have been linked to the plan? Only active %s can be imported.";
$lang->execution->importBranchPlanStory     = "{$lang->executionCommon} is created!\nDo you want to import %s that have been linked to the plan? Only the active %s of the branch associated with this " . $lang->executionCommon. ' se asociará con la importación';
$lang->execution->importBranchEditPlanStory = "{$lang->executionCommon} is edited!\nDo you want to import %s that have been linked to the plan? Only the active %s of the branch associated with this " . $lang->executionCommon. ' se asociará con la importación';
$lang->execution->needLinkProducts          = "The execution has not been linked with any {$lang->productCommon}, and the related functions cannot be used. Please link the {$lang->productCommon} first and try again.";
$lang->execution->iteration                 = 'Iteraciones';
$lang->execution->iterationInfo             = '%s Iteraciones';
$lang->execution->viewAll                   = 'Ver todo';
$lang->execution->testreport                = 'Informe de pruebas';
$lang->execution->taskKanban                = 'Kanban de tareas';
$lang->execution->RDKanban                  = 'Kanban de investigación y desarrollo';

/* Group browsing. */
$lang->execution->allTasks     = 'Todos';
$lang->execution->assignedToMe = 'Asignado a mí';
$lang->execution->myInvolved   = 'Mi participación';
$lang->execution->assignedByMe = 'Asignado por mí';

$lang->execution->statusSelects['']             = 'Más';
$lang->execution->statusSelects['wait']         = 'En espera';
$lang->execution->statusSelects['doing']        = 'En curso';
$lang->execution->statusSelects['undone']       = 'Sin completar';
$lang->execution->statusSelects['finishedbyme'] = 'Completado por mí';
$lang->execution->statusSelects['done']         = 'Hecho';
$lang->execution->statusSelects['closed']       = 'Cerrado';
$lang->execution->statusSelects['cancel']       = 'Cancelado';
$lang->execution->statusSelects['delayed']      = 'Retrasado';

$lang->execution->groups['']           = 'Ver por grupos';
$lang->execution->groups['story']      = 'Agrupar por historia';
$lang->execution->groups['status']     = 'Agrupar por estado';
$lang->execution->groups['pri']        = 'Agrupar por prioridad';
$lang->execution->groups['assignedTo'] = 'Agrupar por asignado a';
$lang->execution->groups['finishedBy'] = 'Agrupar por finalizado por';
$lang->execution->groups['closedBy']   = 'Agrupar por cerrado por';
$lang->execution->groups['type']       = 'Agrupar por tipo';

$lang->execution->groupFilter['story']['all']         = 'Todos';
$lang->execution->groupFilter['story']['linked']      = 'Tareas vinculadas a historias';
$lang->execution->groupFilter['pri']['all']           = 'Todos';
$lang->execution->groupFilter['pri']['noset']         = 'No establecido';
$lang->execution->groupFilter['assignedTo']['undone'] = 'Sin finalizar';
$lang->execution->groupFilter['assignedTo']['all']    = 'Todos';

$lang->execution->byQuery = 'Buscar';

/* Query condition list. */
$lang->execution->allExecution      = "All {$lang->executionCommon}s";
$lang->execution->aboveAllProduct   = "All the above {$lang->productCommon}s";
$lang->execution->aboveAllExecution = "All the above {$lang->executionCommon}s";

/* Page prompt. */
$lang->execution->linkStoryByPlanTips  = "This action will link all stories in this plan to the {$lang->executionCommon}.";
$lang->execution->batchCreateStoryTips = "Please select the {$lang->productCommon} that needs to be created in batches";
$lang->execution->selectExecution      = "Select {$lang->executionCommon}";
$lang->execution->beginAndEnd          = 'Duración';
$lang->execution->lblStats             = 'Esfuerzo';
$lang->execution->DurationStats        = 'Información de duración';
$lang->execution->stats                = 'Disponible: <strong>%s</strong>h. Estimado: <strong>%s</strong>h. Consumido: <strong>%s</strong>h. Restante: <strong>%s</strong>h.';
$lang->execution->taskSummary          = "Total: <strong>%s</strong> tarea(s). En espera: <strong>%s</strong>. En curso: <strong>%s</strong>. Estimado: <strong>%s</strong>h. Costo: <strong>%s</strong>h. Restante: <strong>%s</strong>h.";
$lang->execution->pageSummary          = "Total de tareas: <strong>%total%</strong>. En espera: <strong>%wait%</strong>. En curso: <strong>%doing%</strong>.    Estimado: <strong>%estimate%</strong>h. Costo: <strong>%consumed%</strong>h. Restante: <strong>%left%</strong>h.";
$lang->execution->checkedSummary       = "Seleccionados: <strong>%total%</strong>. En espera: <strong>%wait%</strong>. En curso: <strong>%doing%</strong>. Estimado: <strong>%estimate%</strong>h. Costo: <strong>%consumed%</strong>h. Restante: <strong>%left%</strong>h.";
$lang->execution->executionSummary     = "Total {$lang->executionCommon}: <strong>%s</strong>.";
$lang->execution->pageExecSummary      = "Total {$lang->executionCommon}: <strong>%total%</strong>. Waiting: <strong>%wait%</strong>. Doing: <strong>%doing%</strong>.";
$lang->execution->checkedExecSummary   = "Seleccionados: <strong>%total%</strong>. En espera: <strong>%wait%</strong>. En curso: <strong>%doing%</strong>.";
$lang->execution->memberHoursAB        = "%s tiene <strong>%s</ strong> horas.";
$lang->execution->memberHours          = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Horas disponibles de %s</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->countSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tareas</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">En curso</div><div class="segment-value"><span class="label label-dot primary"></span> %s</div></div><div class="segment"><div class="segment-title">En espera</div><div class="segment-value"><span class="label label-dot secondary"></span> %s</div></div></div></div>';
$lang->execution->timeSummary          = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Estimado</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Consumido</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Restante</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->groupSummaryAB       = "<div>Tareas <strong>%s ：</strong><span class='text-muted'>En espera</span> %s &nbsp; <span class='text-muted'>En curso</span> %s</div><div>Estimado <strong>%s ：</strong><span class='text-muted'>Consumido</span> %s &nbsp; <span class='text-muted'>Restante</span> %s</div>";
$lang->execution->wbs                  = "Crear tarea";
$lang->execution->batchWBS             = "Crear tareas por lote";
$lang->execution->howToUpdateBurn      = "<a href='https://api.zentao.pm/goto.php?item=burndown' target='_blank' title='How to update the Burndown Chart?'>Help <i class='icon icon-help text-gray'></i></a>";
$lang->execution->whyNoStories         = "No story can be linked. Please check whether there is any story in {$lang->executionCommon} which is linked to {$lang->productCommon} and make sure it has been reviewed.";
$lang->execution->projectNoStories     = "No story can be linked. Please check whether there is any story in {$lang->projectCommon} and make sure it has been reviewed.";
$lang->execution->productStories       = "Stories linked to {$lang->executionCommon} are the subeset of stories linked to {$lang->productCommon}. Stories can only be linked after they pass the review. <a href='%s'> Link Stories</a> now.";
$lang->execution->haveBranchDraft      = "There are %s draft stories or not associated with this {$lang->executionCommon} can't be linked.";
$lang->execution->haveDraft            = "There are %s draft stories with this {$lang->executionCommon} can't be linked.";
$lang->execution->doneExecutions       = 'Finalizado';
$lang->execution->selectDept           = 'Seleccionar departamento';
$lang->execution->selectDeptTitle      = 'Seleccionar usuario';
$lang->execution->copyTeam             = 'Copiar equipo';
$lang->execution->copyFromTeam         = "Copy from {$lang->execution->common} Team: <strong>%s</strong>";
$lang->execution->noMatched            = "No {$lang->execution->common} including '%s'can be found.";
$lang->execution->copyTitle            = "Choose a {$lang->execution->common} to copy.";
$lang->execution->copyNoExecution      = "No {$lang->execution->common} can be copied.";
$lang->execution->copyFromExecution    = "Copy from {$lang->execution->common} <strong>%s</strong>";
$lang->execution->cancelCopy           = 'Cancelar copia';
$lang->execution->byPeriod             = 'Por tiempo';
$lang->execution->byUser               = 'Por usuario';
$lang->execution->noExecution          = "No {$lang->executionCommon}. ";
$lang->execution->noExecutions         = "No {$lang->execution->common}.";
$lang->execution->noPrintData          = "No hay datos para imprimir.";
$lang->execution->noMembers            = 'Aún no hay miembros del equipo. ';
$lang->execution->workloadTotal        = "The cumulative workload ratio should not exceed 100%s, and the total workload under the current {$lang->productCommon} is: %s";
$lang->execution->linkAllStoryTip      = "({$lang->SRCommon} has never been linked under the {$lang->projectCommon}, and can be directly linked with {$lang->SRCommon} of the {$lang->productCommon} linked with the sprint/stage)";
$lang->execution->copyTeamTitle        = "Choose a {$lang->project->common} or {$lang->execution->common} Team to copy.";

/* Interactive prompts. */
$lang->execution->confirmDelete                = "Do you want to delete the {$lang->executionCommon}[%s]?";
$lang->execution->confirmUnlinkMember          = "Do you want to unlink this User from {$lang->executionCommon}?";
$lang->execution->confirmUnlinkStory           = "Al quitar la historia, los casos vinculados a la historia se quitarán y las tareas vinculadas a la historia se cancelarán. ¿Desea continuar?";
$lang->execution->confirmBatchUnlinkStory      = "Al quitar la historia, los casos vinculados a la historia se quitarán y las tareas vinculadas a la historia se cancelarán.";
$lang->execution->confirmSync                  = "After modifying the {$lang->projectCommon}, in order to maintain the consistency of data, the data of {$lang->productCommon}s, {$lang->SRCommon}s, teams and whitelist associated with the implementation will be synchronized to the new {$lang->projectCommon}. Please know.";
$lang->execution->confirmUnlinkExecutionStory  = "Do you want to unlink this Story from the {$lang->projectCommon}?";
$lang->execution->notAllowedUnlinkStory        = "This {$lang->SRCommon} is linked to the {$lang->executionCommon} of the {$lang->projectCommon}. Remove it from the {$lang->executionCommon}, then try again.";
$lang->execution->notAllowRemoveProducts       = "The story %s of this product is linked with the {$lang->executionCommon}. Unlink it before doing any action.";
$lang->execution->errorNoLinkedProducts        = "No {$lang->productCommon} is linked to {$lang->executionCommon}. You will be directed to {$lang->productCommon} page to link one.";
$lang->execution->errorSameProducts            = "{$lang->executionCommon} cannot be linked to the same {$lang->productCommon} twice.";
$lang->execution->errorSameBranches            = "{$lang->executionCommon} cannot be linked to the same branch twice";
$lang->execution->errorBegin                   = "The start time of {$lang->executionCommon} cannot be less than the start time of the {$lang->projectCommon} %s.";
$lang->execution->errorEnd                     = "The end time of {$lang->executionCommon} cannot be greater than the end time %s of the {$lang->projectCommon}.";
$lang->execution->errorLesserProject           = "The start time of {$lang->executionCommon} cannot be less than the start time of the {$lang->projectCommon} %s.";
$lang->execution->errorGreaterProject          = "The end time of {$lang->executionCommon} cannot be greater than the end time %s of the {$lang->projectCommon}.";
$lang->execution->errorCommonBegin             = "The start date of {$lang->executionCommon} should be ≥ the start date of {$lang->projectCommon} : %s.";
$lang->execution->errorCommonEnd               = "The deadline of {$lang->executionCommon} should be ≤ the deadline of {$lang->projectCommon} : %s.";
$lang->execution->errorLesserParent            = 'El inicio no puede ser anterior al inicio de la etapa padre a la que pertenece: %s.';
$lang->execution->errorGreaterParent           = 'El fin no puede ser posterior al fin de la etapa padre a la que pertenece：%s.';
$lang->execution->errorNameRepeat              = "Los %s hijos de la misma etapa padre no pueden tener el mismo nombre.";
$lang->execution->errorAttrMatch               = "El atributo de la etapa padre es [%s]; el atributo debe ser coherente con el de la etapa padre.";
$lang->execution->errorLesserPlan              = "『%s』no puede ser anterior a la hora de inicio planificada『%s』。";
$lang->execution->errorParentExecution         = "La etapa actual es una etapa padre y no es accesible.";
$lang->execution->errorFloat                   = '『%s』debe ser un número no menor que 0 y puede ser decimal.';
$lang->execution->accessDenied                 = "Your access to {$lang->executionCommon} is denied!";
$lang->execution->tips                         = 'Nota';
$lang->execution->afterInfo                    = "%s fue creado. A continuación puede ";
$lang->execution->setTeam                      = 'Establecer equipo';
$lang->execution->createTask                   = 'Crear tarea';
$lang->execution->goback                       = "Volver a la lista de tareas";
$lang->execution->gobackExecution              = "Go Back {$lang->execution->common} List";
$lang->execution->noweekend                    = 'Excluir fines de semana';
$lang->execution->nodelay                      = 'Excluir fecha de retraso';
$lang->execution->withweekend                  = 'Incluir fines de semana';
$lang->execution->withdelay                    = 'Incluir fecha de retraso';
$lang->execution->unitTemplate                 = ' (Unit：%s)';
$lang->execution->interval                     = 'Intervalos ';
$lang->execution->fixFirstWithLeft             = 'Actualizar también las horas restantes';
$lang->execution->unfinishedExecution          = "This {$lang->executionCommon} has ";
$lang->execution->unfinishedTask               = "[%s] tareas sin finalizar. ";
$lang->execution->unresolvedBug                = "[%s] Bugs sin resolver. ";
$lang->execution->projectNotEmpty              = "{$lang->projectCommon} cannot be empty.";
$lang->execution->confirmStoryToTask           = $lang->SRCommon . '%s se convertirán en tareas en la actual. ¿Desea convertirlas de todos modos?';
$lang->execution->ge                           = "『%s』debe ser >= al inicio real『%s』.";
$lang->execution->storyDragError               = "The {$lang->SRCommon} is not active. Please activate and drag again.";
$lang->execution->countTip                     = ' (%s miembro)';
$lang->execution->pleaseInput                  = "Entrar";
$lang->execution->week                         = 'week';
$lang->execution->checkedExecutions            = "Seleted %s {$lang->executionCommon}.";
$lang->execution->hasStartedTaskOrSubStage     = "Las tareas o subfases de %s %s ya han iniciado, no se pueden modificar y han sido filtradas.";
$lang->execution->hasSuspendedOrClosedChildren = "Las subetapas de la etapa %s no están todas suspendidas o cerradas, no se pueden modificar y han sido filtradas.";
$lang->execution->hasNotClosedChildren         = "Las subetapas de la etapa %s no están todas cerradas, no se pueden modificar y han sido filtradas.";
$lang->execution->hasStartedTask               = "La tarea de %s %s ya se inició, no se puede modificar y fue filtrada.";
$lang->execution->cannotManageProducts         = 'El ' . strtolower($lang->project->common). ' modelo de este ' . strtolower($lang->execution->common) . " es %s y este " . strtolower($lang->execution->common) . " cannot be associated with {$lang->productCommon}.";
$lang->execution->confirmCloseExecution        = "There are unclosed tasks under this {$lang->executionCommon}: %s, are you sure you want to close the {$lang->executionCommon}?";
$lang->execution->confirmBatchCloseExecution   = "There are unclosed tasks in %s, are you sure you want to close the {$lang->executionCommon}s";

/* Statistics. */
$lang->execution->charts = new stdclass();
$lang->execution->charts->burn = new stdclass();
$lang->execution->charts->burn->graph = new stdclass();
$lang->execution->charts->burn->graph->caption      = " Gráfico de burndown";
$lang->execution->charts->burn->graph->xAxisName    = "Fecha";
$lang->execution->charts->burn->graph->yAxisName    = "Hora";
$lang->execution->charts->burn->graph->baseFontSize = 12;
$lang->execution->charts->burn->graph->formatNumber = 0;
$lang->execution->charts->burn->graph->animation    = 0;
$lang->execution->charts->burn->graph->rotateNames  = 1;
$lang->execution->charts->burn->graph->showValues   = 0;
$lang->execution->charts->burn->graph->reference    = 'Ideal';
$lang->execution->charts->burn->graph->actuality    = 'Real';
$lang->execution->charts->burn->graph->delay        = 'Retraso';

$lang->execution->charts->cfd = new stdclass();
$lang->execution->charts->cfd->cfdTip        = "<p>
1. El CFD (diagrama de flujo acumulativo) refleja la tendencia de la carga de trabajo acumulada en cada etapa a lo largo del tiempo.<br>
2. El eje horizontal representa la fecha y el eje vertical representa el número de elementos de trabajo.<br>
3. Para conocer la entrega del equipo, puede calcular la cantidad de WIP, la tasa de entrega y el tiempo de entrega promedio a través del CFD. <p>";
$lang->execution->charts->cfd->cycleTime     = 'Tiempo de ciclo promedio';
$lang->execution->charts->cfd->cycleTimeTip  = 'Tiempo de ciclo promedio de cada tarjeta desde el inicio del desarrollo hasta su finalización';
$lang->execution->charts->cfd->throughput    = 'Tasa de rendimiento';
$lang->execution->charts->cfd->throughputTip = 'Tasa de rendimiento = WIP / Tiempo de ciclo promedio';

$lang->execution->charts->cfd->begin          = 'Inicio';
$lang->execution->charts->cfd->end            = 'Fin';
$lang->execution->charts->cfd->errorBegin     = 'La hora de inicio no puede ser posterior a la hora de fin.';
$lang->execution->charts->cfd->errorDateRange = 'El Diagrama de flujo acumulado (CFD) solo muestra datos de los últimos 3 meses.';
$lang->execution->charts->cfd->dateRangeTip   = 'El CFD solo muestra los datos de 3 meses';

$lang->execution->placeholder = new stdclass();
$lang->execution->placeholder->code      = "Abbreviation of {$lang->executionCommon} name";
$lang->execution->placeholder->totalLeft = "Hours estimated on the first day of the {$lang->executionCommon}.";

$lang->execution->selectGroup = new stdclass();
$lang->execution->selectGroup->done = '(Done)';

$lang->execution->orderList['order_asc']  = "Rango de la historia ascendente";
$lang->execution->orderList['order_desc'] = "Rango de la historia descendente";
$lang->execution->orderList['pri_asc']    = "Prioridad de la historia ascendente";
$lang->execution->orderList['pri_desc']   = "Prioridad de la historia descendente";
$lang->execution->orderList['stage_asc']  = "Fase de la historia ascendente";
$lang->execution->orderList['stage_desc'] = "Fase de la historia descendente";

$lang->execution->kanban        = "Kanban";
$lang->execution->kanbanSetting = "Configuración";
$lang->execution->setKanban     = "Establecer Kanban";
$lang->execution->resetKanban   = "Restablecer";
$lang->execution->printKanban   = "Imprimir Kanban";
$lang->execution->fullScreen    = "Pantalla completa";
$lang->execution->bugList       = "Bugs";

$lang->execution->kanbanHideCols   = 'Columnas de cerrado y cancelado';
$lang->execution->kanbanShowOption = 'Desplegar';
$lang->execution->kanbanColsColor  = 'Personalizar color de columna';
$lang->execution->kanbanCardsUnit  = 'X';

$lang->execution->kanbanViewList['all']   = 'Todos';
$lang->execution->kanbanViewList['story'] = "{$lang->SRCommon}";
$lang->execution->kanbanViewList['bug']   = 'Bug';
$lang->execution->kanbanViewList['task']  = 'Tarea';

$lang->execution->teamWords  = 'Equipo';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = '¿Desea restablecer el Kanban?';
$lang->kanbanSetting->optionList['0'] = 'Ocultar';
$lang->kanbanSetting->optionList['1'] = 'Mostrar';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Imprimir Kanban';
$lang->printKanban->content = 'Contenido';
$lang->printKanban->print   = 'Imprimir';

$lang->printKanban->taskStatus = 'Estado';

$lang->printKanban->typeList['all']       = 'Todos';
$lang->printKanban->typeList['increment'] = 'Incremento';

$lang->execution->typeList['']       = '';
$lang->execution->typeList['stage']  = 'Fase';
$lang->execution->typeList['sprint'] = $lang->executionCommon;
$lang->execution->typeList['kanban'] = 'Kanban';

$lang->execution->featureBar['tree']['all'] = 'Todos';

$lang->execution->featureBar['task']['all']          = $lang->execution->allTasks;
$lang->execution->featureBar['task']['unclosed']     = $lang->execution->unclosed;
$lang->execution->featureBar['task']['assignedtome'] = $lang->execution->assignedToMe;
$lang->execution->featureBar['task']['myinvolved']   = $lang->execution->myInvolved;
$lang->execution->featureBar['task']['assignedbyme'] = $lang->execution->assignedByMe;
$lang->execution->featureBar['task']['needconfirm']  = 'Cambiado';
$lang->execution->featureBar['task']['status']       = $lang->more;

$lang->execution->moreSelects['task']['status']['wait']         = 'En espera';
$lang->execution->moreSelects['task']['status']['doing']        = 'En curso';
$lang->execution->moreSelects['task']['status']['undone']       = 'Sin completar';
$lang->execution->moreSelects['task']['status']['finishedbyme'] = 'Completado por mí';
$lang->execution->moreSelects['task']['status']['done']         = 'Hecho';
$lang->execution->moreSelects['task']['status']['closed']       = 'Cerrado';
$lang->execution->moreSelects['task']['status']['cancel']       = 'Cancelado';
$lang->execution->moreSelects['task']['status']['delayed']      = 'Retrasado';

$lang->execution->featureBar['all']['all']       = $lang->execution->all;
$lang->execution->featureBar['all']['undone']    = $lang->execution->undone;
$lang->execution->featureBar['all']['wait']      = $lang->execution->statusList['wait'];
$lang->execution->featureBar['all']['doing']     = $lang->execution->statusList['doing'];
$lang->execution->featureBar['all']['suspended'] = $lang->execution->statusList['suspended'];
$lang->execution->featureBar['all']['delayed']   = $lang->execution->delayed;
$lang->execution->featureBar['all']['closed']    = $lang->execution->statusList['closed'];

$lang->execution->featureBar['bug']['all']          = 'Todos';
$lang->execution->featureBar['bug']['unclosed']     = 'Abierto';
$lang->execution->featureBar['bug']['openedbyme']   = 'Reportados por mí';
$lang->execution->featureBar['bug']['assigntome']   = 'Asignado a mí';
$lang->execution->featureBar['bug']['resolvedbyme'] = 'Resueltos por mí';
$lang->execution->featureBar['bug']['assignedbyme'] = 'Asignado por mí';
$lang->execution->featureBar['bug']['more']         = $lang->more;

$lang->execution->moreSelects['bug']['more']['unresolved']    = 'Sin resolver';
$lang->execution->moreSelects['bug']['more']['unconfirmed']   = 'Sin confirmar';
$lang->execution->moreSelects['bug']['more']['assigntonull']  = 'Sin asignar';
$lang->execution->moreSelects['bug']['more']['longlifebugs']  = 'Obsoleto';
$lang->execution->moreSelects['bug']['more']['toclosed']      = 'Por cerrar';
$lang->execution->moreSelects['bug']['more']['postponedbugs'] = 'Retrasado';
$lang->execution->moreSelects['bug']['more']['overduebugs']   = 'Bug vencido';
$lang->execution->moreSelects['bug']['more']['needconfirm']   = 'Historia cambiada';

$lang->execution->featureBar['build']['all'] = 'Lista de Builds';

$lang->execution->featureBar['story']['all']       = 'Todos';
$lang->execution->featureBar['story']['unclosed']  = 'Abierto';
$lang->execution->featureBar['story']['draft']     = 'Borrador';
$lang->execution->featureBar['story']['reviewing'] = 'En revisión';

$lang->execution->featureBar['testcase']['all']         = 'Todos';
$lang->execution->featureBar['testcase']['wait']        = 'En espera de revisión';
$lang->execution->featureBar['testcase'][]              = '-';
$lang->execution->featureBar['testcase']['needconfirm'] = "{$lang->common->story} Changed";

$lang->execution->featureBar['importtask']['all'] = $lang->execution->importTask;

$lang->execution->featureBar['importbug']['all'] = $lang->execution->importBug;

$lang->execution->myExecutions = 'Mío';
$lang->execution->doingProject = "Ongoing {$lang->projectCommon}s";

$lang->execution->kanbanColType['wait']      = $lang->execution->statusList['wait']      . ' ' . $lang->execution->common;
$lang->execution->kanbanColType['doing']     = $lang->execution->statusList['doing']     . ' ' . $lang->execution->common;
$lang->execution->kanbanColType['suspended'] = $lang->execution->statusList['suspended'] . ' ' . $lang->execution->common;
$lang->execution->kanbanColType['closed']    = $lang->execution->statusList['closed']    . ' ' . $lang->execution->common . '(Las dos últimas ejecuciones)';

$lang->execution->treeLevel = array();
$lang->execution->treeLevel['all']   = 'Expandir todo';
$lang->execution->treeLevel['root']  = 'Contraer todo';
$lang->execution->treeLevel['task']  = 'Historias y tareas';
$lang->execution->treeLevel['story'] = 'Solo historias';

$lang->execution->action = new stdclass();
$lang->execution->action->opened               = '$date, creado por <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->managed              = '$date, gestionado por <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->edited               = '$date, editado por <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->extra                = "Linked {$lang->productCommon}s is %s.";
$lang->execution->action->startbychildactivate = '$date, al activar la subetapa, el estado de la ejecución se establece en En curso.' . "\n";
$lang->execution->action->waitbychilddelete    = '$date, al eliminar la subetapa, el estado de la ejecución se establece en en espera.' . "\n";
$lang->execution->action->closebychilddelete   = '$date, al eliminar la subetapa, el estado de la ejecución se establece en cerrado.' . "\n";
$lang->execution->action->closebychildclose    = '$date, al cerrar la subetapa, el estado de la ejecución se establece en cerrado.' . "\n";
$lang->execution->action->waitbychild          = '$date, el estado de la etapa es <strong>En espera</strong> porque el sistema determinó que los estados de todas sus subetapas son <strong>En espera</strong>.';
$lang->execution->action->suspendedbychild     = '$date, el estado de la etapa es <strong>Suspendido</strong> porque el sistema determinó que los estados de todas sus subetapas son <strong>Suspendido</strong>.';
$lang->execution->action->closedbychild        = '$date, el estado de la etapa es <strong>Cerrado</strong> porque el sistema determinó que todas sus subetapas están <strong>Cerradas</strong>.';
$lang->execution->action->startbychildstart    = '$date, el estado de la etapa es <strong>En curso</strong> porque el sistema determinó que sus subetapas fueron <strong>Iniciadas</strong>.';
$lang->execution->action->startbychildactivate = '$date, el estado de la etapa es <strong>En curso</strong> porque el sistema determinó que sus subetapas fueron <strong>Activadas</strong>.';
$lang->execution->action->startbychildsuspend  = '$date, el estado de la etapa es <strong>En curso</strong> porque el sistema determinó que sus subetapas fueron <strong>Suspendidas</strong>.';
$lang->execution->action->startbychildclose    = '$date, el estado de la etapa es <strong>En curso</strong> porque el sistema determinó que sus subetapas fueron <strong>Cerradas</strong>.';
$lang->execution->action->startbychildcreate   = '$date, el estado de la etapa es <strong>En curso</strong> porque el sistema determinó que sus subetapas fueron <strong>Creadas</strong>. ';
$lang->execution->action->startbychildedit     = '$date, el estado de la etapa es <strong>En curso</strong> porque el sistema determinó que sus subetapas fueron <strong>Editadas</strong>';
$lang->execution->action->startbychild         = '$date, el estado de la etapa es <strong>En curso</strong> porque el sistema determinó que sus subetapas fueron <strong>Activadas</strong>.';
$lang->execution->action->waitbychild          = '$date, el estado de la etapa es <strong>En espera</strong> porque el sistema determinó que sus subetapas fueron <strong>Editadas</strong>';
$lang->execution->action->suspendbychild       = '$date, el estado de la etapa es <strong>Suspendido</strong> porque el sistema determinó que sus subetapas fueron <strong>Editadas</strong>';
$lang->execution->action->closebychild         = '$date, el estado de la etapa es <strong>Cerrado</strong> porque el sistema determinó que sus subetapas fueron <strong>Editadas</strong>';

$lang->execution->startbychildactivate = 'activated';
$lang->execution->waitbychilddelete    = 'stop';
$lang->execution->closebychilddelete   = 'closed';
$lang->execution->closebychildclose    = 'closed';
$lang->execution->waitbychild          = 'activated';
$lang->execution->suspendedbychild     = 'suspended';
$lang->execution->closedbychild        = 'closed';
$lang->execution->startbychildstart    = 'started';
$lang->execution->startbychildactivate = 'activated';
$lang->execution->startbychildsuspend  = 'activated';
$lang->execution->startbychildclose    = 'activated';
$lang->execution->startbychildcreate   = 'activated';
$lang->execution->startbychildedit     = 'activated';
$lang->execution->startbychild         = 'activated';
$lang->execution->waitbychild          = 'stop';
$lang->execution->suspendbychild       = 'suspended';
$lang->execution->closebychild         = 'closed';

$lang->execution->statusColorList = array();
$lang->execution->statusColorList['wait']      = '#0991FF';
$lang->execution->statusColorList['doing']     = '#0BD986';
$lang->execution->statusColorList['suspended'] = '#fdc137';
$lang->execution->statusColorList['closed']    = '#838A9D';

if(!isset($lang->execution->gantt)) $lang->execution->gantt = new stdclass();
$lang->execution->gantt->progressColor[0] = '#B7B7B7';
$lang->execution->gantt->progressColor[1] = '#FF8287';
$lang->execution->gantt->progressColor[2] = '#FFC73A';
$lang->execution->gantt->progressColor[3] = '#6BD5F5';
$lang->execution->gantt->progressColor[4] = '#9DE88A';
$lang->execution->gantt->progressColor[5] = '#9BA8FF';

$lang->execution->gantt->color[0] = '#E7E7E7';
$lang->execution->gantt->color[1] = '#FFDADB';
$lang->execution->gantt->color[2] = '#FCECC1';
$lang->execution->gantt->color[3] = '#D3F3FD';
$lang->execution->gantt->color[4] = '#DFF5D9';
$lang->execution->gantt->color[5] = '#EBDCF9';

$lang->execution->gantt->textColor[0] = '#2D2D2D';
$lang->execution->gantt->textColor[1] = '#8D0308';
$lang->execution->gantt->textColor[2] = '#9D4200';
$lang->execution->gantt->textColor[3] = '#006D8E';
$lang->execution->gantt->textColor[4] = '#1A8100';
$lang->execution->gantt->textColor[5] = '#660ABC';

$lang->execution->gantt->stage = new stdclass();
$lang->execution->gantt->stage->progressColor = '#70B8FE';
$lang->execution->gantt->stage->color         = '#D2E7FC';
$lang->execution->gantt->stage->textColor     = '#0050A7';

$lang->execution->gantt->defaultColor         = '#EBDCF9';
$lang->execution->gantt->defaultProgressColor = '#9BA8FF';
$lang->execution->gantt->defaultTextColor     = '#660ABC';

$lang->execution->gantt->bar_height = '24';

$lang->execution->gantt->exportImg  = 'Exportar como imagen';
$lang->execution->gantt->exportPDF  = 'Exportar como PDF';
$lang->execution->gantt->exporting  = 'Exporting...';
$lang->execution->gantt->exportFail = 'No se pudo exportar.';

$lang->execution->boardColorList = array('#32C5FF', '#006AF1', '#9D28B2', '#FF8F26', '#7FBB00', '#424BAC', '#66c5f8', '#EC2761');

$lang->execution->linkBranchStoryByPlanTips = "Cuando se ejecuta un requerimiento asociado programado, solo se importan los requerimientos activos asociados con %s de esta ejecución.";
$lang->execution->linkNormalStoryByPlanTips = "Al asociar los requerimientos programados, solo se importan los requerimientos activos.";

$lang->execution->featureBar['dynamic']['all']       = 'Todos';
$lang->execution->featureBar['dynamic']['today']     = 'Hoy';
$lang->execution->featureBar['dynamic']['yesterday'] = 'Ayer';
$lang->execution->featureBar['dynamic']['thisWeek']  = 'Esta semana';
$lang->execution->featureBar['dynamic']['lastWeek']  = 'Semana pasada';
$lang->execution->featureBar['dynamic']['thisMonth'] = 'Este mes';
$lang->execution->featureBar['dynamic']['lastMonth'] = 'Mes pasado';

$lang->execution->featureBar['team']['all'] = 'Miembros';

$lang->execution->featureBar['managemembers']['all'] = 'Administrar equipo';
