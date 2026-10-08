<?php
/**
 * The doc module english file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     doc
 * @version     $Id: en.php 824 2010-05-02 15:32:06Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->doclib = new stdclass();
$lang->doclib->name         = 'Nombre de la biblioteca';
$lang->doclib->control      = 'Control de acceso';
$lang->doclib->group        = 'Grupo';
$lang->doclib->user         = 'Usuario';
$lang->doclib->files        = 'Adjuntos';
$lang->doclib->all          = 'Todas las bibliotecas de documentos';
$lang->doclib->select       = 'Seleccionar biblioteca';
$lang->doclib->execution    = $lang->executionCommon . ' Biblioteca';
$lang->doclib->product      = $lang->productCommon . ' Biblioteca';
$lang->doclib->apiLibName   = 'Nombre de la biblioteca';
$lang->doclib->defaultSpace = 'Espacio predeterminado';
$lang->doclib->defaultMyLib = 'Mi biblioteca';
$lang->doclib->spaceName    = 'Nombre del espacio';
$lang->doclib->createSpace  = 'Agregar nuevo';
$lang->doclib->editSpace    = 'Editar espacio';
$lang->doclib->privateACL   = "Privado (Accesible para el creador y los usuarios de la lista blanca con permiso %s.)";
$lang->doclib->defaultOrder = 'Orden predeterminado de documentos';
$lang->doclib->migratedWiki = 'Wiki migrada';

$lang->doclib->tip = new stdclass();
$lang->doclib->tip->selectExecution = "If Execution is empty, the created library will be a {$lang->projectCommon} library.";

$lang->doclib->type['wiki'] = 'Biblioteca de documentos';
$lang->doclib->type['api']  = 'Biblioteca de API';

$lang->doclib->aclListA = array();
$lang->doclib->aclListA['default'] = 'Predeterminado';
$lang->doclib->aclListA['custom']  = 'Personalizado';

$lang->doclib->aclListB['open']    = 'Público';
$lang->doclib->aclListB['custom']  = 'Personalizado';
$lang->doclib->aclListB['private'] = 'Privado';

$lang->doclib->mySpaceAclList['private'] = "Privado (Accesible solo para el creador.)";

$lang->doclib->aclList = array();
$lang->doclib->aclList['open']    = "Público (Accesible para todos los usuarios con permiso de vista del módulo de documentos.)";
$lang->doclib->aclList['default'] = "Predeterminado (accesible para usuarios con permiso %s.)";
$lang->doclib->aclList['private'] = "Privado (Accesible solo para el creador y los usuarios de la lista blanca.)";

$lang->doclib->idOrder = array();
$lang->doclib->idOrder['id_asc']  = 'ID ascendente';
$lang->doclib->idOrder['id_desc'] = 'ID descendente' ;

$lang->doclib->create['product']   = 'Crear ' . $lang->productCommon . ' Biblioteca';
$lang->doclib->create['execution'] = 'Crear ' . $lang->executionCommon . ' Biblioteca';
$lang->doclib->create['custom']    = 'Crear biblioteca personalizada';

$lang->doclib->main['product']   = $lang->productCommon . ' Biblioteca principal';
$lang->doclib->main['project']   = "{$lang->projectCommon} Primary Library";
$lang->doclib->main['execution'] = $lang->executionCommon . ' Biblioteca principal';

$lang->doclib->tabList['product']   = $lang->productCommon;
$lang->doclib->tabList['execution'] = $lang->executionCommon;
$lang->doclib->tabList['custom']    = 'Personalizado';

$lang->doclib->nameList['custom'] = 'Nombre de biblioteca personalizada';

$lang->doclib->apiNameUnique = array();
$lang->doclib->apiNameUnique['product'] = 'En la biblioteca de API bajo el mismo ' . $lang->productCommon . '.';
$lang->doclib->apiNameUnique['project'] = 'En la biblioteca de API bajo el mismo ' . $lang->projectCommon . '.';
$lang->doclib->apiNameUnique['nolink']  = 'En biblioteca de API independiente';

$lang->docTemplate = new stdclass();
$lang->docTemplate->id                           = 'ID';
$lang->docTemplate->title                        = 'Título de la plantilla';
$lang->docTemplate->frequency                    = 'Frecuencia';
$lang->docTemplate->type                         = 'Tipo';
$lang->docTemplate->addedBy                      = 'Creador';
$lang->docTemplate->addedDate                    = 'Creado el';
$lang->docTemplate->editedBy                     = 'Editado por';
$lang->docTemplate->editedDate                   = 'Editado el';
$lang->docTemplate->views                        = 'Vistas';
$lang->docTemplate->confirmDelete                = '¿Seguro que desea eliminar esta plantilla de documento?';
$lang->docTemplate->scope                        = 'Alcance';
$lang->docTemplate->lib                          = $lang->docTemplate->scope;
$lang->docTemplate->module                       = 'Categoría de plantilla';
$lang->docTemplate->desc                         = 'Descripción';
$lang->docTemplate->deliverable                  = 'Es entregable';
$lang->docTemplate->parentModule                 = 'Categoría padre';
$lang->docTemplate->typeName                     = 'Nombre de la categoría';
$lang->docTemplate->parent                       = 'Jerarquía';
$lang->docTemplate->addTemplateType              = 'Agregar categoría de plantilla';
$lang->docTemplate->editTemplateType             = 'Editar categoría de plantilla';
$lang->docTemplate->docTitlePlaceholder          = 'Ingrese un título para la plantilla de documento.';
$lang->docTemplate->docTitleRequired             = 'El título de la plantilla de documento no puede estar vacío.';
$lang->docTemplate->errorDeleteType              = 'No se puede eliminar: esta categoría contiene plantillas de documentos.';
$lang->docTemplate->convertToNewDocConfirm       = 'El nuevo formato de documento usa un editor moderno basado en bloques para una experiencia mejorada. ¿Seguro que desea convertir esta plantilla al nuevo formato? Una vez guardada como borrador o publicada, no podrá volver al editor anterior.';
$lang->docTemplate->oldDocEditingTip             = 'Esta plantilla se creó con el editor anterior y ahora se está editando con el nuevo editor. Al guardar se convertirá al nuevo formato.';
$lang->docTemplate->leaveEditingConfirm          = 'Está editando una plantilla de documento. ¿Desea salir?';
$lang->docTemplate->searchScopePlaceholder       = 'Alcance de búsqueda';
$lang->docTemplate->searchTypePlaceholder        = 'Buscar categorías';
$lang->docTemplate->moveDocTemplate              = 'Mover plantilla de documento';
$lang->docTemplate->moveSubTemplate              = 'Mover subplantilla';
$lang->docTemplate->createTypeFirst              = 'Cree primero una categoría de plantillas de documentos.';
$lang->docTemplate->editedList                   = 'Editor de plantillas';
$lang->docTemplate->content                      = 'Contenido de la plantilla';
$lang->docTemplate->templateDesc                 = 'Descripción de la plantilla';
$lang->docTemplate->status                       = 'Estado de la plantilla';
$lang->docTemplate->emptyTip                     = 'Ningún dato del sistema coincide con los parámetros y filtros actuales.';
$lang->docTemplate->emptyDataTip                 = 'Ningún dato del sistema coincide con los criterios de filtro actuales.';
$lang->docTemplate->previewTip                   = 'Una vez configurados los parámetros, este bloque mostrará los datos según los filtros definidos.';
$lang->docTemplate->confirmDeleteChapterWithSub  = "¿Seguro que desea eliminar este capítulo? Todo el contenido anidado en él se ocultará.";
$lang->docTemplate->confirmDeleteTemplateWithSub = "¿Seguro que desea eliminar esta plantilla de documento? Todo el contenido anidado en ella se ocultará.";
$lang->docTemplate->scopeHasTemplateTips         = 'Este ámbito contiene plantillas de documentos. Quítelas antes de eliminar el ámbito.';
$lang->docTemplate->scopeHasModuleTips           = 'Este ámbito contiene categorías de plantillas. Quítelas antes de eliminar el ámbito.';
$lang->docTemplate->needEditable                 = 'No tiene permiso para editar esta plantilla de documento.';

$lang->docTemplate->create = 'Más';
$lang->docTemplate->edit   = 'Alcance';
$lang->docTemplate->delete = 'Eliminar plantilla de documento';

$lang->docTemplate->more       = 'Sin descripción.';
$lang->docTemplate->scopeLabel = 'of';
$lang->docTemplate->noTemplate = 'Vencido';
$lang->docTemplate->noDesc     = 'Crear plantilla';
$lang->docTemplate->of         = 'Editar plantilla de documento';
$lang->docTemplate->overdue    = 'Eliminar plantilla de documento';

$lang->docTemplate->addModule         = 'Agregar categoría';
$lang->docTemplate->addSameModule     = 'Agregar categoría hermana';
$lang->docTemplate->addSubModule      = 'Agregar subcategoría';
$lang->docTemplate->editModule        = 'Editar categoría';
$lang->docTemplate->deleteModule      = 'Eliminar categoría';
$lang->docTemplate->noModules         = 'Sin categorías de plantillas de documentos.';
$lang->docTemplate->addSubDocTemplate = 'Agregar subplantilla';

$lang->docTemplate->filterTypes = array();
$lang->docTemplate->filterTypes[] = array('all', 'Todos');
$lang->docTemplate->filterTypes[] = array('draft', 'Borrador');
$lang->docTemplate->filterTypes[] = array('released', 'Lanzado');
$lang->docTemplate->filterTypes[] = array('createdByMe', 'Creador yo');

$lang->docTemplate->deliverableList['1'] = 'Sí';
$lang->docTemplate->deliverableList['0'] = 'No';

/* Fields. */
$lang->doc->common       = 'Documento';
$lang->doc->id           = 'ID';
$lang->doc->product      = $lang->productCommon;
$lang->doc->project      = $lang->projectCommon;
$lang->doc->execution    = $lang->execution->common;
$lang->doc->plan         = $lang->productplan->shortCommon;
$lang->doc->lib          = 'Biblioteca';
$lang->doc->module       = 'Padre';
$lang->doc->libAndModule = 'Biblioteca y catálogo';
$lang->doc->object       = 'Objeto';
$lang->doc->title        = 'Título';
$lang->doc->digest       = 'Resumen';
$lang->doc->comment      = 'Comentario';
$lang->doc->type         = 'Tipo';
$lang->doc->content      = 'Texto';
$lang->doc->keywords     = 'Palabras clave';
$lang->doc->status       = 'Estado';
$lang->doc->url          = 'URL';
$lang->doc->files        = 'Archivo';
$lang->doc->addedBy      = 'Creador';
$lang->doc->addedDate    = 'Fecha de creación';
$lang->doc->editedBy     = 'Editado por';
$lang->doc->editedDate   = 'Última actualización';
$lang->doc->editingDate  = 'Editor y hora actuales';
$lang->doc->lastEditedBy = 'Último editor';
$lang->doc->updateInfo   = 'Información de actualización';
$lang->doc->version      = 'Número de versión 5';
$lang->doc->basicInfo    = 'Información básica';
$lang->doc->deleted      = 'Eliminado';
$lang->doc->fileObject   = 'Pertenece a';
$lang->doc->whiteList    = 'Lista blanca';
$lang->doc->readonly     = 'Solo lectura';
$lang->doc->editable     = 'Editable';
$lang->doc->contentType  = 'Formato del documento';
$lang->doc->separator    = "<i class='icon-angle-right'></i>";
$lang->doc->fileTitle    = 'Nombre del archivo';
$lang->doc->filePath     = 'Ruta del archivo';
$lang->doc->extension    = 'Tipo';
$lang->doc->size         = 'Tamaño de los archivos';
$lang->doc->source       = 'Origen';
$lang->doc->download     = 'Descargar';
$lang->doc->acl          = 'Permiso';
$lang->doc->fileName     = 'Archivo';
$lang->doc->groups       = 'Grupo';
$lang->doc->users        = 'Usuario';
$lang->doc->item         = ' Elemento';
$lang->doc->num          = 'Cantidad de documentos';
$lang->doc->searchResult = 'Resultado de búsqueda';
$lang->doc->mailto       = 'Enviar a';
$lang->doc->noModule     = 'No se encontraron directorios ni documentos en esta biblioteca. Administre los directorios o cree un documento.';
$lang->doc->noChapter    = 'No se encontraron capítulos ni artículos en este manual. Administre el manual.';
$lang->doc->views        = 'Vistas';
$lang->doc->draft        = 'Borrador';
$lang->doc->collector    = 'Marcado como favorito por';
$lang->doc->main         = 'Biblioteca de documentos principal';
$lang->doc->order        = 'Ordenar';
$lang->doc->doc          = 'Documento';
$lang->doc->updateOrder  = 'Actualizar orden';
$lang->doc->update       = 'Actualizar';
$lang->doc->nextStep     = 'Siguiente';
$lang->doc->closed       = 'Cerrado';
$lang->doc->saveDraft    = 'Guardar como borrador';
$lang->doc->template     = 'Plantilla';
$lang->doc->position     = 'Ubicación';
$lang->doc->person       = 'Personal';
$lang->doc->team         = 'Equipo';
$lang->doc->manage       = 'Gestión de documentos';
$lang->doc->release      = 'Lanzamiento';
$lang->doc->story        = 'Historia';
$lang->doc->convertdoc   = 'Convertir a documento';
$lang->doc->needEditable = 'No tiene permiso para editar este documento.';
$lang->doc->needReadable = 'No tiene permiso para ver este documento.';
$lang->doc->groupLabel   = 'Grupo';
$lang->doc->userLabel    = 'Usuario';
$lang->doc->parent       = 'Padre';
$lang->doc->rawContent   = 'Contenido sin procesar';

