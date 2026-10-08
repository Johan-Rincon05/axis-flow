<?php
$lang->cache->setting      = 'Configuración de caché';
$lang->cache->clear        = 'Limpiar caché';
$lang->cache->clearSuccess = 'Caché limpiada correctamente.';
$lang->cache->status       = 'Estado';
$lang->cache->driver       = 'Tipo de caché';
$lang->cache->namespace    = 'Espacio de nombres';
$lang->cache->scope        = 'Alcance';
$lang->cache->memory       = 'Memoria';
$lang->cache->usedMemory   = 'Total %s, usado %s';

$lang->cache->statusList[1] = 'Activado';
$lang->cache->statusList[0] = 'Desactivado';

$lang->cache->driverList['apcu']  = 'APCu';
$lang->cache->driverList['redis'] = 'Redis';

$lang->cache->scopeList['private'] = 'Exclusivo para esta aplicación';
$lang->cache->scopeList['shared']  = 'Compartido por varias aplicaciones';

$lang->cache->apcu = new stdClass();
$lang->cache->apcu->notice     = 'Para usar la caché APCu, primero debe cargar la extensión APCu.';
$lang->cache->apcu->notLoaded  = 'Cargue la extensión APCu antes de habilitar la caché.';
$lang->cache->apcu->notEnabled = 'Habilite la opción apc.enabled antes de habilitar la caché.';

$lang->cache->redis = new stdClass();
$lang->cache->redis->host                 = 'Host de Redis';
$lang->cache->redis->port                 = 'Puerto de Redis';
$lang->cache->redis->username             = 'Usuario de Redis';
$lang->cache->redis->password             = 'Contraseña de Redis';
$lang->cache->redis->database             = 'Base de datos Redis';
$lang->cache->redis->serializer           = 'Serializador de Redis';
$lang->cache->redis->notice               = 'Para usar la caché Redis, primero debe cargar la extensión Redis.';
$lang->cache->redis->notLoaded            = 'Cargue la extensión Redis antes de habilitar la caché.';
$lang->cache->redis->igbinaryNotLoaded    = 'Cargue la extensión igbinary antes de habilitar la caché.';
$lang->cache->redis->igbinaryNotSupported = 'Redis no admite igbinary. Cambie el serializador.';

$lang->cache->redis->serializerList['php']      = 'Serialización de PHP';
$lang->cache->redis->serializerList['igbinary'] = 'igbinary';

$lang->cache->redis->tips = new stdClass();
$lang->cache->redis->tips->host       = 'Ingrese el nombre de dominio o la dirección IP; no es necesario indicar el protocolo ni el número de puerto.';
$lang->cache->redis->tips->database   = 'Ingrese el número de la base de datos de Redis; el valor predeterminado es 0.';
$lang->cache->redis->tips->serializer = 'Los datos deben serializarse y almacenarse en caché. Cambiar el serializador borrará los datos en caché.';

$lang->cache->tips = new stdClass();
$lang->cache->tips->namespace = 'Los espacios de nombres se usan para evitar conflictos de datos de caché entre distintas aplicaciones. Cambiar el espacio de nombres después de habilitar la caché borrará los datos de la caché.';
$lang->cache->tips->scope     = 'Si el servicio de caché solo lo usa esta aplicación, seleccione "Exclusivo para esta aplicación"; de lo contrario, seleccione "Compartido por varias aplicaciones".';
