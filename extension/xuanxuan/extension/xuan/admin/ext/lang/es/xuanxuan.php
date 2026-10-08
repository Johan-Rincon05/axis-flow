<?php
$lang->admin->xuanxuan        = 'Estado del chat';
$lang->admin->blockStatus     = 'Estado';
$lang->admin->blockStatistics = 'Estadísticas';
$lang->admin->xuanxuanSetting = 'Configuración';

$lang->admin->fileSize      = 'Tamaño del archivo';
$lang->admin->countUsers    = 'Usuarios en línea';
$lang->admin->setServer     = 'Configuración del servidor';
$lang->admin->totalUsers    = 'Usuarios';
$lang->admin->totalGroups   = 'Grupos';
$lang->admin->totalMessages = 'Mensajes';
$lang->admin->xxdStartDate  = 'Último inicio de XXD';

$lang->admin->message = array();
$lang->admin->message['total'] = 'Total de mensajes';
$lang->admin->message['hour']  = 'Mensajes de la última hora';
$lang->admin->message['day']   = 'Mensajes de las últimas 24 horas';

$lang->admin->sizeType = array();
$lang->admin->sizeType['K'] = 1024;
$lang->admin->sizeType['M'] = 1024 * 1024;
$lang->admin->sizeType['G'] = 1024 * 1024 * 1024;

$lang->admin->menuList->system['subMenu']['xuanxuan'] = array('link' => 'Desktop|admin|xuanxuan|', 'subModule' => 'client,setting,conference,watermark');
$lang->admin->menuList->system['menuOrder']['20'] = 'xuanxuan';

$lang->admin->menuList->system['tabMenu']['xuanxuan']['index']   = array('link' => 'Home|admin|xuanxuan|');
$lang->admin->menuList->system['tabMenu']['xuanxuan']['setting'] = array('link' => 'Parameter|setting|xuanxuan|');

global $config;
if($config->edition != 'open')
{
    $lang->admin->menuList->system['tabMenu']['xuanxuan']['conference'] = array('link' => 'Conference|conference|admin|');
    $lang->admin->menuList->system['tabMenu']['xuanxuan']['watermark']  = array('link' => 'Watermark|watermark|index|');
}
$lang->admin->menuList->system['tabMenu']['xuanxuan']['update'] = array('link' => 'Update|client|browse|', 'subModule' => 'client');
