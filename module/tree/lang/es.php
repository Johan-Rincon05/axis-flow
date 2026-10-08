<?php
/**
 * The tree module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     tree
 * @version     $Id: en.php 5045 2013-07-06 07:04:40Z zhujinyonging@gmail.com $
 * @link        https://www.zentao.net
 */
$lang->tree = new stdclass();
$lang->tree->common                 = 'Gestión de módulos';
$lang->tree->create                 = 'Crear módulo';
$lang->tree->edit                   = 'Editar módulos';
$lang->tree->delete                 = 'Eliminar módulos';
$lang->tree->browse                 = 'Gestión de módulos generales';
$lang->tree->browseTask             = 'Gestión de módulos de tareas';
$lang->tree->manage                 = 'Administrar módulos';
$lang->tree->fix                    = 'Corregir módulos';
$lang->tree->manageProduct          = "Gestionar módulos de {$lang->productCommon}";
$lang->tree->manageProject          = "Gestionar módulos de {$lang->projectCommon}";
$lang->tree->manageExecution        = "Gestionar módulos de {$lang->execution->common}";
$lang->tree->manageLine             = "Administrar líneas de producto";
$lang->tree->manageBug              = 'Administrar vistas de pruebas';
$lang->tree->manageCase             = 'Administrar vistas de casos';
$lang->tree->manageCaselib          = 'Administrar bibliotecas de casos';
$lang->tree->manageCustomDoc        = 'Administrar categorías de documentos';
$lang->tree->manageApiChild         = 'Administrar directorio de API';
$lang->tree->manageGroup            = 'Administrar grupos';
$lang->tree->updateOrder            = 'Actualizar orden';
$lang->tree->manageChild            = 'Administrar submódulos';
$lang->tree->manageStoryChild       = 'Administrar submódulos';
$lang->tree->manageLineChild        = "Administrar líneas de producto";
$lang->tree->manageBugChild         = 'Administrar submódulos de Bug';
$lang->tree->manageCaseChild        = 'Administrar submódulos de casos';
$lang->tree->manageCaselibChild     = 'Administrar submódulos de bibliotecas de casos';
$lang->tree->manageAiskillChild     = 'Administrar categorías de habilidades';
$lang->tree->manageDashboard        = 'Administrar módulos del panel';
$lang->tree->manageDashboardChild   = 'Administrar submódulos del panel';
$lang->tree->manageProjectChild     = "Gestionar submódulos de {$lang->projectCommon}";
$lang->tree->manageTaskChild        = "Gestionar submódulos de {$lang->execution->common}";
$lang->tree->manageDeliverableChild = "Administrar categoría de entregables";
$lang->tree->syncFromProduct        = "Módulos duplicados";
$lang->tree->dragAndSort            = "Arrastrar para ordenar";
$lang->tree->sort                   = "Orden";
$lang->tree->addChild               = "Agregar submódulos";
$lang->tree->confirmDelete          = 'Este módulo y sus submódulos se eliminarán. ¿Está seguro de que desea eliminarlos?';
$lang->tree->confirmDeleteMenu      = 'Este directorio y sus subdirectorios se eliminarán. ¿Está seguro de que desea eliminarlos?';
$lang->tree->confirmDelCategory     = 'Esta categoría y sus subcategorías se eliminarán. ¿Está seguro de que desea eliminarlas?';
$lang->tree->confirmDeleteLine      = "¿Seguro que desea eliminar esta línea de producto?";
$lang->tree->confirmDeleteGroup     = 'Este grupo y sus subgrupos se eliminarán. ¿Está seguro de que desea eliminarlos?';
$lang->tree->confirmRoot            = "Cualquier cambio en {$lang->productCommon} modificará {$lang->SRCommon}, historias, Bugs y casos de {$lang->productCommon} al que pertenecen, así como el vínculo entre {$lang->executionCommon} y {$lang->productCommon}. Es una acción de alto riesgo; proceda con precaución. ¿Seguro que desea realizar este cambio?";
$lang->tree->confirmRoot4Doc        = "Cualquier cambio en la biblioteca de documentos actualizará las asociaciones de todos los documentos de esta categoría. Es una acción de alto riesgo, proceda con precaución. ¿Seguro que desea realizar este cambio?";
$lang->tree->noSubmodule            = "No hay submódulos disponibles para duplicar";
$lang->tree->onlyRoot               = 'Solo se admiten categorías de primer nivel.';
$lang->tree->successSave            = 'Guardado ';
$lang->tree->successFixed           = 'Corregido';
$lang->tree->repeatName             = 'El nombre de módulo "%s" ya existe';
$lang->tree->repeatDirName          = 'El nombre de directorio "%s" ya existe';
$lang->tree->invalidParent          = 'El directorio padre no existe o no es válido.';
$lang->tree->shouldNotBlank         = 'El nombre del módulo no puede estar vacío';
$lang->tree->syncProductModule      = "Sincronizar módulos de {$lang->productCommon}";
$lang->tree->host                   = 'Host';
$lang->tree->Aiskill                = 'Administrar categorías de habilidades';
$lang->tree->aiskill                = 'Categoría de habilidades';
$lang->tree->editHost               = 'Editar grupo de hosts';
$lang->tree->deleteHost             = 'Eliminar grupo de hosts';
$lang->tree->manageHostChild        = 'Administrar subgrupos de hosts';
$lang->tree->groupMaintenance       = 'Administrar grupos de hosts';
$lang->tree->groupName              = 'Nombre del grupo';
$lang->tree->parentGroup            = 'Grupo padre';
$lang->tree->childGroup             = 'Hijo';
$lang->tree->confirmDeleteHost      = 'Este grupo y sus subgrupos se eliminarán. ¿Está seguro?';
$lang->tree->designModule           = 'Diseño';
$lang->tree->otherModule            = 'Otro';

