<?php
/**
 * The common simplified chinese file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: en.php 5116 2013-07-12 06:37:48Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */

include (dirname(__FILE__) . '/common.php');

global $config;

$lang->arrow     = '&nbsp;<i class="icon-angle-right"></i>&nbsp;';
$lang->colon     = ': ';
$lang->hyphen    = '-';
$lang->comma     = ',';
$lang->dot       = '.';
$lang->at        = ' on ';
$lang->downArrow = '↓';
$lang->null      = 'Nulo';
$lang->ellipsis  = '…';
$lang->percent   = '%';
$lang->dash      = '-';
$lang->slash     = '/';
$lang->and       = 'and';
$lang->to        = 'A';
$lang->minus     = ' - ';
$lang->in        = 'En';

$lang->zentaoPMS      = 'AXIS FLOW';
$lang->pmsName        = 'ALM';
$lang->proName        = 'Pro';
$lang->bizName        = 'Biz';
$lang->maxName        = 'Máx';
$lang->liteName       = 'Lite';
$lang->devopsPrefix   = 'Plataforma DevOps de AXIS FLOW';
$lang->logoImg        = 'zt-logo-en.png';
$lang->welcome        = "Sistema de gestión de proyectos %s";
$lang->logout         = 'Cerrar sesión';
$lang->login          = 'Iniciar sesión';
$lang->help           = 'Ayuda';
$lang->aboutZenTao    = 'Acerca de AXIS FLOW';
$lang->ztWebsite      = 'Sitio web de AXIS FLOW';
$lang->profile        = 'Mi perfil';
$lang->changePassword = 'Cambiar contraseña';
$lang->unfoldMenu     = 'Expandir barra lateral';
$lang->collapseMenu   = 'Contraer barra lateral';
$lang->preference     = 'Preferencias';
$lang->tutorialAB     = 'Tutorial';
$lang->runInfo        = "<div class='row'><div class='u-1 a-center' id='debugbar'>Tiempo %s MS, Memoria %s KB, Consultas %s.  </div></div>";
$lang->agreement      = "He leído y acepto los términos y condiciones. <strong class='ml-3'>Sin autorización, no debo eliminar, ocultar ni cubrir ningún logotipo o enlace de ZenTao.</strong>";
$lang->designedByAIUX = "<a href='https://api.zentao.net/goto.php?item=aiux' class='link-aiux listitem item-inner menu-item-inner state' target='_blank'><i class='icon icon-aiux item-icon'></i><div class='item-content text'>AIUX</div></a>";
$lang->bizVersion     = '<a href="https://www.zentao.net/page/enterprise.html" target="_blank">Actualizar a Standard</a>';
$lang->bizVersionINT  = '<a href="https://www.zentao.pm/page/vs.html" target="_blank">Actualizar a Standard</a>';

$lang->reset              = 'Restablecer';
$lang->cancel             = 'Cancelar';
$lang->refresh            = 'Actualizar';
$lang->refreshIcon        = "<i title='$lang->refresh' class='icon icon-refresh'></i>";
$lang->create             = 'Crear';
$lang->edit               = 'Editar';
$lang->delete             = 'Eliminar';
$lang->activate           = 'Activar';
$lang->close              = 'Cerrar';
$lang->unlink             = 'Quitar';
$lang->import             = 'Importar';
$lang->export             = 'Exportar';
$lang->setFileName        = 'Nombre del archivo:';
$lang->submitting         = 'Saving...';
$lang->save               = 'Guardar';
$lang->confirm            = 'Confirmar';
$lang->preview            = 'Ver';
$lang->goback             = 'Volver';
$lang->goPC               = 'Escritorio';
$lang->more               = 'Más';
$lang->moreLink           = 'MÁS';
$lang->day                = 'days';
$lang->today              = 'Hoy';
$lang->yesterday          = 'Ayer';
$lang->number             = 'Elementos';
$lang->customConfig       = 'Personalizado';
$lang->public             = 'Público';
$lang->trunk              = 'Trunk';
$lang->sort               = 'Ordenar';
$lang->required           = 'Obligatorio';
$lang->noData             = 'Sin datos';
$lang->noDesc             = 'Sin descripción';
$lang->fullscreen         = 'Pantalla completa';
$lang->retrack            = 'Contraer';
$lang->whitelist          = 'Lista blanca de acceso';
$lang->whitelistNotNeed   = 'Los objetos públicos no necesitan lista blanca.';
$lang->globalSetting      = 'General';
$lang->waterfallModel     = 'Cascada';
$lang->scrumModel         = 'Scrum';
$lang->agilePlusModel     = 'Agile Plus';
$lang->waterfallPlusModel = 'Cascada Plus';
$lang->all                = 'Todos';
$lang->viewDetails        = 'Ver detalles';
$lang->childrenAB         = 'Hijo';
$lang->branchName         = 'Branch/Platform';
$lang->recommend          = 'Recomendar';
$lang->schedule           = 'Calendario';
$lang->basicInfo          = 'Información básica';

