<?php
/**
 * The api module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     api
 * @version     $Id: English.php 824 2010-05-02 15:32:06Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->api->common   = 'API';
$lang->api->getModel = 'API de súper modelo';
$lang->api->sql      = 'API de consulta SQL';
$lang->api->manage   = 'Gestión de API';

$lang->api->index               = 'Espacio de API';
$lang->api->view                = 'Detalles de la API';
$lang->api->editLib             = 'Editar biblioteca';
$lang->api->releases            = 'Gestión de versiones';
$lang->api->deleteRelease       = 'Eliminar versión';
$lang->api->deleteLib           = 'Eliminar biblioteca de API';
$lang->api->createRelease       = 'Publicar API';
$lang->api->createLib           = 'Crear biblioteca de API';
$lang->api->createApi           = 'Crear documento de API';
$lang->api->createAB            = 'Crear';
$lang->api->createDemo          = 'Importar biblioteca de API de ZenTao';
$lang->api->edit                = 'Editar API';
$lang->api->delete              = 'Eliminar API';
$lang->api->position            = 'Ubicación';
$lang->api->startLine           = "%s, línea %s";
$lang->api->desc                = 'Descripción';
$lang->api->debug               = 'Depurar';
$lang->api->submit              = 'Enviar';
$lang->api->url                 = 'URL de la solicitud';
$lang->api->result              = 'Respuesta';
$lang->api->status              = 'Estado';
$lang->api->data                = 'Contenido';
$lang->api->noParam             = 'No se requieren parámetros de entrada para la depuración GET.';
$lang->api->noModule            = 'No se encontraron directorios en esta biblioteca. Cree primero un directorio.';
$lang->api->post                = 'Consulte el formulario para depurar POST.';
$lang->api->noUniqueName        = 'El nombre de la biblioteca ya existe.';
$lang->api->noUniqueVersion     = 'La versión ya existe.';
$lang->api->createStruct        = 'Crear estructura de datos';
$lang->api->editStruct          = 'Editar estructura de datos';
$lang->api->deleteStruct        = 'Eliminar estructura de datos';
$lang->api->create              = 'Crear API';
$lang->api->title               = 'Nombre de la API';
$lang->api->pageTitle           = 'Biblioteca de API';
$lang->api->module              = 'Directorio';
$lang->api->apiDoc              = 'API';
$lang->api->manageType          = 'Administrar directorio';
$lang->api->managePublish       = 'Administrar versión';
$lang->api->doing               = 'En desarrollo';
$lang->api->done                = 'Completado';
$lang->api->basicInfo           = 'Información básica';
$lang->api->apiDesc             = 'Descripción';
$lang->api->confirmDelete       = "¿Seguro que desea eliminar esta API?";
$lang->api->confirmDeleteLib    = "¿Seguro que desea eliminar esta biblioteca?";
$lang->api->confirmDeleteStruct = "¿Seguro que desea eliminar esta estructura de datos?";
$lang->api->filterStruct        = "Rellenar desde la estructura de datos";
$lang->api->defaultVersion      = "Versión actual";
$lang->api->latestVersion       = 'Última versión';
$lang->api->zentaoAPI           = "Documentación de la API de Zentao V1";
$lang->api->search              = "Buscar";
$lang->api->allLibs             = "Todas las bibliotecas";
$lang->api->noLinked            = "API independiente";
$lang->api->apiCatalog          = 'Directorio de API';
$lang->api->addCatalog          = 'Agregar directorio';
$lang->api->editCatalog         = 'Editar directorio';
$lang->api->sortCatalog         = 'Ordenar directorios';
$lang->api->deleteCatalog       = 'Eliminar directorio';

/* Common access control lang. */
$lang->api->whiteList          = 'Lista blanca';
$lang->api->aclList['open']    = "Público (Accesible para los usuarios con permiso de vista de documentos.)";
$lang->api->aclList['default'] = "Predeterminado (accesible para usuarios con permisos de acceso a %s.)";
$lang->api->aclList['private'] = "Privado (Accesible solo para el creador y los usuarios de la lista blanca.)";
$lang->api->group              = 'Grupo';
$lang->api->user               = 'Usuario';

