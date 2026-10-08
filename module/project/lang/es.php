<?php
global $app;
global $config;

/* Actions. */
$lang->project->createGuide         = 'Seleccionar plantilla';
$lang->project->index               = 'Panel';
$lang->project->home                = 'Inicio';
$lang->project->create              = "Crear {$lang->projectCommon}";
$lang->project->edit                = 'Editar';
$lang->project->batchEdit           = "Edición por lotes de {$lang->projectCommon}";
$lang->project->view                = "Resumen de {$lang->projectCommon}";
$lang->project->batchEdit           = "Edición por lotes de {$lang->projectCommon}";
$lang->project->browse              = $lang->projectCommon;
$lang->project->all                 = 'Todos';
$lang->project->involved            = "Proyectos involucrados";
$lang->project->start               = 'Iniciar';
$lang->project->finish              = 'Completar';
$lang->project->suspend             = 'En espera';
$lang->project->delete              = 'Eliminar';
$lang->project->close               = 'Cerrar';
$lang->project->activate            = 'Activar';
$lang->project->group               = 'Lista de permisos';
$lang->project->createGroup         = 'Crear grupo';
$lang->project->editGroup           = 'Editar grupo';
$lang->project->copyGroup           = 'Copiar grupo';
$lang->project->manageView          = 'Administrar permiso de visualización';
$lang->project->managePriv          = 'Administrar permiso';
$lang->project->manageMembers       = 'Administrar equipo';
$lang->project->export              = 'Exportar';
$lang->project->addProduct          = "Agregar {$lang->productCommon}";
$lang->project->manageGroupMember   = 'Administrar grupo';
$lang->project->moduleSetting       = 'Configuración de la lista';
$lang->project->moduleOpen          = 'Nombre del programa';
$lang->project->moduleOpenAction    = 'Configuración del nombre del programa';
$lang->project->dynamic             = 'Recientes';
$lang->project->execution           = 'Ejecución';
$lang->project->bug                 = 'Lista de Bugs';
$lang->project->testcase            = 'Lista de casos de prueba';
$lang->project->testtask            = 'Lista de solicitudes de prueba';
$lang->project->build               = 'Build';
$lang->project->updateOrder         = 'Ordenar';
$lang->project->sort                = 'Ordenar';
$lang->project->whitelist           = "Lista blanca de {$lang->projectCommon}";
$lang->project->addWhitelist        = "Agregar lista blanca";
$lang->project->unbindWhitelist     = "Quitar de la lista blanca";
$lang->project->manageProducts      = "Vincular {$lang->productCommon}";
$lang->project->manageOtherProducts = "Vincular otros: {$lang->productCommon}";
$lang->project->manageProductPlan   = "Vincular {$lang->productCommon} y planes";
$lang->project->managePlans         = 'Vincular planes';
$lang->project->copyTitle           = "Seleccione {$lang->projectCommon} para copiar.";
$lang->project->errorSameProducts   = "{$lang->projectCommon} no se puede vincular a varios elementos idénticos de {$lang->productCommon}.";
$lang->project->errorSameBranches   = "{$lang->projectCommon} no se puede vincular a varias ramas idénticas.";
$lang->project->errorSamePlans      = "{$lang->projectCommon} no se puede vincular a varios planes idénticos.";
$lang->project->errorNoProducts     = "Debe vincular al menos un elemento de {$lang->productCommon}.";
$lang->project->copyNoProject       = "No hay {$lang->projectCommon} disponibles para copiar.";
$lang->project->searchByName        = "Ingrese el nombre de {$lang->projectCommon} para buscar.";
$lang->project->emptyProgram        = "Proyectos independientes";
$lang->project->deleted             = 'Eliminado';
$lang->project->linkedProducts      = "Vinculados: {$lang->productCommon}";
$lang->project->unlinkedProducts    = "Desvinculados: {$lang->productCommon}";
$lang->project->testreport          = 'Lista de informes de pruebas';
$lang->project->selectProgram       = 'Filtro de programas';
$lang->project->teamMember          = 'Miembro del equipo';
$lang->project->unlinkMember        = 'Quitar miembro';
$lang->project->unlinkMemberAction  = 'Quitar miembro del equipo';
$lang->project->copyTeamTitle       = "Seleccione el equipo de {$lang->projectCommon} para copiar.";
$lang->project->daysGreaterProject  = "Los días laborables disponibles no pueden superar el máximo de {$lang->projectCommon} 『%s』";
$lang->project->errorHours          = 'Las horas de trabajo disponibles por día no pueden exceder 24.';
$lang->project->workdaysExceed      = 'Los días de trabajo no pueden exceder『%s』.';
$lang->project->teamMembersCount    = ', el equipo tiene un total de %s miembros.';
$lang->project->allProjects         = "Todos: {$lang->projectCommon}";
$lang->project->ignore              = 'Ignorar';
$lang->project->disableExecution    = "{$lang->projectCommon} con {$lang->executionCommon} deshabilitada";
$lang->project->selectProduct       = "Seleccionar {$lang->productCommon}";
$lang->project->manageRepo          = 'Vincular repositorio';
$lang->project->linkedRepo          = 'Repositorio vinculado';
$lang->project->unlinkedRepo        = 'Desvincular repositorio';
$lang->project->executionCount      = 'Cantidad de ejecuciones';
$lang->project->storyType           = 'Concepto de historia';
$lang->project->storyCount          = 'Cantidad de historias';
$lang->project->storyPoints         = 'Puntos de historia';
$lang->project->invested            = 'Invertido';
$lang->project->member              = 'Miembros';
$lang->project->manage              = 'Administrar';
$lang->project->market              = 'Mercado objetivo';
$lang->project->tips                = 'Nota';
$lang->project->afterInfo           = "{$lang->projectCommon} creado correctamente. A continuación puede";
$lang->project->setTeam             = 'Administrar equipo';
$lang->project->linkStory           = 'Vincular historias';
$lang->project->createStory         = "Crear {$lang->SRCommon}";
$lang->project->createTask          = "Crear tarea";
$lang->project->createExecutionTip  = 'Crear %s';
$lang->project->setDoc              = 'Agregar documentos';
$lang->project->backToTaskList      = 'Volver a la lista de tareas';
$lang->project->backToKanban        = 'Volver al Kanban';
$lang->project->backToExecutionList = 'Volver a la lista del proyecto %s';
$lang->project->backToProjectList   = 'Volver a la lista de proyectos';
$lang->project->deletedTip          = "Lo sentimos, {$lang->projectCommon} al que intenta acceder ha sido eliminado.";
$lang->project->coverExecutionPriv  = "Control de privilegios de ejecución";
$lang->project->executionView       = "Vista de {$lang->execution->common}";

