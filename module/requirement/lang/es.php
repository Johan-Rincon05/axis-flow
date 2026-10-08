<?php
global $app, $config;
$app->loadLang('story');
$lang->requirement = clone $lang->story;

foreach($lang->requirement as $key => $value)
{
    if(!is_string($value)) continue;
    if(strpos($value, $lang->SRCommon) !== false) $lang->requirement->$key = str_replace($lang->SRCommon, $lang->URCommon, $value);
}

$lang->requirement->common = $lang->URCommon;

$lang->requirement->sourceList = array();
$lang->requirement->sourceList['']           = '';
$lang->requirement->sourceList['customer']   = 'Cliente';
$lang->requirement->sourceList['user']       = 'Usuario';
$lang->requirement->sourceList['po']         = $lang->productCommon . ' Responsable';
$lang->requirement->sourceList['market']     = 'Marketing';
$lang->requirement->sourceList['service']    = 'Servicio al cliente';
$lang->requirement->sourceList['operation']  = 'Operaciones';
$lang->requirement->sourceList['support']    = 'Soporte técnico';
$lang->requirement->sourceList['competitor'] = 'Competidor';
$lang->requirement->sourceList['partner']    = 'Socio';
$lang->requirement->sourceList['dev']        = 'Equipo de desarrollo';
$lang->requirement->sourceList['tester']     = 'Equipo de pruebas';
$lang->requirement->sourceList['bug']        = 'Bug';
$lang->requirement->sourceList['forum']      = 'Foro';
$lang->requirement->sourceList['other']      = 'Otros';

$lang->requirement->priList = array();
$lang->requirement->priList[0] = '';
$lang->requirement->priList[1] = '1';
$lang->requirement->priList[2] = '2';
$lang->requirement->priList[3] = '3';
$lang->requirement->priList[4] = '4';

$lang->requirement->categoryList = array();
$lang->requirement->categoryList['feature']     = 'Funcionalidad';
$lang->requirement->categoryList['interface']   = 'API';
$lang->requirement->categoryList['performance'] = 'Rendimiento';
$lang->requirement->categoryList['safe']        = 'Seguridad';
$lang->requirement->categoryList['experience']  = 'Experiencia de usuario';
$lang->requirement->categoryList['improve']     = 'Mejora';
$lang->requirement->categoryList['other']       = 'Otros';

$lang->requirement->stageList = array();
$lang->requirement->stageList[''] = '';
$lang->requirement->stageList['wait'] = 'No iniciado';
if($config->edition == 'ipd')
{
    $lang->requirement->stageList['inroadmap'] = 'En hoja de ruta';
    $lang->requirement->stageList['incharter'] = 'En acta de constitución';
}
$lang->requirement->stageList['planned']    = 'Planificado';
$lang->requirement->stageList['projected']  = 'Iniciado';
$lang->requirement->stageList['developing'] = 'En desarrollo';
$lang->requirement->stageList['delivering'] = 'En entrega';
$lang->requirement->stageList['delivered']  = 'Entregado';
$lang->requirement->stageList['closed']     = 'Cerrado';

$lang->requirement->reasonList = array();
$lang->requirement->reasonList['']           = '';
$lang->requirement->reasonList['done']       = 'Completado';
$lang->requirement->reasonList['subdivided'] = 'Descompuesto';
$lang->requirement->reasonList['duplicate']  = 'Duplicado';
$lang->requirement->reasonList['postponed']  = 'Pospuesto';
$lang->requirement->reasonList['willnotdo']  = "No se hará";
$lang->requirement->reasonList['cancel']     = 'Cancelado';
$lang->requirement->reasonList['bydesign']   = 'Funciona como se diseñó';

$lang->requirement->linkStory = 'Vincular historia';