$lang->actions         = 'Acciones';
$lang->restore         = 'Restaurar valores predeterminados';
$lang->confirmDraft    = '¿Restaurar %name% sin guardar?';
$lang->resume          = 'Restaurar';
$lang->comment         = 'Nota';
$lang->history         = 'Historial';
$lang->attach          = 'Adjuntos';
$lang->reverse         = 'Invertir';
$lang->switchDisplay   = 'Alternar vista';
$lang->switchTo        = 'Cambiar espacio de trabajo';
$lang->expand          = 'Expandir todo';
$lang->collapse        = 'Contraer';
$lang->liteMode        = 'Modo Lite';
$lang->fullMode        = 'Modo completo';
$lang->showMoreInfo    = 'Mostrar más';
$lang->hideMoreInfo    = 'Mostrar menos';
$lang->saveSuccess     = 'Guardado';
$lang->importSuccess   = 'Importado';
$lang->fail            = 'Fallido';
$lang->addFiles        = 'Cargado';
$lang->delFiles        = 'Archivos eliminados ';
$lang->deleteSuccess   = 'Eliminado';
$lang->confirmDelete   = '¿Desea eliminarlo?';
$lang->deleteing       = 'Deleting...';
$lang->deleted         = 'Eliminado';
$lang->files           = 'Adjuntos';
$lang->pasteText       = 'Ingreso masivo';
$lang->uploadImages    = 'Carga masiva de imágenes';
$lang->uploadImagesTip = 'Los nombres de archivo se usarán como títulos y las imágenes como contenido.';
$lang->timeout         = 'Se agotó el tiempo de conexión. Verifique su red o intente de nuevo.';
$lang->repairTable     = 'La tabla de la base de datos puede estar dañada. Repárela con phpMyAdmin o myisamchk.';
$lang->duplicate       = 'Ya existe un(a) %s con este título.';
$lang->ipLimited       = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>Su dirección IP está restringida. Comuníquese con su administrador para obtener acceso.</body></html>";
$lang->unfold          = '+';
$lang->fold            = '-';
$lang->homepage        = 'Establecer como página de inicio';
$lang->noviceTutorial  = 'Tutorial de AXIS FLOW';
$lang->changeLog       = 'Registro de cambios';
$lang->manual          = 'Manual del usuario';
$lang->site            = 'Administración del sitio';
$lang->customMenu      = 'Menú personalizado';
$lang->customField     = 'Campos personalizados';
$lang->lineNumber      = 'Número de línea';
$lang->tutorialConfirm = 'Todavía está en modo tutorial. ¿Desea salir ahora?';
$lang->levelExceeded   = 'Se excedió el límite de visualización. Consulte en la versión de escritorio o use la búsqueda para ver más detalles.';
$lang->noticeOkFile    = '<p class="font-bold mb-2">Por razones de seguridad, debe confirmarse su identidad de administrador.</p>
    <p class="mb-2">Inicie sesión en el servidor y cree el archivo <strong>%s</strong>.</p>
    <p class="mb-2">Puede ejecutar este comando: <code>echo "" > %s</code></p>
    <p class="mb-2">Nota:</p>
    <ul class="mb-2 pl-4" style="list-style: decimal">
        <li>Mantenga el archivo vacío.</li>
        <li>Si el archivo ya existe, elimínelo y vuelva a crearlo.</li>
    </ul>';
$lang->noticeDrag      = 'Haga clic o arrastre archivos aquí para cargarlos. Tamaño máximo: %s.';
$lang->allProgress     = 'Progreso';
$lang->hasReviewed     = 'Este contenido ya fue revisado. No se requiere ninguna otra acción.';
$lang->appNotFound     = 'No tiene permiso para acceder a esta aplicación. Revise su configuración de permisos.';
$lang->uploadFiles     = 'Cargar archivos';

$lang->fieldDisplaySetting = 'Configuración de visualización de campos';
$lang->fieldSettingTip     = 'Los siguientes campos están contraídos de forma predeterminada. Haga clic en "Mostrar más campos" para expandirlos, o use el ícono de fijar para mantener visibles campos específicos.';

$lang->serviceAgreement = "Términos de servicio";
$lang->privacyPolicy    = "Política de privacidad";
$lang->needAgreePrivacy = "Lea primero los Términos de servicio y la Política de privacidad.";
$lang->iAgreedPrivacy   = "He leído y acepto";
$lang->inMaintenance    = "El sistema se encuentra actualmente en mantenimiento.";
$lang->maintainReason   = "Motivo: %s";
$lang->systemMaintainer = "Si tiene alguna pregunta, comuníquese con el administrador.";
$lang->unknown          = "Desconocido";

$lang->preShortcutKey    = '[Atajo: ←]';
$lang->nextShortcutKey   = '[Atajo: →]';
$lang->backShortcutKey   = '[Atajo: Alt+↑]';
$lang->shortcutOperation = 'Acciones rápidas';

$lang->select        = 'Seleccionar';
$lang->selectAll     = 'Seleccionar todo';
$lang->cancelSelect  = 'Deseleccionar';
$lang->selectReverse = 'Invertir selección';
$lang->loading       = 'Loading...';
$lang->notFound      = 'El elemento al que intenta acceder no existe o ha sido eliminado.';
$lang->notPage       = 'Esta función está actualmente en desarrollo y estará disponible en una próxima actualización.';
$lang->showAll       = '[[Mostrar todo]]';
$lang->selectedItems = '<strong>{0}</strong> elemento(s) seleccionado(s)';
$lang->noAssigned    = 'Sin asignar';

