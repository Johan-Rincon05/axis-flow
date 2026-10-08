<?php
/* Fields. */
$lang->program->id             = 'ID';
$lang->program->name           = 'Nombre';
$lang->program->template       = 'Plantilla';
$lang->program->category       = 'Tipo';
$lang->program->desc           = 'Descripción';
$lang->program->status         = 'Estado';
$lang->program->PM             = 'Gerente';
$lang->program->budget         = 'Presupuesto';
$lang->program->budgetUnit     = 'Unidad del presupuesto';
$lang->program->invested       = 'Invertido';
$lang->program->begin          = 'Inicio';
$lang->program->end            = 'Fin';
$lang->program->realBeganAB    = 'Inicio real';
$lang->program->realEndAB      = 'Fin real';
$lang->program->stage          = 'Etapa';
$lang->program->type           = 'Tipo';
$lang->program->pri            = 'Prioridad';
$lang->program->parent         = 'Programa padre';
$lang->program->exchangeRate   = 'Tipo de cambio';
$lang->program->openedBy       = 'Abierto por';
$lang->program->openedDate     = 'Fecha de apertura';
$lang->program->closedBy       = 'Cerrado por';
$lang->program->closedDate     = 'Fecha de cierre';
$lang->program->canceledBy     = 'Cancelado por';
$lang->program->canceledDate   = 'Fecha de cancelación';
$lang->program->lastEditedDate = 'Fecha de última edición';
$lang->program->suspendedDate  = 'Fecha de suspensión';
$lang->program->vision         = 'Visión';
$lang->program->team           = 'Equipo';
$lang->program->order          = 'Posición';
$lang->program->days           = 'Días';
$lang->program->acl            = 'Control de acceso';
$lang->program->groups         = 'Grupos';
$lang->program->users          = 'Usuarios';
$lang->program->whitelist      = 'Lista blanca';
$lang->program->deleted        = 'Eliminado';
$lang->program->lifetime       = 'De por vida';
$lang->program->output         = 'Salida';
$lang->program->auth           = 'Autenticación';
$lang->program->path           = 'Ruta';
$lang->program->grade          = 'Nivel';
$lang->program->realBegan      = 'Inicio real';
$lang->program->realEnd        = 'Fin real';
$lang->program->version        = 'Versión';
$lang->program->parentVersion  = 'Versión padre';
$lang->program->planDuration   = 'Duración del plan';
$lang->program->realDuration   = 'Duración real';
$lang->program->openedVersion  = 'Versión de apertura';
$lang->program->lastEditedBy   = 'Última edición por';
$lang->program->lastEditedDate = 'Fecha de última edición';
$lang->program->childProgram   = 'Programa hijo';
$lang->program->ignore         = 'Ignorar';
$lang->program->other          = 'Otro';

/* Actions. */
$lang->program->common                  = 'Programa';
$lang->program->index                   = 'Inicio';
$lang->program->create                  = 'Crear programa';
$lang->program->createGuide             = 'Seleccionar plantilla';
$lang->program->edit                    = 'Editar programa';
$lang->program->browse                  = 'Programas';
$lang->program->kanbanAction            = 'Kanban';
$lang->program->view                    = 'Detalle del programa';
$lang->program->copy                    = 'Copiar programa';
$lang->program->product                 = "{$lang->productCommon}s";
$lang->program->project                 = "Lista de {$lang->projectCommon} del programa";
$lang->program->all                     = 'Todos los programas';
$lang->program->start                   = 'Iniciar';
$lang->program->finish                  = 'Finalizar';
$lang->program->suspend                 = 'Suspender';
$lang->program->delete                  = 'Eliminar';
$lang->program->close                   = 'Cerrar';
$lang->program->activate                = 'Activar';
$lang->program->export                  = 'Exportar';
$lang->program->stakeholder             = 'Interesado';
$lang->program->createStakeholder       = 'Crear interesado';
$lang->program->unlinkStakeholder       = 'Desvincular interesado';
$lang->program->batchUnlinkStakeholders = 'Quitar interesados por lote';
$lang->program->unlink                  = 'Desvincular';
$lang->program->updateOrder             = 'Posición';
$lang->program->unbindWhitelist         = 'Desvincular lista blanca';
$lang->program->importStakeholder       = 'Importar desde programa';
$lang->program->manageMembers           = 'Equipo del programa';
$lang->program->confirmChangePRJUint    = "¿Sincronizar la unidad de presupuesto de los subprogramas y de {$lang->projectCommon} del programa? Si es así, indique el tipo de cambio actual.";
$lang->program->exRateNotNegative       = 'La 『tasa de cambio』 no debe ser negativa.';
$lang->program->changePRJUnit           = 'Actualizar la unidad de presupuesto del ' . $lang->projectCommon;
$lang->program->showNotCurrentProjects  = "Mostrar información de {$lang->projectCommon} de programas distintos del actual";

