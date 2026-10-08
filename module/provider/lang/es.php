<?php
$lang->provider->browse = 'Explorar proveedores';
$lang->provider->create = 'Crear proveedor';
$lang->provider->edit   = 'Editar proveedor';
$lang->provider->delete = 'Eliminar proveedor';

$lang->provider->browseAction = 'Explorar proveedores';
$lang->provider->createAction = 'Crear proveedor';
$lang->provider->editAction   = 'Editar proveedor';
$lang->provider->deleteAction = 'Eliminar proveedor';

$lang->provider->name        = 'Nombre';
$lang->provider->type        = 'Tipo';
$lang->provider->url         = 'URL';
$lang->provider->token       = 'Token';
$lang->provider->account     = 'Cuenta';
$lang->provider->createdBy   = 'Creado por';
$lang->provider->createdDate = 'Fecha de creación';

$lang->provider->error = new stdclass();
$lang->provider->error->api            = 'No se puede acceder al servidor.';
$lang->provider->error->apiWithMessage = 'No se puede acceder al servidor: %s';
$lang->provider->error->svnClient      = 'El cliente de Subversion no está disponible.';

$lang->provider->typeList = array();
$lang->provider->typeList['GitLab']     = 'GitLab';
$lang->provider->typeList['Gitea']      = 'Gitea';
$lang->provider->typeList['Gogs']       = 'Gogs';
$lang->provider->typeList['Subversion'] = 'Subversion';
$lang->provider->typeList['Jenkins']    = 'Jenkins';

$lang->provider->notice = new stdclass();
$lang->provider->notice->confirmDelete = '¿Seguro que desea eliminar este proveedor?';
$lang->provider->notice->emptyProvider = 'Sin proveedores.';
$lang->provider->notice->svnPath       = 'Dirección del servidor o ruta del archivo';
$lang->provider->notice->hasRepos      = 'Este proveedor está vinculado a repositorios, elimínelos primero.';
