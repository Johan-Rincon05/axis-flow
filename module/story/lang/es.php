<?php
/**
 * The story module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     story
 * @version     $Id: en.php 5141 2013-07-15 05:57:15Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */
global $config;
$lang->story->create            = "Crear {$lang->SRCommon}";

$lang->story->requirement       = zget($lang, 'URCommon', "Funcionalidad");
$lang->story->story             = zget($lang, 'SRCommon', "Historia");
$lang->story->createStory       = 'Crear ' . $lang->story->story;
$lang->story->createRequirement = 'Crear ' . $lang->story->requirement;
$lang->story->affectedStories   = "{$lang->story->story} afectada";

$lang->story->browse             = "Lista de {$lang->SRCommon}";
$lang->story->batchCreate        = "Crear por lote";
$lang->story->change             = "Cambio";
$lang->story->changed            = 'Cambio';
$lang->story->assignTo           = 'Asignar';
$lang->story->review             = 'Revisión';
$lang->story->submitReview       = "Enviar revisión";
$lang->story->recall             = 'Deshacer revisión';
$lang->story->recallChange       = 'Deshacer cambio';
$lang->story->recallAction       = 'Deshacer';
$lang->story->relation           = 'Historias vinculadas';
$lang->story->needReview         = 'Revisión requerida';
$lang->story->batchReview        = 'Revisar por lote';
$lang->story->batchSubmitReview  = 'Enviar a revisión por lote';
$lang->story->edit               = "Editar historia";
$lang->story->editDraft          = "Editar borrador";
$lang->story->batchEdit          = "Editar por lote";
$lang->story->subdivide          = 'Dividir';
$lang->story->subdivideSR        = $lang->SRCommon . 'Dividir';
$lang->story->link               = 'Vincular';
$lang->story->unlink             = 'Desvincular';
$lang->story->track              = 'Matriz de trazabilidad';
$lang->story->trackAB            = 'RTM';
$lang->story->processStoryChange = 'Confirmar cambios de historia';
$lang->story->storyChange        = 'Cambio de historia';
$lang->story->upstreamDemand     = 'Historia ascendente';
$lang->story->split              = 'Dividir';
$lang->story->close              = 'Cerrar';
$lang->story->batchClose         = 'Cerrar por lote';
$lang->story->activate           = 'Activar';
$lang->story->delete             = "Eliminar";
$lang->story->view               = "Detalles de la historia";
$lang->story->setting            = "Configuración";
$lang->story->tasks              = "Tareas vinculadas";
$lang->story->bugs               = "Bugs vinculados";
$lang->story->cases              = "Casos de prueba vinculados";
$lang->story->docs               = "Documentos vinculados";
$lang->story->taskCount          = 'Tareas';
$lang->story->bugCount           = 'Bugs';
$lang->story->caseCount          = 'Casos de prueba';
$lang->story->taskCountAB        = 'Tareas';
$lang->story->bugCountAB         = 'Bugs';
$lang->story->caseCountAB        = 'Casos de prueba';
$lang->story->linkStory          = "Vincular historia";
$lang->story->unlinkStory        = "¿Seguro que desea desvincular la historia?";
$lang->story->linkStoriesAB      = "Vincular {$lang->SRCommon}";
$lang->story->linkRequirementsAB = "Vincular {$lang->URCommon}";
$lang->story->export             = "Exportar datos";
$lang->story->zeroCase           = "Historias sin casos de prueba";
$lang->story->zeroTask           = "Mostrar solo historias sin tareas";
$lang->story->reportChart        = "Informe";
$lang->story->copyTitle          = "Igual que el título de la historia";
$lang->story->batchChangePlan    = "Cambiar planes por lote";
$lang->story->batchChangeBranch  = "Cambiar ramas por lote";
$lang->story->batchChangeStage   = "Cambiar fases por lote";
$lang->story->batchAssignTo      = "Asignar por lote";
$lang->story->batchChangeModule  = "Cambiar módulos por lote";
$lang->story->batchChangeParent  = "Cambiar padre por lote";
$lang->story->batchChangeGrade   = "Cambiar jerarquía por lote";
$lang->story->errorInvalidGrade  = 'La jerarquía de historias seleccionada no está disponible.';
$lang->story->changeParent       = "Cambiar padre";
$lang->story->viewAll            = "Mostrar todo";
$lang->story->toTask             = 'Convertir a tarea';
$lang->story->batchToTask        = 'Convertir en tarea por lote';
$lang->story->convertRelations   = 'Relaciones de conversión';
$lang->story->undetermined       = 'TBD';
$lang->story->order              = 'Ordenar';
$lang->story->saveDraft          = 'Guardar como borrador';
$lang->story->doNotSubmit        = 'Guardar sin enviar';
$lang->story->currentBranch      = 'Rama actual';
$lang->story->twins              = 'Historias gemelas';
$lang->story->relieved           = 'Desvincular';
$lang->story->relievedTwins      = 'Desvincular historias gemelas';
$lang->story->loadAllStories     = 'Todos';
$lang->story->hasDividedTask     = 'Desglose de tareas completado';
$lang->story->hasDividedCase     = 'Casos de prueba creados';
$lang->story->viewAllGrades      = 'Mostrar todas las jerarquías';
$lang->story->codeBranch         = 'Rama de código';
$lang->story->unlinkBranch       = 'Desvincular rama de código';
$lang->story->branchName         = 'Nombre de la rama';
$lang->story->branchFrom         = 'Crear desde';
$lang->story->codeRepo           = 'Repositorio de código';
$lang->story->viewByType         = "Ver por %s";