$lang->program->progress         = "Progreso de {$lang->projectCommon}";
$lang->program->progressAB       = 'Progreso';
$lang->program->children         = 'Agregar un programa';
$lang->program->allInvest        = 'Entrada';
$lang->program->teamCount        = 'Equipo';
$lang->program->longTime         = 'Largo plazo';
$lang->program->moreProgram      = 'Más programas';
$lang->program->stakeholderType  = 'Tipo de interesado';
$lang->program->parentBudget     = 'Presupuesto restante del programa padre：';
$lang->program->isStakeholderKey = 'Interesado clave';
$lang->program->summary          = "Esta página contiene %d programas principales y %d independientes " . strtolower($lang->projectCommon) . "s.";

$lang->program->stakeholderTypeList['inside']  = 'Dentro';
$lang->program->stakeholderTypeList['outside'] = 'Exterior';

$lang->program->noProgram          = 'Sin programa.';
$lang->program->showClosed         = 'Cerrado';
$lang->program->tips               = "Si se selecciona un programa padre, se pueden asociar los elementos de {$lang->productCommon} de ese programa. Si no se selecciona programa para {$lang->projectCommon}, se crea de forma predeterminada un elemento de {$lang->productCommon} con el mismo nombre que {$lang->projectCommon} y se asocia con {$lang->projectCommon}.";
$lang->program->confirmBatchUnlink = "¿Desea desvincular de forma masiva a estos interesados?";

$lang->program->beginLessThanParent  = 'La fecha de inicio del programa es anterior a la fecha de inicio del programa padre:';
$lang->program->endGreatThanParent   = 'La fecha de finalización del programa es posterior a la fecha de finalización del programa padre:';
$lang->program->dateExceedParent     = 'Las fechas de inicio y fin del programa son posteriores a las fechas de inicio y fin del programa padre:';
$lang->program->beginGreatEqualChild = "La fecha de inicio del programa es posterior a la fecha de inicio mínima del subprograma o de {$lang->projectCommon}:";
$lang->program->endLessThanChild     = "La fecha de finalización del programa es anterior a la fecha de finalización máxima del subprograma o de {$lang->projectCommon}:";

$lang->program->dateExceedChild    = "Las fechas de inicio y fin del programa ya no incluyen el rango de fechas del subprograma o de {$lang->projectCommon}:";
$lang->program->closeErrorMessage  = "Hay subprogramas o elementos de {$lang->projectCommon} que no están cerrados";
$lang->program->hasChildren        = "El programa tiene un programa hijo o existe {$lang->projectCommon}, por lo que no se puede eliminar.";
$lang->program->hasProduct         = "El programa tiene {$lang->productCommon} existente, por lo que no se puede eliminar.";
$lang->program->confirmDelete      = '¿Desea eliminar el programa \\"%s\\"?';
$lang->program->confirmUnlink      = '¿Desea quitar al interesado?';
$lang->program->readjustTime       = 'Cambiar la fecha de inicio y fin del programa.';
$lang->program->accessDenied       = 'No tiene acceso al programa.';
$lang->program->beyondParentBudget = 'Se ha excedido el presupuesto restante del programa al que pertenece.';
$lang->program->checkedProjects    = '%s elementos seleccionados';
$lang->program->budgetOverrun      = "El presupuesto del programa excede el presupuesto restante del programa padre:";

/* ToolBar. */
$lang->program->createProduct    = 'Crear producto';
$lang->program->createProject    = 'Crear proyecto';

/* DTable columns of product view page. */
$lang->program->totalUnclosedStories = 'Sin cerrar';
$lang->program->closedStoryRate      = 'Tasa de cierre';
$lang->program->testCaseCoverage     = 'Cobertura';
$lang->program->totalActivatedBugs   = 'Activado';
$lang->program->fixedRate            = 'Corregido';
$lang->program->feedback             = 'Retroalimentación';

$lang->program->tip = new stdclass();
$lang->program->tip->closed     = 'El programa ya ha sido cerrado. No es posible cerrarlo de nuevo.';
$lang->program->tip->notSuspend = 'El programa ha sido cerrado. No es posible suspenderlo.';
$lang->program->tip->suspended  = 'El programa ya ha sido suspendido. No es posible suspenderlo de nuevo.';
$lang->program->tip->actived    = 'El programa ya ha sido activado. No es posible reactivarlo.';
$lang->program->tip->notCreate  = 'El programa ha sido cerrado. No es posible agregar subprogramas.';

$lang->program->endList[31]  = 'Un mes';
$lang->program->endList[93]  = 'Trimestre';
$lang->program->endList[186] = 'Semestre';
$lang->program->endList[365] = 'Un año';
$lang->program->endList[999] = 'Larga duración';

