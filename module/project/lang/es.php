<?php
global $app;
global $config;

/* Actions. */
$lang->project->createGuide         = 'Seleccionar plantilla';
$lang->project->index               = 'Panel';
$lang->project->home                = 'Inicio';
$lang->project->create              = "Create {$lang->projectCommon}";
$lang->project->edit                = 'Editar';
$lang->project->batchEdit           = "Batch Edit {$lang->projectCommon}s";
$lang->project->view                = "{$lang->projectCommon} Overview";
$lang->project->batchEdit           = "Batch Edit {$lang->projectCommon}s";
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
$lang->project->addProduct          = "Add {$lang->productCommon}";
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
$lang->project->whitelist           = "{$lang->projectCommon} Whitelist";
$lang->project->addWhitelist        = "Agregar lista blanca";
$lang->project->unbindWhitelist     = "Quitar de la lista blanca";
$lang->project->manageProducts      = "Link {$lang->productCommon}s";
$lang->project->manageOtherProducts = "Link Other {$lang->productCommon}s";
$lang->project->manageProductPlan   = "Link {$lang->productCommon}s and Plans";
$lang->project->managePlans         = 'Vincular planes';
$lang->project->copyTitle           = "Please select a {$lang->projectCommon} to copy.";
$lang->project->errorSameProducts   = "{$lang->projectCommon} cannot be linked to multiple identical {$lang->productCommon}s.";
$lang->project->errorSameBranches   = "{$lang->projectCommon} cannot be linked to multiple identical branches.";
$lang->project->errorSamePlans      = "{$lang->projectCommon} cannot be linked to multiple identical plans.";
$lang->project->errorNoProducts     = "At least one {$lang->productCommon} must be linked.";
$lang->project->copyNoProject       = "No available {$lang->projectCommon}s to copy.";
$lang->project->searchByName        = "Enter the {$lang->projectCommon} name to search.";
$lang->project->emptyProgram        = "Proyectos independientes";
$lang->project->deleted             = 'Eliminado';
$lang->project->linkedProducts      = "Linked {$lang->productCommon}s";
$lang->project->unlinkedProducts    = "Unlinked {$lang->productCommon}s";
$lang->project->testreport          = 'Lista de informes de pruebas';
$lang->project->selectProgram       = 'Filtro de programas';
$lang->project->teamMember          = 'Miembro del equipo';
$lang->project->unlinkMember        = 'Quitar miembro';
$lang->project->unlinkMemberAction  = 'Quitar miembro del equipo';
$lang->project->copyTeamTitle       = "Select a {$lang->projectCommon} team to copy.";
$lang->project->daysGreaterProject  = "Available workdays cannot exceed {$lang->projectCommon} maximum 『%s』";
$lang->project->errorHours          = 'Las horas de trabajo disponibles por día no pueden exceder 24.';
$lang->project->workdaysExceed      = 'Los días de trabajo no pueden exceder『%s』.';
$lang->project->teamMembersCount    = ', el equipo tiene un total de %s miembros.';
$lang->project->allProjects         = "All {$lang->projectCommon}s";
$lang->project->ignore              = 'Ignorar';
$lang->project->disableExecution    = "{$lang->projectCommon} with {$lang->executionCommon} disabled";
$lang->project->selectProduct       = "Select {$lang->productCommon}";
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
$lang->project->afterInfo           = "{$lang->projectCommon} created successfully. Next you can";
$lang->project->setTeam             = 'Administrar equipo';
$lang->project->linkStory           = 'Vincular historias';
$lang->project->createStory         = "Create {$lang->SRCommon}";
$lang->project->createTask          = "Crear tarea";
$lang->project->createExecutionTip  = 'Crear %s';
$lang->project->setDoc              = 'Agregar documentos';
$lang->project->backToTaskList      = 'Volver a la lista de tareas';
$lang->project->backToKanban        = 'Volver al Kanban';
$lang->project->backToExecutionList = 'Volver a la lista del proyecto %s';
$lang->project->backToProjectList   = 'Volver a la lista de proyectos';
$lang->project->deletedTip          = "Sorry, the {$lang->projectCommon} you are trying to access has been deleted.";
$lang->project->coverExecutionPriv  = "Control de privilegios de ejecución";
$lang->project->executionView       = "{$lang->execution->common} View";

