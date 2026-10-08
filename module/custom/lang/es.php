<?php
global $config;

$lang->custom->common               = 'Personalizado';
$lang->custom->id                   = 'ID';
$lang->custom->set                  = 'Configuración personalizada';
$lang->custom->restore              = 'Restablecer';
$lang->custom->key                  = 'Clave';
$lang->custom->value                = 'Valor';
$lang->custom->working              = 'Modo';
$lang->custom->hours                = 'Horas de trabajo';
$lang->custom->select               = 'Seleccione un proceso: ';
$lang->custom->branch               = 'Multi-Branch';
$lang->custom->owner                = 'Responsable';
$lang->custom->module               = 'Módulo';
$lang->custom->section              = 'Sección adicional';
$lang->custom->lang                 = 'Idioma';
$lang->custom->setPublic            = 'Establecer como público';
$lang->custom->required             = 'Campo obligatorio';
$lang->custom->score                = 'Puntos';
$lang->custom->timezone             = 'Zona horaria';
$lang->custom->scoreReset           = 'Restablecer puntos';
$lang->custom->scoreTitle           = 'Función de puntos';
$lang->custom->productName          = $lang->productCommon;
$lang->custom->convertFactor        = 'Factor de conversión';
$lang->custom->region               = 'Rango';
$lang->custom->tips                 = 'Prompt: ';
$lang->custom->setTips              = 'Establecer texto del prompt';
$lang->custom->isRange              = 'Dentro del rango objetivo';
$lang->custom->concept              = "{$lang->projectCommon} Concept";
$lang->custom->URStory              = "Funcionalidad";
$lang->custom->SRStory              = "Historia";
$lang->custom->default              = "Predeterminado";
$lang->custom->scrumStory           = "Historia";
$lang->custom->waterfallCommon      = "Cascada";
$lang->custom->buildin              = "Built-in";
$lang->custom->editStoryConcept     = "Editar concepto de historia";
$lang->custom->setStoryConcept      = "Establecer concepto de historia";
$lang->custom->setDefaultConcept    = "Establecer concepto predeterminado";
$lang->custom->browseStoryConcept   = "Lista de conceptos de historia";
$lang->custom->deleteStoryConcept   = "Eliminar concepto de historia";
$lang->custom->ERConcept            = "Concepto de épica";
$lang->custom->URConcept            = "Concepto de funcionalidad";
$lang->custom->SRConcept            = "Concepto de historia";
$lang->custom->reviewRule           = 'Reglas de revisión';
$lang->custom->switch               = "Cambiar";
$lang->custom->oneUnit              = "One {$lang->hourCommon}";
$lang->custom->convertRelationTitle = "Please set the conversion factor for converting {$lang->hourCommon} to %s.";
$lang->custom->superReviewers       = "Súper revisor";
$lang->custom->kanban               = "Kanban";
$lang->custom->allUsers             = 'Todos los usuarios';
$lang->custom->account              = 'Usuarios';
$lang->custom->role                 = 'Rol';
$lang->custom->dept                 = 'Depto.';
$lang->custom->code                 = $lang->code;
$lang->custom->setCode              = 'Habilitar código';
$lang->custom->projectCommon        = $lang->projectCommon . ' Configuración';
$lang->custom->executionCommon      = 'Ejecución';
$lang->custom->selectDefaultProgram = 'Seleccione un programa predeterminado.';
$lang->custom->defaultProgram       = 'Programa predeterminado';
$lang->custom->modeManagement       = 'Gestión de modos';
$lang->custom->percent              = $lang->stage->percent;
$lang->custom->setPercent           = "Enable {$lang->stage->percent}";
$lang->custom->beginAndEndDate      = 'Duración';
$lang->custom->beginAndEndDateRange = 'Rango de duración';
$lang->custom->limitTaskDateAction  = 'Establecer duración obligatoria';
$lang->custom->closeSetting         = 'Cerrar configuración';
$lang->custom->gradeRule            = 'Permitir subdivisión entre niveles';
$lang->custom->setExecutionClose    = 'Configuración de cierre de ejecución';
$lang->custom->kanbanExpireReminder = 'Recordatorio de vencimiento del Kanban';
$lang->custom->kanbanExpireDays     = 'Días de vencimiento del Kanban';
$lang->custom->feature              = 'Funcionalidad';

$lang->custom->gradeRuleList['cross']    = 'Sí';
$lang->custom->gradeRuleList['stepwise'] = 'No';

