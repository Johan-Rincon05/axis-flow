<?php
/**
 * The productplan module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     productplan
 * @version     $Id: en.php 4659 2013-04-17 06:45:08Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */
$lang->productplan->common     = $lang->productCommon . ' Plan';
$lang->productplan->browse     = "Lista de planes";
$lang->productplan->index      = "Lista de planes";
$lang->productplan->create     = "Crear plan";
$lang->productplan->edit       = "Editar plan";
$lang->productplan->delete     = "Eliminar plan";
$lang->productplan->start      = "Iniciar plan";
$lang->productplan->finish     = "Completar plan";
$lang->productplan->close      = "Cerrar plan";
$lang->productplan->activate   = "Activar plan";
$lang->productplan->startAB    = "Iniciar";
$lang->productplan->finishAB   = "Completar";
$lang->productplan->closeAB    = "Cerrar";
$lang->productplan->activateAB = "Activar";
$lang->productplan->view       = "Detalles";
$lang->productplan->bugSummary = "<strong>%s</strong> Bugs en esta página.";
$lang->productplan->basicInfo  = 'Información básica';
$lang->productplan->batchEdit  = 'Editar por lote';
$lang->productplan->project    = $lang->projectCommon;
$lang->productplan->plan       = 'Plan';
$lang->productplan->allAB      = 'Todos';
$lang->productplan->to         = 'A';
$lang->productplan->more       = 'Más';
$lang->productplan->comment    = 'Comentario';
$lang->productplan->storyPoint = 'Punto de historia';

$lang->productplan->batchEditAction   = 'Editar planes por lote';
$lang->productplan->batchUnlink       = "Desvincular por lote";
$lang->productplan->batchClose        = "Cerrar por lote";
$lang->productplan->batchChangeStatus = "Cambiar estado por lote";
$lang->productplan->unlinkAB          = "Desvincular";
$lang->productplan->linkStory         = "Vincular historia";
$lang->productplan->unlinkStory       = "Desvincular historia";
$lang->productplan->unlinkStoryAB     = "Desvincular";
$lang->productplan->batchUnlinkStory  = "Desvincular por lote";
$lang->productplan->linkedStories     = 'Historias vinculadas';
$lang->productplan->unlinkedStories   = 'Historias vinculadas';
$lang->productplan->updateOrder       = 'Ordenar';
$lang->productplan->createChildren    = "Crear subplanes";
$lang->productplan->createExecution   = "Crear {$lang->execution->common}";
$lang->productplan->list              = 'Lista';
$lang->productplan->kanban            = 'Kanban';

$lang->productplan->linkBug          = "Vincular Bug";
$lang->productplan->unlinkBug        = "Desvincular Bug";
$lang->productplan->batchUnlinkBug   = "Desvincular Bugs por lote";
$lang->productplan->linkedBugs       = 'Bugs vinculados';
$lang->productplan->unlinkedBugs     = 'Bugs desvinculados';
$lang->productplan->unexpired        = 'Sin vencer';
$lang->productplan->noAssigned       = 'Sin asignar';
$lang->productplan->all              = 'Todos los planes';
$lang->productplan->setDate          = "Duración del plan";
$lang->productplan->expired          = "Vencido";
$lang->productplan->closedReason     = "Motivo de cierre";