$lang->project->manDay          = 'Man-Days';
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
$lang->project->PO                 = "{$lang->projectCommon} Manager";
$lang->project->QD                 = 'Gerente de pruebas';
$lang->project->RD                 = 'Responsable de lanzamientos';
$lang->project->name               = 'Nombre';
$lang->project->category           = 'Tipo';
$lang->project->desc               = 'Descripción';
$lang->project->code               = 'Código';
$lang->project->hasProduct         = "Link to {$lang->productCommon}";
$lang->project->copy               = 'Copiar';
$lang->project->begin              = 'Inicio planificado';
$lang->project->end                = 'Fin planificado';
$lang->project->status             = 'Estado';
$lang->project->subStatus          = 'Subestado';
$lang->project->type               = 'Tipo';
$lang->project->lifetime           = "{$lang->projectCommon} Duration";
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
$lang->project->budgetUnit         = "(Unit: {$lang->project->tenThousandYuan})";
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
$lang->project->children           = "Sub-{$lang->projectCommon}";
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
$lang->project->longTime           = 'Long-Term';
$lang->project->future             = 'TBD';
$lang->project->moreProject        = "More {$lang->projectCommon}s";
$lang->project->days               = 'Días de trabajo';
$lang->project->daysUnit           = ' (Unidad: días)';
$lang->project->mailto             = 'Enviar a';
$lang->project->etc                = " , etc.";
$lang->project->product            = $lang->productCommon;
$lang->project->branch             = 'Platform/Branch';
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
$lang->project->projectTypeList[1] = "{$lang->productCommon}-based";
$lang->project->projectTypeList[0] = "Non-{$lang->productCommon}-based";

/* Project Kanban. */
$lang->project->typeList = array();
$lang->project->typeList['my']    = "My Managed {$lang->projectCommon}s";
$lang->project->typeList['other'] = "Other {$lang->projectCommon}s";

$lang->project->stageByList['project'] = "Create by {$lang->projectCommon}";
$lang->project->stageByList['product'] = "Create by {$lang->productCommon}";

$lang->project->stageBySwitchList['0'] = 'Deshabilitar';
$lang->project->stageBySwitchList['1'] = "Habilitar";

$lang->project->waitProjects    = "Waiting {$lang->projectCommon}s";
$lang->project->doingProjects   = "Ongoing {$lang->projectCommon}s";
$lang->project->doingExecutions = 'Ejecución en curso (más reciente)';
$lang->project->closedProjects  = "Closed {$lang->projectCommon}s (Last 2)";
$lang->project->closedProject   = "Closed {$lang->projectCommon}s";
$lang->project->noProgram       = "Independent {$lang->projectCommon}s";

$lang->project->laneColorList = array('#32C5FF', '#006AF1', '#9D28B2', '#FF8F26', '#FFC20E', '#00A78E', '#7FBB00', '#424BAC', '#C0E9FF', '#EC2761');