$lang->api->noticeAcl = array(
    'open'    => 'Accesible para todos los usuarios',
    'custom'  => 'Accesible para los usuarios de la lista blanca',
    'private' => 'Accesible solo para el creador',
);

/* fields of struct */
$lang->struct = new stdClass();

$lang->struct->add             = 'Agregar';
$lang->struct->field           = 'Campo';
$lang->struct->paramsType      = 'Tipo';
$lang->struct->required        = 'Obligatorio';
$lang->struct->desc            = 'Descripción';
$lang->struct->descPlaceholder = 'Descripción del parámetro';
$lang->struct->action          = 'Acciones';
$lang->struct->addSubField     = 'Agregar campo hijo';
$lang->struct->list            = 'Lista de estructuras de datos';
$lang->struct->type            = 'Tipo de cuerpo';

$lang->struct->typeOptions = array(
    'formData' => 'FormData',
    'json'     => 'JSON',
    'array'    => 'Arreglo',
    'object'   => 'Objeto',
);

/* fields of form */
$lang->api->struct             = 'Estructura de datos';
$lang->api->structName         = 'Nombre';
$lang->api->structType         = 'Tipo';
$lang->api->structAttr         = 'Propiedad';
$lang->api->structAddedBy      = 'Creador';
$lang->api->structAddedDate    = 'Creado el';
$lang->api->name               = 'Nombre de la biblioteca';
$lang->api->baseUrl            = 'URL base';
$lang->api->baseUrlDesc        = 'URL o ruta, p. ej., http://api.zentao.com o /v1.';
$lang->api->desc               = 'Descripción';
$lang->api->control            = 'Control de acceso';
$lang->api->noLib              = 'Aún no hay bibliotecas de API.';
$lang->api->noApi              = 'Aún no hay API.';
$lang->api->noStruct           = 'Aún no hay estructuras de datos.';
$lang->api->noRelease          = 'Aún no hay versiones.';
$lang->api->lib                = 'Biblioteca de API';
$lang->api->apiList            = 'Lista de API';
$lang->api->formTitle          = 'Nombre de la API';
$lang->api->path               = 'Ruta de la solicitud';
$lang->api->protocol           = 'Protocolo';
$lang->api->method             = 'Método';
$lang->api->requestType        = 'Formato de la solicitud';
$lang->api->status             = 'Estado de desarrollo';
$lang->api->owner              = 'Gerente';
$lang->api->paramsExample      = 'Ejemplo de solicitud';
$lang->api->header             = 'Encabezado de la solicitud';
$lang->api->query              = 'Parámetros de la solicitud';
$lang->api->params             = 'Cuerpo de la solicitud';
$lang->api->response           = 'Respuesta';
$lang->api->responseExample    = 'Ejemplo de respuesta';
$lang->api->id                 = 'ID';
$lang->api->addedBy            = 'Creador';
$lang->api->addedDate          = 'Creado el';
$lang->api->editedBy           = 'Editado por';
$lang->api->editedDate         = 'Editado el';
$lang->api->version            = 'Versión';
$lang->api->res                = new stdClass();
$lang->api->res->name          = 'Nombre';
$lang->api->res->desc          = 'Descripción';
$lang->api->res->type          = 'Tipo';
$lang->api->req                = new stdClass();
$lang->api->req->name          = 'Nombre';
$lang->api->req->desc          = 'Descripción';
$lang->api->req->type          = 'Tipo';
$lang->api->req->required      = 'Obligatorio';
$lang->api->field              = 'Campo';
$lang->api->scope              = 'Ubicación';
$lang->api->paramsType         = 'Tipo';
$lang->api->required           = 'Obligatorio';
$lang->api->default            = 'Predeterminado';
$lang->api->desc               = 'Descripción';
$lang->api->customType         = 'Estructura personalizada';
$lang->api->format             = 'Formato';
$lang->api->libType            = 'Tipo de biblioteca de API';
$lang->api->product            = $lang->productCommon;
$lang->api->project            = $lang->projectCommon;
$lang->api->apiTotalInfo       = 'Total de %d API';
$lang->api->showNotEmpty       = 'Mostrar solo los que tienen API';
$lang->api->showClosed         = 'Incluir cerrados';

