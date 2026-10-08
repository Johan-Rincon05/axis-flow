<?php
$lang->mail->index         = 'Página de inicio del correo';
$lang->mail->detect        = 'Detectar';
$lang->mail->detectAction  = 'Detectar por correo electrónico';
$lang->mail->edit          = 'Editar configuración';
$lang->mail->save          = 'Guardar';
$lang->mail->saveAction    = 'Guardar configuración';
$lang->mail->test          = 'Enviar correo de prueba';
$lang->mail->reset         = 'Restablecer';
$lang->mail->resetAction   = 'Restablecer configuración';
$lang->mail->resend        = 'Reenviar';
$lang->mail->resendAction  = 'Reenviar correo';
$lang->mail->browse        = 'Lista de correos';
$lang->mail->delete        = 'Eliminar correo';
$lang->mail->ztCloud       = 'ZenTao Cloud Mail';
$lang->mail->gmail         = 'Gmail';
$lang->mail->sendCloud     = 'Aviso SendCloud';
$lang->mail->batchDelete   = 'Eliminar por lote';
$lang->mail->sendcloudUser = 'Sincronizar contactos';
$lang->mail->agreeLicense  = 'Sí';
$lang->mail->disagree      = 'No';

$lang->mail->turnon      = 'Notificación por correo electrónico';
$lang->mail->async       = 'Envío asíncrono';
$lang->mail->fromAddress = 'Correo del remitente';
$lang->mail->fromName    = 'Nombre del remitente';
$lang->mail->domain      = 'Dominio de AXIS FLOW';
$lang->mail->host        = 'Servidor SMTP';
$lang->mail->port        = 'Puerto SMTP';
$lang->mail->auth        = 'Autenticación';
$lang->mail->username    = 'Cuenta SMTP';
$lang->mail->password    = 'Contraseña SMTP';
$lang->mail->secure      = 'Cifrado';
$lang->mail->debug       = 'Nivel de depuración';
$lang->mail->charset     = 'Codificación';
$lang->mail->accessKey   = 'Clave de acceso';
$lang->mail->secretKey   = 'Clave secreta';
$lang->mail->license     = 'Notas importantes sobre ZenTao Cloud Mail';

$lang->mail->selectMTA = 'Seleccione el método de correo saliente: ';
$lang->mail->smtp      = 'SMTP';

$lang->mail->syncedUser = 'Sincronizado';
$lang->mail->unsyncUser = 'No sincronizado';
$lang->mail->sync       = 'Sincronizar';
$lang->mail->remove     = 'Quitar';

$lang->mail->toList      = 'Destinatario';
$lang->mail->ccList      = 'CC';
$lang->mail->subject     = 'Asunto';
$lang->mail->createdBy   = 'Remitente';
$lang->mail->createdDate = 'Creado el';
$lang->mail->sendTime    = 'Enviado a las';
$lang->mail->status      = 'Estado';
$lang->mail->failReason  = 'Motivo del fallo';

$lang->mail->statusList['wait']    = 'Pendiente';
$lang->mail->statusList['sending'] = 'Enviando';
$lang->mail->statusList['sended']  = 'Enviado';
$lang->mail->statusList['fail']    = 'Fallido';

$lang->mail->turnonList[1]  = 'Activado';
$lang->mail->turnonList[0] = 'Desactivado';

$lang->mail->asyncList[1] = 'Sí';
$lang->mail->asyncList[0] = 'No';

$lang->mail->debugList[0] = 'Desactivado';
$lang->mail->debugList[1] = 'Media';
$lang->mail->debugList[2] = 'Alta';

$lang->mail->authList[1]  = 'Sí';
$lang->mail->authList[0] = 'No';