$lang->project->manDay          = 'Personas-día';
$lang->project->day             = 'Día';
$lang->project->newProduct      = 'Nuevo producto';
$lang->project->associatePlan   = 'Vincular plan';
$lang->project->tenThousandYuan = '10k';
$lang->project->planDate        = 'Duración planificada';
$lang->project->delayInfo       = '%s días de retraso';

/* Fields. */
$lang->project->common             = $lang->projectCommon;
$lang->project->id                 = 'ID';
$lang->project->project            = $lang->projectCommon;
$lang->project->stage              = 'Fase';
$lang->project->model              = 'Tipo de gestión';
$lang->project->PM                 = 'Gerente';
$lang->project->PO                 = "Responsable de {$lang->projectCommon}";
$lang->project->QD                 = 'Gerente de pruebas';
$lang->project->RD                 = 'Responsable de lanzamientos';
$lang->project->name               = 'Nombre';
$lang->project->category           = 'Tipo';
$lang->project->desc               = 'Descripción';
$lang->project->code               = 'Código';
$lang->project->hasProduct         = "Vincular a {$lang->productCommon}";
$lang->project->copy               = 'Copiar';
$lang->project->begin              = 'Inicio planificado';
$lang->project->end                = 'Fin planificado';
$lang->project->status             = 'Estado';
$lang->project->subStatus          = 'Subestado';
$lang->project->type               = 'Tipo';
$lang->project->lifetime           = "Duración de {$lang->projectCommon}";
$lang->project->attribute          = 'Tipo de fase';
$lang->project->percent            = 'Carga de trabajo %';
$lang->project->milestone          = 'Hito';
$lang->project->milestoneReport    = 'Informe de hitos';
$lang->project->output             = 'Salida';
$lang->project->path               = 'Ruta';
$lang->project->grade              = 'Jerarquía';
$lang->project->version            = 'Versión';
$lang->project->latestVersion      = 'Última versión';
$lang->project->allVersions        = 'Todas las versiones';
$lang->project->diffVersion        = 'Comparar';
$lang->project->saveVersion        = 'Guardar como nueva versión';
$lang->project->program            = 'Programa';
$lang->project->parentVersion      = 'Versión padre';
$lang->project->planDuration       = 'Duración planificada';
$lang->project->realDuration       = 'Duración real';
$lang->project->openedVersion      = 'Crear versión';
$lang->project->pri                = 'Prioridad';
$lang->project->openedBy           = 'Creador';
$lang->project->openedDate         = 'Creado el';
$lang->project->lastEditedBy       = 'Última edición por';
$lang->project->lastEditedDate     = 'Última edición el';
$lang->project->closedBy           = 'Cerrado por';
$lang->project->closedDate         = 'Cerrado el';
$lang->project->closedReason       = 'Motivo de cierre';
$lang->project->canceledBy         = 'Cancelado por';
$lang->project->canceledDate       = 'Cancelado el';
$lang->project->team               = 'Equipo';
$lang->project->teamAction         = 'Lista del equipo';
$lang->project->order              = 'Ordenar';
$lang->project->budget             = 'Presupuesto';
$lang->project->budgetUnit         = "(Unidad: {$lang->project->tenThousandYuan})";
$lang->project->suspendedDate      = 'Pausado el';
$lang->project->vision             = 'Interfaz';
$lang->project->displayCards       = 'Máximo de tarjetas por columna';
$lang->project->fluidBoard         = 'Ancho de la columna';
$lang->project->template           = 'Plantilla';
$lang->project->estimate           = 'Esfuerzo estimado';
$lang->project->consume            = 'Costo';
$lang->project->surplus            = 'Restante';
$lang->project->progress           = ' Progreso';
$lang->project->allProgress        = 'Progreso total';
$lang->project->realProgress       = 'Progreso real';
$lang->project->weekProgress       = 'Progreso de esta semana';
$lang->project->dateRange          = 'Duración planificada';
$lang->project->to                 = ' to ';
$lang->project->realBeganAB        = 'Inicio real';
$lang->project->realEndAB          = 'Fin real';
$lang->project->realBegan          = 'Inicio real';
$lang->project->realEnd            = 'Fin real';
$lang->project->stageBy            = 'Tipo de fase';
$lang->project->bygrid             = 'Kanban';
$lang->project->bylist             = 'Lista';
$lang->project->bycard             = 'Tarjeta';
$lang->project->mine               = 'Mi participación';
$lang->project->myProject          = 'Mis administrados';
$lang->project->other              = 'Otros';
$lang->project->acl                = 'Control de acceso';
$lang->project->setPlanduration    = 'Establecer duración';
$lang->project->auth               = 'Permiso';
$lang->project->durationEstimation = 'Carga de trabajo estimada';
$lang->project->left               = 'Horas restantes';
$lang->project->consumed           = 'Horas de costo';
$lang->project->leftStories        = 'Historias restantes';
$lang->project->leftTasks          = 'Tareas restantes';
$lang->project->leftBugs           = 'Bugs restantes';
$lang->project->leftHours          = 'Horas restantes';
$lang->project->children           = "Subnivel de {$lang->projectCommon}";
$lang->project->parent             = 'Programa padre';
$lang->project->allStories         = 'Todas las historias';
$lang->project->doneStories        = 'Historias completadas';
$lang->project->doneProjects       = 'Completado';
$lang->project->allInput           = 'Total invertido';
$lang->project->weekly             = 'Informe semanal';
$lang->project->pv                 = 'PV';
$lang->project->ev                 = 'EV';
$lang->project->sv                 = 'SV%';
$lang->project->ac                 = 'AC';
$lang->project->cv                 = 'CV%';
$lang->project->pvTitle            = 'Valor planificado';
$lang->project->evTitle            = 'Valor ganado';
$lang->project->svTitle            = 'Variación del cronograma';
$lang->project->acTitle            = 'Costo real';
$lang->project->cvTitle            = 'Variación de costos';
$lang->project->teamCount          = 'Personal';
$lang->project->teamSumCount       = '%s miembro(s) en total';
$lang->project->longTime           = 'Largo plazo';
$lang->project->future             = 'TBD';
$lang->project->moreProject        = "Más: {$lang->projectCommon}";
$lang->project->days               = 'Días de trabajo';
$lang->project->daysUnit           = ' (Unidad: días)';
$lang->project->mailto             = 'Enviar a';
$lang->project->etc                = " , etc.";
$lang->project->product            = $lang->productCommon;
$lang->project->branch             = 'Plataforma/Rama';
$lang->project->plan               = 'Plan';
$lang->project->createKanban       = 'Crear Kanban';
$lang->project->kanban             = 'Kanban';
$lang->project->moreActions        = 'Más acciones';
$lang->project->taskDateLimit      = 'Restricciones de programación';
$lang->project->isTpl              = 'Establecer como plantilla';
$lang->project->tplWhiteList       = 'Lista blanca de plantillas';
$lang->project->firstEnd           = 'Fecha de finalización planificada al inicio';
$lang->project->parallel           = 'Permitir paralelo';
$lang->project->enabled            = 'Habilitar fases';
$lang->project->linkType           = 'Tipo de vínculo';
$lang->project->colWidth           = 'Ancho de la columna';
$lang->project->minColWidth        = 'Ancho mínimo de columna';
$lang->project->maxColWidth        = 'Ancho máximo de columna';

