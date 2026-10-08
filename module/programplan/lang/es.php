<?php
/**
 * The programplan module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     programplan
 * @version     $Id: en.php 4729 2013-05-03 07:53:55Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */
$lang->programplan->common        = 'Plan del programa';
$lang->programplan->browse        = 'Diagrama de Gantt';
$lang->programplan->gantt         = 'Diagrama de Gantt';
$lang->programplan->ganttEdit     = 'Editar diagrama de Gantt';
$lang->programplan->ganttExport   = 'Exportación de Gantt';
$lang->programplan->list          = 'Lista de fases';
$lang->programplan->create        = 'Crear fase';
$lang->programplan->edit          = 'Editar fase';
$lang->programplan->delete        = 'Eliminar fase';
$lang->programplan->close         = 'Cerrar fase';
$lang->programplan->activate      = 'Activar fase';
$lang->programplan->createSubPlan = 'Crear subfase';
$lang->programplan->subPlanManage = 'Tipo de gestión de subfases';
$lang->programplan->submit        = 'Enviar revisión';
$lang->programplan->idAB          = 'ID';

$lang->programplan->parent           = 'Fase padre';
$lang->programplan->emptyParent      = 'N/A';
$lang->programplan->name             = 'Nombre de la fase';
$lang->programplan->code             = 'Código';
$lang->programplan->status           = 'Progreso de la fase';
$lang->programplan->PM               = 'Gerente de fase';
$lang->programplan->PMAB             = 'Gerente';
$lang->programplan->acl              = 'Control de acceso';
$lang->programplan->subStageName     = 'Nombre de subfase';
$lang->programplan->percent          = 'Proporción de carga de trabajo';
$lang->programplan->percentAB        = 'Proporción de carga de trabajo';
$lang->programplan->planPercent      = 'Carga de trabajo';
$lang->programplan->attribute        = 'Tipo';
$lang->programplan->milestone        = 'Hito';
$lang->programplan->taskProgress     = 'Progreso de la tarea';
$lang->programplan->task             = 'Tarea';
$lang->programplan->begin            = 'Inicio planificado';
$lang->programplan->end              = 'Fin planificado';
$lang->programplan->realBegan        = 'Inicio real';
$lang->programplan->realEnd          = 'Fin real';
$lang->programplan->ac               = 'Costo real';
$lang->programplan->sv               = 'Variación del cronograma';
$lang->programplan->cv               = 'Variación de costos';
$lang->programplan->planDateRange    = 'Duración planificada';
$lang->programplan->realDateRange    = 'Duración real';
$lang->programplan->output           = 'Salida';
$lang->programplan->openedBy         = 'Creador';
$lang->programplan->openedDate       = 'Creado el';
$lang->programplan->editedBy         = 'Editado por';
$lang->programplan->editedDate       = 'Editado el';
$lang->programplan->duration         = 'Días laborables disponibles';
$lang->programplan->estimate         = 'Horas-hombre';
$lang->programplan->consumed         = 'Costo';
$lang->programplan->version          = 'Versión';
$lang->programplan->createVersion    = 'Crear versión';
$lang->programplan->editVersion      = 'Editar versión';
$lang->programplan->full             = 'Pantalla completa';
$lang->programplan->today            = 'Hoy';
$lang->programplan->exporting        = 'Exportar';
$lang->programplan->exportFail       = 'Fallido';
$lang->programplan->hideCriticalPath = 'Ocultar ruta crítica';
$lang->programplan->showCriticalPath = 'Mostrar ruta crítica';
$lang->programplan->delay            = 'Pospuesto';
$lang->programplan->delayDays        = 'Días de retraso';
$lang->programplan->settingGantt     = 'Establecer diagrama de Gantt';
$lang->programplan->viewSetting      = 'Configuración';
$lang->programplan->desc             = 'Descripción';
$lang->programplan->wait             = 'Pendiente de envío';
$lang->programplan->enabled          = 'Habilitar fase';
$lang->programplan->point            = 'Punto de revisión';
$lang->programplan->progress         = 'Progreso';

$lang->programplan->relation             = 'Administrar dependencias de tareas';
$lang->programplan->setTaskRelation      = 'Administrar dependencias de tareas';
$lang->programplan->viewTaskRelation     = 'Ver dependencias de la tarea';
$lang->programplan->createRelation       = 'Agregar dependencias de tareas';
$lang->programplan->editRelation         = 'Administrar dependencias de tareas';
$lang->programplan->batchEditRelation    = 'Gestionar dependencias de tareas por lote';
$lang->programplan->deleteRelation       = 'Eliminar dependencias de tareas';
$lang->programplan->batchDeleteRelation  = 'Eliminar dependencias de tareas por lote';
$lang->programplan->createGanttVersion   = 'Crear versión';
$lang->programplan->editGanttVersion     = 'Editar versión';
$lang->programplan->deleteGanttVersion   = 'Eliminar versión';
$lang->programplan->diffGanttVersion     = 'Comparación de versiones';
$lang->programplan->rollbackGanttVersion = 'Reversión de versión';
$lang->programplan->deliverableVersion   = 'Entregables y versión de línea base';
$lang->programplan->ganttVersion         = 'Versión del plan';
$lang->programplan->tmpGanttVersion      = 'Versión temporal';
$lang->programplan->versionDisplay       = 'Visualización de versiones';

