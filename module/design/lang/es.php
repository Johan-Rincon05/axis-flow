<?php
/**
 * The English file of design module.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Shujie Tian <tianshujie@easycorp.ltd>
 * @package     design
 * @version     $Id: en.php 4729 2020-09-01 07:53:55Z tianshujie@easycorp.ltd $
 * @link        https://www.zentao.net
 */
/* 字段列表. */
$lang->design->id            = 'ID';
$lang->design->name          = 'Nombre';
$lang->design->story         = 'Historia';
$lang->design->type          = 'Tipo';
$lang->design->ditto         = 'Ídem';
$lang->design->submission    = 'Commit';
$lang->design->version       = 'Versión';
$lang->design->assignedTo    = 'Asignado a';
$lang->design->actions       = 'Acciones';
$lang->design->byQuery       = 'Buscar';
$lang->design->products      = "Linked {$lang->productCommon}";
$lang->design->story         = 'Historia vinculada';
$lang->design->file          = 'Adjunto';
$lang->design->desc          = 'Descripción';
$lang->design->range          = 'Impacto';
$lang->design->product       = "Linked {$lang->productCommon}";
$lang->design->basicInfo     = 'Información básica';
$lang->design->commitBy      = 'Commit realizado por';
$lang->design->commitDate    = 'Commit realizado el';
$lang->design->affectedStory = "Impacted $lang->SRCommon}";
$lang->design->affectedTasks = 'Tarea impactada';
$lang->design->reviewObject  = 'Elemento de revisión';
$lang->design->createdBy     = 'Creador';
$lang->design->createdByAB   = 'Creador';
$lang->design->createdDate   = 'Creado el';
$lang->design->basicInfo     = 'Información básica';
$lang->design->noAssigned    = 'Sin asignar';
$lang->design->comment       = 'Comentario';
$lang->design->more          = 'Más';
$lang->design->project       = 'Proyecto';

/* 动作列表. */
$lang->design->common             = 'Diseño';
$lang->design->create             = 'Crear diseño';
$lang->design->batchCreate        = 'Crear por lote';
$lang->design->edit               = 'Cambio';
$lang->design->delete             = 'Eliminar';
$lang->design->view               = 'Ver detalles';
$lang->design->browse             = 'Lista de diseños';
$lang->design->viewCommit         = 'Ver Commit';
$lang->design->linkCommit         = 'Vincular commit';
$lang->design->unlinkCommit       = 'Desvincular Commit';
$lang->design->submit             = 'Enviar revisión';
$lang->design->assignTo           = 'Asignar';
$lang->design->assignAction       = 'Asignar';
$lang->design->revision           = 'Código relacionado';
$lang->design->confirmStoryChange = 'Confirmar';

$lang->design->browseAction = 'Lista de diseños';

/* 字段取值. */
$lang->design->typeList         = array();
$lang->design->typeList['']     = '';
$lang->design->typeList['HLDS'] = 'Diseño de alto nivel';
$lang->design->typeList['DDS']  = 'Diseño de bajo nivel';
$lang->design->typeList['DBDS'] = 'Diseño de base de datos';
$lang->design->typeList['ADS']  = 'Diseño de API';

$lang->design->plusTypeList = $lang->design->typeList;

$lang->design->rangeList           = array();
$lang->design->rangeList['all']    = 'Todos';
$lang->design->rangeList['assign'] = 'Seleccionado';

/* 提示信息. */
$lang->design->errorSelection = '¡No se seleccionó ningún registro!';
$lang->design->noDesign       = 'Aún no hay registros.';
$lang->design->noCommit       = 'Sin registros de envío.';
$lang->design->confirmDelete  = '¿Seguro que desea eliminar este diseño?';
$lang->design->confirmUnlink  = '¿Seguro que desea quitar este envío?';
$lang->design->errorDate      = 'La fecha de inicio no puede ser posterior a la fecha de fin.';
$lang->design->deleted        = 'Eliminado';
$lang->design->frozenTip      = 'Una vez establecida la línea base del diseño, no se permite %s.';