$lang->doc->moduleDoc     = 'Ver por módulo';
$lang->doc->searchDoc     = 'Buscar';
$lang->doc->fast          = 'Acceso rápido';
$lang->doc->allDoc        = 'Todos los documentos';
$lang->doc->allVersion    = 'Todas las versiones';
$lang->doc->openedByMe    = 'Creador yo';
$lang->doc->editedByMe    = 'Editado por mí';
$lang->doc->orderByOpen   = 'Agregado recientemente';
$lang->doc->orderByEdit   = 'Actualizado recientemente';
$lang->doc->orderByVisit  = 'Visto recientemente';
$lang->doc->todayEdited   = 'Actualizado hoy';
$lang->doc->pastEdited    = 'Actualizaciones anteriores';
$lang->doc->myDoc         = 'Mis documentos';
$lang->doc->myView        = 'Visto recientemente';
$lang->doc->myCollection  = 'Favoritos míos';
$lang->doc->myCreation    = 'Creador yo';
$lang->doc->myEdited      = 'Editado por mí';
$lang->doc->myLib         = 'Mi biblioteca';
$lang->doc->tableContents = 'Catálogo';
$lang->doc->addCatalog    = 'Agregar catálogo';
$lang->doc->editCatalog   = 'Editar catálogo';
$lang->doc->deleteCatalog = 'Eliminar catálogo';
$lang->doc->sortCatalog   = 'Ordenar catálogos';
$lang->doc->sortDoclib    = 'Ordenar bibliotecas';
$lang->doc->sortDoc       = 'Ordenar documentos';
$lang->doc->docStatistic  = 'Resumen de documentos';
$lang->doc->docCreated    = 'Creado';
$lang->doc->docEdited     = 'Editado';
$lang->doc->docViews      = 'Vistas';
$lang->doc->docCollects   = 'Colección';
$lang->doc->todayUpdated  = "Actualizado hoy";
$lang->doc->daysUpdated   = 'Actualizado hace %s día(s)';
$lang->doc->monthsUpdated = 'Actualizado hace %s mes(es)';
$lang->doc->yearsUpdated  = 'Actualizado hace %s año(s)';
$lang->doc->viewCount     = '%s vista(s)';
$lang->doc->collectCount  = '%s favorito(s)';

