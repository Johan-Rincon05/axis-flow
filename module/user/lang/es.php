<?php
/**
 * The user module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     user
 * @version     $Id: en.php 5053 2013-07-06 08:17:37Z wyd621@gmail.com $
 * @link        https://www.zentao.net
 */
$lang->user->common           = 'Usuario';
$lang->user->id               = 'ID';
$lang->user->inside           = 'Usuarios internos';
$lang->user->outside          = 'Usuarios externos';
$lang->user->company          = 'Empresa';
$lang->user->dept             = 'Departamento';
$lang->user->account          = 'Cuenta';
$lang->user->password         = 'Contraseña';
$lang->user->passwordfield    = 'Contraseña';
$lang->user->password1        = 'Contraseña';
$lang->user->password2        = 'Confirmar contraseña';
$lang->user->role             = 'Rol';
$lang->user->group            = 'Grupo de permisos';
$lang->user->realname         = 'Nombre';
$lang->user->nickname         = 'Apodo';
$lang->user->commiter         = 'Cuenta SVN / GIT';
$lang->user->birthyear        = 'DOB';
$lang->user->gender           = 'Género';
$lang->user->email            = 'Correo electrónico';
$lang->user->basicInfo        = 'Información básica';
$lang->user->accountInfo      = 'Información de la cuenta';
$lang->user->verify           = 'Verificación';
$lang->user->contactInfo      = 'Información de contacto';
$lang->user->skype            = 'Skype';
$lang->user->qq               = 'QQ';
$lang->user->mobile           = 'Móvil';
$lang->user->phone            = 'Teléfono';
$lang->user->weixin           = 'WeChat';
$lang->user->dingding         = 'DingTalk';
$lang->user->slack            = 'Slack';
$lang->user->whatsapp         = 'WhatsApp';
$lang->user->address          = 'Dirección postal';
$lang->user->zipcode          = 'Código postal';
$lang->user->join             = 'Fecha de ingreso';
$lang->user->priv             = 'Permiso';
$lang->user->visits           = 'Número de visitas';
$lang->user->visions          = 'Tipo de interfaz';
$lang->user->ip               = 'Última IP';
$lang->user->last             = 'Último inicio de sesión';
$lang->user->ranzhi           = 'Cuenta de Zdoo';
$lang->user->ditto            = 'Ídem';
$lang->user->originalPassword = 'Contraseña actual';
$lang->user->newPassword      = 'Nueva contraseña';
$lang->user->verifyPassword   = 'Contraseña';
$lang->user->forgetPassword   = 'Olvidé mi contraseña';
$lang->user->score            = 'Puntos';
$lang->user->name             = 'Nombre';
$lang->user->type             = 'Tipo de usuario';
$lang->user->cropAvatar       = 'Recortar avatar';
$lang->user->cropAvatarTip    = 'Arrastre el marco para seleccionar el área de recorte.';
$lang->user->cropImageTip     = 'La imagen seleccionada es demasiado pequeña. El tamaño mínimo recomendado es 48x48. Tamaño actual: %s.';
$lang->user->captcha          = 'Captcha';
$lang->user->avatar           = 'Avatar';
$lang->user->birthday         = 'DOB';
$lang->user->nature           = 'Rasgos de personalidad';
$lang->user->analysis         = 'Análisis de impacto';
$lang->user->strategy         = 'Estrategia de respuesta';
$lang->user->fails            = 'Intentos fallidos';
$lang->user->locked           = 'Fecha de bloqueo';
$lang->user->scoreLevel       = 'Nivel de puntos';
$lang->user->clientStatus     = 'Estado de inicio de sesión';
$lang->user->clientLang       = 'Idioma del cliente';
$lang->user->programs         = 'Programa';
$lang->user->products         = $lang->productCommon;
$lang->user->projects         = $lang->projectCommon;
$lang->user->sprints          = $lang->execution->common;
$lang->user->identity         = 'Identidad';
$lang->user->switchVision     = 'Cambiar a %s';
$lang->user->submit           = 'Enviar';
$lang->user->resetPWD         = 'Restablecer contraseña';
$lang->user->resetPwdByAdmin  = 'Restablecer contraseña por el administrador';
$lang->user->resetPwdByMail   = 'Restablecer contraseña por correo';

