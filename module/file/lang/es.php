<?php
/**
 * The file module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     file
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->file = new stdclass();
$lang->file->common        = 'Adjuntos';
$lang->file->id            = 'ID';
$lang->file->objectType    = 'Tipo de elemento';
$lang->file->objectID      = 'ID del elemento';
$lang->file->deleted       = 'Eliminado';
$lang->file->uploadImages  = 'Cargar imágenes';
$lang->file->download      = 'Descargar adjuntos';
$lang->file->uploadDate    = 'Cargado el';
$lang->file->edit          = 'Renombrar';
$lang->file->inputFileName = 'Nombre del adjunto';
$lang->file->delete        = 'Eliminar adjunto';
$lang->file->label         = 'Etiqueta';
$lang->file->maxUploadSize = "(máx. %s)";
$lang->file->applyTemplate = "Aplicar plantilla";
$lang->file->tplTitle      = "Nombre de la plantilla";
$lang->file->tplTitleAB    = "Plantillas";
$lang->file->setPublic     = "Establecer plantilla pública";
$lang->file->exportFields  = "Exportar";
$lang->file->exportRange   = "Rango de exportación";
$lang->file->defaultTPL    = "Plantilla predeterminada";
$lang->file->setExportTPL  = "Configuración";
$lang->file->preview       = "Vista previa";
$lang->file->previewFile   = "Vista previa de adjuntos";
$lang->file->addFile       = 'Agregar';
$lang->file->beginUpload   = 'upload';
$lang->file->uploadSuccess = 'Cargado';
$lang->file->batchExport   = 'Exportar por lotes';
$lang->file->downloadFile  = 'Descargar';
$lang->file->playFailed    = 'Falló la previsualización del video. Comuníquese con su administrador.';
$lang->file->exportData    = "Exportar datos";

$lang->file->cantPreview        = "No se puede previsualizar este archivo";
$lang->file->officeNotSupported = 'Lo sentimos, solo las versiones ZenTao Biz y ZenTao Max admiten la vista previa de archivos de Office. Para probar estas versiones avanzadas, comuníquese con nosotros en support@zentao.pm.';
$lang->file->officeNotInstalled = 'Para previsualizar archivos de Office, debe <a href="https://www.zentao.net/book/zentaopms/1609.html" target="_blank">instalar y configurar el soporte de Office</a>';

$lang->file->pathname  = 'Ruta';
$lang->file->title     = 'Título';
$lang->file->fileName  = 'Nombre del archivo';
$lang->file->untitled  = 'Sin título';
$lang->file->extension = 'Tipo de archivo';
$lang->file->size      = 'Tamaño';
$lang->file->encoding  = 'Codificación';
$lang->file->addedBy   = 'Agregado por';
$lang->file->addedDate = 'Agregado el';
$lang->file->downloads = 'Descargas';
$lang->file->extra     = 'Notas';

$lang->file->attachmentName = "Nombre del adjunto";
$lang->file->sourceObject   = "Objeto de origen";
$lang->file->sourceID       = "ID de origen";

$lang->file->dragFile            = 'Arrastre archivos aquí';
$lang->file->childTaskTips       = 'Es una subtarea si hay un \'>\' antes del nombre.';
$lang->file->uploadImagesExplain = 'Nota: cargue imágenes en formato .jpg, .jpeg, .gif o .png. El nombre de la imagen será el nombre de la historia y la imagen será la descripción.';
$lang->file->uploadingImages     = '<strong>%s</strong> archivos subiéndose.';
$lang->file->saveAndNext         = 'Guardar y siguiente';
$lang->file->importPager         = 'Total: <strong>%s</strong>. Página <strong>%s</strong> de <strong>%s</strong>';
$lang->file->importSummary       = "Total: <strong id='totalAmount'>%s</strong> registros. %s por página, <strong id='times'>%s</strong> lotes en total.";
$lang->file->accessDenied        = '¡Acceso denegado a este archivo!';
$lang->file->uploadImagesTip     = 'Haga clic o arrastre para cargar. Formatos admitidos: jpg, jpeg, gif y png.';
$lang->file->waitDownloadTip     = 'Exportando archivos. Espere...';

$lang->file->errorNotExists   = "<span class='text-red'>No se encontró '%s'.</span>";
$lang->file->errorCanNotWrite = "<span class='text-red'>'%s' no tiene permisos de escritura. Cambie sus permisos. Ingrese <span class='code'>sudo chmod -R 777 '%s'</span></span> en Linux.";
$lang->file->confirmDelete    = "¿Eliminar este adjunto?";
$lang->file->errorFileSize    = "El archivo excede %s y es posible que no se cargue correctamente.";
$lang->file->errorFileUpload  = "Falló la carga: es posible que el tamaño del archivo supere el límite.";
$lang->file->errorFileFormat  = "Falló la carga: formato de archivo no compatible.";
$lang->file->errorFileMove    = "Falló la carga: error al mover el archivo.";
$lang->file->errorFileCount   = "Límite: %s archivos. Los archivos excedentes se ignorarán.";
$lang->file->dangerFile       = "Carga bloqueada: se detectó un riesgo de seguridad en el archivo seleccionado.";
$lang->file->errorSuffix      = 'Formato no válido, ¡solo archivos .zip!';
$lang->file->errorExtract     = 'La extracción falló. El archivo puede estar dañado o contener contenido restringido.';
$lang->file->errorUploadEmpty = 'No hay archivos pendientes de carga';
$lang->file->fileNotFound     = 'Archivo no encontrado. Es posible que haya sido eliminado del almacenamiento.';
$lang->file->fileContentEmpty = 'Se detectó un archivo vacío. Verifique e intente de nuevo.';
$lang->file->bizGuide         = 'Actualice a la edición %s de ZenTao para usar la importación/exportación de Excel.';

$lang->file->uploadError[1] = 'El tamaño del archivo excede el límite. Aumente upload_max_filesize y post_max_size en php.ini.';
$lang->file->uploadError[2] = 'El archivo cargado supera el valor MAX_FILE_SIZE especificado en el formulario HTML.';
$lang->file->uploadError[3] = 'El archivo solo se cargó parcialmente. Inténtelo de nuevo.';
$lang->file->uploadError[4] = 'No se cargó ningún archivo';
$lang->file->uploadError[5] = 'Se detectó un archivo vacío. Intente de nuevo.';
