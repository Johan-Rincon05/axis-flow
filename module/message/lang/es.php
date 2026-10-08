<?php
$lang->message->common     = 'Notificación del sistema';
$lang->message->index      = 'Página principal';
$lang->message->setting    = 'Configuración';
$lang->message->browser    = 'Notificación del sistema';
$lang->message->blockUser  = 'Usuarios bloqueados';
$lang->message->markUnread = 'Marcar como no leído';

$lang->message->typeList['mail']     = 'Correo electrónico';
$lang->message->typeList['message']  = 'Notificación del sistema';
$lang->message->typeList['webhook']  = 'Webhook';

$lang->message->browserSetting = new stdclass();
$lang->message->browserSetting->turnon   = 'Notificación';
$lang->message->browserSetting->pollTime = 'Intervalo de sondeo';

$lang->message->browserSetting->pollTimeTip         = 'El intervalo de sondeo no puede ser inferior a 30 segundos.';
$lang->message->browserSetting->pollTimePlaceholder = 'Establezca el intervalo para verificar notificaciones (en segundos).';

$lang->message->browserSetting->turnonList[1] = 'Activado';
$lang->message->browserSetting->turnonList[0] = 'Desactivado';

$lang->message->browserSetting->more    = 'Más configuraciones';
$lang->message->browserSetting->show    = 'Notificación del navegador';
$lang->message->browserSetting->count   = 'Cantidad de notificaciones';
$lang->message->browserSetting->maxDays = 'Días de retención';

$lang->message->unread = 'Mensajes sin leer(%s)';
$lang->message->all    = 'Todos los mensajes';

$lang->message->timeLabel['minute'] = 'hace %s minutos';
$lang->message->timeLabel['hour']   = 'hace 1 hora';

$lang->message->mention = '%s lo mencionó en %s. Por favor revíselo a tiempo.';

$lang->message->notice = new stdclass();
$lang->message->notice->allMarkRead = 'Marcar todo como leído';
$lang->message->notice->clearRead   = 'Limpiar leídos';

$lang->message->error = new stdclass();
$lang->message->error->maxDaysFormat  = 'Los días de retención deben ser un entero positivo.';
$lang->message->error->maxDaysValue   = 'Los días de retención no pueden ser menores que 0.';

$lang->message->label = new stdclass();
$lang->message->label->created      = 'Crear';
$lang->message->label->opened       = 'Crear';
$lang->message->label->changed      = 'Cambio';
$lang->message->label->releaseddoc  = 'Lanzamiento';
$lang->message->label->edited       = 'Editar';
$lang->message->label->assigned     = 'Asignar';
$lang->message->label->closed       = 'Cerrar';
$lang->message->label->deleted      = 'Eliminar';
$lang->message->label->undeleted    = 'Restaurar';
$lang->message->label->commented    = 'Comentario';
$lang->message->label->activated    = 'Activar';
$lang->message->label->resolved     = 'Resolver';
$lang->message->label->submitreview = 'Enviar revisión';
$lang->message->label->reviewed     = 'Revisión';
$lang->message->label->confirmed    = "Confirmar {$lang->SRCommon}";
$lang->message->label->frombug      = "Convertir en {$lang->SRCommon}";
$lang->message->label->started      = 'Iniciar';
$lang->message->label->delayed      = 'Retraso';
$lang->message->label->suspended    = 'En espera';
$lang->message->label->finished     = 'Completar';
$lang->message->label->paused       = 'Pausar';
$lang->message->label->canceled     = 'Cancelar';
$lang->message->label->restarted    = 'Continuar';
$lang->message->label->blocked      = 'Bloque';
$lang->message->label->bugconfirmed = 'Confirmar';
$lang->message->label->compilepass  = 'Build aprobado';
$lang->message->label->compilefail  = 'Build fallido';
$lang->message->label->archived     = 'Archivar';
$lang->message->label->restore      = 'Restaurar';
$lang->message->label->moved        = 'Mover';
$lang->message->label->nearing      = 'Recordatorio de vencimiento';
$lang->message->label->published    = 'Lanzamiento';
$lang->message->label->changestatus = 'Cambiar estado del lanzamiento';
$lang->message->label->mentioned    = '@Mención';