$lang->story->editAction      = "Editar {$lang->SRCommon}";
$lang->story->changeAction    = "Cambiar {$lang->SRCommon}";
$lang->story->assignAction    = "Asignar {$lang->SRCommon}";
$lang->story->reviewAction    = "Revisar {$lang->SRCommon}";
$lang->story->subdivideAction = "Dividir {$lang->SRCommon}";
$lang->story->closeAction     = "Cerrar {$lang->SRCommon}";
$lang->story->activateAction  = "Activar {$lang->SRCommon}";
$lang->story->deleteAction    = "Eliminar {$lang->SRCommon}";
$lang->story->exportAction    = "Exportar {$lang->SRCommon}";
$lang->story->reportAction    = "Informe";

$lang->story->closedStory      = "{$lang->SRCommon} %s está cerrado y esta operación se omitirá.";
$lang->story->batchToTaskTips  = "Solo {$lang->SRCommon} activo y del nivel más bajo se puede convertir en tareas.";
$lang->story->successToTask    = "Conversión por lote a tareas completada.";
$lang->story->storyRound       = 'Estimación de la ronda %s';
$lang->story->float            = "[%s] debe ser un número positivo y puede incluir decimales.";
$lang->story->saveDraftSuccess = 'Guardado como borrador correctamente.';

$lang->story->changeSyncTip    = "Los cambios en esta historia se sincronizarán con las siguientes historias gemelas.";
$lang->story->syncTip          = "Todos los campos entre historias gemelas se sincronizan, excepto {Slang->productCommon}, rama, módulo, plan y fase. La sincronización se detendrá una vez que se elimine la relación de gemelas.";
$lang->story->relievedTip      = "Una vez eliminada la relación gemela, no se podrá restaurar y las historias dejarán de sincronizarse. ¿Desea continuar con la eliminación?";
$lang->story->assignSyncTip    = "Los responsables se actualizaron de forma sincronizada en todas las historias gemelas,";
$lang->story->closeSyncTip     = "Todas las historias gemelas se cerraron de forma sincronizada.";
$lang->story->activateSyncTip  = "Todas las historias gemelas se activaron de forma sincronizada.";
$lang->story->relievedTwinsTip = "Después de cambiar {$lang->productCommon}, esta historia se desvinculará automáticamente de su gemela y la sincronización se detendrá. ¿Desea guardar los cambios?";
$lang->story->batchEditTip     = "{$lang->SRCommon} %s es una historia gemela. Esta operación se omitirá.";
$lang->story->planTip          = "{$lang->SRCommon} solo se puede asignar a un plan, mientras que las demás historias se pueden asignar a varios planes.";
$lang->story->batchEditError   = "Todas las historias seleccionadas no son editables. Esta operación se omitirá.";

