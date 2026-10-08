<?php
global $config;

$lang->repo->common          = 'Repositorio';
$lang->repo->repo            = 'Repositorio';
$lang->repo->codeRepo        = 'Biblioteca de código';
$lang->repo->browse          = 'Ver';
$lang->repo->viewRevision    = 'Ver revisión';
$lang->repo->product         = $lang->productCommon;
$lang->repo->projects        = $lang->projectCommon;
$lang->repo->execution       = $lang->execution->common;
$lang->repo->create          = 'Crear';
$lang->repo->maintain        = 'Lista de repositorios';
$lang->repo->edit            = 'Editar';
$lang->repo->delete          = 'Eliminar repositorio';
$lang->repo->showSyncCommit  = 'Sincronización de visualización';
$lang->repo->ajaxSyncCommit  = 'Interfaz: nota de sincronización Ajax';
$lang->repo->setRules        = 'Establecer reglas';
$lang->repo->download        = 'Descargar archivo';

$lang->repo->mirror = new stdclass();
$lang->repo->mirror->syncing             = 'Sincronizando...';
$lang->repo->mirror->refreshSync         = 'Actualizar estado de sincronización';
$lang->repo->mirror->nextSync            = 'Próxima sincronización: ';
$lang->repo->mirror->lastUpdated         = 'Última actualización: ';
$lang->repo->mirror->failedTitle         = 'Sincronización fallida';
$lang->repo->mirror->detail              = 'Ver detalle';
$lang->repo->mirror->syncCode            = 'Sincronizar repositorio';
$lang->repo->mirror->syncTriggered       = 'Job de sincronización activado';
$lang->repo->mirror->syncFailed          = 'Sincronización fallida';
$lang->repo->mirror->syncRequestFailed   = 'Falló la solicitud de sincronización';
$lang->repo->mirror->queryFailed         = 'La consulta falló';
$lang->repo->mirror->queryRequestFailed  = 'La solicitud de consulta falló';
$lang->repo->mirror->statusUpdated       = 'Estado de sincronización actualizado';
$lang->repo->mirror->stillRunning        = 'Aún sincronizando...';
$lang->repo->mirror->done                = 'Sincronización finalizada';
$lang->repo->mirror->failureTitle        = 'Detalle del fallo de sincronización';
$lang->repo->mirror->noDetail            = 'Sin detalle';

$lang->repo->downloadDiff    = 'Descargar diff';
$lang->repo->addBug          = 'Agregar revisión';
$lang->repo->editBug         = 'Editar Bug';
$lang->repo->deleteBug       = 'Eliminar Bug';
$lang->repo->addComment      = 'Agregar comentario';
$lang->repo->editComment     = 'Editar comentario';
$lang->repo->deleteComment   = 'Eliminar comentario';
$lang->repo->encrypt         = 'Cifrar';
$lang->repo->addWebHook      = 'Agregar Webhook';
$lang->repo->apiGetRepoByUrl = 'API: Obtener repositorio por URL';
$lang->repo->blameTmpl       = 'Código de la línea <strong>%line</strong>: %name hizo commit a las %time, %version %comment';
$lang->repo->notRelated      = 'Actualmente no hay ningún objeto de AXIS FLOW relacionado';
$lang->repo->source          = 'Criterio';
$lang->repo->target          = 'Contraste';
$lang->repo->descPlaceholder = 'Descripción en una frase';
$lang->repo->namespace       = 'Espacio de nombres';
$lang->repo->branchName      = 'Nombre de la rama';
$lang->repo->branchFrom      = 'Crear desde';
$lang->repo->codeBranch      = 'Rama de código';
$lang->repo->createdBranch   = 'Rama creada';
$lang->repo->unlink          = 'Desvincular';
$lang->repo->visit           = 'Visita';
$lang->repo->space           = 'Espacio';
$lang->repo->allSpace        = 'Todos los espacios';
$lang->repo->members         = 'Miembros';
$lang->repo->sshManager      = 'Administrador de claves SSH';
$lang->repo->defaultArtifact = 'Predeterminado';
$lang->repo->origin          = 'Origen';
$lang->repo->originRepo      = 'Repositorio de origen';
$lang->repo->provider        = 'Servidor';
$lang->repo->providerID      = 'Servidor';
$lang->repo->organize        = 'Organización';
$lang->repo->targetRepo      = 'Repositorio de destino';
$lang->repo->afterImport     = 'Después de importar';
$lang->repo->repoPath        = 'Ruta del repositorio';
$lang->repo->slug            = 'Ruta del repositorio';
$lang->repo->tips            = 'Consejos';

