<?php
$lang->zai->setting    = 'Configuración de ZAI';
$lang->zai->appID      = 'ID de la aplicación';
$lang->zai->host       = 'Host';
$lang->zai->port       = 'Puerto';
$lang->zai->token      = 'Secreto de la aplicación';
$lang->zai->adminToken = 'Secreto de administrador';
$lang->zai->addSetting = 'Agregar configuración de ZAI';

$lang->zai->testConnection           = 'Probar conexión';
$lang->zai->configurationUnavailable = 'Configuración de ZAI no disponible.';
$lang->zai->illegalZentaoUser        = '¡Usuario de AXIS FLOW no válido!';
$lang->zai->onlyPostRequest          = 'Esta operación solo admite solicitudes POST.';
$lang->zai->vectorizedAlreadyEnabled = 'La vectorización de datos ya está habilitada.';
$lang->zai->vectorizedEnabled        = 'Vectorización de datos habilitada.';
$lang->zai->authenticationFailed     = '¡Falló la autenticación!';
$lang->zai->syncRequestFailed        = 'La solicitud de sincronización falló, inténtelo de nuevo más tarde';
$lang->zai->syncingHint              = 'Los datos de vectorización se sincronizarán automáticamente.';
$lang->zai->enqueueHint              = 'Mantenga esta página abierta hasta que termine la puesta en cola. Si se interrumpe, haga clic en Continuar puesta en cola.';
$lang->zai->enqueueResult            = "Encolar %s, ya en cola <strong class='%scount'>%s</strong> registros;";
$lang->zai->enqueueFinished          = 'Se completó el encolado de datos históricos. La tarea cron los sincronizará automáticamente.';
$lang->zai->enqueueContinue          = 'Continuar en cola';
$lang->zai->syncedWithFailedHint     = 'Falló la sincronización de algunos datos. El sistema reintentará automáticamente.';
$lang->zai->cannotFindMemoryInZai    = 'No se encontró la base de conocimiento con la clave especificada en ZAI, active la vectorización de nuevo.';
$lang->zai->confirmResetSync         = '¿Desea restablecer el estado de sincronización? Esto creará una nueva base de conocimiento en ZAI.';
$lang->zai->lastFailReason           = 'Motivo del fallo';
$lang->zai->settingTips              = 'Instale el <a class="btn btn-link text-primary px-1" style="text-decoration: none;" href="%s" target="_blank">servicio ZAI</a> para obtener la clave.';

$lang->zai->zentaoVectorization       = 'Vectorización de datos de AXIS FLOW';
$lang->zai->vectorized                = 'Vectorización de datos';
$lang->zai->vectorizedIntro           = 'La vectorización de datos convertirá los datos generados en el sistema AXIS FLOW en vectores para usarlos como referencia en las conversaciones con IA, permitiéndole responder con mayor precisión.';
$lang->zai->vectorizedUnavailableHint = 'Configure primero la aplicación ZAI y asegúrese de que el servicio ZAI esté disponible.';
$lang->zai->callZaiAPIFailed          = 'Error al llamar a la API de ZAI (%s): %s';

$lang->zai->vectorizedStatus = 'Estado';
$lang->zai->syncProgress     = 'Progreso de sincronización';
$lang->zai->syncingType      = 'Tipo de sincronización';
$lang->zai->finished         = 'Finalizado';
$lang->zai->failed           = 'Fallido';
$lang->zai->totalSync        = 'Total';
$lang->zai->lastSyncTime     = 'Hora de la última sincronización';

$lang->zai->syncActions = new stdClass();
$lang->zai->syncActions->enable          = 'Habilitar vectorización de datos';
$lang->zai->syncActions->startSync       = 'Iniciar sincronización';
$lang->zai->syncActions->resync          = 'Resincronizar';
$lang->zai->syncActions->pauseSync       = 'Pausar sincronización';
$lang->zai->syncActions->resumeSync      = 'Reanudar sincronización';
$lang->zai->syncActions->resetSync       = 'Restablecer sincronización';
$lang->zai->syncActions->continueEnqueue = 'Continuar en cola';

$lang->zai->syncingTypeList = array();
$lang->zai->syncingTypeList['story']    = 'Historia';
$lang->zai->syncingTypeList['demand']   = 'Demanda';
$lang->zai->syncingTypeList['bug']      = 'Bug';
$lang->zai->syncingTypeList['doc']      = 'Documento';
$lang->zai->syncingTypeList['design']   = 'Diseño';
$lang->zai->syncingTypeList['feedback'] = 'Retroalimentación';

$lang->zai->vectorizedStatusList = array();
$lang->zai->vectorizedStatusList['unavailable'] = 'No disponible';   // <== Persistent state
$lang->zai->vectorizedStatusList['disabled']    = 'Deshabilitado';      // <== Persistent state
$lang->zai->vectorizedStatusList['wait']        = 'En espera de sincronización';  // <== Persistent state
$lang->zai->vectorizedStatusList['syncing']     = 'Sincronizando';       // <== Persistent state
$lang->zai->vectorizedStatusList['paused']      = 'Pausado';
$lang->zai->vectorizedStatusList['synced']      = 'Sincronizado';        // <== Persistent state
$lang->zai->vectorizedStatusList['failed']      = 'Sincronización fallida';

$vectorizedPanelLang = new \stdClass();
$vectorizedPanelLang->vectorized           = $lang->zai->vectorized;
$vectorizedPanelLang->vectorizedIntro      = $lang->zai->vectorizedIntro;
$vectorizedPanelLang->vectorizedStatus     = $lang->zai->vectorizedStatus;
$vectorizedPanelLang->syncProgress         = $lang->zai->syncProgress;
$vectorizedPanelLang->syncingType          = $lang->zai->syncingType;
$vectorizedPanelLang->finished             = $lang->zai->finished;
$vectorizedPanelLang->failed               = $lang->zai->failed;
$vectorizedPanelLang->syncActions          = $lang->zai->syncActions;
$vectorizedPanelLang->syncingTypeList      = $lang->zai->syncingTypeList;
$vectorizedPanelLang->vectorizedStatusList = $lang->zai->vectorizedStatusList;
$vectorizedPanelLang->syncRequestFailed    = $lang->zai->syncRequestFailed;
$vectorizedPanelLang->confirmResetSync     = $lang->zai->confirmResetSync;

$lang->zai->vectorizedPanelLang = $vectorizedPanelLang;