/* Methods list */
$lang->doc->index            = 'Panel';
$lang->doc->createAB         = 'Crear';
$lang->doc->create           = 'Crear documento';
$lang->doc->createOrUpload   = 'Crear/Importar documento';
$lang->doc->edit             = 'Editar documento';
$lang->doc->copyDoc          = 'Copiar documento';
$lang->doc->effort           = 'Esfuerzo';
$lang->doc->delete           = 'Eliminar documento';
$lang->doc->createBook       = 'Crear manual';
$lang->doc->browse           = 'Lista de documentos';
$lang->doc->view             = 'Detalles del documento';
$lang->doc->diff             = 'Diff';
$lang->doc->confirm          = 'Confirmar';
$lang->doc->cancelDiff       = 'Cancelar diff';
$lang->doc->diffAction       = 'Diff de documentos';
$lang->doc->sort             = 'Ordenar documentos';
$lang->doc->manageType       = 'Administrar directorios';
$lang->doc->editType         = 'Editar directorio';
$lang->doc->editChildType    = 'Administrar subdirectorios';
$lang->doc->deleteType       = 'Eliminar directorio';
$lang->doc->addType          = 'Agregar directorio';
$lang->doc->childType        = 'Sub-directory';
$lang->doc->catalogName      = 'Nombre del directorio';
$lang->doc->collect          = 'Favorito';
$lang->doc->collectSuccess   = '¡Agregado a favoritos!';
$lang->doc->cancelCollection = 'Quitar de favoritos';
$lang->doc->deleteFile       = 'Eliminar archivo';
$lang->doc->menuTitle        = 'Directorio';
$lang->doc->api              = 'API';
$lang->doc->displaySetting   = 'Configuración de visualización';
$lang->doc->collectAction    = 'Documento favorito';

$lang->doc->libName            = 'Nombre de la biblioteca';
$lang->doc->libType            = 'Tipo de biblioteca';
$lang->doc->custom             = 'Biblioteca de documentos personalizada';
$lang->doc->customAB           = 'Biblioteca personalizada';
$lang->doc->createLib          = 'Crear biblioteca';
$lang->doc->createLibAction    = 'Crear biblioteca';
$lang->doc->createSpace        = 'Crear espacio';
$lang->doc->allLibs            = 'Lista de bibliotecas';
$lang->doc->objectLibs         = "Detalles de documentos";
$lang->doc->showFiles          = 'Adjuntos';
$lang->doc->editLib            = 'Editar biblioteca';
$lang->doc->editSpaceAction    = 'Editar espacio';
$lang->doc->editLibAction      = 'Editar biblioteca';
$lang->doc->deleteSpaceAction  = 'Eliminar espacio';
$lang->doc->deleteLibAction    = 'Eliminar biblioteca';
$lang->doc->moveLibAction      = 'Mover biblioteca';
$lang->doc->moveDocAction      = 'Mover documento';
$lang->doc->copyDocAction      = 'Copiar';
$lang->doc->batchMove          = 'Mover por lote';
$lang->doc->batchMoveDocAction = 'Mover documentos por lote';
$lang->doc->fixedMenu          = 'Fijar al menú';
$lang->doc->removeMenu         = 'Desanclar del menú';
$lang->doc->search             = 'Buscar';
$lang->doc->allCollections     = 'Ver toda la colección';
$lang->doc->keywordsTips       = 'Separe varias palabras clave con comas.';
$lang->doc->sortLibs           = 'Ordenar bibliotecas';
$lang->doc->titlePlaceholder   = 'Ingrese el título aquí.';
$lang->doc->confirm            = 'Confirmar';
$lang->doc->docSummary         = '<strong>%s</strong> documentos en esta página.';
$lang->doc->docCheckedSummary  = '<strong>%s</strong> documentos seleccionados.';
$lang->doc->showDoc            = 'Mostrar documentos';
$lang->doc->uploadFile         = 'Cargar archivo';
$lang->doc->docUrl             = 'URL del documento';
$lang->doc->uploadDoc          = 'Importar';
$lang->doc->uploadFormat       = 'Formato de carga';
$lang->doc->editedList         = 'Editor de documentos';
$lang->doc->moveTo             = 'Mover a';
$lang->doc->notSupportExport   = 'Este documento no se puede exportar.';
$lang->doc->downloadTemplate   = 'Descargar plantilla';
$lang->doc->addFile            = 'Enviar archivo';
$lang->doc->frozenTips         = 'Una vez establecida la línea base del documento, no se permite %s.';

$lang->doc->preview         = 'Vista previa';
$lang->doc->insertTitle     = 'Insertar lista de %s';
$lang->doc->previewTip      = 'Los datos mostrados pueden modificarse mediante la configuración de filtros. Los datos insertados son una instantánea estática.';
$lang->doc->insertTip       = 'Seleccione al menos un elemento después de la vista previa.';
$lang->doc->insertText      = 'Insertar';
$lang->doc->searchCondition = 'Filtros de búsqueda';
$lang->doc->list            = ' Lista';
$lang->doc->detail          = 'Detalles';
$lang->doc->zentaoData      = 'Datos de AXIS FLOW';
$lang->doc->emptyError      = 'No puede estar vacío.';
$lang->doc->caselib         = 'Biblioteca de casos de prueba';
$lang->doc->customSearch    = 'Búsqueda personalizada';

$lang->doc->addChapter     = 'Agregar capítulo';
$lang->doc->editChapter    = 'Editar capítulo';
$lang->doc->sortChapter    = 'Ordenar capítulos';
$lang->doc->deleteChapter  = 'Eliminar capítulo';
$lang->doc->addSubChapter  = 'Agregar subcapítulo';
$lang->doc->addSameChapter = 'Agregar capítulo hermano';
$lang->doc->addSubDoc      = 'Agregar documento hijo';
$lang->doc->chapterName    = 'Nombre del capítulo';