$lang->project->changeProgram          = "%s > Cambiar programa";
$lang->project->changeProgramTip       = "After editing the program, the program linked to the {$lang->productCommon} of this {$lang->projectCommon} will also be updated. Please confirm to proceed.";
$lang->project->linkedProjectsTip      = "Linked {$lang->projectCommon}s are as follows";
$lang->project->multiLinkedProductsTip = "The following {$lang->productCommon} linked to this {$lang->projectCommon} are also associated with other {$lang->projectCommon}. Please unlink them before proceeding.";
$lang->project->noticeDivsion          = "The current {$lang->projectCommon} uses a single-phase set. Click [Enable] to switch to multiple phase sets, where each set is linked to one {$lang->productCommon}.";
$lang->project->linkStoryByPlanTips    = "This action will link all {$lang->SRCommon} under the selected plan to this {$lang->projectCommon}.";
$lang->project->createExecution        = "No {$lang->executionCommon} found under this {$lang->projectCommon}. Please create a {$lang->executionCommon} first.";
$lang->project->unlinkExecutionMember  = "El usuario participó en %s ejecuciones, como %s%s. ¿Desea quitar también al usuario de esas ejecuciones? (Los datos relacionados con este usuario no se eliminarán).";
$lang->project->unlinkExecutionMembers = "The team members you are removing are also in the execution team of this {$lang->projectCommon}. Do you want to remove them from the execution team as well?";
$lang->project->productTip             = "After clicking Create {$lang->productCommon}, the current {$lang->projectCommon} will no longer be linked to the selected {$lang->productCommon}.";
$lang->project->noDevStage             = "No R&D-type phase found under this {$lang->projectCommon}, or you don’t have access permission. Build creation is temporarily not supported.";
$lang->project->budgetOverrun          = "The {$lang->projectCommon}'s budget exceeds the remaining budget of the program: <strong id='currency'></strong><strong id='parentBudget'></strong><strong id='budgetUnit'></strong>.";
$lang->project->disabledInputTip       = 'Cancele primero %s.';
$lang->project->linkRepoFailed         = "No se pudo vincular el repositorio.";
$lang->project->unLinkProductTip       = '¿Seguro que desea desvincular de %s? (No afectará a las historias ya vinculadas).';
$lang->project->summary                = "%s {$lang->projectCommon}s on this page.";
$lang->project->allSummary             = "%s {$lang->projectCommon}s on this page: %s Waiting, %s Doing, %s On Hold, %s Closed.";
$lang->project->checkedSummary         = "%total% {$lang->projectCommon} selected.";
$lang->project->checkedAllSummary      = "%total% {$lang->projectCommon} selected: %wait% Waiting,  %doing% Doing, %suspended% On Hold, %closed% Closed.";
$lang->project->selectProductTip       = "If no {$lang->productCommon} is selected, the system will automatically create a {$lang->productCommon} with the same name as the {$lang->projectCommon}.";

$lang->project->error = new stdclass();
$lang->project->error->existProductName = "{$lang->productCommon} name already exists.";
$lang->project->error->budgetGe0        = '『Presupuesto』debe ser mayor o igual que 0.';
$lang->project->error->budgetNumber     = '『Presupuesto』debe ser numérico.';
$lang->project->error->budgetTooLarge   = '『Presupuesto』no debe exceder %s.';
$lang->project->error->productNotEmpty  = "Please link {$lang->productCommon}s or create {$lang->productCommon}s.";
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

$lang->project->aclList['open']    = "Public (Accessible to anyone with \"{$lang->projectCommon}\" view permissions.)";
$lang->project->aclList['private'] = "Private (For the {$lang->projectCommon} manager, team members and stakeholders only.)";

$lang->project->taskDateLimitList['limit'] = "Restringir fechas de subtareas (deben mantenerse dentro del período de la tarea padre)";
$lang->project->taskDateLimitList['auto']  = "Extender automáticamente la tarea padre (se ajusta según las fechas de las subtareas)";

$lang->project->multipleList['1'] = 'Sí';
$lang->project->multipleList['0'] = 'No';

$lang->project->acls['private'] = 'Privado';
$lang->project->acls['open']    = 'Público';

$lang->project->shortAclList['open']    = 'Público';
$lang->project->shortAclList['private'] = 'Privado';
$lang->project->shortAclList['program'] = 'Público en el programa';

$lang->project->subAclList['open']    = "Public (Accessible to anyone with \"{$lang->projectCommon}\" view permissions.)";
$lang->project->subAclList['private'] = "Private (Accessible only to {$lang->projectCommon} manager, team members and stakeholders.)";
$lang->project->subAclList['program'] = "Public within Program (Accessible to all upper-level program managers and stakeholders, the {$lang->projectCommon} manager, team members and stakeholders.)";

$lang->project->kanbanAclList['open']    = "Public (Accessible to anyone with \"{$lang->projectCommon}\" view permissions.)";
$lang->project->kanbanAclList['private'] = "Private (For the {$lang->projectCommon} manager, team members only)";

