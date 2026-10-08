<?php
$lang->backup->common      = 'Respaldo';
$lang->backup->name        = 'Nombre del respaldo';
$lang->backup->index       = 'Lista de respaldos';
$lang->backup->history     = 'Historial';
$lang->backup->delete      = 'Eliminar copia de seguridad';
$lang->backup->backup      = 'Iniciar copia de seguridad';
$lang->backup->restore     = 'Restaurar';
$lang->backup->change      = 'Días de retención';
$lang->backup->changeAB    = 'Editar';
$lang->backup->rmPHPHeader = 'Quitar configuración de seguridad';
$lang->backup->setting     = 'Configuración';

$lang->backup->restoreAction = 'Restaurar copia de seguridad';
$lang->backup->settingAction = 'Configuración de respaldo';

$lang->backup->time     = 'Hora del respaldo';
$lang->backup->files    = 'Archivos de respaldo';
$lang->backup->allCount = 'Total de archivos';
$lang->backup->count    = 'Archivos de respaldo';
$lang->backup->size     = 'Tamaño';
$lang->backup->status   = 'Estado';

$lang->backup->statusList['success'] = 'Éxito';
$lang->backup->statusList['fail']    = 'Fallido';

$lang->backup->settingDir = 'Directorio de respaldo';
$lang->backup->settingList['nofile'] = 'No respaldar archivos ni código.';
$lang->backup->settingList['nosafe'] = 'No impedir la descarga del encabezado del archivo PHP.';

global $config;
if($config->inContainer) $lang->backup->settingList['nofile'] = 'No respaldar archivos.';

$lang->backup->waiting          = '<span id="backupType"></span>en curso. Por favor espere...';
$lang->backup->progressSQL      = '<p>Copia de seguridad de SQL en curso — %s completado.</p>';
$lang->backup->progressAttach   = '<p>Copia de seguridad de SQL completada.</p><p>Respaldando adjuntos — total: %s archivos, respaldados: %s archivos.</p>';
$lang->backup->progressCode     = '<p>Copia de seguridad de SQL completada.</p><p>Copia de seguridad de adjuntos completada.</p><p>Respaldando el código fuente — total: %s archivos, respaldados: %s archivos.';
$lang->backup->confirmDelete    = '¿Seguro que desea eliminar la copia de seguridad?';
$lang->backup->confirmRestore   = '¿Seguro que desea restaurar la copia de seguridad?';
$lang->backup->holdDays         = 'Conservar copias de seguridad de los últimos %s días.';
$lang->backup->copiedFail       = 'Archivos que no se pudieron copiar:';
$lang->backup->restoreTip       = 'El proceso de restauración solo restaura los adjuntos y la base de datos. Para restaurar el código fuente, hágalo manualmente.';
$lang->backup->insufficientDisk = 'El espacio disponible en disco es menor que NEED_SPACEG. Esto puede causar espacio insuficiente para el respaldo o afectar el rendimiento del sistema. Resuelva el problema e intente de nuevo.';
$lang->backup->ongoBackup       = 'Continuar copia de seguridad';
$lang->backup->cancelBackup     = 'cancelar copia de seguridad';
$lang->backup->getSpaceLoading  = 'Calculando el espacio de respaldo requerido...';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = '¡Respaldo completado correctamente!';
$lang->backup->success->restore = '¡Restauración completada correctamente!';

$lang->backup->error = new stdclass();
$lang->backup->error->noCreateDir     = 'El directorio de copias de seguridad no existe y no se pudo crear.';
$lang->backup->error->noWritable      = "¡<code>%s</code> no tiene permisos de escritura! Verifique los permisos del directorio o la copia de seguridad no podrá continuar.";
$lang->backup->error->plainNoWritable = "¡%s no tiene permisos de escritura! Verifique los permisos del directorio o la copia de seguridad no podrá continuar.";
$lang->backup->error->noDelete        = "No se puede eliminar el archivo %s. Ajuste los permisos del archivo o elimínelo manualmente.";
$lang->backup->error->restoreSQL      = "Falló la restauración de la base de datos — error: %s";
$lang->backup->error->restoreFile     = "Error al restaurar los adjuntos — error: %s";
$lang->backup->error->backupFile      = "Error al respaldar los adjuntos — error: %s";
$lang->backup->error->backupCode      = "Falló la copia de seguridad del código fuente — error: %s";
$lang->backup->error->timeout         = "El respaldo excedió el tiempo de espera.";
$lang->backup->error->int             = '『%s』debe ser un entero positivo.';

$lang->backup->notice = new stdclass();
$lang->backup->notice->higherVersion     = 'La versión de la copia de seguridad es superior a la versión en ejecución. Actualice la imagen del sistema a la versión %s antes de restaurar.';
$lang->backup->notice->lowerVersion      = 'La versión de la copia de seguridad es inferior a la versión en ejecución. El sistema realizará una actualización después de la restauración.';
$lang->backup->notice->unknownVersion    = 'No se pudo detectar información de versión en la copia de seguridad seleccionada. ¿Desea continuar con la restauración?';
$lang->backup->notice->settingsInQuickon = 'Actualmente está usando la edición de plataforma DevOps de ZenTao; no se requiere configuración adicional.';
$lang->backup->notice->gotoUpgrade       = 'Restauración completada correctamente. Redirigiendo a la página de actualización; si la página no se actualiza automáticamente, recárguela manualmente.';
