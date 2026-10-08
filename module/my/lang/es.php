<?php
global $config;

/* Method List。*/
$lang->my->index           = 'Inicio';
$lang->my->data            = 'Mis datos';
$lang->my->todo            = 'Mi pendiente';
$lang->my->todoAction      = 'Lista de cronogramas';
$lang->my->calendar        = 'Cronograma';
$lang->my->work            = 'Trabajo';
$lang->my->contribute      = 'Contribución';
$lang->my->task            = 'Mis tareas';
$lang->my->bug             = 'Mis Bugs';
$lang->my->myTestTask      = 'Mis solicitudes de prueba';
$lang->my->myTestCase      = 'Mis casos de prueba';
$lang->my->story           = 'Mis historias';
$lang->my->doc             = "Mis documentos";
$lang->my->createProgram   = 'Crear programa';
$lang->my->project         = "My {$lang->projectCommon}s";
$lang->my->execution       = "My {$lang->execution->common}s";
$lang->my->audit           = 'Revisiones';
$lang->my->issue           = 'Mis incidencias';
$lang->my->risk            = 'Mis riesgos';
$lang->my->reviewissue     = 'Mi incidencia de revisión';
$lang->my->profile         = 'Mi perfil';
$lang->my->dynamic         = 'Mis recientes';
$lang->my->team            = 'Equipo';
$lang->my->editProfile     = 'Editar perfil';
$lang->my->changePassword  = 'Cambiar contraseña';
$lang->my->preference      = 'Preferencia';
$lang->my->unbind          = 'Desvincular ZDOO';
$lang->my->manageContacts  = 'Administrar contactos';
$lang->my->createContacts  = 'Crear contacto';
$lang->my->deleteContacts  = 'Eliminar contacto';
$lang->my->viewContacts    = 'Ver contacto';
$lang->my->shareContacts   = 'Contactos públicos';
$lang->my->limited         = 'Permiso restringido. Solo puede editar sus propios datos.';
$lang->my->score           = 'Mis puntos';
$lang->my->scoreRule       = 'Reglas de puntos';
$lang->my->noTodo          = 'Aún no hay pendientes.';
$lang->my->noData          = 'Aún no hay %s.';
$lang->my->storyChanged    = "Historia cambiada";
$lang->my->hours           = "Hours/day";
$lang->my->uploadAvatar    = 'Actualizar avatar';
$lang->my->epic            = "My {$lang->ERCommon}";
$lang->my->requirement     = "My {$lang->URCommon}";
$lang->my->testtask        = 'Solicitud de prueba Mt';
$lang->my->testcase        = 'Mi caso de prueba';
$lang->my->storyConcept    = 'Concepto de historia';
$lang->my->pri             = 'Prioridad';
$lang->my->alert           = 'Puede hacer clic en su avatar en la esquina superior derecha y seleccionar Preferencias para actualizar su información.';
$lang->my->assignedToMe    = 'Asignado a mí';
$lang->my->byQuery         = 'Buscar';
$lang->my->contactHolder   = 'Contactos';
$lang->my->contactList     = 'Lista de contactos';
$lang->my->myContact       = 'Mi';
$lang->my->publicContact   = 'Público';
$lang->my->manageSelf      = 'Solo puede editar los contactos que usted creó.';
$lang->my->adminView       = 'Los administradores del sistema tienen permiso para eliminar contactos públicos.';
$lang->my->projectReview   = 'Revisión del proyecto';

$lang->my->indexAction      = 'Resumen del panel';
$lang->my->calendarAction   = 'Mi calendario';
$lang->my->workAction       = 'Mi trabajo';
$lang->my->contributeAction = 'Mi contribución';
$lang->my->profileAction    = 'Perfil';
$lang->my->dynamicAction    = 'Recientes';

$lang->my->myExecutions = "Mis ejecuciones";
$lang->my->name         = 'Nombre';
$lang->my->code         = 'Código';
$lang->my->projects     = "{$lang->projectCommon}s";
$lang->my->executions   = 'Ejecuciones';

$lang->my->taskMenu = new stdclass();
$lang->my->taskMenu->assignedToMe = 'Asignado a mí';
$lang->my->taskMenu->openedByMe   = 'Creado por mí';
$lang->my->taskMenu->finishedByMe = 'Completado por mí';
$lang->my->taskMenu->closedByMe   = 'Cerrado por mí';
$lang->my->taskMenu->canceledByMe = 'Cancelado por mí';
$lang->my->taskMenu->assignedByMe = 'Asignado por mí';

