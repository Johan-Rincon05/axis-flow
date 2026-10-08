<?php
$lang->errorlog->common      = 'Registro de errores';
$lang->errorlog->browse      = 'Explorar registros de errores';
$lang->errorlog->browseAbbr  = 'Explorar';
$lang->errorlog->view        = 'Ver registro de errores';
$lang->errorlog->viewAbbr    = 'Ver';
$lang->errorlog->delete      = 'Eliminar';
$lang->errorlog->batchDelete = 'Eliminar por lote';
$lang->errorlog->setting     = 'Configuración';

$lang->errorlog->days               = 'Días de conservación';
$lang->errorlog->info               = 'Los registros de errores que excedan el período de retención se eliminarán. Habilite las tareas programadas (Cron).';
$lang->errorlog->notFound           = 'No se encontró el registro de errores correspondiente.';
$lang->errorlog->empty              = 'Aún no hay registros de errores.';
$lang->errorlog->confirmDelete      = '¿Seguro que desea eliminar este registro de error?';
$lang->errorlog->confirmBatchDelete = '¿Seguro que desea eliminar los registros de error seleccionados?';

$lang->errorlog->requestID   = 'ID de solicitud';
$lang->errorlog->account     = 'Cuenta';
$lang->errorlog->module      = 'Módulo';
$lang->errorlog->method      = 'Método';
$lang->errorlog->url         = 'URL';
$lang->errorlog->level       = 'Nivel';
$lang->errorlog->message     = 'Mensaje';
$lang->errorlog->file        = 'Archivo';
$lang->errorlog->line        = 'Línea';
$lang->errorlog->trace       = 'Rastrear';
$lang->errorlog->createdDate = 'Ocurrió el';

$lang->errorlog->featureBar = array();
$lang->errorlog->featureBar['browse'] = array('all' => 'Todos');

$lang->errorlog->notice = new stdclass();
$lang->errorlog->notice->int = '『%s』debe ser un entero positivo.';

$lang->errorlog->levelList = array();
$lang->errorlog->levelList[E_ERROR]             = 'Error fatal';
$lang->errorlog->levelList[E_WARNING]           = 'Advertencia';
$lang->errorlog->levelList[E_PARSE]             = 'Error de análisis';
$lang->errorlog->levelList[E_NOTICE]            = 'Aviso';
$lang->errorlog->levelList[E_CORE_ERROR]        = 'Error del núcleo';
$lang->errorlog->levelList[E_CORE_WARNING]      = 'Advertencia del núcleo';
$lang->errorlog->levelList[E_COMPILE_ERROR]     = 'Error de compilación';
$lang->errorlog->levelList[E_COMPILE_WARNING]   = 'Advertencia de compilación';
$lang->errorlog->levelList[E_USER_ERROR]        = 'Error de usuario';
$lang->errorlog->levelList[E_USER_WARNING]      = 'Advertencia de usuario';
$lang->errorlog->levelList[E_USER_NOTICE]       = 'Aviso de usuario';
if(PHP_VERSION_ID < 80400) $lang->errorlog->levelList[E_STRICT] = 'Estricto'; // E_STRICT is deprecated since PHP 8.4, only needed on older versions.
$lang->errorlog->levelList[E_RECOVERABLE_ERROR] = 'Error recuperable';
$lang->errorlog->levelList[E_DEPRECATED]        = 'Obsoleto';
$lang->errorlog->levelList[E_USER_DEPRECATED]   = 'Usuario obsoleto';