/* Project Category. */
$lang->project->projectTypeList = array();
$lang->project->projectTypeList[1] = "Basado en {$lang->productCommon}";
$lang->project->projectTypeList[0] = "Sin base en {$lang->productCommon}";

/* Project Kanban. */
$lang->project->typeList = array();
$lang->project->typeList['my']    = "{$lang->projectCommon} que gestiono";
$lang->project->typeList['other'] = "Otros: {$lang->projectCommon}";

$lang->project->stageByList['project'] = "Crear por {$lang->projectCommon}";
$lang->project->stageByList['product'] = "Crear por {$lang->productCommon}";

$lang->project->stageBySwitchList['0'] = 'Deshabilitar';
$lang->project->stageBySwitchList['1'] = "Habilitar";

$lang->project->waitProjects    = "En espera: {$lang->projectCommon}";
$lang->project->doingProjects   = "En curso: {$lang->projectCommon}";
$lang->project->doingExecutions = 'Ejecución en curso (más reciente)';
$lang->project->closedProjects  = "Cerrados: {$lang->projectCommon} (últimos 2)";
$lang->project->closedProject   = "Cerrados: {$lang->projectCommon}";
$lang->project->noProgram       = "Independientes: {$lang->projectCommon}";

$lang->project->laneColorList = array('#32C5FF', '#006AF1', '#9D28B2', '#FF8F26', '#FFC20E', '#00A78E', '#7FBB00', '#424BAC', '#C0E9FF', '#EC2761');