$lang->my->storyMenu = new stdclass();
$lang->my->storyMenu->assignedToMe = 'Asignado a mí';
$lang->my->storyMenu->reviewByMe   = 'Mi revisión pendiente';
$lang->my->storyMenu->openedByMe   = 'Creado por mí';
$lang->my->storyMenu->reviewedByMe = 'Revisados por mí';
$lang->my->storyMenu->closedByMe   = 'Cerrado por mí';
$lang->my->storyMenu->assignedByMe = 'Asignado por mí';

$lang->my->auditField = new stdclass();
$lang->my->auditField->title      = 'Título';
$lang->my->auditField->status     = 'Estado';
$lang->my->auditField->type       = 'Tipo';
$lang->my->auditField->project    = 'Proyecto';
$lang->my->auditField->product    = 'Producto';
$lang->my->auditField->reviewer   = 'Aprobador';
$lang->my->auditField->opinion    = 'Opinión';
$lang->my->auditField->result     = 'Resultado';
$lang->my->auditField->openedBy   = 'Enviado por';
$lang->my->auditField->time       = 'Hora de envío';
$lang->my->auditField->reviewTime = 'Tiempo de revisión';

$lang->my->auditField->oaTitle['attend']   = 'Solicitud de asistencia de %s: %s';
$lang->my->auditField->oaTitle['leave']    = 'Solicitud de permiso de %s: %s';
$lang->my->auditField->oaTitle['makeup']   = 'Solicitud de recuperación de trabajo de %s: %s';
$lang->my->auditField->oaTitle['overtime'] = 'Solicitud de horas extra de %s: %s';
$lang->my->auditField->oaTitle['lieu']     = 'Solicitud de descanso compensatorio de %s: %s';

$lang->my->form = new stdclass();
$lang->my->form->lblBasic   = 'Información básica';
$lang->my->form->lblContact = 'Información de contacto';
$lang->my->form->lblAccount = 'Información de la cuenta';

$lang->my->programLink     = 'Página predeterminada del programa';
$lang->my->productLink     = $lang->productCommon . ' Página predeterminada';
$lang->my->projectLink     = $lang->projectCommon . ' Página predeterminada';
$lang->my->executionLink   = 'Página predeterminada de ejecución';
$lang->my->docLink         = 'Página predeterminada de documentos';
$lang->my->devopsLink      = 'Página predeterminada de la vista DevOps';
$lang->my->devopsspaceLink = 'Página predeterminada del espacio DevOps';

$lang->my->programLinkList = array();
$lang->my->programLinkList['program-browse']  = 'Lista de programas / Vea todos los programas.';
$lang->my->programLinkList['program-kanban']  = 'Kanban de programas / Visualice el avance de todos los programas.';
$lang->my->programLinkList['program-project'] = "Recent Programs {$lang->projectCommon} List / View all {$lang->projectCommon} under the current program.";

$lang->my->productLinkList = array();
$lang->my->productLinkList['product-all']       = "{$lang->productCommon} List / View all {$lang->productCommon}.";
$lang->my->productLinkList['product-kanban']    = "{$lang->productCommon} Kanban / Visualize the progress of all {$lang->productCommon}.";
$lang->my->productLinkList['product-index']     = "All {$lang->productCommon} Dashboard / View statistics, summaries, and overviews of all {$lang->productCommon}.";
$lang->my->productLinkList['product-dashboard'] = "Recent {$lang->productCommon} Dashboard / View the most recently accessed {$lang->productCommon} dashboard.";
$lang->my->productLinkList['product-browse']    = "Recent {$lang->productCommon}s Story List / Access the story list under the most recently viewed {$lang->productCommon}.";

$lang->my->projectLinkList = array();
$lang->my->projectLinkList['project-browse']    = "{$lang->projectCommon} List / View all {$lang->projectCommon}.";
$lang->my->projectLinkList['project-kanban']    = "{$lang->projectCommon} Kanban / Visualize the progress of all {$lang->projectCommon}.";
$lang->my->projectLinkList['project-execution'] = "Recent {$lang->projectCommon} Execution List / View all execution lists under the {$lang->projectCommon}.";
$lang->my->projectLinkList['project-index']     = "Recent {$lang->projectCommon} Dashboard / Access the dashboard of the most recently viewed {$lang->projectCommon}.";

$lang->my->executionLinkList = array();
$lang->my->executionLinkList['execution-all']             = 'Lista de ejecuciones / Vea todas las ejecuciones.';
$lang->my->executionLinkList['execution-executionkanban'] = 'Kanban de ejecución / Visualice el progreso de todas las ejecuciones.';
$lang->my->executionLinkList['execution-task']            = 'Lista de tareas de la ejecución reciente / Vea las tareas de la ejecución creada más recientemente.';