$lang->productplan->confirmDelete      = "¿Seguro que desea eliminar este plan?";
$lang->productplan->confirmUnlinkStory = "¿Seguro que desea desvincular esta historia?";
$lang->productplan->confirmUnlinkBug   = "¿Seguro que desea desvincular este Bug?";
$lang->productplan->confirmStart       = "¿Seguro que desea iniciar este plan?";
$lang->productplan->confirmFinish      = "¿Seguro que desea completar este plan?";
$lang->productplan->confirmClose       = "¿Seguro que desea cerrar este plan?";
$lang->productplan->confirmActivate    = "¿Seguro que desea activar este plan?";
$lang->productplan->noPlan             = 'Aún no hay planes.';
$lang->productplan->cannotDeleteParent = 'Los planes padre no se pueden eliminar.';
$lang->productplan->selectProjects     = 'Seleccione el ' . $lang->projectCommon;
$lang->productplan->projectNotEmpty    = $lang->projectCommon . ' no debe estar vacío.';
$lang->productplan->nextStep           = "Siguiente";
$lang->productplan->summary            = "<strong>%s</strong> planes en esta página: <strong>%s</strong> padre, <strong>%s</strong> hijo, <strong>%s</strong> independientes.";
$lang->productplan->checkedSummary     = "Planes seleccionados: <strong>%total%</strong>: <strong>%parent%</strong> padre, <strong>%child%</strong> hijo, <strong>%independent%</strong> independientes.";
$lang->productplan->storySummary       = "Esta página contiene <strong>%s</strong> de {$lang->ERCommon}, <strong>%s</strong> de {$lang->URCommon} y <strong>%s</strong> de {$lang->SRCommon}, con <strong>%s</strong> {$lang->hourCommon} estimadas y una tasa de cobertura de pruebas de <strong>%s</strong>.";
$lang->productplan->confirmChangePlan  = "Después de desvincular la rama『%s』, sus %s historias y %s Bugs también se quitarán del plan. ¿Desea continuar?";
$lang->productplan->confirmRemoveStory = "Después de desvincular la rama『%s』, sus %s historias también se quitarán del plan. ¿Desea continuar?";
$lang->productplan->confirmRemoveBug   = "Después de desvincular la rama『%s』, sus %s Bugs también se quitarán del plan. ¿Desea continuar?";

$lang->productplan->id           = 'ID';
$lang->productplan->product      = $lang->productCommon;
$lang->productplan->branch       = 'Plataforma / Rama';
$lang->productplan->title        = 'Título';
$lang->productplan->desc         = 'Descripción';
$lang->productplan->begin        = 'Iniciar';
$lang->productplan->end          = 'Fin';
$lang->productplan->status       = 'Estado';
$lang->productplan->last         = 'Último plan';
$lang->productplan->future       = 'TBD';
$lang->productplan->stories      = 'Historias';
$lang->productplan->bugs         = 'Bugs';
$lang->productplan->hour         = $lang->hourCommon;
$lang->productplan->execution    = $lang->execution->common;
$lang->productplan->parent       = "Plan padre";
$lang->productplan->parentAB     = "Padre";
$lang->productplan->children     = "Subplan";
$lang->productplan->childrenAB   = "Sub";
$lang->productplan->order        = "Ordenar";
$lang->productplan->deleted      = "Eliminado";
$lang->productplan->mailto       = "Enviar a";
$lang->productplan->planStatus   = "Estado";
$lang->productplan->storyTitle   = "Título";
$lang->productplan->createdBy    = 'Creador';
$lang->productplan->createdDate  = 'Creado el';
$lang->productplan->finishedDate = 'Completado el';
$lang->productplan->closedDate   = 'Cerrado el';

$lang->productplan->statusList['wait']   = 'En espera';
$lang->productplan->statusList['doing']  = 'En curso';
$lang->productplan->statusList['done']   = 'Completado';
$lang->productplan->statusList['closed'] = 'Cerrado';

$lang->productplan->closedReasonList['done']   = 'Completado';
$lang->productplan->closedReasonList['cancel'] = 'Cancelar';

$lang->productplan->parentActionList['startedbychild']   = 'El estado del plan se estableció automáticamente en <strong>En curso</strong> porque un subplan fue <strong>iniciado</strong>.';
$lang->productplan->parentActionList['finishedbychild']  = 'El estado del plan se estableció automáticamente en <strong>Completado</strong> porque todos los subplanes fueron <strong>completados</strong>.';
$lang->productplan->parentActionList['closedbychild']    = 'El estado del plan se estableció automáticamente en <strong>Cerrado</strong> porque todos los subplanes fueron <strong>cerrados</strong>.';
$lang->productplan->parentActionList['activatedbychild'] = 'El estado del plan se estableció automáticamente en <strong>En curso</strong> porque un subplan fue <strong>activado</strong>.';
$lang->productplan->parentActionList['createchild']      = 'El estado del plan se estableció automáticamente en <strong>En curso</strong> porque se <strong>creó</strong> un subplan.';

