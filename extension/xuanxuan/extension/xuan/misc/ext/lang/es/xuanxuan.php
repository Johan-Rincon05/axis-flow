<?php
$lang->misc->client = new stdclass();
$lang->misc->client->version     = 'Versión del cliente';
$lang->misc->client->os          = 'Seleccionar SO';
$lang->misc->client->download    = 'Descargar';
$lang->misc->client->downloading = 'Downloading:';
$lang->misc->client->downloaded  = '¡Descargado!';
$lang->misc->client->setting     = 'Configuración';
$lang->misc->client->setted      = '¡Listo!';

$lang->misc->client->osList['win64']   = 'Windows 64';
$lang->misc->client->osList['win32']   = 'Windows 32';
$lang->misc->client->osList['linux64'] = 'Linux 64';
$lang->misc->client->osList['linux32'] = 'Linux 32';
$lang->misc->client->osList['mac64']   = 'Mac';

$lang->misc->client->errorInfo = new stdclass();
$lang->misc->client->errorInfo->downloadError  = '¡No se pudo descargar el paquete!';
$lang->misc->client->errorInfo->configError    = '¡No se pudo configurar!';
$lang->misc->client->errorInfo->manualOpt      = 'Obtenga el paquete del cliente en %s .';
$lang->misc->client->errorInfo->dirNotExist    = 'El directorio <span class="code text-red">%s</span> no existe. Créelo.';
$lang->misc->client->errorInfo->dirNotWritable = 'El directorio <span class="code text-red">%s</span> no tiene permisos de escritura. <br /> Ejecute: <span class="code text-red">sudo chmod 777 %s</span> en Linux.';
