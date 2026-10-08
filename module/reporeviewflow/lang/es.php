<?php
$lang->reporeviewflow->browse       = 'Explorar flujos de revisión';
$lang->reporeviewflow->create       = 'Crear flujo de revisión';
$lang->reporeviewflow->edit         = 'Editar flujo de revisión';
$lang->reporeviewflow->changeStatus = 'Habilitar/Deshabilitar flujo de revisión';
$lang->reporeviewflow->delete       = 'Eliminar flujo de revisión';

$lang->reporeviewflow->name                  = 'Nombre';
$lang->reporeviewflow->desc                  = 'Descripción';
$lang->reporeviewflow->flowName              = 'Nombre del flujo';
$lang->reporeviewflow->branchType            = 'Tipo de rama';
$lang->reporeviewflow->enableFlow            = 'Habilitar';
$lang->reporeviewflow->disableFlow           = 'Deshabilitar';
$lang->reporeviewflow->basicInfo             = 'Información básica';
$lang->reporeviewflow->applicableBranchTypes = 'Tipos de rama de destino';
$lang->reporeviewflow->allBranchTypes        = 'Todos los tipos de rama';
$lang->reporeviewflow->aiReview              = 'Revisión de IA';
$lang->reporeviewflow->aiAssistedReview      = 'Revisión asistida por IA';
$lang->reporeviewflow->aiReviewScores        = 'Puede aprobar la revisión de IA con la puntuación mínima';
$lang->reporeviewflow->manualReview          = 'Revisión manual';
$lang->reporeviewflow->defaultReviewers      = 'Revisores predeterminados';
$lang->reporeviewflow->specifiedReviewers    = 'Los revisores deben incluir a los miembros especificados';
$lang->reporeviewflow->minReviewers          = 'Mínimo de revisores';
$lang->reporeviewflow->solveIssues           = 'Resolver incidencias';
$lang->reporeviewflow->addressOption         = 'Cómo atender las incidencias';
$lang->reporeviewflow->newCommits            = 'Cómo atender los nuevos commits';
$lang->reporeviewflow->mergeStrategy         = 'Estrategia de combinación';
$lang->reporeviewflow->mergeOptions          = 'Opciones de combinación';
$lang->reporeviewflow->autoArchive           = 'Archivado automático';
$lang->reporeviewflow->autoArchiveNotice     = 'Solo se puede fusionar en la rama de origen cuando el archivado de ramas está habilitado';
$lang->reporeviewflow->allBranchTypesNotice  = 'Ya existe un flujo de revisión para Todos los tipos de rama';
$lang->reporeviewflow->enableSuccess         = 'Flujo de revisión habilitado correctamente';
$lang->reporeviewflow->disableSuccess        = 'Flujo de revisión deshabilitado correctamente';
$lang->reporeviewflow->aiScoreTips           = 'El código con una puntuación de IA superior a este umbral aprueba la revisión de IA.';
$lang->reporeviewflow->status                = 'Estado';

$lang->reporeviewflow->flowStatusList = array();
$lang->reporeviewflow->flowStatusList['enable']  = 'Habilitar';
$lang->reporeviewflow->flowStatusList['disable'] = 'Deshabilitar';

$lang->reporeviewflow->aiReviewList = array();
$lang->reporeviewflow->aiReviewList['enable']  = 'Habilitar';
$lang->reporeviewflow->aiReviewList['disable'] = 'Deshabilitar';

$lang->reporeviewflow->addressOptionList = array();
$lang->reporeviewflow->addressOptionList['noNeedToSolve']        = 'No requiere solución';
$lang->reporeviewflow->addressOptionList['allMustBeSolved']      = 'Todo debe resolverse';
$lang->reporeviewflow->addressOptionList['specificMustBeSolved'] = 'El tipo específico debe estar resuelto';

$lang->reporeviewflow->newCommitsAddressOptionList = array();
$lang->reporeviewflow->newCommitsAddressOptionList['defaultApproval'] = 'Aprobación predeterminada';
$lang->reporeviewflow->newCommitsAddressOptionList['requireReReview'] = 'Requiere nueva revisión';

$lang->reporeviewflow->mergeOptionList = array();
$lang->reporeviewflow->mergeOptionList['merge']  = 'Combinar';
$lang->reporeviewflow->mergeOptionList['squash'] = 'Squash';
$lang->reporeviewflow->mergeOptionList['rebase'] = 'Rebase';
$lang->reporeviewflow->mergeOptionList['fast']   = 'Fast-Forward';

$lang->reporeviewflow->autoArchiveStatusList = array();
$lang->reporeviewflow->autoArchiveStatusList['enable']  = 'Habilitar';
$lang->reporeviewflow->autoArchiveStatusList['disable'] = 'Deshabilitar';

$lang->reporeviewflow->notice = new stdclass();
$lang->reporeviewflow->notice->deleteReviewFlow = "¿Desea eliminar el flujo de revisión '%s'?";
