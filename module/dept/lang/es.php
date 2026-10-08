<?php
/**
 * The dept module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     dept
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->dept->id           = 'ID';
$lang->dept->path         = 'Ruta';
$lang->dept->position     = 'Cargo';
$lang->dept->manageChild  = "Departamento";
$lang->dept->edit         = "Editar departamento";
$lang->dept->delete       = "Eliminar departamento";
$lang->dept->parent       = "Departamento padre";
$lang->dept->manager      = "Gerente";
$lang->dept->name         = "Nombre del departamento";
$lang->dept->browse       = "Configuración de departamentos";
$lang->dept->manage       = "Configuración de departamentos";
$lang->dept->updateOrder  = "Ordenar departamentos";
$lang->dept->add          = "Agregar departamento";
$lang->dept->grade        = "Nivel de departamentos";
$lang->dept->order        = "Ordenar";
$lang->dept->dragAndSort  = "Arrastrar para reordenar";
$lang->dept->noDepartment = "Sin departamento.";

$lang->dept->manageChildAction = "Administrar subdepartamentos";

$lang->dept->confirmDelete = "¿Seguro que desea eliminar este departamento?";
$lang->dept->successSave   = "Actualizado correctamente.";
$lang->dept->repeatDepart  = "Ya existe un departamento con este nombre. ¿Está seguro de que desea agregarlo?";

$lang->dept->error = new stdclass();
$lang->dept->error->hasSons  = 'Este departamento tiene subdepartamentos y no se puede eliminar.';
$lang->dept->error->hasUsers = 'Este departamento tiene empleados y no se puede eliminar.';