$lang->project->changeProgram          = "%s > Cambiar programa";
$lang->project->changeProgramTip       = "Después de editar el programa, también se actualizará el programa vinculado a {$lang->productCommon} de {$lang->projectCommon}. Confirme para continuar.";
$lang->project->linkedProjectsTip      = "Lo siguiente está vinculado a {$lang->projectCommon}:";
$lang->project->multiLinkedProductsTip = "Lo siguiente de {$lang->productCommon} vinculado a {$lang->projectCommon} también está asociado con otros {$lang->projectCommon}. Desvincúlelos antes de continuar.";
$lang->project->noticeDivsion          = "{$lang->projectCommon} actual usa un conjunto de una sola fase. Haga clic en [Habilitar] para cambiar a varios conjuntos de fases, donde cada conjunto se vincula a un solo {$lang->productCommon}.";
$lang->project->linkStoryByPlanTips    = "Esta acción vinculará todos los elementos de {$lang->SRCommon} del plan seleccionado a {$lang->projectCommon}.";
$lang->project->createExecution        = "No se encontró {$lang->executionCommon} en {$lang->projectCommon}. Primero cree una {$lang->executionCommon}.";
$lang->project->unlinkExecutionMember  = "El usuario participó en %s ejecuciones, como %s%s. ¿Desea quitar también al usuario de esas ejecuciones? (Los datos relacionados con este usuario no se eliminarán).";
$lang->project->unlinkExecutionMembers = "Los miembros del equipo que está quitando también están en el equipo de ejecución de {$lang->projectCommon}. ¿Desea quitarlos también del equipo de ejecución?";
$lang->project->productTip             = "Después de hacer clic en Crear {$lang->productCommon}, {$lang->projectCommon} actual dejará de estar vinculado a {$lang->productCommon} seleccionado.";
$lang->project->noDevStage             = "No se encontró ninguna fase de tipo I+D en {$lang->projectCommon} o no tiene permiso de acceso. Por el momento no se admite la creación de Builds.";
$lang->project->budgetOverrun          = "El presupuesto de {$lang->projectCommon} excede el presupuesto restante del programa: <strong id='currency'></strong><strong id='parentBudget'></strong><strong id='budgetUnit'></strong>.";
$lang->project->disabledInputTip       = 'Cancele primero %s.';
$lang->project->linkRepoFailed         = "No se pudo vincular el repositorio.";
$lang->project->unLinkProductTip       = '¿Seguro que desea desvincular de %s? (No afectará a las historias ya vinculadas).';
$lang->project->summary                = "%s de {$lang->projectCommon} en esta página.";
$lang->project->allSummary             = "%s de {$lang->projectCommon} en esta página: %s En espera, %s En curso, %s Suspendidos, %s Cerrados.";
$lang->project->checkedSummary         = "%total% de {$lang->projectCommon} seleccionados.";
$lang->project->checkedAllSummary      = "%total% de {$lang->projectCommon} seleccionados: %wait% En espera, %doing% En curso, %suspended% Suspendidos, %closed% Cerrados.";
$lang->project->selectProductTip       = "Si no se selecciona {$lang->productCommon}, el sistema creará automáticamente un elemento de {$lang->productCommon} con el mismo nombre que {$lang->projectCommon}.";

$lang->project->error = new stdclass();
$lang->project->error->existProductName = "El nombre de {$lang->productCommon} ya existe.";
$lang->project->error->budgetGe0        = '『Presupuesto』debe ser mayor o igual que 0.';
$lang->project->error->budgetNumber     = '『Presupuesto』debe ser numérico.';
$lang->project->error->budgetTooLarge   = '『Presupuesto』no debe exceder %s.';
$lang->project->error->productNotEmpty  = "Vincule elementos de {$lang->productCommon} o cree elementos de {$lang->productCommon}.";
$lang->project->error->emptyBranch      = '¡La rama no puede estar vacía!';
$lang->project->error->endLessBegin     = 'La fecha de fin planificada no puede ser anterior a la fecha de inicio planificada.';