$lang->project->kanbanSubAclList['open']    = "Public (Accessible to anyone with \"{$lang->projectCommon}\" view permissions.)";
$lang->project->kanbanSubAclList['private'] = "Private (Accessible only to {$lang->projectCommon} manager, team members)";
$lang->project->kanbanSubAclList['program'] = "Public within Program (Accessible to all upper-level program managers and stakeholders, the {$lang->projectCommon} manager, team members.)";

if($config->systemMode == 'light')
{
    unset($lang->project->subAclList['program']);
    unset($lang->project->kanbanSubAclList['program']);
}

$lang->project->authList['extend'] = "Inherit (Union of System and {$lang->projectCommon} permissions)";
$lang->project->authList['reset']  = "Override ({$lang->projectCommon} permissions only)";

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
$lang->project->endList[999] = 'Long-term';

$lang->project->ipdTitle           = "Desarrollo integrado de productos";
$lang->project->scrumTitle         = 'Gestión de desarrollo ágil';
$lang->project->waterfallTitle     = "Waterfall {$lang->projectCommon} Management";
$lang->project->kanbanTitle        = "Kanban {$lang->projectCommon} Management";
$lang->project->agileplusTitle     = "Scrum + Kanban {$lang->projectCommon} Management";
$lang->project->waterfallplusTitle = "Waterfall + Scrum + Kanban {$lang->projectCommon} Management";
$lang->project->moreModelTitle     = 'Pronto habrá más modelos.';

$lang->project->empty                  = "No {$lang->projectCommon}s available yet.";
$lang->project->nextStep               = 'Siguiente';
$lang->project->hoursUnit              = '%s horas';
$lang->project->workHourUnit           = 'H';
$lang->project->membersUnit            = '%s hombres';
$lang->project->lastIteration          = "Recent {$lang->executionCommon}";
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
$lang->project->cannotCancelCat        = "It has child {$lang->projectCommon}s, so you cannot unmark the parent.";
$lang->project->parentBeginEnd         = "Fechas de inicio y fin del padre: %s ~ %s";
$lang->project->childLongTime          = "If a child as long-term {$lang->projectCommon}s, the parent should be long-term too.";
$lang->project->readjustTime           = "Change the {$lang->projectCommon} start and end dates.";
$lang->project->notAllowRemoveProducts = "The stories in this {$lang->productCommon} are linked to the {$lang->projectCommon}, or an {$lang->execution->common} under the {$lang->projectCommon}is linked to this {$lang->productCommon}. Please remove the associations and try again.";
$lang->project->ge                     = "『%s』no debe ser anterior a la fecha de inicio real『%s』.";

$lang->project->programTitle['0']    = 'Oculto';
$lang->project->programTitle['base'] = "Show top-level {$lang->projectCommon} only";
$lang->project->programTitle['end']  = "Show lowest-level {$lang->projectCommon} only";

$lang->project->accessDenied            = "Access denied to this {$lang->projectCommon}.";
$lang->project->chooseProgramType       = 'Seleccionar tipo de gestión';
$lang->project->cannotCreateChild       = "Ya contiene datos reales, por lo que no puede agregar un hijo. Puede agregarle un padre y luego crear un hijo.";
$lang->project->hasChildren             = "This {$lang->projectCommon} has a child {$lang->projectCommon}, so it cannot be deleted.";
$lang->project->confirmDelete           = "Are you sure you want to delete {$lang->projectCommon}“%s”?";
$lang->project->confirmDisableStoryType = "Después de cancelar, se eliminarán todas las historias conceptuales correspondientes vinculadas al proyecto y a sus ejecuciones. Esta acción es irreversible.";
$lang->project->cannotChangeToCat       = "Ya contiene datos reales, por lo que no puede convertirse en padre.";
$lang->project->cannotCancelCat         = "It has child {$lang->projectCommon}s, so you cannot unmark the parent.";
$lang->project->parentBeginEnd          = "Parent {$lang->projectCommon} duration: %s ~ %s";
$lang->project->parentBudget            = "El presupuesto del programa padre: ";
$lang->project->confirmCreateStage      = "Data already exists under this phase. Are you sure you want to split it? If you proceed with the split, to maintain data consistency, existing data will be recorded in the first {$lang->execution->common} created from the split.";

