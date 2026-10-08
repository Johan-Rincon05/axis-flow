<?php
/* Action. */
$lang->stakeholder->common       = 'Interesado';
$lang->stakeholder->browse       = 'Lista de interesados';
$lang->stakeholder->batchCreate  = 'Agregar por lote';
$lang->stakeholder->create       = 'Agregar interesado';
$lang->stakeholder->edit         = 'Editar interesado';
$lang->stakeholder->view         = 'Detalles del interesado';
$lang->stakeholder->delete       = 'Quitar interesado';
$lang->stakeholder->createdBy    = 'CreatedBy';
$lang->stakeholder->createdDate  = 'CreatedDate';
$lang->stakeholder->search       = 'Buscar';
$lang->stakeholder->browse       = 'Lista';
$lang->stakeholder->view         = 'Información del usuario';
$lang->stakeholder->basicInfo    = 'Información básica';
$lang->stakeholder->add          = 'Crear';
$lang->stakeholder->communicate  = 'Comunicaciones';
$lang->stakeholder->expect       = 'Resultado esperado';
$lang->stakeholder->progress     = 'Progreso';
$lang->stakeholder->userIssue    = 'Incidencias de interesados';
$lang->stakeholder->deleted      = 'Eliminado';

$lang->stakeholder->viewAction = 'Ver interesado';

/* Fields. */
$lang->stakeholder->id          = 'ID';
$lang->stakeholder->user        = 'Usuario';
$lang->stakeholder->type        = 'Tipo de usuario';
$lang->stakeholder->name        = 'Nombre';
$lang->stakeholder->role        = 'Rol';
$lang->stakeholder->phone       = 'Móvil';
$lang->stakeholder->qq          = 'QQ';
$lang->stakeholder->weixin      = 'WeChat';
$lang->stakeholder->email       = 'Correo electrónico';
$lang->stakeholder->isKey       = 'Interesado clave';
$lang->stakeholder->inside      = 'Interesado interno';
$lang->stakeholder->outside     = 'Interesado externo';
$lang->stakeholder->from        = 'Tipo de interesado';
$lang->stakeholder->company     = 'Empresa';
$lang->stakeholder->companyName = 'Empresa';
$lang->stakeholder->nature      = 'Personalidad';
$lang->stakeholder->analysis    = 'Análisis de impacto';
$lang->stakeholder->strategy    = 'Respuesta';
$lang->stakeholder->expect      = 'Resultado esperado';
$lang->stakeholder->progress    = 'Progreso';
$lang->stakeholder->createdBy   = 'CreatedBy';
$lang->stakeholder->createdDate = 'CreatedDate';
$lang->stakeholder->emptyTip    = 'Por ahora no hay incidencias.';

$lang->stakeholder->keyList[0] = 'No';
$lang->stakeholder->keyList[1] = 'Sí';

$lang->stakeholder->typeList['inside']  = 'Interno';
$lang->stakeholder->typeList['outside'] = 'Externo';

$lang->stakeholder->fromList['team']    = $lang->projectCommon . ' Equipo';
$lang->stakeholder->fromList['company'] = 'Interno';
$lang->stakeholder->fromList['outside'] = 'Externo';

$lang->stakeholder->confirmDelete       = "¿Desea eliminar al interesado?";
$lang->stakeholder->confirmDeleteExpect = "¿Desea quitar la expectativa?";
$lang->stakeholder->createCommunicate   = '<i class="icon icon-chat-line"></i>agregó un historial de comunicación.';

$lang->stakeholder->action = new stdclass();
$lang->stakeholder->action->communicate = array('main' => '$date, comunicado por <strong>$actor</strong>.');