$lang->doc->tips = new stdclass();
$lang->doc->tips->noProduct   = 'No se encontraron productos. Cree uno primero.';
$lang->doc->tips->noProject   = 'No se encontraron proyectos. Cree uno primero.';
$lang->doc->tips->noExecution = 'No se encontraron ejecuciones. Cree una primero.';
$lang->doc->tips->noCaselib   = 'No se encontraron bibliotecas de casos de prueba. Cree una primero.';

$lang->doc->zentaoList = array();
$lang->doc->zentaoList['story']          = $lang->SRCommon;
$lang->doc->zentaoList['productStory']   = $lang->productCommon . ' ' . $lang->SRCommon;
$lang->doc->zentaoList['projectStory']   = $lang->projectCommon . ' ' . $lang->SRCommon;
$lang->doc->zentaoList['executionStory'] = $lang->execution->common . ' ' . $lang->SRCommon;
$lang->doc->zentaoList['planStory']      = $lang->productplan->shortCommon . ' ' . $lang->SRCommon;

$lang->doc->zentaoList['case']        = $lang->testcase->common;
$lang->doc->zentaoList['productCase'] = $lang->productCommon . ' ' . $lang->testcase->common;
$lang->doc->zentaoList['projectCase'] = $lang->projectCommon . ' ' . $lang->testcase->common;
$lang->doc->zentaoList['caselib']     = 'Biblioteca de casos de prueba';

$lang->doc->zentaoList['task']       = $lang->task->common;
$lang->doc->zentaoList['bug']        = $lang->bug->common;
$lang->doc->zentaoList['projectBug'] = $lang->projectCommon . ' ' . $lang->bug->common;
$lang->doc->zentaoList['productBug'] = 'Bug del producto';
$lang->doc->zentaoList['planBug']    = 'Bug del plan';

$lang->doc->zentaoList['more']               = 'Más';
$lang->doc->zentaoList['productPlan']        = $lang->productCommon . ' Plan';
$lang->doc->zentaoList['productPlanContent'] = $lang->productCommon . ' Detalles del plan';
$lang->doc->zentaoList['productRelease']     = $lang->productCommon . ' ' . $lang->release->common;
$lang->doc->zentaoList['projectRelease']     = $lang->projectCommon . ' ' . $lang->release->common;
$lang->doc->zentaoList['ER']                 = $lang->defaultERName;
$lang->doc->zentaoList['UR']                 = $lang->URCommon;
$lang->doc->zentaoList['feedback']           = 'Retroalimentación';
$lang->doc->zentaoList['ticket']             = 'Ticket';
$lang->doc->zentaoList['gantt']              = 'Diagrama de Gantt';

$lang->doc->zentaoList['HLDS'] = 'Diseño de alto nivel';
$lang->doc->zentaoList['DDS']  = 'Diseño detallado';
$lang->doc->zentaoList['DBDS'] = 'Diseño de base de datos';
$lang->doc->zentaoList['ADS']  = 'Diseño de API';

$lang->doc->zentaoAction = array();
$lang->doc->zentaoAction['set']       = 'Configuración';
$lang->doc->zentaoAction['delete']    = 'Eliminar';
$lang->doc->zentaoAction['setParams'] = 'Establecer parámetros';

$lang->doc->uploadFormatList = array();
$lang->doc->uploadFormatList['separateDocs'] = 'Guardar cada archivo como un documento independiente.';
$lang->doc->uploadFormatList['combinedDocs'] = 'Guardar todos los archivos como un solo documento.';

$lang->doc->fileType = new stdclass();
$lang->doc->fileType->stepResult = 'Resultado de la prueba';

global $config;
/* Query condition list. */
$lang->doc->allProduct    = 'Todos' . $lang->productCommon . 's';
$lang->doc->allExecutions = 'Todos' . $lang->execution->common . 's';
$lang->doc->allProjects   = 'Todos' . $lang->projectCommon . 's';

$lang->doc->libTypeList['product']   = $lang->productCommon . ' Biblioteca de documentos';
$lang->doc->libTypeList['project']   = "{$lang->projectCommon} Docs Library";
$lang->doc->libTypeList['execution'] = $lang->execution->common . ' Biblioteca de documentos';
$lang->doc->libTypeList['api']       = 'Biblioteca de API';
$lang->doc->libTypeList['custom']    = 'Biblioteca personalizada';

$lang->doc->libGlobalList['api'] = 'Biblioteca de API';

$lang->doc->libIconList['product']   = 'icon-product';
$lang->doc->libIconList['execution'] = 'icon-stack';
$lang->doc->libIconList['custom']    = 'icon-folder-o';

$lang->doc->systemLibs['product']   = $lang->productCommon;
$lang->doc->systemLibs['execution'] = $lang->executionCommon;

$lang->doc->statusList['']       = "";
$lang->doc->statusList['normal'] = "Publicado";
$lang->doc->statusList['draft']  = "Borrador";

$lang->doc->aclList['open']    = "Público (Visible y editable por todos los usuarios.)";
$lang->doc->aclList['private'] = "Privado (Visible y editable solo por usuarios específicos.)";

$lang->doc->aclListA['open']    = "Público (Accesible para todos los usuarios. Los usuarios con permiso de edición de plantillas de documentos pueden acceder y editarlo.)";
$lang->doc->aclListA['private'] = "Privado (Editable y utilizable solo por el creador.)";

$lang->doc->selectSpace = 'Seleccionar espacio';
$lang->doc->space       = 'Espacio';
$lang->doc->spaceList['mine']    = 'Mi espacio';
$lang->doc->spaceList['custom']  = 'Espacio del equipo';
$lang->doc->spaceList['product'] = $lang->productCommon . ' Espacio';
$lang->doc->spaceList['project'] = $lang->projectCommon . ' Espacio';
$lang->doc->spaceList['api']     = 'Espacio de API';

$lang->doc->apiType = 'Tipo de API';
$lang->doc->apiTypeList['product'] = $lang->productCommon . ' API';
$lang->doc->apiTypeList['project'] = $lang->projectCommon . ' API';
$lang->doc->apiTypeList['nolink']  = 'API independiente';

$lang->doc->typeList['html']     = 'Html';
$lang->doc->typeList['markdown'] = 'Markdown';
$lang->doc->typeList['url']      = 'URL';
$lang->doc->typeList['word']     = 'Word';
$lang->doc->typeList['ppt']      = 'PPT';
$lang->doc->typeList['excel']    = 'Excel';

$lang->doc->createList['template']   = 'Wiki';
$lang->doc->createList['word']       = 'Word';
$lang->doc->createList['url']        = 'Vincular';
$lang->doc->createList['ppt']        = 'PPT';
$lang->doc->createList['excel']      = 'Excel';
$lang->doc->createList['attachment'] = $lang->doc->uploadDoc;

$lang->doc->types['doc'] = 'Documento';
$lang->doc->types['api'] = 'Documento de API';

$lang->doc->contentTypeList['html']     = 'HTML';
$lang->doc->contentTypeList['markdown'] = 'MarkDown';

$lang->doc->browseType             = 'Modo de vista';
$lang->doc->browseTypeList['list'] = 'Lista';
$lang->doc->browseTypeList['grid'] = 'Directorio';

$lang->doc->fastMenuList['byediteddate']  = 'Actualizaciones recientes';
//$lang->doc->fastMenuList['visiteddate']   = 'Recently Visited';
$lang->doc->fastMenuList['openedbyme']    = 'Mis documentos';
$lang->doc->fastMenuList['collectedbyme'] = 'Mi colección';

