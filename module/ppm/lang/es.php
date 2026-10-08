<?php
$lang->ppm->common            = 'Solicitudes de revisión';
$lang->ppm->server            = "Servidor";
$lang->ppm->hostID            = "Servidor";
$lang->ppm->view              = "Encuesta";
$lang->ppm->viewAction        = "{$lang->ppm->common} Details";
$lang->ppm->create            = "Enviar solicitud de fusión";
$lang->ppm->mirrorRepoTip     = 'El repositorio actual es un repositorio espejo. Impórtelo nuevamente en modo "lectura, escritura, administración" para habilitar la revisión de código.';
$lang->ppm->hasMirrorRepoTip = 'El repositorio actual es un repositorio espejo, que no admite revisión de código. No cree solicitudes de fusión.';
$lang->ppm->apiCreate         = "Interfaz: crear";
$lang->ppm->browse            = "Explorar";
$lang->ppm->browseAction      = "{$lang->ppm->common} List";
$lang->ppm->list              = "Lista";
$lang->ppm->edit              = "Edit {$lang->ppm->common}";
$lang->ppm->delete            = "Delete {$lang->ppm->common}";
$lang->ppm->accept            = "Aceptar";
$lang->ppm->source            = 'source';
$lang->ppm->target            = 'target';
$lang->ppm->viewDiff          = 'Ver diferencias';
$lang->ppm->diff              = 'Ver diferencias';
$lang->ppm->viewInGit         = 'Ver en la APP';
$lang->ppm->link              = 'Vínculo de historias, Bugs, tareas';
$lang->ppm->createAction      = '%s, <strong>%s</strong> envió una <a href="%s">solicitud de fusión</a>.';
$lang->ppm->editAction        = '%s, <strong>%s</strong> editó la <a href="%s">solicitud de fusión</a>.';
$lang->ppm->removeAction      = '%s, <strong>%s</strong> eliminó la <a href="%s">solicitud de fusión</a>.';
$lang->ppm->submitType        = 'Tipo de envío';
$lang->ppm->linkedObject      = 'Elementos vinculados';
$lang->ppm->object            = 'Objeto';
$lang->ppm->mergeInfo         = 'Información de verificación';
$lang->ppm->locateView        = 'Ver';
$lang->ppm->codeConflict      = 'Conflicto';
$lang->ppm->hasConflict       = 'Verificar conflicto';
$lang->ppm->request           = 'Solicitud';
$lang->ppm->AICodeScore       = 'Puntuación';
$lang->ppm->AISevereIssue     = 'Incidencia grave';
$lang->ppm->AIOrdinaryIssue   = 'Incidencia ordinaria';
$lang->ppm->manualReview      = 'Revisión manual';
$lang->ppm->approvalReviewer  = 'Número de aprobadores';
$lang->ppm->doneReviewer      = 'Número de aprobados';
$lang->ppm->codeScan          = 'Escaneo de código';
$lang->ppm->scanSevereIssue   = 'Incidencia grave';
$lang->ppm->scanOrdinaryIssue = 'Incidencia ordinaria';
$lang->ppm->scanPassRate      = 'Tasa de aprobación de acceso';
$lang->ppm->runResult         = 'Resultado';
$lang->ppm->basicInfo         = 'Información básica';
$lang->ppm->sourceBranch      = 'Rama de origen';
$lang->ppm->targetBranch      = 'Rama de destino';
$lang->ppm->filePath          = 'Ruta del archivo';
$lang->ppm->conflictFiles     = 'Archivos en conflicto';
$lang->ppm->changeFiles       = 'Cambiar archivos';
$lang->ppm->issueList         = 'Lista de incidencias';
$lang->ppm->add               = 'Add';
$lang->ppm->addReviewer       = 'Agregar revisor';
$lang->ppm->reviewStatus      = 'Estado de la revisión';
$lang->ppm->review            = 'Revisión';
$lang->ppm->decision          = 'Decisión de revisión';
$lang->ppm->opinion           = 'Opinión de revisión';
$lang->ppm->merge             = 'Combinar' . $lang->ppm->common;
$lang->ppm->assignedTo        = 'Asignado a';