$lang->future      = 'Pendiente';
$lang->year        = 'year(s)';
$lang->month       = 'month(s)';
$lang->hour        = 'Hora';
$lang->minute      = 'Minuto';
$lang->second      = 'Segundo';
$lang->workingHour = 'Horas de trabajo';

$lang->idAB         = 'ID';
$lang->priAB        = 'Prioridad';
$lang->statusAB     = 'Estado';
$lang->openedByAB   = 'Creador';
$lang->assignedToAB = 'Responsable';
$lang->typeAB       = 'Tipo';
$lang->nameAB       = 'Nombre';
$lang->code         = 'Código';

$lang->pri     = 'Prioridad';
$lang->delayed = 'Retrasado';

$lang->contactUs = new stdClass();
$lang->contactUs->common = 'Comuníquese con nosotros si necesita ayuda.';
$lang->contactUs->phone  = 'Teléfono';
$lang->contactUs->email  = 'Correo electrónico';
$lang->contactUs->qq     = 'QQ';
$lang->contactUs->wechat = 'WeChat';

$lang->userSelector = new stdClass();
$lang->userSelector->title         = 'Seleccionar usuarios';
$lang->userSelector->deptTitle     = 'Filtrar por departamento';
$lang->userSelector->userTitle     = 'Seleccionar usuarios';
$lang->userSelector->selectedTitle = 'Seleccionado';
$lang->userSelector->allText       = 'Todos los usuarios';
$lang->userSelector->emptyText     = 'No hay usuarios disponibles';

$lang->common->common       = 'Módulo común';
$lang->common->story        = 'Historia';
$lang->common->stories      = 'Historias';
$lang->cache->common        = 'Caché';
$lang->errorlog->common     = 'Registro de errores';
$lang->my->common           = 'Panel';
$lang->todo->common         = 'To-do';
$lang->block->common        = 'Bloque';
$lang->program->common      = 'Programa';
$lang->product->common      = $lang->productCommon;
$lang->project->common      = $lang->projectCommon;
$lang->execution->common    = 'Ejecución';
$lang->kanban->common       = 'Kanban';
$lang->qa->common           = 'Prueba';
$lang->devops->common       = 'CI&CD';
$lang->devops->configure    = 'Configuración';
$lang->devops->monitor      = 'Monitoreo';
$lang->doc->common          = 'Documento';
$lang->repo->common         = 'Código';
$lang->repo->commit         = 'Commit';
$lang->repo->tag            = 'Etiqueta';
$lang->repo->branch         = 'Rama';
$lang->repo->codeRepo       = 'Repositorio de código';
$lang->bi->common           = 'Informe';
$lang->screen->common       = 'Pantalla';
$lang->pivot->common        = 'Tabla dinámica';
$lang->chart->common        = 'Gráfico';
$lang->metric->common       = 'Métrica';
$lang->report->common       = 'Informe';
$lang->system->common       = 'Empresa';
$lang->admin->common        = 'Administración';
$lang->epic->common         = $lang->ERCommon;
$lang->story->common        = $lang->SRCommon;
$lang->task->common         = 'Tarea';
$lang->bug->common          = 'Bug';
$lang->testcase->common     = 'Caso de prueba';
$lang->testtask->common     = 'Solicitud de prueba';
$lang->score->common        = 'Mis puntos';
$lang->build->common        = 'Build';
$lang->testreport->common   = 'Informe de pruebas';
$lang->automation->common   = 'Automatización';
$lang->autotest->common     = 'Automatización';
$lang->team->common         = 'Equipo';
$lang->user->common         = 'Usuario';
$lang->custom->common       = 'Personalizado';
$lang->custom->mode         = 'Modo';
$lang->custom->flow         = 'Flujo de trabajo';
$lang->extension->common    = 'Extensión';
$lang->company->common      = 'Empresa';
$lang->dept->common         = 'Departamento';
$lang->upgrade->common      = 'Actualizar versión';
$lang->editor->common       = 'Editor';
$lang->program->list        = 'Lista de programas';
$lang->program->kanban      = 'Kanban de programas';
$lang->program->projectView = 'Vista de proyecto';
$lang->program->productView = 'Vista de producto';
$lang->design->common       = 'Diseño';
$lang->design->HLDS         = 'Diseño de alto nivel';
$lang->design->DDS          = 'Diseño detallado';
$lang->design->DBDS         = 'Diseño de base de datos';
$lang->design->ADS          = 'Diseño de API';
$lang->stage->common        = 'Fase';
$lang->stage->type          = 'Tipo de fase';
$lang->stage->list          = 'Lista de fases';
$lang->stage->percent       = 'Proporción de carga de trabajo';
$lang->execution->list      = "Lista de {$lang->executionCommon}";
$lang->execution->CFD       = "Diagrama de flujo acumulado";
$lang->kanban->common       = 'Kanban';
$lang->backup->common       = 'Respaldo';
$lang->action->trash        = 'Papelera';
$lang->app->common          = 'Servicio';
$lang->app->store           = 'Tienda de aplicaciones';
$lang->app->serverLink      = 'Enlace del servidor';
$lang->review->common       = 'Aprobación';
$lang->zahost->common       = 'ZAhost';
$lang->zanode->common       = 'ZAnode';
$lang->zanode->instruction  = 'Instrucciones';
$lang->dimension->common    = 'Dimensión';
$lang->contact->common      = 'Contactos';
$lang->space->common        = 'Espacio';
$lang->store->common        = 'Tienda de aplicaciones';
$lang->instance->common     = 'Instancia';
$lang->ai->common           = 'IA';
$lang->aiapp->common        = 'Agente';
$lang->product->system      = 'Aplicación';
$lang->configure->common    = 'Configuración';