$lang->repo->createBranchAction = 'Crear rama';
$lang->repo->createTagAction    = 'Crear etiqueta';
$lang->repo->browseAction       = 'Explorar repositorios';
$lang->repo->createAction       = 'Importar repositorio';
$lang->repo->editAction         = 'Editar repositorio';
$lang->repo->diffAction         = 'Comparar código';
$lang->repo->downloadAction     = 'Descargar archivo';
$lang->repo->revisionAction     = 'Detalle de la revisión';
$lang->repo->blameAction        = 'Blame';
$lang->repo->reviewAction       = 'Lista de incidencias de revisión manual';
$lang->repo->downloadCode       = 'Descargar código';
$lang->repo->downloadZip        = 'Descargar paquete';
$lang->repo->sshClone           = 'Clonar con SSH';
$lang->repo->httpClone          = 'Clonar con HTTP';
$lang->repo->cloneUrl           = 'URL de clonación';
$lang->repo->linkTask           = 'Vincular tarea';
$lang->repo->unlinkedTasks      = 'Tareas desvinculadas';
$lang->repo->importAction       = 'Importar repositorio';
$lang->repo->import             = 'Importar repositorio';
$lang->repo->importName         = 'Nombre después de importar';
$lang->repo->importServer       = 'Seleccione un servidor';
$lang->repo->hide               = 'hide';
$lang->repo->show               = 'show';
$lang->repo->showHidden         = 'Mostrar repositorios ocultos';
$lang->repo->gitlabList         = 'Repositorio de Gitlab';
$lang->repo->batchCreate        = 'Importar repositorios por lote';
$lang->repo->browseTag          = 'Explorar etiquetas';
$lang->repo->browseBranch       = 'Explorar ramas';
$lang->repo->showImportProgress = 'Mostrar progreso de importación';
$lang->repo->showImportResult   = 'Mostrar resultado de importación';

$lang->repo->createRepoAction = 'Crear repositorio';

$lang->repo->submit     = 'Enviar';
$lang->repo->cancel     = 'Cancelar';
$lang->repo->addComment = 'Agregar comentario';
$lang->repo->addIssue   = 'Agregar incidencia';
$lang->repo->compare    = 'Comparar';

$lang->repo->copy     = 'Clic para copiar';
$lang->repo->copied   = 'Copiado correctamente';
$lang->repo->module   = 'Módulo';
$lang->repo->type     = 'Tipo';
$lang->repo->assign   = 'Asignado a';
$lang->repo->title    = 'Título';
$lang->repo->detile   = 'Detalle';
$lang->repo->lines    = 'Líneas';
$lang->repo->line     = 'Línea';
$lang->repo->expand   = 'Desplegar';
$lang->repo->collapse = 'Contraer';

$lang->repo->id                 = 'ID';
$lang->repo->SCM                = 'Tipo';
$lang->repo->name               = 'Nombre';
$lang->repo->identifier         = 'Nombre';
$lang->repo->path               = 'Ruta';
$lang->repo->prefix             = 'Prefijo';
$lang->repo->config             = 'Configuración';
$lang->repo->desc               = 'Descripción';
$lang->repo->account            = 'Nombre de usuario';
$lang->repo->password           = 'Contraseña';
$lang->repo->encoding           = 'Codificación';
$lang->repo->client             = 'Ruta del cliente';
$lang->repo->size               = 'Tamaño';
$lang->repo->revision           = 'Revisión';
$lang->repo->revisionA          = 'Revisión';
$lang->repo->revisions          = 'Revisión';
$lang->repo->time               = 'Fecha';
$lang->repo->committer          = 'Autor del commit';
$lang->repo->commits            = 'Commits';
$lang->repo->synced             = 'Inicializar sincronización';
$lang->repo->lastSync           = 'Última sincronización';
$lang->repo->deleted            = 'Eliminado';
$lang->repo->commit             = 'Commit';
$lang->repo->comment            = 'Comentario';
$lang->repo->view               = 'Ver archivo';
$lang->repo->viewA              = 'Ver';
$lang->repo->log                = 'Registro de revisiones';
$lang->repo->commitList         = 'Ver lista de Commits';
$lang->repo->blame              = 'Blame';
$lang->repo->date               = 'Fecha';
$lang->repo->diff               = 'Diff';
$lang->repo->diffAB             = 'Diff';
$lang->repo->diffAll            = 'Diff de todo';
$lang->repo->viewDiff           = 'Ver diferencias';
$lang->repo->allLog             = 'Commits';
$lang->repo->codeLocation       = 'Ubicación del código';
$lang->repo->action             = 'Acción';
$lang->repo->code               = 'Código';
$lang->repo->review             = 'Revisión del repositorio';
$lang->repo->acl                = 'ACL';
$lang->repo->group              = 'Grupo';
$lang->repo->user               = 'Usuario';
$lang->repo->info               = 'Información de la versión';
$lang->repo->job                = 'Trabajo';
$lang->repo->fileServerUrl      = 'URL del servidor de archivos';
$lang->repo->fileServerAccount  = 'Cuenta del servidor de archivos';
$lang->repo->fileServerPassword = 'Contraseña del servidor de archivos';
$lang->repo->linkStory          = 'Vincular ' . $lang->SRCommon;
$lang->repo->linkBug            = 'Vincular Bug';
$lang->repo->linkTask           = 'Vincular tarea';
$lang->repo->unlink             = 'Desvincular';
$lang->repo->viewBugs           = 'Ver Bugs';
$lang->repo->lastSubmitTime     = 'Hora de envío final';
$lang->repo->lastCommitter      = 'Autor del commit';
$lang->repo->lastUpdateTime     = 'Hora de última actualización';
$lang->repo->createdBy          = 'Creador';
$lang->repo->sourceCommit       = 'Commit';
$lang->repo->relations          = 'Relaciones';
$lang->repo->story              = 'story';
$lang->repo->searchTips         = 'Buscar por %s';
$lang->repo->design             = 'Diseño';
$lang->repo->bug                = 'Bug';
$lang->repo->task               = 'Tarea';

