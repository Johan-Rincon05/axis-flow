<?php
global $app, $config;
$app->loadLang('story');
$lang->epic = clone $lang->story;

foreach($lang->epic as $key => $value)
{
    if(!is_string($value)) continue;
    if(strpos($value, $lang->SRCommon) !== false) $lang->epic->$key = str_replace($lang->SRCommon, $lang->ERCommon, $value);
}

$lang->epic->common = $lang->ERCommon;

$lang->epic->sourceList = array();
$lang->epic->sourceList['']           = '';
$lang->epic->sourceList['customer']   = 'Cliente';
$lang->epic->sourceList['user']       = 'Usuario';
$lang->epic->sourceList['po']         = $lang->productCommon . ' Responsable';
$lang->epic->sourceList['market']     = 'Marketing';
$lang->epic->sourceList['service']    = 'Servicio al cliente';
$lang->epic->sourceList['operation']  = 'Operaciones';
$lang->epic->sourceList['support']    = 'Soporte técnico';
$lang->epic->sourceList['competitor'] = 'Competidor';
$lang->epic->sourceList['partner']    = 'Socio';
$lang->epic->sourceList['dev']        = 'Equipo de desarrollo';
$lang->epic->sourceList['tester']     = 'Equipo de pruebas';
$lang->epic->sourceList['bug']        = 'Bug';
$lang->epic->sourceList['forum']      = 'Foro';
$lang->epic->sourceList['other']      = 'Otros';

$lang->epic->priList = array();
$lang->epic->priList[0] = '';
$lang->epic->priList[1] = '1';
$lang->epic->priList[2] = '2';
$lang->epic->priList[3] = '3';
$lang->epic->priList[4] = '4';

$lang->epic->categoryList = array();
$lang->epic->categoryList['feature']     = 'Funcionalidad';
$lang->epic->categoryList['interface']   = 'API';
$lang->epic->categoryList['performance'] = 'Rendimiento';
$lang->epic->categoryList['safe']        = 'Seguridad';
$lang->epic->categoryList['experience']  = 'Experiencia de usuario';
$lang->epic->categoryList['improve']     = 'Mejora';
$lang->epic->categoryList['other']       = 'Otros';

$lang->epic->stageList = array();
$lang->epic->stageList[''] = '';
$lang->epic->stageList['wait'] = 'No iniciado';
if($config->edition == 'ipd')
{
    $lang->epic->stageList['inroadmap'] = 'En hoja de ruta';
    $lang->epic->stageList['incharter'] = 'En acta de constitución';
}
$lang->epic->stageList['planned']    = 'Planificado';
$lang->epic->stageList['projected']  = 'Proyectado';
$lang->epic->stageList['developing'] = 'En desarrollo';
$lang->epic->stageList['delivering'] = 'Entregando';
$lang->epic->stageList['delivered']  = 'Entregado';
$lang->epic->stageList['closed']     = 'Cerrado';

$lang->epic->reasonList = array();
$lang->epic->reasonList['']           = '';
$lang->epic->reasonList['done']       = 'Completado';
$lang->epic->reasonList['subdivided'] = 'Descompuesto';
$lang->epic->reasonList['duplicate']  = 'Duplicado';
$lang->epic->reasonList['postponed']  = 'Pospuesto';
$lang->epic->reasonList['willnotdo']  = "No se hará";
$lang->epic->reasonList['cancel']     = 'Cancelado';
$lang->epic->reasonList['bydesign']   = 'Funciona como se diseñó';

$lang->epic->linkStory = "Vincular historia";
