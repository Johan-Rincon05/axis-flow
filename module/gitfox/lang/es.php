<?php
$lang->gitfox->common            = 'GitFox';
$lang->gitfox->browse            = 'Explorar GitFox';
$lang->gitfox->search            = 'Buscar';
$lang->gitfox->create            = 'Crear GitFox';
$lang->gitfox->edit              = 'Editar GitFox';
$lang->gitfox->view              = 'Detalles de GitFox';
$lang->gitfox->bindUser          = 'Configuración de permisos';
$lang->gitfox->webhook           = 'Interfaz: permitir llamada de Webhook';
$lang->gitfox->importIssue       = 'Importar incidencia';
$lang->gitfox->delete            = 'Eliminar GitFox';
$lang->gitfox->confirmDelete     = '¿Desea eliminar este servidor GitFox?';
$lang->gitfox->gitfoxAvatar      = 'Avatar';
$lang->gitfox->gitfoxAccount     = 'Cuenta de GitFox';
$lang->gitfox->gitfoxEmail       = 'Correo electrónico del usuario de GitFox';
$lang->gitfox->zentaoEmail       = 'Correo electrónico del usuario de AXIS FLOW';
$lang->gitfox->zentaoAccount     = 'Cuenta de AXIS FLOW';
$lang->gitfox->accountDesc       = '(Asociar automáticamente usuarios con el mismo correo electrónico)';
$lang->gitfox->bindingStatus     = 'Estado de vinculación';
$lang->gitfox->all               = 'Todos';
$lang->gitfox->notBind           = 'No vinculado';
$lang->gitfox->binded            = 'Vinculado';
$lang->gitfox->bindedError       = 'El usuario vinculado ha sido eliminado o modificado. Vincule nuevamente.';
$lang->gitfox->bindDynamic       = '%s y usuario de AXIS FLOW %s';
$lang->gitfox->serverFail        = 'Falló la conexión con el servidor GitFox, verifique el servidor GitFox.';
$lang->gitfox->lastUpdate        = 'Última actualización';
$lang->gitfox->confirmAddWebhook = '¿Seguro que desea crear el Webhook?';
$lang->gitfox->addWebhookSuccess = 'Webhook creado correctamente';
$lang->gitfox->failCreateWebhook = 'No se pudo crear el Webhook, consulte el registro';
$lang->gitfox->placeholderSearch = 'Ingrese el nombre';

$lang->gitfox->bindStatus['binded']      = $lang->gitfox->binded;
$lang->gitfox->bindStatus['notBind']     = "<span class='text-danger'>{$lang->gitfox->notBind}</span>";
$lang->gitfox->bindStatus['bindedError'] = "<span class='text-danger'>{$lang->gitfox->bindedError}</span>";

$lang->gitfox->browseAction         = 'Lista de GitFox';
$lang->gitfox->deleteAction         = 'Eliminar GitFox';
$lang->gitfox->gitfoxProject        = "Proyecto de GitFox";
$lang->gitfox->browseProject        = "Lista de proyectos de GitFox";
$lang->gitfox->browseUser           = "Usuario";
$lang->gitfox->browseGroup          = "Lista de grupos de GitFox";
$lang->gitfox->browseBranch         = "Lista de ramas de GitFox";
$lang->gitfox->browseTag            = "Lista de etiquetas de GitFox";
$lang->gitfox->browseTagPriv        = "Etiqueta protegida";
$lang->gitfox->gitfoxIssue          = "Incidencia de GitFox";
$lang->gitfox->zentaoProduct        = 'Producto de AXIS FLOW';
$lang->gitfox->objectType           = 'Tipo'; // task, bug, story
$lang->gitfox->manageProjectMembers = 'Administrar miembro del proyecto';
$lang->gitfox->createProject        = 'Crear proyecto GitFox';
$lang->gitfox->editProject          = 'Editar proyecto GitFox';
$lang->gitfox->deleteProject        = 'Eliminar proyecto GitFox';
$lang->gitfox->createGroup          = 'Crear grupo';
$lang->gitfox->editGroup            = 'Editar grupo';
$lang->gitfox->deleteGroup          = 'Eliminar grupo';
$lang->gitfox->createUser           = 'Crear usuario';
$lang->gitfox->editUser             = 'Editar usuario';
$lang->gitfox->deleteUser           = 'Eliminar usuario';
$lang->gitfox->createBranch         = 'Agregar rama';
$lang->gitfox->manageGroupMembers   = 'Administrar miembro del grupo';
$lang->gitfox->createWebhook        = 'Crear Webhook';
$lang->gitfox->browseBranchPriv     = 'Proteger rama';
$lang->gitfox->createTag            = 'Crear etiqueta';
$lang->gitfox->deleteTag            = 'Eliminar etiqueta';
$lang->gitfox->deleteTagFail        = 'Error al eliminar la etiqueta';
$lang->gitfox->saveFailed           = 'Falló el guardado de 『%s』';