$lang->productplan->endList[7]    = '1 semana';
$lang->productplan->endList[14]   = '2 semanas';
$lang->productplan->endList[31]   = '1 mes';
$lang->productplan->endList[62]   = '2 meses';
$lang->productplan->endList[93]   = '3 meses';
$lang->productplan->endList[186]  = '6 meses';
$lang->productplan->endList[365]  = '1 año';

$lang->productplan->errorNoTitle           = 'El título del ID %s no debe estar vacío.';
$lang->productplan->errorNoBegin           = 'La hora de inicio del ID %s no debe estar vacía';
$lang->productplan->errorNoEnd             = 'La hora de fin del ID %s no debe estar vacía.';
$lang->productplan->beginGeEnd             = 'La hora de inicio del ID %s no puede ser posterior a la hora de fin.';
$lang->productplan->beginLessThanParent    = "Fecha de inicio del plan padre: %s. La fecha de inicio no puede ser anterior a la fecha de inicio del plan padre.";
$lang->productplan->endGreatThanParent     = "Fecha de fin del plan padre: %s. La fecha de fin no puede ser posterior a la fecha de fin del plan padre.";
$lang->productplan->beginGreaterChild      = "Fecha de inicio del subplan: %s. La fecha de inicio no puede ser posterior a la fecha de inicio de los subplanes.";
$lang->productplan->endLessThanChild       = "Fecha de fin del subplan: %s. La fecha de fin no puede ser anterior a la fecha de fin de los subplanes.";
$lang->productplan->noLinkedProject        = "Aún no hay {$lang->projectCommon} vinculado a {$lang->productCommon} actual. Vaya a la lista de {$lang->productCommon} y {$lang->projectCommon} para vincular o crear un nuevo {$lang->projectCommon}.";
$lang->productplan->enterProjectList       = "Ir a la lista de {$lang->projectCommon} de {$lang->productCommon}.";
$lang->productplan->beginGreaterChildTip   = "Fecha de inicio del plan padre [%s]: %s. No puede ser posterior a la fecha de inicio del subplan: %s.";
$lang->productplan->endLessThanChildTip    = "Fecha de fin del plan padre [%s]: %s. No puede ser anterior a la fecha de fin del subplan: %s.";
$lang->productplan->beginLessThanParentTip = "Fecha de inicio del subplan [%s]: %s. No puede ser anterior a la fecha de inicio del plan padre: %s.";
$lang->productplan->endGreatThanParentTip  = "Fecha de fin del subplan [%s]: %s. No puede ser posterior a la fecha de fin del plan padre: %s.";
$lang->productplan->diffBranchesTip        = "La @branch@ [%s] del plan padre no está vinculada a ningún subplan. Las historias y bugs relacionados con esta @branch@ se eliminarán del plan automáticamente. ¿Desea guardar?";
$lang->productplan->deleteBranchTip        = "La @branch@ [%s] está vinculada a un subplan y no se puede cambiar.";

$lang->productplan->featureBar['browse']['all']    = 'Todos';
$lang->productplan->featureBar['browse']['undone'] = 'Sin completar';
$lang->productplan->featureBar['browse']['wait']   = 'En espera';
$lang->productplan->featureBar['browse']['doing']  = 'En curso';
$lang->productplan->featureBar['browse']['done']   = 'Completado';
$lang->productplan->featureBar['browse']['closed'] = 'Cerrado';

$lang->productplan->orderList['begin_desc'] = 'Fecha de inicio descendente';
$lang->productplan->orderList['begin_asc']  = 'Fecha de inicio ascendente';
$lang->productplan->orderList['title_desc'] = 'Título descendente';
$lang->productplan->orderList['title_asc']  = 'Título ascendente';

$lang->productplan->action = new stdclass();
$lang->productplan->action->changebychild = array('main' => '$date, $extra', 'extra' => 'parentActionList');
