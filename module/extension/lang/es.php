<?php
/**
 * The extension module en file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     extension
 * @version     $Id$
 * @link        https://www.zentao.net
 */
$lang->extension->common           = 'Extensión';
$lang->extension->id               = 'ID';
$lang->extension->browse           = 'Ver complementos';
$lang->extension->install          = 'Instalar complemento';
$lang->extension->installAuto      = 'Instalación automática';
$lang->extension->installForce     = 'Forzar instalación';
$lang->extension->uninstall        = 'Desinstalar';
$lang->extension->uninstallAction  = 'Desinstalar complemento';
$lang->extension->activate         = 'Activar';
$lang->extension->activateAction   = 'Activar complemento';
$lang->extension->deactivate       = 'Desactivar';
$lang->extension->deactivateAction = 'Desactivar complemento';
$lang->extension->obtain           = 'Obtener complementos';
$lang->extension->view             = 'Detalles';
$lang->extension->downloadAB       = 'Descargar';
$lang->extension->upload           = 'Instalación local';
$lang->extension->erase            = 'Quitar';
$lang->extension->eraseAction      = 'Quitar complemento';
$lang->extension->upgrade          = 'Actualizar complemento';
$lang->extension->agreeLicense     = 'Acepto.';

$lang->extension->browseAction = 'Lista de complementos';

$lang->extension->structure        = 'Estructura de directorios';
$lang->extension->structureAction  = 'Estructura de directorios';
$lang->extension->installed        = 'Instalado';
$lang->extension->deactivated      = 'Desactivado';
$lang->extension->available        = 'Descargado';

$lang->extension->name             = 'Nombre del complemento';
$lang->extension->code             = 'Código';
$lang->extension->desc             = 'Descripción';
$lang->extension->type             = 'Tipo';
$lang->extension->dirs             = 'Directorio de instalación';
$lang->extension->files            = 'Archivos de instalación';
$lang->extension->status           = 'Estado';
$lang->extension->version          = 'Versión';
$lang->extension->latest           = '<small>Última versión<strong><a href="%s" target="_blank" class="extension">%s</a></strong>, compatible con ZenTao <a href="https://api.zentao.net/goto.php?item=latest" target="_blank" class="alert-link"><strong>%s</strong></a></small>';
$lang->extension->author           = 'Autor';
$lang->extension->license          = 'Licencia';
$lang->extension->site             = 'Sitio web';
$lang->extension->downloads        = 'Descargas';
$lang->extension->compatible       = 'Compatibilidad';
$lang->extension->grade            = 'Puntuación';
$lang->extension->depends          = 'Dependencia';
$lang->extension->expiredDate      = 'Fecha de vencimiento';
$lang->extension->zentaoCompatible = 'Versiones compatibles';
$lang->extension->installedTime    = 'Hora de instalación';
$lang->extension->life             = 'lifetime';

$lang->extension->publicList[0] = 'Descarga manual';
$lang->extension->publicList[1] = 'Descarga automática';

$lang->extension->compatibleList[0] = 'Desconocido';
$lang->extension->compatibleList[1] = 'Compatible con';

$lang->extension->obtainOfficial[0] = 'Third-party';
$lang->extension->obtainOfficial[1] = 'Oficial';
$lang->extension->obtainOfficial[2] = 'Certificación oficial';

$lang->extension->byDownloads   = 'Más populares';
$lang->extension->byAddedTime   = 'Último lanzamiento';
$lang->extension->byUpdatedTime = 'Última actualización';
$lang->extension->bysearch      = 'Buscar';
$lang->extension->byCategory    = 'Categoría';

$lang->extension->featureBar['browse']['installed']   = $lang->extension->installed;
$lang->extension->featureBar['browse']['deactivated'] = $lang->extension->deactivated;
$lang->extension->featureBar['browse']['available']   = $lang->extension->available;

