<?php

/**
 * The ai module en lang file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.zentao.net)
 * @license     ZPL(https://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Wenrui LI <liwenrui@easycorp.ltd>
 * @package     ai
 * @link        https://www.zentao.net
 */
$lang->ai->common = 'Configuración de IA';

/* Definitions of table columns, used to sprintf error messages to dao::$errors. */
$lang->prompt  = new stdclass();
$lang->prompt->name             = 'Nombre';
$lang->prompt->desc             = 'Descripción';
$lang->prompt->model            = 'Modelo predeterminado';
$lang->prompt->module           = 'Módulo';
$lang->prompt->source           = 'Fuente de datos';
$lang->prompt->targetForm       = 'Formulario de destino';
$lang->prompt->purpose          = 'Propósito';
$lang->prompt->elaboration      = 'Elaboración';
$lang->prompt->knowledgeLib     = 'Biblioteca de conocimiento';
$lang->prompt->role             = 'Rol';
$lang->prompt->characterization = 'Caracterización';
$lang->prompt->status           = 'Estado';
$lang->prompt->createdBy        = 'Creador';
$lang->prompt->createdDate      = 'Fecha de creación';
$lang->prompt->editedBy         = 'Editado por';
$lang->prompt->editedDate       = 'Fecha de edición';
$lang->prompt->deleted          = 'Eliminado';

/* Lang for privs, keys are paired with privlang items. */
$lang->ai->modelBrowse             = 'Explorar modelos de lenguaje';
$lang->ai->modelView               = 'Ver modelo de lenguaje';
$lang->ai->modelCreate             = 'Crear modelo de lenguaje';
$lang->ai->modelEdit               = 'Editar modelo de lenguaje';
$lang->ai->modelEnable             = 'Habilitar modelo de lenguaje';
$lang->ai->modelDisable            = 'Deshabilitar modelo de lenguaje';
$lang->ai->modelDelete             = 'Eliminar modelo de lenguaje';
$lang->ai->modelTestConnection     = 'Probar conexión del modelo';
$lang->ai->promptCreate            = 'Crear agente ZenTao';
$lang->ai->promptEdit              = 'Editar agente ZenTao';
$lang->ai->promptDelete            = 'Eliminar agente ZenTao';
$lang->ai->promptBasicInfo         = 'Información básica de ZenTao Agent';
$lang->ai->promptAssignRole        = 'Asignar rol de agente de ZenTao';
$lang->ai->promptSelectDataSource  = 'Seleccionar datos del agente ZenTao';
$lang->ai->promptSetPurpose        = 'Establecer propósito del agente ZenTao';
$lang->ai->promptSetTargetForm     = 'Establecer formulario de destino del agente ZenTao';
$lang->ai->promptFinalize          = 'Finalizar agente de ZenTao';
$lang->ai->promptAudit             = 'Auditar agente de ZenTao';
$lang->ai->promptPublish           = 'Publicar agente de ZenTao';
$lang->ai->promptUnpublish         = 'Despublicar';
$lang->ai->promptBrowse            = 'Explorar agentes de ZenTao';
$lang->ai->promptView              = 'Ver ZenTao Agent';
$lang->ai->promptExecute           = 'Ejecutar agente de ZenTao';
$lang->ai->promptExecutionReset    = 'Restablecer ejecución';
$lang->ai->roleTemplates           = 'Administrar plantillas de roles';
$lang->ai->chat                    = 'Chat';
$lang->ai->createMiniProgram       = 'Crear agente general';
$lang->ai->editMiniProgram         = 'Editar agente general';
$lang->ai->configuredMiniProgram   = 'Agente general configurado';
$lang->ai->testMiniProgram         = 'Agente general de pruebas';
$lang->ai->miniProgramList         = 'Explorar lista de agentes generales';
$lang->ai->miniProgramView         = 'Ver detalles del agente general';
$lang->ai->publishMiniProgram      = 'Publicar agente general';
$lang->ai->unpublishMiniProgram    = 'Deshabilitar agente general';
$lang->ai->publishSuccess          = 'Publicación exitosa';
$lang->ai->unpublishSuccess        = 'Despublicación exitosa';
$lang->ai->deleteMiniProgram       = 'Eliminar agente general';
$lang->ai->exportMiniProgram       = 'Exportar agente general';
$lang->ai->importMiniProgram       = 'Importar agente general';
$lang->ai->editMiniProgramCategory = 'Administrar grupo';
$lang->ai->assistants              = 'Explorar asistentes de IA';
$lang->ai->assistantView           = 'Ver asistente de IA';
$lang->ai->assistantCreate         = 'Crear asistente de IA';
$lang->ai->assistantEdit           = 'Editar asistente de IA';
$lang->ai->assistantPublish        = 'Publicar asistente de IA';
$lang->ai->assistantWithdraw       = 'Retirar asistente de IA';
$lang->ai->assistantDelete         = 'Eliminar asistente de IA';

$lang->ai->name                   = 'Nombre';
$lang->ai->store                  = 'Tienda';
$lang->ai->export                 = 'Exportar';
$lang->ai->import                 = 'Importar';
$lang->ai->saveFail               = 'Error al guardar';
$lang->ai->jsonParseFail          = 'Error al analizar JSON: %s';
$lang->ai->installPackage         = 'Paquete de instalación';
$lang->ai->toPublish              = 'Publicar después de la instalación';
$lang->ai->toZentaoStoreAIPage    = 'Haga clic para ir a la página de agentes generales de la tienda oficial de aplicaciones de ZenTao.';
$lang->ai->exitManage             = 'Salir de la gestión';

$lang->ai->chatPlaceholderMessage = '¡Hola, soy Adao, tu asistente de IA en ZenTao!';
$lang->ai->chatPlaceholderInput   = 'escriba aquí...';
$lang->ai->chatSystemMessage      = 'Eres Adao, el asistente de IA y la mascota de ZenTao. Puedes responder preguntas y conversar con los usuarios. Actualmente te encuentras dentro del software de gestión de proyectos ZenTao.';
$lang->ai->chatSend               = 'Enviar';
$lang->ai->chatReset              = 'Restablecer';
$lang->ai->chatNoResponse         = 'Algo salió mal, <a id="retry" class="text-blue">haga clic aquí para reintentar</a>.';
$lang->ai->noMiniProgram          = 'El agente general que visitó no existe.';

$lang->ai->nextStep  = 'Siguiente';
$lang->ai->goTesting = 'Ir a pruebas';
$lang->ai->maintenanceGroup = 'Grupo de mantenimiento';

$lang->ai->maintenanceGroupDuplicated = 'El nombre del grupo no puede estar duplicado.';

$lang->ai->requiredList['0'] = 'No obligatorio';
$lang->ai->requiredList['1'] = 'Obligatorio';

$lang->ai->validate = new stdclass();
$lang->ai->validate->noEmpty       = '%s no puede estar vacío.';
$lang->ai->validate->dirtyForm     = 'El paso de diseño de %s ha cambiado. ¿Desea guardar y regresar?';
$lang->ai->validate->nameNotUnique = 'Ya existe un agente de ZenTao con el mismo nombre, cambie el nombre.';

$lang->ai->prompts = new stdclass();
$lang->ai->prompts->common          = 'ZenTao Agent';
$lang->ai->prompts->emptyList       = 'Aún no hay agentes de ZenTao.';
$lang->ai->prompts->create          = 'Crear agente ZenTao';
$lang->ai->prompts->edit            = 'Editar agente ZenTao';
$lang->ai->prompts->id              = 'ID';
$lang->ai->prompts->name            = 'Nombre';
$lang->ai->prompts->description     = 'Descripción';
$lang->ai->prompts->createdBy       = 'Creador';
$lang->ai->prompts->createdDate     = 'Fecha de creación';
$lang->ai->prompts->targetForm      = 'Formulario de destino';
$lang->ai->prompts->funcDesc        = 'Descripción de la función';
$lang->ai->prompts->deleted         = 'Eliminado';
$lang->ai->prompts->stage           = 'Etapa';
$lang->ai->prompts->basicInfo       = 'Información básica';
$lang->ai->prompts->processObject   = 'Objeto de procesamiento';
$lang->ai->prompts->actionObject    = 'Objeto de la operación';
$lang->ai->prompts->actionPurpose   = 'Propósito de la operación';
$lang->ai->prompts->displayPosition = 'Posición de visualización';
$lang->ai->prompts->prompt          = 'Prompt';
$lang->ai->prompts->skill           = 'Habilidad montada';
$lang->ai->prompts->knowledgeLib    = 'Biblioteca de conocimiento montada';
$lang->ai->prompts->editInfo        = 'Editar información';
$lang->ai->prompts->createdBy       = 'Creador';
$lang->ai->prompts->publishedBy     = 'Publicado por';
$lang->ai->prompts->draftedBy       = 'Redactado por';
$lang->ai->prompts->lastEditor      = 'Último editor';
$lang->ai->prompts->modelNeutral    = 'Modelo neutral';

$lang->ai->prompts->viewTypeList            = array();
$lang->ai->prompts->viewTypeList['list']    = 'Vista de lista';
$lang->ai->prompts->viewTypeList['card']    = 'Vista de tarjetas';

$lang->ai->prompts->displayPositionList = array();
$lang->ai->prompts->displayPositionList['detail'] = 'Detalle';
$lang->ai->prompts->displayPositionList['form']   = 'Formulario';

$lang->ai->prompts->summary           = 'Hay %s agentes zenTao en esta página.';
$lang->ai->prompts->fieldSeparator    = ', ';
$lang->ai->prompts->pageContext       = 'Contexto de la página actual:';
$lang->ai->prompts->currentFormData   = 'Datos actuales del formulario:';
$lang->ai->prompts->batchFormData     = 'El formulario actual es de creación por lotes, y cada fila contiene los siguientes campos:';
$lang->ai->prompts->fieldDefinition   = 'Definiciones de campos:';
$lang->ai->prompts->targetFormInfo    = '[Información del formulario de destino]';
$lang->ai->prompts->formLabel         = 'Formulario: %s';
$lang->ai->prompts->fillableFields    = 'Campos completables:';
$lang->ai->prompts->requiredField     = 'required';
$lang->ai->prompts->optionsLabel      = 'opciones: ';
$lang->ai->prompts->returnJSONObject  = 'Devuelva un objeto JSON. Las claves deben coincidir con los nombres de campos anteriores. Los campos obligatorios deben tener valor.';
$lang->ai->prompts->returnJSONArray   = 'Devuelva un arreglo JSON. Cada elemento debe corresponder a una fila de la tabla y ser un objeto cuyas claves coincidan con los nombres de campos rellenables anteriores. Los campos obligatorios deben tener valor.';
$lang->ai->prompts->processDataPrefix = "The data to process is as follows:\n%s";
$lang->ai->prompts->useToolResult     = 'Use la herramienta `%s` para devolver el resultado.';

$lang->ai->prompts->action = new stdclass();
$lang->ai->prompts->action->goDesignConfirm  = 'El agente zenTao actual no está completo, ¿desea continuar con el diseño?';
$lang->ai->prompts->action->goDesign         = 'Ir a diseñar';
$lang->ai->prompts->action->draftConfirm     = 'Una vez despublicado, el agente de ZenTao ya no se podrá usar. ¿Está seguro de que desea continuar?';
$lang->ai->prompts->action->design           = 'Diseño';
$lang->ai->prompts->action->test             = 'Prueba';
$lang->ai->prompts->action->edit             = 'Editar';
$lang->ai->prompts->action->publish          = 'Publicar';
$lang->ai->prompts->action->unpublish        = 'Despublicar';
$lang->ai->prompts->action->delete           = 'Eliminar';
$lang->ai->prompts->action->disable          = 'Deshabilitar';
$lang->ai->prompts->action->deleteConfirm    = 'Los agentes zenTao eliminados dejarán de estar disponibles. ¿Está seguro de continuar?';
$lang->ai->prompts->action->publishSuccess   = 'Publicación exitosa';
$lang->ai->prompts->action->unpublishSuccess = 'Despublicación exitosa';
$lang->ai->prompts->action->deleteSuccess    = 'Eliminado correctamente';

/* Steps of prompt creation. */
$lang->ai->prompts->assignRole       = 'Asignar rol';
$lang->ai->prompts->selectDataSource = 'Seleccionar campos de datos';
$lang->ai->prompts->setPurpose       = 'Establecer propósito';
$lang->ai->prompts->setTargetForm    = 'Establecer formulario de destino';
$lang->ai->prompts->finalize         = 'Finalizar';

/* Role assigning. */
$lang->ai->prompts->model               = 'Modelo predeterminado';
$lang->ai->prompts->role                = 'Rol';
$lang->ai->prompts->characterization    = 'Caracterización';
$lang->ai->prompts->rolePlaceholder     = '"Actúa como un <role>"';
$lang->ai->prompts->charPlaceholder     = 'Caracterización detallada de este rol';
$lang->ai->prompts->roleTemplate        = 'Plantilla de rol';
$lang->ai->prompts->roleTemplateTip     = 'Después de usar una plantilla como referencia, modificar el rol o su descripción no afecta a la plantilla.';
$lang->ai->prompts->addRoleTemplate     = 'Agregar plantilla de rol';
$lang->ai->prompts->editRoleTemplate    = 'Editar plantilla de rol';
$lang->ai->prompts->editRoleTemplateTip = 'Editar esta plantilla no afectará sus usos anteriores en los agentes zenTao.';
$lang->ai->prompts->roleAddedSuccess    = 'Rol agregado correctamente.';
$lang->ai->prompts->roleDelConfirm      = 'Eliminar el rol no afecta al rol que ya está en el agente zenTao. ¿Desea eliminarlo?';
$lang->ai->prompts->roleDelSuccess      = 'Rol eliminado correctamente.';
$lang->ai->prompts->roleTemplateSave    = 'Guardar plantilla de rol';
$lang->ai->prompts->roleTemplateSaveList = array();
$lang->ai->prompts->roleTemplateSaveList['save']    = 'Guardar';
$lang->ai->prompts->roleTemplateSaveList['discard'] = 'Descartar';

/* Data source selecting. */
$lang->ai->prompts->selectData       = 'Seleccionar campos';
$lang->ai->prompts->selectDataTip    = 'Seleccione un objeto y sus campos se mostrarán a continuación.';
$lang->ai->prompts->selectedFormat   = 'Seleccionando datos de {0}, {1} campos seleccionados.';
$lang->ai->prompts->nonSelected      = 'No se seleccionó ningún campo.';
$lang->ai->prompts->sortTip          = 'Se sugiere ordenar los campos por prioridad.';
$lang->ai->prompts->object           = 'Objeto';
$lang->ai->prompts->field            = 'Campo';