$lang->repo->title      = 'Título';
$lang->repo->status     = 'Estado';
$lang->repo->openedBy   = 'Creado por';
$lang->repo->assignedTo = 'Asignado a';
$lang->repo->openedDate = 'Fecha de creación';

$lang->repo->actionInfo     = "Agregado por %s en %s";
$lang->repo->changes        = "Registro de cambios";
$lang->repo->reviewLocation = "Archivo: %s@%s, Línea: %s - %s";
$lang->repo->ppmLocation    = "solicitud de revisión #%s";
$lang->repo->commentEdit    = '<i class="icon-pencil"></i>';
$lang->repo->commentDelete  = '<i class="icon-remove"></i>';
$lang->repo->allChanges     = "Otros cambios";
$lang->repo->commitTitle    = "El commit n.º %s";
$lang->repo->mark           = "Marcar etiqueta";
$lang->repo->split          = "Marca de división";

$lang->repo->objectRule   = 'Regla de objeto';
$lang->repo->objectIdRule = 'Regla de ID de objeto';
$lang->repo->actionRule   = 'Regla de acción';
$lang->repo->manHourRule  = 'Regla de horas-hombre';
$lang->repo->ruleUnit     = "Unidad";
$lang->repo->ruleSplit    = "Separe varias palabras clave con ';', p. ej., varias palabras clave de tarea: Tarea;tarea";

$lang->repo->viewDiffList['inline'] = 'En línea';
$lang->repo->viewDiffList['appose'] = 'Paralelo';

$lang->repo->encryptList['plain']  = 'Sin cifrado';
$lang->repo->encryptList['base64'] = 'BASE64';

$lang->repo->logStyles['A'] = 'Agregar';
$lang->repo->logStyles['M'] = 'Modificación';
$lang->repo->logStyles['D'] = 'Eliminar';

$lang->repo->encodingList['utf_8'] = 'UTF-8';
$lang->repo->encodingList['gbk']   = 'GBK';

$lang->repo->scmList['Gitlab'] = 'GitLab';
if(!$config->inQuickon && !$config->inCompose)
{
    $lang->repo->scmList['Gitea']      = 'Gitea';
    $lang->repo->scmList['Gogs']       = 'Gogs';
    $lang->repo->scmList['Git']        = 'Git';
    $lang->repo->scmList['Subversion'] = 'SVN';
}

$lang->repo->aclList['open']    = 'Abierto (Cualquier persona con acceso al espacio al que pertenece el repositorio puede acceder al repositorio)';
$lang->repo->aclList['private'] = 'Privado (Solo los miembros del repositorio pueden acceder al repositorio)';

$lang->repo->showAclList['open']    = 'Abierto';
$lang->repo->showAclList['private'] = 'Privado';

$lang->repo->gitlabHost    = 'Host de GitLab';
$lang->repo->gitlabToken   = 'Token de GitLab';
$lang->repo->gitlabProject = 'Proyecto';

$lang->repo->serviceHost    = 'Host';
$lang->repo->serviceProject = 'Proyecto';