$lang->my->docLinkList = array();
$lang->my->docLinkList['doc-lastViewedSpaceHome'] = 'La página de inicio del espacio visitada más recientemente';
$lang->my->docLinkList['doc-lastViewedSpace']     = 'El espacio visitado más recientemente';
$lang->my->docLinkList['doc-lastViewedLib']       = 'La biblioteca visitada más recientemente';

$lang->my->devopsspaceLinkList = array();
$lang->my->devopsspaceLinkList['repo-maintain'] = 'Lista de bibliotecas de código en el espacio';
$lang->my->devopsspaceLinkList['repo-browse']   = 'La biblioteca de código visitada más recientemente';

$lang->my->devopsLinkList = array();
$lang->my->devopsLinkList['space-browse']  = 'Lista de espacios';
$lang->my->devopsLinkList['repo-maintain'] = 'Lista de bibliotecas de código';
$lang->my->devopsLinkList['repo-browse']   = 'La biblioteca de código visitada más recientemente';

$lang->my->confirmReview['pass'] = '¿Seguro que desea aprobarlo?';
$lang->my->guideChangeTheme = <<<EOT
<p class='theme-title'><span style='color: #0c60e1'>Young Blue</span>theme is available now!</p>
<div>
<p>With just one step, you can experience the brand new theme! Go ahead and set it up now!</p>
<p>Simply hover over<span style='color: #0c60e1'>【Avatar - Theme - Young Blue】</span>, click on Young Blue, and you're all set!</p>
</div>
EOT;

$lang->my->featureBar['todo']['all']       = 'Asignado a mí';
$lang->my->featureBar['todo']['undone']    = 'Sin completar';
$lang->my->featureBar['todo']['future']    = 'TBD';
$lang->my->featureBar['todo']['today']     = 'Hoy';
$lang->my->featureBar['todo']['thisWeek']  = 'Esta semana';
$lang->my->featureBar['todo']['thisMonth'] = 'Este mes';
$lang->my->featureBar['todo']['more']      = 'Más';

$lang->my->moreSelects['todo']['more']['thisYear']        = 'Este año';
$lang->my->moreSelects['todo']['more']['assignedToOther'] = 'Asignado a otros';
$lang->my->moreSelects['todo']['more']['cycle']           = 'Duración';

$lang->my->featureBar['audit']['all']         = 'Todos';
$lang->my->featureBar['audit']['demand']      = 'Historias del pool de historias';
$lang->my->featureBar['audit']['story']       = $lang->SRCommon;
$lang->my->featureBar['audit']['requirement'] = $lang->URCommon;
$lang->my->featureBar['audit']['epic']        = $lang->ERCommon;
$lang->my->featureBar['audit']['testcase']    = 'Caso de prueba';
$lang->my->featureBar['audit']['ppm']         = 'Solicitud de revisión';
if(in_array($config->edition, array('max', 'ipd')) and (helper::hasFeature('waterfall') or helper::hasFeature('waterfallplus'))) $lang->my->featureBar['audit']['project'] = $lang->projectCommon;
if($config->edition != 'open') $lang->my->featureBar['audit']['feedback'] = 'Retroalimentación';
if($config->edition != 'open' and helper::hasFeature('OA')) $lang->my->featureBar['audit']['oa'] = 'OA';

$lang->my->featureBar['project']['doing']      = 'En curso';
$lang->my->featureBar['project']['wait']       = 'En espera';
$lang->my->featureBar['project']['suspended']  = 'En espera';
$lang->my->featureBar['project']['delayed']    = 'Retrasado';
$lang->my->featureBar['project']['closed']     = 'Cerrado';
$lang->my->featureBar['project']['openedbyme'] = 'Creado por mí';

$lang->my->featureBar['execution']['undone']  = 'Sin completar';
$lang->my->featureBar['execution']['done']    = 'Hecho';
$lang->my->featureBar['execution']['delayed'] = 'Retrasado';

$lang->my->featureBar['dynamic']['all']       = 'Todos';
$lang->my->featureBar['dynamic']['today']     = 'Hoy';
$lang->my->featureBar['dynamic']['yesterday'] = 'Ayer';
$lang->my->featureBar['dynamic']['thisWeek']  = 'Esta semana';
$lang->my->featureBar['dynamic']['lastWeek']  = 'Semana pasada';
$lang->my->featureBar['dynamic']['thisMonth'] = 'Este mes';
$lang->my->featureBar['dynamic']['lastMonth'] = 'Mes pasado';