$lang->mail->secureList['0']   = 'Desactivado';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->more           = 'Más';
$lang->mail->noticeResend   = 'Correo enviado correctamente.';
$lang->mail->inputFromEmail = 'Ingrese el correo del remitente: ';
$lang->mail->nextStep       = 'Siguiente';
$lang->mail->successSaved   = 'Configuración de correo guardada correctamente.';
$lang->mail->setForUser     = 'No se encontraron direcciones de correo de usuario válidas. No se puede enviar el correo de prueba. Configure primero las direcciones de correo de los usuarios.';
$lang->mail->testSubject    = 'Correo de prueba';
$lang->mail->testContent    = 'Configuración de correo guardada.';
$lang->mail->successSended  = '¡Enviado correctamente!';
$lang->mail->confirmDelete  = '¿Seguro que desea eliminar el correo electrónico?';
$lang->mail->sendmailTips   = 'El remitente del correo no recibirá este mensaje.';
$lang->mail->needConfigure  = 'No se encontró la configuración de correo. Configure primero los ajustes de correo saliente.';
$lang->mail->connectFail    = 'No se puede conectar al sitio web de AXIS FLOW.';
$lang->mail->centifyFail    = 'Falló la verificación. Es posible que la clave haya cambiado. Vuelva a conectarse.';
$lang->mail->nofsocket      = 'Las funciones fsocket están deshabilitadas; no se puede enviar el correo. Establezca allow_url_fopen en On en php.ini, habilite la extensión OpenSSL y reinicie Apache.';
$lang->mail->noOpenssl      = 'Para usar cifrado SSL o TLS, habilite la extensión OpenSSL. Guarde los cambios y reinicie Apache.';
$lang->mail->disableSecure  = 'Falta la extensión OpenSSL. Cifrado SSL/TLS deshabilitado.';
$lang->mail->sendCloudFail  = 'Fallido. Motivo:';
$lang->mail->sendCloudHelp  = <<<EOD
<p>. Notice SendCloud is a team notification service provided by SendCloud. For details, please visit <a href="http://notice.sendcloud.net/" target="_blank">notice.sendcloud.net</a></p>
<p>2. You can view your accessKey and secretKey on the "Settings" page after logging in. The sender address and name are also configured in "Settings".</p>
<p>3. To send emails successfully, the nickname in Notice SendCloud contacts must match the email address. Please visit the [<a href='%s'>Sync contacts</a>] page to sync ZenTao users to SendCloud.</p>
EOD;
$lang->mail->sendCloudSuccess = '¡Listo!';
$lang->mail->closeSendCloud   = 'Cerrar SendCloud';
$lang->mail->addressWhiteList = 'Para evitar que los correos sean bloqueados, agregue la dirección del remitente a la lista blanca de su servidor de correo.';
$lang->mail->ztCloudNotice    = <<<EOD
<p>ZenTao Cloud Mail is a free email service launched jointly by the ZenTao team and <a href='http://sendcloud.sohu.com/' target='_blank'>SendCloud</a>.</p>
<p>To access this free service, simply register an account on the official ZenTao website and verify your mobile number and email address.</p>
<p style='color:red'>We will submit your verification details to the SendCloud team for approval, granting you a free daily quota of 200 emails.</p>
<ul>
<li>Upon submitting verification on the ZenTao website, you will receive a daily quota of  <strong style='color:red'>50</strong> emails for <strong style='color:red'>3</strong> days.</li>
<li>nce your information is reviewed by ZenTao, you will receive a daily quota of <strong style='color:red'>200</strong> emails for <strong style='color:red'>7</strong>days.</li>
<li>After final approval by SendCloud, you will receive a permanent daily quota of  <strong style='color:red'>200</strong>emails.</li>
</ul>
<p>You cannot use this service if you do not agree to the terms above.</p>
EOD;

$lang->mail->forgetPassword = <<<EOT
<p>Hi there,</p>
<p>You requested a password reset for ZenTao. This link is valid for 3 minutes. If it expires, please request a new one.</p>
<p><a href="%s" target="_blank">Click here to reset</a></p>
EOT;

$lang->mail->placeholder = new stdclass();
$lang->mail->placeholder->password = 'Es posible que se requiera una contraseña de aplicación. Revise la configuración de su correo electrónico.';