$lang->programstakeholder->common   = 'Interesados';
$lang->featureswitch->common        = 'Activadores de funcionalidades';
$lang->importdata->common           = 'Importación de datos';
$lang->systemsetting->common        = 'Configuración del sistema';
$lang->staffmanage->common          = 'Gestión de usuarios';
$lang->featureconfig->common        = 'Configuración de funcionalidades';
$lang->doctemplate->common          = 'Plantillas de documentos';
$lang->notifysetting->common        = 'Configuración de notificaciones';
$lang->bidesign->common             = 'Diseño de BI';
$lang->personalsettings->common     = 'Configuración personal';
$lang->projectsettings->common      = 'Configuración';
$lang->dataaccess->common           = 'Permisos de datos';
$lang->executiongantt->common       = 'Diagrama de Gantt';
$lang->executionkanban->common      = 'Kanban';
$lang->executionburn->common        = 'Gráfico burndown';
$lang->executioncfd->common         = 'Diagrama de flujo acumulado';
$lang->executionstory->common       = 'Historia';
$lang->executionqa->common          = 'Prueba';
$lang->executionbuild->common       = 'Build';
$lang->executionsettings->common    = 'Configuración';
$lang->generalcomment->common       = 'Comentarios';
$lang->generalping->common          = 'Keep-alive';
$lang->generaltemplate->common      = 'Plantillas';
$lang->generaleffort->common        = 'Registros generales';
$lang->productsettings->common      = 'Configuración del producto';
$lang->projectreview->common        = 'Revisiones';
$lang->projecttrack->common         = 'Matriz';
$lang->projectqa->common            = 'Prueba';
$lang->holidayseason->common        = 'Festivos';
$lang->codereview->common           = 'Incidencias';
$lang->repocode->common             = 'Código';
$lang->deliverable->common          = 'Entregable';
$lang->projectDeliverable->common   = 'Entregables del proyecto';
$lang->executionDeliverable->common = 'Entregables de la ejecución';
$lang->projectTemplate->common      = 'Plantillas de proyecto';

$lang->personnel->common     = 'Miembros';
$lang->personnel->invest     = 'Miembros asignados';
$lang->personnel->accessible = 'Miembros con acceso';

$lang->stakeholder->common = 'Interesados';
$lang->release->common     = 'Lanzamiento';
$lang->message->common     = 'Notificación del sistema';
$lang->mail->common        = 'Correo electrónico';

$lang->my->shortCommon          = 'Panel';
$lang->testcase->shortCommon    = 'Caso de prueba';
$lang->productplan->shortCommon = 'Plan';
$lang->score->shortCommon       = 'Puntos';
$lang->testreport->shortCommon  = 'Informe';
$lang->qa->shortCommon          = 'QA';
$lang->researchplan->common     = 'Investigación';
$lang->workestimation->common   = 'Estimación';
$lang->gapanalysis->common      = 'Capacitación';
$lang->executionview->common    = 'Ver';
$lang->managespace->common      = 'Gestión de espacios';
$lang->systemteam->common       = 'Equipo del sistema';
$lang->systemschedule->common   = 'Calendario del sistema';
$lang->systemeffort->common     = 'Esfuerzo del sistema';
$lang->systemdynamic->common    = 'Actividades del sistema';
$lang->systemcompany->common    = 'Empresa';
$lang->pipeline->common         = 'Pipelines';
$lang->devopssetting->common    = 'Configuración';
$lang->deployment->common       = 'Host';
$lang->repoSettings->common     = 'Configuración';
$lang->devops->branchType       = 'Tipo de rama';
$lang->devops->reviewFlow       = 'Flujo de revisión';
$lang->devops->reporeviewflow   = 'Flujo de revisión';
$lang->devops->execution        = 'Ejecución';
$lang->artifact->common         = 'Repositorio de artefactos';
$lang->ssh->common              = 'Clave SSH';
$lang->codeReview->common       = 'Revisión de código';
$lang->runner->common           = 'Runner';
$lang->repobranchrule->common   = 'Regla de ramas';

