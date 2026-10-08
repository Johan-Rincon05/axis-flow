<?php
/**
 * The release module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     release
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->release->create           = 'Crear lanzamiento';
$lang->release->edit             = 'Editar lanzamiento';
$lang->release->linkStory        = 'Vincular historia';
$lang->release->linkBug          = 'Vincular Bug';
$lang->release->delete           = 'Eliminar lanzamiento';
$lang->release->deleted          = 'Eliminado';
$lang->release->view             = 'Detalles del lanzamiento';
$lang->release->browse           = 'Lista de lanzamientos';
$lang->release->publish          = 'Publicar';
$lang->release->changeStatus     = 'Cambiar estado';
$lang->release->batchUnlink      = 'Desvincular por lote';
$lang->release->batchUnlinkStory = 'Desvincular historias por lote';
$lang->release->batchUnlinkBug   = 'Desvincular Bugs por lote';
$lang->release->manageSystem     = 'Administrar ' . $lang->product->system;
$lang->release->addSystem        = 'Add ' . $lang->product->system;
$lang->release->consumed         = 'Costo';

$lang->release->confirmDelete      = '¿Seguro que desea eliminar este lanzamiento?';
$lang->release->syncFromBuilds     = "Vincule al lanzamiento las historias completadas y los Bugs corregidos del Build.";
$lang->release->confirmUnlinkStory = '¿Seguro que desea desvincular esta historia?';
$lang->release->confirmUnlinkBug   = '¿Seguro que desea desvincular este Bug?';
$lang->release->existBuild         = 'La 『build』 ya contiene el registro 『%s』. Puede cambiar el 『nombre del lanzamiento』 o seleccionar otra 『build』.';
$lang->release->noRelease          = 'Aún no hay lanzamientos.';
$lang->release->errorDate          = 'La fecha de lanzamiento no debe ser posterior a hoy.';
$lang->release->confirmActivate    = '¿Seguro que desea activar este lanzamiento?';
$lang->release->confirmTerminate   = '¿Seguro que desea terminar este lanzamiento?';
$lang->release->confirmPublish     = '¿Seguro que desea publicar este lanzamiento?';

$lang->release->basicInfo = 'Información básica';

$lang->release->id             = 'ID';
$lang->release->product        = $lang->productCommon;
$lang->release->branch         = 'Plataforma / Rama';
$lang->release->project        = $lang->projectCommon;
$lang->release->build          = 'Build';
$lang->release->includedBuild  = 'Incluir Build';
$lang->release->includedSystem = 'Incluir ' . $lang->product->system;
$lang->release->releases       = $lang->release->includedSystem;
$lang->release->includedApp    = 'Incluido ' . $lang->product->system;
$lang->release->relatedProject = 'Relacionado ' . $lang->projectCommon;
$lang->release->system         = $lang->product->system;
$lang->release->selectSystem   = 'Seleccionar ' . $lang->product->system;
$lang->release->name           = $lang->product->system . ' Versión';
$lang->release->marker         = 'Hito';
$lang->release->date           = 'Fecha de lanzamiento planificada';
$lang->release->releasedDate   = 'Fecha de lanzamiento real';
$lang->release->desc           = 'Descripción';
$lang->release->files          = 'Archivos';
$lang->release->status         = 'Estado del lanzamiento';
$lang->release->subStatus      = 'Subestado';
$lang->release->last           = 'Última versión';
$lang->release->unlinkStory    = 'Desvincular historia';
$lang->release->unlinkBug      = 'Desvincular Bug';
$lang->release->stories        = 'Historia completada';
$lang->release->bugs           = 'Bug corregido';
$lang->release->leftBugs       = 'Bug activo';
$lang->release->generatedBugs  = 'Bug activo';
$lang->release->escapedBugs    = 'Bugs escapados';
$lang->release->escapedBugTip  = 'Bugs que se vincularon al lanzamiento después de haber sido lanzado.';
$lang->release->createdBy      = 'Creador';
$lang->release->createdDate    = 'Creado el';
$lang->release->finishStories  = '%s historias completadas';
$lang->release->resolvedBugs   = '%s bugs corregidos';
$lang->release->createdBugs    = '%s bugs siguen activos';
$lang->release->export         = 'Exportar HTML';
$lang->release->yesterday      = 'Lanzado ayer';
$lang->release->all            = 'Todos';
$lang->release->allProject     = 'Todos los proyectos';
$lang->release->notify         = 'Notificar';
$lang->release->notifyUsers    = 'Notificar a los usuarios';
$lang->release->mailto         = 'Enviar a';
$lang->release->mailContent    = '<p>Estimado usuario,</p><p style="margin-left:30px;">Los siguientes requerimientos y bugs que usted reportó se han publicado en la versión %s. Comuníquese con su gestor de cuenta para consultar la última versión.</p>';
$lang->release->storyList      = '<p style="margin-left:30px;">Lista de historias：%s.</p>';
$lang->release->bugList        = '<p style="margin-left:30px;">Lista de bugs：%s.</p>';
$lang->release->pageAllSummary = ' <strong>%s</strong> lanzamientos en esta página: <strong>%s</strong> publicados, <strong>%s</strong> terminados.';
$lang->release->pageSummary    = " <strong>%s</strong> lanzamientos en esta página: ";
$lang->release->fileName       = 'Nombre del archivo';
$lang->release->exportRange    = 'Datos a exportar';

$lang->release->storyTitle = 'Nombre de la historia';
$lang->release->bugTitle   = 'Nombre del Bug';

$lang->release->filePath = 'Download: ';
$lang->release->scmPath  = 'Ruta SCM: ';

$lang->release->exportTypeList['all']     = 'Todos';
$lang->release->exportTypeList['story']   = $lang->release->stories;
$lang->release->exportTypeList['bug']     = $lang->release->bugs;
$lang->release->exportTypeList['leftbug'] = $lang->release->leftBugs;

$lang->release->resultList['normal'] = 'Lanzado';
$lang->release->resultList['fail']   = 'Lanzamiento fallido';

$lang->release->statusList['wait']      = 'En espera';
$lang->release->statusList['normal']    = 'Lanzado';
$lang->release->statusList['fail']      = 'Lanzamiento fallido';
$lang->release->statusList['terminate'] = 'Terminar';

$lang->release->changeStatusList['wait']      = 'Publicar';
$lang->release->changeStatusList['normal']    = 'Activar';
$lang->release->changeStatusList['terminate'] = 'Terminar';
$lang->release->changeStatusList['publish']   = 'Publicar';
$lang->release->changeStatusList['active']    = 'Activar';
$lang->release->changeStatusList['pause']     = 'Terminar';

$lang->release->action = new stdclass();
$lang->release->action->changestatus = array('main' => '$date, $extra por <strong>$actor</strong>.', 'extra' => 'changeStatusList');
$lang->release->action->notified     = array('main' => '$date, notificación enviada por <strong>$actor</strong> .');
$lang->release->action->published    = array('main' => '$date, publicado por <strong>$actor</strong> y el resultado es <strong>$extra</strong>.', 'extra' => 'resultList');

$lang->release->notifyList['FB'] = "Proveedor de retroalimentación";
$lang->release->notifyList['PO'] = "Responsable de {$lang->productCommon}";
$lang->release->notifyList['QD'] = 'Gerente de pruebas';
$lang->release->notifyList['SC'] = 'Creador de la historia';
$lang->release->notifyList['ET'] = "Miembros del equipo de {$lang->execution->common}";
$lang->release->notifyList['PT'] = "Miembros del equipo de {$lang->projectCommon}";
$lang->release->notifyList['CT'] = "Enviar a";

$lang->release->featureBar['browse']['all']       = $lang->release->all;
$lang->release->featureBar['browse']['wait']      = $lang->release->statusList['wait'];
$lang->release->featureBar['browse']['normal']    = $lang->release->statusList['normal'];
$lang->release->featureBar['browse']['fail']      = $lang->release->statusList['fail'];
$lang->release->featureBar['browse']['terminate'] = $lang->release->statusList['terminate'];

$lang->release->markerList[1] = 'Sí';
$lang->release->markerList[0] = 'No';

$lang->release->failTips        = 'Falló el despliegue/lanzamiento';
$lang->release->versionErrorTip = 'El número de versión solo puede contener letras, dígitos, guiones (-), puntos (.) y guiones bajos (_).';
$lang->release->integratedLabel = 'Integración';