$lang->custom->unitList['efficiency'] = 'Horas de trabajo/';
$lang->custom->unitList['manhour']    = 'Horas-hombre/';
$lang->custom->unitList['cost']       = 'USD/Hour';
$lang->custom->unitList['hours']      = 'Horas';
$lang->custom->unitList['days']       = 'Días';
$lang->custom->unitList['loc']        = 'KLOC';

$lang->custom->tipProgressList['SPI'] = 'Índice de rendimiento del cronograma (SPI)';
$lang->custom->tipProgressList['SV']  = 'Variación del cronograma (SV%)';

$lang->custom->tipCostList['CPI'] = 'Índice de desempeño de costos (CPI)';
$lang->custom->tipCostList['CV']  = 'Variación de costos (CV%)';

$lang->custom->tipRangeList[0]  = 'No';
$lang->custom->tipRangeList[1]  = 'Sí';

$lang->custom->regionMustNumber    = 'El rango debe ser un número.';
$lang->custom->tipNotEmpty         = 'El texto del prompt no puede estar vacío.';
$lang->custom->currencyNotEmpty    = 'Seleccione al menos una moneda.';
$lang->custom->defaultNotEmpty     = 'La moneda predeterminada no puede estar vacía.';
$lang->custom->convertRelationTips = "Después de convertir {Slang->hourCommon} a %s, todos los datos históricos se convertirán a %s.";
$lang->custom->saveTips            = 'Al hacer clic en Guardar, el %s actual será la unidad de estimación predeterminada.';

$lang->custom->numberError = 'El rango debe ser mayor que cero.';
$lang->custom->hoursError  = 'Las horas de trabajo disponibles deben estar entre 0 y 24.';

$lang->custom->closedProject   = 'Cerrado ' . $lang->projectCommon;
$lang->custom->closedExecution = 'Cerrado ' . $lang->executionCommon;
$lang->custom->closedKanban    = 'Cerrado ' . $lang->custom->kanban;
$lang->custom->closedProduct   = 'Cerrado ' . $lang->productCommon;

$lang->custom->gradeStatusList['enable']  = 'Normal';
$lang->custom->gradeStatusList['disable'] = 'Deshabilitado';

$lang->custom->block = new stdclass();
$lang->custom->block->fields['closed'] = 'Bloques cerrados';

$lang->custom->project = new stdClass();
$lang->custom->project->currencySetting    = 'Configuración de moneda';
$lang->custom->project->defaultCurrency    = 'Moneda predeterminada';
$lang->custom->project->fields['required'] = $lang->custom->required;
$lang->custom->project->fields['project']  = 'Cerrar configuración';
$lang->custom->project->fields['unitList'] = 'Unidad del presupuesto';

$lang->custom->execution = new stdClass();
$lang->custom->execution->fields['required']  = $lang->custom->required;
$lang->custom->execution->fields['execution'] = 'Cerrar configuración';

$lang->custom->product = new stdClass();
$lang->custom->product->fields['required']           = $lang->custom->required;
$lang->custom->product->fields['browsestoryconcept'] = 'Concepto de historia';
$lang->custom->product->fields['product']            = 'Cerrar configuración';

$lang->custom->story = new stdClass();
$lang->custom->story->fields['required']         = $lang->custom->required;
$lang->custom->story->fields['categoryList']     = 'Tipo';
$lang->custom->story->fields['priList']          = 'Prioridad';
$lang->custom->story->fields['sourceList']       = 'Origen';
$lang->custom->story->fields['reasonList']       = 'Motivo de cierre';
$lang->custom->story->fields['stageList']        = 'Fase de desarrollo';
$lang->custom->story->fields['statusList']       = 'Estado';
$lang->custom->story->fields['reviewRules']      = 'Reglas de revisión';
$lang->custom->story->fields['reviewResultList'] = 'Resultado de la revisión';
$lang->custom->story->fields['review']           = 'Proceso de revisión';

$lang->custom->epic        = clone $lang->custom->story;
$lang->custom->requirement = clone $lang->custom->story;

$lang->custom->task = new stdClass();
$lang->custom->task->fields['required']      = $lang->custom->required;
$lang->custom->task->fields['priList']       = 'Prioridad';
$lang->custom->task->fields['typeList']      = 'Tipo';
$lang->custom->task->fields['reasonList']    = 'Motivo de cierre';
$lang->custom->task->fields['statusList']    = 'Estado';
$lang->custom->task->fields['limitTaskDate'] = 'Duración';