$lang->user->abbr = new stdclass();
$lang->user->abbr->id        = 'No.';
$lang->user->abbr->password2 = 'Confirmar contraseña';
$lang->user->abbr->address   = 'Dirección';
$lang->user->abbr->join      = 'Fecha de ingreso';

$lang->user->legendBasic        = 'Información básica';
$lang->user->legendContribution = 'Contribución';

$lang->user->index         = "Panel de usuario";
$lang->user->view          = "Detalles del usuario";
$lang->user->create        = "Agregar usuario";
$lang->user->batchCreate   = "Agregar usuarios por lote";
$lang->user->edit          = "Editar usuario";
$lang->user->batchEdit     = "Editar usuarios por lote";
$lang->user->unlock        = "Desbloquear usuario";
$lang->user->delete        = "Eliminar usuario";
$lang->user->unbind        = "Desvincular ZDO0";
$lang->user->login         = "Inicio de sesión";
$lang->user->bind          = "Vincular cuenta existente";
$lang->user->oauthRegister = "Registrar nueva cuenta";
$lang->user->mobileLogin   = "Acceso móvil";
$lang->user->editProfile   = "Editar perfil";
$lang->user->deny          = "Se denegó su acceso.";
$lang->user->confirmDelete = "¿Seguro que desea eliminar este usuario?";
$lang->user->confirmUnlock = "¿Seguro que desea desbloquear a este usuario?";
$lang->user->confirmUnbind = "¿Seguro que desea desvincular a este usuario de Zdoo?";
$lang->user->relogin       = "Iniciar sesión de nuevo";
$lang->user->asGuest       = "Acceso de invitado";
$lang->user->goback        = "Volver a la página anterior";
$lang->user->deleted       = '(Eliminado)';
$lang->user->search        = 'Buscar';
$lang->user->else          = 'Otros';

$lang->user->saveTemplate          = 'Guardar como plantilla';
$lang->user->setPublic             = 'Establecer como plantilla pública';
$lang->user->deleteTemplate        = 'Eliminar plantilla';
$lang->user->setTemplateTitle      = 'Ingrese el título de la plantilla.';
$lang->user->applyTemplate         = 'Aplicar plantilla';
$lang->user->confirmDeleteTemplate = '¿Seguro que desea eliminar esta plantilla?';
$lang->user->setPublicTemplate     = 'Establecer como plantilla pública';
$lang->user->tplContentNotEmpty    = 'El contenido de la plantilla no puede estar vacío.';
$lang->user->sendEmailSuccess      = 'Se envió un correo electrónico a su bandeja de entrada. Revíselo.';
$lang->user->linkExpired           = 'El enlace ha expirado. Solicite uno nuevo.';

$lang->user->profile   = 'Perfil';
$lang->user->project   = $lang->executionCommon . 's';
$lang->user->execution = $lang->execution->common;
$lang->user->task      = 'Tareas';
$lang->user->bug       = 'Bugs';
$lang->user->test      = 'Prueba';
$lang->user->testTask  = 'Solicitudes de prueba';
$lang->user->testCase  = 'Casos de prueba';
$lang->user->issue     = 'Incidencia';
$lang->user->risk      = 'Riesgo';
$lang->user->schedule  = 'Cronograma';
$lang->user->todo      = 'Pendiente';
$lang->user->story     = 'Historias';
$lang->user->dynamic   = 'Recientes';