$lang->dashboard       = 'Resumen';
$lang->contribute      = 'Contribución';
$lang->dynamic         = 'Recientes';
$lang->whitelist       = 'Lista blanca';
$lang->roadmap         = 'Hoja de ruta';
$lang->track           = 'Matriz';
$lang->settings        = 'Configuración';
$lang->overview        = 'Resumen';
$lang->module          = 'Módulos';
$lang->priv            = 'Permiso';
$lang->other           = 'Otros';
$lang->estimation      = 'Estimación';
$lang->measure         = 'Métricas';
$lang->treeView        = 'Vista de árbol';
$lang->groupView       = 'Vista de grupo';
$lang->executionKanban = 'Kanban';
$lang->burn            = 'Burndown';
$lang->view            = 'Ver';
$lang->intro           = 'Introducción';
$lang->indexPage       = 'Página principal';
$lang->model           = 'Modelo';
$lang->redev           = 'Desarrollo personalizado';
$lang->browser         = 'Navegador';
$lang->db              = 'Base de datos';
$lang->langItem        = 'Elementos de idioma';
$lang->api->doc        = 'Documentación de la API';
$lang->database        = 'Diccionario de datos';
$lang->timezone        = 'Zona horaria';
$lang->security        = 'Seguridad';
$lang->calendar        = 'Calendario';

$lang->my->work = 'Mi trabajo';

$lang->project->list   = $lang->projectCommon . ' Lista';
$lang->project->kanban = $lang->projectCommon . ' Kanban';

$lang->execution->executionKanban = "Kanban de {$lang->execution->common}";
$lang->execution->all             = "Lista de {$lang->execution->common}";

$lang->doc->recent        = 'Documentos recientes';
$lang->doc->my            = 'Mis documentos';
$lang->doc->favorite      = 'Favoritos';
$lang->doc->product       = $lang->productCommon;
$lang->doc->project       = $lang->projectCommon;
$lang->doc->api           = 'Biblioteca de API';
$lang->doc->execution     = $lang->execution->common;
$lang->doc->custom        = 'Biblioteca personalizada';
$lang->doc->wiki          = 'Wiki';
$lang->doc->apiDoc        = 'Documentación de la API';
$lang->doc->apiStruct     = 'Estructuras de datos';
$lang->doc->quick         = 'Acceso rápido';
$lang->doc->mySpace       = 'Mi espacio';
$lang->doc->productSpace  = "Espacio de {$lang->productCommon}";
$lang->doc->projectSpace  = "Espacio de {$lang->projectCommon}";
$lang->doc->apiSpace      = 'Espacio de API';
$lang->doc->teamSpace     = 'Espacio del equipo';
$lang->doc->template      = 'Plantillas de documentos';

$lang->product->list   = $lang->productCommon . ' Lista';
$lang->product->kanban = $lang->productCommon . ' Kanban';

$lang->project->report = 'Informe';

$lang->report->weekly       = 'Informe semanal';
$lang->report->notice       = new stdclass();
$lang->report->notice->help = '<i class="icon icon-help text-warning text-xl mr-2"></i>Los datos del informe provienen de los resultados de búsqueda de su página de lista. Realice una búsqueda en la página de lista antes de generar el informe. Ejemplo: si busca historias abiertas, el informe calculará las estadísticas específicamente sobre el conjunto de datos resultante.';

$lang->testcase->case      = 'Caso de prueba';
$lang->testcase->testsuite = 'Suite de pruebas';
$lang->testcase->caselib   = 'Biblioteca de casos';

$lang->devops->compile      = 'Pipelines';
$lang->devops->ppm          = 'Revisión de código';
$lang->devops->repo         = 'Repositorios';
$lang->devops->rules        = 'Reglas';
$lang->devops->settings     = 'Configuración de solicitudes de combinación';
$lang->devops->platform     = 'Plataformas';
$lang->devops->set          = 'Configuración';
$lang->devops->environment  = 'Entornos';
$lang->devops->resource     = 'Recursos';
$lang->devops->dblist       = 'Bases de datos';
$lang->devops->domain       = 'Dominios';
$lang->devops->oss          = 'Servicio de almacenamiento de objetos';
$lang->devops->host         = 'Hosts';
$lang->devops->serverroom   = 'Centro de datos';
$lang->devops->deploy       = 'Despliegues';
$lang->devops->provider     = 'Proveedor de servicios';
$lang->devops->city         = 'Ubicación';
$lang->devops->os           = 'Versión del SO';
$lang->devops->service      = 'Servicios';
$lang->devops->platform     = 'Plataformas';
$lang->devops->components   = 'Componentes';
$lang->devops->spaceSetting = 'Configuración';
$lang->devops->member       = 'Miembro';
$lang->devops->group        = 'Privilegio';
$lang->devops->overview     = 'Resumen';
$lang->devops->codescan     = 'Escaneo de código';
$lang->devops->scanRule     = 'Regla';
$lang->devops->scanSolution = 'Solución de escaneo';
$lang->devops->scanPlan     = 'Plan de escaneo';
$lang->devops->scanTask     = 'Tarea de escaneo';
$lang->devops->reviewIssue  = 'Revisión de incidencia';
$lang->devops->scanIssue    = 'Incidencia de escaneo';
$lang->devops->ruleSet      = 'Conjunto de reglas';
$lang->devops->system       = 'Aplicaciones';
$lang->systemManage->common = 'Aplicaciones';
$lang->codeScan->common     = 'Reglas de escaneo';
$lang->ruleset->common      = 'Conjunto de reglas';
$lang->scansolution->common = 'Solución de escaneo';
$lang->scanplan->common     = 'Plan de escaneo';
$lang->scantask->common     = 'Tarea de escaneo';
$lang->scanissue->common    = 'Incidencia de escaneo';
$lang->scanOverview->common = 'Resumen de escaneo';
$lang->provider->common     = 'Servicio';