$lang->story->id               = 'ID';
$lang->story->parent           = 'Historia padre';
$lang->story->isParent         = 'es historia padre';
$lang->story->grade            = 'Jerarquía';
$lang->story->gradeName        = 'Nombre de la jerarquía';
$lang->story->path             = 'Ruta';
$lang->story->product          = $lang->productCommon;
$lang->story->project          = $lang->projectCommon;
$lang->story->execution        = "Ejecución";
$lang->story->branch           = "Rama / Plataforma";
$lang->story->module           = 'Módulo';
$lang->story->moduleAB         = 'Módulo';
$lang->story->roadmap          = 'Hoja de ruta';
$lang->story->source           = 'Origen';
$lang->story->sourceNote       = 'Nota';
$lang->story->fromBug          = 'Bug de origen';
$lang->story->title            = "Nombre de {$lang->SRCommon}";
$lang->story->name             = "Nombre";
$lang->story->type             = "Tipo";
$lang->story->category         = 'Categoría';
$lang->story->color            = 'Color';
$lang->story->toBug            = 'Convertir a Bug';
$lang->story->spec             = 'Descripción';
$lang->story->assign           = 'Asignado a';
$lang->story->verify           = 'Criterios de aceptación';
$lang->story->pri              = 'Prioridad';
$lang->story->estimate         = "Estimación";
$lang->story->estimateAB       = 'Estimación';
$lang->story->hour             = $lang->hourCommon;
$lang->story->consumed         = 'Costo';
$lang->story->status           = 'Estado';
$lang->story->statusAB         = 'Estado';
$lang->story->subStatus        = 'Subestado';
$lang->story->stage            = 'Fase';
$lang->story->stageAB          = 'Fase';
$lang->story->stagedBy         = 'Creador de la fase';
$lang->story->mailto           = 'Enviar a';
$lang->story->openedBy         = 'Creador';
$lang->story->openedByAB       = 'Creador';
$lang->story->openedDate       = 'Fecha de creación';
$lang->story->assignedTo       = 'Asignado a';
$lang->story->assignedToAB     = 'Asignar';
$lang->story->assignedDate     = 'Asignado el';
$lang->story->lastEditedBy     = 'Última edición';
$lang->story->lastEditedByAB   = 'Última edición por';
$lang->story->lastEditedDate   = 'Última edición el';
$lang->story->closedBy         = 'Cerrado por';
$lang->story->closedDate       = 'Cerrado el';
$lang->story->closedReason     = 'Motivo de cierre';
$lang->story->rejectedReason   = 'Motivo de rechazo';
$lang->story->changedBy        = 'Cambiado por';
$lang->story->changedDate      = 'Cambiado el';
$lang->story->reviewedBy       = 'Revisado por';
$lang->story->reviewer         = 'Revisor';
$lang->story->reviewers        = 'Revisor';
$lang->story->reviewedDate     = 'Revisado el';
$lang->story->activatedDate    = 'Activado el';
$lang->story->version          = 'Versión';
$lang->story->feedbackBy       = 'Proveedor de retroalimentación';
$lang->story->notifyEmail      = 'Correo electrónico';
$lang->story->plan             = 'Plan vinculado';
$lang->story->planAB           = 'Plan';
$lang->story->comment          = 'Comentario';
$lang->story->children         = "Sub-{$lang->SRCommon}";
$lang->story->childItem        = "Subelementos";
$lang->story->childrenAB       = "Sub";
$lang->story->linkStories      = 'Historia vinculada';
$lang->story->linkRequirements = "{$lang->URCommon} vinculado";
$lang->story->childStories     = 'Dividir historia';
$lang->story->duplicateStory   = 'Historia duplicada';
$lang->story->reviewResult     = 'Resultado de la revisión';
$lang->story->reviewResultAB   = 'Resultado de la revisión';
$lang->story->preVersion       = 'Versión anterior';
$lang->story->keywords         = 'Palabras clave';
$lang->story->newStory         = 'Crear historia';
$lang->story->colorTag         = 'Color';
$lang->story->files            = 'Archivos';
$lang->story->copy             = "Copiar historia";
$lang->story->total            = "Total de historias";
$lang->story->draft            = 'Borrador';
$lang->story->unclosed         = 'Abierto';
$lang->story->deleted          = 'Eliminado';
$lang->story->released         = 'Historias lanzadas';
$lang->story->release          = 'Lanzamiento vinculado';
$lang->story->URChanged        = 'Cambiar funcionalidad';
$lang->story->design           = 'Diseño';
$lang->story->case             = 'Casos de prueba';
$lang->story->bug              = 'Bugs';
$lang->story->repoCommit       = 'Commits';
$lang->story->one              = 'Uno';
$lang->story->field            = 'Sincronizar campos';
$lang->story->completeRate     = 'Tasa de finalización';
$lang->story->reviewed         = 'Revisado';
$lang->story->toBeReviewed     = 'Pendiente de revisión';
$lang->story->isReviewed       = 'Está revisado';
$lang->story->linkMR           = 'MRs relacionados';
$lang->story->linkPR           = 'PRs relacionados';
$lang->story->linkCommit       = 'Commits relacionados';
$lang->story->URS              = 'Funcionalidad';
$lang->story->estimateUnit     = "(Unidad: {$lang->story->hour})";
$lang->story->verifiedDate     = 'Aceptado el';
$lang->story->root             = 'ID de historia raíz';
$lang->story->vision           = 'Interfaz';
$lang->story->fromStory        = 'Historia de origen';
$lang->story->fromVersion      = 'Versión de origen';
$lang->story->approvedDate     = 'Revisado el';
$lang->story->releasedDate     = 'Lanzado el';
$lang->story->parentVersion    = 'Versión padre';
$lang->story->demandVersion    = 'Historia del pool de historias';
$lang->story->storyChanged     = 'Historia cambiada';
$lang->story->demand           = 'Historias del pool de historias';
$lang->story->unlinkReason     = 'Motivo de desvinculación';
$lang->story->retractedReason  = 'Motivo de la revocación';
$lang->story->syncToChild      = 'Sincronizar con hijas';

$lang->story->ditto       = 'Ídem';
$lang->story->dittoNotice = "Esta historia no está vinculada al mismo {$lang->productCommon} que la última.";

$lang->story->viewTypeList['tiled'] = 'Vista de lista';
$lang->story->viewTypeList['tree']  = 'Vista de árbol';

if($config->enableER) $lang->story->typeList['epic']        = $lang->ERCommon;
if($config->URAndSR)  $lang->story->typeList['requirement'] = $lang->URCommon;
$lang->story->typeList['story'] = $lang->SRCommon;

$lang->story->needNotReviewList[0] = 'Revisión requerida';
$lang->story->needNotReviewList[1] = 'No requiere revisión';

$lang->story->useList[0] = 'Habilitar';
$lang->story->useList[1] = 'Deshabilitar';

$lang->story->statusList['']          = '';
$lang->story->statusList['draft']     = 'Borrador';
$lang->story->statusList['reviewing'] = 'En revisión';
$lang->story->statusList['active']    = 'Activado';
$lang->story->statusList['changing']  = 'Cambiando';
$lang->story->statusList['closed']    = 'Cerrado';

$lang->story->stageList['']           = '';
$lang->story->stageList['wait']       = 'En espera';
$lang->story->stageList['planned']    = 'Planificado';
$lang->story->stageList['projected']  = 'Iniciado ';
$lang->story->stageList['designing']  = 'Diseñando';
$lang->story->stageList['designed']   = 'Diseño completado';
$lang->story->stageList['developing'] = 'Desarrollando';
$lang->story->stageList['developed']  = 'Desarrollo completado';
$lang->story->stageList['testing']    = 'Pruebas';
$lang->story->stageList['tested']     = 'Prueba completada';
$lang->story->stageList['verified']   = 'Aceptado';
$lang->story->stageList['rejected']   = 'Rechazado';
$lang->story->stageList['delivering'] = 'Entregando';
$lang->story->stageList['delivered']  = 'Entrega completada';
$lang->story->stageList['released']   = 'Lanzado';
$lang->story->stageList['closed']     = 'Cerrado';