$lang->user->openedBy    = 'Creado por %s';
$lang->user->assignedTo  = 'Asignado a %s';
$lang->user->finishedBy  = 'Completado por %s';
$lang->user->involved    = '%s involucrado(s)';
$lang->user->resolvedBy  = 'Corregido por %s';
$lang->user->closedBy    = 'Cerrado por %s';
$lang->user->reviewedBy  = 'Revisado por %s';
$lang->user->canceledBy  = 'Cancelado por %s';

$lang->user->testTask2Him = 'Administrado por %s';
$lang->user->case2Him     = 'Asignado a %s';
$lang->user->caseByHim    = 'Creado por %s';

$lang->user->errorDeny    = "Lo sentimos, no tiene permiso para acceder a la función [<b>%s</b>] del módulo 『<b>%s</b>」. Comuníquese con su administrador para obtener ayuda. Puede volver al panel o iniciar sesión de nuevo.";
$lang->user->errorView    = "Lo sentimos, no tiene permiso para acceder a la vista [<b>%s</b>]. Comuníquese con su administrador para obtener ayuda. Puede volver al panel o iniciar sesión de nuevo.";
$lang->user->loginFailed  = "Error al iniciar sesión. Verifique que su cuenta y contraseña sean correctas.";
$lang->user->lockWarning  = "Le quedan %s intentos.";
$lang->user->loginLocked  = "Demasiados intentos fallidos de inicio de sesión. Comuníquese con su administrador para desbloquear su cuenta o intente de nuevo en %s minutos.";
$lang->user->weakPassword = "La seguridad de su contraseña no cumple los requisitos del sistema.";
$lang->user->errorWeak    = "No se pueden usar contraseñas débiles comunes como [%s].";
$lang->user->errorCaptcha = "Captcha incorrecto.";
$lang->user->loginExpired = 'Su sesión ha expirado. Inicie sesión nuevamente.';

$lang->user->roleList['']       = '';
$lang->user->roleList['dev']    = 'Ingeniero de desarrollo';
$lang->user->roleList['qa']     = 'Ingeniero de pruebas';
$lang->user->roleList['pm']     = 'Gerente del proyecto';
$lang->user->roleList['po']     = 'Product Owner';
$lang->user->roleList['td']     = 'Gerente técnico';
$lang->user->roleList['pd']     = 'Gerente de producto';
$lang->user->roleList['qd']     = 'Gerente de pruebas';
$lang->user->roleList['top']    = 'Gerente sénior';
$lang->user->roleList['others'] = 'Otros';

$lang->user->genderList['m'] = 'Masculino';
$lang->user->genderList['f'] = 'Femenino';

$lang->user->thirdPerson['m'] = 'Él';
$lang->user->thirdPerson['f'] = 'Ella';

$lang->user->typeList['inside']  = $lang->user->inside;
$lang->user->typeList['outside'] = $lang->user->outside;

$lang->user->passwordStrengthList[0] = "<span style='color:red'>Débil</span>";
$lang->user->passwordStrengthList[1] = "<span style='color:#000'>Media</span>";
$lang->user->passwordStrengthList[2] = "<span style='color:green'>Fuerte</span>";

$lang->user->statusList['active'] = 'Normal';
$lang->user->statusList['delete'] = 'Eliminado';

$lang->user->personalData['createdTodos']        = 'Pendientes creados';
$lang->user->personalData['createdRequirements'] = "Funcionalidades creadas";
$lang->user->personalData['createdStories']      = "Historias creadas";
$lang->user->personalData['finishedTasks']       = 'Tareas completadas';
$lang->user->personalData['createdBugs']         = 'Bugs reportados';
$lang->user->personalData['resolvedBugs']        = 'Bugs corregidos';
$lang->user->personalData['createdCases']        = 'Casos de prueba creados';
$lang->user->personalData['createdRisks']        = 'Riesgos creados';
$lang->user->personalData['resolvedRisks']       = 'Riesgos resueltos';
$lang->user->personalData['createdIssues']       = 'Incidencias creadas';
$lang->user->personalData['resolvedIssues']      = 'Incidencias resueltas';
$lang->user->personalData['createdDocs']         = 'Documentos creados';

