<?php
$lang->webhook->common     = 'Webhook';
$lang->webhook->list       = 'Lista de Webhooks';
$lang->webhook->api        = 'API';
$lang->webhook->entry      = 'Aplicar';
$lang->webhook->log        = 'Registro';
$lang->webhook->bind       = 'Vincular usuario';
$lang->webhook->chooseDept = 'Seleccionar departamento a sincronizar';
$lang->webhook->assigned   = 'Asignado a';
$lang->webhook->setting    = 'Configuración';

$lang->webhook->logAction = 'Registro de Webhook';

$lang->webhook->browse = 'Ver Webhook ';
$lang->webhook->create = 'Crear Webhook ';
$lang->webhook->edit   = 'Editar Webhook ';
$lang->webhook->delete = 'Eliminar Webhook ';

$lang->webhook->id          = 'ID';
$lang->webhook->type        = 'Tipo';
$lang->webhook->name        = 'Nombre';
$lang->webhook->url         = 'URL del Webhook';
$lang->webhook->domain      = 'Dominio de AXIS FLOW';
$lang->webhook->contentType = 'Tipo de contenido';
$lang->webhook->sendType    = 'Tipo de envío';
$lang->webhook->secret      = 'Secreto';
$lang->webhook->product     = "Vincular {$lang->productCommon}";
$lang->webhook->execution   = "Vincular {$lang->execution->common}";
$lang->webhook->params      = 'Parámetros';
$lang->webhook->action      = 'Acción del disparador';
$lang->webhook->desc        = 'Descripción';
$lang->webhook->createdBy   = 'Creador';
$lang->webhook->createdDate = 'Creado el';
$lang->webhook->editedby    = 'Última edición por';
$lang->webhook->editedDate  = 'Editado el';
$lang->webhook->date        = 'Enviado a las';
$lang->webhook->data        = 'Datos';
$lang->webhook->result      = 'Resultado';
$lang->webhook->products    = $lang->productCommon;
$lang->webhook->executions  = $lang->execution->common;
$lang->webhook->actions     = 'Registro del sistema';
$lang->webhook->deleted     = 'Eliminado';
$lang->webhook->approval    = 'Notificaciones del flujo de aprobación';

$lang->webhook->typeList['']            = '';
$lang->webhook->typeList['dinggroup']   = 'Bot de grupo de DingTalk';
$lang->webhook->typeList['dinguser']    = 'Notificaciones de DingTalk';
$lang->webhook->typeList['wechatgroup'] = 'Bot de grupo de WeCom';
$lang->webhook->typeList['wechatuser']  = 'Mensajes de la app WeCom';
$lang->webhook->typeList['feishugroup'] = 'Bot de grupo de Feishu';
$lang->webhook->typeList['feishuuser']  = 'Mensajes de Feishu';
$lang->webhook->typeList['default']     = 'Otros';

$lang->webhook->sendTypeList['sync']  = 'Sincrónico';
$lang->webhook->sendTypeList['async'] = 'Asíncrono';

$lang->webhook->dingAgentId     = 'AgentID de DingTalk';
$lang->webhook->dingAppKey      = 'AppKey de DingTalk';
$lang->webhook->dingAppSecret   = 'AppSecret de DingTalk';
$lang->webhook->dingUserid      = 'ID de usuario de DingTalk';
$lang->webhook->dingBindStatus  = 'Vinculación de DingTalk';
$lang->webhook->chooseDeptAgain = 'Volver a seleccionar departamento';

$lang->webhook->wechatCorpId     = 'ID de corporación';
$lang->webhook->wechatCorpSecret = 'Secreto de la aplicación';
$lang->webhook->wechatAgentId    = 'ID del agente';
$lang->webhook->wechatUserid     = 'Usuario de WeCom';
$lang->webhook->wechatBindStatus = 'Vinculación de WeCom';

$lang->webhook->feishuAppId       = 'ID de aplicación de Feishu';
$lang->webhook->feishuAppSecret   = 'Secreto de aplicación de Feishu';
$lang->webhook->feishuUserid      = 'Usuario de Feishu';
$lang->webhook->feishuBindStatus  = 'Vinculación con Feishu';

$lang->webhook->zentaoUser  = 'Usuario de AXIS FLOW';

$lang->webhook->dingBindStatusList['0'] = 'No';
$lang->webhook->dingBindStatusList['1'] = 'Sí';

$lang->webhook->paramsList['objectType'] = 'Tipo de objeto';
$lang->webhook->paramsList['objectID']   = 'ID de objeto';
$lang->webhook->paramsList['product']    = "{$lang->productCommon}";
$lang->webhook->paramsList['execution']  = "{$lang->execution->common}";
$lang->webhook->paramsList['action']     = 'Acción';
$lang->webhook->paramsList['actor']      = 'Realizado por';
$lang->webhook->paramsList['date']       = 'Realizado el';
$lang->webhook->paramsList['comment']    = 'Comentario';
$lang->webhook->paramsList['text']       = 'Detalles de la acción';

$lang->webhook->confirmDelete = '¿Seguro que desea eliminar este webhook?';
$lang->webhook->friendlyTips  = 'Consejo: haga clic en un departamento para expandir sus subdepartamentos.';
$lang->webhook->loadPrompt    = 'Cargando un conjunto de datos grande, espere...';

$lang->webhook->trimWords = '';

$lang->webhook->note = new stdClass();
$lang->webhook->note->async     = 'El modo asíncrono requiere tener activadas las tareas programadas (Cron) en Admin-Sistema.';
$lang->webhook->note->bind      = 'La vinculación de usuarios solo es necesaria para los tipos de notificación [DingTalk/WeCom].';
$lang->webhook->note->product   = "Si se deja vacío, las acciones de todos los productos activarán el Webhook. De lo contrario, solo lo activarán las acciones del producto vinculado.";
$lang->webhook->note->execution = "Si se deja vacío, las acciones de todas las ejecuciones activarán el Webhook. De lo contrario, solo lo activarán las acciones de la ejecución vinculada.";

$lang->webhook->note->dingHelp   = " <a href='http://www.zentao.net/book/zentaopmshelp/358.html' target='_blank'><i class='icon-help'></i></a>";
$lang->webhook->note->wechatHelp = " <a href='http://www.zentao.net/book/zentaopmshelp/367.html' target='_blank'><i class='icon-help'></i></a>";

$lang->webhook->note->typeList['bearychat'] = 'Agregue un bot de AXIS FLOW en BearyChat e ingrese aquí su URL de Webhook.';
$lang->webhook->note->typeList['dingding']  = 'Agregue un bot personalizado en DingTalk e ingrese aquí su URL de Webhook.';
$lang->webhook->note->typeList['weixin']    = 'Agregue un bot personalizado en WeCom e ingrese aquí su URL de Webhook.';
$lang->webhook->note->typeList['default']   = 'Obtenga la URL del Webhook del sistema de terceros e ingrésela aquí.';

$lang->webhook->error               = new stdclass();
$lang->webhook->error->curl         = 'Se requiere la extensión php-curl.';
$lang->webhook->error->noDept       = 'No se seleccionó ningún departamento. Seleccione primero los departamentos a sincronizar.';
$lang->webhook->error->url          = '¡La URL del Webhook debe comenzar con http:// o https://!';
$lang->webhook->error->requestError = 'Error en la solicitud.';