$lang->custom->bug = new stdClass();
$lang->custom->bug->fields['required']       = $lang->custom->required;
$lang->custom->bug->fields['priList']        = 'Prioridad';
$lang->custom->bug->fields['severityList']   = 'Severidad';
$lang->custom->bug->fields['osList']         = 'SO';
$lang->custom->bug->fields['browserList']    = 'Navegador';
$lang->custom->bug->fields['typeList']       = 'Tipo';
$lang->custom->bug->fields['resolutionList'] = 'Resolución';
$lang->custom->bug->fields['statusList']     = 'Estado';
$lang->custom->bug->fields['longlife']       = 'Días estancado';

$lang->custom->testcase = new stdClass();
$lang->custom->testcase->fields['required']   = $lang->custom->required;
$lang->custom->testcase->fields['priList']    = 'Prioridad';
$lang->custom->testcase->fields['typeList']   = 'Tipo';
$lang->custom->testcase->fields['stageList']  = 'Fase';
$lang->custom->testcase->fields['resultList'] = 'Resultado';
$lang->custom->testcase->fields['statusList'] = 'Estado';
$lang->custom->testcase->fields['review']     = 'Proceso de revisión';

$lang->custom->testtask = new stdClass();
$lang->custom->testtask->fields['required']   = $lang->custom->required;
$lang->custom->testtask->fields['statusList'] = 'Estado';
$lang->custom->testtask->fields['typeList']   = 'Tipo de prueba';
$lang->custom->testtask->fields['priList']    = 'Prioridad';

$lang->custom->testreport = new stdClass();
$lang->custom->testreport->fields['required'] = $lang->custom->required;

$lang->custom->caselib = new stdClass();
$lang->custom->caselib->fields['required'] = $lang->custom->required;

$lang->custom->todo = new stdClass();
$lang->custom->todo->fields['priList']    = 'Prioridad';
$lang->custom->todo->fields['typeList']   = 'Tipo';
$lang->custom->todo->fields['statusList'] = 'Estado';

$lang->custom->user = new stdClass();
$lang->custom->user->fields['required']     = $lang->custom->required;
$lang->custom->user->fields['roleList']     = 'Rol';
$lang->custom->user->fields['statusList']   = 'Estado';
$lang->custom->user->fields['contactField'] = 'Métodos de contacto disponibles';
$lang->custom->user->fields['outside']      = 'Mostrar usuarios externos';
$lang->custom->user->fields['deleted']      = 'Mostrar usuarios eliminados';

$lang->custom->currentLang = 'Aplicar al idioma actual';
$lang->custom->allLang     = 'Aplicar a todos los idiomas';

$lang->custom->confirmRestore = '¿Seguro que desea restaurar la configuración predeterminada?';