$lang->repo->placeholder = new stdclass;
$lang->repo->placeholder->gitlabHost = 'Ingrese la URL de GitLab';

$lang->repo->notice                   = new stdclass();
$lang->repo->notice->syncing          = 'Sincronizando. Espere ...';
$lang->repo->notice->syncComplete     = 'Sincronizado. Redirigiendo ...';
$lang->repo->notice->syncFailed       = 'La sincronización falló.';
$lang->repo->notice->syncedCount      = 'El número de registros sincronizados es ';
$lang->repo->notice->delete           = '¿Desea desvincular la biblioteca de código?';
$lang->repo->notice->deleteConfirm    = '¿Desea eliminar la biblioteca? Esta operación quitará de forma permanente la biblioteca, todo su contenido y sus registros históricos, y no podrá recuperarse.';
$lang->repo->notice->successDelete    = 'Repositorio de código desasociado correctamente.';
$lang->repo->notice->commentContent   = 'Comentario';
$lang->repo->notice->deleteReview     = '¿Desea eliminar esta revisión?';
$lang->repo->notice->deleteBug        = '¿Desea eliminar este Bug?';
$lang->repo->notice->deleteComment    = '¿Desea eliminar este comentario?';
$lang->repo->notice->lastSyncTime     = 'Última sincronización:';
$lang->repo->notice->unlinkBranch     = '¿Seguro que desea desasociar la rama de %s?';
$lang->repo->notice->noRepoLeft       = 'Todos los repositorios ya están asociados a ZenTaoPMS, elija otro servidor.';
$lang->repo->notice->noChanges        = 'Sin cambios';
$lang->repo->notice->storyNotActive   = 'La historia no está activa, no se puede crear la rama.';
$lang->repo->notice->taskNotActive    = 'La tarea no está en espera ni en curso, no se puede crear la rama.';
$lang->repo->notice->bugNotActive     = 'El Bug no está activo, no se puede crear una rama.';

$lang->repo->rules = new stdclass();
$lang->repo->rules->exampleLabel = "Ejemplo de comentario";
$lang->repo->rules->example['task']['start']  = "%start% %task% %id%1%split%2 %cost%%consumedmark%1%cunit% %left%%leftmark%3%lunit%";
$lang->repo->rules->example['task']['finish'] = "%finish% %task% %id%1%split%2 %cost%%consumedmark%10%cunit%";
$lang->repo->rules->example['task']['effort'] = "%effort% %task% %id%1%split%2 %cost%%consumedmark%1%cunit% %left%%leftmark%3%lunit%";
$lang->repo->rules->example['bug']['resolve'] = "%resolve% %bug% %id%1%split%2";