$lang->programplan->errorBegin       = "The phase start date cannot be earlier than the start date of its {$lang->projectCommon} %s.";
$lang->programplan->errorEnd         = "The phase end date cannot be later than the end date of its {$lang->projectCommon} %s.";
$lang->programplan->emptyBegin       = 'La fecha de inicio planificada es obligatoria.';
$lang->programplan->emptyEnd         = 'La fecha de finalización planificada es obligatoria.';
$lang->programplan->checkBegin       = 'El inicio planificado debe ser una fecha válida.';
$lang->programplan->checkEnd         = 'La finalización planificada debe ser una fecha válida.';
$lang->programplan->methodTip        = "You can create another phase or add a {lang->executionCommon} / Kanban board under this phase to organize work. {$lang->executionCommon}s and Kanban boards cannot be further subdivided.";
$lang->programplan->cropStageTip     = "No se puede recortar una fase que ya ha comenzado.";
$lang->programplan->childEnabledTip  = "Las subfases heredan el estado de su fase padre.";
$lang->programplan->reviewedPointTip = "Este punto de revisión ya se envió a revisión y no se puede modificar.";
$lang->programplan->typeTip          = "At the top level, you can only create phases. Within a phase, you may create sub-phases or {$lang->executionCommon} / Kanban boards. {$lang->executionCommon}s and Kanban boards cannot be further subdivided.";
$lang->programplan->rollbackTip      = 'Las nuevas ejecuciones y tareas se eliminarán, las eliminadas se restaurarán y solo se revertirán algunos campos. Esta operación sobrescribirá el cronograma actual y no se puede recuperar. Proceda con precaución. ¿Continuar?';
$lang->programplan->rollbackTip4IPD  = 'Las nuevas ejecuciones y tareas se eliminarán, las eliminadas se restaurarán y solo se revertirán algunos campos; algunos puntos de revisión TR y DCP deberán volver a enviarse. Esta operación sobrescribirá el cronograma actual y no se puede recuperar. Proceda con precaución. ¿Continuar?';
$lang->programplan->canNotCallback   = 'No se puede revertir. Las fechas del plan de ejecución superarían las fechas del plan del proyecto. Ajuste primero las fechas del plan del proyecto.';
$lang->programplan->frozenCallback   = 'No se permite revertir la versión después de que la etapa haya sido establecida como línea base.';

$lang->programplan->milestoneList[1] = 'Sí';
$lang->programplan->milestoneList[0] = 'No';

$lang->programplan->delayList = array();
$lang->programplan->delayList[1] = 'Sí';
$lang->programplan->delayList[0] = 'No';

$lang->programplan->enabledList = array();
$lang->programplan->enabledList['on']  = 'Habilitar';
$lang->programplan->enabledList['off'] = 'Deshabilitar';

$lang->programplan->typeList = array();
$lang->programplan->typeList['stage']     = 'Fase';
$lang->programplan->typeList['agileplus'] = $lang->executionCommon . '/Kanban';

$lang->programplan->noData            = 'Aún no hay datos disponibles.';
$lang->programplan->children          = 'Sub-plan';
$lang->programplan->childrenAB        = 'Sub';
$lang->programplan->confirmDelete     = '¿Seguro que desea eliminar el plan?';
$lang->programplan->confirmChangeAttr = 'El tipo de la subfase se actualizará automáticamente para coincidir con el tipo de la fase padre %s. ¿Desea guardar los cambios?';
$lang->programplan->noticeChangeAttr  = 'El tipo de la subfase se actualizará automáticamente para coincidir con el tipo de la fase padre %s. ';
$lang->programplan->noticeDiffVersion = 'Al comparar versiones, la versión de la izquierda se muestra en color normal y la de la derecha en gris oscuro.';
$lang->programplan->workloadTips      = 'La carga de trabajo de las subfases se dividirá proporcionalmente hasta sumar 100%.';
$lang->programplan->emptyStageTip     = 'Comuníquese con el administrador para configurar la lista de etapas IPD en la "Configuración de procesos de proyecto" del backend.';

$lang->programplan->stageCustom['date'] = 'Mostrar fecha';
$lang->programplan->stageCustom['task'] = 'Mostrar tarea';

