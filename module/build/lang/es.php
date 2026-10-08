<?php
/**
 * The build module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     build
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->build->common           = "Build";
$lang->build->browse           = "Lista de Builds";
$lang->build->create           = "Crear Build";
$lang->build->edit             = "Editar Build";
$lang->build->linkStory        = "Vincular {$lang->SRCommon}";
$lang->build->linkBug          = "Vincular Bug";
$lang->build->delete           = "Eliminar Build";
$lang->build->deleted          = "Eliminado";
$lang->build->view             = "Detalles del Build";
$lang->build->batchUnlink      = 'Desvincular por lote';
$lang->build->batchUnlinkStory = "Desvincular por lotes {$lang->SRCommon}";
$lang->build->batchUnlinkBug   = 'Desvincular Bugs por lote';
$lang->build->viewBug          = 'Bugs';
$lang->build->bugList          = 'Lista de Bugs';
$lang->build->system           = $lang->product->system;
$lang->build->addSystem        = 'Agregar ' . $lang->product->system;
$lang->build->consumed         = 'Costo';

$lang->build->confirmDelete      = "¿Seguro que desea eliminar el build?";
$lang->build->confirmUnlinkStory = "¿Seguro que desea desvincular {$lang->SRCommon}?";
$lang->build->confirmUnlinkBug   = "¿Seguro que desea desvincular el Bug?";

$lang->build->basicInfo = 'Información básica';

$lang->build->id             = 'ID';
$lang->build->product        = $lang->productCommon;
$lang->build->project        = $lang->projectCommon;
$lang->build->branch         = 'Plataforma/Rama';
$lang->build->branchAll      = 'Todos los %s vinculados';
$lang->build->branchName     = '%s';
$lang->build->execution      = $lang->executionCommon;
$lang->build->executionAB    = 'execution';
$lang->build->integrated     = 'Build integrado';
$lang->build->singled        = 'Build único';
$lang->build->builds         = 'Build inclusivo';
$lang->build->released       = 'Lanzamiento';
$lang->build->name           = 'Nombre';
$lang->build->nameAB         = 'Nombre';
$lang->build->date           = 'Fecha del Build';
$lang->build->builder        = 'Autor del Build';
$lang->build->url            = 'URL';
$lang->build->scmPath        = 'Ruta SCM';
$lang->build->filePath       = 'Dirección de descarga';
$lang->build->desc           = 'Descripción';
$lang->build->mailto         = 'Enviar a';
$lang->build->files          = 'Cargar archivos';
$lang->build->last           = 'Último Build';
$lang->build->createdBy      = 'Creador';
$lang->build->createdDate    = 'Creado el';
$lang->build->packageType    = 'Tipo';
$lang->build->unlinkStory    = "Desvincular {$lang->SRCommon}";
$lang->build->unlinkBug      = 'Desvincular Bug';
$lang->build->stories        = "{$lang->SRCommon} completado";
$lang->build->bugs           = 'Bugs resueltos';
$lang->build->generatedBugs  = 'Bugs reportados';
$lang->build->noProduct      = " <span id='noProduct' style='color:red'> No se puede crear el Build porque {$lang->executionCommon} no tiene {$lang->productCommon} vinculado. Primero <a data-url='%s' data-app='%s' data-toggle='modal' class='cursor-pointer'> vincule {$lang->productCommon}. </a></span>";
$lang->build->noBuild        = 'Aún no hay Builds.';
$lang->build->emptyExecution = $lang->executionCommon . 'no debe estar vacío.';
$lang->build->linkedBuild    = 'Vincular Build';
$lang->build->createTest     = 'Enviar solicitud de prueba';

$lang->build->integratedLabel = 'Integración';

$lang->build->notice = new stdclass();
$lang->build->notice->changeProduct   = "No se puede cambiar {$lang->productCommon} asociado a un Build que ya está vinculado a {$lang->SRCommon}, a un Bug o a una solicitud de prueba enviada.";
$lang->build->notice->changeExecution = "No se puede cambiar {$lang->executionCommon} asociada a un Build con una solicitud de prueba enviada.";
$lang->build->notice->changeBuilds    = "No se pueden cambiar los builds vinculados de un build con una solicitud de prueba enviada.";
$lang->build->notice->autoRelation    = "{$lang->SRCommon} completado, los Bugs resueltos y los Bugs nuevos de los Builds relacionados se vincularán automáticamente al Build de {$lang->projectCommon}.";
$lang->build->notice->createTest      = "La ejecución vinculada a este build ha sido eliminada. No se pueden enviar solicitudes de prueba.";

$lang->build->confirmChangeBuild = "Después de desvincular %s [%s], se quitarán del Build %s de {$lang->SRCommon} y %s Bug de %s. ¿Desea continuar?";
$lang->build->confirmRemoveStory = "Después de desvincular %s [%s], se quitarán del plan %s de {$lang->SRCommon} de %s. ¿Desea continuar?";
$lang->build->confirmRemoveBug   = "Después de desvincular %s [%s], %s Bug(s) de %s se quitarán del plan. ¿Desea continuar?";
$lang->build->confirmRemoveTips  = "¿Seguro que desea eliminar %s『%s』?";

$lang->build->finishStories = "%s de {$lang->SRCommon} completados esta vez.";
$lang->build->resolvedBugs  = '%s Bugs resueltos esta vez.';
$lang->build->createdBugs   = '%s Bugs reportados esta vez.';

$lang->build->placeholder = new stdclass();
$lang->build->placeholder->scmPath        = 'La dirección del repositorio de código fuente del software, como un repositorio Subversion o Git.';
$lang->build->placeholder->filePath       = 'La ubicación de almacenamiento para descargar el paquete de software de este build.';
$lang->build->placeholder->multipleSelect = "Se admite la selección de múltiples Builds.";

$lang->build->action = new stdclass();
$lang->build->action->buildopened = '$date, el build <strong>$extra</strong> fue creado por <strong>$actor</strong>. ' . "\n";

$lang->backhome = 'back';

$lang->build->isIntegrated = array();
$lang->build->isIntegrated['no']  = 'No';
$lang->build->isIntegrated['yes'] = 'Sí';