$lang->project->tip = new stdclass();
$lang->project->tip->closed     = 'El proyecto ya está cerrado y no necesita cerrarse de nuevo.';
$lang->project->tip->notSuspend = 'El proyecto ha sido cerrado y no se puede poner en espera.';
$lang->project->tip->suspended  = 'El proyecto ya está en espera y no se puede poner en espera de nuevo.';
$lang->project->tip->actived    = 'El proyecto ya está activo y no necesita reactivarse.';
$lang->project->tip->group      = "Es un proyecto Kanban. No está disponible la edición de grupos de permisos.";
$lang->project->tip->whitelist  = "Es un proyecto público con permisos abiertos. No es necesario editar listas blancas.";

$lang->project->tenThousand    = 'Diez mil';
$lang->project->hundredMillion = 'Cien millones';

$lang->project->unitList['CNY'] = 'RMB';
$lang->project->unitList['USD'] = 'USD';
$lang->project->unitList['HKD'] = 'HKD';
$lang->project->unitList['NTD'] = 'NTD';
$lang->project->unitList['EUR'] = 'EUR';
$lang->project->unitList['DEM'] = 'DEM';
$lang->project->unitList['CHF'] = 'CHF';
$lang->project->unitList['FRF'] = 'FRF';
$lang->project->unitList['GBP'] = 'GBP';
$lang->project->unitList['NLG'] = 'NLG';
$lang->project->unitList['CAD'] = 'CAD';
$lang->project->unitList['RUR'] = 'RUB';
$lang->project->unitList['INR'] = 'IDR';
$lang->project->unitList['AUD'] = 'AUD';
$lang->project->unitList['NZD'] = 'NZD';
$lang->project->unitList['THB'] = 'THB';
$lang->project->unitList['SGD'] = 'SGD';

$lang->project->currencySymbol['CNY'] = '¥';
$lang->project->currencySymbol['USD'] = '$';
$lang->project->currencySymbol['HKD'] = 'HK$';
$lang->project->currencySymbol['NTD'] = 'NT$';
$lang->project->currencySymbol['EUR'] = '€';
$lang->project->currencySymbol['DEM'] = 'DEM';
$lang->project->currencySymbol['CHF'] = '₣';
$lang->project->currencySymbol['FRF'] = '₣';
$lang->project->currencySymbol['GBP'] = '£';
$lang->project->currencySymbol['NLG'] = 'ƒ';
$lang->project->currencySymbol['CAD'] = '$';
$lang->project->currencySymbol['RUR'] = '$';
$lang->project->currencySymbol['INR'] = '₹';
$lang->project->currencySymbol['AUD'] = 'A$';
$lang->project->currencySymbol['NZD'] = 'A$';
$lang->project->currencySymbol['THB'] = '฿';
$lang->project->currencySymbol['SGD'] = 'S$';

$lang->project->modelList['']          = '';
if($config->edition == 'ipd') $lang->project->modelList['ipd'] = "IPD";
$lang->project->modelList['scrum']     = "Scrum";
if(helper::hasFeature('waterfall')) $lang->project->modelList['waterfall'] = "CMMI";
$lang->project->modelList['kanban']    = "Kanban";
$lang->project->modelList['agileplus'] = "Agile +";
if(helper::hasFeature('waterfallplus')) $lang->project->modelList['waterfallplus'] = "Cascada +";

$lang->project->featureBar['browse']['all']    = 'Todos';
$lang->project->featureBar['browse']['undone'] = 'Sin completar';
$lang->project->featureBar['browse']['wait']   = 'En espera';
$lang->project->featureBar['browse']['doing']  = 'En curso';
$lang->project->featureBar['browse']['more']   = 'Más';

$lang->project->featureBar['index']['all']       = 'Todos';
$lang->project->featureBar['index']['undone']    = 'Sin completar';
$lang->project->featureBar['index']['wait']      = 'En espera';
$lang->project->featureBar['index']['doing']     = 'En curso';
$lang->project->featureBar['index']['suspended'] = 'En espera';
$lang->project->featureBar['index']['closed']    = 'Cerrado';

$lang->project->featureBar['execution']['all']       = 'Todos';
$lang->project->featureBar['execution']['undone']    = 'Sin completar';
$lang->project->featureBar['execution']['wait']      = 'En espera';
$lang->project->featureBar['execution']['doing']     = 'En curso';
$lang->project->featureBar['execution']['suspended'] = 'En espera';
$lang->project->featureBar['execution']['delayed']   = 'Retrasado';
$lang->project->featureBar['execution']['closed']    = 'Cerrado';