$lang->doc->fastMenuIconList['byediteddate']  = 'icon-folder-upload';
//$lang->doc->fastMenuIconList['visiteddate']   = 'icon-folder-move';
$lang->doc->fastMenuIconList['openedbyme']    = 'icon-folder-account';
$lang->doc->fastMenuIconList['collectedbyme'] = 'icon-folder-star';

$lang->doc->customObjectLibs['files']       = 'Mostrar adjuntos';
$lang->doc->customObjectLibs['customFiles'] = 'Mostrar biblioteca personalizada';

$lang->doc->orderLib                       = 'Ordenar bibliotecas';
$lang->doc->customShowLibs                 = 'Configuración de visualización';
$lang->doc->customShowLibsList['zero']     = 'Mostrar bibliotecas vacías';
$lang->doc->customShowLibsList['children'] = 'Mostrar documentos de subcategorías';
$lang->doc->customShowLibsList['unclosed'] = "Mostrar solo ejecuciones abiertas ";

$lang->doc->mail = new stdclass();
$lang->doc->mail->releasedDoc = new stdclass();
$lang->doc->mail->edit        = new stdclass();
$lang->doc->mail->releasedDoc->title = "%s publicó el documento #%s: %s.";
$lang->doc->mail->edit->title        = "%s editó el documento #%6s: %s.";

$lang->doc->confirmDelete               = "¿Seguro que desea eliminar este documento?";
$lang->doc->confirmDeleteWithSub        = "Eliminar este documento también eliminará todo su contenido asociado. ¿Está seguro de continuar?";
$lang->doc->confirmDeleteLib            = "¿Seguro que desea eliminar esta biblioteca de documentos?";
$lang->doc->confirmDeleteSpace          = "Eliminar este espacio quitará todas las bibliotecas, directorios y documentos asociados. ¿Está seguro de continuar?";
$lang->doc->confirmDeleteBook           = "¿Seguro que desea eliminar este manual?";
$lang->doc->confirmDeleteChapter        = "¿Seguro que desea eliminar este capítulo?";
$lang->doc->confirmDeleteChapterWithSub = "Eliminar este capítulo también eliminará todos sus subcapítulos y documentos. ¿Está seguro de continuar?";
$lang->doc->confirmDeleteModule         = "¿Seguro que desea eliminar este directorio?";
$lang->doc->confirmDeleteModuleWithSub  = "Eliminar este directorio también eliminará todos sus subdirectorios, capítulos y documentos. ¿Está seguro de continuar?";
$lang->doc->confirmOtherEditing         = "Este documento se está editando actualmente. Si continúa editando, se sobrescribirán los cambios realizados por otros. ¿Desea continuar?";
$lang->doc->errorEditSystemDoc          = "Las bibliotecas de documentos del sistema no se pueden modificar. ";
$lang->doc->errorEmptyProduct           = "No {$lang->productCommon} found. The document cannot be created.";
$lang->doc->errorEmptyProject           = "No {$lang->executionCommon} found. The document cannot be created.";
$lang->doc->errorEmptySpaceLib          = "No existe ninguna biblioteca de documentos en este espacio. No se puede crear el documento. Cree primero una biblioteca de documentos.";
$lang->doc->errorMainSysLib             = "Las bibliotecas de documentos del sistema no se pueden eliminar.";
$lang->doc->accessDenied                = "No tiene permiso para acceder a esto.";
$lang->doc->cannotView                  = "No tiene permiso para ver este documento. Comuníquese con el creador %s.";
$lang->doc->versionNotFount             = 'Esta versión del documento no existe.';
$lang->doc->noDoc                       = 'Aún no hay documentos.';
$lang->doc->noArticle                   = 'Aún no hay artículos.';
$lang->doc->noLib                       = 'Aún no hay bibliotecas.';
$lang->doc->noBook                      = 'No se han creado manuales en la biblioteca Wiki. Cree uno.';
$lang->doc->cannotCreateOffice          = '<p>Lo sentimos, solo las versiones ZenTao Biz y ZenTao Max admiten la creación de documentos %s.</p><p>Para probar estas versiones avanzadas, comuníquese con nosotros en support@zentao.pm.</p>';
$lang->doc->notSetOffice                = "Se requiere configurar <ahref='%s'>Collabora Online</a> para crear documentos %s.";
$lang->doc->requestTypeError            = "La edición en Collabora Online no está disponible porque el requestType actual de AXIS FLOW no está establecido en PATH_INFO. Comuníquese con el administrador para modificar la configuración de requestType.";
$lang->doc->notSetCollabora             = "Collabora Online no está configurado. No se pueden crear documentos %s. Configure <ahref='%s'>Collabora Online</a>.";
$lang->doc->noSearchedDoc               = 'No se encontraron documentos.';
$lang->doc->noEditedDoc                 = 'Aún no ha editado ningún documento.';
$lang->doc->noOpenedDoc                 = 'Aún no ha creado ningún documento.';
$lang->doc->noCollectedDoc              = 'No ha agregado ningún documento a sus favoritos.';
$lang->doc->errorEmptyLib               = 'No hay datos disponibles en la biblioteca de documentos.';
$lang->doc->confirmUpdateContent        = 'Se detectó contenido sin guardar. ¿Desea continuar editando?';
$lang->doc->selectLibType               = 'Seleccione un tipo de biblioteca de documentos.';
$lang->doc->selectDoc                   = 'Seleccione un documento.';
$lang->doc->noLibreOffice               = 'No tiene permiso para acceder a la configuración de conversión de Office.';
$lang->doc->errorParentChapter          = 'El capítulo padre no puede ser el propio capítulo ni uno de sus subcapítulos.';
$lang->doc->errorOthersCreated          = 'Actualmente no se admite mover documentos cuyo creador sea otro usuario en esta biblioteca. ¿Desea continuar?';
$lang->doc->confirmLeaveOnEdit          = 'Se detectó contenido sin guardar. ¿Desea salir de la página?';
$lang->doc->errorOccurred               = 'La operación falló. Inténtelo de nuevo más tarde.';
$lang->doc->selectLibFirst              = 'Seleccione primero una biblioteca de documentos.';
$lang->doc->createLibFirst              = 'Cree primero una biblioteca de documentos.';
$lang->doc->nopriv                      = 'No tiene permiso para acceder a %s y no puede ver este documento. Comuníquese con el administrador para ajustar los permisos.';
$lang->doc->docConvertComment           = "El documento ha sido convertido al nuevo formato de editor. Cambie a la versión %s para ver el documento original.";
$lang->doc->previewNotAvailable         = 'La vista previa no está disponible por ahora. Visite AXIS FLOW para ver el documento %s.';
$lang->doc->hocuspocusConnect           = 'Servicio de edición colaborativa conectado.';
$lang->doc->hocuspocusDisconnect        = 'Servicio de edición colaborativa desconectado. El contenido se sincronizará al reconectar.';
$lang->doc->docTemplateConvertComment   = 'La plantilla de documento ha sido convertida al nuevo formato de editor. Cambie a la versión %s para ver la plantilla original.';
$lang->doc->noSupportList               = "This {$lang->projectCommon} does not support %s.";