$lang->gitfox->id             = 'ID';
$lang->gitfox->name           = "Nombre del servidor";
$lang->gitfox->url            = 'URL del servidor';
$lang->gitfox->token          = 'Token';
$lang->gitfox->defaultProject = 'Proyecto predeterminado';
$lang->gitfox->private        = 'Verificación MD5';

$lang->gitfox->server        = "Lista de servidores";
$lang->gitfox->lblCreate     = 'Crear servidor GitFox';
$lang->gitfox->desc          = 'Descripción';
$lang->gitfox->tokenFirst    = 'Cuando el Token no está vacío, se usará primero el Token';
$lang->gitfox->tips          = 'Si usa una contraseña, desactive la opción "Prevenir falsificación de solicitudes entre sitios" en la configuración global de seguridad de GitFox.';
$lang->gitfox->emptyError    = " no puede estar vacío";
$lang->gitfox->createSuccess = "Creado correctamente";
$lang->gitfox->mustBindUser  = 'No ha registrado la cuenta de GitFox; comuníquese con el administrador para registrarla.';
$lang->gitfox->noAccess      = 'Permiso denegado';
$lang->gitfox->notCompatible = 'La versión actual de GitFox no es compatible con ZenTao, actualice la versión de GitFox e inténtelo de nuevo';
$lang->gitfox->deleted       = 'Eliminado';

$lang->gitfox->placeholder = new stdclass;
$lang->gitfox->placeholder->name        = '';
$lang->gitfox->placeholder->url         = "Ingrese la dirección de acceso de la página principal del servidor GitFox, por ejemplo: https://gitfox.zentao.net.";
$lang->gitfox->placeholder->token       = "Ingrese el token de acceso de una cuenta con privilegios de root.";
$lang->gitfox->placeholder->projectPath = "Solo debe contener letras, dígitos, guion bajo, guion y punto. No debe comenzar con guion ni terminar en .git o .atom.";

$lang->gitfox->noImportableIssues = "Actualmente no hay incidencias disponibles para importar.";
$lang->gitfox->tokenError         = "El token actual no tiene permisos de root.";
$lang->gitfox->tokenLimit         = "El token actual no tiene privilegios de administrador. Genere uno nuevo con el usuario root en GitFox.";
$lang->gitfox->hostError          = "Por lo tanto, la dirección actual del servidor GitFox no es válida o la versión actual de GitFox no es compatible con ZenTao. Confirme que se puede acceder al servidor actual o comuníquese con el administrador para actualizar GitFox a la versión %s o superior e inténtelo de nuevo.";
$lang->gitfox->bindUserError      = "No se pueden vincular usuarios repetidamente %s";
$lang->gitfox->importIssueError   = "No se ha seleccionado la ejecución a la que pertenece esta incidencia.";
$lang->gitfox->importIssueWarn    = "Hubo un problema en la importación, puede intentar importar de nuevo.";

$lang->gitfox->accessLevels[10] = 'Invitado';
$lang->gitfox->accessLevels[20] = 'Reportante';
$lang->gitfox->accessLevels[30] = 'Desarrollador';
$lang->gitfox->accessLevels[40] = 'Mantenedor';
$lang->gitfox->accessLevels[50] = 'Responsable';

$lang->gitfox->apiError[0]  = 'interno no está permitido en un grupo privado.';
$lang->gitfox->apiError[1]  = 'público no está permitido en un grupo privado.';
$lang->gitfox->apiError[2]  = 'es demasiado corto (el mínimo es de 8 caracteres)';
$lang->gitfox->apiError[3]  = "solo puede contener letras, dígitos, '_', '-' y '.'. No puede comenzar con '-', terminar en '.git' ni terminar en '.atom'";
$lang->gitfox->apiError[4]  = 'La rama ya existe';
$lang->gitfox->apiError[5]  = 'No se pudo guardar el grupo {:path=>["has already been taken"]}';
$lang->gitfox->apiError[6]  = 'No se pudo guardar el grupo {:path=>["已经被使用"]}';
$lang->gitfox->apiError[7]  = '403 Forbidden';
$lang->gitfox->apiError[8]  = 'no es válido';
$lang->gitfox->apiError[9]  = 'admin es un nombre reservado';
$lang->gitfox->apiError[10] = 'ya está en uso';
$lang->gitfox->apiError[11] = 'Falta el archivo de configuración de CI';