$lang->ppm->opinionPlaceholder = 'Ingrese la opinión de revisión';

$lang->ppm->action = new stdclass();
$lang->ppm->action->synced   = '$date, <strong>$actor</strong> sincronizó esta solicitud de fusión.';
$lang->ppm->action->imported = '$date, <strong>$actor</strong> importó esta solicitud de fusión.';

$lang->ppm->linkList   = 'Vincular lista de historias, Bugs, tareas';
$lang->ppm->linkStory  = 'Vincular historias';
$lang->ppm->linkBug    = 'Vincular Bugs';
$lang->ppm->linkTask   = 'Vincular tareas';
$lang->ppm->unlinkTask = 'Desvincular tareas';
$lang->ppm->unlink     = 'Desvincular historias, Bugs, tareas';
$lang->ppm->addReview  = 'Agregar revisión';

$lang->ppm->id          = 'ID';
$lang->ppm->mriid       = "ID de MR original";
$lang->ppm->title       = 'Nombre';
$lang->ppm->status      = 'Estado';
$lang->ppm->author      = 'Autor';
$lang->ppm->createdDate = 'Fecha de creación';
$lang->ppm->assignee    = 'Responsable';
$lang->ppm->reviewer    = 'Revisor';
$lang->ppm->mergeStatus = 'Estado de combinación';
$lang->ppm->commits     = 'commits';
$lang->ppm->changes     = 'changes';
$lang->ppm->gitlabID    = 'GitLab';
$lang->ppm->repoID      = 'Repositorio';
$lang->ppm->jobID       = 'Job del pipeline';
$lang->ppm->commitLogs  = 'Registros de commits';
$lang->ppm->execJob     = 'Ejecutar';
$lang->ppm->execJobTip  = 'Ejecutar manualmente el job del pipeline';
$lang->ppm->repo        = 'Repositorio';

$lang->ppm->canMerge  = "Se puede fusionar";
$lang->ppm->cantMerge = "No se puede fusionar";

$lang->ppm->approval = 'Aprobación';
$lang->ppm->approve  = 'Aprobar';
$lang->ppm->reject   = 'Rechazar';
$lang->ppm->close    = 'Cerrar' . $lang->ppm->common;
$lang->ppm->reopen   = 'Reabrir' . $lang->ppm->common;

$lang->ppm->reviewType     = 'Tipo de revisión';
$lang->ppm->reviewTypeList = array();
$lang->ppm->reviewTypeList['bug']  = 'Bug';
$lang->ppm->reviewTypeList['task'] = 'Tarea';

$lang->ppm->approvalResult     = 'Resultado de la aprobación';
$lang->ppm->approvalResultList = array();
$lang->ppm->approvalResultList['approved'] = 'Aprobar';
$lang->ppm->approvalResultList['rejected'] = 'Rechazar';

$lang->ppm->needApproved       = 'Esta MR debe ser aprobada antes de fusionarse';
$lang->ppm->needCI             = 'Combinar solo después de aprobar el pipeline';
$lang->ppm->removeSourceBranch = 'Eliminar la rama de origen después de fusionar';
$lang->ppm->squash             = 'Squash de commits';
$lang->ppm->triggeredCI        = 'La tarea del pipeline se activa porque cambió la rama de destino o la tarea del pipeline.';
$lang->ppm->acceptTip          = 'Apruebe este MR antes de fusionar';
$lang->ppm->conflictsTip       = 'Esta solicitud de fusión tiene conflictos, no se puede fusionar';
$lang->ppm->noChangesTip       = 'La rama de origen y la rama de destino no tienen cambios, no se pueden fusionar';
$lang->ppm->compileTip         = 'El pipeline de build de esta solicitud de fusión no fue exitoso, no se puede fusionar';
$lang->ppm->notifyTip          = 'Esta solicitud de fusión tiene conflictos o no tiene cambios, no se puede fusionar';
$lang->ppm->branchUpdateTip    = 'La rama se actualizó, ejecute el pipeline';
$lang->ppm->draftTips          = 'La solicitud de combinación está en borrador y no se puede combinar.';

$lang->ppm->repeatedOperation = 'No repetir operaciones';

