<?php
if(!isset($lang->holiday)) $lang->holiday = new stdclass();
$lang->holiday->common = 'Festivo';
$lang->holiday->browse = 'Explorar';
$lang->holiday->create = 'Crear';
$lang->holiday->edit   = 'Editar';
$lang->holiday->delete = 'Eliminar';

$lang->holiday->createAction = 'Crear día festivo';
$lang->holiday->editAction   = 'Editar día festivo';
$lang->holiday->deleteAction = 'Eliminar día festivo';
$lang->holiday->importAction = 'Importar festivo';

$lang->holiday->id    = 'ID';
$lang->holiday->name  = 'Nombre';
$lang->holiday->desc  = 'Descripción';
$lang->holiday->type  = 'Tipo';
$lang->holiday->begin = 'Inicio';
$lang->holiday->end   = 'Fin';
$lang->holiday->all   = 'Todos';

$lang->holiday->holiday   = 'Festivo';
$lang->holiday->checkYear = 'Selección de año';

$lang->holiday->typeList['holiday'] = 'Festivo';
$lang->holiday->typeList['working'] = 'Día laborable';

$lang->holiday->emptyTip      = 'Sin festivo';
$lang->holiday->confirmDelete = '¿Confirma quitar los días festivos?';
$lang->holiday->importTip     = '';
