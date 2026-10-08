<?php
$lang->repobranchtype->common        = 'Tipo de rama';
$lang->repobranchtype->browse        = 'Explorar tipos de rama';
$lang->repobranchtype->create        = 'Crear tipo de rama';
$lang->repobranchtype->edit          = 'Editar tipo de rama';
$lang->repobranchtype->delete        = 'Eliminar tipo de rama';
$lang->repobranchtype->import        = 'Importar tipo de rama';
$lang->repobranchtype->setBranchRule = 'Establecer flujo de revisión';

$lang->repobranchtype->name     = 'Nombre';
$lang->repobranchtype->key      = 'Clave';
$lang->repobranchtype->prefixes = 'Prefijos';
$lang->repobranchtype->desc     = 'Descripción';

$lang->repobranchtype->placeholder      = new stdclass();
$lang->repobranchtype->placeholder->key = 'Identificador único de las reglas de rama, debe comenzar con una letra';

$lang->repobranchtype->tips = new stdclass();
$lang->repobranchtype->tips->maxPrefixes    = 'Máximo 5 prefijos';
$lang->repobranchtype->tips->minPrefixes    = 'Mínimo 1 prefijo';
$lang->repobranchtype->tips->prefixRequired = 'Se requiere al menos 1 prefijo';
$lang->repobranchtype->tips->createSuccess  = 'Tipo de rama creado correctamente';
$lang->repobranchtype->tips->updateSuccess  = 'Tipo de rama actualizado correctamente';
$lang->repobranchtype->tips->importSuccess  = 'Tipo de rama importado correctamente';

$lang->repobranchtype->error = new stdclass();
$lang->repobranchtype->error->keyFormat       = 'El formato de la clave es incorrecto; debe comenzar con una letra y contener solo letras, números y símbolos (/-_.)';
$lang->repobranchtype->error->prefixFormat    = 'El formato del prefijo es incorrecto; solo debe contener letras, números y símbolos (/-_.)';
$lang->repobranchtype->error->prefixSlash     = 'El prefijo debe contener una sola barra diagonal';
$lang->repobranchtype->error->prefixDuplicate = 'El prefijo no puede estar duplicado';
$lang->repobranchtype->error->notExists       = 'El tipo de rama no existe';

$lang->repobranchtype->notice = new stdclass();
$lang->repobranchtype->notice->delete                     = '¿Seguro que desea eliminar este tipo de rama?';
$lang->repobranchtype->notice->noPermissionToCreateBranch = 'Sin permiso para crear ramas';
$lang->repobranchtype->notice->noPermissionToDeleteBranch = 'Sin permiso para eliminar ramas';