$lang->ppm->approvalStatus     = 'Estado de aprobación';
$lang->ppm->approvalStatusList = array();
$lang->ppm->approvalStatusList['pending']    = 'notReviewed';
$lang->ppm->approvalStatusList['inProgress'] = 'inProgress';
$lang->ppm->approvalStatusList['approved']   = 'Aprobado';
$lang->ppm->approvalStatusList['rejected']   = 'Rechazado';

$lang->ppm->notApproved  = 'Rechazado';
$lang->ppm->assignedToMe = 'Asignado a mí';
$lang->ppm->createdByMe  = 'CreatedByMe';

$lang->ppm->statusList = array();
$lang->ppm->statusList['all']    = 'all';
$lang->ppm->statusList['opened'] = 'opened';
$lang->ppm->statusList['merged'] = 'merged';
$lang->ppm->statusList['closed'] = 'closed';

$lang->ppm->mergeStatusList = array();
$lang->ppm->mergeStatusList['unchecked']            = 'unchecked';
$lang->ppm->mergeStatusList['checking']             = 'checking';
$lang->ppm->mergeStatusList['can_be_merged']        = 'se puede fusionar';
$lang->ppm->mergeStatusList['cannot_be_merged']     = 'no se puede fusionar';
$lang->ppm->mergeStatusList['cannot_merge_by_fail'] = 'No se puede fusionar, falló la verificación';

$lang->ppm->description       = 'Descripción';
$lang->ppm->confirmDelete     = '¿Seguro que desea eliminar esta solicitud de fusión?';
$lang->ppm->sourceProject     = 'Repositorio de origen';
$lang->ppm->sourceBranch      = 'Rama de origen';
$lang->ppm->targetProject     = 'Repositorio de destino';
$lang->ppm->targetBranch      = 'Rama de destino';
$lang->ppm->noCompileJob      = 'Sin trabajo de pipeline';
$lang->ppm->compileUnexecuted = 'Compilación sin ejecutar';
$lang->ppm->compileID         = 'ID de compilación';
$lang->ppm->compileStatus     = 'Estado de compilación';

$lang->ppm->notFound          = "¡La solicitud de combinación no existe!";
$lang->ppm->toCreatedMessage  = "La solicitud de fusión que envió：<a href='%s'>%s</a>, la tarea del pipeline se completó correctamente.";
$lang->ppm->toReviewerMessage = "Tiene una solicitud de fusión <a href='%s'>%s</a> en espera.";
$lang->ppm->failMessage       = "Su solicitud de fusión <a href='%s'>%s</a> falló. Revise su resultado de ejecución. ";
$lang->ppm->storySummary      = "Total <strong>%s</strong> {$lang->SRCommon} on this page.";

$lang->ppm->apiError = new stdclass;
$lang->ppm->apiError->createMR      = "No se pudo crear una solicitud de fusión mediante la API. Motivo: %s";
$lang->ppm->apiError->sudo          = "No se puede operar con la cuenta de GitLab vinculada al usuario actual. Motivo: %s";
$lang->ppm->apiError->emptyResponse = "El objeto solicitado por la API no existe o falló.";
$lang->ppm->apiError->notFound      = "El objeto solicitado por la API no existe, es posible que haya sido eliminado en el servidor de la API.";

$lang->ppm->createFailedFromAPI  = "No se pudo crear la solicitud de fusión (Merge Request).";
$lang->ppm->hasSameOpenedMR      = "Hay solicitudes de fusión duplicadas y sin cerrar: ID%u";
$lang->ppm->accessGitlabFailed   = "No se puede conectar al servidor de GitLab.";
$lang->ppm->reopenSuccess        = "La solicitud de fusión fue reabierta.";
$lang->ppm->closeSuccess         = "Solicitud de combinación cerrada.";
$lang->ppm->unsupportedFeature   = "Función no compatible.";
$lang->ppm->checkSourceBranch    = 'La rama de origen se puede fusionar en el tipo de rama de destino: %s';
$lang->ppm->checkTargetBranch    = 'La rama de destino permite fusionar los siguientes tipos de rama de origen: %s';
$lang->ppm->checkConflicts       = 'Se detectaron conflictos de código. Resuelva los conflictos localmente antes de enviar la solicitud de fusión.';
$lang->ppm->checkReviewers       = 'Los revisores deben incluir a %s';
$lang->ppm->sourceBranchNotExist = 'La rama de origen no existe.';
$lang->ppm->targetBranchNotExist = 'La rama de destino no existe.';