/* Purpose setting. */
$lang->ai->prompts->purpose        = 'Propósito';
$lang->ai->prompts->purposeTip     = '¿Qué quiero lograr y para alcanzar qué objetivos?';
$lang->ai->prompts->elaboration    = 'Elaboración';
$lang->ai->prompts->elaborationTip = 'Espero que su respuesta llame la atención sobre algunas solicitudes adicionales.';
$lang->ai->prompts->inputPreview   = 'Vista previa de ZenTao Agent';
$lang->ai->prompts->dataPreview    = 'Vista previa de datos del agente ZenTao';
$lang->ai->prompts->rolePreview    = 'Vista previa del agente ZenTao del rol';
$lang->ai->prompts->promptPreview  = 'Vista previa del propósito del agente de ZenTao';

/* Target form selecting. */
$lang->ai->prompts->selectTargetForm    = 'Seleccionar formulario de destino';
$lang->ai->prompts->selectTargetFormTip = 'Los resultados devueltos por los LLM se pueden ingresar directamente en los formularios de AXIS FLOW.';
$lang->ai->prompts->noRedirect          = 'No es necesario volver al formulario de AXIS FLOW';
$lang->ai->prompts->goingTesting        = 'Redirigiendo a la página de pruebas';
$lang->ai->prompts->goingTestingFail    = 'No hay objetos de prueba disponibles.';

/* Prompt form settings. */
$lang->ai->prompts->formDefaultTitle  = 'Complete el contenido del siguiente formulario:';
$lang->ai->prompts->formSubmitBtnText = 'Generar';

$lang->ai->prompts->testData['product']['product']['name'] = 'Plataforma de construcción de sitios web corporativos';
$lang->ai->prompts->testData['product']['product']['desc'] = 'La Plataforma de Construcción de Sitios Web Corporativos es una plataforma de gestión diseñada específicamente para empresas modernas, con el objetivo de ayudarlas a presentarse de manera profesional e innovadora. La plataforma integra las últimas noticias corporativas, logros de proyectos, información de contacto y detalles del negocio, permitiendo a los visitantes comprender fácilmente los valores centrales y los servicios de la empresa. Con una interfaz clara y concisa y una navegación intuitiva, la plataforma mejora la experiencia del usuario y ayuda a construir conexiones más cercanas entre las empresas, sus clientes y aliados. Ya sea para actualizar información o gestionar contenido, la plataforma ofrece soluciones eficientes y flexibles para las empresas, apoyando la construcción de marca y el desarrollo del negocio.';

$lang->ai->prompts->testData['project']['project']['name']     = 'Proyecto de desarrollo de sitio web corporativo';
$lang->ai->prompts->testData['project']['project']['type']     = 'Tipo de producto';
$lang->ai->prompts->testData['project']['project']['desc']     = 'El Proyecto de Desarrollo de Sitio Web Corporativo tiene como objetivo construir de forma rápida y eficiente un sitio web corporativo completamente funcional, fácil de usar y altamente escalable, combinando métodos de desarrollo en cascada y ágiles. Este proyecto garantizará que el producto final satisfaga las necesidades de los usuarios y ofrezca una buena experiencia de usuario mediante fases detalladas de análisis de requerimientos, diseño, desarrollo y pruebas.';
$lang->ai->prompts->testData['project']['project']['begin']    = '2025-01-01';
$lang->ai->prompts->testData['project']['project']['end']      = '2025-06-01';
$lang->ai->prompts->testData['project']['project']['estimate'] = '800h';

$lang->ai->prompts->testData['project']['programplans']['name']      = array('Análisis y planificación de requerimientos', 'Diseño del sistema', 'Desarrollo y pruebas', 'Preparación y lanzamiento del despliegue');
$lang->ai->prompts->testData['project']['programplans']['desc']      = array('Durante esta fase se mantendrá comunicación con diversos interesados para recopilar, analizar y confirmar los requerimientos funcionales y las historias de usuario del sitio web.', 'Con base en los requerimientos confirmados, el diseño de la arquitectura del sistema y el prototipo de las páginas sentarán las bases para el desarrollo posterior.', 'En esta fase se realizará el desarrollo detallado según el diseño del sistema y se harán pruebas unitarias para asegurar la funcionalidad.', 'Se realizarán las pruebas finales del sistema, las pruebas de aceptación del usuario y la preparación del despliegue para asegurar que el sitio web pueda entregarse sin contratiempos.');
$lang->ai->prompts->testData['project']['programplans']['status']    = array('Cerrado', 'Cerrado', 'En progreso', 'No iniciado');
$lang->ai->prompts->testData['project']['programplans']['begin']     = array('2025-01-01', '2025-02-01', '2025-04-01', '2025-05-15');
$lang->ai->prompts->testData['project']['programplans']['end']       = array('2025-01-31', '2025-02-28', '2025-05-14', '2025-06-01');
$lang->ai->prompts->testData['project']['programplans']['realBegan'] = array('2025-01-01', '2025-02-01', '2025-04-01', '-');
$lang->ai->prompts->testData['project']['programplans']['realEnd']   = array('2025-01-31', '2025-02-28', '-', '-');
$lang->ai->prompts->testData['project']['programplans']['progress']  = array('100%', '100%', '41%', '0%');
$lang->ai->prompts->testData['project']['programplans']['estimate']  = array('190', '190', '290', '120');
$lang->ai->prompts->testData['project']['programplans']['consumed']  = array('200', '190', '120', '0');
$lang->ai->prompts->testData['project']['programplans']['left']      = array('0', '0', '170', '120');

$lang->ai->prompts->testData['project']['executions']['name']      = array('Sitio web corporativo 1.0', 'Sitio web corporativo 2.0', 'Sitio web corporativo 3.0');
$lang->ai->prompts->testData['project']['executions']['desc']      = array('Desarrollar los módulos funcionales principales del sitio web corporativo inteligente, incluyendo la página de inicio, el centro de noticias y quiénes somos, completando las pruebas unitarias.', 'Implementar la versión 2.0 del sitio web corporativo, incluidas las páginas de exhibición de logros y de servicio posventa, corregir los bugs de la versión 1.0 y completar las pruebas unitarias.', 'Desarrollar módulos funcionales adicionales como información de contacto y detalles del negocio, y realizar pruebas de integración para asegurar que los módulos funcionen en conjunto.');
$lang->ai->prompts->testData['project']['executions']['status']    = array('En progreso', 'No iniciado', 'No iniciado');
$lang->ai->prompts->testData['project']['executions']['begin']     = array('2025-04-01', '2025-04-14', '2025-04-21');
$lang->ai->prompts->testData['project']['executions']['end']       = array('2025-04-11', '2025-04-18', '2025-05-14');
$lang->ai->prompts->testData['project']['executions']['realBegan'] = array('2025-04-01', '-', '-');
$lang->ai->prompts->testData['project']['executions']['realEnd']   = array('-', '-', '-');
$lang->ai->prompts->testData['project']['executions']['estimate']  = array('120', '100', '70');
$lang->ai->prompts->testData['project']['executions']['consumed']  = array('77', '0', '0');
$lang->ai->prompts->testData['project']['executions']['left']      = array('50', '100', '70');
$lang->ai->prompts->testData['project']['executions']['progress']  = array('64%', '0%', '0%');

$lang->ai->prompts->testData['story']['story']['title']    = 'Implementar página de inicio del sitio corporativo';
$lang->ai->prompts->testData['story']['story']['spec']     = 'Como usuario de esta empresa, quiero acceder fácilmente a la información básica del sitio web desde la página de inicio, para conocer rápidamente las últimas noticias de la empresa, algunos logros destacados, la información de contacto y los detalles del negocio. <br> - Módulo de últimas noticias de la empresa. <br> - Módulo de muestra de logros de la empresa. <br> - Información de contacto y detalles del negocio de la empresa.';
$lang->ai->prompts->testData['story']['story']['verify']   = "1. The homepage should include the latest news section displaying recent news and event information. \n2. There should be a section for achievement display, highlighting the company\'s important projects and achievements.\n 3. Contact information should be clearly displayed, including phone, email, and address, ensuring visitors can easily find it.\n 4. Business details should be detailed, including company registration information and relevant qualifications, ensuring users can verify the legality and reliability of the company.\n 5. All information should be clearly visible on the homepage, with a beautiful layout and easy navigation.";
$lang->ai->prompts->testData['story']['story']['product']  = 'Plataforma de construcción de sitios web corporativos';
$lang->ai->prompts->testData['story']['story']['module']   = 'Página principal';
$lang->ai->prompts->testData['story']['story']['pri']      = '1';
$lang->ai->prompts->testData['story']['story']['category'] = 'Demanda de desarrollo';
$lang->ai->prompts->testData['story']['story']['estimate'] = '3sp';

$lang->ai->prompts->testData['productplan']['productplan']['title']  = 'Versión 2.0';
$lang->ai->prompts->testData['productplan']['productplan']['desc']   = "- Implement Corporate Website 2.0 version, including achievement display and after-sales service pages \n - Fix bugs left over from version 1.0";
$lang->ai->prompts->testData['productplan']['productplan']['begin']  = '2025-04-14';
$lang->ai->prompts->testData['productplan']['productplan']['end']    = '2025-04-18';

$lang->ai->prompts->testData['productplan']['stories']['title']    = array('Implementar página de exhibición de logros', 'Implementar página de servicio posventa');
$lang->ai->prompts->testData['productplan']['stories']['module']   = array('Exhibición de logros', 'Servicio posventa');
$lang->ai->prompts->testData['productplan']['stories']['pri']      = array('1', '1');
$lang->ai->prompts->testData['productplan']['stories']['estimate'] = array('1sp', '2sp');
$lang->ai->prompts->testData['productplan']['stories']['status']   = array('Activado', 'Activado');
$lang->ai->prompts->testData['productplan']['stories']['stage']    = array('Pruebas', 'En desarrollo');

$lang->ai->prompts->testData['productplan']['bugs']['title']  = array('Error del módulo de últimas noticias de la página principal', 'El ícono de exhibición de logros se superpone con el título');
$lang->ai->prompts->testData['productplan']['bugs']['pri']    = array('1', '2');
$lang->ai->prompts->testData['productplan']['bugs']['status'] = array('Resuelto', 'Activado');

$lang->ai->prompts->testData['release']['release']['product'] = 'Plataforma de construcción de sitios web corporativos';
$lang->ai->prompts->testData['release']['release']['name']    = 'Sitio web corporativo versión 1.0';
$lang->ai->prompts->testData['release']['release']['desc']    = "- Implement Corporate Website Homepage \n - Implement News Center Page \n - Implement About Us Page";
$lang->ai->prompts->testData['release']['release']['date']    = '2025-04-11';

$lang->ai->prompts->testData['release']['stories']['title']    = array('Implementar página de inicio del sitio corporativo', 'Implementar página del centro de noticias', 'Implementar página Acerca de nosotros');
$lang->ai->prompts->testData['release']['stories']['estimate'] = array('3sp', '2sp', '1sp');

$lang->ai->prompts->testData['release']['bugs']['title']  = 'Ninguno';

$lang->ai->prompts->testData['execution']['execution']['name']     = 'Sitio web corporativo 1.0';
$lang->ai->prompts->testData['execution']['execution']['desc']     = 'Desarrollar los módulos funcionales principales del sitio web corporativo inteligente, incluyendo la página de inicio, el centro de noticias y quiénes somos, completando las pruebas unitarias.';
$lang->ai->prompts->testData['execution']['execution']['estimate'] = '120';