$lang->programplan->ganttCustom['ownerID']        = 'Gerente';
$lang->programplan->ganttCustom['status']         = 'Estado';
$lang->programplan->ganttCustom['begin']          = 'Inicio';
$lang->programplan->ganttCustom['deadline']       = 'Fecha límite';
$lang->programplan->ganttCustom['realBegan']      = 'Inicio real';
$lang->programplan->ganttCustom['realEnd']        = 'Fin real';
$lang->programplan->ganttCustom['duration']       = 'Duración';
$lang->programplan->ganttCustom['progress']       = 'Proporción de carga de trabajo';
$lang->programplan->ganttCustom['taskProgress']   = 'Progreso de la tarea';
$lang->programplan->ganttCustom['estimate']       = 'Estimación';
$lang->programplan->ganttCustom['consumed']       = 'Consumido';
$lang->programplan->ganttCustom['left']           = 'Izquierda';
$lang->programplan->ganttCustom['delay']          = 'Retraso';
$lang->programplan->ganttCustom['delayDays']      = 'Días de retraso';
$lang->programplan->ganttCustom['taskType']       = 'Tipo';
$lang->programplan->ganttCustom['openedBy']       = 'Creador';
$lang->programplan->ganttCustom['openedDate']     = 'Fecha de creación';
$lang->programplan->ganttCustom['assignedDate']   = 'Fecha de asignación';
$lang->programplan->ganttCustom['finishedBy']     = 'Finalizado por';
$lang->programplan->ganttCustom['closedBy']       = 'Cerrado por';
$lang->programplan->ganttCustom['closedDate']     = 'Fecha de cierre';
$lang->programplan->ganttCustom['closedReason']   = 'Motivo de cierre';
$lang->programplan->ganttCustom['canceledBy']     = 'Cancelado por';
$lang->programplan->ganttCustom['canceledDate']   = 'Fecha de cancelación';
$lang->programplan->ganttCustom['lastEditedBy']   = 'Última edición por';
$lang->programplan->ganttCustom['lastEditedDate'] = 'Fecha de última edición';
$lang->programplan->ganttCustom['activatedDate']  = 'Fecha de activación';
$lang->programplan->ganttCustom['story']          = 'Historia';
$lang->programplan->ganttCustom['keywords']       = 'Palabras clave';
$lang->programplan->ganttCustom['mailto']         = 'Enviar a';

$lang->programplan->error                  = new stdclass();
$lang->programplan->error->percentNumber   = 'La proporción de carga de trabajo debe ser un valor numérico.';
$lang->programplan->error->planFinishSmall = 'La hora de fin planificada debe ser posterior a la hora de inicio planificada.';
$lang->programplan->error->percentOver     = 'La proporción total de carga de trabajo de todas las subfases de una misma fase padre no debe superar el 100%.';
$lang->programplan->error->createdTask     = 'Esta fase tiene tareas descompuestas. No se pueden agregar subfases.';
$lang->programplan->error->parentWorkload  = 'La carga de trabajo total de todas las subfases no puede superar la carga de trabajo de la fase padre: %s.';
$lang->programplan->error->letterParent    = "La fecha de inicio planificada de una subfase no puede ser anterior a la fecha de inicio planificada de la fase padre %s.";
$lang->programplan->error->greaterParent   = "La fecha de fin planificada de una subfase no puede superar la fecha de fin planificada de la fase padre %s.";
$lang->programplan->error->sameName        = 'Los nombres de fase deben ser únicos.';
$lang->programplan->error->sameCode        = 'Los códigos de fase deben ser únicos.';
$lang->programplan->error->taskDrag        = 'Las tareas de %s no se pueden mover.';
$lang->programplan->error->planDrag        = 'Las fases de %s no se pueden mover.';
$lang->programplan->error->notStage        = 'No se pueden crear subfases en la '. $lang->executionCommon . '/ Kanban board.';
$lang->programplan->error->sameType        = 'El tipo de la fase padre es %s. El tipo de la fase actual debe coincidir con el de la fase padre.';
$lang->programplan->error->emptyParentName = "La fase contiene subfases, y el nombre de la subetapa no puede estar vacío.";
$lang->programplan->error->noProject       = "A Gantt chart cannot be added because no Waterfall or Waterfal + {$lang->projectCommon} exists in the system.";
$lang->programplan->error->noProject4IPD   = "A Gantt chart cannot be added because no Waterfall, Waterfal +, or IPD {$lang->projectCommon} exists in the system.";

$lang->programplan->ganttBrowseType['gantt']      = 'Agrupar por fase';
$lang->programplan->ganttBrowseType['assignedTo'] = 'Agrupar por responsable asignado';
$lang->programplan->ganttBrowseType['type']       = 'Agrupar por tipo';
$lang->programplan->ganttBrowseType['module']     = 'Agrupar por módulo';
$lang->programplan->ganttBrowseType['story']      = "Group by {$lang->SRCommon}";
$lang->programplan->ganttBrowseType['status']     = 'Agrupar por estado';
$lang->programplan->ganttBrowseType['pri']        = 'Agrupar por prioridad';
$lang->programplan->ganttBrowseType['finishedBy'] = 'Agrupar por finalizado por';
$lang->programplan->ganttBrowseType['closedBy']   = 'Agrupar por cerrado por';

$lang->programplan->reviewColorList['draft']     = '#FC913F';
$lang->programplan->reviewColorList['reviewing'] = '#CD6F27';
$lang->programplan->reviewColorList['pass']      = '#0DBB7D';
$lang->programplan->reviewColorList['fail']      = '#FB2B2B';