$lang->doc->noticeAcl['lib']['product']['default']   = "Accesible para los usuarios con permiso de acceso al {Slang-productCommon} seleccionado.";
$lang->doc->noticeAcl['lib']['product']['custom']    = "Accesible para los usuarios con permiso de acceso al {Slang-productCommon} seleccionado y para los usuarios de la lista blanca.";
$lang->doc->noticeAcl['lib']['project']['default']   = "Accessible for users who with permission to  access to the selected {$lang->projectCommon}.";
$lang->doc->noticeAcl['lib']['project']['open']      = "Accessible for users who with permission to  access to the selected {$lang->projectCommon}.";
$lang->doc->noticeAcl['lib']['project']['private']   = "Accessible for users who with permission to  access to the selected {$lang->projectCommon} and users on the whitelist.";
$lang->doc->noticeAcl['lib']['project']['custom']    = "Accesible para los usuarios de la lista blanca.";
$lang->doc->noticeAcl['lib']['execution']['default'] = "Accessible for users who with permission to  access to the selected {$lang->execution->common}.";
$lang->doc->noticeAcl['lib']['execution']['custom']  = "Accessible for users who with permission to  access to the selected {$lang->execution->common} and users on the whitelist..";
$lang->doc->noticeAcl['lib']['api']['open']          = 'Accesible para todos los usuarios.';
$lang->doc->noticeAcl['lib']['api']['custom']        = 'Accesible para los usuarios de la lista blanca.';
$lang->doc->noticeAcl['lib']['api']['private']       = 'Accesible solo para el creador.';
$lang->doc->noticeAcl['lib']['custom']['open']       = 'Accesible para todos los usuarios.';
$lang->doc->noticeAcl['lib']['custom']['custom']     = 'Accesible para los usuarios de la lista blanca.';
$lang->doc->noticeAcl['lib']['custom']['private']    = 'Accesible solo para el creador.';

$lang->doc->noticeAcl['doc']['open']    = 'Cualquier persona con acceso a la biblioteca de documentos asociada puede acceder a esto.';
$lang->doc->noticeAcl['doc']['custom']  = 'Accesible para los usuarios de la lista blanca.';
$lang->doc->noticeAcl['doc']['private'] = 'Accesible solo para el creador.';

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url       = 'URL';
$lang->doc->placeholder->execution = 'En la biblioteca del proyecto si no hay ejecución.';

$lang->doc->summary = "<strong>%s</strong> archivos en esta página con un tamaño total de <strong>%s</strong>. <strong>%s</strong>: ";
$lang->doc->ge      = ':';
$lang->doc->point   = '.';

$lang->doc->libDropdown['editLib']       = 'Editar biblioteca';
$lang->doc->libDropdown['deleteLib']     = 'Eliminar biblioteca';
$lang->doc->libDropdown['editSpace']     = 'Editar espacio';
$lang->doc->libDropdown['deleteSpace']   = 'Eliminar espacio';
$lang->doc->libDropdown['addModule']     = 'Agregar directorio';
$lang->doc->libDropdown['addSameModule'] = 'Agregar directorio hermano';
$lang->doc->libDropdown['addSubModule']  = 'Agregar subdirectorio';
$lang->doc->libDropdown['editModule']    = 'Editar directorio';
$lang->doc->libDropdown['delModule']     = 'Eliminar directorio';

$lang->doc->featureBar['tableContents']['all']   = 'Todos';
$lang->doc->featureBar['tableContents']['draft'] = 'Borrador';

$lang->doc->featureBar['myspace']['all']   = 'Todos';
$lang->doc->featureBar['myspace']['draft'] = 'Borrador';

$lang->doc->showDocList[1] = 'Sí';
$lang->doc->showDocList[0] = 'No';

$lang->doc->whitelistDeny['product']   = "<i class='icon pr-1 text-important icon-exclamation'></i>El usuario<span class='px-1 text-important'>%s</span> no tiene permisos de acceso al producto y no puede ver el documento. Configure los permisos de acceso al producto para resolverlo.";
$lang->doc->whitelistDeny['project']   = "<i class='icon pr-1 text-important icon-exclamation'></i>El usuario<span class='px-1 text-important'>%s</span> no tiene permisos de acceso al proyecto y no puede ver el documento. Configure los permisos de acceso al proyecto para resolverlo.";
$lang->doc->whitelistDeny['execution'] = "<i class='icon pr-1 text-important icon-exclamation'></i>El usuario<span class='px-1 text-important'>%s</span> no tiene permisos de acceso a la ejecución y no puede ver el documento. Configure los permisos de acceso a la ejecución para resolverlo.";
$lang->doc->whitelistDeny['doc']       = "<i class='icon pr-1 text-important icon-exclamation'></i>El usuario<span class='px-1 text-important'>%s</span> no tiene permisos de acceso a la biblioteca y no puede ver el documento. Configure los permisos de acceso a la biblioteca para resolverlo.";

$lang->doc->filterTypes[] = array('all', 'Todos');
$lang->doc->filterTypes[] = array('draft', 'Borrador');
$lang->doc->filterTypes[] = array('collect', 'Mi colección');
$lang->doc->filterTypes[] = array('createdByMe', 'Creado por mí');
$lang->doc->filterTypes[] = array('editedByMe', 'Editado por mí');

$lang->doc->fileFilterTypes[] = array('all', 'Todos');
$lang->doc->fileFilterTypes[] = array('addedByMe', 'Agregado por mí');

$lang->doc->productFilterTypes[] = array('all',  'Todos');
$lang->doc->productFilterTypes[] = array('mine', 'Administrado por mí');

$lang->doc->projectFilterTypes[] = array('all', 'Todos');
$lang->doc->projectFilterTypes[] = array('mine', 'Involucrado');

$lang->doc->spaceFilterTypes[] = array('all', 'Todos');

$lang->doc->manageScope        = 'Administrar alcance';
$lang->doc->browseTemplate     = 'Galería de plantillas';
$lang->doc->createTemplate     = 'Crear plantilla de documento';
$lang->doc->editTemplate       = 'Editar plantilla de documento';
$lang->doc->moveTemplate       = 'Mover plantilla de documento';
$lang->doc->deleteTemplate     = 'Eliminar plantilla de documento';
$lang->doc->viewTemplate       = 'Detalles de la plantilla de documento';
$lang->doc->addTemplateType    = 'Crear categoría de plantilla';
$lang->doc->editTemplateType   = 'Editar categoría de plantilla';
$lang->doc->deleteTemplateType = 'Eliminar categoría de plantilla';
$lang->doc->sortTemplate       = 'Ordenar';