$lang->repo->error = new stdclass();
$lang->repo->error->useless           = 'Su servidor tiene deshabilitadas exec y shell_exec, por lo que no se puede aplicar.';
$lang->repo->error->connect           = 'Falló la conexión con el repositorio. ¡Ingrese correctamente el usuario, la contraseña y la dirección del repositorio!';
$lang->repo->error->version           = 'Se requiere la versión 1.8+ de los protocolos https y svn. ¡Actualice a la última versión! Vaya a http://subversion.apache.org/';
$lang->repo->error->path              = 'La dirección del repositorio es la ruta del archivo, p. ej. /home/test.';
$lang->repo->error->cmd               = '¡Error del cliente!';
$lang->repo->error->diff              = 'Se deben seleccionar dos versiones.';
$lang->repo->error->safe              = "For security reasons, the client version needs to be detected. Please write the version to the file %s. \n Execute command: %s";
$lang->repo->error->product           = "¡Seleccione {$lang->productCommon}!";
$lang->repo->error->commentText       = '¡Ingrese el contenido para la revisión!';
$lang->repo->error->comment           = '¡Ingrese el contenido!';
$lang->repo->error->title             = '¡Ingrese el título!';
$lang->repo->error->accessDenied      = 'No tiene privilegios para acceder al repositorio.';
$lang->repo->error->noFound           = 'No se encontró el repositorio.';
$lang->repo->error->empty             = 'El repositorio está vacío, no se pueden sincronizar los registros.';
$lang->repo->error->noFile            = '%s no existe o no tiene permiso.';
$lang->repo->error->noPriv            = 'El programa no tiene privilegios para cambiar a %s';
$lang->repo->error->output            = "The command is: %s\nThe error is(%s): %s\n";
$lang->repo->error->clientVersion     = "La versión del cliente es demasiado antigua, actualice o cambie el cliente SVN";
$lang->repo->error->encoding          = "Es posible que la codificación sea incorrecta. Cambie la codificación e inténtelo de nuevo.";
$lang->repo->error->deleted           = "Lanzamiento fallido: el registro de envío está asociado a un diseño; los números de diseño son ( %s ).<br/>";
$lang->repo->error->linkedBranch      = "Lanzamiento fallido: el repositorio de código está asociado a una rama; los tipos de rama son ( %s ) y las ramas son ( %s ).<br/>";
$lang->repo->error->linkedJob         = "Lanzamiento fallido: la biblioteca de código está asociada a un pipeline; los números de pipeline son ( %s ).<br/>";
$lang->repo->error->linkedArtifact    = "Lanzamiento fallido: la biblioteca de código está asociada a un repositorio de artefactos; los números de repositorio de artefactos son ( %s ).<br/>";
$lang->repo->error->clientPath        = "¡El directorio de instalación del cliente no puede contener espacios!";
$lang->repo->error->notFound          = "El repositorio %s tiene una URL %s que no existe. no existe. Confirme si este repositorio ha sido eliminado del servidor local.";
$lang->repo->error->noWritable        = '¡%s no tiene permisos de escritura! Verifique los privilegios o la descarga no se realizará.';
$lang->repo->error->noCloneAddr       = 'No se encontró la dirección de clonación del repositorio';
$lang->repo->error->differentVersions = 'El criterio y el contraste no pueden ser iguales';
$lang->repo->error->needTwoVersion    = 'Se deben seleccionar dos ramas o etiquetas.';
$lang->repo->error->projectUnique     = $lang->repo->serviceProject . " existe. Vaya a Administración->Sistema->Datos->Papelera de reciclaje para restaurarlo, si está seguro de que fue eliminado.";
$lang->repo->error->repoNameInvalid   = 'El nombre solo debe contener caracteres alfanuméricos, guiones, conectores y puntos.';
$lang->repo->error->createdFail       = 'Error al crear';
$lang->repo->error->branchNameTooLong = 'El nombre de la rama no puede exceder 30 caracteres';
$lang->repo->error->noProduct         = 'Asocie el producto antes de iniciar la exportación del repositorio de código.';
$lang->repo->error->emptyVersion      = 'La versión no puede estar vacía';
$lang->repo->error->versionError      = '¡Formato de versión incorrecto!';

$lang->repo->syncTips          = '<strong>Puede encontrar la referencia sobre cómo configurar la sincronización con Git <a target="_blank" href="https://www.zentao.pm/book/zentaomanual/free-open-source-project-management-software-git-105.html">aquí</a>.</strong>';
$lang->repo->encodingsTips     = "Las codificaciones de los comentarios pueden ser valores separados por comas, p. ej., utf-8.";
$lang->repo->pathTipsForGitlab = "URL del proyecto de GitLab";

$lang->repo->example              = new stdclass();
$lang->repo->example->client      = new stdclass();
$lang->repo->example->path        = new stdclass();
$lang->repo->example->client->git = "p. ej. /usr/bin/git";
$lang->repo->example->client->svn = "p. ej. /usr/bin/svn";
$lang->repo->example->path->git   = "p. ej. /home/user/myproject";
$lang->repo->example->path->svn   = "p. ej. http://example.googlecode.com/svn/trunk/myproject";
$lang->repo->example->config      = "Se requiere el directorio de configuración en https. Use '--config-dir' para generarlo.";
$lang->repo->example->encoding    = "codificación de entrada de los archivos";

$lang->repo->typeList['standard']    = 'Estándar';
$lang->repo->typeList['performance'] = 'Rendimiento';
$lang->repo->typeList['security']    = 'Seguridad';
$lang->repo->typeList['redundancy']  = 'Redundancia';
$lang->repo->typeList['logicError']  = 'Error de lógica';

$lang->repo->featureBar['maintain']['all'] = 'Todos';

$lang->repo->errorLang[0] = "Solo puede contener letras, dígitos, '_', '-' y '.'. No puede comenzar con '-', terminar en '.git' ni terminar en '.atom'";
$lang->repo->errorLang[1] = 'La rama existe';
$lang->repo->errorLang[2] = 'La rama ya existe';
$lang->repo->errorLang[3] = 'Prohibido';
$lang->repo->errorLang[4] = 'No puede contener caracteres de control ASCII';
$lang->repo->errorLang[5] = 'Error al crear';
$lang->repo->errorLang[6] = 'Prohibido';

