<?php
/**
 * The todo module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     todo
 * @version     $Id: en.php 4676 2013-04-26 06:08:23Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */
global $config;
$lang->todo->index        = 'Inicio';
$lang->todo->create       = 'Agregar pendiente';
$lang->todo->createCycle  = 'Agregar pendiente recurrente';
$lang->todo->assignTo     = 'Asignado a';
$lang->todo->assignedDate = 'Fecha de asignación';
$lang->todo->assignAction = 'Asignar pendiente';
$lang->todo->start        = 'Iniciar pendiente';
$lang->todo->activate     = 'Activar pendiente';
$lang->todo->batchCreate  = 'Agregar por lote ';
$lang->todo->edit         = 'Editar pendiente';
$lang->todo->close        = 'Cerrar pendiente';
$lang->todo->batchClose   = 'Cerrar por lote';
$lang->todo->batchEdit    = 'Editar pendientes por lote';
$lang->todo->view         = 'Detalles del pendiente';
$lang->todo->finish       = 'Completar pendiente';
$lang->todo->batchFinish  = 'Completar por lote';
$lang->todo->export       = 'Exportar pendientes';
$lang->todo->delete       = 'Eliminar pendiente';
$lang->todo->import2Today = 'Fecha de cambio';
$lang->todo->import       = 'Importar';
$lang->todo->legendBasic  = 'Información básica';
$lang->todo->cycle        = 'Repetir';
$lang->todo->cycleConfig  = 'Recurrencia';
$lang->todo->project      = $lang->projectCommon;
$lang->todo->product      = $lang->productCommon;
$lang->todo->execution    = $lang->executionCommon;
$lang->todo->changeDate   = 'Fecha de cambio';
$lang->todo->future       = 'TBD';
$lang->todo->timespanTo   = 'A';
$lang->todo->transform    = 'Convertir a';

$lang->todo->reasonList['story'] = 'Convertir a historia';
$lang->todo->reasonList['task']  = 'Convertir a tarea';
$lang->todo->reasonList['bug']   = 'Convertir a Bug';
$lang->todo->reasonList['done']  = 'Hecho';

$lang->todo->id           = 'ID';
$lang->todo->idAB         = 'ID';
$lang->todo->account      = 'Creador';
$lang->todo->date         = 'Fecha';
$lang->todo->begin        = 'Iniciar';
$lang->todo->end          = 'Fin';
$lang->todo->beginAB      = 'Iniciar';
$lang->todo->endAB        = 'Fin';
$lang->todo->beginAndEnd  = 'Duración';
$lang->todo->objectID     = 'ID vinculado';
$lang->todo->type         = 'Tipo';
$lang->todo->pri          = 'Prioridad';
$lang->todo->name         = 'Título';
$lang->todo->status       = 'Estado';
$lang->todo->desc         = 'Descripción';
$lang->todo->config       = 'Configuración';
$lang->todo->private      = 'Privado';
$lang->todo->cycleDay     = 'days';
$lang->todo->cycleWeek    = 'Semana';
$lang->todo->cycleMonth   = 'Mes';
$lang->todo->cycleYear    = 'Año';
$lang->todo->day          = 'Día';
$lang->todo->assignedTo   = 'Asignado a';
$lang->todo->assignedBy   = 'Asignado por';
$lang->todo->finishedBy   = 'Completado por';
$lang->todo->finishedDate = 'Tiempo de finalización';
$lang->todo->closedBy     = 'Cerrado por';
$lang->todo->closedDate   = 'Fecha de cierre';
$lang->todo->deadline     = 'Fecha de vencimiento';
$lang->todo->deleted      = 'Eliminado';
$lang->todo->ditto        = 'Ídem';
$lang->todo->from         = 'Desde';
$lang->todo->generate     = 'Crear pendiente';
$lang->todo->advance      = 'Por adelantado';
$lang->todo->cycleType    = 'Se repite cada';
$lang->todo->monthly      = 'Por mes';
$lang->todo->weekly       = 'Por semana';
$lang->todo->dateHoder    = 'Seleccionar fecha';

$lang->todo->cycleDaysLabel  = 'Días de intervalo';
$lang->todo->beforeDaysLabel = 'Días de anticipación';

$lang->todo->every        = 'Cada';
$lang->todo->specify      = 'specified';
$lang->todo->everyYear    = 'Por año';
$lang->todo->beforeDays   = "<span class='input-group-addon'>Crear automáticamente el pendiente</span>%s<span class='input-group-addon'>días de anticipación.</span>";
$lang->todo->dayNames     = array(1 => 'Lunes', 2 => 'Martes', 3 => 'Miércoles', 4 => 'Jueves', 5 => 'Viernes', 6 => 'Sábado', 0 => 'Domingo');
$lang->todo->specifiedDay = array(1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);

