<?php
$lang->block->flowchart            = array();
$lang->block->flowchart['admin']   = array('Administrador', 'Agregar departamentos', 'Agregar usuarios', 'Mantener privilegios');
$lang->block->flowchart['project'] = array('Gerente del proyecto', 'Agregar proyectos', 'Mantener equipos', 'Mantener objetivo', 'Crear Kanban');
$lang->block->flowchart['dev']     = array('Equipo de la ejecución', 'Crear tareas', 'Reclamar tareas', 'Tareas de la ejecución');

$lang->block->undone   = 'Sin hacer';
$lang->block->delaying = 'Retrasando';
$lang->block->delayed  = 'Retrasado';

$lang->block->titleList['scrumlist'] = 'Lista de Kanban';
$lang->block->titleList['sprint']    = 'Resumen del Kanban';

$lang->block->myTask = 'Mi tarea';

$lang->block->finishedTasks = 'Tareas finalizadas';

$lang->block->story = 'Objetivo';

$lang->block->storyCount = 'Cantidad objetivo';

$lang->block->projectstatistic->story = 'Objetivo';

$lang->block->default['full']['my'][] = array('title' => 'Lista de Kanban', 'module' => 'execution', 'code' => 'scrumlist', 'width' => '2', 'height' => '6', 'left' => '0', 'top' => '45', 'params' => array('type' => 'doing', 'orderBy' => 'id_desc', 'count' => '15'));

$lang->block->modules['kanban'] = new stdclass();
$lang->block->modules['kanban']->availableBlocks['scrumoverview']  = "{$lang->projectCommon} Overview";
$lang->block->modules['kanban']->availableBlocks['scrumlist']      = $lang->executionCommon . ' Lista';
$lang->block->modules['kanban']->availableBlocks['sprint']         = $lang->executionCommon . ' Resumen general';
$lang->block->modules['kanban']->availableBlocks['projectdynamic'] = 'Dinámicas';

$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks['project'] = "{$lang->projectCommon} List";

$lang->block->modules['execution'] = new stdclass();
$lang->block->modules['execution']->availableBlocks['statistic'] = $lang->execution->common . ' Estadísticas';
$lang->block->modules['execution']->availableBlocks['overview']  = $lang->execution->common . ' Resumen general';
$lang->block->modules['execution']->availableBlocks['list']      = $lang->execution->common . ' Lista';
$lang->block->modules['execution']->availableBlocks['task']      = 'Lista de tareas';

unset($lang->block->moduleList['product']);
unset($lang->block->moduleList['qa']);

$lang->block->welcome->assignList = array();
$lang->block->welcome->assignList['task'] = 'Tarea';

$lang->block->summary->welcome    = 'Zentao lleva acompañándole durante %s: ';
$lang->block->summary->yesterday  = '<strong>Ayer</strong>';
$lang->block->summary->noWork     = 'Aún no ha procesado tareas ni Bugs,';
$lang->block->summary->finishTask = 'finished <a href="' . helper::createLink('my', 'contribute', 'mode=task&browseType=finishedBy') . '" class="text-success">%s</a> tareas';
$lang->block->summary->fixBug     = '';