$lang->ppm->apiErrorMap[1]  = "No se puede usar el mismo proyecto/rama como origen y destino";
$lang->ppm->apiErrorMap[2]  = "/Another open merge request already exists for this source branch: !([0-9]+)/";
$lang->ppm->apiErrorMap[3]  = "401 Unauthorized";
$lang->ppm->apiErrorMap[4]  = "403 Forbidden";
$lang->ppm->apiErrorMap[5]  = "/(pull request already exists for these targets).*/";
$lang->ppm->apiErrorMap[6]  = "PullRequest no válido: no hay cambios entre head y base";
$lang->ppm->apiErrorMap[7]  = "/(user doesn't have access to repo).*/";
$lang->ppm->apiErrorMap[8]  = "/(git apply).*/";
$lang->ppm->apiErrorMap[9]  = "ya existe una solicitud de extracción para esta rama de destino y origen";
$lang->ppm->apiErrorMap[10] = 'Ocurrió un error interno';
$lang->ppm->apiErrorMap[11] = "La rama de origen no contiene ningún commit nuevo";

$lang->ppm->errorLang[1]  = 'La rama del proyecto de origen no puede ser la misma que la rama del proyecto de destino';
$lang->ppm->errorLang[2]  = 'Ya existe otra solicitud de fusión abierta para esta rama de origen: ID%u';
$lang->ppm->errorLang[3]  = "No autorizado";
$lang->ppm->errorLang[4]  = 'Permiso denegado';
$lang->ppm->errorLang[5]  = 'Ya existe otra solicitud de fusión abierta para esta rama de origen';
$lang->ppm->errorLang[6]  = 'La rama del proyecto de origen no puede ser la misma que la rama del proyecto de destino';
$lang->ppm->errorLang[7]  = "el usuario no tiene acceso al repositorio";
$lang->ppm->errorLang[8]  = 'La rama de origen y la rama de destino no se pueden fusionar';
$lang->ppm->errorLang[9]  = 'Ya existe una solicitud de fusión duplicada';
$lang->ppm->errorLang[10] = 'Error del servidor';
$lang->ppm->errorLang[11] = 'La rama de origen no contiene ningún commit nuevo';

$lang->ppm->from = "from";
$lang->ppm->to   = "to";
$lang->ppm->at   = "at";

$lang->ppm->pipeline         = "Pipeline";
$lang->ppm->pipelineSuccess  = "Éxito";
$lang->ppm->pipelineFailed   = "Fallido";
$lang->ppm->pipelineCanceled = "Cancelado";
$lang->ppm->pipelineUnknown  = "Desconocido";

$lang->ppm->pipelineStatus = array();
$lang->ppm->pipelineStatus['success']  = "success";
$lang->ppm->pipelineStatus['failed']   = "failed";
$lang->ppm->pipelineStatus['canceled'] = "canceled";

$lang->ppm->MRHasConflicts = "La solicitud de combinación tiene un conflicto";
$lang->ppm->hasConflicts   = "Hay conflictos de fusión";
$lang->ppm->hasNoChanges   = "La rama no tiene cambios";
$lang->ppm->hasNoConflict  = "Se puede fusionar";
$lang->ppm->acceptMR       = "Aceptar solicitud de fusión ";
$lang->ppm->mergeFailed    = "No se puede fusionar la solicitud, verifique el estado de la solicitud de fusión";
$lang->ppm->mergeSuccess   = "Solicitud de combinación exitosa";
$lang->ppm->refreshSuccess = 'Actualizado correctamente';

$lang->ppm->todomessage = "se le asignó el proyecto";
$lang->ppm->squashHelp  = 'Parámetros de git correspondientes: --squash';