$lang->admin->module      = 'Configuración de funcionalidades';
$lang->admin->system      = 'Sistema';
$lang->admin->entry       = 'Integraciones';
$lang->admin->data        = 'Datos';
$lang->admin->cron        = 'Tarea Cron';
$lang->admin->buildIndex  = 'Reconstruir índice';
$lang->admin->tableEngine = 'Motor de tabla';

$lang->convert->importJira = 'Importar datos de Jira';

$lang->storyConcept  = 'Concepto de historia';
$lang->defaultERName = 'Épica';

$lang->searchTips = '';
$lang->searchAB   = 'Buscar';

/* Object list in search form. */
$lang->searchObjects['all']         = 'Todos';
$lang->searchObjects['bug']         = 'Bug';
$lang->searchObjects['story']       = $lang->SRCommon;
if($config->enableER) $lang->searchObjects['epic']        = $lang->ERCommon;
if($config->URAndSR)  $lang->searchObjects['requirement'] = $lang->URCommon;
$lang->searchObjects['task']        = 'Tarea';
$lang->searchObjects['testcase']    = 'Caso';
$lang->searchObjects['product']     = $lang->productCommon;
$lang->searchObjects['build']       = 'Build';
$lang->searchObjects['release']     = 'Lanzamiento';
$lang->searchObjects['productplan'] = $lang->productCommon . ' Plan';
$lang->searchObjects['testtask']    = 'Solicitud de prueba';
$lang->searchObjects['doc']         = 'Documento';
$lang->searchObjects['caselib']     = 'Biblioteca de casos';
$lang->searchObjects['testreport']  = 'Informe de pruebas';
$lang->searchObjects['program']     = 'Programa';
$lang->searchObjects['project']     = $lang->projectCommon;
$lang->searchObjects['execution']   = $lang->execution->common;
$lang->searchObjects['user']        = 'Usuario';
$lang->searchObjects['aiapp']       = 'IA';
$lang->searchTips                   = 'ID (ctrl+g)';

/* Code formats for import. */
$lang->importEncodeList['gbk']   = 'GBK';
$lang->importEncodeList['big5']  = 'BIG5';
$lang->importEncodeList['utf-8'] = 'UTF-8';

/* File type list for export. */
$lang->exportFileTypeList['csv']  = 'csv';
$lang->exportFileTypeList['xml']  = 'xml';
$lang->exportFileTypeList['html'] = 'html';

$lang->exportTypeList['all']      = 'Todos los datos';
$lang->exportTypeList['selected'] = 'Datos seleccionados';

$lang->visionList = array();
$lang->visionList['rnd']    = 'Interfaz de funcionalidad completa';
$lang->visionList['lite']   = 'Interfaz de operaciones';
//$lang->visionList['devops'] = 'DevOps Interface';

$lang->createObjects['todo']        = 'To-Do';
$lang->createObjects['effort']      = 'Esfuerzo';
$lang->createObjects['bug']         = 'Bug';
$lang->createObjects['story']       = $lang->SRCommon;
$lang->createObjects['task']        = 'Tarea';
$lang->createObjects['testcase']    = 'Caso';
$lang->createObjects['execution']   = $lang->execution->common;
$lang->createObjects['project']     = $lang->projectCommon;
$lang->createObjects['product']     = $lang->productCommon;
$lang->createObjects['program']     = 'Programa';
$lang->createObjects['doc']         = 'Documento';
$lang->createObjects['board']       = 'Pizarra';
$lang->createObjects['kanbanspace'] = 'Espacio';
$lang->createObjects['kanban']      = 'Kanban';

/* Language. */
$lang->lang    = 'Idioma';
$lang->setLang = 'Configuración de idioma';

/* Theme style. */
$lang->theme                = 'Tema';
$lang->themes['default']    = 'Azul clásico';
$lang->themes['blue']       = 'Azul';
$lang->themes['green']      = 'Verde';
$lang->themes['red']        = 'Rojo';
$lang->themes['purple']     = 'Morado';
$lang->themes['blackberry'] = 'Blackberry';