$app->loadLang('bug');
$lang->project->featureBar['bug'] = $lang->bug->featureBar['browse'];

$app->loadLang('testcase');
$lang->project->featureBar['testcase'] = $lang->testcase->featureBar['browse'];

$lang->project->featureBar['build']['all'] = 'Todos los builds';

$lang->project->featureBar['group']['all'] = 'Todos los grupos';

$lang->project->aclList['open']    = "Público (accesible para cualquier persona con permisos de visualización de \"{$lang->projectCommon}\".)";
$lang->project->aclList['private'] = "Privado (solo para el responsable de {$lang->projectCommon}, los miembros del equipo y las partes interesadas.)";

$lang->project->taskDateLimitList['limit'] = "Restringir fechas de subtareas (deben mantenerse dentro del período de la tarea padre)";
$lang->project->taskDateLimitList['auto']  = "Extender automáticamente la tarea padre (se ajusta según las fechas de las subtareas)";

$lang->project->multipleList['1'] = 'Sí';
$lang->project->multipleList['0'] = 'No';

$lang->project->acls['private'] = 'Privado';
$lang->project->acls['open']    = 'Público';

$lang->project->shortAclList['open']    = 'Público';
$lang->project->shortAclList['private'] = 'Privado';
$lang->project->shortAclList['program'] = 'Público en el programa';

$lang->project->subAclList['open']    = "Público (accesible para cualquier persona con permisos de visualización de \"{$lang->projectCommon}\".)";
$lang->project->subAclList['private'] = "Privado (accesible solo para el responsable de {$lang->projectCommon}, los miembros del equipo y las partes interesadas.)";
$lang->project->subAclList['program'] = "Público dentro del programa (accesible para todos los responsables y partes interesadas de programas de nivel superior, el responsable de {$lang->projectCommon}, los miembros del equipo y las partes interesadas.)";

$lang->project->kanbanAclList['open']    = "Público (accesible para cualquier persona con permisos de visualización de \"{$lang->projectCommon}\".)";
$lang->project->kanbanAclList['private'] = "Privado (solo para el responsable de {$lang->projectCommon} y los miembros del equipo)";

$lang->project->kanbanSubAclList['open']    = "Público (accesible para cualquier persona con permisos de visualización de \"{$lang->projectCommon}\".)";
$lang->project->kanbanSubAclList['private'] = "Privado (accesible solo para el responsable de {$lang->projectCommon} y los miembros del equipo)";
$lang->project->kanbanSubAclList['program'] = "Público dentro del programa (accesible para todos los responsables y partes interesadas de programas de nivel superior, el responsable de {$lang->projectCommon} y los miembros del equipo.)";

if($config->systemMode == 'light')
{
    unset($lang->project->subAclList['program']);
    unset($lang->project->kanbanSubAclList['program']);
}

$lang->project->authList['extend'] = "Heredar (unión de permisos del sistema y de {$lang->projectCommon})";
$lang->project->authList['reset']  = "Sobrescribir (solo permisos de {$lang->projectCommon})";

$lang->project->sortAuthList['extend'] = 'Heredar';
$lang->project->sortAuthList['reset']  = 'Restablecer';

$lang->project->statusList['']          = '';
$lang->project->statusList['wait']      = 'En espera';
$lang->project->statusList['doing']     = 'En curso';
$lang->project->statusList['suspended'] = 'En espera';
$lang->project->statusList['closed']    = 'Cerrado';
$lang->project->statusList['delay']     = 'Retrasado';

$lang->project->endList[31]  = 'Un mes';
$lang->project->endList[93]  = '3 meses';
$lang->project->endList[186] = 'Semestre';
$lang->project->endList[365] = 'Un año';
$lang->project->endList[999] = 'Largo plazo';

$lang->project->ipdTitle           = "Desarrollo integrado de productos";
$lang->project->scrumTitle         = 'Gestión de desarrollo ágil';
$lang->project->waterfallTitle     = "Gestión de {$lang->projectCommon} Cascada";
$lang->project->kanbanTitle        = "Gestión de Kanban de {$lang->projectCommon}";
$lang->project->agileplusTitle     = "Gestión de {$lang->projectCommon} Scrum + Kanban";
$lang->project->waterfallplusTitle = "Gestión de {$lang->projectCommon} Cascada + Scrum + Kanban";
$lang->project->moreModelTitle     = 'Pronto habrá más modelos.';