$lang->tree->module       = 'Módulo';
$lang->tree->name         = 'Nombre del módulo';
$lang->tree->wordName     = 'Nombre';
$lang->tree->line         = "Nombre de la línea de producto";
$lang->tree->cate         = 'Nombre de la categoría';
$lang->tree->dir          = 'Nombre del directorio';
$lang->tree->root         = "{$lang->productCommon}";
$lang->tree->branch       = 'Platform/Branch';
$lang->tree->path         = 'Ruta';
$lang->tree->type         = 'Tipo';
$lang->tree->parent       = 'Módulo padre';
$lang->tree->parentCate   = 'Directorio padre';
$lang->tree->child        = 'Sub-modules';
$lang->tree->parentGroup  = 'Grupo padre';
$lang->tree->childGroup   = 'Sub-groups';
$lang->tree->subCategory  = 'Sub-categories';
$lang->tree->editCategory = 'Editar categoría';
$lang->tree->delCategory  = 'Eliminar categoría';
$lang->tree->lineChild    = "Sublíneas de producto";
$lang->tree->owner        = 'Asignado a';
$lang->tree->order        = 'Orden';
$lang->tree->short        = 'Abrev.';
$lang->tree->all          = 'Todos los módulos';
$lang->tree->executionDoc = "Documento de {$lang->executionCommon}";
$lang->tree->product      = $lang->productCommon;
$lang->tree->editDir      = "Editar directorio";

$lang->tree->emptyHistory = "Aún no hay historial";

$lang->module = new stdclass();
$lang->module->action = new stdclass();
$lang->module->action->created = array('main' => "\$date, created <strong>\$extra</strong> by <strong>\$actor</strong>.");
$lang->module->action->moved   = array('main' => "\$date, moved <strong>\$extra</strong> by <strong>\$actor</strong>.");
$lang->module->action->deleted = array('main' => "\$date, deleted <strong>\$extra</strong> by <strong>\$actor</strong>.");