$lang->ai->prompts->testData['execution']['tasks']['name']         = array('Reunión de planificación de iteración', 'Diseño del desarrollo de la página principal', 'Desarrollo de la página principal', 'Pruebas de la página principal', 'Diseño de desarrollo del centro de noticias', 'Desarrollo de la página del centro de noticias', 'Pruebas de la página del centro de noticias', 'Diseño de desarrollo de Acerca de nosotros', 'Desarrollo de la página Acerca de nosotros', 'Pruebas de la página Acerca de nosotros', 'Reunión de revisión de iteración');
$lang->ai->prompts->testData['execution']['tasks']['pri']          = array('1', '1', '2', '3', '1', '2', '3', '1', '2', '3', '4');
$lang->ai->prompts->testData['execution']['tasks']['status']       = array('Cerrado', 'Completado', 'Completado', 'En progreso', 'Completado', 'En progreso', 'No iniciado', 'En progreso', 'No iniciado', 'No iniciado', 'No iniciado');
$lang->ai->prompts->testData['execution']['tasks']['estimate']     = array('40h', '12h', '10h', '2h', '6h', '8h', '4h', '4h', '8h', '4h', '22h');
$lang->ai->prompts->testData['execution']['tasks']['consumed']     = array('40h', '12h', '10h', '1h', '6h', '6h', '0h', '2h', '0h', '0h', '0h');
$lang->ai->prompts->testData['execution']['tasks']['left']         = array('0h', '0h', '0h', '1h', '0h', '2h', '4h', '2h', '8h', '4h', '22h');
$lang->ai->prompts->testData['execution']['tasks']['progress']     = array('100%', '100%', '100%', '50%', '100%', '75%', '0%', '50%', '0%', '0%', '0%');
$lang->ai->prompts->testData['execution']['tasks']['estStarted']   = array('2025-04-01', '2025-04-01', '2025-04-02', '2025-04-04', '2025-04-02', '2025-04-02', '2025-04-07', '2025-04-03', '2025-04-03', '2025-04-08', '2025-04-11');
$lang->ai->prompts->testData['execution']['tasks']['realStarted']  = array('2025-04-01', '2025-04-01', '2025-04-02', '2025-04-04', '2025-04-02', '2025-04-02', '-', '2025-04-03', '-', '-', '-');
$lang->ai->prompts->testData['execution']['tasks']['finishedDate'] = array('2025-04-01', '2025-04-01', '2025-04-04', '-', '2025-04-02', '-', '-', '-', '-', '-', '-');
$lang->ai->prompts->testData['execution']['tasks']['closedReason'] = array('Completado', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

$lang->ai->prompts->testData['task']['task']['name']        = 'Reunión de planificación de iteración';
$lang->ai->prompts->testData['task']['task']['desc']        = "La reunión de planificación de la iteración tiene como objetivo asegurar que el equipo tenga una dirección y metas claras para el próximo ciclo de desarrollo, promover la comunicación y colaboración entre los miembros del equipo y ayudar al equipo a asignar recursos de manera eficaz.<br> El objetivo de esta reunión de planificación es aclarar con el gerente de producto los módulos funcionales centrales del sitio web corporativo (incluida la página de inicio, el centro de noticias y quiénes somos), asegurando que desarrollo y pruebas puedan completar a tiempo los requerimientos planificados durante el ciclo de la iteración.";
$lang->ai->prompts->testData['task']['task']['pri']         = '1';
$lang->ai->prompts->testData['task']['task']['status']      = 'Cerrado';
$lang->ai->prompts->testData['task']['task']['estimate']    = '40h';
$lang->ai->prompts->testData['task']['task']['consumed']    = '40h';
$lang->ai->prompts->testData['task']['task']['left']        = '0h';
$lang->ai->prompts->testData['task']['task']['progress']    = '100%';
$lang->ai->prompts->testData['task']['task']['story']       = 0;
$lang->ai->prompts->testData['task']['task']['estStarted']  = '2025-04-01';
$lang->ai->prompts->testData['task']['task']['realStarted'] = '2025-04-01';

$lang->ai->prompts->testData['case']['case']['title']         = 'Implementar página de inicio del sitio corporativo';
$lang->ai->prompts->testData['case']['case']['precondition']  = '1. El marco básico del sitio web corporativo se ha establecido y desplegado en el servidor. 2. Los usuarios pueden acceder al sitio web corporativo.';
$lang->ai->prompts->testData['case']['case']['scene']         = 'El usuario accede a la página de inicio del sitio web corporativo';
$lang->ai->prompts->testData['case']['case']['product']       = 'Plataforma de construcción de sitios web corporativos';
$lang->ai->prompts->testData['case']['case']['module']        = 'Página principal';
$lang->ai->prompts->testData['case']['case']['pri']           = '1';
$lang->ai->prompts->testData['case']['case']['type']          = 'Pruebas funcionales';
$lang->ai->prompts->testData['case']['case']['lastRunResult'] = 'Aprobado';
$lang->ai->prompts->testData['case']['case']['status']        = 'Normal';

$lang->ai->prompts->testData['case']['steps']['desc']   = array('1. El usuario accede a la página de inicio del sitio web corporativo.', '2. El usuario ve el módulo de últimas noticias y verifica si incluye noticias y eventos recientes.', '3. El usuario revisa el módulo de logros para ver si destaca de forma visible los proyectos y logros importantes de la empresa.', '4. El usuario revisa el módulo de información de contacto para confirmar que contiene números de teléfono, correos electrónicos y direcciones de la empresa válidos.', '5. El usuario revisa el módulo de información comercial para confirmar que la información de registro de la empresa y las calificaciones relevantes son detalladas y precisas.', '6. Verifique que toda la información sea claramente visible en sus ubicaciones de visualización.', '7. El usuario usa la función de navegación para ver otras páginas, asegurando que la navegación sea fácil de usar.');
$lang->ai->prompts->testData['case']['steps']['expect'] = array('El usuario accede correctamente a la página de inicio del sitio web corporativo y esta carga con normalidad.', 'Módulo de últimas noticias: muestra noticias recientes e información de eventos', 'Módulo de exhibición de logros: muestra de forma destacada los proyectos y logros importantes de la empresa.', 'Módulo de información de contacto: muestra claramente teléfono, correo y dirección, para que los usuarios los encuentren fácilmente.', 'Módulo de información empresarial: detalla la información de registro de la empresa y las calificaciones relevantes.', 'Los usuarios pueden ver toda la información de un vistazo, con una ubicación razonable de la información y un diseño atractivo.', 'Los usuarios pueden usar sin problemas la función de navegación para encontrar otras páginas relacionadas, con un proceso de navegación fluido.');

$lang->ai->prompts->testData['bug']['bug']['title']     = 'Error del módulo de últimas noticias de la página principal';
$lang->ai->prompts->testData['bug']['bug']['steps']     = "Pasos:1. Abrir la página de inicio de la aplicación<br> 2. Desplazarse al módulo de últimas noticias <br>Resultado: <br> Aparece un mensaje de error en el módulo.<br>Esperado:<br> Las últimas noticias se muestran normalmente sin errores.";
$lang->ai->prompts->testData['bug']['bug']['severity']  = '1';
$lang->ai->prompts->testData['bug']['bug']['pri']       = '1';
$lang->ai->prompts->testData['bug']['bug']['status']    = 'Resuelto';
$lang->ai->prompts->testData['bug']['bug']['confirmed'] = 'Confirmado';
$lang->ai->prompts->testData['bug']['bug']['type']      = 'Error de código';

$lang->ai->prompts->testData['doc']['doc']['title']      = '¿Por qué los productos bien elaborados encuentran indiferencia en el mercado?';
$lang->ai->prompts->testData['doc']['doc']['addedBy']    = '-';
$lang->ai->prompts->testData['doc']['doc']['addedDate']  = '-';
$lang->ai->prompts->testData['doc']['doc']['editedBy']   = '-';
$lang->ai->prompts->testData['doc']['doc']['editedDate'] = '-';
$lang->ai->prompts->testData['doc']['doc']['content']    = 'Todo gerente de producto ha vivido esta confusión: <br>
Hemos invertido innumerables esfuerzos en desarrollar productos que superan a la competencia, tienen precios competitivos y en los que el equipo confía... y aun así, la respuesta del mercado es fría. Los datos de ventas son pobres, el crecimiento de usuarios se ha estancado y el retorno de la inversión parece lejano. <br>
Lo más frustrante es que, cuando reúne al equipo para analizar las causas, cada departamento tiene su propia explicación: <br>
"¡Es el presupuesto de marketing!" <br>"¡Es la estrategia de canales!" <br>"¡El mercado no ha sido educado!" <br>"¡Es la ejecución del equipo de ventas!" <br>
En medio de este alboroto, la verdad se vuelve cada vez más confusa. Empieza a preguntarse: ¿qué hemos pasado por alto? ¿Por qué un producto aparentemente perfecto puede fracasar en el mercado? <br>
En realidad, el éxito de un producto nunca depende de un solo factor. Como una cerradura de precisión, todos los engranajes deben alinearse para que se abra con suavidad. En un mercado muy competitivo, los productos no fracasan en lo que usted domina, sino en las debilidades que ha pasado por alto. <br>
Las ocho dimensiones del éxito de un producto <br>
El modelo $APPEALS es una herramienta sistemática que nos ayuda a identificar esa "debilidad". Descompone la competitividad del producto en ocho dimensiones clave: <br>
$ (Price, precio): no se trata solo de los números, sino del valor percibido. <br>
A (Availability, disponibilidad): ¿qué tan fácilmente pueden acceder al producto los usuarios objetivo? <br>
P (Packaging, presentación): la experiencia global, desde lo visual hasta lo táctil. <br>
P (Performance, desempeño): el rendimiento real de las funcionalidades principales. <br>
E (Easy to use, facilidad de uso): la comodidad de la incorporación y el uso para el usuario. <br>
A (Assurances, garantías): garantías de calidad y servicio posventa. <br>
L (Life cycle of cost, costo del ciclo de vida): el costo total del uso a largo plazo. <br>
S (Social acceptance, aceptación social): imagen de marca y reconocimiento social. <br>
Estas ocho dimensiones conforman en conjunto la visión panorámica de la competitividad del producto en el mercado. Así como un médico necesita un examen completo para determinar la causa de una enfermedad, los equipos de producto también necesitan un diagnóstico exhaustivo mediante el modelo $APPEALS para identificar los problemas reales. <br>
Del juicio subjetivo a la toma de decisiones basada en datos <br>
Algunos podrían cuestionar: "Pero normalmente ya consideramos estas dimensiones, ¿qué cambia?" <br>
En efecto, los gerentes de producto con experiencia suelen apoyarse en la intuición para considerar múltiples factores. Sin embargo, el análisis intuitivo tiene tres grandes inconvenientes: <br>
Dimensiones omitidas: solemos centrarnos en las áreas que conocemos y descuidar las demás. <br>
Sesgo subjetivo: el apego emocional al propio producto puede llevar a evaluaciones sesgadas. <br>
Confusión de pesos: la importancia de cada dimensión varía según el mercado y el tipo de producto. <br>
El modelo $APPEALS convierte la intuición difusa en datos claros mediante un análisis estructurado, haciendo que las decisiones de producto sean más científicas y objetivas. <br>
Hacer accesibles los modelos potentes <br>
Sin embargo, conocer el modelo $APPEALS es solo el primer paso; aplicarlo de forma eficaz es la clave. Esta es la intención detrás del desarrollo de la "Solución de análisis de decisiones Zen Dao": hacer que los modelos teóricos potentes sean simples y utilizables. <br>
La "Solución de análisis de decisiones Zen Dao" es una herramienta de análisis inteligente diseñada para quienes toman decisiones de producto y de mercado, con un sólido diseñador de modelos que digitaliza y agiliza el modelo $APPEALS, ayudando a los equipos a identificar rápidamente las ventajas competitivas y las debilidades críticas de sus productos. <br>
¿Cómo el análisis inteligente libera el potencial del producto? <br>
Configuración inteligente de pesos por dimensión <br>
La importancia de las ocho dimensiones varía según la industria y el tipo de producto. La Solución de análisis de decisiones Zen Dao puede recomendar de forma inteligente la configuración de pesos de cada dimensión según las características del producto, y también permite a los equipos personalizar los ajustes con base en su experiencia en la industria. <br>
Guía estructurada de preguntas <br>
En cada dimensión, la "Guía de reflexión" ha diseñado una serie de preguntas clave para orientar al equipo hacia un análisis integral. Por ejemplo, en la dimensión "Aceptación social", el sistema le pedirá considerar: "¿El producto está alineado con los valores sociales actuales?" "¿Está reconocido por KOL de renombre?" "¿Los usuarios obtendrán reconocimiento social al usar el producto?" <br>
Análisis comparativo de productos competidores <br>
Evalúe simultáneamente varios productos competidores y muestre visualmente, mediante gráficos de radar, las diferencias de desempeño en las ocho dimensiones, para comprender de inmediato las fortalezas y debilidades de su producto. <br>
Sugerencias inteligentes de mejora <br>
Con base en los resultados del análisis, ofrece una vista tabular que admite la visualización orientada a problemas y orientada a objetos de análisis, brindando un panorama de los resultados desde múltiples perspectivas. También proporciona sugerencias gráficas integradas para los resultados, lo que hace que la asignación de recursos sea más precisa y eficiente. <br>
Ruta de cuatro pasos de los problemas a las soluciones <br>
Configuración de objetos: defina el producto principal a analizar, su segmento de mercado y los productos competidores. <br>Configuración de dimensiones: ajuste las definiciones y los pesos de las ocho dimensiones para resaltar los factores clave. <br>Evaluación de problemas: el equipo responde de forma colaborativa las preguntas estructuradas guiadas por el sistema y las puntúa para compararlas. <br>Planificación de mejoras: revise los resultados del análisis y las sugerencias del sistema desde múltiples ángulos para formular planes de optimización. <br>
Todo el proceso suele tomar solo de 1 a 2 horas, evitando meses de costos de prueba y error en el mercado. Como dijo un usuario: "El modelo $APPEALS es como un escáner holográfico para productos: revela de forma estructurada problemas sistémicos que habíamos ignorado durante mucho tiempo, y cambia las decisiones de producto de suposiciones subjetivas a un análisis preciso basado en datos." <br>
El valor de la Solución de análisis de decisiones Zen Dao no está solo en el análisis, sino también en cambiar la forma de pensar de los equipos: <br>
Derribar barreras entre departamentos: el análisis de ocho dimensiones requiere la colaboración de varios departamentos, como I+D, marketing y ventas, lo que fomenta la cooperación interdepartamental. <br>
Superar el sesgo cognitivo: las preguntas estructuradas y la visualización de datos ayudan a los equipos a liberarse de los juicios subjetivos. <br>
Construir una base de consenso: los resultados del análisis basados en el mismo modelo facilitan que los equipos alcancen un consenso estratégico. <br>
Que los datos respalden sus decisiones de producto <br>
¿Por qué los productos no se venden? La respuesta a menudo no está en las fortalezas que ya conoce, sino en las dimensiones que ha pasado por alto. El marco de análisis de ocho dimensiones $APPEALS funciona como un mapa preciso del mercado que lo guía hacia el mejor camino para el éxito del producto. <br>
Cuando la respuesta del mercado no cumple las expectativas y los competidores parecen llevar siempre la iniciativa, deje de confiar en la intuición para decidir. El análisis sistemático puede traer avances genuinos. <br>
Si su producto enfrenta desafíos en el mercado y busca encontrar una verdadera diferenciación en una competencia feroz, el análisis $APPEALS será su herramienta de decisión más poderosa. <br>
Desde hoy, ofrecemos una prueba gratuita de 30 días. Escanee el código QR a continuación para iniciar de inmediato el diagnóstico de su producto. ¡Que los datos impulsen las decisiones, que los modelos marquen el camino y que su producto encuentre su verdadera competitividad!';

/* Finalize page. */
$lang->ai->moduleDisableTip = 'El módulo se selecciona automáticamente según los objetos seleccionados.';

$lang->ai->moduleList = array();

$lang->ai->moduleList['program']['common']       = 'Programa';
$lang->ai->moduleList['program']['name']         = 'Nombre del programa';
$lang->ai->moduleList['program']['desc']         = 'Descripción del programa';
$lang->ai->moduleList['program']['begin']        = 'Hora de inicio';
$lang->ai->moduleList['program']['end']          = 'Hora de fin';
$lang->ai->moduleList['product']['common']       = 'Producto';
$lang->ai->moduleList['story']['common']         = 'Historia';
$lang->ai->moduleList['story']['spec']           = 'Descripción de la historia';
$lang->ai->moduleList['story']['verify']         = 'Verificación de historia';
$lang->ai->moduleList['stories']['common']       = 'Lista de historias';
$lang->ai->moduleList['productplan']['common']   = 'Plan';
$lang->ai->moduleList['release']['common']       = 'Lanzamiento';
$lang->ai->moduleList['charter']['common']       = 'Acta de constitución';
$lang->ai->moduleList['charter']['name']         = 'Nombre del acta de constitución';
$lang->ai->moduleList['charter']['desc']         = 'Descripción del acta de constitución';
$lang->ai->moduleList['project']['common']       = 'Proyecto';
$lang->ai->moduleList['execution']['common']     = 'Ejecución';
$lang->ai->moduleList['build']['common']         = 'Build';
$lang->ai->moduleList['executions']['common']    = 'Lista de ejecuciones';
$lang->ai->moduleList['programplans']['common']  = 'Lista de planes del programa';
$lang->ai->moduleList['task']['common']          = 'Tarea';
$lang->ai->moduleList['tasks']['common']         = 'Lista de tareas';
$lang->ai->moduleList['bug']['common']           = 'Bug';
$lang->ai->moduleList['bugs']['common']          = 'Lista de Bugs';
$lang->ai->moduleList['case']['common']          = 'Caso de prueba';
$lang->ai->moduleList['steps']['common']         = 'Pasos del caso de prueba';
$lang->ai->moduleList['steps']['desc']           = 'Descripción';
$lang->ai->moduleList['steps']['expect']         = 'Resultado esperado';
$lang->ai->moduleList['caselib']['common']       = 'Biblioteca de casos de prueba';
$lang->ai->moduleList['caselib']['name']         = 'Nombre de la biblioteca de casos de prueba';
$lang->ai->moduleList['caselib']['desc']         = 'Descripción de la biblioteca de casos de prueba';
$lang->ai->moduleList['testsuite']['common']     = 'Suite de pruebas';
$lang->ai->moduleList['testsuite']['name']       = 'Nombre de la suite de pruebas';
$lang->ai->moduleList['testsuite']['desc']       = 'Descripción de la suite de pruebas';
$lang->ai->moduleList['testtask']['common']      = 'Tarea de prueba';
$lang->ai->moduleList['testtask']['name']        = 'Nombre de la tarea de prueba';
$lang->ai->moduleList['testtask']['desc']        = 'Descripción de la tarea de prueba';
$lang->ai->moduleList['testtask']['begin']       = 'Hora de inicio';
$lang->ai->moduleList['testtask']['end']         = 'Hora de fin';
$lang->ai->moduleList['doc']['common']           = 'Documento';
$lang->ai->moduleList['doc']['title']            = 'Nombre del documento';
$lang->ai->moduleList['doc']['desc']             = 'Descripción del documento';
$lang->ai->moduleList['doc']['addedBy']          = 'Creado por';
$lang->ai->moduleList['doc']['addedDate']        = 'Hora de creación';
$lang->ai->moduleList['doc']['editedBy']         = 'Editado por';
$lang->ai->moduleList['doc']['editedDate']       = 'Hora de edición';
$lang->ai->moduleList['doc']['content']          = 'Contenido del documento';
$lang->ai->moduleList['feedback']['common']      = 'Retroalimentación';
$lang->ai->moduleList['ticket']['common']        = 'Ticket';
$lang->ai->moduleList['issue']['common']         = 'Incidencia';
$lang->ai->moduleList['opportunity']['common']   = 'Oportunidad';
$lang->ai->moduleList['risk']['common']          = 'Riesgo';
$lang->ai->moduleList['projectchange']['common'] = 'Cambio del proyecto';
$lang->ai->moduleList['cm']['common']            = 'Gestión de la configuración';

/* Target form definition. See `$config->ai->targetForm`. */
$lang->ai->targetForm = array();
$lang->ai->targetForm['program']['common']        = 'Programa';
$lang->ai->targetForm['charter']['common']        = 'Acta de constitución';
$lang->ai->targetForm['product']['common']        = 'Producto';
$lang->ai->targetForm['epic']['common']           = $lang->ERCommon;
$lang->ai->targetForm['requirement']['common']    = $lang->URCommon;
$lang->ai->targetForm['story']['common']          = $lang->SRCommon;
$lang->ai->targetForm['productplan']['common']    = 'Plan';
$lang->ai->targetForm['release']['common']        = 'Lanzamiento';
$lang->ai->targetForm['projectrelease']['common'] = 'Lanzamiento';
$lang->ai->targetForm['project']['common']        = 'Proyecto';
$lang->ai->targetForm['build']['common']          = 'Build';
$lang->ai->targetForm['execution']['common']      = 'Ejecución';
$lang->ai->targetForm['task']['common']           = 'Tarea';
$lang->ai->targetForm['task']['create']           = 'Crear tarea';
$lang->ai->targetForm['testcase']['common']       = 'Caso de prueba';
$lang->ai->targetForm['testsuite']['common']      = 'Suite de pruebas';
$lang->ai->targetForm['testtask']['common']       = 'Tarea de prueba';
$lang->ai->targetForm['bug']['common']            = 'Bug';
$lang->ai->targetForm['doc']['common']            = 'Documento';
$lang->ai->targetForm['feedback']['common']       = 'Retroalimentación';
$lang->ai->targetForm['ticket']['common']         = 'Ticket';
$lang->ai->targetForm['issue']['common']          = 'Incidencia';
$lang->ai->targetForm['opportunity']['common']    = 'Oportunidad';
$lang->ai->targetForm['risk']['common']           = 'Riesgo';
$lang->ai->targetForm['projectchange']['common']  = 'Cambio';
$lang->ai->targetForm['cm']['common']             = 'Gestión de la configuración';

$lang->ai->targetForm['program']['create'] = 'Crear programa';

$lang->ai->targetForm['product']['create']           = 'Crear producto';
$lang->ai->targetForm['product']['edit']             = 'Editar producto';
$lang->ai->targetForm['product']['tree/managechild'] = 'Administrar módulos';
$lang->ai->targetForm['product']['doc/create']       = 'Crear documento';

$lang->ai->targetForm['charter']['create'] = 'Crear acta de constitución';

$lang->ai->targetForm['epic']['create']             = 'Crear ' . $lang->ERCommon;
$lang->ai->targetForm['epic']['batchcreate']        = 'Crear por lote ' . $lang->ERCommon;
$lang->ai->targetForm['epic']['edit']               = 'Editar ' . $lang->ERCommon;
$lang->ai->targetForm['epic']['batchedit']          = 'Editar por lote ' . $lang->ERCommon;
$lang->ai->targetForm['epic']['change']             = 'Cambiar ' . $lang->ERCommon;
$lang->ai->targetForm['requirement']['create']      = 'Crear ' . $lang->URCommon;
$lang->ai->targetForm['requirement']['batchcreate'] = 'Crear por lote ' . $lang->URCommon;
$lang->ai->targetForm['requirement']['edit']        = 'Editar ' . $lang->URCommon;
$lang->ai->targetForm['requirement']['batchedit']   = 'Editar por lote ' . $lang->URCommon;
$lang->ai->targetForm['requirement']['change']      = 'Cambiar ' . $lang->URCommon;
$lang->ai->targetForm['story']['create']            = 'Crear ' . $lang->SRCommon;
$lang->ai->targetForm['story']['batchcreate']       = 'Crear por lote ' . $lang->SRCommon;
$lang->ai->targetForm['story']['totask']            = $lang->SRCommon . ' a Tarea';
$lang->ai->targetForm['story']['testcasecreate']    = $lang->SRCommon . ' a Caso de prueba';
$lang->ai->targetForm['story']['edit']              = 'Editar ' . $lang->SRCommon;
$lang->ai->targetForm['story']['batchedit']         = 'Editar por lote ' . $lang->SRCommon;
$lang->ai->targetForm['story']['change']            = 'Cambiar ' . $lang->SRCommon;
$lang->ai->targetForm['story']['subdivide']         = 'Subdividir ' . $lang->SRCommon;

$lang->ai->targetForm['productplan']['create']      = 'Crear plan';
$lang->ai->targetForm['productplan']['createchild'] = 'Crear subplan';
$lang->ai->targetForm['productplan']['edit']        = 'Editar plan';

$lang->ai->targetForm['projectrelease']['doc/create'] = 'Crear documento';

$lang->ai->targetForm['release']['create'] = 'Crear lanzamiento';
$lang->ai->targetForm['release']['edit']   = 'Editar lanzamiento';

$lang->ai->targetForm['project']['create']             = 'Crear proyecto';
$lang->ai->targetForm['project']['edit']               = 'Editar proyecto';
$lang->ai->targetForm['project']['programplan/create'] = 'Establecer plan del programa';

$lang->ai->targetForm['execution']['create'] = 'Crear ejecución';
$lang->ai->targetForm['execution']['edit']   = 'Editar ejecución';

$lang->ai->targetForm['task']['create']      = 'Crear tarea';
$lang->ai->targetForm['task']['batchcreate'] = 'Crear tarea por lote';
$lang->ai->targetForm['task']['edit']        = 'Editar tarea';
$lang->ai->targetForm['task']['batchedit']   = 'Editar tareas por lote';
$lang->ai->targetForm['task']['subdivide']   = 'Subdividir tarea';

$lang->ai->targetForm['testcase']['create']       = 'Crear caso de prueba';
$lang->ai->targetForm['testcase']['batchcreate']  = 'Crear casos de prueba por lote';
$lang->ai->targetForm['testcase']['edit']         = 'Editar caso de prueba';
$lang->ai->targetForm['testcase']['batchedit']    = 'Editar casos de prueba por lote';
$lang->ai->targetForm['testcase']['createscript'] = 'Crear script';

$lang->ai->targetForm['bug']['create']          = 'Crear Bug';
$lang->ai->targetForm['bug']['batchcreate']     = 'Crear Bugs por lote';
$lang->ai->targetForm['bug']['testcase/create'] = 'Bug a caso de prueba';
$lang->ai->targetForm['bug']['edit']            = 'Editar Bug';
$lang->ai->targetForm['bug']['batchedit']       = 'Editar Bugs por lote';
$lang->ai->targetForm['bug']['story/create']    = 'Bug a historia';

$lang->ai->targetForm['doc']['create'] = 'Crear documento';
$lang->ai->targetForm['doc']['edit']   = 'Editar documento';

$lang->ai->targetForm['build']['create']         = 'Crear Build';
$lang->ai->targetForm['build']['edit']           = 'Editar Build';
$lang->ai->targetForm['testsuite']['create']     = 'Crear suite de pruebas';
$lang->ai->targetForm['testtask']['create']      = 'Crear tarea de prueba';
$lang->ai->targetForm['feedback']['create']      = 'Crear retroalimentación';
$lang->ai->targetForm['feedback']['batchcreate'] = 'Crear retroalimentación por lote';
$lang->ai->targetForm['feedback']['edit']        = 'Editar retroalimentación';
$lang->ai->targetForm['feedback']['batchedit']   = 'Editar retroalimentación por lote';
$lang->ai->targetForm['ticket']['create']        = 'Crear ticket';
$lang->ai->targetForm['ticket']['batchcreate']   = 'Crear tickets por lote';
$lang->ai->targetForm['ticket']['edit']          = 'Editar ticket';
$lang->ai->targetForm['ticket']['batchedit']     = 'Editar tickets por lote';
$lang->ai->targetForm['issue']['create']         = 'Crear incidencia';
$lang->ai->targetForm['issue']['batchcreate']    = 'Crear incidencias por lote';
$lang->ai->targetForm['issue']['edit']           = 'Editar incidencia';
$lang->ai->targetForm['opportunity']['create']   = 'Crear oportunidad';
$lang->ai->targetForm['risk']['create']          = 'Crear riesgo';
$lang->ai->targetForm['risk']['batchcreate']     = 'Crear riesgos por lote';
$lang->ai->targetForm['risk']['edit']            = 'Editar riesgo';
$lang->ai->targetForm['projectchange']['create'] = 'Crear cambio';
$lang->ai->targetForm['cm']['create']            = 'Crear línea base';

$lang->ai->prompts->statuses = array();
$lang->ai->prompts->statuses['']       = 'Todos';
$lang->ai->prompts->statuses['draft']  = 'Borrador';
$lang->ai->prompts->statuses['active'] = 'Activo';

$lang->ai->featureBar['prompts']['']       = 'Todos';
$lang->ai->featureBar['prompts']['draft']  = 'Borrador';
$lang->ai->featureBar['prompts']['active'] = 'Activo';

$lang->ai->prompts->modules = array();
$lang->ai->prompts->modules['product']       = 'Producto';
$lang->ai->prompts->modules['project']       = 'Proyecto';
$lang->ai->prompts->modules['epic']          = $lang->ERCommon;
$lang->ai->prompts->modules['requirement']   = $lang->URCommon;
$lang->ai->prompts->modules['story']         = $lang->SRCommon;
$lang->ai->prompts->modules['productplan']   = 'Plan';
$lang->ai->prompts->modules['release']       = 'Lanzamiento';
$lang->ai->prompts->modules['build']         = 'Build';
$lang->ai->prompts->modules['execution']     = 'Ejecución';
$lang->ai->prompts->modules['task']          = 'Tarea';
$lang->ai->prompts->modules['case']          = 'Caso de prueba';
$lang->ai->prompts->modules['bug']           = 'Bug';
$lang->ai->prompts->modules['doc']           = 'Documento';
$lang->ai->prompts->modules['feedback']      = 'Retroalimentación';
$lang->ai->prompts->modules['ticket']        = 'Ticket';
$lang->ai->prompts->modules['issue']         = 'Incidencia';
$lang->ai->prompts->modules['opportunity']   = 'Oportunidad';
$lang->ai->prompts->modules['risk']          = 'Riesgo';

$lang->ai->conversations = new stdclass();
$lang->ai->conversations->common = 'Conversaciones';

$lang->ai->miniPrograms                    = new stdClass();
$lang->ai->miniPrograms->common            = 'Agentes generales';
$lang->ai->miniPrograms->emptyList         = 'Actualmente no hay ningún agente general disponible.';
$lang->ai->miniPrograms->create            = 'Crear un agente';
$lang->ai->miniPrograms->configuration     = 'Configuración de información básica';
$lang->ai->miniPrograms->downloadTip       = 'Tras el lanzamiento, se mostrará en la Plaza de agentes generales y se sincronizará automáticamente con el cliente.';
$lang->ai->miniPrograms->download          = 'Descargar cliente Zentao';
$lang->ai->miniPrograms->category          = 'Categoría';
$lang->ai->miniPrograms->icon              = 'Ícono';
$lang->ai->miniPrograms->desc              = 'Introducción';
$lang->ai->miniPrograms->categoryList      = array('work' => 'Trabajo', 'personal' => 'Personal', 'life' => 'Vida', 'creative' => 'Creativo', 'others' => 'Otros');
$lang->ai->miniPrograms->allCategories     = array('' => 'Todas las categorías');
$lang->ai->miniPrograms->collect           = 'Recopilar';
$lang->ai->miniPrograms->more              = 'Más';
$lang->ai->miniPrograms->iconModification  = 'Modificación del ícono';
$lang->ai->miniPrograms->customBackground  = 'Color de fondo personalizado';
$lang->ai->miniPrograms->customIcon        = 'Ícono personalizado';
$lang->ai->miniPrograms->backToListPage    = 'Volver a la página de lista';
$lang->ai->miniPrograms->lastStep          = 'Paso anterior';
$lang->ai->miniPrograms->backToListPageTip = 'La configuración de parámetros para seleccionar el objeto ha cambiado. ¿Desea guardar y regresar?';
$lang->ai->miniPrograms->saveAndBack       = 'Guardar y volver';
$lang->ai->miniPrograms->publishConfirm    = array('¿Seguro que desea publicar?', 'Tras el lanzamiento, se mostrará en el módulo de IA de la navegación de primer nivel y el cliente se actualizará simultáneamente.');
$lang->ai->miniPrograms->emptyPrompterTip  = 'El prompt del agente general está vacío. Edítelo antes de publicar.';
$lang->ai->miniPrograms->maintenanceGroup  = 'Grupo de mantenimiento de agentes generales';

$lang->ai->miniPrograms->latestPublishedDate = 'Fecha de última publicación';
$lang->ai->miniPrograms->deleteTip           = '¿Seguro que desea eliminar este agente general?';
$lang->ai->miniPrograms->disableTip          = 'Deshabilitar el agente general impedirá que los usuarios accedan a él. ¿Está seguro de deshabilitarlo?';
$lang->ai->miniPrograms->publishTip          = 'Tras el lanzamiento, se mostrará en la Plaza de modelos de agentes generales y el cliente se actualizará de forma sincronizada.';
$lang->ai->miniPrograms->unpublishedTip      = 'El agente general que está usando no está publicado.';

$lang->ai->miniPrograms->placeholder          = new stdClass();
$lang->ai->miniPrograms->placeholder->name    = 'Ingrese un nombre para el agente general pequeño';
$lang->ai->miniPrograms->placeholder->desc    = 'Ingrese una breve introducción de los agentes generales';
$lang->ai->miniPrograms->placeholder->default = 'Complete el texto de sugerencia; el valor predeterminado es "ingrese"';
$lang->ai->miniPrograms->placeholder->input   = 'Ingrese';
$lang->ai->miniPrograms->placeholder->prompt  = 'Ingrese el diseño del prompt';
$lang->ai->miniPrograms->placeholder->asking  = 'Continuar preguntando';

$lang->ai->miniPrograms->deleteFieldTip = '¿Seguro que desea eliminar este campo? ';

$lang->ai->miniPrograms->field                    = new stdClass();
$lang->ai->miniPrograms->field->name              = 'Nombre del campo';
$lang->ai->miniPrograms->field->duplicatedNameTip = 'Este nombre ya está en uso, intente con otro nombre';
$lang->ai->miniPrograms->field->type              = 'tipo de control';
$lang->ai->miniPrograms->field->typeList          = array('text' => 'texto de una línea', 'textarea' => 'texto de varias líneas', 'radio' => 'single-selection', 'checkbox' => 'multi-selection');
$lang->ai->miniPrograms->field->placeholder       = 'Sugerencias de llenado';
$lang->ai->miniPrograms->field->required          = 'Obligatorio';
$lang->ai->miniPrograms->field->requiredOptions   = array('No', 'Sí');
$lang->ai->miniPrograms->field->add               = 'Nuevo campo';
$lang->ai->miniPrograms->field->addTip            = 'Haga clic aquí para agregar información del campo';
$lang->ai->miniPrograms->field->edit              = 'Editar campo';
$lang->ai->miniPrograms->field->configuration     = 'Configuración';
$lang->ai->miniPrograms->field->debug             = 'Área de depuración';
$lang->ai->miniPrograms->field->preview           = 'Área de vista previa';
$lang->ai->miniPrograms->field->fields            = 'Configuración del formulario';
$lang->ai->miniPrograms->field->prompt            = 'Prompt';
$lang->ai->miniPrograms->field->fieldConfig       = 'Configuración del campo';
$lang->ai->miniPrograms->field->knowledgeLibs     = 'Montaje de bibliotecas de conocimiento';
$lang->ai->miniPrograms->field->skills              = 'Montaje de habilidades';
$lang->ai->miniPrograms->field->option            = 'Opciones';
$lang->ai->miniPrograms->field->contentDebugging  = 'Depuración de contenido';
$lang->ai->miniPrograms->field->contentDebuggingTip = 'Ingrese aquí el campo para depurar.';
$lang->ai->miniPrograms->field->prompterDesign    = 'Diseño del prompt';
$lang->ai->miniPrograms->field->prompterDesignTip = 'El símbolo <> se usa para referenciar el campo configurado. Se usa un espacio antes y después de <>.';
$lang->ai->miniPrograms->field->prompterPreview   = 'Vista previa del prompt';
$lang->ai->miniPrograms->field->generateResult    = 'Generar resultado';
$lang->ai->miniPrograms->field->resultPreview     = 'Vista previa del resultado';

$lang->ai->miniPrograms->field->default = array(
    'Rol',
    'Escena',
    'Objetivo',
    'Como <Rol>, quiero <Objetivo> en <Escenario>.'
);

$lang->ai->miniPrograms->field->emptyNameWarning      = '「%s」 no puede estar vacío';
$lang->ai->miniPrograms->field->duplicatedNameWarning = 'Duplicar 「%s」';
$lang->ai->miniPrograms->field->emptyOptionWarning    = 'Configure al menos una opción';

$lang->ai->miniPrograms->statuses = array(
    ''            => 'all',
    'draft'       => 'unpublished',
    'active'      => 'published',
    'createdByMe' => 'Creado por mí'
);

$lang->ai->featureBar['miniprograms']['']            = 'Todos';
$lang->ai->featureBar['miniprograms']['draft']       = 'Sin publicar';
$lang->ai->featureBar['miniprograms']['active']      = 'Publicado';
$lang->ai->featureBar['miniprograms']['createdByMe'] = 'Creado por mí';

$lang->ai->miniPrograms->publishedOptions   = array('unpublished', 'published');
$lang->ai->miniPrograms->optionName         = 'Nombre de la opción';
$lang->ai->miniPrograms->promptTemplate     = 'Plantilla de prompt';
$lang->ai->miniPrograms->fieldConfiguration = 'Configuración del campo';
$lang->ai->miniPrograms->summary            = 'Hay %s agentes generales pequeños en esta página.';
$lang->ai->miniPrograms->generate           = 'Generar';
$lang->ai->miniPrograms->regenerate         = 'Regenerar';
$lang->ai->miniPrograms->noModel            = array('El modelo de lenguaje aún no ha sido configurado. Contacte al administrador o vaya al backend para configurar <a id="to-language-model"> el modelo de lenguaje.</a>。', 'Si ya se completó la configuración correspondiente, intente <a id="reload-current">recargar</a> la página.');
$lang->ai->miniPrograms->clearContext       = 'El contenido del contexto ha sido borrado.';
$lang->ai->miniPrograms->newVersionTip      = 'El agente general fue actualizado el %s. Lo anterior es el registro histórico.';
$lang->ai->miniPrograms->disabledTip        = 'El agente general actual está deshabilitado.';
$lang->ai->miniPrograms->chatNoResponse     = 'Algo salió mal.';

$lang->ai->models = new stdclass();
$lang->ai->models->title          = 'Configuración del modelo de lenguaje';
$lang->ai->models->common         = 'Modelo de lenguaje';
$lang->ai->models->name           = 'Nombre';
$lang->ai->models->type           = 'Modelo';
$lang->ai->models->vendor         = 'Proveedor';
$lang->ai->models->base           = 'URL base de la API';
$lang->ai->models->key            = 'Clave de API';
$lang->ai->models->secret         = 'Clave secreta';
$lang->ai->models->resource       = 'Recurso';
$lang->ai->models->deployment     = 'Despliegue';
$lang->ai->models->proxyType      = 'Tipo de proxy';
$lang->ai->models->proxyAddr      = 'Dirección del proxy';
$lang->ai->models->description    = 'Descripción';
$lang->ai->models->createdDate    = 'Fecha de creación';
$lang->ai->models->createdBy      = 'Creador';
$lang->ai->models->editedDate     = 'Fecha de modificación';
$lang->ai->models->editedBy       = 'Editado por';
$lang->ai->models->usesProxy      = 'Usar proxy';
$lang->ai->models->testConnection = 'Probar conexión';
$lang->ai->models->unconfigured   = 'Sin configurar';
$lang->ai->models->create         = 'Crear modelo';
$lang->ai->models->edit           = 'Editar parámetros';
$lang->ai->models->view           = 'Ver detalles';
$lang->ai->models->enable         = 'Habilitar modelo de lenguaje';
$lang->ai->models->disable        = 'Deshabilitar modelo de lenguaje';
$lang->ai->models->details        = 'Detalles del modelo';
$lang->ai->models->concealTip     = 'Visible al editar';
$lang->ai->models->upgradeBiz     = 'Para más funciones de IA, todas en <a target="_blank" href="https://www.zentao.net/page/enterprise.html" class="text-blue">ZenTao Biz</a>.';
$lang->ai->models->noModelError   = 'No hay ningún modelo de lenguaje configurado; comuníquese con el administrador.';
$lang->ai->models->noModels       = 'Actualmente no hay ningún modelo de lenguaje.';
$lang->ai->models->confirmDelete  = 'Al eliminar el modelo, los agentes de ZenTao, los agentes generales y los chats de IA asociados dejarán de estar disponibles. ¿Desea eliminarlos?';
$lang->ai->models->confirmDisable = '¿Seguro que desea deshabilitar este modelo de lenguaje?';
$lang->ai->models->default        = 'Modelo predeterminado';
$lang->ai->models->defaultTip     = 'El modelo de lenguaje predeterminado (el primer modelo de lenguaje disponible) se usará para ejecutar agentes zenTao y agentes generales que no tengan un modelo de lenguaje especificado, y también se usará para el chat.';
$lang->ai->models->authFailure    = 'Falló la autenticación de la API';

$lang->ai->models->testConnectionResult = new stdclass();
$lang->ai->models->testConnectionResult->success    = 'Conectado correctamente';
$lang->ai->models->testConnectionResult->fail       = 'No se pudo conectar';
$lang->ai->models->testConnectionResult->failFormat = 'No se pudo conectar: %s';

$lang->ai->models->statusList = array();
$lang->ai->models->statusList['0'] = 'Deshabilitado';
$lang->ai->models->statusList['off'] = 'Deshabilitado';
$lang->ai->models->statusList['1']  = 'Habilitado';
$lang->ai->models->statusList['on']  = 'Habilitado';

$lang->ai->models->proxyStatusList = array();
$lang->ai->models->proxyStatusList['0']   = 'No';
$lang->ai->models->proxyStatusList['off'] = 'No';
$lang->ai->models->proxyStatusList['1']   = 'Sí';
$lang->ai->models->proxyStatusList['on']  = 'Sí';

$lang->ai->models->typeList = array();
$lang->ai->models->typeList['openai-gpt35'] = 'OpenAI / GPT-3.5';
$lang->ai->models->typeList['openai-gpt4']  = 'OpenAI / GPT-4';
$lang->ai->models->typeList['baidu-ernie']  = 'Baidu / ERNIE';

$lang->ai->models->vendorList = new stdclass();
$lang->ai->models->vendorList->{'openai-gpt35'} = array('openai' => 'OpenAI', 'azure' => 'Azure', 'openaiCompatible' => 'Personalizado');
$lang->ai->models->vendorList->{'openai-gpt4'}  = array('openai' => 'OpenAI', 'azure' => 'Azure', 'openaiCompatible' => 'Personalizado');
$lang->ai->models->vendorList->{'baidu-ernie'}  = array('baidu' => 'Plataforma LLM Baidu Qianfan');

$lang->ai->models->vendorTips = new stdclass();
$lang->ai->models->vendorTips->azure            = 'La versión de OpenAI GPT se especifica al crear el despliegue del modelo en Azure.';
$lang->ai->models->vendorTips->openaiCompatible = 'La API personalizada debe admitir Function Calling; de lo contrario, algunas funciones podrían no operar correctamente.';

$lang->ai->models->proxyTypes = array();
$lang->ai->models->proxyTypes['']       = 'Sin proxy';
$lang->ai->models->proxyTypes['socks5'] = 'SOCKS5';

$lang->ai->models->promptFor = 'ZenTao Agent para %s';

$lang->ai->designStepNav = array();
$lang->ai->designStepNav['basicinfo']      = 'Información básica';
$lang->ai->designStepNav['setinputfields'] = 'Establecer campos de entrada';
$lang->ai->designStepNav['setinputform']   = 'Establecer formulario de entrada';
$lang->ai->designStepNav['setprompt']      = 'Establecer prompt';
$lang->ai->designStepNav['preview']        = 'Vista previa del resultado';

$lang->ai->dataTypeDesc = '%s es de tipo %s, %s';

$lang->ai->dataType            = new stdclass();
$lang->ai->dataType->pri       = new stdClass();
$lang->ai->dataType->pri->type = 'numeric';
$lang->ai->dataType->pri->desc = '1 es la prioridad más alta, 4 es la más baja.';

$lang->ai->dataType->estimate       = new stdClass();
$lang->ai->dataType->estimate->type = 'numeric';
$lang->ai->dataType->estimate->desc = 'La unidad es horas.';

$lang->ai->dataType->consumed = $lang->ai->dataType->estimate;
$lang->ai->dataType->left     = $lang->ai->dataType->estimate;

$lang->ai->dataType->progress       = new stdClass();
$lang->ai->dataType->progress->type = 'percentage';
$lang->ai->dataType->progress->desc = '0 significa no iniciado, 100 significa completado.';

$lang->ai->dataType->datetime       = new stdClass();
$lang->ai->dataType->datetime->type = 'datetime';
$lang->ai->dataType->datetime->desc = 'El formato es: 1970-01-01 00:00:01, o déjelo en blanco.';

$lang->ai->dataType->estStarted   = $lang->ai->dataType->datetime;
$lang->ai->dataType->realStarted  = $lang->ai->dataType->datetime;
$lang->ai->dataType->finishedDate = $lang->ai->dataType->datetime;

$lang->ai->demoData            = new stdclass();
$lang->ai->demoData->notExist  = 'Por ahora no existen datos de demostración.';
$lang->ai->demoData->story     = array(
    'story' => array(
        'title'    => 'Desarrollar una plataforma de aprendizaje en línea',
        'spec'     => 'Necesitamos desarrollar una plataforma de aprendizaje en línea que ofrezca gestión de cursos, de estudiantes, de docentes y otras funciones.',
        'verify' => '1. Todas las funciones operan correctamente sin errores ni anomalías evidentes.2. La interfaz es estética y fácil de usar.3. La plataforma satisface las necesidades de los usuarios y tiene un alto nivel de satisfacción.4. El código tiene buena calidad, con una estructura clara y fácil de mantener.',
        'module'   => 7,
        'pri'      => 1,
        'estimate' => 1,
        'product'  => 1,
        'category' => 'feature',
    ),
);
$lang->ai->demoData->execution = array(
    'execution' => array(
        'name'     => 'Desarrollo de software para plataforma de aprendizaje en línea',
        'desc'     => 'Este plan busca desarrollar un software de plataforma de aprendizaje en línea que ofrezca recursos de aprendizaje accesibles, incluidos texto, video y audio, así como herramientas de aprendizaje como exámenes, pruebas y foros de discusión.',
        'estimate' => 7,
    ),
    'tasks'     => array(
        0 =>
        array(
            'name'         => 'Selección de tecnología',
            'pri'          => 1,
            'status'       => 'done',
            'estimate'     => 1,
            'consumed'     => 1,
            'left'         => 0,
            'progress'     => 100,
            'estStarted'   => '2023-07-02 00:00:00',
            'realStarted'  => '2023-07-02 00:00:00',
            'finishedDate' => '2023-07-02 00:00:00',
            'closedReason' => 'Completado',
        ),
        1 =>
        array(
            'name'         => 'Diseño de UI',
            'pri'          => 1,
            'status'       => 'doing',
            'estimate'     => 2,
            'consumed'     => 1,
            'left'         => 1,
            'progress'     => 50,
            'estStarted'   => '2023-07-03 00:00:00',
            'realStarted'  => '2023-07-03 00:00:00',
            'finishedDate' => '',
            'closedReason' => '',
        ),
        2 =>
        array(
            'name'         => 'Desarrollo',
            'pri'          => 1,
            'status'       => 'wait',
            'estimate'     => 1,
            'consumed'     => 0,
            'left'         => 1,
            'progress'     => 0,
            'estStarted'   => '',
            'realStarted'  => '',
            'finishedDate' => '',
            'closedReason' => '',
        ),
    ),
);

/* Forms as JSON Schemas. */
$lang->ai->formSchema = array();
$lang->ai->formSchema['story']['create'] = new stdclass();
$lang->ai->formSchema['story']['create']->title = 'Historia';
$lang->ai->formSchema['story']['create']->type  = 'object';
$lang->ai->formSchema['story']['create']->properties = new stdclass();
$lang->ai->formSchema['story']['create']->properties->title  = new stdclass();
$lang->ai->formSchema['story']['create']->properties->spec   = new stdclass();
$lang->ai->formSchema['story']['create']->properties->verify = new stdclass();
$lang->ai->formSchema['story']['create']->properties->title->type         = 'string';
$lang->ai->formSchema['story']['create']->properties->title->description  = 'Título de la historia';
$lang->ai->formSchema['story']['create']->properties->spec->type          = 'string';
$lang->ai->formSchema['story']['create']->properties->spec->description   = 'Descripción de la historia';
$lang->ai->formSchema['story']['create']->properties->verify->type        = 'string';
$lang->ai->formSchema['story']['create']->properties->verify->description = 'Criterios de aceptación de la historia';
$lang->ai->formSchema['story']['create']->required = array('title', 'spec', 'verify');
$lang->ai->formSchema['story']['edit'] = $lang->ai->formSchema['story']['create'];
$lang->ai->formSchema['story']['change'] = $lang->ai->formSchema['story']['create'];

$lang->ai->formSchema['story']['batchcreate'] = new stdclass();
$lang->ai->formSchema['story']['batchcreate']->title = 'Historias';
$lang->ai->formSchema['story']['batchcreate']->type  = 'object';
$lang->ai->formSchema['story']['batchcreate']->properties = new stdclass();
$lang->ai->formSchema['story']['batchcreate']->properties->stories  = new stdclass();
$lang->ai->formSchema['story']['batchcreate']->properties->stories->type        = 'array';
$lang->ai->formSchema['story']['batchcreate']->properties->stories->description = 'Historias';
$lang->ai->formSchema['story']['batchcreate']->properties->stories->items       = $lang->ai->formSchema['story']['create'];

$lang->ai->formSchema['product']['create'] = new stdclass();
$lang->ai->formSchema['product']['create']->title = 'Producto';
$lang->ai->formSchema['product']['create']->type  = 'object';
$lang->ai->formSchema['product']['create']->properties = new stdclass();
$lang->ai->formSchema['product']['create']->properties->name     = new stdclass();
$lang->ai->formSchema['product']['create']->properties->code     = new stdclass();
$lang->ai->formSchema['product']['create']->properties->type     = new stdclass();
$lang->ai->formSchema['product']['create']->properties->PO       = new stdclass();
$lang->ai->formSchema['product']['create']->properties->reviewer = new stdclass();
$lang->ai->formSchema['product']['create']->properties->QD       = new stdclass();
$lang->ai->formSchema['product']['create']->properties->RD       = new stdclass();
$lang->ai->formSchema['product']['create']->properties->desc     = new stdclass();
$lang->ai->formSchema['product']['create']->properties->acl      = new stdclass();
$lang->ai->formSchema['product']['create']->properties->name->type             = 'string';
$lang->ai->formSchema['product']['create']->properties->name->description      = 'Nombre del producto';
$lang->ai->formSchema['product']['create']->properties->code->type             = 'string';
$lang->ai->formSchema['product']['create']->properties->code->description      = 'Código del producto';
$lang->ai->formSchema['product']['create']->properties->type->type             = 'string';
$lang->ai->formSchema['product']['create']->properties->type->description      = 'Tipo de producto';
$lang->ai->formSchema['product']['create']->properties->type->enum             = array('normal', 'branch', 'platform');
$lang->ai->formSchema['product']['create']->properties->PO->type               = 'string';
$lang->ai->formSchema['product']['create']->properties->PO->description        = 'Gerente del producto';
$lang->ai->formSchema['product']['create']->properties->reviewer->type         = 'string';
$lang->ai->formSchema['product']['create']->properties->reviewer->description  = 'Revisores del producto, separados por comas';
$lang->ai->formSchema['product']['create']->properties->QD->type               = 'string';
$lang->ai->formSchema['product']['create']->properties->QD->description        = 'Responsable de QA del producto';
$lang->ai->formSchema['product']['create']->properties->RD->type               = 'string';
$lang->ai->formSchema['product']['create']->properties->RD->description        = 'Responsable de lanzamientos del producto';
$lang->ai->formSchema['product']['create']->properties->desc->type             = 'string';
$lang->ai->formSchema['product']['create']->properties->desc->format           = 'html';
$lang->ai->formSchema['product']['create']->properties->desc->description      = 'Descripción del producto';
$lang->ai->formSchema['product']['create']->properties->acl->type              = 'string';
$lang->ai->formSchema['product']['create']->properties->acl->description       = 'Control de acceso del producto';
$lang->ai->formSchema['product']['create']->properties->acl->enum              = array('open', 'private');
$lang->ai->formSchema['product']['create']->required = array('name', 'type');
$lang->ai->formSchema['product']['edit'] = clone $lang->ai->formSchema['product']['create'];
$lang->ai->formSchema['product']['edit']->properties = clone $lang->ai->formSchema['product']['create']->properties;
$lang->ai->formSchema['product']['edit']->properties->status = new stdclass();
$lang->ai->formSchema['product']['edit']->properties->status->type        = 'string';
$lang->ai->formSchema['product']['edit']->properties->status->description = 'Estado del producto';
$lang->ai->formSchema['product']['edit']->properties->status->enum        = array('normal', 'closed');

$lang->ai->formSchema['productplan']['create'] = new stdclass();
$lang->ai->formSchema['productplan']['create']->title = 'Plan de producto';
$lang->ai->formSchema['productplan']['create']->type  = 'object';
$lang->ai->formSchema['productplan']['create']->properties = new stdclass();
$lang->ai->formSchema['productplan']['create']->properties->title  = new stdclass();
$lang->ai->formSchema['productplan']['create']->properties->begin  = new stdclass();
$lang->ai->formSchema['productplan']['create']->properties->end    = new stdclass();
$lang->ai->formSchema['productplan']['create']->properties->desc   = new stdclass();
$lang->ai->formSchema['productplan']['create']->properties->title->type         = 'string';
$lang->ai->formSchema['productplan']['create']->properties->title->description  = 'Título del plan de producto';
$lang->ai->formSchema['productplan']['create']->properties->begin->type         = 'date';
$lang->ai->formSchema['productplan']['create']->properties->begin->description  = 'Fecha de inicio del plan de producto';
$lang->ai->formSchema['productplan']['create']->properties->end->type           = 'date';
$lang->ai->formSchema['productplan']['create']->properties->end->description    = 'Fecha de finalización del plan de producto';
$lang->ai->formSchema['productplan']['create']->properties->desc->type          = 'string';
$lang->ai->formSchema['productplan']['create']->properties->desc->description   = 'Descripción del plan de producto';
$lang->ai->formSchema['productplan']['create']->required = array('title', 'begin', 'end');

$lang->ai->formSchema['task']['create'] = new stdclass();
$lang->ai->formSchema['task']['create']->title = 'Tarea';
$lang->ai->formSchema['task']['create']->type  = 'object';
$lang->ai->formSchema['task']['create']->properties = new stdclass();
$lang->ai->formSchema['task']['create']->properties->type     = new stdclass();
$lang->ai->formSchema['task']['create']->properties->name     = new stdclass();
$lang->ai->formSchema['task']['create']->properties->desc     = new stdclass();
$lang->ai->formSchema['task']['create']->properties->pri      = new stdclass();
$lang->ai->formSchema['task']['create']->properties->estimate = new stdclass();
$lang->ai->formSchema['task']['create']->properties->begin    = new stdclass();
$lang->ai->formSchema['task']['create']->properties->end      = new stdclass();
$lang->ai->formSchema['task']['create']->properties->type->type            = 'string';
$lang->ai->formSchema['task']['create']->properties->type->description     = 'Tipo de tarea';
$lang->ai->formSchema['task']['create']->properties->type->enum            = array('design', 'devel', 'request', 'test', 'study', 'discuss', 'ui', 'affair', 'misc');
$lang->ai->formSchema['task']['create']->properties->name->type            = 'string';
$lang->ai->formSchema['task']['create']->properties->name->description     = 'Nombre de la tarea';
$lang->ai->formSchema['task']['create']->properties->desc->type            = 'string';
$lang->ai->formSchema['task']['create']->properties->desc->format          = 'html';
$lang->ai->formSchema['task']['create']->properties->desc->description     = 'Descripción de la tarea';
$lang->ai->formSchema['task']['create']->properties->pri->type             = 'string';
$lang->ai->formSchema['task']['create']->properties->pri->description      = 'Prioridad de la tarea';
$lang->ai->formSchema['task']['create']->properties->pri->enum             = array('1', '2', '3', '4');
$lang->ai->formSchema['task']['create']->properties->estimate->type        = 'number';
$lang->ai->formSchema['task']['create']->properties->estimate->description = 'Horas estimadas de la tarea';
$lang->ai->formSchema['task']['create']->properties->begin->type           = 'string';
$lang->ai->formSchema['task']['create']->properties->begin->format         = 'date';
$lang->ai->formSchema['task']['create']->properties->begin->description    = 'Fecha de inicio de la tarea';
$lang->ai->formSchema['task']['create']->properties->end->type             = 'string';
$lang->ai->formSchema['task']['create']->properties->end->format           = 'date';
$lang->ai->formSchema['task']['create']->properties->end->description      = 'Fecha de finalización de la tarea';
$lang->ai->formSchema['task']['create']->required = array('type', 'name');
$lang->ai->formSchema['task']['edit'] = $lang->ai->formSchema['task']['create'];

$lang->ai->formSchema['task']['batchcreate'] = new stdclass();
$lang->ai->formSchema['task']['batchcreate']->title = 'Tareas';
$lang->ai->formSchema['task']['batchcreate']->type  = 'object';
$lang->ai->formSchema['task']['batchcreate']->properties = new stdclass();
$lang->ai->formSchema['task']['batchcreate']->properties->tasks  = new stdclass();
$lang->ai->formSchema['task']['batchcreate']->properties->tasks->type                          = 'array';
$lang->ai->formSchema['task']['batchcreate']->properties->tasks->description                   = 'Tareas';
$lang->ai->formSchema['task']['batchcreate']->properties->tasks->items                         = $lang->ai->formSchema['task']['create'];
$lang->ai->formSchema['task']['batchcreate']->properties->tasks->items->properties->estStarted = clone $lang->ai->formSchema['task']['batchcreate']->properties->tasks->items->properties->begin;
$lang->ai->formSchema['task']['batchcreate']->properties->tasks->items->properties->deadline   = clone $lang->ai->formSchema['task']['batchcreate']->properties->tasks->items->properties->end;
unset($lang->ai->formSchema['task']['batchcreate']->properties->tasks->items->properties->begin);
unset($lang->ai->formSchema['task']['batchcreate']->properties->tasks->items->properties->end);

$lang->ai->formSchema['bug']['create'] = new stdclass();
$lang->ai->formSchema['bug']['create']->title = 'Bug';
$lang->ai->formSchema['bug']['create']->type  = 'object';
$lang->ai->formSchema['bug']['create']->properties = new stdclass();
$lang->ai->formSchema['bug']['create']->properties->title       = new stdclass();
$lang->ai->formSchema['bug']['create']->properties->steps       = new stdclass();
$lang->ai->formSchema['bug']['create']->properties->severity    = new stdclass();
$lang->ai->formSchema['bug']['create']->properties->pri         = new stdclass();
$lang->ai->formSchema['bug']['create']->properties->openedBuild = new stdclass();
$lang->ai->formSchema['bug']['create']->properties->title->type              = 'string';
$lang->ai->formSchema['bug']['create']->properties->title->description       = 'Título del bug';
$lang->ai->formSchema['bug']['create']->properties->steps->type              = 'string';
$lang->ai->formSchema['bug']['create']->properties->steps->format            = 'html';
$lang->ai->formSchema['bug']['create']->properties->steps->description       = 'Pasos para reproducir el bug';
$lang->ai->formSchema['bug']['create']->properties->severity->type           = 'string';
$lang->ai->formSchema['bug']['create']->properties->severity->description    = 'Severidad del bug';
$lang->ai->formSchema['bug']['create']->properties->severity->enum           = array('1', '2', '3', '4');
$lang->ai->formSchema['bug']['create']->properties->pri->type                = 'string';
$lang->ai->formSchema['bug']['create']->properties->pri->description         = 'Prioridad del bug';
$lang->ai->formSchema['bug']['create']->properties->pri->enum                = array('1', '2', '3', '4');
$lang->ai->formSchema['bug']['create']->properties->openedBuild->type        = 'string';
$lang->ai->formSchema['bug']['create']->properties->openedBuild->description = 'Builds afectados del Bug';
$lang->ai->formSchema['bug']['create']->properties->openedBuild->enum        = array('trunk');
$lang->ai->formSchema['bug']['create']->required = array('title', 'steps', 'severity', 'pri', 'openedBuild');
$lang->ai->formSchema['bug']['edit'] = $lang->ai->formSchema['bug']['create'];

$lang->ai->formSchema['feedback']['create'] = new stdclass();
$lang->ai->formSchema['feedback']['create']->title = 'Retroalimentación';
$lang->ai->formSchema['feedback']['create']->type  = 'object';
$lang->ai->formSchema['feedback']['create']->properties = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->type        = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->title       = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->pri         = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->desc        = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->feedbackBy  = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->source      = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->notifyEmail = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->keywords    = new stdclass();
$lang->ai->formSchema['feedback']['create']->properties->type->type               = 'string';
$lang->ai->formSchema['feedback']['create']->properties->type->description        = 'Tipo de retroalimentación';
$lang->ai->formSchema['feedback']['create']->properties->title->type              = 'string';
$lang->ai->formSchema['feedback']['create']->properties->title->description       = 'Título de la retroalimentación';
$lang->ai->formSchema['feedback']['create']->properties->pri->type                = 'string';
$lang->ai->formSchema['feedback']['create']->properties->pri->description         = 'Prioridad de la retroalimentación';
$lang->ai->formSchema['feedback']['create']->properties->pri->enum                = array('1', '2', '3', '4');
$lang->ai->formSchema['feedback']['create']->properties->desc->type               = 'string';
$lang->ai->formSchema['feedback']['create']->properties->desc->format             = 'html';
$lang->ai->formSchema['feedback']['create']->properties->desc->description        = 'Descripción de la retroalimentación';
$lang->ai->formSchema['feedback']['create']->properties->feedbackBy->type         = 'string';
$lang->ai->formSchema['feedback']['create']->properties->feedbackBy->description  = 'Proveedor de retroalimentación';
$lang->ai->formSchema['feedback']['create']->properties->source->type             = 'string';
$lang->ai->formSchema['feedback']['create']->properties->source->description      = 'Origen de la retroalimentación';
$lang->ai->formSchema['feedback']['create']->properties->notifyEmail->type        = 'string';
$lang->ai->formSchema['feedback']['create']->properties->notifyEmail->description = 'Correo de notificación';
$lang->ai->formSchema['feedback']['create']->properties->keywords->type           = 'string';
$lang->ai->formSchema['feedback']['create']->properties->keywords->description    = 'Palabras clave';
$lang->ai->formSchema['feedback']['create']->required = array('title');
$lang->ai->formSchema['feedback']['edit'] = $lang->ai->formSchema['feedback']['create'];

$lang->ai->formSchema['feedback']['batchcreate'] = new stdclass();
$lang->ai->formSchema['feedback']['batchcreate']->title = 'Retroalimentaciones';
$lang->ai->formSchema['feedback']['batchcreate']->type  = 'object';
$lang->ai->formSchema['feedback']['batchcreate']->properties = new stdclass();
$lang->ai->formSchema['feedback']['batchcreate']->properties->feedbacks  = new stdclass();
$lang->ai->formSchema['feedback']['batchcreate']->properties->feedbacks->type        = 'array';
$lang->ai->formSchema['feedback']['batchcreate']->properties->feedbacks->description = 'Retroalimentaciones';
$lang->ai->formSchema['feedback']['batchcreate']->properties->feedbacks->items       = $lang->ai->formSchema['feedback']['create'];

$lang->ai->formSchema['feedback']['batchedit'] = clone $lang->ai->formSchema['feedback']['batchcreate'];
$lang->ai->formSchema['feedback']['batchedit']->title = 'Retroalimentaciones';

$lang->ai->formSchema['ticket']['create'] = new stdclass();
$lang->ai->formSchema['ticket']['create']->title = 'Ticket';
$lang->ai->formSchema['ticket']['create']->type  = 'object';
$lang->ai->formSchema['ticket']['create']->properties = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->title    = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->type     = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->pri      = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->desc     = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->estimate = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->deadline = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->keywords = new stdclass();
$lang->ai->formSchema['ticket']['create']->properties->title->type            = 'string';
$lang->ai->formSchema['ticket']['create']->properties->title->description     = 'Título del ticket';
$lang->ai->formSchema['ticket']['create']->properties->type->type             = 'string';
$lang->ai->formSchema['ticket']['create']->properties->type->description      = 'Tipo de ticket';
$lang->ai->formSchema['ticket']['create']->properties->type->enum             = array('code', 'data', 'stuck', 'security', 'affair');
$lang->ai->formSchema['ticket']['create']->properties->pri->type              = 'string';
$lang->ai->formSchema['ticket']['create']->properties->pri->description       = 'Prioridad del ticket';
$lang->ai->formSchema['ticket']['create']->properties->pri->enum              = array('1', '2', '3', '4');
$lang->ai->formSchema['ticket']['create']->properties->desc->type             = 'string';
$lang->ai->formSchema['ticket']['create']->properties->desc->format           = 'html';
$lang->ai->formSchema['ticket']['create']->properties->desc->description      = 'Descripción del ticket';
$lang->ai->formSchema['ticket']['create']->properties->estimate->type         = 'number';
$lang->ai->formSchema['ticket']['create']->properties->estimate->description  = 'Horas estimadas del ticket';
$lang->ai->formSchema['ticket']['create']->properties->deadline->type         = 'string';
$lang->ai->formSchema['ticket']['create']->properties->deadline->format       = 'date';
$lang->ai->formSchema['ticket']['create']->properties->deadline->description  = 'Fecha límite del ticket';
$lang->ai->formSchema['ticket']['create']->properties->keywords->type         = 'string';
$lang->ai->formSchema['ticket']['create']->properties->keywords->description  = 'Palabras clave';
$lang->ai->formSchema['ticket']['create']->required = array('title');
$lang->ai->formSchema['ticket']['edit'] = $lang->ai->formSchema['ticket']['create'];

$lang->ai->formSchema['ticket']['batchcreate'] = new stdclass();
$lang->ai->formSchema['ticket']['batchcreate']->title = 'Tickets';
$lang->ai->formSchema['ticket']['batchcreate']->type  = 'object';
$lang->ai->formSchema['ticket']['batchcreate']->properties = new stdclass();
$lang->ai->formSchema['ticket']['batchcreate']->properties->tickets = new stdclass();
$lang->ai->formSchema['ticket']['batchcreate']->properties->tickets->type        = 'array';
$lang->ai->formSchema['ticket']['batchcreate']->properties->tickets->description = 'Tickets';
$lang->ai->formSchema['ticket']['batchcreate']->properties->tickets->items       = $lang->ai->formSchema['ticket']['create'];

$lang->ai->formSchema['ticket']['batchedit'] = clone $lang->ai->formSchema['ticket']['batchcreate'];
$lang->ai->formSchema['ticket']['batchedit']->title = 'Tickets';

$lang->ai->formSchema['issue']['create'] = new stdclass();
$lang->ai->formSchema['issue']['create']->title = 'Incidencia';
$lang->ai->formSchema['issue']['create']->type  = 'object';
$lang->ai->formSchema['issue']['create']->properties = new stdclass();
$lang->ai->formSchema['issue']['create']->properties->title     = new stdclass();
$lang->ai->formSchema['issue']['create']->properties->type      = new stdclass();
$lang->ai->formSchema['issue']['create']->properties->severity  = new stdclass();
$lang->ai->formSchema['issue']['create']->properties->pri       = new stdclass();
$lang->ai->formSchema['issue']['create']->properties->desc      = new stdclass();
$lang->ai->formSchema['issue']['create']->properties->deadline  = new stdclass();
$lang->ai->formSchema['issue']['create']->properties->title->type            = 'string';
$lang->ai->formSchema['issue']['create']->properties->title->description     = 'Título de la incidencia';
$lang->ai->formSchema['issue']['create']->properties->type->type             = 'string';
$lang->ai->formSchema['issue']['create']->properties->type->description      = 'Tipo de incidencia';
$lang->ai->formSchema['issue']['create']->properties->type->enum             = array('design', 'code', 'performance', 'version', 'storyadd', 'storychanged', 'storyremoved', 'data');
$lang->ai->formSchema['issue']['create']->properties->severity->type         = 'string';
$lang->ai->formSchema['issue']['create']->properties->severity->description  = 'Severidad de la incidencia';
$lang->ai->formSchema['issue']['create']->properties->severity->enum         = array('1', '2', '3', '4');
$lang->ai->formSchema['issue']['create']->properties->pri->type              = 'string';
$lang->ai->formSchema['issue']['create']->properties->pri->description       = 'Prioridad de la incidencia';
$lang->ai->formSchema['issue']['create']->properties->pri->enum              = array('1', '2', '3', '4');
$lang->ai->formSchema['issue']['create']->properties->desc->type             = 'string';
$lang->ai->formSchema['issue']['create']->properties->desc->format           = 'html';
$lang->ai->formSchema['issue']['create']->properties->desc->description      = 'Descripción de la incidencia';
$lang->ai->formSchema['issue']['create']->properties->deadline->type         = 'string';
$lang->ai->formSchema['issue']['create']->properties->deadline->format       = 'date';
$lang->ai->formSchema['issue']['create']->properties->deadline->description  = 'Fecha de resolución planificada';
$lang->ai->formSchema['issue']['create']->required = array('title', 'type', 'severity');
$lang->ai->formSchema['issue']['edit'] = $lang->ai->formSchema['issue']['create'];

$lang->ai->formSchema['issue']['batchcreate'] = new stdclass();
$lang->ai->formSchema['issue']['batchcreate']->title = 'Incidencias';
$lang->ai->formSchema['issue']['batchcreate']->type  = 'object';
$lang->ai->formSchema['issue']['batchcreate']->properties = new stdclass();
$lang->ai->formSchema['issue']['batchcreate']->properties->issues = new stdclass();
$lang->ai->formSchema['issue']['batchcreate']->properties->issues->type        = 'array';
$lang->ai->formSchema['issue']['batchcreate']->properties->issues->description = 'Incidencias';
$lang->ai->formSchema['issue']['batchcreate']->properties->issues->items       = $lang->ai->formSchema['issue']['create'];

$lang->ai->formSchema['risk']['create'] = new stdclass();
$lang->ai->formSchema['risk']['create']->title = 'Riesgo';
$lang->ai->formSchema['risk']['create']->type  = 'object';
$lang->ai->formSchema['risk']['create']->properties = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->name        = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->source      = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->category    = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->strategy    = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->impact      = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->probability = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->pri         = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->prevention  = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->remedy      = new stdclass();
$lang->ai->formSchema['risk']['create']->properties->name->type               = 'string';
$lang->ai->formSchema['risk']['create']->properties->name->description        = 'Nombre del riesgo';
$lang->ai->formSchema['risk']['create']->properties->source->type             = 'string';
$lang->ai->formSchema['risk']['create']->properties->source->description      = 'Origen del riesgo';
$lang->ai->formSchema['risk']['create']->properties->source->enum             = array('business', 'team', 'logistic', 'manage', 'sourcing', 'outsourcing', 'customer', 'others');
$lang->ai->formSchema['risk']['create']->properties->category->type           = 'string';
$lang->ai->formSchema['risk']['create']->properties->category->description    = 'Categoría del riesgo';
$lang->ai->formSchema['risk']['create']->properties->category->enum           = array('technical', 'manage', 'business', 'requirement', 'resource', 'others');
$lang->ai->formSchema['risk']['create']->properties->strategy->type           = 'string';
$lang->ai->formSchema['risk']['create']->properties->strategy->description    = 'Estrategia del riesgo';
$lang->ai->formSchema['risk']['create']->properties->strategy->enum           = array('avoidance', 'mitigation', 'transference', 'acceptance');
$lang->ai->formSchema['risk']['create']->properties->impact->type             = 'string';
$lang->ai->formSchema['risk']['create']->properties->impact->description      = 'Impacto del riesgo';
$lang->ai->formSchema['risk']['create']->properties->impact->enum             = array('1', '2', '3', '4', '5');
$lang->ai->formSchema['risk']['create']->properties->probability->type        = 'string';
$lang->ai->formSchema['risk']['create']->properties->probability->description = 'Probabilidad del riesgo';
$lang->ai->formSchema['risk']['create']->properties->probability->enum        = array('1', '2', '3', '4', '5');
$lang->ai->formSchema['risk']['create']->properties->pri->type                = 'string';
$lang->ai->formSchema['risk']['create']->properties->pri->description         = 'Prioridad del riesgo';
$lang->ai->formSchema['risk']['create']->properties->pri->enum                = array('1', '2', '3');
$lang->ai->formSchema['risk']['create']->properties->prevention->type         = 'string';
$lang->ai->formSchema['risk']['create']->properties->prevention->format       = 'html';
$lang->ai->formSchema['risk']['create']->properties->prevention->description  = 'Medidas de prevención';
$lang->ai->formSchema['risk']['create']->properties->remedy->type             = 'string';
$lang->ai->formSchema['risk']['create']->properties->remedy->format           = 'html';
$lang->ai->formSchema['risk']['create']->properties->remedy->description      = 'Medidas correctivas';
$lang->ai->formSchema['risk']['create']->required = array('name');
$lang->ai->formSchema['risk']['edit'] = $lang->ai->formSchema['risk']['create'];

$lang->ai->formSchema['risk']['batchcreate'] = new stdclass();
$lang->ai->formSchema['risk']['batchcreate']->title = 'Riesgos';
$lang->ai->formSchema['risk']['batchcreate']->type  = 'object';
$lang->ai->formSchema['risk']['batchcreate']->properties = new stdclass();
$lang->ai->formSchema['risk']['batchcreate']->properties->risks = new stdclass();
$lang->ai->formSchema['risk']['batchcreate']->properties->risks->type        = 'array';
$lang->ai->formSchema['risk']['batchcreate']->properties->risks->description = 'Riesgos';
$lang->ai->formSchema['risk']['batchcreate']->properties->risks->items       = $lang->ai->formSchema['risk']['create'];

$lang->ai->formSchema['testcase']['create'] = new stdclass();
$lang->ai->formSchema['testcase']['create']->title = 'Caso de prueba';
$lang->ai->formSchema['testcase']['create']->type  = 'object';
$lang->ai->formSchema['testcase']['create']->properties = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->type                             = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->stage                            = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->title                            = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->precondition                     = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->steps                            = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->steps->items                     = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties         = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->name   = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->step   = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->expect = new stdclass();
$lang->ai->formSchema['testcase']['create']->properties->type->type                                     = 'string';
$lang->ai->formSchema['testcase']['create']->properties->type->description                              = 'Tipo de caso de prueba';
$lang->ai->formSchema['testcase']['create']->properties->type->enum                                     = array('feature', 'performance', 'config', 'install', 'security', 'interface', 'unit', 'other');
$lang->ai->formSchema['testcase']['create']->properties->stage->type                                    = 'string';
$lang->ai->formSchema['testcase']['create']->properties->stage->description                             = 'Etapa del caso de prueba';
$lang->ai->formSchema['testcase']['create']->properties->stage->enum                                    = array('unittest', 'feature', 'intergrate', 'system', 'smoke', 'bvt');
$lang->ai->formSchema['testcase']['create']->properties->title->type                                    = 'string';
$lang->ai->formSchema['testcase']['create']->properties->title->description                             = 'Título del caso de prueba';
$lang->ai->formSchema['testcase']['create']->properties->precondition->type                             = 'string';
$lang->ai->formSchema['testcase']['create']->properties->precondition->description                      = 'Precondición del caso de prueba';
$lang->ai->formSchema['testcase']['create']->properties->steps->type                                    = 'array';
$lang->ai->formSchema['testcase']['create']->properties->steps->description                             = 'Pasos del caso de prueba';
$lang->ai->formSchema['testcase']['create']->properties->steps->items->type                             = 'object';
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->name->type           = 'string';
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->name->description    = 'Número de jerarquía que usa números separados por puntos para expresar el anidamiento: "1" para un grupo de primer nivel, "1.1" para un segundo nivel, "1.1.1" para un tercer nivel, con un máximo de dos niveles hijos; la numeración de hermanos comienza en 1';
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->step->type           = 'string';
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->step->description    = 'Descripción del paso';
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->expect->type         = 'string';
$lang->ai->formSchema['testcase']['create']->properties->steps->items->properties->expect->description  = 'Resultado esperado del paso';
$lang->ai->formSchema['testcase']['create']->required = array('type', 'title', 'steps');
$lang->ai->formSchema['testcase']['edit'] = $lang->ai->formSchema['testcase']['create'];

$lang->ai->formSchema['testreport']['create'] = new stdclass();
$lang->ai->formSchema['testreport']['create']->title = 'Informe de pruebas';
$lang->ai->formSchema['testreport']['create']->type  = 'object';
$lang->ai->formSchema['testreport']['create']->properties = new stdclass();
$lang->ai->formSchema['testreport']['create']->properties->begin  = new stdclass();
$lang->ai->formSchema['testreport']['create']->properties->end    = new stdclass();
$lang->ai->formSchema['testreport']['create']->properties->title  = new stdclass();
$lang->ai->formSchema['testreport']['create']->properties->report = new stdclass();
$lang->ai->formSchema['testreport']['create']->properties->begin->type         = 'string';
$lang->ai->formSchema['testreport']['create']->properties->begin->format       = 'date';
$lang->ai->formSchema['testreport']['create']->properties->begin->description  = 'Fecha de inicio de las pruebas';
$lang->ai->formSchema['testreport']['create']->properties->end->type           = 'string';
$lang->ai->formSchema['testreport']['create']->properties->end->format         = 'date';
$lang->ai->formSchema['testreport']['create']->properties->end->description    = 'Fecha de finalización de las pruebas';
$lang->ai->formSchema['testreport']['create']->properties->title->type         = 'string';
$lang->ai->formSchema['testreport']['create']->properties->title->description  = 'Título del informe de pruebas';
$lang->ai->formSchema['testreport']['create']->properties->report->type        = 'string';
$lang->ai->formSchema['testreport']['create']->properties->report->format      = 'html';
$lang->ai->formSchema['testreport']['create']->properties->report->description = 'Contenido del informe';
$lang->ai->formSchema['testreport']['create']->required = array('begin', 'end', 'title', 'report');
$lang->ai->formSchema['doc']['edit'] = new stdclass();
$lang->ai->formSchema['doc']['edit']->title = 'Documento';
$lang->ai->formSchema['doc']['edit']->type  = 'object';
$lang->ai->formSchema['doc']['edit']->properties = new stdclass();
$lang->ai->formSchema['doc']['edit']->properties->title   = new stdclass();
$lang->ai->formSchema['doc']['edit']->properties->content = new stdclass();
$lang->ai->formSchema['doc']['edit']->properties->contentType = new stdclass();
$lang->ai->formSchema['doc']['edit']->properties->title->type          = 'string';
$lang->ai->formSchema['doc']['edit']->properties->title->description   = 'Título del documento';
$lang->ai->formSchema['doc']['edit']->properties->content->type        = 'string';
$lang->ai->formSchema['doc']['edit']->properties->content->description = 'Contenido del documento';
$lang->ai->formSchema['doc']['edit']->properties->contentType->type        = 'string';
$lang->ai->formSchema['doc']['edit']->properties->contentType->description = 'Tipo de contenido';
$lang->ai->formSchema['doc']['edit']->properties->contentType->enum        = array('html', 'markdown');
$lang->ai->formSchema['doc']['edit']->required = array('title', 'content');
$lang->ai->formSchema['doc']['setdocbasic'] = $lang->ai->formSchema['doc']['edit'];

$lang->ai->formSchema['doc']['selectlibtype'] = $lang->ai->formSchema['doc']['edit'];

$lang->ai->formSchema['tree']['browse'] = new stdclass();
$lang->ai->formSchema['tree']['browse']->title = 'Módulos';
$lang->ai->formSchema['tree']['browse']->type  = 'object';
$lang->ai->formSchema['tree']['browse']->properties = new stdclass();
$lang->ai->formSchema['tree']['browse']->properties->modules = new stdclass();
$lang->ai->formSchema['tree']['browse']->properties->modules->type  = 'array';
$lang->ai->formSchema['tree']['browse']->properties->modules->title = 'Módulos';
$lang->ai->formSchema['tree']['browse']->properties->modules->items = new stdclass();
$lang->ai->formSchema['tree']['browse']->properties->modules->items->type = 'string';
$lang->ai->formSchema['tree']['browse']->required = array('modules');

$lang->ai->formSchema['programplan']['create'] = new stdclass();
$lang->ai->formSchema['programplan']['create']->title = 'Plan del programa';
$lang->ai->formSchema['programplan']['create']->type  = 'object';
$lang->ai->formSchema['programplan']['create']->properties = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->type  = 'array';
$lang->ai->formSchema['programplan']['create']->properties->stages->title = 'Planes';
$lang->ai->formSchema['programplan']['create']->properties->stages->items = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->items->type = 'object';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->names      = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->attributes = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->milestone  = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->begin      = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->end        = new stdclass();
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->names->type             = 'string';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->names->description      = 'Nombre de la etapa';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->attributes->type        = 'string';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->attributes->description = 'Atributo de la etapa';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->attributes->enum        = array('request', 'design', 'dev', 'qa', 'release', 'review', 'other');
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->milestone->type         = 'boolean';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->milestone->description  = '¿Es hito?';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->begin->type             = 'string';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->begin->format           = 'date';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->begin->description      = 'Fecha de inicio de la etapa';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->end->type               = 'string';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->end->format             = 'date';
$lang->ai->formSchema['programplan']['create']->properties->stages->items->properties->end->description        = 'Fecha de finalización de la etapa';
$lang->ai->formSchema['programplan']['create']->required = array('stages');

$lang->ai->promptMenu = new stdclass();
$lang->ai->promptMenu->dropdownTitle = 'Asistente de %s';
$lang->ai->promptMenu->assignedTo    = 'Responsable %s';

$lang->ai->dataInject = new stdclass();
$lang->ai->dataInject->success = 'Se completaron los resultados de la ejecución de ZenTao Agent.';
$lang->ai->dataInject->fail    = 'No se pudieron completar los resultados de ejecución del agente de ZenTao.';

$lang->ai->execute = new stdclass();
$lang->ai->execute->loading    = 'ZenTao Agent ejecutándose...';
$lang->ai->execute->auditing   = 'Preparando la auditoría...';
$lang->ai->execute->success    = 'ZenTao Agent ejecutado.';
$lang->ai->execute->fail       = 'Falló la ejecución de ZenTao Agent.';
$lang->ai->execute->failFormat = 'Falló la ejecución de ZenTao Agent: %s.';
$lang->ai->execute->failReasons = array();
$lang->ai->execute->failReasons['noPrompt']     = 'no se pudo obtener el ZenTao Agent';
$lang->ai->execute->failReasons['noObjectData'] = 'no se pudieron obtener los datos del objeto';
$lang->ai->execute->failReasons['noResponse']   = 'sin respuesta del servicio externo';
$lang->ai->execute->failReasons['noTargetForm'] = 'no se pudo obtener el formulario de destino ni sus campos obligatorios';
$lang->ai->execute->executeErrors = array();
$lang->ai->execute->executeErrors['-1'] = 'no se pudo obtener el ZenTao Agent';
$lang->ai->execute->executeErrors['-2'] = 'no se pudieron obtener los datos del objeto';
$lang->ai->execute->executeErrors['-3'] = 'no se pudieron serializar los datos del objeto';
$lang->ai->execute->executeErrors['-4'] = 'no se encontró un modelo disponible';
$lang->ai->execute->executeErrors['-5'] = 'no se pudo obtener el esquema del formulario de destino';
$lang->ai->execute->executeErrors['-6'] = 'la solicitud falló o la API devolvió un error';

$lang->ai->audit = new stdclass();
$lang->ai->audit->designPrompt = 'Diseño de ZenTao Agent';
$lang->ai->audit->afterSave    = 'Después de guardar,';
$lang->ai->audit->regenerate   = 'Regenerar';
$lang->ai->audit->exit         = 'Salir de la auditoría';

$lang->ai->audit->backLocationList = array();
$lang->ai->audit->backLocationList[0] = 'volver a la página de auditoría.';
$lang->ai->audit->backLocationList[1] = 'volver a la página de auditoría y regenerar.';

$lang->ai->engineeredPrompts = new stdclass();
$lang->ai->engineeredPrompts->askForFunctionCalling = array((object)array('role' => 'user', 'content' => 'Convierta mi siguiente mensaje en una llamada a función.'), (object)array('role' => 'assistant', 'content' => 'Claro, convertiré tu siguiente mensaje en una llamada a función.'));

$lang->ai->aiResponseException = array();
$lang->ai->aiResponseException['notFunctionCalling'] = 'La respuesta no es una llamada a función';

$lang->ai->assistant = new stdclass();
$lang->ai->assistant->view                     = 'Detalles del asistente de IA';
$lang->ai->assistant->title                    = 'Asistente de IA';
$lang->ai->assistant->create                   = 'Agregar asistente';
$lang->ai->assistant->details                  = 'Detalles del asistente';
$lang->ai->assistant->edit                     = 'Editar asistente';
$lang->ai->assistant->name                     = 'Nombre del asistente';
$lang->ai->assistant->refModel                 = 'Modelo de lenguaje de referencia';
$lang->ai->assistant->createdDate              = 'Hora de creación';
$lang->ai->assistant->publishedDate            = 'Hora de publicación';
$lang->ai->assistant->desc                     = 'Descripción';
$lang->ai->assistant->descPlaceholder          = 'Describa brevemente las funciones de este asistente de IA y la experiencia que puede ofrecer a los usuarios.';
$lang->ai->assistant->systemMessage            = 'Mensaje integrado del sistema';
$lang->ai->assistant->systemMessagePlaceholder = 'Puede darle a este diálogo de IA una "personalidad", por ejemplo: "Eres un asistente de informes semanales que generará un informe semanal con formato a partir del contenido ingresado".';
$lang->ai->assistant->greetings                = 'Saludos';
$lang->ai->assistant->greetingsPlaceholder     = 'Puede configurar el mensaje de saludo de este diálogo de IA, por ejemplo: "Hola, soy tu asistente de informes semanales. ¿Aún te cuesta redactar informes semanales? Prueba enviándome el trabajo de una semana".';
$lang->ai->assistant->publish                  = 'Publicar';
$lang->ai->assistant->withdraw                 = 'Deshabilitar';
$lang->ai->assistant->confirmPublishTip        = 'Tras la publicación, se mostrará en el diálogo de IA y en el diálogo del cliente, en la esquina inferior derecha de ZenTao. ¿Desea confirmar la publicación? ';
$lang->ai->assistant->confirmWithdrawTip       = 'Tras la desactivación, los usuarios del front-end no podrán ver este asistente de IA. ¿Confirma la desactivación? ';
$lang->ai->assistant->duplicateTip             = 'Los nombres de asistentes en el mismo modelo de lenguaje no pueden repetirse.';
$lang->ai->assistant->confirmDeleteTip         = '¿Desea confirmar la eliminación? ';
$lang->ai->assistant->switchAndClearContext    = 'Se cambió al asistente %s, el contexto ha sido borrado';
$lang->ai->assistant->noLlm                    = 'No hay ningún modelo de lenguaje disponible; cree primero un modelo de lenguaje.';
$lang->ai->assistant->defaultAssistant         = 'Asistente Omni';

$lang->ai->assistant->statusList = array();
$lang->ai->assistant->statusList['0']   = 'Sin publicar';
$lang->ai->assistant->statusList['off'] = 'Sin publicar';
$lang->ai->assistant->statusList['1']   = 'Publicado';
$lang->ai->assistant->statusList['on']  = 'Publicado';

// for render action changes.
$lang->aiassistant = $lang->ai->assistant;