$lang->api->methodOptions      = array(
    'GET'     => 'GET',
    'POST'    => 'POST',
    'PUT'     => 'PUT',
    'DELETE'  => 'DELETE',
    'PATCH'   => 'PATCH',
    'OPTIONS' => 'OPCIONES',
    'HEAD'    => 'HEAD'
);

$lang->api->protocalOptions = array();
$lang->api->protocalOptions['HTTP']  = 'HTTP';
$lang->api->protocalOptions['HTTPS'] = 'HTTPS';
$lang->api->protocalOptions['WS']    = 'WS';
$lang->api->protocalOptions['WSS']   = 'WSS';

$lang->api->requestTypeOptions = array();
$lang->api->requestTypeOptions['application/json']                  = 'application/json';
$lang->api->requestTypeOptions['application/x-www-form-urlencoded'] = 'application/x-www-form-urlencoded';
$lang->api->requestTypeOptions['multipart/form-data']               = 'multipart/form-data';

$lang->api->libTypeList = array();
$lang->api->libTypeList['product'] = $lang->productCommon . ' API';
$lang->api->libTypeList['project'] = $lang->projectCommon . ' API';
$lang->api->libTypeList['nolink']  = 'API independiente';

$lang->api->statusOptions      = array(
    'done'   => 'Completado',
    'doing'  => 'En desarrollo',
    'hidden' => 'Oculto'
);
$lang->api->paramsScopeOptions = array(
    'formData' => 'formData',
    'path'     => 'path',
    'query'    => 'query',
    'body'     => 'body',
    'header'   => 'header',
    'cookie'   => 'cookie',
);
/* Api global common params */
$lang->api->paramsTypeOptions = array(
    'object'   => 'object',
    'array'    => 'array',
    'string'   => 'string',
    'date'     => 'date',
    'datetime' => 'datetime',
    'boolean'  => 'boolean',
    'int'      => 'int',
    'long'     => 'long',
    'float'    => 'float',
    'double'   => 'double',
    'decimal'  => 'decimal'
);

$lang->api->boolList = array(false => 'No', true => 'Sí', '' => 'No');

/* Api params */
$lang->api->paramsTypeCustomOptions = array('file' => 'file', 'ref' => 'ref');

$lang->api->structParamsOptons   = array_merge($lang->api->paramsTypeOptions, array('file' => 'file', 'ref' => 'ref'));
$lang->api->allParamsTypeOptions = array_merge($lang->api->paramsTypeOptions, $lang->api->paramsTypeCustomOptions);
$lang->api->requiredOptions      = array(0 => 'No', 1 => 'Sí');

$lang->apistruct = new stdClass();
$lang->apistruct->name = 'Nombre de la estructura';

$lang->api_lib_release = new stdClass();
$lang->api_lib_release->version = 'Versión';
$lang->api_lib_release->desc    = 'Descripción';

$lang->api->error = new stdclass();
$lang->api->error->onlySelect = 'Solo se permiten consultas SELECT en la API de SQL.';
$lang->api->error->disabled   = 'Esta función está deshabilitada por motivos de seguridad. Para habilitarla, modifique el elemento de configuración %s en el directorio config.';
$lang->api->error->notInput   = 'Por ahora no se admite la depuración debido a limitaciones en el tipo de parámetro del campo.';

$lang->api->filterTypes[] = array('all', 'Todos');
$lang->api->filterTypes[] = array('createdByMe', 'Creado por mí');
$lang->api->filterTypes[] = array('editedByMe', 'Editado por mí');

$lang->api->homeFilterTypes['nolink']  = $lang->api->libTypeList['nolink'];
$lang->api->homeFilterTypes['product'] = $lang->api->libTypeList['product'];
$lang->api->homeFilterTypes['project'] = $lang->api->libTypeList['project'];
