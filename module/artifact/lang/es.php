<?php
$lang->artifact->browse              = 'Lista de repositorios de artefactos';
$lang->artifact->create              = 'Crear repositorio de artefactos';
$lang->artifact->edit                = 'Editar repositorio de artefactos';
$lang->artifact->delete              = 'Eliminar repositorio de artefactos';
$lang->artifact->repoBrowser         = 'Contenido del repositorio';
$lang->artifact->createDir           = 'Agregar directorio';
$lang->artifact->uploadArtifact      = 'Cargar artefacto';
$lang->artifact->addSubDir           = 'Agregar subdirectorio';
$lang->artifact->addSiblingDir       = 'Agregar directorio hermano';
$lang->artifact->editDir             = 'Editar directorio';
$lang->artifact->deleteDir           = 'Eliminar directorio';
$lang->artifact->editArtifact        = 'Editar artefacto';
$lang->artifact->moveArtifact        = 'Mover artefacto';
$lang->artifact->deleteArtifact      = 'Eliminar artefacto';
$lang->artifact->batchDeleteArtifact = 'Eliminar artefactos por lote';
$lang->artifact->copyCMD             = 'Copiar comando';
$lang->artifact->copied              = 'Copiado correctamente';
$lang->artifact->copyFail            = 'Error al copiar, cópielo manualmente';

$lang->artifact->name          = 'Nombre';
$lang->artifact->code          = 'Código';
$lang->artifact->path          = 'Ruta actual';
$lang->artifact->type          = 'Tipo';
$lang->artifact->size          = 'Tamaño';
$lang->artifact->version       = 'Versión';
$lang->artifact->arch          = 'System/Arch';
$lang->artifact->creator       = 'Creador';
$lang->artifact->createdDate   = 'Fecha de creación';
$lang->artifact->editor        = 'Último editor';
$lang->artifact->editedDate    = 'Fecha de última edición';
$lang->artifact->action        = 'Acciones';
$lang->artifact->folder        = 'Carpeta';
$lang->artifact->file          = 'Archivo';
$lang->artifact->emptyFolder   = 'No hay archivos ni carpetas en este directorio';
$lang->artifact->expandAll     = 'Expandir todo';
$lang->artifact->collapseAll   = 'Contraer todo';
$lang->artifact->hideTree      = 'Ocultar árbol';
$lang->artifact->showTree      = 'Mostrar árbol';
$lang->artifact->more          = 'Más';
$lang->artifact->settings      = 'Configuración';
$lang->artifact->addDirectory  = 'Agregar directorio';
$lang->artifact->download      = 'Descargar';
$lang->artifact->rename        = 'Renombrar';
$lang->artifact->move          = 'Mover';
$lang->artifact->switch        = 'Cambiar';
$lang->artifact->actionMockTip = 'Acción simulada: %s';
$lang->artifact->dirName       = 'Nombre del directorio';
$lang->artifact->format        = 'Tipo de artefacto';
$lang->artifact->hasVersion    = 'Requiere control de versiones';
$lang->artifact->checkValue    = 'Valor de verificación';
$lang->artifact->okBtn         = 'OK';
$lang->artifact->history       = 'Historial';
$lang->artifact->artifactRepo  = 'Repositorio de artefactos';
$lang->artifact->parent        = 'Padre';
$lang->artifact->repo          = 'Repositorio de código';
$lang->artifact->package       = 'Paquete';
$lang->artifact->asset         = 'Artefacto';

$lang->artifact->countArtifact = 'Total de %s artefactos';

$lang->artifact->actionComment = new stdclass();
$lang->artifact->actionComment->moved     = 'Mover desde el directorio <strong>%s</strong> del repositorio de artefactos <strong>%s</strong> al directorio <strong>%s</strong> del repositorio de artefactos <strong>%s</strong>.';
$lang->artifact->actionComment->editedDir = 'Se editó el directorio <strong>%s</strong> del repositorio de artefactos <strong>%s</strong> a <strong>%s</strong> del repositorio de artefactos <strong>%s</strong>.';
$lang->artifact->actionComment->edited    = 'Renombrar <strong>%s</strong> a <strong>%s</strong>';

$lang->artifact->placeholder = new stdclass();
$lang->artifact->placeholder->name = 'Ingrese el nombre del repositorio de artefactos';

$lang->artifact->notice = new stdclass();
$lang->artifact->notice->deleteConfirm         = '¿Seguro que desea eliminar este repositorio de artefactos?';
$lang->artifact->notice->noArtifact            = 'Sin repositorio de artefactos';
$lang->artifact->notice->emptyAsset            = 'Sin artefacto';
$lang->artifact->notice->nameNotSupportChinese = 'El nombre solo admite minúsculas en inglés, números, guiones bajos (_), guiones (-) y puntos (.).';
$lang->artifact->notice->dirNameFormatError    = 'El nombre solo admite chino, inglés, números, guiones bajos (_), guiones (-) y puntos (.).';
$lang->artifact->notice->assetNameFormatError  = 'El nombre no puede contener \\/:*?"<>|';
$lang->artifact->notice->confirmDelete         = 'Los archivos eliminados permanecerán en la papelera de reciclaje durante 30 días. Pasado ese tiempo, no se podrán restaurar.';
$lang->artifact->notice->confirmDeleteDir      = 'Se eliminarán el directorio y todos sus subdirectorios y archivos. ¿Está seguro de eliminarlo?';
$lang->artifact->notice->rootNotAllowed        = 'No se puede seleccionar el directorio raíz al mover un artefacto.';
$lang->artifact->notice->dirNameTooLong        = 'El nombre del directorio es demasiado largo.';

$lang->artifact->featureBar['browse']['all']   = 'Todos';
$lang->artifact->featureBar['browse']['space'] = 'Repositorio de artefactos del espacio';
$lang->artifact->featureBar['browse']['repo']  = 'Repositorio de artefactos del repositorio';

$lang->artifact->typeList = array();
$lang->artifact->typeList['repo']  = 'Repositorio';
$lang->artifact->typeList['space'] = 'Espacio';

$lang->artifact->formatList = array();
$lang->artifact->formatList['file']      = 'Repositorio de archivos común';
$lang->artifact->formatList['container'] = 'Repositorio de imágenes';
//$lang->artifact->formatList['helm']      = 'Helm Repository';
//$lang->artifact->formatList['maven']     = 'Maven Repository';
//$lang->artifact->formatList['npm']       = 'NPM Repository';

$lang->artifact->pushImageNotice = 'Cómo subir una imagen';

$lang->artifact->pushImageTip   = array();
$lang->artifact->pushImageTip[] = array('title' => '1. Iniciar sesión en el registro',                                   'content' => 'docker login GITFOXURL');
$lang->artifact->pushImageTip[] = array('title' => '2. Etiquetar la imagen (reemplace el nombre y la versión de la imagen local)', 'content' => 'docker tag image-name:tag GITFOXURL/TYPECODE/LIBCODE/{image-name:tag}');
$lang->artifact->pushImageTip[] = array('title' => '3. Subir la imagen',                                          'content' => 'docker push GITFOXURL/TYPECODE/LIBCODE/{image-name:tag}');