$lang->extension->installFailed            = '%s falló. Error:';
$lang->extension->uninstallFailed          = 'Falló la desinstalación. Error: ';
$lang->extension->confirmUninstall         = 'Al desinstalar este complemento se eliminarán o modificarán tablas de la base de datos relacionadas. ¿Desea continuar?';
$lang->extension->installFinished          = '¡Felicitaciones! El complemento se %s correctamente.';
$lang->extension->refreshPage              = 'Actualizar';
$lang->extension->uninstallFinished        = 'Este complemento fue desinstalado.';
$lang->extension->deactivateFinished       = 'Este complemento está desactivado.';
$lang->extension->activateFinished         = 'Este complemento está activado.';
$lang->extension->eraseFinished            = 'Este complemento fue eliminado.';
$lang->extension->unremovedFiles           = 'No se pudieron eliminar algunos archivos o directorios. Elimínelos manualmente.';
$lang->extension->executeCommands          = '<h3>Ejecute los siguientes comandos para solucionar estos problemas:</h3>';
$lang->extension->successDownloadedPackage = 'Complemento descargado correctamente.';
$lang->extension->successCopiedFiles       = 'Archivos copiados correctamente.';
$lang->extension->successInstallDB         = 'Base de datos instalada correctamente.';
$lang->extension->viewInstalled            = 'Ver complementos instalados';
$lang->extension->viewAvailable            = 'Ver complementos disponibles';
$lang->extension->viewDeactivated          = 'Ver extensiones desactivadas';
$lang->extension->backDBFile               = 'Los datos del complemento se respaldaron en %s.';

$lang->extension->upgradeExt     = 'Actualizar versión';
$lang->extension->installExt     = 'Instalar';
$lang->extension->upgradeVersion = '(Actualización de %s a %s)';

$lang->extension->waring = 'Advertencia';

$lang->extension->errorOccurs                  = 'Error:';
$lang->extension->errorGetModules              = 'No se pudieron obtener las categorías de complementos de www.sanplex.com. Puede deberse a problemas de red. Verifique su conexión y actualice la página.';
$lang->extension->errorGetExtensions           = 'No se pudo obtener el complemento de www.sanplex.com. Puede deberse a problemas de red.';
$lang->extension->errorDownloadPathNotFound    = 'El directorio de descarga <strong>%s</strong> no existe.<br />En Linux, ejecute el comando: <strong>mkdir -p %s</strong> para solucionarlo.';
$lang->extension->errorDownloadPathNotWritable = 'El directorio de descarga <strong>%s</strong> no tiene permisos de escritura.<br />En Linux, ejecute el comando: <strong>sudo chmod 777 %s</strong> para solucionarlo.';
$lang->extension->errorPackageFileExists       = 'Ya existe un archivo llamado <strong>%s</strong> en el directorio de descarga. <strong>Para %s de nuevo, <a href="%s" class="alert-link">haga clic aquí</a>.</strong>';
$lang->extension->errorDownloadFailed          = 'Falló la descarga. Intente de nuevo. Si el problema persiste, descargue el archivo manualmente e instálelo mediante la función de carga.';
$lang->extension->errorMd5Checking             = 'El archivo descargado está incompleto. Inténtelo de nuevo. Si el problema persiste, descargue el archivo manualmente e instálelo mediante la función de carga.';
$lang->extension->errorCheckIncompatible       = 'Este complemento es incompatible con su versión de AXIS FLOW y puede no funcionar correctamente después de %s. <strong>Puede <a href="#" load-url="%s" onclick="loadUrl(this)" class="btn size-sm">Forzar %s</a> o <a href="#" load-url="%s" onclick="loadParentUrl(this)" class="btn size-sm">Cancelar</a>.</strong>';
$lang->extension->errorFileConflicted          = 'Se detectaron los siguientes conflictos de archivos:<br/>%s<strong>Puede <a href="#" load-url="%s" onclick="loadUrl(this)" class="btn size-sm">Sobrescribir</a> o <a href="#" load-url="%s" onclick="loadParentUrl(this)" class="btn size-sm">Cancelar</a>.</strong>';
$lang->extension->errorPackageNotFound         = 'No se encontró el archivo <strong>%s</strong>. Es posible que la descarga automática haya fallado. Intente descargarlo de nuevo.';
$lang->extension->errorTargetPathNotWritable   = 'El directorio de destino <strong>%s</strong> no tiene permisos de escritura.';
$lang->extension->errorTargetPathNotExists     = 'El directorio de destino <strong>%s</strong> no existe.';
$lang->extension->errorInstallDB               = 'No se pudo ejecutar la consulta a la base de datos. Error: %s';
$lang->extension->errorConflicts               = '¡Conflicto con “%s”!';
$lang->extension->errorDepends                 = 'Faltan las siguientes dependencias de complementos o tienen versiones incorrectas:<br/><br/>%s';
$lang->extension->errorIncompatible            = 'Este complemento es incompatible con su versión de AXIS FLOW.';
$lang->extension->errorUninstallDepends        = 'No se puede desinstalar. El complemento "%s" depende de este complemento.';
$lang->extension->errorExtracted               = 'No se pudo extraer el archivo del paquete %s. Puede que no sea un archivo ZIP válido. Error:<br/>%s';
$lang->extension->errorFileNotEmpty            = 'El archivo cargado no puede estar vacío.';