$lang->story->reasonList['']           = '';
$lang->story->reasonList['done']       = 'Completado';
$lang->story->reasonList['subdivided'] = 'Descompuesto';
$lang->story->reasonList['duplicate']  = 'Duplicado';
$lang->story->reasonList['postponed']  = 'Pospuesto';
$lang->story->reasonList['willnotdo']  = "No se hará";
$lang->story->reasonList['cancel']     = 'Cancelado';
$lang->story->reasonList['bydesign']   = 'Funciona como se diseñó';
//$lang->story->reasonList['isbug']      = 'Bug!';

$lang->story->reviewResultList['']        = '';
$lang->story->reviewResultList['pass']    = 'Aprobar';
$lang->story->reviewResultList['revert']  = 'Revocar';
$lang->story->reviewResultList['clarify'] = 'Por aclarar';
$lang->story->reviewResultList['reject']  = 'Rechazar';

$lang->story->reviewList[0] = 'No';
$lang->story->reviewList[1] = 'Sí';

$lang->story->sourceList['']           = '';
$lang->story->sourceList['customer']   = 'Cliente';
$lang->story->sourceList['user']       = 'Usuario';
$lang->story->sourceList['po']         = $lang->productCommon . ' Responsable';
$lang->story->sourceList['market']     = 'Marketing';
$lang->story->sourceList['service']    = 'Servicio al cliente';
$lang->story->sourceList['operation']  = 'Operaciones';
$lang->story->sourceList['support']    = 'Soporte técnico';
$lang->story->sourceList['competitor'] = 'Competidor';
$lang->story->sourceList['partner']    = 'Socio';
$lang->story->sourceList['dev']        = 'Equipo de desarrollo';
$lang->story->sourceList['tester']     = 'Equipo de pruebas';
$lang->story->sourceList['bug']        = 'Bug';
$lang->story->sourceList['forum']      = 'Foro';
$lang->story->sourceList['other']      = 'Otros';

$lang->story->priList[0] = '';
$lang->story->priList[1] = '1';
$lang->story->priList[2] = '2';
$lang->story->priList[3] = '3';
$lang->story->priList[4] = '4';

$lang->story->changeList = array();
$lang->story->changeList['no']  = 'Cancelar';
$lang->story->changeList['yes'] = 'Confirmar';

$lang->story->legendBasicInfo      = 'Información básica';
$lang->story->legendLifeTime       = 'Ciclo de vida de la historia ';
$lang->story->legendRelated        = 'Información relacionada';
$lang->story->legendMailto         = 'Enviar a';
$lang->story->legendAttach         = 'Archivos';
$lang->story->legendProjectAndTask = $lang->executionCommon . 'y tarea';
$lang->story->legendBugs           = 'Bugs vinculados';
$lang->story->legendFromBug        = 'Bug de origen';
$lang->story->legendCases          = 'Casos de prueba vinculados';
$lang->story->legendBuilds         = 'Builds vinculados';
$lang->story->legendReleases       = 'Lanzamientos vinculados';
$lang->story->legendLinkStories    = 'Historias vinculadas';
$lang->story->legendChildStories   = 'Subhistorias';
$lang->story->legendSpec           = 'Descripción';
$lang->story->legendVerify         = 'Criterios de aceptación';
$lang->story->legendMisc           = 'Varios';
$lang->story->legendInformation    = 'Información de la historia';

$lang->story->lblChange   = 'Cambio';
$lang->story->lblReview   = 'Revisión';
$lang->story->lblActivate = 'Activar';
$lang->story->lblClose    = 'Cerrar';
$lang->story->lblTBC      = 'Tarea/Bug/Caso de prueba';

$lang->story->checkAffection       = 'Impacto';
$lang->story->affectedProjects     = "Impacto en {$lang->project->common}/{$lang->execution->common}";
$lang->story->affectedBugs         = 'Bugs impactados';
$lang->story->affectedCases        = 'Casos de prueba impactados';
$lang->story->affectedTwins        = 'Historias gemelas impactadas';