$lang->doc->docLang                              = new stdClass();
$lang->doc->docLang->cancel                      = $lang->cancel;
$lang->doc->docLang->export                      = $lang->export;
$lang->doc->docLang->exportWord                  = "Exportar Word";
$lang->doc->docLang->exportPdf                   = "Exportar PDF";
$lang->doc->docLang->exportImage                 = "Exportar imagen";
$lang->doc->docLang->exportHtml                  = "Exportar HTML";
$lang->doc->docLang->exportMarkdown              = "Exportar Markdown";
$lang->doc->docLang->exportJSON                  = "Exportar copia de seguridad (.json)";
$lang->doc->docLang->importMarkdown              = "Importar Markdown";
$lang->doc->docLang->importConfluence            = "Importar almacenamiento de Confluence";
$lang->doc->docLang->importJSON                  = "Importar copia de seguridad (.json)";
$lang->doc->docLang->importConfirm               = "La importación sobrescribirá el contenido existente. ¿Desea continuar?";
$lang->doc->docLang->settings                    = $lang->settings;
$lang->doc->docLang->save                        = $lang->save;
$lang->doc->docLang->createSpace                 = $lang->doc->createSpace;
$lang->doc->docLang->createLib                   = $lang->doc->createLib;
$lang->doc->docLang->actions                     = $lang->doc->libDropdown;
$lang->doc->docLang->moveTo                      = $lang->doc->moveTo;
$lang->doc->docLang->create                      = $lang->doc->createAB;
$lang->doc->docLang->createDoc                   = $lang->doc->create;
$lang->doc->docLang->editDoc                     = $lang->doc->edit;
$lang->doc->docLang->effort                      = $lang->doc->effort;
$lang->doc->docLang->deleteDoc                   = $lang->doc->delete;
$lang->doc->docLang->uploadDoc                   = $lang->doc->uploadDoc;
$lang->doc->docLang->createList                  = $lang->doc->createList;
$lang->doc->docLang->confirmDelete               = $lang->doc->confirmDelete;
$lang->doc->docLang->confirmDeleteWithSub        = $lang->doc->confirmDeleteWithSub;
$lang->doc->docLang->confirmDeleteLib            = $lang->doc->confirmDeleteLib;
$lang->doc->docLang->confirmDeleteSpace          = $lang->doc->confirmDeleteSpace;
$lang->doc->docLang->confirmDeleteModule         = $lang->doc->confirmDeleteModule;
$lang->doc->docLang->confirmDeleteModuleWithSub  = $lang->doc->confirmDeleteModuleWithSub;
$lang->doc->docLang->confirmDeleteChapter        = $lang->doc->confirmDeleteChapter;
$lang->doc->docLang->confirmDeleteChapterWithSub = $lang->doc->confirmDeleteChapterWithSub;
$lang->doc->docLang->collect                     = $lang->doc->collect;
$lang->doc->docLang->edit                        = $lang->doc->edit;
$lang->doc->docLang->delete                      = $lang->doc->delete;
$lang->doc->docLang->cancelCollection            = $lang->doc->cancelCollection;
$lang->doc->docLang->moveDoc                     = $lang->doc->moveDocAction;
$lang->doc->docLang->copyDoc                     = $lang->doc->copyDocAction;
$lang->doc->docLang->moveTo                      = $lang->doc->moveTo;
$lang->doc->docLang->moveLib                     = $lang->doc->moveLibAction;
$lang->doc->docLang->moduleName                  = $lang->doc->catalogName;
$lang->doc->docLang->saveDraft                   = $lang->doc->saveDraft;
$lang->doc->docLang->template                    = $lang->doc->template;
$lang->doc->docLang->release                     = $lang->doc->release;
$lang->doc->docLang->batchMove                   = $lang->doc->batchMove;
$lang->doc->docLang->filterTypes                 = $lang->doc->filterTypes;
$lang->doc->docLang->fileFilterTypes             = $lang->doc->fileFilterTypes;
$lang->doc->docLang->productFilterTypes          = $lang->doc->productFilterTypes;
$lang->doc->docLang->projectFilterTypes          = $lang->doc->projectFilterTypes;
$lang->doc->docLang->spaceFilterTypes            = $lang->doc->spaceFilterTypes;
$lang->doc->docLang->sortCatalog                 = $lang->doc->sortCatalog;
$lang->doc->docLang->sortDoclib                  = $lang->doc->sortDoclib;
$lang->doc->docLang->sortDoc                     = $lang->doc->sortDoc;
$lang->doc->docLang->errorOccurred               = $lang->doc->errorOccurred;
$lang->doc->docLang->selectLibFirst              = $lang->doc->selectLibFirst;
$lang->doc->docLang->createLibFirst              = $lang->doc->createLibFirst;
$lang->doc->docLang->space                       = 'Espacio';
$lang->doc->docLang->spaceTypeNames              = array();
$lang->doc->docLang->spaceTypeNames['mine']      = $lang->doc->docLang->space;
$lang->doc->docLang->spaceTypeNames['product']   = $lang->productCommon . $lang->doc->docLang->space;
$lang->doc->docLang->spaceTypeNames['project']   = $lang->projectCommon . $lang->doc->docLang->space;
$lang->doc->docLang->spaceTypeNames['execution'] = $lang->executionCommon . $lang->doc->docLang->space;
$lang->doc->docLang->spaceTypeNames['api']       = $lang->doc->docLang->space;
$lang->doc->docLang->spaceTypeNames['custom']    = $lang->doc->docLang->space;
$lang->doc->docLang->enterSpace                  = 'Entrar al espacio';
$lang->doc->docLang->noDocs                      = 'Sin documentos.';
$lang->doc->docLang->noFiles                     = 'Sin archivos.';
$lang->doc->docLang->noLibs                      = 'Sin bibliotecas de documentos.';
$lang->doc->docLang->noModules                   = 'Sin directorios.';
$lang->doc->docLang->docsTotalInfo               = 'Total: {0} documento(s).';
$lang->doc->docLang->createSpace                 = $lang->doc->createSpace;
$lang->doc->docLang->createModule                = $lang->doc->addCatalog;
$lang->doc->docLang->leaveEditingConfirm         = 'Tiene cambios sin guardar. ¿Desea salir?';
$lang->doc->docLang->saveDocFailed               = 'No se pudo guardar el documento. Inténtelo de nuevo más tarde.';
$lang->doc->docLang->loadingDocsData             = 'Cargando datos del documento...';
$lang->doc->docLang->loadDataFailed              = 'No se pudieron cargar los datos.';
$lang->doc->docLang->noSpaceTip                  = 'Aquí no hay nada todavía. Cree un espacio para comenzar. ';
$lang->doc->docLang->searchModulePlaceholder     = 'Buscar directorios';
$lang->doc->docLang->searchDocPlaceholder        = 'Buscar documentos';
$lang->doc->docLang->searchChapterPlaceholder    = 'Buscar capítulos';
$lang->doc->docLang->searchSpacePlaceholder      = 'Buscar espacios';
$lang->doc->docLang->searchLibPlaceholder        = 'Buscar bibliotecas';
$lang->doc->docLang->searchPlaceholder           = 'Buscar';
$lang->doc->docLang->newDocLabel                 = 'Nuevo';
$lang->doc->docLang->editingDocLabel             = 'Editando';
$lang->doc->docLang->filesLib                    = $lang->doclib->files;
$lang->doc->docLang->currentDocVersionHint       = 'Versión actual (clic para cambiar)';
$lang->doc->docLang->viewsCount                  = $lang->doc->views;
$lang->doc->docLang->keywords                    = $lang->doc->keywords;
$lang->doc->docLang->keywordsPlaceholder         = $lang->doc->keywordsTips;
$lang->doc->docLang->loadingDocTip               = 'Cargando documento...';
$lang->doc->docLang->loadingEditorTip            = 'Cargando editor...';
$lang->doc->docLang->pasteImageTip               = $lang->noticePasteImg;
$lang->doc->docLang->downloadFile                = 'Descargar';
$lang->doc->docLang->loadingFilesTip             = 'Cargando archivo...';
$lang->doc->docLang->recTotalFormat              = $lang->pager->totalCountAB;
$lang->doc->docLang->recPerPageFormat            = $lang->pager->pageSizeAB;
$lang->doc->docLang->firstPage                   = $lang->pager->firstPage;
$lang->doc->docLang->prevPage                    = $lang->pager->previousPage;
$lang->doc->docLang->nextPage                    = $lang->pager->nextPage;
$lang->doc->docLang->lastPage                    = $lang->pager->lastPage;
$lang->doc->docLang->docOutline                  = 'Esquema';
$lang->doc->docLang->noOutline                   = 'Sin esquema.';
$lang->doc->docLang->loading                     = $lang->loading;
$lang->doc->docLang->libNamePrefix               = 'Biblioteca';
$lang->doc->docLang->colon                       = $lang->colon;
$lang->doc->docLang->createdByUserAt             = 'Creado por {name} el {time}';
$lang->doc->docLang->editedByUserAt              = 'Editado por {name} el {time}';
$lang->doc->docLang->docInfo                     = 'Información del documento';
$lang->doc->docLang->docStatus                   = $lang->doc->status;
$lang->doc->docLang->creator                     = $lang->doc->addedBy;
$lang->doc->docLang->createDate                  = $lang->doc->addedDate;
$lang->doc->docLang->modifier                    = $lang->doc->editedBy;
$lang->doc->docLang->editDate                    = $lang->doc->editedDate;
$lang->doc->docLang->collectCount                = $lang->doc->docCollects;
$lang->doc->docLang->collected                   = 'Agregado a favoritos';
$lang->doc->docLang->history                     = $lang->history;
$lang->doc->docLang->updateHistory               = $lang->doc->updateInfo;
$lang->doc->docLang->updateInfoFormat            = 'Actualizado por {name} el {time}';
$lang->doc->docLang->noUpdateInfo                = 'Sin historial de actualizaciones.';
$lang->doc->docLang->enterFullscreen             = 'Pantalla completa';
$lang->doc->docLang->exitFullscreen              = 'Salir de pantalla completa';
$lang->doc->docLang->collapse                    = 'Contraer';
$lang->doc->docLang->draft                       = $lang->doc->statusList['draft'];
$lang->doc->docLang->released                    = $lang->doc->statusList['normal'];
$lang->doc->docLang->attachment                  = $lang->doc->files;
$lang->doc->docLang->docTitleRequired            = 'El título del documento es obligatorio. ';
$lang->doc->docLang->docTitlePlaceholder         = 'Ingrese el título del documento.';
$lang->doc->docLang->noDataYet                   = 'Sin datos.';
$lang->doc->docLang->position                    = $lang->doc->position;
$lang->doc->docLang->relateObject                = 'Elementos relacionados';
$lang->doc->docLang->showHasDocsOnlyProduct      = 'Mostrar solo productos con documentos';
$lang->doc->docLang->showHasDocsOnlyProject      = 'Mostrar solo proyectos con documentos';
$lang->doc->docLang->showClosedProduct           = 'Mostrar productos cerrados';
$lang->doc->docLang->showClosedProject           = 'Mostrar proyectos cerrados';
$lang->doc->docLang->noProducts                  = 'Sin productos.';
$lang->doc->docLang->noProjects                  = 'Sin proyectos.';
$lang->doc->docLang->productMine                 = 'Administrado por mí';
$lang->doc->docLang->projectMine                 = 'Mi participación';
$lang->doc->docLang->productOther                = 'Otros';
$lang->doc->docLang->projectOther                = 'Otros';
$lang->doc->docLang->accessDenied                = $lang->doc->accessDenied;
$lang->doc->docLang->convertToNewDoc             = 'Convertir documento';
$lang->doc->docLang->convertToNewDocConfirm      = 'El nuevo formato de documento usa un editor moderno basado en bloques para una experiencia mejorada. ¿Seguro que desea convertir esta plantilla al nuevo formato? Una vez guardada como borrador o publicada, no podrá volver al editor anterior.';
$lang->doc->docLang->created                     = 'created';
$lang->doc->docLang->edited                      = 'edited';
$lang->doc->docLang->notSaved                    = 'Sin guardar';
$lang->doc->docLang->oldDocEditingTip            = 'Este documento se creó con el editor anterior y ahora se está editando con el nuevo editor. Al guardar se convertirá al nuevo formato.';
$lang->doc->docLang->switchToOldEditor           = 'Cambiar al editor anterior';
$lang->doc->docLang->zentaoList                  = $lang->doc->zentaoList;
$lang->doc->docLang->list                        = $lang->doc->list;
$lang->doc->docLang->loadingFile                 = 'Descargando imágenes...';
$lang->doc->docLang->needEditable                = $lang->doc->needEditable;
$lang->doc->docLang->addChapter                  = $lang->doc->addChapter;
$lang->doc->docLang->editChapter                 = $lang->doc->editChapter;
$lang->doc->docLang->sortChapter                 = $lang->doc->sortChapter;
$lang->doc->docLang->deleteChapter               = $lang->doc->deleteChapter;
$lang->doc->docLang->addSubChapter               = $lang->doc->addSubChapter;
$lang->doc->docLang->addSameChapter              = $lang->doc->addSameChapter;
$lang->doc->docLang->addSubDoc                   = $lang->doc->addSubDoc;
$lang->doc->docLang->chapterName                 = $lang->doc->chapterName;
$lang->doc->docLang->autoSaveHint                = 'Auto-saved.';
$lang->doc->docLang->editing                     = 'Editando';
$lang->doc->docLang->restoreVersionHint          = 'Restaurar a la versión';
$lang->doc->docLang->restoreVersion              = 'Restaurar';
$lang->doc->docLang->restoreVersionConfirm       = 'Se creará una nueva versión con el contenido de la versión {version}. ¿Desea continuar?';
$lang->doc->docLang->frozenTips                  = $lang->doc->frozenTips;
$lang->doc->docLang->aiTask                      = 'Tarea de compañero de IA';