$lang->user->keepLogin['on']   = 'Mantener mi sesión iniciada';
$lang->user->loginWithDemoUser = 'Iniciar sesión con cuenta de demostración:';
$lang->user->scanToLogin       = 'Escanee el código QR para iniciar sesión';

$lang->user->tpl = new stdclass();
$lang->user->tpl->type    = 'Tipo';
$lang->user->tpl->title   = 'Nombre de la plantilla';
$lang->user->tpl->content = 'Contenido';
$lang->user->tpl->public  = 'Público';

$lang->usertpl = new stdclass();
$lang->usertpl->account = 'Creador';
$lang->usertpl->type    = 'Tipo de plantilla';
$lang->usertpl->title   = 'Nombre de la plantilla';
$lang->usertpl->content = 'Contenido de la plantilla';
$lang->usertpl->public  = 'Plantilla pública';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->account   = 'Una combinación de letras, números y guiones bajos; al menos 3 caracteres.';
$lang->user->placeholder->password1 = 'Al menos 6 caracteres.';
$lang->user->placeholder->role      = "El cargo afecta el orden de clasificación del contenido y de las listas de usuarios.";
$lang->user->placeholder->group     = "El grupo determina los permisos del usuario.";
$lang->user->placeholder->commiter  = 'Cuenta SVN / Git.';
$lang->user->placeholder->verify    = 'Ingrese la contraseña de inicio de sesión del sistema.';

$lang->user->placeholder->loginPassword = 'Ingrese su contraseña.';
$lang->user->placeholder->loginAccount  = 'Ingrese su cuenta.';
$lang->user->placeholder->loginUrl      = 'Ingrese la URL de su sitio AXIS FLOW.';
$lang->user->placeholder->email         = 'Ingrese su correo electrónico.';

$lang->user->placeholder->passwordStrength[0] = 'La contraseña debe tener al menos 6 caracteres.';
$lang->user->placeholder->passwordStrength[1] = '≥6 caracteres:  A-Z, a-z y 0-9.';
$lang->user->placeholder->passwordStrength[2] = '≥10 caracteres: A-Z, a-z, 0-9 y símbolos.';

$lang->user->placeholder->passwordStrengthCheck[0] = 'La contraseña debe tener al menos 6 caracteres.';
$lang->user->placeholder->passwordStrengthCheck[1] = 'La contraseña debe tener al menos 6 caracteres, con mayúsculas, minúsculas y números.';
$lang->user->placeholder->passwordStrengthCheck[2] = 'La contraseña debe tener al menos 10 caracteres, con mayúsculas, minúsculas, números y símbolos especiales.';

$lang->user->error = new stdclass();
$lang->user->error->account        = 'El nombre de la cuenta debe ser una combinación de letras, números o guiones bajos (al menos 3 caracteres).';
$lang->user->error->accountDupl    = 'El nombre de la cuenta ya existe.';
$lang->user->error->realname       = 'El nombre real es obligatorio.';
$lang->user->error->visions        = 'El tipo de interfaz es obligatorio.';
$lang->user->error->password       = 'La contraseña debe tener al menos 6 caracteres.';
$lang->user->error->mail           = 'Correo electrónico no válido.';
$lang->user->error->reserved       = 'El nombre de cuenta está reservado por el sistema.';
$lang->user->error->weakPassword   = 'La seguridad de la contraseña no cumple los requisitos del sistema.';
$lang->user->error->dangerPassword = "No se pueden usar contraseñas débiles comunes como [%s].";