$lang->repo->apiError[0] = "solo puede contener letras, dígitos, '_', '-' y '.'. No puede comenzar con '-', terminar en '.git' ni terminar en '.atom'";
$lang->repo->apiError[1] = 'La rama existe';
$lang->repo->apiError[2] = 'branch.* ya existe';
$lang->repo->apiError[3] = 'Prohibido';
$lang->repo->apiError[4] = 'no puede contener caracteres de control ASCII';
$lang->repo->apiError[5] = 'Error al crear';
$lang->repo->apiError[6] = 'Proyecto no encontrado';

$lang->repo->branchType            = 'Tipo de rama';
$lang->repo->applicableBranchTypes = 'Tipos de rama aplicables';
$lang->repo->allBranchTypes        = 'Todos los tipos de rama';

$lang->repo->branchRuleMode = array();
$lang->repo->branchRuleMode['inheritance']  = 'Herencia';
$lang->repo->branchRuleMode['redefinition'] = 'Redefinición';

$lang->repo->branchTypeRule = new stdClass();
$lang->repo->branchTypeRule->allowCreatedBy     = 'Usuarios con permiso de creación';
$lang->repo->branchTypeRule->allowDeletedBy     = 'Usuarios con permiso de eliminación';
$lang->repo->branchTypeRule->allowUpdatedBy     = 'Usuarios con permiso de actualización';
$lang->repo->branchTypeRule->allowForcePushedBy = 'Usuarios con permiso de force push';
$lang->repo->branchTypeRule->allowMergeFrom     = 'Orígenes de fusión permitidos';
$lang->repo->branchTypeRule->allowMergeTo       = 'Destinos de fusión permitidos';

$lang->repo->branchTypeRule->userOptionList = array();
$lang->repo->branchTypeRule->userOptionList['hasPriv'] = 'Usuarios con permiso';
$lang->repo->branchTypeRule->userOptionList['specify'] = 'Solo usuarios especificados';

$lang->repo->branchTypeRule->branchTypeOptionList = array();
$lang->repo->branchTypeRule->branchTypeOptionList['all']     = 'Todas las ramas';
$lang->repo->branchTypeRule->branchTypeOptionList['specify'] = 'Tipos de rama especificados';

$lang->repo->branchRule = new stdClass();
$lang->repo->branchRule->allowDeletedBy     = 'Usuarios con permiso de eliminación';
$lang->repo->branchRule->allowUpdatedBy     = 'Usuarios con permiso de actualización';
$lang->repo->branchRule->allowForcePushedBy = 'Usuarios con permiso de force push';
$lang->repo->branchRule->allowMergeFrom     = 'Orígenes de fusión permitidos';
$lang->repo->branchRule->allowMergeTo       = 'Destinos de fusión permitidos';
$lang->repo->branchRule->delete             = 'Eliminar regla de rama';
$lang->repo->branchRule->mode               = 'Control de reglas';

$lang->repo->branchRule->userOptionList = array();
$lang->repo->branchRule->userOptionList['hasPriv'] = 'Usuarios con permiso';
$lang->repo->branchRule->userOptionList['specify'] = 'Solo usuarios especificados';

$lang->repo->branchRule->branchTypeOptionList = array();
$lang->repo->branchRule->branchTypeOptionList['all']     = 'Todas las ramas';
$lang->repo->branchRule->branchTypeOptionList['specify'] = 'Tipos de rama especificados';

$lang->repo->select            = 'Seleccione...';
$lang->repo->searchPlaceholder = 'Filtrar por revisión de Git';
$lang->repo->svnPlaceholder    = 'Ingrese la versión';
$lang->repo->changeFile        = 'Cambiar archivos';

$lang->repo->commitInfo   = 'Detalles de modificación del código';
$lang->repo->linkedStory  = "Historias vinculadas";
$lang->repo->linkedTask   = "Tareas vinculadas";
$lang->repo->linkedBug    = "Bugs vinculados";
$lang->repo->commited     = "Commit realizado";
$lang->repo->commentary   = "Comentario";
$lang->repo->issueTitle   = "Título de la incidencia";
$lang->repo->issueDesc    = "Detalle de la incidencia";
$lang->repo->dateTmpl     = "Propuesto el %s";
$lang->repo->commentNum   = " Comentarios";

$lang->repo->fileTotal  = '%d archivos';
$lang->repo->codeSurvey = 'Cambios: <span class="add-cot">%d líneas</span> de código agregadas, <span class="delete-cot">%d líneas</span> de código eliminadas';