$lang->custom->notice = new stdclass();
$lang->custom->notice->userFieldNotice     = 'Controla la visibilidad de los campos anteriores en las páginas de usuarios. Déjelo en blanco para mostrar todos.';
$lang->custom->notice->outside             = 'Los usuarios externos aún pueden ser asignados en todos los lugares relacionados con el personal, como: gerente de programa, responsable de producto, gerente de proyecto, responsable de ejecución, miembros del equipo del proyecto, miembros del equipo de ejecución, lista blanca, contactos, asignados, etc.';
$lang->custom->notice->canNotAdd           = 'Este elemento se usa en cálculos; no se permiten adiciones personalizadas.';
$lang->custom->notice->forceReview         = 'Los %s enviados por los usuarios especificados requieren revisión.';
$lang->custom->notice->forceNotReview      = "Los %s enviados por los usuarios especificados no requieren revisión.";
$lang->custom->notice->longlife            = 'La pestaña Estancados en la lista de bugs muestra los bugs que llevan sin resolverse más del número de días configurado.';
$lang->custom->notice->invalidNumberKey    = 'El valor de la clave debe ser un número no mayor que 255.';
$lang->custom->notice->invalidStringKey    = 'El valor de la clave debe ser una combinación de letras mayúsculas/minúsculas, números o guiones bajos.';
$lang->custom->notice->cannotSetTimezone   = 'Falta la función \'date_default_timezone_set\' o está deshabilitada; no se puede configurar la zona horaria.';
$lang->custom->notice->noClosedBlock       = 'No hay bloques cerrados permanentemente.';
$lang->custom->notice->required            = 'Los campos seleccionados son obligatorios al enviar el formulario.';
$lang->custom->notice->conceptResult       = 'Según su selección, configuramos el modo <b>%s-%s</b> usando <b>%s</b> + <b>%s</b>.';
$lang->custom->notice->conceptPath         = 'Vaya a Admin -> Personalizar -> Concepto para configurarlo.';
$lang->custom->notice->readOnlyOfProduct   = "Once set Changes Prohibited, {$lang->SRCommon}, Bug, Test Case, Effort, Release, Plan, and Build under a closed product cannot be modified.";
$lang->custom->notice->readOnlyOfProject   = "Once set Changes Prohibited, any change on closed {$lang->projectCommon}s is not allowed:<br/>
1. For {$lang->productCommon}-based {$lang->projectCommon}s with {$lang->custom->executionCommon} enabled: The following will not be editable under closed {$lang->projectCommon}s: {$lang->custom->executionCommon}, stories, design, reviews, review issues, baselines, documents, builds, releases, efforts, test requests, test reports, process tailoring, research, estimation, issues, risks, opportunities, meetings, QA plans, non-conformities, etc.<br/>
2. For {$lang->productCommon}-based {$lang->projectCommon}s with{$lang->custom->executionCommon} disabled: The following will not be editable under closed {$lang->projectCommon}s: tasks, stories, builds, releases, efforts, test request, test reports, documents, etc.<br/>
3. For non-{$lang->productCommon}-based {$lang->projectCommon}s with {$lang->custom->executionCommon} enabled: The following will not be editable under closed {$lang->projectCommon}s: {$lang->custom->executionCommon}, stories, design, reviews, review issues, baselines, bugs, test cases, test requestd, test reports, documents, builds, releases, efforts, process tailoring, research, estimation, issues, risks, opportunities, meetings, QA plans, non-conformities, etc.<br/>
4. For non-{$lang->productCommon}-based {$lang->projectCommon}s with {$lang->custom->executionCommon} disabled: The following will not be editable under closed {$lang->projectCommon}s: tasks, stories, bugs, test cases, test requestd, test reports, documents, builds, releases, efforts, etc.";
$lang->custom->notice->kanbanReminder      = 'Cuando la fecha límite de la tarjeta es inferior al número de días configurado, se activa el recordatorio de vencimiento.';
if(in_array($config->edition, array('open', 'biz')))
{
    $lang->custom->notice->readOnlyOfExecution = "If Change Forbidden, any change on tasks, builds, efforts, test tasks, test reports, documents and stories of the closed {$lang->executionCommon} is also forbidden.";
}
else
{
    $lang->custom->notice->readOnlyOfExecution = "If Change Forbidden, any change on tasks, builds, efforts, test tasks, test reports, documents, issues, risks, QAs, meettings and stories of the closed {$lang->executionCommon} is also forbidden.";
}
$lang->custom->notice->readOnlyOfKanban    = "If Change Forbidden, any change on kanban card and related operations of {$lang->custom->kanban} is also forbidden.";
$lang->custom->notice->URSREmpty           = 'El nombre personalizado de la historia no puede estar vacío.';
$lang->custom->notice->valueEmpty          = 'El valor no puede estar vacío.';
$lang->custom->notice->confirmDelete       = '¿Seguro que desea eliminarlo?';
$lang->custom->notice->confirmReviewCase   = '¿Desea cambiar el estado de los casos de prueba en espera de revisión a Normal?';
$lang->custom->notice->storyReviewTip      = 'Al seleccionar usuarios, roles o departamentos, el sistema toma la unión de todos los miembros incluidos.';
$lang->custom->notice->selectAllTip        = 'Al seleccionar todos los usuarios, se borrarán y deshabilitarán los revisores, y se ocultarán los filtros de rol y departamento.';
$lang->custom->notice->repeatKey           = 'Clave duplicada: %s';
$lang->custom->notice->readOnlyOfCode      = "Los códigos sirven como alias de gestión por confidencialidad. Una vez activados, se mostrarán los códigos de productos, proyectos y ejecuciones en las vistas de creación, edición, detalle y lista.";
$lang->custom->notice->readOnlyOfPercent   = "Workload Ratio is used to allocate workloads across multiple phases within a {$lang->projectCommon}. The total percentage among phases of the same level cannot exceed 100%. Once Workload Ratio is enabled, phase workload allocation must be maintained in both Waterfall {$lang->projectCommon} and Waterfall+ {$lang->projectCommon} models.";
$lang->custom->notice->gradeRule           = 'Desglose entre niveles: puede crear historias desde cualquier nivel de la jerarquía y establecer vínculos padre-hijo entre capas. Por ejemplo, puede crear una historia de nivel 3 directamente bajo una historia de nivel 1.';