$lang->project->empty                  = "Aún no hay {$lang->projectCommon} disponible.";
$lang->project->nextStep               = 'Siguiente';
$lang->project->hoursUnit              = '%s horas';
$lang->project->workHourUnit           = 'H';
$lang->project->membersUnit            = '%s hombres';
$lang->project->lastIteration          = "{$lang->executionCommon} reciente";
$lang->project->lastKanban             = 'Kanban reciente';
$lang->project->ongoingStage           = 'Fases en curso';
$lang->project->ipd                    = 'IPD';
$lang->project->scrum                  = 'Scrum';
$lang->project->waterfall              = 'Cascada';
$lang->project->agileplus              = 'Agile +';
$lang->project->waterfallplus          = 'Cascada +';
$lang->project->cannotCreateChild      = 'No está vacío, por lo que no puede agregar un hijo. Puede agregarle un padre y luego crear un hijo.';
$lang->project->emptyPM                = 'No hay datos disponibles.';
$lang->project->cannotChangeToCat      = "No está vacío, por lo que no puede cambiarlo a padre.";
$lang->project->cannotCancelCat        = "Tiene {$lang->projectCommon} hijos, por lo que no se puede desmarcar el padre.";
$lang->project->parentBeginEnd         = "Fechas de inicio y fin del padre: %s ~ %s";
$lang->project->childLongTime          = "Si un elemento hijo es de {$lang->projectCommon} de largo plazo, el padre también debe serlo.";
$lang->project->readjustTime           = "Cambiar las fechas de inicio y fin de {$lang->projectCommon}.";
$lang->project->notAllowRemoveProducts = "Las historias de {$lang->productCommon} están vinculadas a {$lang->projectCommon}, o una {$lang->execution->common} de {$lang->projectCommon} está vinculada a {$lang->productCommon}. Quite las asociaciones e inténtelo de nuevo.";
$lang->project->ge                     = "『%s』no debe ser anterior a la fecha de inicio real『%s』.";

$lang->project->programTitle['0']    = 'Oculto';
$lang->project->programTitle['base'] = "Mostrar solo {$lang->projectCommon} del nivel superior";
$lang->project->programTitle['end']  = "Mostrar solo {$lang->projectCommon} del nivel más bajo";

$lang->project->accessDenied            = "Acceso denegado a {$lang->projectCommon}.";
$lang->project->chooseProgramType       = 'Seleccionar tipo de gestión';
$lang->project->cannotCreateChild       = "Ya contiene datos reales, por lo que no puede agregar un hijo. Puede agregarle un padre y luego crear un hijo.";
$lang->project->hasChildren             = "{$lang->projectCommon} tiene un {$lang->projectCommon} hijo, por lo que no se puede eliminar.";
$lang->project->confirmDelete           = "¿Seguro que desea eliminar {$lang->projectCommon} “%s”?";
$lang->project->confirmDisableStoryType = "Después de cancelar, se eliminarán todas las historias conceptuales correspondientes vinculadas al proyecto y a sus ejecuciones. Esta acción es irreversible.";
$lang->project->cannotChangeToCat       = "Ya contiene datos reales, por lo que no puede convertirse en padre.";
$lang->project->cannotCancelCat         = "Tiene {$lang->projectCommon} hijos, por lo que no se puede desmarcar el padre.";
$lang->project->parentBeginEnd          = "Duración de {$lang->projectCommon} padre: %s ~ %s";
$lang->project->parentBudget            = "El presupuesto del programa padre: ";
$lang->project->confirmCreateStage      = "Ya existen datos en esta fase. ¿Seguro que desea dividirla? Si continúa con la división, para mantener la coherencia de los datos, los datos existentes se registrarán en la primera {$lang->execution->common} creada a partir de la división.";

$lang->project->beginLessThanParent     = "La fecha de inicio de {$lang->projectCommon} es anterior a la fecha de inicio del programa padre: %s.";
$lang->project->endGreatThanParent      = "La fecha de fin de {$lang->projectCommon} es posterior a la fecha de fin del programa padre: %s. ";
$lang->project->dateExceedParent        = "Las fechas de inicio y fin de {$lang->projectCommon} exceden el rango de fechas del programa padre:";
$lang->project->beginGreatEqualChild    = "La fecha de inicio de {$lang->projectCommon} debe ser igual o posterior a la fecha de inicio del programa: %s.";
$lang->project->endLessThanChild        = "La fecha de fin de {$lang->projectCommon} debe ser igual o anterior a la fecha de fin del programa: %s.";
$lang->project->beginLessEqualExecution = "La fecha de inicio de {$lang->projectCommon} debe ser igual o anterior a la fecha de inicio de la ejecución más temprana: %s.";
$lang->project->endGreatEqualExecution  = "La fecha de fin de {$lang->projectCommon} debe ser igual o posterior a la fecha de fin de la ejecución: %s.";