$lang->repo->featureBar['review']['all']          = 'Todos';
$lang->repo->featureBar['review']['assigntome']   = 'Asignado a mí';
$lang->repo->featureBar['review']['openedbyme']   = 'AbiertoPorMí';
$lang->repo->featureBar['review']['resolvedbyme'] = 'Resuelto por mí';
$lang->repo->featureBar['review']['assigntonull'] = 'Sin asignar';
$lang->repo->featureBar['review']['unresolved']   = 'Activo';
$lang->repo->featureBar['review']['unclosed']     = 'Sin cerrar';

$lang->repo->browseSystem = 'Lista de aplicaciones';

$lang->repo->system = new stdclass();
$lang->repo->system->product       = 'Producto';
$lang->repo->system->name          = 'Nombre de la aplicación';
$lang->repo->system->latestRelease = 'Última versión';
$lang->repo->system->deployStatus  = 'Estado de la última versión';
$lang->repo->system->status        = 'Estado de la aplicación';

$lang->repo->remark              = "Mensaje";
$lang->repo->codeTag             = 'Etiquetas de código';
$lang->repo->tagName             = 'Nombre de la etiqueta';
$lang->repo->tagFrom             = 'Creado desde';
$lang->repo->createTag           = 'Crear etiqueta';
$lang->repo->deleteTag           = 'Eliminar etiqueta';
$lang->repo->confirmTagDelete    = '¿Seguro que desea eliminar esta etiqueta?';
$lang->repo->createBranch        = 'Crear rama';
$lang->repo->deleteBranch        = 'Eliminar rama';
$lang->repo->confirmBranchDelete = '¿Seguro que desea eliminar esta rama?';
$lang->repo->deleteDefaultBranch = 'La rama predeterminada no permite eliminación';
$lang->repo->divergence          = 'Atrasado|Adelantado';
$lang->repo->ahead               = 'Adelantado';
$lang->repo->behind              = 'Atrasado';
$lang->repo->noDivergence        = 'Sin divergencia';
$lang->repo->noDivergenceOnHint  = 'Sin divergencia en %s';
$lang->repo->divergenceOnBranch  = 'El %s ';
$lang->repo->aheadHint           = 'Adelantado %s veces';
$lang->repo->behindHint          = 'Atrasado %s veces';
$lang->repo->default             = 'Predeterminado';
$lang->repo->defaultBranch       = 'Rama predeterminada';
$lang->repo->committerTip        = 'El autor del commit tiene permiso de escritura en el repositorio de código';
$lang->repo->commitDetail        = '%s confirmado el %s por %s';
$lang->repo->hasNoProduct        = 'El proyecto o la ejecución no tiene un producto';
$lang->repo->failCreateWebhook   = 'Error al crear Webhook';

$lang->repo->browseWebhooks     = 'Lista de Webhooks';
$lang->repo->createWebhook      = 'Crear Webhook';
$lang->repo->editWebhook        = 'Editar Webhook';
$lang->repo->logWebhook         = 'Registro de Webhook';
$lang->repo->viewWebhookRequest = 'Datos de la solicitud';
$lang->repo->deleteWebhook      = 'Eliminar Webhook';
$lang->repo->targetURL          = 'URL de destino';
$lang->repo->latestStatus       = 'Último estado';
$lang->repo->enable             = 'Habilitar';
$lang->repo->disable            = 'Deshabilitar';
$lang->repo->enableWebhook      = 'Habilitar/Deshabilitar Webhook';
$lang->repo->deleteWebhook      = 'Eliminar Webhook';

$lang->repo->webhook = new stdclass();
$lang->repo->webhook->statusList = array();
$lang->repo->webhook->statusList['enabled']  = 'Habilitado';
$lang->repo->webhook->statusList['disabled'] = 'Deshabilitado';

$lang->repo->webhook->latestStatusList = array();
$lang->repo->webhook->latestStatusList['success'] = 'success';
$lang->repo->webhook->latestStatusList['fail']    = 'fail';
$lang->repo->webhook->latestStatusList['pending'] = 'pending';

$lang->repo->webhook->logStatusList = array();
$lang->repo->webhook->logStatusList['success'] = 'Éxito';
$lang->repo->webhook->logStatusList['fail']    = 'Falla';

