<?php
$lang->space->browse     = 'Lista de espacios';
$lang->space->create     = 'Crear espacio';
$lang->space->edit       = 'Editar espacio';
$lang->space->view       = 'Detalle del espacio';
$lang->space->delete     = 'Eliminar espacio';
$lang->space->members    = 'Miembros';
$lang->space->memberList = 'Lista de miembros';

$lang->space->group             = 'Permiso';
$lang->space->groupList         = 'Lista de permisos';
$lang->space->createGroup       = 'Agregar grupo de permisos';
$lang->space->managePriv        = 'Asignar permiso';
$lang->space->importGroup       = 'Importar grupo de permisos';
$lang->space->editGroup         = 'Editar grupo de permisos';
$lang->space->deleteGroup       = 'Eliminar grupo de permisos';
$lang->space->manageMembers     = 'Administrar miembros';
$lang->space->removeMember      = 'Desvincular miembro';
$lang->space->manageGroupMember = 'Administrar miembros del grupo de permisos';

$lang->space->name         = 'Nombre';
$lang->space->code         = 'Código';
$lang->space->manager      = 'Gerente';
$lang->space->createdDate  = 'Fecha de creación';
$lang->space->desc         = 'Descripción';
$lang->space->repo         = 'Repositorio';
$lang->space->artifactrepo = 'Repositorio de artefactos';
$lang->space->pipeline     = 'Pipeline';
$lang->space->system       = 'Aplicación';
$lang->space->acl          = 'Control de acceso';
$lang->space->deleted      = 'Eliminado';
$lang->space->account      = 'Nombre';
$lang->space->team         = 'Equipo';
$lang->space->auth         = 'Control de acceso';
$lang->space->role         = 'Rol';
$lang->space->defaultSpace = 'Espacio predeterminado';

$lang->space->memberGroup    = 'Grupo de permisos';
$lang->space->accessRepo     = 'Acceder a repositorios';
$lang->space->accessArtifact = 'Acceder a repositorios de artefactos';
$lang->space->sourceSpace    = 'Espacio del grupo de origen';
$lang->space->sourceGroup    = 'Grupo de origen';

$lang->space->aclList = array();
$lang->space->aclList['open']    = 'Abierto';
$lang->space->aclList['private'] = 'Privado';

$lang->space->aclNoticeList = array();
$lang->space->aclNoticeList['open']    = 'Público (Cualquier persona con permiso de vista del espacio puede acceder al espacio)';
$lang->space->aclNoticeList['private'] = 'Privado (Solo los miembros y los administradores del espacio pueden acceder al espacio)';

$lang->space->authList = array();
$lang->space->authList['extend'] = 'Extender';
$lang->space->authList['reset']  = 'Restablecer';

$lang->space->authNoticeList = array();
$lang->space->authNoticeList['extend'] = 'Extender (combina el permiso del sistema y el permiso del espacio)';
$lang->space->authNoticeList['reset']  = 'Restablecer (solo permisos de espacio)';

$lang->space->roleList = array();
$lang->space->roleList['manager'] = 'Gerente';
$lang->space->roleList['member']  = 'Miembro';

$lang->space->notice = new stdclass();
$lang->space->notice->noSpaces                = 'No existe ningún espacio';
$lang->space->notice->confirmDeleteSpace      = '¿Seguro que desea eliminar este espacio?';
$lang->space->notice->deleteFail              = 'El espacio contiene repositorios o repositorios de artefactos, no se puede eliminar.';
$lang->space->notice->apiCreateFail           = 'Error al crear el espacio.';
$lang->space->notice->accessRepo              = 'Mostrar solo los usuarios con acceso a repositorios privados';
$lang->space->notice->accessArtifact          = 'Mostrar solo los usuarios con acceso a repositorios privados de artefactos';
$lang->space->notice->confirmRemoveMember     = '¿Seguro que desea quitar a este usuario de este espacio?';
$lang->space->notice->confirmDelete           = '¿Seguro que desea eliminar el grupo de permisos %s?';
$lang->space->notice->managerMemberConflict   = '%s es un usuario de espacio. Para configurarlo como administrador, primero puede eliminar al usuario.';
$lang->space->notice->codeNotSupportUppercase = 'El código no puede contener letras mayúsculas';

$lang->space->placeholder = new stdclass();
$lang->space->placeholder->desc = 'Descripción de este espacio';

$lang->space->tips      = 'Nota';
$lang->space->afterInfo = "El espacio fue creado. A continuación puede ";
$lang->space->setMember = 'Establecer miembro';
$lang->space->setACL    = 'Establecer ACL';
$lang->space->goback    = 'Volver a la lista de espacios';