$lang->project->childLongTime        = "Como hay elementos de {$lang->projectCommon} de largo plazo bajo este padre, el {$lang->projectCommon} padre también debe marcarse como de largo plazo.";
$lang->project->confirmUnlinkMember  = "¿Seguro que desea quitar al usuario de {$lang->projectCommon}?";
$lang->project->stageByTips          = "Cree un único conjunto de fases para {$lang->projectCommon} en el que cada fase esté vinculada a todos los elementos de {$lang->productCommon}; o cree varios conjuntos de fases por {$lang->productCommon}, con cada conjunto vinculado a un solo {$lang->productCommon}.";
$lang->project->confirmCloseProject  = "Hay sin cerrar en {$lang->projectCommon}: {$lang->executionCommon} (%s). ¿Seguro que desea cerrar {$lang->projectCommon}?";

$lang->project->action = new stdclass();
$lang->project->action->managed = '$date, gestionado por <strong>$actor</strong>. $extra' . "\n";

$lang->project->multiple = "Habilitar {$lang->executionCommon}";

$lang->project->copyProject = new stdClass();
$lang->project->copyProject->nameTips           = "『Nombre de {$lang->projectCommon}』 no puede repetirse.";
$lang->project->copyProject->codeTips           = "『Código de {$lang->projectCommon}』 no puede repetirse.";
$lang->project->copyProject->endTips            = '『Fin planificado』no puede estar vacío.';
$lang->project->copyProject->daysTips           = '『Días de trabajo』debe ser un valor numérico.';

$lang->project->linkBranchStoryByPlanTips = "Al vincular historias por plan, solo se importarán las historias activas asociadas a {$lang->projectCommon} %s.";
$lang->project->linkNormalStoryByPlanTips = "Al vincular historias por plan, solo se importarán las historias activas.";
$lang->project->cannotManageProducts      = "Este proyecto es de tipo {$lang->projectCommon} basado en {$lang->projectCommon} y no se puede asociar con {$lang->productCommon}.";

$lang->project->featureBar['dynamic']['all']       = 'Todos';
$lang->project->featureBar['dynamic']['today']     = 'Hoy';
$lang->project->featureBar['dynamic']['yesterday'] = 'Ayer';
$lang->project->featureBar['dynamic']['thisWeek']  = 'Esta semana';
$lang->project->featureBar['dynamic']['lastWeek']  = 'Semana pasada';
$lang->project->featureBar['dynamic']['thisMonth'] = 'Este mes';
$lang->project->featureBar['dynamic']['lastMonth'] = 'Mes pasado';

$lang->project->moreSelects = array();
$lang->project->moreSelects['browse']['more']['suspended'] = 'En espera';
$lang->project->moreSelects['browse']['more']['delayed']   = 'Retrasado';
$lang->project->moreSelects['browse']['more']['closed']    = 'Cerrado';
$lang->project->moreSelects['bug']['more']                 = $lang->bug->moreSelects['browse']['more'];

$lang->project->executionList['scrum']         = $lang->projectCommon . ' Sprint';
$lang->project->executionList['waterfall']     = $lang->projectCommon . ' Fase';
$lang->project->executionList['kanban']        = $lang->projectCommon . ' Kanban';
$lang->project->executionList['agileplus']     = $lang->projectCommon . ' Sprint';
$lang->project->executionList['waterfallplus'] = $lang->projectCommon . ' Fase';

$lang->project->featureBar['team']['all'] = 'Miembros';

$lang->project->featureBar['managemembers']['all'] = 'Administrar equipo';

$lang->project->coverExecutionPrivList = array();
$lang->project->coverExecutionPrivList[1] = 'Abierto (Al habilitarlo, podrá controlar los permisos de las funciones de ejecución (como tareas, gráficos de avance, pruebas, etc.) en la sección "Permisos personalizados del proyecto". Esta acción es irreversible.)';
$lang->project->coverExecutionPrivList[0] = 'Cerrar';

$lang->project->api = new stdclass();
$lang->project->api->error = new stdclass();
$lang->project->api->error->productNotFound = 'El producto no existe.';

$lang->project->disabledHint = new stdclass();
$lang->project->disabledHint->linkedStory             = "{$lang->projectCommon} tiene {$lang->SRCommon} vinculado desde {$lang->productCommon} y no se puede desvincular. Primero desvincule {$lang->SRCommon} antes de continuar.";
$lang->project->disabledHint->createdStage            = "{$lang->productCommon} tiene fases existentes. Para desvincularlo de {$lang->projectCommon}, elimine primero las fases existentes.";
$lang->project->disabledHint->linkedStoryAndStage     = "{$lang->productCommon} tiene fases existentes y {$lang->SRCommon} vinculado. Para desvincularlo de {$lang->projectCommon}, quite primero las asociaciones de {$lang->SRCommon} y luego elimine las fases existentes.";
$lang->project->disabledHint->linkedStoryAndExecution = "{$lang->SRCommon} de {$lang->productCommon} está actualmente vinculado a {$lang->projectCommon} y {$lang->execution->common}. Primero quite las asociaciones de {$lang->SRCommon} con {$lang->projectCommon} y {$lang->execution->common} antes de continuar.";