$lang->project->beginLessThanParent     = "The start date of the {$lang->projectCommon} is earlier than the start date of the parent program: %s.";
$lang->project->endGreatThanParent      = "The end date of the {$lang->projectCommon} is later than the end date of the parent program: %s. ";
$lang->project->dateExceedParent        = "The start and end date of the {$lang->projectCommon} exceeds the data range of the parent program:";
$lang->project->beginGreatEqualChild    = "The start date of the {$lang->projectCommon} should be on or after the start date of program: %s.";
$lang->project->endLessThanChild        = "The end date of the {$lang->projectCommon} should be on or before the end date of program: %s.";
$lang->project->beginLessEqualExecution = "The start date of {$lang->projectCommon} should be on or before the start date of the earliest execution: %s.";
$lang->project->endGreatEqualExecution  = "The end date of the {$lang->projectCommon} should be on or after the end date of the execution: %s.";

$lang->project->childLongTime        = "Since there are long-term {$lang->projectCommon}s under this parent, the parent {$lang->projectCommon} should also be marked as long-term.";
$lang->project->confirmUnlinkMember  = "Are you sure you want to remove the user from {$lang->projectCommon}?";
$lang->project->stageByTips          = "Create a single phase set for the {$lang->projectCommon} where each phase is linked to all {$lang->productCommon}s; or create multiple phase sets by {$lang->productCommon}, with each set linked to one {$lang->productCommon} only.";
$lang->project->confirmCloseProject  = "There are unclosed {$lang->executionCommon}s under this {$lang->projectCommon}: %s. Are you sure you want to close the {$lang->projectCommon}?";

$lang->project->action = new stdclass();
$lang->project->action->managed = '$date, gestionado por <strong>$actor</strong>. $extra' . "\n";

$lang->project->multiple = "Enable {$lang->executionCommon}";

$lang->project->copyProject = new stdClass();
$lang->project->copyProject->nameTips           = "『{$lang->projectCommon} Name』Cannot be repeated.";
$lang->project->copyProject->codeTips           = "『{$lang->projectCommon} Code』Cannot be repeated.";
$lang->project->copyProject->endTips            = '『Fin planificado』no puede estar vacío.';
$lang->project->copyProject->daysTips           = '『Días de trabajo』debe ser un valor numérico.';

$lang->project->linkBranchStoryByPlanTips = "When linking stories by plan, only the active stories associated with the {$lang->projectCommon} %s will be imported.";
$lang->project->linkNormalStoryByPlanTips = "Al vincular historias por plan, solo se importarán las historias activas.";
$lang->project->cannotManageProducts      = "This project is a {$lang->projectCommon}-based {$lang->projectCommon} and cannot be associated with {$lang->productCommon}s.";

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
$lang->project->disabledHint->linkedStory             = "{$lang->projectCommon} has {$lang->SRCommon} linked from {$lang->productCommon} and cannot be unlinked. Please unlink {$lang->SRCommon} first before proceeding.";
$lang->project->disabledHint->createdStage            = "{$lang->productCommon} has existing phases. To unlink it from {$lang->projectCommon}, please delete the existing phases first.";
$lang->project->disabledHint->linkedStoryAndStage     = "{$lang->productCommon} has existing phases and linked {$lang->SRCommon}. To unlink it from {$lang->projectCommon}, please remove the {$lang->SRCommon} associations first and then delete the existing phased.";
$lang->project->disabledHint->linkedStoryAndExecution = "{$lang->SRCommon} under {$lang->productCommon} is currently linked to {$lang->projectCommon} and {$lang->execution->common}. Please remove the {$lang->SRCommon} associations from {$lang->projectCommon} and {$lang->execution->common} first before proceeding.";
