<?php

$lang->tree->all             = 'Todos';
$lang->tree->allMenu         = $lang->tree->all;
$lang->tree->manageMenu      = 'Administrar categoría';
$lang->tree->manage          = 'Administrar categoría';
$lang->tree->common          = 'Administrar categoría';
$lang->tree->manageExecution = "Gestionar categoría de {$lang->executionCommon}";
$lang->tree->manageTaskChild = "Gestionar subcategoría de {$lang->executionCommon}";
$lang->tree->name            = 'Nombre de la categoría';

global $app;
if($app->rawModule == 'tree' and $app->rawMethod == 'browse')
{
    $lang->tree->edit             = 'Editar categoría';
    $lang->tree->delete           = 'Eliminar categoría';
    $lang->tree->child            = 'Subcategoría';
    $lang->tree->manageStoryChild = 'Administrar subcategoría';
    $lang->tree->name             = 'Nombre de la categoría';
    $lang->tree->syncFromProduct  = 'Copiar categoría';
}
if($app->rawModule == 'story') $lang->tree->manage = $lang->tree->manageMenu;