$lang->gitfox->errorLang[0]  = 'No se puede establecer Interno como nivel de visibilidad si es privado en GitFox.';
$lang->gitfox->errorLang[1]  = 'No se puede establecer Público como nivel de visibilidad si es privado en GitFox.';
$lang->gitfox->errorLang[2]  = 'La contraseña es demasiado corta (mínimo 8 caracteres)';
$lang->gitfox->errorLang[3]  = 'Solo debe contener letras, dígitos, guion bajo, guion y punto. No debe comenzar con guion ni terminar en .git o .atom.';
$lang->gitfox->errorLang[4]  = 'La rama ya existe.';
$lang->gitfox->errorLang[5]  = 'No se pudo guardar el grupo, la ruta ya está en uso.';
$lang->gitfox->errorLang[6]  = 'No se pudo guardar el grupo, la ruta ya está en uso.';
$lang->gitfox->errorLang[7]  = $lang->gitfox->noAccess;
$lang->gitfox->errorLang[8]  = "No es válido";
$lang->gitfox->errorLang[9]  = 'admin es un nombre reservado';
$lang->gitfox->errorLang[10] = 'ya está en uso';
$lang->gitfox->errorLang[11] = 'Falta el archivo de configuración de CI';

$lang->gitfox->errorResonse['Email has already been taken']    = 'El correo electrónico ya está en uso';
$lang->gitfox->errorResonse['Username has already been taken'] = 'El nombre de usuario ya está en uso';

$lang->gitfox->featureBar['binduser']['all']     = $lang->gitfox->all;
$lang->gitfox->featureBar['binduser']['notBind'] = $lang->gitfox->notBind;
$lang->gitfox->featureBar['binduser']['binded']  = $lang->gitfox->binded;

$lang->gitfox->devopsIntroduction = 'Solución DevOps de AXIS FLOW: refactorización integral, liderando el futuro';
$lang->gitfox->devopsDescription  = <<<EOD
<p class="leading-relaxed mb-2">
  The underlying capabilities of DevOps 4.0 are powered by the GitFox engine. GitFox is a fully self-developed Git source code management platform focused on enterprise R&D collaboration. It delivers one-stop capabilities spanning code hosting, pipeline building, quality scanning and artifact management, designed to enable efficient CI/CD for enterprises.
</p>
EOD;

$lang->gitfox->installGitFox     = 'Instalar GitFox';
$lang->gitfox->installGitFoxTip  = 'Antes de usar AXIS FLOW DevOps, es necesario instalar GitFox. Ejecute el siguiente script de instalación en el equipo host para completar la configuración. Cuando el script termine de ejecutarse, haga clic en "Instalación completada".';
$lang->gitfox->checkInstall      = 'He completado los pasos de instalación anteriores';
$lang->gitfox->execScript        = 'Ejecutar script de instalación';
$lang->gitfox->copySuccess       = 'Copiado correctamente';
$lang->gitfox->copyFail          = 'El navegador no admite la función de copiar, copie manualmente';
$lang->gitfox->startUse          = 'Comenzar a usar';
$lang->gitfox->completedInstall  = 'Instalación completada';
$lang->gitfox->InstallScript     = 'Script de instalación';
$lang->gitfox->upgradeGitFox     = 'Actualizar GitFox';
$lang->gitfox->upgradeGitFoxTip  = 'La versión del motor GitFox instalada actualmente (%s) es inferior a la versión mínima (%s) requerida por ZenTao DevOps. Ejecute el siguiente script de actualización en la máquina host para actualizar GitFox.';
$lang->gitfox->completedUpgrade  = 'Actualización completada';
$lang->gitfox->laterUpgrade      = 'Actualizar más tarde';
$lang->gitfox->UpgradeScript     = 'Script de actualización';
$lang->gitfox->upgradeGitFoxFail = 'La actualización de GitFox no está completa. Ejecute primero el script de actualización en la máquina host y luego haga clic en "Actualización completada".';

global $config;
if($config->inContainer)
{
    $lang->gitfox->upgradeGitFoxTip  = 'La versión del motor GitFox instalada actualmente (%s) es inferior a la versión mínima (%s) requerida por ZenTao DevOps. Ejecute el siguiente script de actualización dentro del contenedor para actualizar GitFox.';
    $lang->gitfox->upgradeGitFoxFail = 'La actualización de GitFox no está completa. Ejecute primero el script de actualización dentro del contenedor y luego haga clic en "Actualización completada".';
}