$lang->program->aclList['open']    = "Público (Accesible para cualquier persona con permiso de vista de \"Programa\".)";
$lang->program->aclList['private'] = "Privado (Accesible para el líder de este programa y los interesados.)";

$lang->program->subAclList['open']    = "Público (Accesible para cualquier persona con permiso de vista de \"Programa\".)";
$lang->program->subAclList['program'] = "Interno (accesible para todos los líderes e interesados de este programa y de sus programas superiores.)";
$lang->program->subAclList['private'] = "Privado (Accesible para el líder de este programa y los interesados.)";

$lang->program->subAcls['open']    = 'Predeterminado';
$lang->program->subAcls['program'] = 'Abrir dentro del programa';
$lang->program->subAcls['private'] = 'Privado';

$lang->program->authList['extend'] = 'Heredar (privilegios del programa y de la empresa)';
$lang->program->authList['reset']  = 'Restablecer (solo privilegios de programa)';

$lang->program->statusList['wait']      = 'En espera';
$lang->program->statusList['doing']     = 'En curso';
$lang->program->statusList['suspended'] = 'Suspendido';
$lang->program->statusList['closed']    = 'Cerrado';

$lang->program->featureBar['browse']['all']       = 'Todos';
$lang->program->featureBar['browse']['unclosed']  = 'Sin cerrar';
$lang->program->featureBar['browse']['wait']      = 'En espera';
$lang->program->featureBar['browse']['doing']     = 'En curso';
$lang->program->featureBar['browse']['suspended'] = 'Suspendido';
$lang->program->featureBar['browse']['delayed']   = 'Retrasado';
$lang->program->featureBar['browse']['closed']    = 'Cerrado';

$lang->program->featureBar['product']['all']      = 'Todos ' . $lang->productCommon;
$lang->program->featureBar['product']['noclosed'] = 'Abierto';
$lang->program->featureBar['product']['closed']   = 'Cerrado';

$lang->program->featureBar['project']['all']       = 'Todos';
$lang->program->featureBar['project']['unclosed']  = 'Sin cerrar';
$lang->program->featureBar['project']['wait']      = 'En espera';
$lang->program->featureBar['project']['doing']     = 'En curso';
$lang->program->featureBar['project']['suspended'] = 'Suspendido';
$lang->program->featureBar['project']['delayed']   = 'Retrasado';
$lang->program->featureBar['project']['closed']    = 'Cerrado';

$lang->program->featureBar['productview']['all']      = 'Todos';
$lang->program->featureBar['productview']['unclosed'] = 'Sin cerrar';
$lang->program->featureBar['productview']['wait']     = 'En espera';
$lang->program->featureBar['productview']['doing']    = 'En curso';
$lang->program->featureBar['productview']['more']     = $lang->more;

$lang->program->moreSelects['suspended'] = 'Suspendido';
$lang->program->moreSelects['closed']    = 'Cerrado';

$lang->program->kanban = new stdclass();
$lang->program->kanban->common             = 'Kanban de programas';
$lang->program->kanban->typeList['my']     = 'Mis programas';
$lang->program->kanban->typeList['others'] = 'Otros';

$lang->program->kanban->openProducts    = "Abiertos: {$lang->productCommon}";
$lang->program->kanban->unexpiredPlans  = 'Planes sin vencer';
$lang->program->kanban->waitingProjects = "En espera: {$lang->projectCommon}";
$lang->program->kanban->doingProjects   = "En curso: {$lang->projectCommon}";
$lang->program->kanban->doingExecutions = 'Ejecuciones en curso';
$lang->program->kanban->normalReleases  = 'Lanzamientos normales';

$lang->program->kanban->laneColorList = array('#32C5FF', '#006AF1', '#9D28B2', '#FF8F26', '#FFC20E', '#00A78E', '#7FBB00', '#424BAC', '#C0E9FF', '#EC2761');

$lang->program->defaultProgram    = 'Programa predeterminado';
$lang->program->manDay            = 'Personas-día';
$lang->program->createdDate       = 'Fecha de creación';
$lang->program->totalStories      = 'Total de historias';
$lang->program->project           = 'Proyectos';
$lang->program->totalBugs         = 'Total de Bugs';
$lang->program->latestReleaseDate = 'Fecha del último lanzamiento';
$lang->program->latestRelease     = 'Último lanzamiento';
$lang->program->manageLine        = 'Administrar línea de producto';
$lang->program->checkedProducts   = '<strong>%total%</strong>&nbsp; productos seleccionados.';

$lang->program->programBudget   = 'Presupuesto del programa';
$lang->program->projectBudget   = 'Presupuesto del proyecto';
$lang->program->sumSubBudget    = 'Suma para subprograma';
$lang->program->exceededBudget  = 'Presupuesto excedido';
$lang->program->remainingBudget = 'Restante para el programa';
