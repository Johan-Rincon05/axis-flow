<?php
/**
 * The task module en file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2022 禅道软件（青岛）有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Shujie Tian <tianshujie@cnezsoft.com>
 * @package     task
 * @version     $Id: en.php 5040 2022-02-28 09:36:18Z $
 * @link        https://www.zentao.net
 */
$lang->task->index               = "Inicio";
$lang->task->create              = "Crear tarea";
$lang->task->batchCreateChildren = "Crear tareas hijas por lote";
$lang->task->edit                = "Editar tarea";
$lang->task->deleteAction        = "Eliminar tarea";
$lang->task->view                = "Detalle de la tarea";
$lang->task->startAction         = "Iniciar tarea";
$lang->task->restartAction       = "Continuar tarea";
$lang->task->finishAction        = "Finalizar tarea";
$lang->task->pauseAction         = "Pausar tarea";
$lang->task->closeAction         = "Cerrar tarea";
$lang->task->cancelAction        = "Cancelar tarea";
$lang->task->activateAction      = "Activar tarea";
$lang->task->exportAction        = "Exportar tarea";
$lang->task->copy                = 'Copiar tarea';
$lang->task->waitTask            = 'Tarea en espera';
$lang->task->region              = 'Región';
$lang->task->lane                = 'Carril';

$lang->task->module       = 'Módulo';
$lang->task->allModule    = 'Todos los módulos';
$lang->task->common       = 'Tarea';
$lang->task->name         = 'Nombre';
$lang->task->type         = 'Tipo';
$lang->task->status       = 'Estado';
$lang->task->desc         = 'Descripción';
$lang->task->assignAction = 'Asignar tarea';
$lang->task->multiple     = 'Varios usuarios';
$lang->task->children     = 'Tarea hija';
$lang->task->parent       = 'Tarea padre';

/* Fields of zt_taskestimate. */
$lang->task->task = 'Tarea';

$lang->task->dittoNotice       = "¡Esta tarea no está vinculada a %s como la anterior!";
$lang->task->yesterdayFinished = 'Tareas finalizadas ayer';
$lang->task->allTasks          = 'Tarea';

$lang->task->afterChoices['continueAdding'] = ' Continuar agregando tareas';
$lang->task->afterChoices['toTaskList']     = 'Ir a la lista de tareas';

$lang->task->legendLife   = 'Ciclo de vida de la tarea';
$lang->task->legendDesc   = 'Descripción de la tarea';
$lang->task->legendDetail = 'Detalle de la tarea';

$lang->task->confirmDelete         = "¿Desea eliminar esta tarea?";
$lang->task->confirmDeleteEffort   = "¿Desea eliminarlo?";
$lang->task->confirmFinish         = '"Horas restantes" es 0. ¿Desea cambiar el estado a "Finalizado"?';
$lang->task->confirmRecord         = '"Horas restantes" es 0. ¿Desea establecer la tarea como "Finalizada"?';
$lang->task->confirmTransfer       = '"Horas restantes" es 0. ¿Desea transferir la tarea?';
$lang->task->noTask                = 'Aún no hay tareas. ';
$lang->task->kanbanDenied          = 'Cree primero un Kanban';
$lang->task->createDenied          = "Crear tarea está denegado en {$lang->projectCommon}";
$lang->task->cannotDeleteParent    = 'No se puede eliminar la tarea padre';
$lang->task->addChildTask          = 'Como la tarea tiene horas consumidas, ZenTao creará una tarea hija con el mismo nombre para registrar las horas consumidas y garantizar la consistencia de los datos.';

$lang->task->error->skipClose       = 'Tarea: %s no está “Finalizada” ni “Cancelada”. ¿Desea cerrarla?';
$lang->task->error->consumed        = 'Tarea: las horas de %s deben ser < 0. Se ignoran los cambios en esta tarea.';
$lang->task->error->assignedTo      = 'Una tarea multiusuario en el estado actual no puede asignarse a un miembro que no esté en el equipo de la tarea.';
$lang->task->error->alreadyStarted  = 'No se puede iniciar esta tarea porque ya está iniciada.';
$lang->task->error->alreadyConsumed = 'La tarea padre seleccionada actualmente ya ha sido consumida.';

/* Report. */
$lang->task->report->value = 'Tareas';

$lang->task->report->charts['tasksPerExecution'] = 'Agrupar por ' . $lang->executionCommon . 'Tarea';
$lang->task->report->charts['tasksPerModule']    = 'Agrupar por tarea de módulo';
$lang->task->report->charts['tasksPerType']      = 'Agrupar por tipo de tarea';
$lang->task->report->charts['tasksPerStatus']    = 'Agrupar por estado de la tarea';