$lang->user->error->url              = "URL no válida. Comuníquese con el administrador.";
$lang->user->error->verify           = "Cuenta o contraseña incorrecta.";
$lang->user->error->verifyPassword   = "Falló la verificación. Revise si la contraseña de inicio de sesión de su sistema es correcta.";
$lang->user->error->originalPassword = "Contraseña actual incorrecta.";
$lang->user->error->companyEmpty     = "El nombre de la empresa no puede estar vacío.";
$lang->user->error->noAccess         = "Este usuario no pertenece a su mismo departamento. No tiene permiso para acceder a su información de trabajo.";
$lang->user->error->accountEmpty     = 'La cuenta no puede estar vacía.';
$lang->user->error->emailEmpty       = 'El correo electrónico no puede estar vacío.';
$lang->user->error->noUser           = 'El usuario no existe.';
$lang->user->error->noEmail          = 'Este usuario no tiene un correo electrónico vinculado. Comuníquese con el administrador para restablecer la contraseña.';
$lang->user->error->errorEmail       = 'La cuenta y el correo electrónico no coinciden. Inténtelo de nuevo.';
$lang->user->error->emailSetting     = 'El correo del sistema no está configurado. Comuníquese con el administrador para restablecerla.';
$lang->user->error->sendMailFail     = 'No se pudo enviar el correo. Inténtelo de nuevo.';
$lang->user->error->loginTimeoutTip  = 'El inicio de sesión del sistema falló. Verifique que el servicio proxy funcione correctamente.';
$lang->user->error->uploadAvatar     = 'No se pudo cargar el avatar. Cargue una imagen en formato %s.';

$lang->user->contactFieldList['phone']    = $lang->user->phone;
$lang->user->contactFieldList['mobile']   = $lang->user->mobile;
$lang->user->contactFieldList['qq']       = $lang->user->qq;
$lang->user->contactFieldList['dingding'] = $lang->user->dingding;
$lang->user->contactFieldList['weixin']   = $lang->user->weixin;
$lang->user->contactFieldList['skype']    = $lang->user->skype;
$lang->user->contactFieldList['slack']    = $lang->user->slack;
$lang->user->contactFieldList['whatsapp'] = $lang->user->whatsapp;

$lang->user->executionTypeList['stage']  = 'Fase';
$lang->user->executionTypeList['sprint'] = $lang->iterationCommon;

$lang->user->contacts = new stdclass();
$lang->user->contacts->common   = 'Contactos';
$lang->user->contacts->listName = 'Nombre de la lista';
$lang->user->contacts->userList = 'Lista de usuarios';

$lang->usercontact = new stdclass;
$lang->usercontact->account  = 'Creador';
$lang->usercontact->listName = 'Nombre de la lista';
$lang->usercontact->userList = 'Lista de usuarios';
$lang->usercontact->public   = 'Contactos públicos';

$lang->user->contacts->manage        = 'Administrar listas';
$lang->user->contacts->contactsList  = 'Listas existentes';
$lang->user->contacts->selectedUsers = 'Seleccionar usuarios';
$lang->user->contacts->selectList    = 'Seleccionar listas';
$lang->user->contacts->createList    = 'Crear contactos';
$lang->user->contacts->noListYet     = 'Aún no se han creado listas. Cree primero una lista de contactos.';
$lang->user->contacts->confirmDelete = '¿Seguro que desea eliminar esta lista?';
$lang->user->contacts->or            = ' or ';