$lang->story->specTemplate           = "Como <rol>, quiero <hacer algo> para <lograr un objetivo>.";
$lang->story->needNotReview          = 'No requiere revisión';
$lang->story->childStoryTitle        = 'Contiene %s subhistorias, de las cuales %s están completadas.';
$lang->story->childTaskTitle         = 'Contiene %s subtareas, de las cuales %s están completadas.';
$lang->story->successSaved           = "¡La historia fue guardada!";
$lang->story->confirmDelete          = "¿Seguro que desea eliminar {$lang->SRCommon}?";
$lang->story->confirmRecall          = "¿Seguro que desea revocar {$lang->SRCommon}?";
$lang->story->confirmChange          = "Ha modificado la información básica. ¿Desea guardar los cambios antes de ingresar a la página de cambios?";
$lang->story->errorEmptyChildStory   = "El campo Dividir {$lang->SRCommon} no puede estar vacío.";
$lang->story->errorNotSubdivide      = "No se puede dividir {$lang->SRCommon} que esté en revisión, cerrado o sea una subhistoria.";
$lang->story->errorMaxGradeSubdivide = "El nivel de jerarquía de esta historia ha alcanzado el nivel máximo establecido en el sistema; las historias del mismo tipo no se pueden dividir más.";
$lang->story->errorStepwiseSubdivide = "Este tipo de historia no permite la división entre sistemas. Esta configuración se puede cambiar en Administración.";
$lang->story->errorCannotSplit       = "Esta historia se dividió en subhistorias de este tipo y no se puede dividir en historias de otros tipos.";
$lang->story->errorParentSplitTask   = "Las historias padre no se pueden convertir en tareas. Esta operación se ha omitido.";
$lang->story->errorERURSplitTask     = "Las historias padre, {$lang->ERCommon} y {$lang->URCommon} no se pueden convertir en tareas. Esta operación se ha omitido.";
$lang->story->errorEmptyReviewedBy   = "El campo {$lang->story->reviewers} no puede estar vacío.";
$lang->story->errorEmptyStory        = "Ya existe una historia con el mismo título o el título está vacío. Revise lo ingresado.";
$lang->story->mustChooseResult       = 'Debe seleccionar un resultado de revisión.';
$lang->story->mustChoosePreVersion   = 'Debe seleccionar una versión para revertir.';
$lang->story->noEpic                 = "Aún no hay {$lang->ERCommon} disponible.";
$lang->story->noStory                = "Aún no hay {$lang->SRCommon} disponible.";
$lang->story->noRequirement          = "Aún no hay {$lang->URCommon} disponible.";
$lang->story->ignoreChangeStage      = "{$lang->SRCommon} %s está en borrador o cerrado. Esta operación se ha omitido.";
$lang->story->cannotDeleteParent     = "No se puede eliminar {$lang->SRCommon} padre.";
$lang->story->moveChildrenTips       = "¿Seguro que desea cambiar el producto vinculado? Después del cambio, todas las subhistorias se actualizarán en consecuencia.";
$lang->story->changeTips             = 'La característica vinculada a esta historia ha cambiado. Haga clic en “Cancelar” para ignorar, o en “Cambiar” para actualizar la historia en consecuencia.';
$lang->story->estimateMustBeNumber   = 'El valor estimado debe ser un número.';
$lang->story->estimateMustBePlus     = 'El valor estimado no puede ser negativo.';
$lang->story->confirmChangeBranch    = $lang->SRCommon . '%s está vinculado a un plan en una rama anterior. Después de cambiar la rama, el ' . $lang->SRCommon . ' se quitará de ese plan de rama. ¿Desea continuar editando  ' . $lang->SRCommon . '?';
$lang->story->confirmChangePlan      = $lang->SRCommon . '%s está vinculado a una rama en los planes anteriores. Después de cambiar la rama, el ' . $lang->SRCommon . ' se quitará de ese plan. ¿Desea continuar editando  ' . $lang->SRCommon . '?';
$lang->story->errorDuplicateStory    = $lang->SRCommon . '%s no existe.';
$lang->story->confirmRecallChange    = "Después de revocar el cambio, la historia volverá a la versión anterior al cambio. ¿Seguro que desea revocarlo?";
$lang->story->confirmRecallReview    = "¿Seguro que desea retirar la revisión?";
$lang->story->noStoryToTask          = "{lang->SRCommon} que no está en estado activo y {$lang->SRCommon} padre no se pueden convertir en tarea.";
$lang->story->ignoreClosedStory      = "{$lang->SRCommon} %s está en estado cerrado. Esta operación se ha omitido.";
$lang->story->changeProductTips      = "¿Seguro que desea cambiar el producto vinculado? Después del cambio, todas las subhistorias se actualizarán en consecuencia.";
$lang->story->gradeOverflow          = "La subhistoria más profunda tiene una profundidad de jerarquía de %s. Al sincronizar cambiaría a %s, excediendo el límite de jerarquía permitido. Cambio no permitido.";
$lang->story->batchGradeOverflow     = "Cambiar el padre de %s haría que sus hijos excedan la profundidad de jerarquía permitida. Este cambio se ignoró.";
$lang->story->batchGradeSameRoot     = '%s tiene una relación padre-hijo y no se reasignará en la jerarquía.';
$lang->story->batchGradeGtParent     = 'La historia padre de %s no puede ser ella misma ni una subhistoria. Este cambio fue ignorado.';
$lang->story->batchParentError       = "%s no puede tenerse a sí mismo ni a ninguno de sus descendientes como padre. Este cambio fue ignorado.";
$lang->story->errorNoGradeSplit      = "No hay niveles de historia disponibles para dividir.";
$lang->story->errorRecordMinus       = '[%s] no debe ser negativo.';
$lang->story->closeParentTips        = 'Todavía hay historias hijas sin cerrar en esta historia padre: %s. Si se cierra la historia padre, también se cerrarán las historias hijas. ¿Está seguro de que desea cerrar la historia padre?';
$lang->story->undoneTasksTips        = "Esta historia tiene %s tareas sin terminar. ¿Confirma que desea cerrar la historia?";
$lang->story->undoneTasksBatchTips   = "La historia %s tiene %s tareas sin terminar.";
$lang->story->confirmCloseTips       = "¿Confirma que desea cerrar la historia?";

