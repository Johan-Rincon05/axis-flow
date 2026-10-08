<?php
$lang->dimension->common     = 'Dimensión';
$lang->dimension->macro      = 'Gestión de macros';
$lang->dimension->efficiency = 'Gestión de eficiencia';
$lang->dimension->quality    = 'Gestión de la calidad';

$lang->dimension->acl = 'Control de acceso';
$lang->dimension->aclList['open']    = 'Abierto (Todos los usuarios con permiso de vista de dimensión pueden acceder)';
$lang->dimension->aclList['private'] = 'Privado (Solo pueden acceder los creadores y los usuarios de la lista blanca con permisos de dimensión)';

$lang->dimension->moduleList['']        = '';
$lang->dimension->moduleList['product'] = $lang->productCommon;
$lang->dimension->moduleList['project'] = $lang->projectCommon;
$lang->dimension->moduleList['test']    = 'QA';
$lang->dimension->moduleList['staff']   = 'Empresa';
$lang->dimension->moduleList['devops']  = $lang->devops->common;

$lang->dimension->modules = array();
$lang->dimension->modules['program']   = $lang->program->common;
$lang->dimension->modules['project']   = $lang->projectCommon;
$lang->dimension->modules['product']   = $lang->productCommon;
$lang->dimension->modules['plan']      = 'Plan';
$lang->dimension->modules['execution'] = $lang->executionCommon;
$lang->dimension->modules['release']   = $lang->release->common;
$lang->dimension->modules['story']     = 'Historia';
$lang->dimension->modules['task']      = $lang->task->common;
$lang->dimension->modules['bug']       = $lang->bug->common;
$lang->dimension->modules['doc']       = $lang->doc->common;
$lang->dimension->modules['cost']      = 'Costo';
$lang->dimension->modules['personnel'] = 'Personal';
$lang->dimension->modules['effort']    = 'Esfuerzo';
$lang->dimension->modules['timelimit'] = 'Límite de tiempo';
$lang->dimension->modules['progress']  = 'Progreso';
$lang->dimension->modules['testcase']  = $lang->testcase->common;
$lang->dimension->modules['behavior']  = 'Comportamiento';
$lang->dimension->modules['devops']    = $lang->devops->common;