/* Error info. */
$lang->error = new stdclass();
$lang->error->companyNotFound = "No se encontró la empresa para el dominio %s.";
$lang->error->length          = array("La longitud de 『%s』 debe ser 『%s』.", "La longitud de 『%s』 debe estar entre 『%s』 y 『%s』.");
$lang->error->reg             = "El formato de 『%s』 no es válido. Debe ser: 『%s』.";
$lang->error->unique          = "『%s』 ya tiene un registro para 『%s』. Si fue eliminado, restáurelo desde Administración > Sistema > Papelera.";
$lang->error->repeat          = "『%s』 ya tiene un registro para 『%s』.";
$lang->error->gt              = "『%s』 debe ser mayor que 『%s』.";
$lang->error->ge              = "『%s』 debe ser mayor o igual que 『%s』.";
$lang->error->lt              = "『%s』 debe ser menor que 『%s』.";
$lang->error->le              = "『%s』 debe ser menor o igual que 『%s』.";
$lang->error->in              = "『%s』 debe ser uno de 『%s』.";
$lang->error->notempty        = "『%s』 no puede estar vacío.";
$lang->error->empty           = "『%s』 debe estar vacío.";
$lang->error->equal           = "『%s』 debe ser 『%s』.";
$lang->error->int             = array("『%s』 debe ser un número.", "『%s』 debe estar entre 『%s』 y 『%s』.");
$lang->error->float           = "『%s』 debe ser un número entero o decimal.";
$lang->error->email           = "『%s』 debe ser un correo electrónico válido.";
$lang->error->phone           = "『%s』 debe ser un número de teléfono válido.";
$lang->error->mobile          = "『%s』 debe ser un número de móvil válido.";
$lang->error->URL             = "『%s』 debe ser una URL válida.";
$lang->error->date            = "『%s』 debe ser una fecha válida.";
$lang->error->datetime        = "『%s』 debe ser una fecha y hora válidas.";
$lang->error->code            = "『%s』 debe ser alfanumérico.";
$lang->error->account         = "『%s』 debe tener al menos 3 caracteres y contener solo letras, números o guiones bajos.";
$lang->error->passwordsame    = "Las contraseñas deben coincidir.";
$lang->error->passwordrule    = "La contraseña debe tener al menos 6 caracteres y cumplir los requisitos.";
$lang->error->accessDenied    = 'Acceso denegado.';
$lang->error->unsupportedReq  = 'Tipo de solicitud no compatible.';
$lang->error->pasteImg        = 'Su navegador no admite pegar imágenes.';
$lang->error->noData          = 'No hay datos disponibles.';
$lang->error->editedByOther   = 'Es posible que alguien más haya modificado este registro. Actualice la página e intente de nuevo.';
$lang->error->tutorialData    = 'No se pueden insertar datos en modo tutorial. Salga primero del modo tutorial.';
$lang->error->noCurlExt       = 'El servidor no tiene instalado el módulo Curl.';
$lang->error->loginTimeout    = 'La sesión expiró. Inicie sesión de nuevo.';
$lang->error->httpServerError = 'Error del servidor.';
$lang->error->action          = 'No se cumplen las condiciones para ejecutar esta operación, por lo que no se puede ejecutar.';

/* Page info. */
$lang->pager = new stdclass();
$lang->pager->noRecord     = "No se encontraron registros.";
$lang->pager->digest       = "Total: <strong>%s</strong> elemento(s), %s <strong>%s/%s</strong> &nbsp;";
$lang->pager->recPerPage   = "<strong>%s</strong> por página";
$lang->pager->first        = "<i class='icon-step-backward' title='First Page'></i>";
$lang->pager->pre          = "<i class='icon-play icon-flip-horizontal' title='Previous Page'></i>";
$lang->pager->next         = "<i class='icon-play' title='Next Page'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='Last Page'></i>";
$lang->pager->locate       = "Ir";
$lang->pager->previousPage = "Anterior";
$lang->pager->nextPage     = "Siguiente";
$lang->pager->summery      = "<strong>%s-%s</strong> de <strong>%s</strong> elementos";
$lang->pager->pageOfText   = "Página {0}";
$lang->pager->firstPage    = "Primero";
$lang->pager->lastPage     = "Último";
$lang->pager->goto         = "Ir a";
$lang->pager->pageOf       = "Página <strong>{page}</strong>";
$lang->pager->totalPage    = "<strong>{totalPage}</strong> páginas";
$lang->pager->totalCount   = "Total: <strong>{recTotal}</strong> elemento(s)";
$lang->pager->pageSize     = "<strong>{recPerPage}</strong> por página";
$lang->pager->itemsRange   = "Elementos <strong>{start}</strong> - <strong>{end}</strong>";
$lang->pager->pageOfTotal  = "Página <strong>{page}</strong> de <strong>{totalPage}</strong>";
$lang->pager->totalCountAB = "{recTotal} elemento(s)";
$lang->pager->pageSizeAB   = "{recPerPage} por página";

$lang->pager->shortPageSize = '<strong>{recPerPage}</strong> / Página';

$lang->colorPicker = new stdclass();
$lang->colorPicker->errorTip = 'Valor de color no válido.';

$lang->downNotify     = "Descargar notificador de escritorio";
$lang->clientName     = "ZenTao IM";
$lang->downloadClient = "Descargar ZenTao IM";
$lang->downloadMobile = "Descargar app móvil";
$lang->clientHelp     = "Guía de usuario de ZenTao IM";
$lang->clientHelpLink = "https://www.zentao.pm/book/zentaomanual/scrum-tool-im-integration-206.html";
$lang->website        = "https://www.zentao.pm";