$lang->story->form = new stdclass();
$lang->story->form->area     = 'Alcance';
$lang->story->form->desc     = '¿Qué historia es? ¿Cuáles son los criterios de aceptación?';
$lang->story->form->resource = '¿Quién asignará los recursos? ¿Cuánto tiempo toma?';
$lang->story->form->file     = 'Haga clic aquí para cargar cualquier archivo relacionado con la historia.';

$lang->story->action = new stdclass();
$lang->story->action->reviewed              = array('main' => '$date, registrado por <strong>$actor</strong>. El resultado de la revisión es <strong>$extra</strong>.', 'extra' => 'reviewResultList');
$lang->story->action->rejectreviewed        = array('main' => '$date, registrado por <strong>$actor</strong>. El resultado de la revisión es <strong>$extra</strong>. El motivo es <strong>$reason</strong>.', 'extra' => 'reviewResultList', 'reason' => 'reasonList');
$lang->story->action->recalled              = array('main' => '$date, la revisión fue revocada por <strong>$actor</strong>.');
$lang->story->action->closed                = array('main' => '$date, cerrado por <strong>$actor</strong>. El motivo es <strong>$extra</strong> $appendLink.', 'extra' => 'reasonList');
$lang->story->action->closedbysystem        = array('main' => '$date, el sistema cerró automáticamente la historia padre porque todas sus historias hijas fueron cerradas.');
$lang->story->action->closedbyparent        = array('main' => '$date, el sistema cerró automáticamente la historia hija porque su historia padre fue cerrada.');
$lang->story->action->reviewpassed          = array('main' => '$date, revisado por el <strong>sistema</strong> y marcado como <strong>Aprobado</strong>.');
$lang->story->action->reviewrejected        = array('main' => '$date, cerrado por el <strong>sistema</strong> con motivo: <strong>Rechazo</strong>.');
$lang->story->action->reviewclarified       = array('main' => '$date, revisado por el <strong>sistema</strong> y marcado como <strong>Por aclarar</strong.');
$lang->story->action->reviewreverted        = array('main' => '$date, revisado por el <strong>sistema</strong> y marcado como <strong>Cambio revocado</strong.');
$lang->story->action->linked2plan           = array('main' => '$date, vinculado al Plan <strong>$extra</strong> por <strong>$actor</strong.');
$lang->story->action->unlinkedfromplan      = array('main' => '$date, desvinculado del plan <strong>$extra</strong> por <strong>$actor</strong.');
$lang->story->action->linked2execution      = array('main' => '$date, vinculado a ' . $lang->executionCommon . ' <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkedfromexecution = array('main' => '$date, desvinculado de ' . $lang->executionCommon . ' <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->linked2kanban         = array('main' => '$date, vinculado al Kanban <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->linked2project        = array('main' => '$date, vinculado a ' . $lang->projectCommon . ' <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkedfromproject   = array('main' => '$date, desvinculado de ' .$lang->projectCommon . '<strong>$extra</strong>  por <strong>$actor</strong>.');
$lang->story->action->linked2build          = array('main' => '$date, vinculado al Build <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkedfrombuild     = array('main' => '$date, desvinculado del Build <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->linked2release        = array('main' => '$date, vinculado al Lanzamiento <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkedfromrelease   = array('main' => '$date, desvinculado del Lanzamiento <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->linked2revision       = array('main' => '$date, vinculado al Commit <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkedfromrevision  = array('main' => '$date, desvinculado del Commit <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->linkrelatedstory      = array('main' => '$date, vinculado a la Historia <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->subdividestory        = array('main' => '$date, dividido en {$lang->SRCommon}   <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkrelatedstory    = array('main' => '$date, desvinculado de la Historia <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkchildstory      = array('main' => '$date, desvinculado de la {$lang->SRCommon} dividida <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->recalledchange        = array('main' => '$date, cambios revocados por <strong>$actor</strong>.');
$lang->story->action->synctwins             = array('main' => '$ddate, el sistema actualizó automáticamente esta historia porque su historia gemela <strong>$extra</strong> fue $operate.', 'operate' => 'operateList'
);
$lang->story->action->syncgrade             = array('main' => '$date, el sistema actualizó el nivel jerárquico de esta historia a <strong>$extra</strong> debido a un cambio en su historia padre.');
$lang->story->action->linked2roadmap        = array('main' => '$date, vinculado a la Hoja de ruta <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->unlinkedfromroadmap   = array('main' => '$date, desvinculado de la Hoja de ruta <strong>$extra</strong> por <strong>$actor</strong>.');
$lang->story->action->changedbycharter      = array('main' => '$date, la propuesta de acta de constitución <strong>$extra</strong> fue aprobada por <strong>$actor</strong>. La fase de la historia se actualizó automáticamente a Acta de constitución.');
$lang->story->action->changedstorystage     = array('main' => '$date, por <strong>$actor</strong> $extra.');

/* Statistical statement. */
$lang->story->report = new stdclass();
$lang->story->report->common = 'Informes';
$lang->story->report->select = 'Seleccionar tipo de informe';
$lang->story->report->create = 'Crear informe';
$lang->story->report->value  = 'Historias';

$lang->story->report->charts['storiesPerProduct']      = $lang->productCommon . ' ' . $lang->SRCommon;
$lang->story->report->charts['storiesPerModule']       = "$lang->SRCommon en el módulo";
$lang->story->report->charts['storiesPerSource']       = 'Por origen de la historia';
$lang->story->report->charts['storiesPerPlan']         = 'Por plan';
$lang->story->report->charts['storiesPerStatus']       = 'Por estado';
$lang->story->report->charts['storiesPerStage']        = 'Por fase';
$lang->story->report->charts['storiesPerPri']          = 'Por prioridad';
$lang->story->report->charts['storiesPerEstimate']     = 'Por esfuerzo estimado';
$lang->story->report->charts['storiesPerOpenedBy']     = 'Por creador';
$lang->story->report->charts['storiesPerAssignedTo']   = 'Por responsable';
$lang->story->report->charts['storiesPerClosedReason'] = 'Por motivo de cierre';
$lang->story->report->charts['storiesPerChange']       = 'Por cantidad de cambios';
$lang->story->report->charts['storiesPerGrade']        = 'Por jerarquía';

$lang->story->report->options = new stdclass();
$lang->story->report->options->graph  = new stdclass();
$lang->story->report->options->type   = 'pie';
$lang->story->report->options->width  = 500;
$lang->story->report->options->height = 140;

$lang->story->report->storiesPerProduct      = new stdclass();
$lang->story->report->storiesPerModule       = new stdclass();
$lang->story->report->storiesPerSource       = new stdclass();
$lang->story->report->storiesPerPlan         = new stdclass();
$lang->story->report->storiesPerStatus       = new stdclass();
$lang->story->report->storiesPerStage        = new stdclass();
$lang->story->report->storiesPerPri          = new stdclass();
$lang->story->report->storiesPerOpenedBy     = new stdclass();
$lang->story->report->storiesPerAssignedTo   = new stdclass();
$lang->story->report->storiesPerClosedReason = new stdclass();
$lang->story->report->storiesPerEstimate     = new stdclass();
$lang->story->report->storiesPerChange       = new stdclass();
$lang->story->report->storiesPerGrade        = new stdclass();

$lang->story->report->storiesPerProduct->item      = $lang->productCommon;
$lang->story->report->storiesPerModule->item       = 'Módulo';
$lang->story->report->storiesPerSource->item       = 'Origen';
$lang->story->report->storiesPerPlan->item         = 'Plan';
$lang->story->report->storiesPerStatus->item       = 'Estado';
$lang->story->report->storiesPerStage->item        = 'Fase';
$lang->story->report->storiesPerPri->item          = 'Prioridad';
$lang->story->report->storiesPerOpenedBy->item     = 'Creador';
$lang->story->report->storiesPerAssignedTo->item   = 'Asignado a';
$lang->story->report->storiesPerClosedReason->item = 'Motivo';
$lang->story->report->storiesPerEstimate->item     = 'Esfuerzos estimados';
$lang->story->report->storiesPerChange->item       = 'Cantidad de cambios';
$lang->story->report->storiesPerGrade->item        = 'Jerarquía';

$lang->story->report->storiesPerProduct->graph      = new stdclass();
$lang->story->report->storiesPerModule->graph       = new stdclass();
$lang->story->report->storiesPerSource->graph       = new stdclass();
$lang->story->report->storiesPerPlan->graph         = new stdclass();
$lang->story->report->storiesPerStatus->graph       = new stdclass();
$lang->story->report->storiesPerStage->graph        = new stdclass();
$lang->story->report->storiesPerPri->graph          = new stdclass();
$lang->story->report->storiesPerOpenedBy->graph     = new stdclass();
$lang->story->report->storiesPerAssignedTo->graph   = new stdclass();
$lang->story->report->storiesPerClosedReason->graph = new stdclass();
$lang->story->report->storiesPerEstimate->graph     = new stdclass();
$lang->story->report->storiesPerChange->graph       = new stdclass();
$lang->story->report->storiesPerGrade->graph        = new stdclass();

$lang->story->report->storiesPerProduct->graph->xAxisName      = $lang->productCommon;
$lang->story->report->storiesPerModule->graph->xAxisName       = 'Módulo';
$lang->story->report->storiesPerSource->graph->xAxisName       = 'Origen';
$lang->story->report->storiesPerPlan->graph->xAxisName         = 'Plan';
$lang->story->report->storiesPerStatus->graph->xAxisName       = 'Estado';
$lang->story->report->storiesPerStage->graph->xAxisName        = 'Fase';
$lang->story->report->storiesPerPri->graph->xAxisName          = 'Prioridad';
$lang->story->report->storiesPerOpenedBy->graph->xAxisName     = 'Creador';
$lang->story->report->storiesPerAssignedTo->graph->xAxisName   = 'Responsable';
$lang->story->report->storiesPerClosedReason->graph->xAxisName = 'Motivo de cierre';
$lang->story->report->storiesPerEstimate->graph->xAxisName     = 'Esfuerzo estimado';
$lang->story->report->storiesPerChange->graph->xAxisName       = 'Cantidad de cambios';
$lang->story->report->storiesPerGrade->graph->xAxisName        = 'Jerarquía';

$lang->story->placeholder = new stdclass();
$lang->story->placeholder->estimate = $lang->story->hour;

$lang->story->chosen = new stdClass();
$lang->story->chosen->reviewedBy = 'Seleccionar revisores';

$lang->story->notice = new stdClass();
$lang->story->notice->closed           = "¡{$lang->SRCommon} que seleccionó ya está cerrado!";
$lang->story->notice->reviewerNotEmpty = "{$lang->SRCommon} requiere revisión. Los revisores no pueden estar vacíos.";
$lang->story->notice->changePlan       = 'Solo puede vincular la historia a un plan. Actualícelo antes de guardar.';
$lang->story->notice->notDeleted       = 'No se pueden quitar los revisores que ya enviaron sus resultados de revisión.';

$lang->story->convertToTask = new stdClass();
$lang->story->convertToTask->fieldList = array();
$lang->story->convertToTask->fieldList['module']     = 'Módulo';
$lang->story->convertToTask->fieldList['spec']       = "Descripción";
$lang->story->convertToTask->fieldList['pri']        = 'Prioridad';
$lang->story->convertToTask->fieldList['mailto']     = 'Enviar a';
$lang->story->convertToTask->fieldList['assignedTo'] = 'Asignado a';

$lang->story->categoryList['feature']     = 'Funcionalidad';
$lang->story->categoryList['interface']   = 'API';
$lang->story->categoryList['performance'] = 'Rendimiento';
$lang->story->categoryList['safe']        = 'Seguridad';
$lang->story->categoryList['experience']  = 'Experiencia de usuario';
$lang->story->categoryList['improve']     = 'Mejora';
$lang->story->categoryList['other']       = 'Otros';

$lang->story->frozenTip  = "Una vez establecida la línea base de las historias, no se permite %s.";
$lang->story->frozenTips = "La historia %s ha sido congelada y no será %s.";

$lang->story->changeTip = 'Solo puede solicitar cambios en historias activas.';

$lang->story->reviewTip = array();
$lang->story->reviewTip['active']      = 'Esta historia ya está activa. No requiere revisión.';
$lang->story->reviewTip['notReviewer'] = 'No es revisor de esta historia y no puede realizar una revisión.';
$lang->story->reviewTip['reviewed']    = 'Ya revisó esta historia.';
$lang->story->reviewTip['noPriv']      = 'No tiene permiso para enviar una revisión.';

$lang->story->recallTip = array();
$lang->story->recallTip['actived'] = 'No se inició ninguna revisión para esta historia, por lo que no hay nada que revocar.';

$lang->story->subDivideTip = array();
$lang->story->subDivideTip['notWait']    = 'La historia ha sido %s y no se puede dividir.';
$lang->story->subDivideTip['notActive']  = "No se pueden dividir historias que están en revisión o cerradas.";
$lang->story->subDivideTip['twinsSplit'] = 'Las historias gemelas no se pueden dividir.';

$lang->story->featureBar['browse']['all']       = $lang->all;
$lang->story->featureBar['browse']['unclosed']  = $lang->story->unclosed;
$lang->story->featureBar['browse']['draft']     = $lang->story->statusList['draft'];
$lang->story->featureBar['browse']['reviewing'] = $lang->story->statusList['reviewing'];

$lang->story->operateList = array();
$lang->story->operateList['assigned']       = 'Asignar';
$lang->story->operateList['closed']         = 'Cerrar';
$lang->story->operateList['activated']      = 'Activar';
$lang->story->operateList['changed']        = 'Cambio';
$lang->story->operateList['reviewed']       = 'Revisión';
$lang->story->operateList['edited']         = 'Editar';
$lang->story->operateList['submitreview']   = 'enviar revisión';
$lang->story->operateList['recalledchange'] = 'Revocar cambio';
$lang->story->operateList['recalled']       = 'Revocar revisión';

$lang->story->addBranch      = 'Agregar %s';
$lang->story->deleteBranch   = 'Eliminar %s';
$lang->story->notice->branch = "Se crea una historia independiente por cada rama y estas historias se vinculan como gemelas. Todos los campos se sincronizan entre historias gemelas, excepto {$lang->productCommon}, Rama, Módulo, Plan y Fase. Puede desvincular manualmente la relación de gemelas en cualquier momento.";

$lang->story->relievedTwinsRelation     = 'Desvincular relación gemela';
$lang->story->relievedTwinsRelationTips = 'Una vez desvinculada, la relación gemela no se podrá restaurar y el cierre de una historia dejará de afectar a la otra de forma sincronizada.';
$lang->story->changeRelievedTwinsTips   = 'Una vez desvinculada, la relación gemela no se podrá restaurar y los cambios en una historia dejarán de afectar a la otra de forma sincronizada.';
$lang->story->cannotRejectTips          = '“%s” ha sido modificado y no se puede rechazar en la revisión. Esta acción se ha ignorado.';

$lang->story->trackOrderByList['id']       = 'Ordenar por ID';
$lang->story->trackOrderByList['pri']      = 'Ordenar por prioridad';
$lang->story->trackOrderByList['status']   = 'Ordenar por estado';
$lang->story->trackOrderByList['stage']    = 'Ordenar por fase';
$lang->story->trackOrderByList['category'] = 'Ordenar por tipo';

$lang->story->trackSortList['asc']  = 'Ascendente';
$lang->story->trackSortList['desc'] = 'Descendente';

$lang->story->error = new stdclass();
$lang->story->error->length = "La entrada excede %d caracteres y no se puede guardar. Acórtela e inténtelo de nuevo.";

$lang->story->batchSubmitReviewStatusTips = "La historia %s no se puede enviar a revisión porque su estado no es Borrador ni En cambio.";
$lang->story->batchSubmitReviewPrivTips   = "You do not have permission to batch submit %s for review. Demands of this type have been filtered.\n";
