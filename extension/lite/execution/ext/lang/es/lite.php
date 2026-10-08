<?php
global $lang;
unset($lang->execution->featureBar['all']['undone']);
unset($lang->execution->featureBar['all']['wait']);
unset($lang->execution->featureBar['all']['suspended']);

$lang->execution->createKanban    = 'Crear Kanban';
$lang->execution->noExecution     = "Sin Kanban.";
$lang->execution->importTask      = 'Importar tarea';
$lang->execution->batchCreateTask = 'Crear tarea por lote';
$lang->execution->linkStory       = "Vincular {$lang->SRCommon}";
$lang->execution->closedExecution = 'Kanban cerrado';

$lang->execution->kanbanGroup['default']    = 'Predeterminado';
$lang->execution->kanbanGroup['story']      = 'Objetivo';
$lang->execution->kanbanGroup['module']     = 'Módulo';
$lang->execution->kanbanGroup['pri']        = 'Prioridad';
$lang->execution->kanbanGroup['assignedTo'] = 'Responsable';

$lang->execution->icons['kanban']    = 'kanban';
$lang->execution->icons['task']      = 'list';
$lang->execution->icons['calendar']  = 'calendar';
$lang->execution->icons['gantt']     = 'lane';
$lang->execution->icons['tree']      = 'treemap';
$lang->execution->icons['grouptask'] = 'sitemap';

$lang->execution->aclList['private'] = "Privado (accesible para los miembros del equipo y los líderes de {$lang->projectCommon})";

$lang->execution->common = "Ejecución de {$lang->projectCommon}";

$lang->execution->gantt->browseType['module'] = 'Agrupar por categoría';

$lang->execution->ganttCustom['story'] = 'Meta';