$lang->custom->notice->indexPage['product'] = "A partir de la versión 8.2 se agregó una vista de Inicio de producto. ¿Desea establecerla como página de inicio predeterminada?";
$lang->custom->notice->indexPage['project'] = "Starting from version 8.2, a {$lang->projectCommon} Home view has been added. Would you like to set it as the default landing page?";
$lang->custom->notice->indexPage['qa']      = "A partir de la versión 8.2 se agregó una vista de Inicio de pruebas. ¿Desea establecerla como página de inicio predeterminada?";

$lang->custom->notice->invalidStrlen['ten']        = 'La clave debe tener <= 10 caracteres.';
$lang->custom->notice->invalidStrlen['fifteen']    = 'La clave debe tener <= 15 caracteres.';
$lang->custom->notice->invalidStrlen['twenty']     = 'La clave debe tener <= 20 caracteres.';
$lang->custom->notice->invalidStrlen['thirty']     = 'La clave debe tener <= 30 caracteres.';
$lang->custom->notice->invalidStrlen['twoHundred'] = 'La clave debe tener <= 225 caracteres.';

$lang->custom->storyReview    = 'Proceso de revisión';
$lang->custom->forceReview    = 'Revisión obligatoria';
$lang->custom->forceNotReview = 'No requiere revisión';
$lang->custom->reviewList[1]  = 'Habilitar';
$lang->custom->reviewList[0]  = 'Deshabilitar';

$lang->custom->outsideList[1] = 'Mostrar';
$lang->custom->outsideList[0] = 'Ocultar';

$lang->custom->deletedList[1] = 'Mostrar';
$lang->custom->deletedList[0] = 'Ocultar';

$lang->custom->setHours       = 'Configuración de horas de trabajo';
$lang->custom->setWeekend     = 'Configuración de días de descanso';
$lang->custom->setHoliday     = 'Configuración de festivos';
$lang->custom->workingHours   = 'Horas de trabajo disponibles por día';
$lang->custom->weekendRole    = 'Configuración de reglas';
$lang->custom->weekendList[1] = '1 día libre';
$lang->custom->weekendList[2] = '2 días libres';
$lang->custom->restDayList[6] = 'Sábado libre';
$lang->custom->restDayList[0] = 'Domingo libre';

global $config;
$lang->custom->sprintConceptList[0] = 'Iteración de producto del proyecto';
$lang->custom->sprintConceptList[1] = 'Sprint de producto del proyecto';

$lang->custom->workingList['full'] = 'Una herramienta completa de gestión de I+D';

$lang->custom->menuTip           = 'Haga clic para mostrar u ocultar elementos de navegación y arrastre para cambiar su orden.';
$lang->custom->saveFail          = 'No se pudo guardar.';
$lang->custom->page              = ' Página';
$lang->custom->usage             = 'Escenarios de uso';
$lang->custom->selectUsage       = 'Seleccione un escenario';
$lang->custom->useLight          = 'Modo claro';
$lang->custom->useALM            = 'Modo ALM';
$lang->custom->currentModeTips   = 'Actualmente está usando el modo %s. Puede cambiar al modo %s.';
$lang->custom->changeModeTips    = '¿Seguro que desea cambiar al modo %s?';
$lang->custom->selectProgramTips = "After switching to the Light Mode, you need to select a program as the default one to maintain data consistency. All newly created {$lang->productCommon} and {$lang->projectCommon} entries will be linked with this default program.";

$lang->custom->modeList['light'] = 'Modo claro';
$lang->custom->modeList['ALM']   = 'Modo ALM';
$lang->custom->modeList['PLM']   = 'Modo IPD';

$lang->custom->modeIntroductionList['light'] = "Provides the core function of {$lang->projectCommon} management. Suitable for small R&D teams.";
$lang->custom->modeIntroductionList['ALM']   = 'El concepto es más completo y riguroso, y las funciones son más abundantes. Es adecuado para equipos de I+D medianos y grandes.';

