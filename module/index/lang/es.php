<?php
$lang->index->common      = 'Inicio';
$lang->index->index       = 'Inicio';
$lang->index->app         = 'Inicio';
$lang->index->pleaseInput = 'Escriba para ingresar.';
$lang->index->search      = 'Buscar';

$lang->index->dock = new stdClass();
$lang->index->dock->open    = 'Abierto';
$lang->index->dock->reload  = 'Recargar';
$lang->index->dock->close   = 'Cerrar';
$lang->index->dock->sort    = 'Ordenar';
$lang->index->dock->save    = 'Salir del ordenamiento';
$lang->index->dock->hide    = 'Ocultar';
$lang->index->dock->add     = 'Agregar';
$lang->index->dock->divider = 'Divisor';
$lang->index->dock->restore = 'Restablecer a valores predeterminados';

$lang->index->upgradeVersion = 'Actualización disponible';
$lang->index->upgradeNow     = 'Actualizar ahora';
$lang->index->upgrade        = 'Actualizar versión';
$lang->index->log            = 'Ver notas de la versión';
$lang->index->detailed       = 'Detalles';
$lang->index->website        = 'Visite nuestro sitio web oficial.';
$lang->index->tutorialTip    = 'Actualmente está en modo tutorial. ¿Desea continuar?';

$lang->index->chat = new stdclass();
$lang->index->chat->chat = 'Chat';
$lang->index->chat->ai   = 'IA';
$lang->index->chat->unconfiguredFormat  = 'La función %s aún no ha sido configurada, %s.';
$lang->index->chat->goConfigureFormat   = 'Haga clic para ir a <a class="text-primary configure-chat-button" href="%s">%s para configurarlo.</a>';
$lang->index->chat->contactAdminForHelp = 'Comuníquese con un administrador para obtener ayuda.';
$lang->index->chat->unauthorized        = 'No tiene permiso para acceder a la función de chat con IA. Comuníquese con su administrador para solicitar acceso.';
$lang->index->chat->reloadTip           = 'Puede <a class="text-primary" id="reload-ai-chat">recargar esta página</a> si considera que la configuración ya se completó.';

$lang->index->switchVision    = 'Cambiar visión de trabajo';
$lang->index->switchWorkspace = 'Cambiar espacio de trabajo';

$lang->index->workspaceList = [];
$lang->index->workspaceList['product']   = "Espacio de {$lang->productCommon}";
$lang->index->workspaceList['project']   = "Espacio de {$lang->projectCommon}";
$lang->index->workspaceList['execution'] = "Espacio de {$lang->executionCommon}";