/**
 * Merge Command Document.
 *
 * %s source_project::http_url_to_repo
 * %s mr::source_branch
 * %s source_project::path_with_namespace . '-' . mr::source_branch
 * %s mr::target_branch
 * %s source_project::path_with_namespace . '-' . mr::source_branch
 * %s mr::target_branch
 */
$lang->ppm->commandDocument = <<< EOD
<div class='detail-title'>Check out, review and merge locally</div>
<div class='detail-content'>
  <p><blockquote>Note: This merge request status will be changed automatically after you merged locally.</blockquote></p>
  <p>
    step 1. Change directory to target project. Fetch and check out the branch for this merge request
    <pre>
    git fetch "%s" %s
    git checkout -b "%s" FETCH_HEAD</pre>
  </p>
  <p>
    step 2. Review the changes locally. You can use <code>git log</code> to view the changes
  </p>
  <p>
    step 3. Merge the branch and fix any conflicts that come up
    <pre>
    git fetch origin
    git checkout "%s"
    git merge --no-ff "%s"</pre>
  </p>
  <p>
    step 4. Push the result of the merge to Git
    <pre>
    git push origin "%s" </pre>
  </p>
</div>
EOD;

$lang->ppm->noChanges = "Actualmente no hay cambios en la rama de origen de esta solicitud de fusión. Envíe nuevos commits o use otra rama.";

$lang->ppm->linkTask          = "Vincular tarea";
$lang->ppm->unlinkTask        = "Quitar tarea";
$lang->ppm->linkedTasks       = 'Tarea';
$lang->ppm->unlinkedTasks     = 'Tarea no vinculada';
$lang->ppm->confirmUnlinkTask = "¿Seguro que desea quitar esta tarea?";
$lang->ppm->taskSummary       = "Hay <strong>%s</strong> tareas en esta página";
$lang->ppm->notDelbranch      = "La rama de origen no se puede eliminar cuando es una rama protegida";
$lang->ppm->addForApp         = "No hay proyectos en este servidor, ¿desea ir a agregarlos?";
$lang->ppm->checkSuccess      = 'La verificación de fusión fue aprobada y esta rama se puede fusionar';
$lang->ppm->checkFailed       = 'La verificación de fusión falló y esta rama no se puede fusionar';
$lang->ppm->MRHistory         = "Esta fusión fue creada por <strong>%s</strong> el <strong>%s</strong>，fusionando <icon class='icon-code-fork ml-1'/><strong>%s</strong> <strong>%s</strong> commits，hacia <icon class='icon-code-fork mr-1'/><strong>%s</strong> 。";

$lang->ppm->checkStatusList = array();
$lang->ppm->checkStatusList['fail']    = 'No aprobado';
$lang->ppm->checkStatusList['success'] = 'Aprobado';
$lang->ppm->checkStatusList['wait']    = 'Por confirmar';

$lang->ppm->hasConflictList['yes'] = 'Sí';
$lang->ppm->hasConflictList['no']  = 'No';

$lang->ppm->featureBar['browse']['all']      = $lang->ppm->statusList['all'];
$lang->ppm->featureBar['browse']['opened']   = $lang->ppm->statusList['opened'];
$lang->ppm->featureBar['browse']['merged']   = $lang->ppm->statusList['merged'];
$lang->ppm->featureBar['browse']['closed']   = $lang->ppm->statusList['closed'];
$lang->ppm->featureBar['browse']['creator']  = $lang->ppm->createdByMe;

$lang->ppm->bug = new stdclass();
$lang->ppm->bug->title    = 'Título';
$lang->ppm->bug->source   = 'Origen';
$lang->ppm->bug->type     = 'Tipo';
$lang->ppm->bug->file     = 'Archivo';
$lang->ppm->bug->severity = 'Severidad';
$lang->ppm->bug->status   = 'Tipo';