$lang->my->featureBar['work']['task']['assignedTo']     = $lang->my->assignedToMe;
$lang->my->featureBar['work']['testcase']['assigntome'] = $lang->my->assignedToMe;
$lang->my->featureBar['work']['testtask']['assignedTo'] = 'Mi participación';

$lang->my->featureBar['work']['epic'] = $lang->my->featureBar['work']['task'];
$lang->my->featureBar['work']['epic']['reviewBy'] = 'Mi revisión pendiente';

$lang->my->featureBar['work']['requirement'] = $lang->my->featureBar['work']['task'];
$lang->my->featureBar['work']['requirement']['reviewBy'] = 'Mi revisión pendiente';

$lang->my->featureBar['work']['story'] = $lang->my->featureBar['work']['requirement'];
$lang->my->featureBar['work']['bug']   = $lang->my->featureBar['work']['task'];

$lang->my->featureBar['contribute']['task']['openedBy']   = 'Creado por mí';
$lang->my->featureBar['contribute']['task']['finishedBy'] = 'Completado por mí';
$lang->my->featureBar['contribute']['task']['myInvolved'] = 'Mi participación';
$lang->my->featureBar['contribute']['task']['closedBy']   = 'Cerrado por mí';
$lang->my->featureBar['contribute']['task']['canceledBy'] = 'Cancelado por mí';
$lang->my->featureBar['contribute']['task']['assignedBy'] = 'Asignado por mí';

$lang->my->featureBar['contribute']['epic']['openedBy']   = 'Creado por mí';
$lang->my->featureBar['contribute']['epic']['reviewedBy'] = 'Revisados por mí';
$lang->my->featureBar['contribute']['epic']['closedBy']   = 'Cerrado por mí';
$lang->my->featureBar['contribute']['epic']['assignedBy'] = 'Asignado por mí';

$lang->my->featureBar['contribute']['requirement']['openedBy']   = 'Creado por mí';
$lang->my->featureBar['contribute']['requirement']['reviewedBy'] = 'Revisados por mí';
$lang->my->featureBar['contribute']['requirement']['closedBy']   = 'Cerrado por mí';
$lang->my->featureBar['contribute']['requirement']['assignedBy'] = 'Asignado por mí';

$lang->my->featureBar['contribute']['bug']['openedBy']   = 'Creado por mí';
$lang->my->featureBar['contribute']['bug']['resolvedBy'] = 'Corregidos por mí';
$lang->my->featureBar['contribute']['bug']['closedBy']   = 'Cerrado por mí';
$lang->my->featureBar['contribute']['bug']['assignedBy'] = 'Asignado por mí';

$lang->my->featureBar['contribute']['story'] = $lang->my->featureBar['contribute']['requirement'];

$lang->my->featureBar['contribute']['testcase']['openedbyme'] = 'Creado por mí';

$lang->my->featureBar['contribute']['testtask']['done'] = 'Solicitudes de prueba probadas';

$lang->my->featureBar['contribute']['audit']['reviewedbyme'] = 'Revisados por mí';
$lang->my->featureBar['contribute']['audit']['createdbyme']  = 'Creado por mí';

$lang->my->featureBar['contribute']['doc']['openedbyme'] = 'Creado por mí';
$lang->my->featureBar['contribute']['doc']['editedbyme'] = 'Editado por mí';

$lang->my->featureBar['score']['all'] = 'Mis puntos';

$lang->my->reviewResultList['pass'] = 'Aprobar';
$lang->my->reviewResultList['fail'] = 'Rechazar';

$lang->my->ssh              = 'Explorar claves SSH';
$lang->my->createSSH        = 'Crear clave SSH';
$lang->my->editSSH          = 'Editar clave SSH';
$lang->my->deleteSSH        = 'Eliminar clave SSH';
$lang->my->publicKey        = 'Clave pública';
$lang->my->createdDate      = 'Fecha de creación';
$lang->my->lastUsed         = 'Último uso';
$lang->my->confirmDeleteSSH = '¿Seguro que desea eliminar esta clave SSH?';
$lang->my->sshKeyTip        = 'La clave pública debe comenzar con "ssh-rsa", "ecdsa-sha2-nistp256", "ecdsa-sha2-nistp384", "ecdsa-sha2-nistp521", "ssh-ed25519", "sk-ecdsa-sha2-nistp256@openssh.com" o "sk-ssh-ed25519@openssh.com"';
$lang->my->nameFormat       = 'El nombre solo puede contener letras, números, guiones (-), guiones bajos (_), puntos (.) y signos de dólar ($)';
