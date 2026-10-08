<?php
$lang->branch->common = 'Rama';
$lang->branch->manage = 'Administrar rama';
$lang->branch->sort   = 'Ordenar ramas';
$lang->branch->delete = 'Eliminar rama';
$lang->branch->add    = 'Agregar';

$lang->branch->manageTitle = 'Gestión de %s';
$lang->branch->all         = 'Todos ';
$lang->branch->main        = 'Principal';

$lang->branch->edit              = 'Editar %s';
$lang->branch->editAction        = 'Editar rama';
$lang->branch->activate          = 'Activar';
$lang->branch->activateAction    = 'Activar rama';
$lang->branch->close             = 'Cerrar';
$lang->branch->closeAction       = 'Cerrar rama';
$lang->branch->create            = 'Crear %s';
$lang->branch->createAction      = 'Crear rama';
$lang->branch->merge             = 'Combinar';
$lang->branch->batchEdit         = 'Editar por lote';
$lang->branch->defaultBranch     = 'Rama predeterminada';
$lang->branch->setDefault        = 'Establecer como predeterminado';
$lang->branch->setDefaultAction  = 'Establecer rama predeterminada';
$lang->branch->mergeTo           = 'Combinar en';
$lang->branch->mergeBranch       = 'Combinar rama';
$lang->branch->mergeBranchAction = 'Combinar rama';

$lang->branch->id          = 'ID';
$lang->branch->product     = $lang->productCommon;
$lang->branch->name        = 'Nombre';
$lang->branch->status      = 'Estado';
$lang->branch->createdDate = 'Creado el';
$lang->branch->closedDate  = 'Cerrado el';
$lang->branch->desc        = 'Descripción';
$lang->branch->order       = 'Ordenar';
$lang->branch->deleted     = 'Eliminado';
$lang->branch->closed      = 'Cerrado';
$lang->branch->default     = 'Predeterminado';

$lang->branch->confirmDelete     = '¿Seguro que desea eliminar este @branch@?';
$lang->branch->confirmSetDefault = '¿Seguro que desea establecer este @branch@ como predeterminado? Una vez establecido, los planes y lanzamientos usarán este @branch@ de forma predeterminada.';
$lang->branch->canNotDelete      = 'Esta @branch@ contiene datos y no se puede eliminar.';
$lang->branch->nameNotEmpty      = 'El nombre es obligatorio.';
$lang->branch->confirmClose      = '¿Seguro que desea cerrar este @branch@?';
$lang->branch->confirmActivate   = '¿Seguro que desea activar este @branch@?';
$lang->branch->existName         = 'El nombre de @branch@ ya existe.';
$lang->branch->mergedMain        = 'Trunk no se puede fusionar.';
$lang->branch->mergeTips         = 'Después de la fusión, todos los lanzamientos, planes, builds, módulos, historias, Bugs y casos de prueba de este @branch@ se moverán al @branch@ de destino.';
$lang->branch->targetBranchTips  = 'Puede fusionarlo en un @branch@ existente, en trunk, o crear un nuevo @branch@.';
$lang->branch->confirmMerge      = 'Los datos de mergedBranch se fusionarán en targetBranch. ¿Está seguro de continuar? Esta acción no se puede deshacer.';

$lang->branch->noData     = 'Aún no hay ramas.';
$lang->branch->mainBranch = "Troncal predeterminado de {$lang->productCommon}: %s.";

$lang->branch->statusList = array();
$lang->branch->statusList['active'] = 'Activar';
$lang->branch->statusList['closed'] = 'Cerrado';

$lang->branch->featureBar['manage']['all']    = 'Todos';
$lang->branch->featureBar['manage']['active'] = 'Activar';
$lang->branch->featureBar['manage']['closed'] = 'Cerrado';