$lang->docTemplate->types = array();
$lang->docTemplate->types['plan']   = 'Plan';
$lang->docTemplate->types['story']  = 'Historia';
$lang->docTemplate->types['design'] = 'Diseño';
$lang->docTemplate->types['dev']    = 'Desarrollo';
$lang->docTemplate->types['test']   = 'Prueba';
$lang->docTemplate->types['desc']   = 'Descripción';
$lang->docTemplate->types['other']  = 'Otros';

$lang->docTemplate->builtInScopes = array();
$lang->docTemplate->builtInScopes['rnd']  = array();
$lang->docTemplate->builtInScopes['or']   = array();
$lang->docTemplate->builtInScopes['lite'] = array();
$lang->docTemplate->builtInScopes['rnd']['product']   = 'Producto';
$lang->docTemplate->builtInScopes['rnd']['project']   = 'Proyecto';
$lang->docTemplate->builtInScopes['rnd']['execution'] = 'Ejecución';
$lang->docTemplate->builtInScopes['rnd']['personal']  = 'Personal';
$lang->docTemplate->builtInScopes['or']['market']     = 'Marketing';
$lang->docTemplate->builtInScopes['or']['product']    = 'Producto';
$lang->docTemplate->builtInScopes['or']['personal']   = 'Personal';
$lang->docTemplate->builtInScopes['lite']['project']  = 'Proyecto';
$lang->docTemplate->builtInScopes['lite']['personal'] = 'Personal';