$lang->ppm->mergeTypeInfoList = array();
$lang->ppm->mergeTypeInfoList['merge']  = 'Todos los commits de esta rama se agregarán a la rama base mediante un commit de fusión.';
$lang->ppm->mergeTypeInfoList['squash'] = 'Todos los commits de esta rama se combinarán en un único commit y se agregarán a la rama base. Este método de fusión altera los ID de los commits, lo que provoca que se pierdan los elementos asociados.';
$lang->ppm->mergeTypeInfoList['rebase'] = 'Todos los commits de esta rama se reubicarán (rebase) y se agregarán a la rama base. Este método de fusión altera los ID de los commits, lo que provoca que se pierdan los elementos asociados.';
$lang->ppm->mergeTypeInfoList['fast']   = 'Todos los commits de esta rama se agregarán directamente a la rama base sin generar commits de fusión, y puede ser necesario hacer rebase.';

$lang->ppm->notice = new stdclass();
$lang->ppm->notice->confirmClose                 = '¿Seguro que desea cerrar esta solicitud de fusión?';
$lang->ppm->notice->confirmReopen                = '¿Seguro que desea reabrir esta solicitud de fusión?';
$lang->ppm->notice->fastNotice                   = 'La rama de destino ya tiene nuevos commits, no se puede fusionar rápidamente';
$lang->ppm->notice->sameBranch                   = 'La rama de origen y la rama de destino no pueden ser la misma';
$lang->ppm->notice->userNotAllowMerge            = 'Solo los siguientes usuarios pueden fusionar: %s';
$lang->ppm->notice->userNotAllowCreate           = 'Solo los siguientes usuarios pueden crear: %s';
$lang->ppm->notice->hasUnresolvedIssues          = 'Hay incidencias sin resolver, resuélvalas primero.';
$lang->ppm->notice->hasUnresolvedSpecifiedIssues = 'Hay incidencias de tipo %s sin resolver, resuélvalas primero.';
$lang->ppm->notice->noHasReviewer                = 'No se han agregado revisores';

$lang->ppm->featureBar['view']['all']   = 'Todos';
$lang->ppm->featureBar['view']['story'] = 'Historia';
$lang->ppm->featureBar['view']['task']  = 'Tarea';
$lang->ppm->featureBar['view']['bug']   = 'Bug';

$lang->ppm->issueSourceList = array();
$lang->ppm->issueSourceList['code']  = 'Código';
$lang->ppm->issueSourceList['scan']  = 'Escanear';

$lang->ppm->diffHub = new stdclass();
$lang->ppm->diffHub->labels['files']                   = 'Archivos';
$lang->ppm->diffHub->labels['close']                   = 'Cerrar';
$lang->ppm->diffHub->labels['product']                 = 'Producto';
$lang->ppm->diffHub->labels['module']                  = 'Módulo';
$lang->ppm->diffHub->labels['save']                    = 'Guardar';
$lang->ppm->diffHub->labels['unified-view']            = 'Cambiar a vista unificada';
$lang->ppm->diffHub->labels['split-view']              = 'Cambiar a vista dividida';
$lang->ppm->diffHub->labels['collapse-all']            = 'Contraer todos los archivos';
$lang->ppm->diffHub->labels['expand-all']              = 'Expandir todos los archivos';
$lang->ppm->diffHub->labels['collapse-diff']           = 'Contraer diff';
$lang->ppm->diffHub->labels['expand-diff']             = 'Expandir diferencias';
$lang->ppm->diffHub->labels['content-placeholder']     = 'Ingrese los comentarios de revisión. Se admite Markdown';
$lang->ppm->diffHub->labels['edit-range']              = 'Clic para editar el rango';
$lang->ppm->diffHub->labels['range-start']             = 'Línea de inicio';
$lang->ppm->diffHub->labels['range-end']               = 'Línea final';
$lang->ppm->diffHub->labels['range-not-visible']       = 'La línea %s no está en el rango visible';
$lang->ppm->diffHub->labels['status-active']           = 'Activado';
$lang->ppm->diffHub->labels['status-resolved']         = 'Resuelto';
$lang->ppm->diffHub->labels['status-closed']           = 'Cerrado';
$lang->ppm->diffHub->labels['status-active-confirmed'] = 'Activado';
$lang->ppm->diffHub->labels['operate-confirm']         = 'Confirmar';
$lang->ppm->diffHub->labels['operate-assign']          = 'Asignar';
$lang->ppm->diffHub->labels['operate-resolve']         = 'Resolver';