$lang->repo->webhook->key                  = 'Clave';
$lang->repo->webhook->desc                 = 'Descripción';
$lang->repo->webhook->SSL                  = 'Habilitar SSL';
$lang->repo->webhook->triggerEvent         = 'Evento disparador';
$lang->repo->webhook->customEvent          = 'Evento personalizado';
$lang->repo->webhook->urlError             = 'El formato de la URL de destino es incorrecto';
$lang->repo->webhook->customEventError     = 'El evento personalizado no puede estar vacío';
$lang->repo->webhook->nameExists           = 'El nombre %s ya existe';
$lang->repo->webhook->defaultShowSecret    = '******';
$lang->repo->webhook->enabledSuccess       = 'Habilitado correctamente';
$lang->repo->webhook->disabledSuccess      = 'Deshabilitado correctamente';
$lang->repo->webhook->enabledFail          = 'Error al habilitar';
$lang->repo->webhook->disabledFail         = 'Error al deshabilitar';
$lang->repo->webhook->requestData          = 'Datos de la solicitud';
$lang->repo->webhook->requestDate          = 'Fecha de solicitud';
$lang->repo->webhook->triggerType          = 'Tipo de disparador';
$lang->repo->webhook->requestURL           = 'URL de la solicitud';
$lang->repo->webhook->requestHeaders       = 'Encabezados de la solicitud';
$lang->repo->webhook->requestBody          = 'Datos de la solicitud';
$lang->repo->webhook->responseHeaders      = 'Encabezados de la respuesta';
$lang->repo->webhook->responseBody         = 'Datos de la respuesta';
$lang->repo->webhook->emptyData            = 'Sin datos';
$lang->repo->webhook->deleteSuccess        = 'Eliminado correctamente';
$lang->repo->webhook->confirmWebhookDelete = "¿Seguro que desea eliminar '%s'? No se podrá recuperar.";
$lang->repo->webhook->lengthError          = "La longitud de 『%s』debe ser <=『%s』";
$lang->repo->webhook->deleteFail           = 'El Webhook ya se ha usado y no se puede eliminar';

$lang->repo->webhook->triggerEventList = array();
$lang->repo->webhook->triggerEventList[0] = 'Todos los eventos';
$lang->repo->webhook->triggerEventList[1] = 'Evento personalizado';

$lang->repo->webhook->customEventList = array();
$lang->repo->webhook->customEventList['branch_created']           = 'Rama creada';
$lang->repo->webhook->customEventList['branch_updated']           = 'Rama actualizada';
$lang->repo->webhook->customEventList['branch_deleted']           = 'Rama eliminada';
$lang->repo->webhook->customEventList['tag_created']              = 'Etiqueta creada';
$lang->repo->webhook->customEventList['tag_deleted']              = 'Etiqueta eliminada';
$lang->repo->webhook->customEventList['pullreq_created']          = 'Crear Pull Request';
$lang->repo->webhook->customEventList['pullreq_reopened']         = 'Reabrir Pull Request';
$lang->repo->webhook->customEventList['pullreq_branch_updated']   = 'Actualizar rama del Pull Request';
$lang->repo->webhook->customEventList['pullreq_closed']           = 'Cerrar pull request';
$lang->repo->webhook->customEventList['pullreq_merged']           = 'Combinar Pull Request';

$lang->repo->sourceList = array();
$lang->repo->sourceList['GitLab']     = 'GitLab';
$lang->repo->sourceList['Gitea']      = 'Gitea';
$lang->repo->sourceList['Gogs']       = 'Gogs';
$lang->repo->sourceList['Subversion'] = 'Subversion';

$lang->repo->accessList = array();
$lang->repo->accessList['writable'] = 'Legible, escribible y administrable (se importa como repositorio de código GitFox, se administra en GitFox)';
$lang->repo->accessList['readonly'] = 'Solo lectura (para importación de imágenes, gestionado mediante repositorio de código de terceros, sincronizado automáticamente de forma periódica por DevOps)';

$lang->repo->importProgress = new stdclass();
$lang->repo->importProgress->title        = 'Importando repositorio...';
$lang->repo->importProgress->desc         = 'El repositorio de terceros se está importando al sistema. Espere, esto puede tardar unos minutos.';
$lang->repo->importProgress->notice       = 'Espere a que finalice la importación y no cierre esta página.';
$lang->repo->importProgress->leaveTip     = 'El repositorio se está importando. No cierre esta página. Una vez cerrada, el progreso de la importación dejará de estar disponible.';
$lang->repo->importProgress->acknowledge  = 'Lo sé';
$lang->repo->importProgress->importFailed = 'Error al importar';
$lang->repo->importProgress->failMessage  = 'Falló la importación del repositorio: %s';
$lang->repo->importProgress->successTips  = 'Repositorio importado correctamente. Ahora puede realizar las siguientes acciones:';
$lang->repo->importProgress->toRepoBrowse = 'Explorar repositorio';
$lang->repo->importProgress->toRepoList   = 'Volver a la lista de repositorios';
$lang->repo->importProgress->tryAgain     = 'Intentar de nuevo';
