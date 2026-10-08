<?php
$lang->entry->common  = 'Aplicación';
$lang->entry->list    = 'Lista de aplicaciones';
$lang->entry->api     = 'API';
$lang->entry->webhook = 'Webhook';
$lang->entry->log     = 'Esfuerzo';
$lang->entry->setting = 'Configuración';

$lang->entry->browse    = 'Ver aplicación';
$lang->entry->create    = 'Agregar aplicación';
$lang->entry->edit      = 'Editar aplicación';
$lang->entry->delete    = 'Eliminar aplicación';
$lang->entry->createKey = 'Regenerar clave';

$lang->entry->id          = 'ID';
$lang->entry->name        = 'Nombre';
$lang->entry->account     = 'Cuenta';
$lang->entry->code        = 'Código';
$lang->entry->freePasswd  = 'Inicio de sesión sin contraseña';
$lang->entry->key         = 'Clave';
$lang->entry->ip          = 'IP';
$lang->entry->desc        = 'Descripción';
$lang->entry->createdBy   = 'Creador';
$lang->entry->createdDate = 'Creado el';
$lang->entry->editedby    = 'Última edición por';
$lang->entry->editedDate  = 'Editado el';
$lang->entry->date        = 'Solicitado el';
$lang->entry->url         = 'URL de la solicitud';
$lang->entry->calledTime  = 'Hora de la llamada';
$lang->entry->deleted     = 'Eliminado';

$lang->entry->confirmDelete = '¿Seguro que desea eliminar esta aplicación?';
$lang->entry->help          = 'Ayuda';
$lang->entry->notify        = 'Notificación';

$lang->entry->helpLink   = 'https://www.zentao.net/book/zentaopmshelp/integration-287.html';
$lang->entry->notifyLink = 'https://www.zentao.net/book/zentaopmshelp/301.html';

$lang->entry->summaryTip = '%s aplicaciones en esta página.';

$lang->entry->note = new stdClass();
$lang->entry->note->name    = 'Nombre de la aplicación autorizada';
$lang->entry->note->code    = 'El código de la aplicación autorizada debe ser alfanumérico.';
$lang->entry->note->ip      = "IP permitidas (sepárelas con comas. Se admiten comodines como 192.168.1.).";
$lang->entry->note->allIP   = 'Sin restricciones';
$lang->entry->note->account = 'Cuenta de la aplicación autorizada';

$lang->entry->freePasswdList[1] = 'Habilitar';
$lang->entry->freePasswdList[0] = 'Deshabilitar';

$lang->entry->errmsg['PARAM_CODE_MISSING']    = 'Falta el parámetro code.';
$lang->entry->errmsg['PARAM_TOKEN_MISSING']   = 'Falta el parámetro token.';
$lang->entry->errmsg['SESSION_CODE_MISSING']  = 'Falta el código de sesión.';
$lang->entry->errmsg['EMPTY_KEY']             = 'No se configuró la clave de la aplicación.';
$lang->entry->errmsg['INVALID_TOKEN']         = 'Token no válido.';
$lang->entry->errmsg['SESSION_VERIFY_FAILED'] = 'Falló la verificación de la sesión.';
$lang->entry->errmsg['IP_DENIED']             = 'Acceso denegado para esta IP.';
$lang->entry->errmsg['ACCOUNT_UNBOUND']       = 'Sin usuario vinculado.';
$lang->entry->errmsg['INVALID_ACCOUNT']       = 'El usuario no existe.';
$lang->entry->errmsg['EMPTY_ENTRY']           = 'La aplicación no existe.';
$lang->entry->errmsg['CALLED_TIME']           = 'El token ha expirado.';
$lang->entry->errmsg['ERROR_TIMESTAMP']       = 'Marca de tiempo no válida.';