$lang->todo->confirmBug         = 'Este pendiente está vinculado al Bug #%s. ¿Desea actualizarlo?';
$lang->todo->confirmTask        = 'Este pendiente está vinculado a la Tarea #%s, ¿desea actualizarla?';
$lang->todo->confirmStory       = 'Este pendiente está vinculado a la Historia #%s, ¿desea actualizarla?';
$lang->todo->confirmEpic        = $lang->todo->confirmStory;
$lang->todo->confirmRequirement = $lang->todo->confirmStory;
$lang->todo->noOptions          = 'Por el momento no tiene pendientes de tipo %s. Seleccione otro tipo de pendiente.';
$lang->todo->summary            = 'Total de pendientes: <strong>%s</strong>, En espera: <strong>%s</strong>, En curso: <strong>%s</strong>.';
$lang->todo->checkedSummary     = 'Pendientes seleccionados: <strong>%total%</strong>, En espera: <strong>%wait%</strong>, En curso: <strong>%doing%</strong>';

$lang->todo->abbr = new stdclass();
$lang->todo->abbr->start  = 'Iniciar';
$lang->todo->abbr->finish = 'Completar';

$lang->todo->statusList['wait']   = 'En espera';
$lang->todo->statusList['doing']  = 'En curso';
$lang->todo->statusList['done']   = 'Hecho';
$lang->todo->statusList['closed'] = 'Cerrado';
//$lang->todo->statusList['cancel']   = 'Cancelled';
//$lang->todo->statusList['postpone'] = 'Delayed';

$lang->todo->priList[1] = 'Urgente';
$lang->todo->priList[2] = 'Alta';
$lang->todo->priList[3] = 'Normal';
$lang->todo->priList[4] = 'Baja';

$lang->todo->typeList['custom']      = 'Personalizar';
$lang->todo->typeList['cycle']       = 'Recurrente';
$lang->todo->typeList['bug']         = 'Bug';
$lang->todo->typeList['task']        = 'Tarea';
$lang->todo->typeList['story']       = 'Historia';
if($config->enableER) $lang->todo->typeList['epic']        = $lang->ERCommon;
if($config->URAndSR)  $lang->todo->typeList['requirement'] = $lang->URCommon;
$lang->todo->typeList['testtask']    = 'Solicitud de prueba';

$lang->todo->fromList['bug']   = 'Bug relacionado';
$lang->todo->fromList['task']  = 'Bug relacionado';
$lang->todo->fromList['story'] = 'Relacionado' . $lang->SRCommon;

$lang->todo->confirmDelete  = '¿Seguro que desea eliminar este pendiente?';
$lang->todo->thisIsPrivate  = 'Este es un pendiente privado.';
$lang->todo->lblDisableDate = 'TBD';
$lang->todo->lblBeforeDays  = 'Crear el pendiente con %s día(s) de anticipación.';
$lang->todo->lblClickCreate = 'Clic para agregar pendiente';
$lang->todo->noTodo         = 'No hay pendientes disponibles para este tipo.';
$lang->todo->noAssignedTo   = 'El responsable no puede estar vacío.';
$lang->todo->unfinishedTodo = 'El pendiente D%s no está completado y no se puede cerrar.';
$lang->todo->today          = 'Pendiente de hoy';
$lang->todo->selectProduct  = "Please select a {$lang->productCommon}.";
$lang->todo->privateTip     = 'Solo los pendientes que creé y me asigné a mí mismo pueden marcarse como privados. Una vez privados, solo yo puedo verlos.';

$lang->todo->periods['all']             = 'Asignado a mí';
$lang->todo->periods['before']          = 'Sin completar';
$lang->todo->periods['future']          = 'TBD';
$lang->todo->periods['thisWeek']        = 'Esta semana';
$lang->todo->periods['thisMonth']       = 'Este mes';
$lang->todo->periods['thisYear']        = 'Este año';
$lang->todo->periods['assignedToOther'] = 'Asignado a otros';
$lang->todo->periods['cycle']           = 'Recurrencia';

$lang->todo->action = new stdclass();
$lang->todo->action->finished = array('main' => '$date, está $extra por <strong>$actor</strong>.', 'extra' => 'reasonList');
$lang->todo->action->marked   = array('main' => '$date, marcado por <strong>$actor</strong> como <strong>$extra</strong>.', 'extra' => 'statusList');