$lang->custom->features['program']              = 'Programa';
$lang->custom->features['productRR']            = $lang->productCommon . ' - Historia';
$lang->custom->features['productUR']            = $lang->productCommon . ' - Funcionalidad';
$lang->custom->features['productER']            = $lang->productCommon . ' - Épica';
$lang->custom->features['productLine']          = $lang->productCommon . ' - Línea de producto';
$lang->custom->features['projectScrum']         = $lang->projectCommon . ' - Modelo Scrum';
$lang->custom->features['projectWaterfall']     = $lang->projectCommon . ' - Modelo en cascada';
$lang->custom->features['projectKanban']        = $lang->projectCommon . ' - Modelo Kanban';
$lang->custom->features['projectAgileplus']     = $lang->projectCommon . ' - Ágil + Modelo';
$lang->custom->features['projectWaterfallplus'] = $lang->projectCommon . ' - Cascada + Modelo';
$lang->custom->features['execution']            = 'Ejecución';
$lang->custom->features['qa']                   = 'Prueba';
$lang->custom->features['devops']               = 'CI&CD';
$lang->custom->features['kanban']               = 'Kanban';
$lang->custom->features['doc']                  = 'Documento';
$lang->custom->features['report']               = 'BI';
$lang->custom->features['system']               = 'Empresa';
$lang->custom->features['assetlib']             = 'Recurso';
$lang->custom->features['ops']                  = 'OPS';
$lang->custom->features['feedback']             = 'Retroalimentación';
$lang->custom->features['traincourse']          = 'Academia';
$lang->custom->features['workflow']             = 'Flujo de trabajo';
$lang->custom->features['admin']                = 'Administración';
$lang->custom->features['vision']               = 'Interfaz de funcionalidad completa, interfaz de gestión de operaciones';
$lang->custom->features['ai']                   = 'IA';

$lang->custom->needClosedFunctions['waterfall']     = 'Cascada';
$lang->custom->needClosedFunctions['waterfallplus'] = 'Cascada +';
$lang->custom->needClosedFunctions['URStory']       = 'Funcionalidad';
if($config->edition == 'max') $lang->custom->needClosedFunctions['assetLib'] = 'Assetlib';

$lang->custom->scoreStatus[1] = 'Activado';
$lang->custom->scoreStatus[0] = 'Desactivado';

$lang->custom->CRProduct[1] = 'Cambios permitidos';
$lang->custom->CRProduct[0] = 'Cambios prohibidos';

$lang->custom->CRProject[1] = 'Cambios permitidos';
$lang->custom->CRProject[0] = 'Cambios prohibidos';

$lang->custom->CRExecution[1] = 'Cambios permitidos';
$lang->custom->CRExecution[0] = 'Cambios prohibidos';

$lang->custom->CRKanban[1] = 'Cambios permitidos';
$lang->custom->CRKanban[0] = 'Cambios prohibidos';

$lang->custom->moduleName['product']     = $lang->productCommon;
$lang->custom->moduleName['productplan'] = 'Plan';
$lang->custom->moduleName['execution']   = $lang->custom->executionCommon;

$lang->custom->conceptQuestions['overview']   = "¿Cuál de los siguientes modelos de gestión se ajusta mejor al flujo de trabajo actual de su empresa?";
$lang->custom->conceptQuestions['URAndSR']    = "Would you like to enable the {$lang->URCommon} and {$lang->SRCommon} concepts?";
$lang->custom->conceptQuestions['storypoint'] = "¿Qué unidad usa su empresa para la estimación?";

$lang->custom->conceptOptions             = new stdclass;
$lang->custom->conceptOptions->story      = array();
$lang->custom->conceptOptions->story['0'] = 'Funcionalidad';
$lang->custom->conceptOptions->story['1'] = 'Historia';

$lang->custom->conceptOptions->URAndSR = array();
$lang->custom->conceptOptions->URAndSR['1'] = 'Sí';
$lang->custom->conceptOptions->URAndSR['0'] = 'No';

$lang->custom->conceptOptions->hourPoint      = array();
$lang->custom->conceptOptions->hourPoint['0'] = 'Horas de trabajo';
$lang->custom->conceptOptions->hourPoint['1'] = 'Puntos de historia';
$lang->custom->conceptOptions->hourPoint['2'] = 'Puntos de función';

$lang->custom->scrum = new stdclass();
$lang->custom->scrum->setConcept = "Set {$lang->projectCommon} Concept";

$lang->custom->reviewRules['allpass']  = 'Aprobado por todos';
$lang->custom->reviewRules['halfpass'] = 'Aprobado por mayoría';

$lang->custom->limitTaskDate['0'] = 'Sin restricción';
$lang->custom->limitTaskDate['1'] = 'Restringido a la duración de la ejecución.';

$lang->custom->setDate = new stdClass();
$lang->custom->setDate->fields['hours']   = $lang->custom->setHours;
$lang->custom->setDate->fields['weekend'] = $lang->custom->setWeekend;
$lang->custom->setDate->fields['holiday'] = $lang->custom->setHoliday;
