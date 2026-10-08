<?php
$lang->custom->executionCommon = 'Kanban';
$lang->custom->closedExecution = 'Cerrado ' . $lang->custom->executionCommon;
$lang->custom->notice->readOnlyOfExecution = "Si se activa Cambios prohibidos, también se prohíbe cualquier cambio en tareas, Builds, esfuerzos e historias de {$lang->executionCommon} cerrada.";

$lang->custom->moduleName['execution'] = $lang->custom->executionCommon;

$lang->custom->task = new stdClass();
$lang->custom->task->fields['required'] = $lang->custom->required;
$lang->custom->task->fields['priList']  = 'Prioridad';
$lang->custom->task->fields['typeList'] = 'Tipo';

$lang->custom->story = new stdClass();
$lang->custom->story->fields['required']         = $lang->custom->required;
$lang->custom->story->fields['priList']          = 'Prioridad';
$lang->custom->story->fields['reasonList']       = 'Motivo de cierre';
$lang->custom->story->fields['statusList']       = 'Estado';
$lang->custom->story->fields['reviewRules']      = 'Reglas de revisión';
$lang->custom->story->fields['reviewResultList'] = 'Resultado de la revisión';
$lang->custom->story->fields['review']           = 'Requiere revisión';

$lang->custom->execution = new stdclass();

$lang->custom->system = array('required');
