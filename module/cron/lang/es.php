<?php
$lang->cron->common       = 'Tarea programada';
$lang->cron->id           = 'ID';
$lang->cron->buildin      = 'Integrado';
$lang->cron->index        = 'Lista de tareas programadas';
$lang->cron->list         = ' Lista de tareas';
$lang->cron->create       = 'Crear';
$lang->cron->createAction = 'Crear tarea';
$lang->cron->edit         = 'Editar tarea';
$lang->cron->delete       = 'Eliminar tarea';
$lang->cron->toggle       = 'Activar/Desactivar';
$lang->cron->turnon       = 'Sí/No';
$lang->cron->openProcess  = 'Reiniciar';
$lang->cron->restart      = 'Reiniciar tarea programada';

$lang->cron->m        = 'Minuto';
$lang->cron->h        = 'Hora';
$lang->cron->dom      = 'Día';
$lang->cron->mon      = 'Mes';
$lang->cron->dow      = 'Semana';
$lang->cron->command  = 'Comando';
$lang->cron->status   = 'Estado';
$lang->cron->type     = 'Tipo de tarea';
$lang->cron->remark   = 'Comentario';
$lang->cron->lastTime = 'Última ejecución';

$lang->cron->turnonList['1'] = 'Activado';
$lang->cron->turnonList['0'] = 'Desactivado';

$lang->cron->statusList['normal']  = 'Activo';
$lang->cron->statusList['running'] = 'En ejecución';
$lang->cron->statusList['stop']    = 'Detenido';

$lang->cron->typeList['zentao'] = 'Autollamada de AXIS FLOW';
global $config;
if($config->features->cronSystemCall) $lang->cron->typeList['system'] = 'Comando del sistema';

$lang->cron->toggleList['start'] = 'Habilitar';
$lang->cron->toggleList['stop']  = 'Deshabilitar';

$lang->cron->confirmDelete = '¿Seguro que desea eliminar la tarea programada?';
$lang->cron->confirmTurnon = '¿Seguro que desea desactivar la tarea programada?';
$lang->cron->introduction  = <<<EOD
<p>Las tareas programadas sirven para ejecutar acciones programadas, como actualizar el gráfico de burndown, realizar copias de seguridad, etc.</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>¿Desea activarla?<a href="%s"><strong>Activar tarea programada<strong></a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m    = 'Rango: 0-59，"*" indica los números dentro del rango, "/" indica "cada", "-" indica el rango.';
$lang->cron->notice->h    = 'Range:0-23';
$lang->cron->notice->dom  = 'Range:1-31';
$lang->cron->notice->mon  = 'Range:1-12';
$lang->cron->notice->dow  = 'Range:0-6';
$lang->cron->notice->help = 'Nota: si el servidor se reinicia o nota que las tareas programadas no se ejecutan correctamente, significa que el programador se detuvo. Debe hacer clic manualmente en el botón Reiniciar, o actualizar la página después de un minuto, para reanudar las tareas programadas. Si cambia la “Última ejecución” del primer registro de la lista de tareas, indica que el programador se inició correctamente.';
$lang->cron->notice->errorRule = '"%s" no es un valor válido.';
$lang->cron->notice->errorType = 'No se puede crear una tarea programada del tipo “Comando del sistema operativo”.';
