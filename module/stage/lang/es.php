<?php
/**
 * The stage module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     stage
 * @version     $Id: en.php 4729 2013-05-03 07:53:55Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */
/* Actions. */
$lang->stage->browse      = 'Lista de etapas';
$lang->stage->browseAB    = 'Lista de etapas';
$lang->stage->create      = 'Crear fase';
$lang->stage->batchCreate = 'Crear etapas por lote';
$lang->stage->edit        = 'Editar etapa';
$lang->stage->delete      = 'Eliminar etapa';
$lang->stage->view        = 'Detalles';
$lang->stage->plusBrowse  = 'Cascada + Lista de fases';
$lang->stage->setTRpoint  = 'Establecer punto TR';
$lang->stage->setDCPpoint = 'Establecer punto DCP';

/* Fields. */
$lang->stage->id        = 'ID';
$lang->stage->name      = 'Nombre';
$lang->stage->type      = 'Tipo';
$lang->stage->percent   = 'Carga de trabajo %';
$lang->stage->setType   = 'Tipo de etapa en cascada';
$lang->stage->TRpoint   = 'Punto TR';
$lang->stage->DCPpoint  = 'Punto DCP';
$lang->stage->TRname    = 'Nombre del punto TR';
$lang->stage->DCPname   = 'Nombre del punto DCP';
$lang->stage->pointFlow = 'Flujo de aprobación';
$lang->stage->order     = 'Orden';
$lang->stage->ipdType   = 'Tipo de etapa IPD';

$lang->stage->typeList['mix']     = 'Mixto';
$lang->stage->typeList['request'] = 'Historia';
$lang->stage->typeList['design']  = 'Diseño';
$lang->stage->typeList['dev']     = 'Desarrollo';
$lang->stage->typeList['qa']      = 'Prueba';
$lang->stage->typeList['release'] = 'Lanzamiento';
$lang->stage->typeList['review']  = 'Resumen y revisión';
$lang->stage->typeList['other']   = 'Otros';

$lang->stage->ipdTypeList['concept'] = 'Concepto';
$lang->stage->ipdTypeList['plan']    = 'Plan';
$lang->stage->ipdTypeList['develop'] = 'Desarrollo';
$lang->stage->ipdTypeList['qualify'] = 'Verificar';
$lang->stage->ipdTypeList['launch']  = 'Lanzamiento';

$lang->stage->viewList      = 'Lista de fases';
$lang->stage->noStage       = 'Aún no hay fases disponibles.';
$lang->stage->confirmDelete = '¿Seguro que desea eliminarlo?';

$lang->stage->error              = new stdclass();
$lang->stage->error->percentOver = 'La suma de "% de carga de trabajo" no puede exceder 100%.';
$lang->stage->error->notNum      = 'El % de carga de trabajo debe ser un valor numérico.';