$lang->suhosinInfo     = "Advertencia: se superó el límite de datos. Modifique <font color=red>suhosin.post.max_vars</font> y <font color=red>suhosin.request.max_vars</font> (a un valor > %s) en php.ini. Guarde y reinicie Apache o php-fpm; de lo contrario, es posible que algunos datos no se guarden.";
$lang->maxVarsInfo     = "Advertencia: se superó el límite de datos. Modifique <font color=red>max_input_vars</font> (a un valor > %s) en php.ini. Guarde y reinicie Apache o php-fpm; de lo contrario, es posible que algunos datos no se guarden.";
$lang->pasteTextInfo   = "Pegue el texto aquí. Cada línea se convertirá en un título independiente.";
$lang->noticeImport    = "El archivo importado contiene datos existentes. Elija si desea sobrescribirlos o insertarlos como nuevos registros.";
$lang->importConfirm   = "Confirmar importación";
$lang->importAndCover  = "Sobrescribir";
$lang->importAndInsert = "Insertar como nuevo";

$lang->noResultsMatch     = "No se encontraron resultados.";
$lang->searchMore         = "Más resultados para esta palabra clave:";
$lang->chooseUsersToMail  = "Seleccione los usuarios a notificar. ";
$lang->noticePasteImg     = "Puede pegar imágenes directamente en el editor.";
$lang->pasteImgFail       = "No se pudo pegar la imagen. Inténtelo de nuevo más tarde.";
$lang->pasteImgUploading  = "Cargando imagen, espere...";

/* Work visions. */
$lang->visionTips      = "Aquí puede cambiar de visión";
$lang->IKnow           = "Entendido";
$lang->switchVision    = 'Cambiar a visión';
$lang->workspaceAbbr   = 'Espacio';
$lang->switchWorkspace = 'Cambiar al espacio de trabajo';
$lang->enterWorkspace  = 'Entrar al espacio';
$lang->exitWorkspace   = 'Salir del espacio';

/* Workspace list. */
$lang->workspaceList = [];
$lang->workspaceList['product']   = "{$lang->product->common} space";
$lang->workspaceList['project']   = "{$lang->project->common} space";
$lang->workspaceList['execution'] = "{$lang->execution->common} space";

/* Time formats settings. */
if(!defined('DT_DATETIME1'))  define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2'))  define('DT_DATETIME2',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1')) define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2')) define('DT_MONTHTIME2', 'n/d H:i');
if(!defined('DT_DATE1'))      define('DT_DATE1',      'Y-m-d');
if(!defined('DT_DATE2'))      define('DT_DATE2',      'Ymd');
if(!defined('DT_DATE3'))      define('DT_DATE3',      'Y/m/d');
if(!defined('DT_DATE4'))      define('DT_DATE4',      'M d');
if(!defined('DT_DATE5'))      define('DT_DATE5',      'j/n');
if(!defined('DT_TIME1'))      define('DT_TIME1',      'H:i:s');
if(!defined('DT_TIME2'))      define('DT_TIME2',      'H:i');

/* Datepicker. */
$lang->datepicker = new stdclass();

$lang->datepicker->dpText = new stdclass();
$lang->datepicker->dpText->TEXT_OR          = 'or ';
$lang->datepicker->dpText->TEXT_PREV_YEAR   = 'Año pasado';
$lang->datepicker->dpText->TEXT_PREV_MONTH  = 'Mes pasado';
$lang->datepicker->dpText->TEXT_PREV_WEEK   = 'Semana pasada';
$lang->datepicker->dpText->TEXT_YESTERDAY   = 'Ayer';
$lang->datepicker->dpText->TEXT_THIS_MONTH  = 'Este mes';
$lang->datepicker->dpText->TEXT_THIS_WEEK   = 'Esta semana';
$lang->datepicker->dpText->TEXT_TODAY       = 'Hoy';
$lang->datepicker->dpText->TEXT_NEXT_YEAR   = 'Año siguiente';
$lang->datepicker->dpText->TEXT_NEXT_MONTH  = 'Mes siguiente';
$lang->datepicker->dpText->TEXT_NEXT_WEEK   = 'Semana siguiente';
$lang->datepicker->dpText->TEXT_CLOSE       = 'Cerrar';
$lang->datepicker->dpText->TEXT_DATE        = 'Fecha';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = 'Seleccionar fecha';

$lang->datepicker->dayNames     = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
$lang->datepicker->abbrDayNames = array('Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb');
$lang->datepicker->monthNames   = array('enero', 'febrero', 'marzo', 'Abril', 'mayo', 'junio', 'julio', 'agosto', 'Septiembre', 'octubre', 'noviembre', 'Diciembre');

/* AI */
$lang->aiapp->conversation = 'Conversación';
$lang->aiapp->zentaoAgent  = 'ZenTao Agent';
$lang->aiapp->generalAgent = 'Agente general';
$lang->aiapp->models       = 'Modelos';
$lang->aiapp->config       = 'Configuración de ZAI';
$lang->aiapp->toolkit      = 'Kit de herramientas';

if(!helper::hasFeature('program')) unset($lang->searchObjects['program'], $lang->createObjects['program']);
if(!helper::hasFeature('caselib')) unset($lang->searchObjects['caselib']);
if(!helper::hasFeature('kanban') ) unset($lang->createObjects['kanban'], $lang->createObjects['kanbanspace']);

include (dirname(__FILE__) . '/menu.php');