$lang->user->resetFail        = "No se pudo restablecer la contraseña. Verifique si la cuenta existe.";
$lang->user->resetSuccess     = "La contraseña se restableció correctamente. Inicie sesión con su nueva contraseña.";
$lang->user->noticeDelete     = '¿Seguro que desea eliminar "%s" del sistema?';
$lang->user->noticeHasDeleted = "Este usuario fue eliminado. Para ver sus detalles, restáurelo primero desde la papelera de reciclaje.";
$lang->user->noticeResetFile  = "<h5>Usuarios estándar: comuníquese con su administrador para restablecer su contraseña.</h5>
<h5>Administradores: inicie sesión en el servidor donde está alojado ZenTao y cree el archivo <span>%s </span>. </h5>
<p>Nota:</p>
<ol>
<li>El contenido del archivo debe estar vacío.</li>
<li>Si el archivo ya existe, elimínelo y cree uno nuevo.</li>
</ol>";
$lang->user->notice4Safe = "Advertencia: se detectó una contraseña débil en el paquete de instalación con un clic.";
$lang->user->process4DIR = "Parece que está usando un entorno de instalación con un clic donde otros sitios aún usan contraseñas débiles. Por seguridad, si no usa esos otros sitios, resuélvalo de inmediato eliminando o renombrando el directorio %s.";
$lang->user->process4DB  = "Parece que está usando un entorno de instalación con un clic donde otros sitios aún usan contraseñas débiles. Por seguridad, si no usa esos otros sitios, resuélvalo de inmediato. Inicie sesión en la base de datos y modifique el campo 'password' de la tabla 'zt_user' de la base de datos %s.";
$lang->user->mkdirWin = <<<EOT
<html><head><meta charset="utf-8"></head>
<body><table align="center" style="width:700px; margin-top:100px; border:1px solid gray; font-size:14px;"><tr><td style="padding:8px">
<div style="margin-bottom:8px;"> No se pudo crear el directorio temporal. Verifique que el directorio <strong style="color:#ed980f">%s</strong> exista y tenga los permisos necesarios.</div>
<div>No se puede crear el directorio tmp; asegúrese de que el directorio <strong style="color:#ed980f">%s</strong> exista y tenga permiso para operar.</div>
</td></tr></table></body></html>
EOT;
$lang->user->mkdirLinux = <<<EOT
<html><head><meta charset="utf-8"></head>
<body><table align="center" style="width:700px; margin-top:100px; border:1px solid gray; font-size:14px;"><tr><td style="padding:8px">
<div style="margin-bottom:8px;"> No se pudo crear el directorio temporal. Verifique que el directorio <strong style="color:#ed980f">%s</strong> exista y tenga los permisos necesarios.</div>
<div style="margin-bottom:8px;">Comando: <strong style="color:#ed980f">chmod 777 -R %s</strong>。</div>
<div>No se puede crear el directorio tmp; asegúrese de que el directorio <strong style="color:#ed980f">%s</strong> exista y tenga permiso para operar.</div>
<div style="margin-bottom:8px;">Comando: <strong style="color:#ed980f">chmod 777 -R %s</strong>.</div>
</td></tr></table></body></html>
EOT;

$lang->user->jumping = "Será redirigido automáticamente a la página de inicio de sesión en  <span id='time'>10</span> segundos. <a href='%s' id='redirect' class='btn primary'>Redirigir ahora</a>";

$lang->user->zentaoapp = new stdclass();
$lang->user->zentaoapp->logout = 'Cerrar sesión';

$lang->user->featureBar['todo']['all']             = 'Asignado a mí';
$lang->user->featureBar['todo']['before']          = 'Sin finalizar';
$lang->user->featureBar['todo']['future']          = 'TBD';
$lang->user->featureBar['todo']['thisWeek']        = 'Esta semana';
$lang->user->featureBar['todo']['thisMonth']       = 'Este mes';
$lang->user->featureBar['todo']['thisYear']        = 'Este año';
$lang->user->featureBar['todo']['assignedToOther'] = 'Asignado a otros';
$lang->user->featureBar['todo']['cycle']           = 'Recurrente';

$lang->user->featureBar['dynamic']['all']       = 'Todos';
$lang->user->featureBar['dynamic']['today']     = 'Hoy';
$lang->user->featureBar['dynamic']['yesterday'] = 'Ayer';
$lang->user->featureBar['dynamic']['thisWeek']  = 'Esta semana';
$lang->user->featureBar['dynamic']['lastWeek']  = 'Semana pasada';
$lang->user->featureBar['dynamic']['thisMonth'] = 'Este mes';
$lang->user->featureBar['dynamic']['lastMonth'] = 'Mes pasado';
