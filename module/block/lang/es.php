<?php
/**
 * The en file of block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        https://www.zentao.net
 */
global $config;
$lang->block->id         = 'ID';
$lang->block->params     = 'Parámetros';
$lang->block->name       = 'Nombre del bloque';
$lang->block->style      = 'Apariencia';
$lang->block->grid       = 'Cargo';
$lang->block->color      = 'Color';
$lang->block->reset      = 'Restaurar valores predeterminados';
$lang->block->story      = 'Historia';
$lang->block->investment = 'Inversión';
$lang->block->estimate   = 'Estimación';
$lang->block->last       = 'Reciente';
$lang->block->width      = 'Ancho';

$lang->block->account = 'Cuenta';
$lang->block->title   = 'Nombre del bloque';
$lang->block->module  = 'Módulo';
$lang->block->code    = 'Bloque';
$lang->block->order   = 'Orden';
$lang->block->height  = 'Alto';
$lang->block->role    = 'Rol';

$lang->block->lblModule       = 'Módulo';
$lang->block->lblBlock        = 'Bloque';
$lang->block->lblNum          = 'Cantidad de elementos';
$lang->block->lblHtml         = 'Contenido HTML';
$lang->block->html            = 'HTML';
$lang->block->dynamic         = 'Recientes';
$lang->block->zentaoDynamic   = 'Noticias de ZenTao';
$lang->block->assignToMe      = 'Elementos pendientes';
$lang->block->wait            = 'En espera';
$lang->block->doing           = 'En curso';
$lang->block->done            = 'Completado';
$lang->block->lblFlowchart    = 'Flujo esencial';
$lang->block->lblTesttask     = 'Ver detalles de la prueba';
$lang->block->contribute      = 'Mis contribuciones';
$lang->block->finish          = 'Completado';
$lang->block->guide           = 'Guía';
$lang->block->teamAchievement = 'Logros del equipo';
$lang->block->learnMore       = 'Más información';
$lang->block->prevPage        = 'Volver';
$lang->block->nextPage        = 'Siguiente';
$lang->block->experience      = 'Ir';

$lang->block->leftToday           = 'Trabajo total restante de hoy';
$lang->block->myTask              = 'Mis tareas';
$lang->block->myStory             = "Mis: {$lang->SRCommon}";
$lang->block->myBug               = 'Mis Bugs';
$lang->block->myExecution         = 'Abierto' . $lang->executionCommon;
$lang->block->myProduct           = 'Abierto' . $lang->productCommon;
$lang->block->delay               = 'delay';
$lang->block->delayed             = 'Retrasado';
$lang->block->noData              = 'No hay datos para este tipo de informe';
$lang->block->emptyTip            = 'Sin datos';
$lang->block->createdTodos        = 'Pendientes creados';
$lang->block->createdRequirements = 'Creado' . $lang->URCommon . 'Conteo';
$lang->block->createdStories      = 'Creado' . $lang->SRCommon . 'Conteo';
$lang->block->finishedTasks       = 'Tareas completadas';
$lang->block->createdBugs         = 'Bugs reportados';
$lang->block->resolvedBugs        = 'Bugs resueltos';
$lang->block->createdCases        = 'Casos creados';
$lang->block->createdRisks        = 'Riesgos creados';
$lang->block->resolvedRisks       = 'Riesgos resueltos';
$lang->block->createdIssues       = 'Incidencias creadas';
$lang->block->resolvedIssues      = 'Incidencias resueltas';
$lang->block->createdDocs         = 'Documentos creados';
$lang->block->allExecutions       = 'Todos ' . $lang->executionCommon;
$lang->block->doingExecution      = 'En curso ' . $lang->executionCommon;
$lang->block->finishExecution     = 'Total ' . $lang->executionCommon;
$lang->block->estimatedHours      = 'Estimado';
$lang->block->consumedHours       = 'Costo';
$lang->block->time                = 'No.';
$lang->block->week                = 'Semana';
$lang->block->month               = 'Mes';
$lang->block->selectProduct       = "{$lang->productCommon} selection";
$lang->block->blockTitle          = '%1$s %2$s';
$lang->block->remain              = 'Izquierda';
$lang->block->allStories          = 'Total de historias';

$lang->block->createBlock        = 'Agregar bloque';
$lang->block->editBlock          = 'Editar bloque';
$lang->block->ordersSaved        = 'El orden se ha guardado.';
$lang->block->confirmRemoveBlock = '¿Seguro que desea ocultar este bloque?';
$lang->block->noticeNewBlock     = 'Desde la versión 10.0 hay nuevos diseños disponibles para todas las páginas de inicio de las vistas. ¿Desea cambiar al nuevo?';
$lang->block->confirmReset       = '¿Restablecer al diseño predeterminado?';
$lang->block->closeForever       = 'Quitar permanentemente';
$lang->block->confirmClose       = '¿Seguro que desea deshabilitar este bloque? Una vez deshabilitado, no estará disponible para ningún usuario. Puede volver a habilitarlo en [Administración > Funciones > Panel > Bloques].';
$lang->block->remove             = 'Quitar';
$lang->block->refresh            = 'Actualizar';
$lang->block->nbsp               = ' ';
$lang->block->hidden             = 'Ocultar';
$lang->block->dynamicInfo        = "<span class='timeline-tag'>%s</span> <span class='timeline-text'>%s<span class='label-action'>%s</span>%s<a href='%s' title='%s'>%s</a></span>";
$lang->block->noLinkDynamic      = "<span class='timeline-tag'>%s</span> <span class='timeline-text' title='%s'>%s<span class='label-action'>%s</span>%s<span class='label-name'>%s</span></span>";
$lang->block->cannotPlaceInLeft  = 'Este bloque no se puede colocar a la izquierda.';
$lang->block->cannotPlaceInRight = 'Este bloque no se puede colocar a la derecha.';
$lang->block->tutorial           = 'Entrar al tutorial';
$lang->block->filterProject      = "Filtrar {$lang->projectCommon}";

$lang->block->productName   = $lang->productCommon . ' Nombre';
$lang->block->totalStory    = 'Total ' . $lang->SRCommon;
$lang->block->totalBug      = 'Total de Bugs';
$lang->block->totalRelease  = 'Total de lanzamientos';
$lang->block->totalTask     = 'Total ' . $lang->task->common;
$lang->block->projectMember = 'Miembros del equipo';
$lang->block->totalMember   = '%s miembro(s)';

$lang->block->totalInvestment = 'Invertido';
$lang->block->totalPeople     = 'Personal';
$lang->block->spent           = 'Costo';
$lang->block->budget          = 'Presupuesto';
$lang->block->left            = 'left';

$lang->block->summary = new stdclass();
$lang->block->summary->welcome    = '¡%s con AXIS FLOW! %s  y tus tareas y bugs te esperan para tu gran trabajo de hoy!';
$lang->block->summary->yesterday  = '<strong>yesterday</strong>,';
$lang->block->summary->noWork     = 'Un día tranquilo ';
$lang->block->summary->finishTask = 'Completaste <a href="' .  helper::createLink('my', 'contribute', 'mode=task&browseType=finishedBy') . '" class="text-success">%s</a> tarea(s)';
$lang->block->summary->fixBug     = 'Resolviste <a href="' . helper::createLink('my', 'contribute', 'mode=bug&browseType=resolvedBy') . '" class="text-success">%s</a> bug(s)';
$lang->block->summary->fixBugEn   = 'resolved <a href="' . helper::createLink('my', 'contribute', 'mode=bug&browseType=resolvedBy') . '" class="text-success">%s</a> bug(s)';

$lang->block->dashboard['default'] = 'Mi resumen';
$lang->block->dashboard['my']      = 'Panel';

$lang->block->titleList['flowchart']      = 'Flujo esencial';
$lang->block->titleList['guide']          = 'Guía del usuario';
$lang->block->titleList['statistic']      = 'Estadísticas';
$lang->block->titleList['recentproject']  = "{$lang->projectCommon} recientes";
$lang->block->titleList['assigntome']     = 'Elementos pendientes';
$lang->block->titleList['project']        = "{$lang->projectCommon}s";
$lang->block->titleList['dynamic']        = 'Recientes';
$lang->block->titleList['list']           = 'Mis pendientes';
$lang->block->titleList['scrumoverview']  = "Resumen de {$lang->projectCommon}";
$lang->block->titleList['scrumtest']      = 'Solicitudes de prueba';
$lang->block->titleList['scrumlist']      = 'Iteraciones';
$lang->block->titleList['sprint']         = 'Resumen de la iteración';
$lang->block->titleList['projectdynamic'] = "Recientes";
$lang->block->titleList['bug']            = 'Bugs asignados a mí';
$lang->block->titleList['case']           = 'Casos asignados a mí';
$lang->block->titleList['testtask']       = 'Solicitudes de prueba';
$lang->block->titleList['statistic']      = "Estadísticas de {$lang->projectCommon}";

$lang->block->default['scrumproject'][] = array('title' => "Resumen de {$lang->projectCommon}",   'module' => 'scrumproject', 'code' => 'scrumoverview',  'width' => '2');
$lang->block->default['scrumproject'][] = array('title' => "Lista de {$lang->executionCommon}",     'module' => 'scrumproject', 'code' => 'scrumlist',      'width' => '2', 'params' => array('type' => 'undone', 'count' => '20', 'orderBy' => 'id_desc'));
$lang->block->default['scrumproject'][] = array('title' => 'Solicitudes de prueba pendientes',             'module' => 'scrumproject', 'code' => 'scrumtest',      'width' => '2', 'params' => array('type' => 'wait', 'count' => '15', 'orderBy' => 'id_desc'));
$lang->block->default['scrumproject'][] = array('title' => "Resumen de {$lang->executionCommon}", 'module' => 'scrumproject', 'code' => 'sprint',         'width' => '1');
$lang->block->default['scrumproject'][] = array('title' => 'Recientes',                   'module' => 'scrumproject', 'code' => 'projectdynamic', 'width' => '1');

$lang->block->default['kanbanproject']    = $lang->block->default['scrumproject'];
unset($lang->block->default['kanbanproject'][2]);
$lang->block->default['agileplusproject'] = $lang->block->default['scrumproject'];

$lang->block->default['waterfallproject'][] = array('title' => "Plan de {$lang->projectCommon}", 'module' => 'waterfallproject', 'code' => 'waterfallgantt', 'width' => '2');
$lang->block->default['waterfallproject'][] = array('title' => 'Recientes',                   'module' => 'waterfallproject', 'code' => 'projectdynamic', 'width' => '1');

$lang->block->default['waterfallplusproject'] = $lang->block->default['waterfallproject'];
$lang->block->default['ipdproject']           = $lang->block->default['waterfallproject'];

$lang->block->default['product'][] = array('title' => "Resumen de {$lang->productCommon}",                   'module' => 'product', 'code' => 'overview',         'width' => '3');
$lang->block->default['product'][] = array('title' => "Estadísticas de {$lang->productCommon} sin cerrar",         'module' => 'product', 'code' => 'statistic',        'width' => '2', 'params' => array('type' => 'noclosed', 'count' => '20'));
$lang->block->default['product'][] = array('title' => "Abrir estadísticas de pruebas de {$lang->productCommon}",      'module' => 'product', 'code' => 'bugstatistic',     'width' => '2', 'params' => array('type' => 'noclosed', 'count' => '20'));
$lang->block->default['product'][] = array('title' => "Análisis mensual de avance de {$lang->productCommon}", 'module' => 'product', 'code' => 'monthlyprogress',  'width' => '2');
$lang->block->default['product'][] = array('title' => "Estadísticas anuales de carga de trabajo de {$lang->productCommon}",  'module' => 'product', 'code' => 'annualworkload',   'width' => '2');
$lang->block->default['product'][] = array('title' => "Lista de {$lang->productCommon} sin cerrar",              'module' => 'product', 'code' => 'list',             'width' => '2', 'params' => array('type' => 'noclosed', 'count' => '20', 'orderBy' => 'id_desc'));
$lang->block->default['product'][] = array('title' => "Lanzamientos de {$lang->productCommon} sin cerrar",          'module' => 'product', 'code' => 'release',          'width' => '2', 'params' => array('type' => 'noclosed', 'count' => '20'));
$lang->block->default['product'][] = array('title' => "Planes de {$lang->productCommon} sin cerrar",             'module' => 'product', 'code' => 'plan',             'width' => '2', 'params' => array('type' => 'noclosed', 'count' => '20'));
$lang->block->default['product'][] = array('title' => "Estadísticas de lanzamientos de {$lang->productCommon}",          'module' => 'product', 'code' => 'releasestatistic', 'width' => '1');
$lang->block->default['product'][] = array('title' => "{$lang->SRCommon} asignado a mí",            'module' => 'product', 'code' => 'story',            'width' => '1', 'params' => array('type' => 'assignedTo', 'count' => '20', 'orderBy' => 'id_desc'));

$lang->block->default['singleproduct'][] = array('title' => "Estadísticas de {$lang->productCommon}",                  'module' => 'singleproduct', 'code' => 'singlestatistic',        'width' => '2', 'params' => array('count' => '20'));
$lang->block->default['singleproduct'][] = array('title' => "Estadísticas de Bugs de {$lang->productCommon}",              'module' => 'singleproduct', 'code' => 'singlebugstatistic',     'width' => '2', 'params' => array('count' => '20'));
$lang->block->default['singleproduct'][] = array('title' => "Hoja de ruta de {$lang->productCommon}",                    'module' => 'singleproduct', 'code' => 'roadmap',                'width' => '2');
$lang->block->default['singleproduct'][] = array('title' => "{$lang->SRCommon} asignado a mí",                  'module' => 'singleproduct', 'code' => 'singlestory',            'width' => '2', 'params' => array('type' => 'assignedTo', 'count' => '20', 'orderBy' => 'id_desc'));
$lang->block->default['singleproduct'][] = array('title' => "Planes de {$lang->productCommon}",                      'module' => 'singleproduct', 'code' => 'singleplan',             'width' => '2', 'params' => array('count' => '20'));
$lang->block->default['singleproduct'][] = array('title' => "Lanzamientos de {$lang->productCommon}",                   'module' => 'singleproduct', 'code' => 'singlerelease',          'width' => '2', 'params' => array('count' => '20'));
$lang->block->default['singleproduct'][] = array('title' => "Recientes",                                           'module' => 'singleproduct', 'code' => 'singledynamic',          'width' => '1');
$lang->block->default['singleproduct'][] = array('title' => "Análisis mensual de avance de {$lang->productCommon}",       'module' => 'singleproduct', 'code' => 'singlemonthlyprogress',  'width' => '1');

$lang->block->default['qa'][] = array('title' => 'Informe de pruebas',           'module' => 'qa', 'code' => 'statistic', 'width' => '2', 'params' => array('type' => 'noclosed',   'count' => '20'));
$lang->block->default['qa'][] = array('title' => 'Solicitudes de prueba pendientes', 'module' => 'qa', 'code' => 'testtask',  'width' => '2', 'params' => array('type' => 'wait',       'count' => '15', 'orderBy' => 'id_desc'));
$lang->block->default['qa'][] = array('title' => 'Mis Bugs',               'module' => 'qa', 'code' => 'bug',       'width' => '1', 'params' => array('type' => 'assignedTo', 'count' => '15', 'orderBy' => 'id_desc'));
$lang->block->default['qa'][] = array('title' => 'Casos asignados a mí',  'module' => 'qa', 'code' => 'case',      'width' => '1', 'params' => array('type' => 'assigntome', 'count' => '15', 'orderBy' => 'id_desc'));

$lang->block->default['full']['my'][] = array('title' => 'welcome',                                         'module' => 'welcome',         'code' => 'welcome',         'width' => '2');
$lang->block->default['full']['my'][] = array('title' => 'Guías',                                          'module' => 'guide',           'code' => 'guide',           'width' => '2');
$lang->block->default['full']['my'][] = array('title' => 'Mi trabajo',                                         'module' => 'assigntome',      'code' => 'assigntome',      'width' => '2', 'params' => array('todoCount' => '20',  'taskCount' => '20', 'bugCount' => '20', 'riskCount' => '20', 'issueCount' => '20', 'storyCount' => '20', 'reviewCount' => '20', 'meetingCount' => '20', 'feedbackCount' => '20'));
$lang->block->default['full']['my'][] = array('title' => "{$lang->projectCommon} recientes",                  'module' => 'project',         'code' => 'recentproject',   'width' => '2');
$lang->block->default['full']['my'][] = array('title' => "Sin completar: {$lang->projectCommon}",              'module' => 'project',         'code' => 'project',         'width' => '2', 'params' => array('type' => 'undone',   'count' => '20', 'orderBy' => 'id_desc'));
$lang->block->default['full']['my'][] = array('title' => "Estadísticas de {$lang->projectCommon} sin completar",                'module' => 'project',         'code' => 'statistic',       'width' => '2', 'params' => array('type' => 'undone',   'count' => '20'));
$lang->block->default['full']['my'][] = array('title' => "Estadísticas de {$lang->execution->common} sin completar",     'module' => 'execution',       'code' => 'statistic',       'width' => '2', 'params' => array('type' => 'undone',   'count' => '20'));
if($config->vision != 'lite') $lang->block->default['full']['my'][] = array('title' => "Abrir estadísticas de {$lang->productCommon}",       'module' => 'product',         'code' => 'statistic',       'width' => '2', 'params' => array('type' => 'noclosed', 'count' => '20'));
if($config->vision != 'lite') $lang->block->default['full']['my'][] = array('title' => "Abrir estadísticas de pruebas de {$lang->productCommon}", 'module' => 'qa',              'code' => 'statistic',       'width' => '2', 'params' => array('type' => 'noclosed', 'count' => '20'));
$lang->block->default['full']['my'][] = array('title' => "Actividad de Zentao",                                  'module' => 'zentaodynamic',   'code' => 'zentaodynamic',   'width' => '1');
$lang->block->default['full']['my'][] = array('title' => 'Recientes',                                         'module' => 'dynamic',         'code' => 'dynamic',         'width' => '1');
$lang->block->default['full']['my'][] = array('title' => "Logros del equipo",                                            'module' => 'teamachievement', 'code' => 'teamachievement', 'width' => '1');
if($config->vision != 'lite') $lang->block->default['full']['my'][] = array('title' => "Resumen de {$lang->productCommon}",                 'module' => 'product',         'code' => 'overview',        'width' => '1');
$lang->block->default['full']['my'][] = array('title' => "Resumen de {$lang->projectCommon}",                 'module' => 'project',         'code' => 'overview',        'width' => '1');
$lang->block->default['full']['my'][] = array('title' => "Resumen de {$lang->execution->common}",             'module' => 'execution',       'code' => 'overview',        'width' => '1');

$lang->block->default['doc'][] = array('title' => 'Estadísticas',                      'module' => 'doc', 'code' => 'docstatistic',    'width' => '2');
$lang->block->default['doc'][] = array('title' => 'Mi colección',                   'module' => 'doc', 'code' => 'docmycollection', 'width' => '2');
$lang->block->default['doc'][] = array('title' => 'Creado por mí',                   'module' => 'doc', 'code' => 'docmycreated',    'width' => '2');
$lang->block->default['doc'][] = array('title' => 'Actualizado recientemente',                'module' => 'doc', 'code' => 'docrecentupdate', 'width' => '2');
if($config->vision == 'rnd') $lang->block->default['doc'][] = array('title' => "Documento de {$lang->productCommon}", 'module' => 'doc', 'code' => 'productdoc',      'width' => '2', 'params' => array('count' => '20'));
$lang->block->default['doc'][] = array('title' => "Documento de {$lang->projectCommon}", 'module' => 'doc', 'code' => 'projectdoc',      'width' => '2', 'params' => array('count' => '20'));
$lang->block->default['doc'][] = array('title' => 'Recientes',                         'module' => 'doc', 'code' => 'docdynamic',      'width' => '1');
$lang->block->default['doc'][] = array('title' => 'Más vistos',                     'module' => 'doc', 'code' => 'docviewlist',     'width' => '1');
$lang->block->default['doc'][] = array('title' => 'Colección destacada',                   'module' => 'doc', 'code' => 'doccollectlist',  'width' => '1');

$lang->block->count   = 'Conteo';
$lang->block->type    = 'Tipo';
$lang->block->orderBy = 'Orden';

$lang->block->availableBlocks['todo']        = 'Pendientes';
$lang->block->availableBlocks['task']        = 'Tareas';
$lang->block->availableBlocks['bug']         = 'Bugs';
$lang->block->availableBlocks['case']        = 'Casos';
$lang->block->availableBlocks['story']       = "Historias";
$lang->block->availableBlocks['requirement'] = "{$lang->URCommon}";
$lang->block->availableBlocks['product']     = $lang->productCommon . 'Lista';
$lang->block->availableBlocks['execution']   = $lang->execution->common . 'Lista';
$lang->block->availableBlocks['plan']        = 'Planes';
$lang->block->availableBlocks['release']     = 'Lanzamientos';
$lang->block->availableBlocks['build']       = 'Builds';
$lang->block->availableBlocks['testcase']    = 'Casos de prueba';
$lang->block->availableBlocks['testtask']    = 'Solicitudes de prueba';
$lang->block->availableBlocks['risk']        = 'Riesgos';
$lang->block->availableBlocks['reviewissue'] = 'Revisión de incidencia';
$lang->block->availableBlocks['issue']       = 'Incidencias';
$lang->block->availableBlocks['meeting']     = 'Reuniones';
$lang->block->availableBlocks['feedback']    = 'Retroalimentaciones';
$lang->block->availableBlocks['ticket']      = 'Tickets';
$lang->block->availableBlocks['demand']      = 'Historias';

$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks['overview']      = "Resumen de {$lang->projectCommon}";
$lang->block->modules['project']->availableBlocks['recentproject'] = "{$lang->projectCommon} recientes";
$lang->block->modules['project']->availableBlocks['statistic']     = "Estadísticas de {$lang->projectCommon}";
$lang->block->modules['project']->availableBlocks['project']       = "{$lang->projectCommon}s";

$lang->block->modules['scrumproject'] = new stdclass();
$lang->block->modules['scrumproject']->availableBlocks['scrumoverview']  = "Resumen de {$lang->projectCommon}";
$lang->block->modules['scrumproject']->availableBlocks['scrumlist']      = $lang->executionCommon . ' Lista';
$lang->block->modules['scrumproject']->availableBlocks['sprint']         = $lang->executionCommon . ' Resumen general';
$lang->block->modules['scrumproject']->availableBlocks['scrumtest']      = 'Solicitudes de prueba';
$lang->block->modules['scrumproject']->availableBlocks['projectdynamic'] = 'Recientes';

$lang->block->modules['waterfallproject'] = new stdclass();
$lang->block->modules['waterfallproject']->availableBlocks['waterfallgantt'] = "Plan de {$lang->projectCommon}";
$lang->block->modules['waterfallproject']->availableBlocks['projectdynamic'] = 'Recientes';

$lang->block->modules['agileplusproject']     = $lang->block->modules['scrumproject'];
$lang->block->modules['waterfallplusproject'] = $lang->block->modules['waterfallproject'];
$lang->block->modules['ipdproject']           = $lang->block->modules['waterfallproject'];

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks['overview']         = "Resumen de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['statistic']        = "Estadísticas de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['releasestatistic'] = "Estadísticas de lanzamientos de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['bugstatistic']     = "Estadísticas de pruebas de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['annualworkload']   = "Estadísticas anuales de carga de trabajo de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['monthlyprogress']  = "Análisis mensual de avance de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['list']             = "Lista de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['plan']             = "Planes de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['release']          = "Lanzamientos de {$lang->productCommon}";
$lang->block->modules['product']->availableBlocks['story']            = "Lista de {$lang->SRCommon}";

$lang->block->modules['singleproduct'] = new stdclass();
$lang->block->modules['singleproduct']->availableBlocks['singlestatistic']       = "Estadísticas de {$lang->productCommon}";
$lang->block->modules['singleproduct']->availableBlocks['singlebugstatistic']    = "Estadísticas de Bugs de {$lang->productCommon}";
$lang->block->modules['singleproduct']->availableBlocks['roadmap']               = "Hoja de ruta de {$lang->productCommon}";
$lang->block->modules['singleproduct']->availableBlocks['singlestory']           = "Lista de {$lang->SRCommon}";
$lang->block->modules['singleproduct']->availableBlocks['singleplan']            = "Planes de {$lang->productCommon}";
$lang->block->modules['singleproduct']->availableBlocks['singlerelease']         = "Lanzamientos de {$lang->productCommon}";
$lang->block->modules['singleproduct']->availableBlocks['singledynamic']         = 'Recientes';
$lang->block->modules['singleproduct']->availableBlocks['singlemonthlyprogress'] = "Análisis mensual de avance de {$lang->productCommon}";

$lang->block->modules['execution'] = new stdclass();
$lang->block->modules['execution']->availableBlocks['statistic'] = $lang->execution->common . 'Estadísticas';
$lang->block->modules['execution']->availableBlocks['overview']  = $lang->execution->common . ' Resumen general';
$lang->block->modules['execution']->availableBlocks['list']      = $lang->execution->common . ' Lista';
$lang->block->modules['execution']->availableBlocks['task']      = 'Tareas';
$lang->block->modules['execution']->availableBlocks['build']     = 'Builds';

$lang->block->modules['qa'] = new stdclass();
$lang->block->modules['qa']->availableBlocks['statistic'] = "Estadísticas de pruebas de {$lang->productCommon}";
$lang->block->modules['qa']->availableBlocks['bug']       = 'Bugs';
$lang->block->modules['qa']->availableBlocks['case']      = 'Casos';
$lang->block->modules['qa']->availableBlocks['testtask']  = 'Solicitudes de prueba';

$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks['list'] = 'Pendientes';

$lang->block->modules['doc'] = new stdclass();
$lang->block->modules['doc']->availableBlocks['docstatistic']    = 'Estadísticas';
$lang->block->modules['doc']->availableBlocks['docdynamic']      = 'Recientes';
$lang->block->modules['doc']->availableBlocks['docmycollection'] = 'Mi colección';
$lang->block->modules['doc']->availableBlocks['docmycreated']    = 'Creado por mí';
$lang->block->modules['doc']->availableBlocks['docrecentupdate'] = 'Actualizado recientemente';
$lang->block->modules['doc']->availableBlocks['docviewlist']     = 'Más vistos';
if($config->vision == 'rnd') $lang->block->modules['doc']->availaableBlocks['productdoc'] = $lang->productCommon . ' Documento';
$lang->block->modules['doc']->availableBlocks['doccollectlist']  = 'Colección destacada';
$lang->block->modules['doc']->availableBlocks['projectdoc']      = $lang->projectCommon . ' Documento';

$lang->block->orderByList = new stdclass();
$lang->block->orderByList->product = array();
$lang->block->orderByList->product['id_asc']      = 'ID ascendente';
$lang->block->orderByList->product['id_desc']     = 'ID descendente';
$lang->block->orderByList->product['status_asc']  = 'Estado ascendente';
$lang->block->orderByList->product['status_desc'] = 'Estado descendente';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['id_asc']      = "ID ascendente";
$lang->block->orderByList->project['id_desc']     = "ID descendente";
$lang->block->orderByList->project['status_asc']  = "Estado ascendente";
$lang->block->orderByList->project['status_desc'] = "Estado descendente";

$lang->block->orderByList->execution = array();
$lang->block->orderByList->execution['id_asc']      = 'ID ascendente';
$lang->block->orderByList->execution['id_desc']     = 'ID descendente';
$lang->block->orderByList->execution['status_asc']  = 'Estado ascendente';
$lang->block->orderByList->execution['status_desc'] = 'Estado descendente';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID ascendente';
$lang->block->orderByList->task['id_desc']       = 'ID descendente';
$lang->block->orderByList->task['pri_asc']       = 'Prioridad (de baja a alta)';
$lang->block->orderByList->task['pri_desc']      = 'Prioridad (de alta a baja)';
$lang->block->orderByList->task['estimate_asc']  = 'Estimaciones de tareas ascendente';
$lang->block->orderByList->task['estimate_desc'] = 'Estimaciones de tareas descendente';
$lang->block->orderByList->task['status_asc']    = 'Estado ascendente';
$lang->block->orderByList->task['status_desc']   = 'Estado descendente';
$lang->block->orderByList->task['deadline_asc']  = 'Fecha límite ascendente';
$lang->block->orderByList->task['deadline_desc'] = 'Fecha límite descendente';

$lang->block->orderByList->bug = array();
$lang->block->orderByList->bug['id_asc']        = 'ID ascendente';
$lang->block->orderByList->bug['id_desc']       = 'ID descendente';
$lang->block->orderByList->bug['pri_asc']       = 'Prioridad (de baja a alta)';
$lang->block->orderByList->bug['pri_desc']      = 'Prioridad (de alta a baja)';
$lang->block->orderByList->bug['severity_asc']  = 'Severidad ascendente';
$lang->block->orderByList->bug['severity_desc'] = 'Severidad descendente';

$lang->block->orderByList->case = array();
$lang->block->orderByList->case['id_asc']   = 'ID ascendente';
$lang->block->orderByList->case['id_desc']  = 'ID descendente';
$lang->block->orderByList->case['pri_asc']  = 'Prioridad (de baja a alta)';
$lang->block->orderByList->case['pri_desc'] = 'Prioridad (de alta a baja)';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']      = 'ID ascendente';
$lang->block->orderByList->story['id_desc']     = 'ID descendente';
$lang->block->orderByList->story['pri_asc']     = 'Prioridad (de baja a alta)';
$lang->block->orderByList->story['pri_desc']    = 'Prioridad (de alta a baja)';
$lang->block->orderByList->story['status_asc']  = 'Estado ascendente';
$lang->block->orderByList->story['status_desc'] = 'Estado descendente';
$lang->block->orderByList->story['stage_asc']   = 'Fase ascendente';
$lang->block->orderByList->story['stage_desc']  = 'Fase descendente';

$lang->block->todoCount     = 'Pendientes';
$lang->block->taskCount     = 'Tareas';
$lang->block->bugCount      = 'Bugs';
$lang->block->riskCount     = 'Riesgos';
$lang->block->issueCount    = 'Incidencias';
$lang->block->storyCount    = $lang->SRCommon . 'count';
$lang->block->reviewCount   = 'Revisiones';
$lang->block->meetingCount  = 'Reuniones';
$lang->block->feedbackCount = 'Retroalimentaciones';
$lang->block->ticketCount   = 'Tickets';

$lang->block->typeList = new stdclass();
$lang->block->typeList->task['assignedTo'] = 'Asignado a mí';
$lang->block->typeList->task['openedBy']   = 'Creado por mí';
$lang->block->typeList->task['finishedBy'] = 'Completado por mí';
$lang->block->typeList->task['closedBy']   = 'Cerrado por mí';
$lang->block->typeList->task['canceledBy'] = 'Cancelado por mí';

$lang->block->typeList->bug['assignedTo'] = 'Asignado a mí';
$lang->block->typeList->bug['openedBy']   = 'Creado por mí';
$lang->block->typeList->bug['resolvedBy'] = 'Resueltos por mí';
$lang->block->typeList->bug['closedBy']   = 'Cerrado por mí';

$lang->block->typeList->case['assigntome'] = 'Asignado a mí';
$lang->block->typeList->case['openedbyme'] = 'Creado por mí';

$lang->block->typeList->story['assignedTo'] = 'Asignado a mí';
$lang->block->typeList->story['reviewBy']   = 'Mi revisión pendiente';
$lang->block->typeList->story['openedBy']   = 'Creado por mí';
$lang->block->typeList->story['reviewedBy'] = 'Revisados por mí';
$lang->block->typeList->story['closedBy']   = 'Cerrado por mí' ;

$lang->block->typeList->product['noclosed'] = 'Abierto';
$lang->block->typeList->product['closed']   = 'Cerrado';
$lang->block->typeList->product['all']      = 'Todos';
$lang->block->typeList->product['involved'] = 'Mi participación';

$lang->block->typeList->project['undone']   = 'Sin completar';
$lang->block->typeList->project['doing']    = 'En curso';
$lang->block->typeList->project['all']      = 'Todos';
$lang->block->typeList->project['involved'] = 'Mi participación';

$lang->block->typeList->projectAll['all']       = 'Todos';
$lang->block->typeList->projectAll['undone']    = 'Sin completar';
$lang->block->typeList->projectAll['wait']      = 'En espera';
$lang->block->typeList->projectAll['doing']     = 'En curso';
$lang->block->typeList->projectAll['suspended'] = 'En espera';
$lang->block->typeList->projectAll['closed']    = 'Cerrado';

$lang->block->typeList->execution['undone']   = 'Sin completar';
$lang->block->typeList->execution['doing']    = 'En curso';
$lang->block->typeList->execution['all']      = 'Todos';
$lang->block->typeList->execution['involved'] = 'Mi participación';

$lang->block->typeList->scrum['undone']   = 'Sin completar';
$lang->block->typeList->scrum['doing']    = 'En curso';
$lang->block->typeList->scrum['all']      = 'Todos';
$lang->block->typeList->scrum['involved'] = 'Mi participación';

$lang->block->typeList->testtask['wait']    = 'En espera';
$lang->block->typeList->testtask['doing']   = 'En curso';
$lang->block->typeList->testtask['blocked'] = 'Bloqueado';
$lang->block->typeList->testtask['done']    = 'Completado';
$lang->block->typeList->testtask['all']     = 'Todos';

$lang->block->typeList->risk['all']      = 'Todos';
$lang->block->typeList->risk['active']   = 'Abierto';
$lang->block->typeList->risk['assignTo'] = 'Asignado a mí';
$lang->block->typeList->risk['assignBy'] = 'Asignado por mí';
$lang->block->typeList->risk['closed']   = 'Cerrado';
$lang->block->typeList->risk['hangup']   = 'En espera';
$lang->block->typeList->risk['canceled'] = 'Cancelado';

$lang->block->typeList->issue['all']      = 'Todos';
$lang->block->typeList->issue['open']     = 'Público';
$lang->block->typeList->issue['assignto'] = 'Asignado a mí';
$lang->block->typeList->issue['assignby'] = 'Asignado por mí';
$lang->block->typeList->issue['closed']   = 'Cerrado';
$lang->block->typeList->issue['resolved'] = 'Resuelto';
$lang->block->typeList->issue['canceled'] = 'Cancelado';

$lang->block->welcomeList['06:00'] = 'Buenos días, %s';
$lang->block->welcomeList['11:30'] = 'Buenas tardes, %s';
$lang->block->welcomeList['13:30'] = 'Buenas tardes, %s';
$lang->block->welcomeList['19:00'] = 'Buenas noches, %s';

$lang->block->gridOptions[8] = 'Izquierda';
$lang->block->gridOptions[4] = 'Derecha';

$lang->block->widthOptions['1'] = 'Bloque corto';
$lang->block->widthOptions['2'] = 'Bloque largo';
$lang->block->widthOptions['3'] = 'Bloque máximo';

$lang->block->flowchart            = array();
$lang->block->flowchart['admin']   = array('Administradores', 'Administrar departamentos', 'Agregar usuario', 'Administrar permisos');
if($config->systemMode == 'ALM') $lang->block->flowchart['program'] = array('Responsable del programa', 'Crear programa', "Vincular {$lang->productCommon}", "Crear {$lang->projectCommon}", "Presupuesto y planificación", 'Agregar interesado');
$lang->block->flowchart['product'] = array($lang->productCommon . ' Gerente', 'Crear ' . $lang->productCommon, 'Administrar módulos', 'Administrar planes', 'Administrar historias', 'Crear lanzamiento');
$lang->block->flowchart['project'] = array('Gerente del proyecto', "Crear {$lang->projectCommon} y " . $lang->execution->common, 'Administrar equipo', 'Vincular historias', 'Descomponer tareas', 'Seguir el progreso');
$lang->block->flowchart['dev']     = array('Desarrolladores', 'Reclamar tareas y Bugs', 'Solución de diseño', 'Hacer commit de código', 'Actualizar estado', 'Completar tareas y Bugs');
$lang->block->flowchart['tester']  = array('Equipo de pruebas', 'Escribir casos', 'Ejecutar casos', 'Reportar bugs', 'Verificar Bugs', 'Cerrar Bugs');

$lang->block->zentaoapp = new stdclass();
$lang->block->zentaoapp->common               = 'App de ZenTao';
$lang->block->zentaoapp->thisYearInvestment   = 'Inversión de este año';
$lang->block->zentaoapp->sinceTotalInvestment = 'Inversión total';
$lang->block->zentaoapp->myStory              = 'Mis historias';
$lang->block->zentaoapp->allStorySum          = 'Total de historias';
$lang->block->zentaoapp->storyCompleteRate    = 'Tasa de finalización de historias';
$lang->block->zentaoapp->latestExecution      = 'Ejecuciones recientes';
$lang->block->zentaoapp->involvedExecution    = 'Mis ejecuciones';
$lang->block->zentaoapp->mangedProduct        = "{$lang->productCommon} gestionado";
$lang->block->zentaoapp->involvedProject      = "{$lang->projectCommon} en los que participo";
$lang->block->zentaoapp->customIndexCard      = 'Personalizar panel';
$lang->block->zentaoapp->createStory          = 'Crear historia';
$lang->block->zentaoapp->createEffort         = 'Registrar esfuerzo';
$lang->block->zentaoapp->createDoc            = 'Crear documento';
$lang->block->zentaoapp->createTodo           = 'Crear pendiente';
$lang->block->zentaoapp->workbench            = 'Espacio de trabajo';
$lang->block->zentaoapp->notSupportKanban     = 'El modo Kanban de I+D no es compatible con dispositivos móviles.';
$lang->block->zentaoapp->notSupportVersion    = 'Esta versión de ZenTao no es compatible actualmente con la terminal móvil';
$lang->block->zentaoapp->incompatibleVersion  = 'Su versión de ZenTao está desactualizada. Actualice a la última versión e inténtelo de nuevo.';
$lang->block->zentaoapp->canNotGetVersion     = 'No se pudo recuperar la versión de ZenTao. Verifique que la URL sea correcta.';
$lang->block->zentaoapp->desc                 = "La aplicación móvil de ZenTao le ofrece un entorno de trabajo móvil para gestionar sus pendientes personales y seguir el avance de {$lang->projectCommon} en cualquier momento, mejorando la flexibilidad y la agilidad de la gestión de {$lang->projectCommon}.";
$lang->block->zentaoapp->downloadTip          = 'Escanee el código QR para descargar';

$lang->block->zentaoclient = new stdClass();
$lang->block->zentaoclient->common = 'Cliente de ZenTao';
$lang->block->zentaoclient->desc   = 'Use ZenTao Desktop para acceder directamente sin cambiar de navegador. También incluye Chat, Notificaciones, Bots y miniprogramas integrados, lo que hace más eficiente la colaboración del equipo.';

$lang->block->zentaoclient->edition = new stdclass();
$lang->block->zentaoclient->edition->win64   = 'Windows';
$lang->block->zentaoclient->edition->linux64 = 'Linux';
$lang->block->zentaoclient->edition->mac64   = 'Mac OS';

$lang->block->guideTabs['flowchart']      = 'Flujo esencial';
if($config->systemMode != 'PLM') $lang->block->guideTabs['systemMode']     = 'Modos de operación';
$lang->block->guideTabs['visionSwitch']   = 'Cambiar interfaz';
$lang->block->guideTabs['themeSwitch']    = 'Cambiar tema ';
$lang->block->guideTabs['preference']     = 'Personalización';
$lang->block->guideTabs['downloadClient'] = 'Descargar aplicación de escritorio';
$lang->block->guideTabs['downloadMobile'] = 'Descargar app móvil';

$lang->block->themes['default']    = 'Predeterminado';
$lang->block->themes['blue']       = 'Azul cielo';
$lang->block->themes['green']      = 'Verde';
$lang->block->themes['red']        = 'Rojo';
$lang->block->themes['purple']     = 'Morado';
$lang->block->themes['blackberry'] = 'Blackberry';

$lang->block->visionTitle            = 'AXIS FLOW ofrece dos interfaces:';
$lang->block->visions['rnd']         = new stdclass();
$lang->block->visions['rnd']->key    = 'rnd';
$lang->block->visions['rnd']->title  = 'Interfaz de I+D';
$lang->block->visions['rnd']->text   = "Una solución integral de gestión de proyectos para todo el ciclo de vida.";
$lang->block->visions['lite']        = new stdclass();
$lang->block->visions['lite']->key   = 'lite';
$lang->block->visions['lite']->title = 'Interfaz de gestión de operaciones';
$lang->block->visions['lite']->text  = "Una experiencia visual e intuitiva pensada para equipos que no son de I+D.";

$lang->block->customModes['light'] = 'Modo de gestión ligera';
$lang->block->customModes['ALM']   = 'Modo ALM';

$lang->block->honorary = array();
$lang->block->honorary['bug']    = 'Rey de los Bugs';
$lang->block->honorary['task']   = 'Rey de las tareas';
$lang->block->honorary['review'] = 'Revisor principal';

$lang->block->welcome = new stdclass();
$lang->block->welcome->common     = 'Resumen de bienvenida';
$lang->block->welcome->reviewByMe = 'Mis revisiones pendientes';
$lang->block->welcome->assignToMe = 'Asignado a mí';

$lang->block->welcome->reviewList = array();
$lang->block->welcome->reviewList['story']      = 'Historias';
$lang->block->welcome->reviewList['reviewByMe'] = 'Mis revisiones pendientes';

$lang->block->welcome->assignList = array();
$lang->block->welcome->assignList['task'] = 'Tareas';
if($config->vision != 'or') $lang->block->welcome->assignList['bug']   = 'Bugs';
if($config->vision != 'or') $lang->block->welcome->assignList['story'] = 'SRStroy';
$lang->block->welcome->assignList['testcase'] = 'Casos';
if($config->URAndSR && $config->vision != 'or')  $lang->block->welcome->assignList['requirement'] = "Funcionalidades";
if($config->enableER && $config->vision != 'or') $lang->block->welcome->assignList['epic']        = "{$lang->ERCommon}";

$lang->block->customModeTip = new stdClass();
$lang->block->customModeTip->common = 'AXIS FLOW ofrece dos modos de operación:';
$lang->block->customModeTip->ALM    = '';
$lang->block->customModeTip->light  = "";

$lang->block->productstatistic = new stdclass();
$lang->block->productstatistic->effectiveStory  = 'Historias efectivas';
$lang->block->productstatistic->delivered       = 'Entregado';
$lang->block->productstatistic->unclosed        = 'Abierto';
$lang->block->productstatistic->storyStatistics = 'Estadísticas de historias';
$lang->block->productstatistic->monthDone       = 'Completado este mes <span class="text-success font-bold">%s</span>';
$lang->block->productstatistic->monthOpened     = 'Agregados este mes <span class="text-primary font-bold">%s</span>';
$lang->block->productstatistic->opened          = 'Agregado';
$lang->block->productstatistic->done            = 'Completado';
$lang->block->productstatistic->news            = 'Último avance del producto';
$lang->block->productstatistic->newPlan         = 'Último plan';
$lang->block->productstatistic->newExecution    = 'Última ejecución';
$lang->block->productstatistic->newRelease      = 'Último lanzamiento';
$lang->block->productstatistic->deliveryRate    = 'Tasa de entrega de historias';

$lang->block->projectoverview = new stdclass();
$lang->block->projectoverview->totalProject  = 'Total de proyectos';
$lang->block->projectoverview->thisYear      = 'Completado este año';
$lang->block->projectoverview->lastThreeYear = 'Tendencia de finalización de proyectos (últimos 3 años)';

$lang->block->projectstatistic = new stdclass();
$lang->block->projectstatistic->story            = 'Historia';
$lang->block->projectstatistic->cost             = 'Costo';
$lang->block->projectstatistic->task             = 'Tarea';
$lang->block->projectstatistic->bug              = 'Bug';
$lang->block->projectstatistic->storyPoints      = 'Total';
$lang->block->projectstatistic->done             = 'Completado';
$lang->block->projectstatistic->undone           = 'Abierto';
$lang->block->projectstatistic->costs            = 'Invertido';
$lang->block->projectstatistic->consumed         = 'Costo';
$lang->block->projectstatistic->remainder        = 'Izquierda';
$lang->block->projectstatistic->tasks            = 'tasks';
$lang->block->projectstatistic->wait             = 'En espera';
$lang->block->projectstatistic->doing            = 'En curso';
$lang->block->projectstatistic->bugs             = 'bugs';
$lang->block->projectstatistic->stories          = 'stories';
$lang->block->projectstatistic->closed           = 'Cerrado';
$lang->block->projectstatistic->activated        = 'Activado';
$lang->block->projectstatistic->unit             = 'unit';
$lang->block->projectstatistic->total            = 'Total';
$lang->block->projectstatistic->SP               = $config->hourUnit;
$lang->block->projectstatistic->personDay        = 'PD';
$lang->block->projectstatistic->day              = 'día(s)';
$lang->block->projectstatistic->hour             = 'Horas';
$lang->block->projectstatistic->leftDaysPre      = 'Tiempo restante';
$lang->block->projectstatistic->delayDaysPre     = 'Vencido por';
$lang->block->projectstatistic->existRisks       = 'Riesgos';
$lang->block->projectstatistic->existIssues      = 'Incidencias';
$lang->block->projectstatistic->lastestExecution = 'Última ejecución';
$lang->block->projectstatistic->projectClosed    = "{$lang->projectCommon} se ha cerrado.";
$lang->block->projectstatistic->longTimeProject  = "{$lang->projectCommon} de largo plazo";
$lang->block->projectstatistic->totalProgress    = 'Progreso total';
$lang->block->projectstatistic->totalProgressTip = "<strong>Avance total del proyecto</strong> = Total de horas consumidas en tareas / (Total de horas consumidas en tareas + Total de horas restantes de tareas)<br/>
<strong>Total de horas consumidas en tareas </strong>: suma de las horas consumidas de todas las tareas del proyecto, excluyendo las tareas eliminadas, las tareas padre y las tareas de ejecuciones eliminadas.<br/>
<strong>Total de horas restantes de tareas </strong>: suma de las horas restantes de todas las tareas del proyecto, excluyendo las tareas eliminadas, las tareas padre y las tareas de ejecuciones eliminadas.";
$lang->block->projectstatistic->currentCost      = 'Costos actuales';
$lang->block->projectstatistic->sv               = 'Variación del cronograma (SV)';
$lang->block->projectstatistic->pv               = 'Valor planificado (PV)';
$lang->block->projectstatistic->ev               = 'Valor ganado (EV)';
$lang->block->projectstatistic->cv               = 'Variación de costos (CV)';
$lang->block->projectstatistic->ac               = 'Costo real (AC)';

$lang->block->qastatistic = new stdclass();
$lang->block->qastatistic->fixBugRate        = 'Tasa de corrección de Bugs';
$lang->block->qastatistic->closedBugRate     = 'Tasa de Bugs cerrados';
$lang->block->qastatistic->totalBug          = 'Total de Bugs';
$lang->block->qastatistic->bugStatistics     = 'Estadísticas de Bugs';
$lang->block->qastatistic->addYesterday      = 'Agregado ayer';
$lang->block->qastatistic->addToday          = 'Agregado hoy';
$lang->block->qastatistic->resolvedYesterday = 'Resueltos ayer';
$lang->block->qastatistic->resolvedToday     = 'Resueltos hoy';
$lang->block->qastatistic->closedYesterday   = 'Cerrado ayer';
$lang->block->qastatistic->closedToday       = 'Cerrado hoy';
$lang->block->qastatistic->unclosedTesttasks = 'Tareas de prueba sin cerrar';
$lang->block->qastatistic->bugStatusStat     = 'Tendencia mensual de Bugs';

$lang->block->bugstatistic = new stdclass();
$lang->block->bugstatistic->effective = 'Bugs válidos';
$lang->block->bugstatistic->fixed     = 'Corregido';
$lang->block->bugstatistic->activated = 'Activado';

$lang->block->executionstatistic = new stdclass();
$lang->block->executionstatistic->allProject        = 'Todos los proyectos';
$lang->block->executionstatistic->progress          = 'Progreso';
$lang->block->executionstatistic->totalEstimate     = 'Estimación';
$lang->block->executionstatistic->totalConsumed     = 'Costo';
$lang->block->executionstatistic->totalLeft         = 'Izquierda';
$lang->block->executionstatistic->burn              = $lang->execution->common . ' Gráfico de burndown';
$lang->block->executionstatistic->cfd               = $lang->execution->common . ' Diagrama de flujo acumulado';
$lang->block->executionstatistic->story             = 'Historia';
$lang->block->executionstatistic->doneStory         = 'Completado';
$lang->block->executionstatistic->totalStory        = 'Total';
$lang->block->executionstatistic->task              = 'Tarea';
$lang->block->executionstatistic->totalTask         = 'Total';
$lang->block->executionstatistic->undoneTask        = 'Sin completar';
$lang->block->executionstatistic->yesterdayDoneTask = 'Completado ayer';

$lang->block->executionoverview = new stdclass();
$lang->block->executionoverview->totalExecution = "Total: {$lang->execution->common}";
$lang->block->executionoverview->thisYear       = 'Completado este año';
$lang->block->executionoverview->statusCount    = "Distribución por estado de {$lang->execution->common} abiertas";

$lang->block->productoverview = new stdclass();
$lang->block->productoverview->overview                = 'Datos del resumen';
$lang->block->productoverview->yearFinished            = 'Estadísticas anuales de progreso de productos';
$lang->block->productoverview->productLineCount        = 'Total de líneas de producto';
$lang->block->productoverview->productCount            = 'Total de productos';
$lang->block->productoverview->releaseCount            = 'Lanzado este año';
$lang->block->productoverview->milestoneCount          = 'Hitos lanzados';
$lang->block->productoverview->unfinishedPlanCount     = 'Planes sin completar';
$lang->block->productoverview->unclosedStoryCount      = 'Historias sin completar';
$lang->block->productoverview->activeBugCount          = 'Bugs activos';
$lang->block->productoverview->finishedReleaseCount    = 'Lanzamientos completados';
$lang->block->productoverview->finishedStoryCount      = 'Historias completadas';
$lang->block->productoverview->finishedStoryPoint      = 'Puntos de historia completados';
$lang->block->productoverview->thisWeek                = 'Esta semana';

$lang->block->productlist = new stdclass();
$lang->block->productlist->unclosedFeedback  = 'Retroalimentación sin cerrar';
$lang->block->productlist->activatedStory    = 'Historias activas';
$lang->block->productlist->storyCompleteRate = 'Tasa de finalización de historias';
$lang->block->productlist->activatedBug      = 'Bugs activos';

$lang->block->sprint = new stdclass();
$lang->block->sprint->totalExecution = "Total de {$lang->executionCommon}";
$lang->block->sprint->thisYear       = 'Completado este año';
$lang->block->sprint->statusCount    = "Distribución por estado de {$lang->executionCommon}";

$lang->block->zentaodynamic = new stdclass();
$lang->block->zentaodynamic->zentaosalon  = 'ZenTao · China Travel';
$lang->block->zentaodynamic->publicclass  = 'Seminario web de ZenTao';
$lang->block->zentaodynamic->release      = 'Último lanzamiento';
$lang->block->zentaodynamic->registration = 'Regístrate ahora';
$lang->block->zentaodynamic->reservation  = 'Reservar ahora';

$lang->block->monthlyprogress = new stdclass();
$lang->block->monthlyprogress->doneStoryEstimateTrendChart = "Gráfico de tendencia del alcance de historias completadas";
$lang->block->monthlyprogress->storyTrendChart             = "Gráfico de tendencia de historias creadas y completadas";
$lang->block->monthlyprogress->bugTrendChart               = 'Gráfico de tendencia de bugs nuevos y resueltos';

$lang->block->annualworkload = new stdclass();
$lang->block->annualworkload->doneStoryEstimate = "Alcance de historias completadas";
$lang->block->annualworkload->doneStoryCount    = "Historias completadas";
$lang->block->annualworkload->resolvedBugCount  = 'Bugs resueltos';

$lang->block->releasestatistic = new stdclass();
$lang->block->releasestatistic->monthly = 'Gráfico de tendencia mensual de lanzamientos';
$lang->block->releasestatistic->annual  = "Tabla de posiciones anual de lanzamientos (%s)";

$lang->block->teamachievement = new stdclass();
$lang->block->teamachievement->finishedTasks  = 'Tareas completadas';
$lang->block->teamachievement->createdStories = 'Historias creadas';
$lang->block->teamachievement->closedBugs     = 'Bugs cerrados';
$lang->block->teamachievement->runCases       = 'Casos ejecutados';
$lang->block->teamachievement->consumedHours  = 'Costo';
$lang->block->teamachievement->totalWorkload  = 'Carga de trabajo total';
$lang->block->teamachievement->vs             = 'VS ayer';
$lang->block->teamachievement->accrued        = 'Total';

$lang->block->estimate = new stdclass();
$lang->block->estimate->costs    = 'Mano de obra';
$lang->block->estimate->workhour = 'Horas de trabajo';
$lang->block->estimate->people   = 'Personas';
$lang->block->estimate->expect   = 'Estimación';
$lang->block->estimate->consumed = 'Costo';
$lang->block->estimate->surplus  = 'Izquierda';
$lang->block->estimate->hour     = 'H';

$lang->block->moduleList['product']         = $lang->productCommon;
$lang->block->moduleList['project']         = $lang->projectCommon;
$lang->block->moduleList['execution']       = $lang->execution->common;
$lang->block->moduleList['qa']              = $lang->qa->common;
$lang->block->moduleList['welcome']         = $lang->block->welcome->common;
$lang->block->moduleList['guide']           = $lang->block->guide;
$lang->block->moduleList['zentaodynamic']   = $lang->block->zentaoDynamic;
$lang->block->moduleList['teamachievement'] = $lang->block->teamAchievement;
$lang->block->moduleList['assigntome']      = $lang->block->assignToMe;
$lang->block->moduleList['dynamic']         = $lang->block->dynamic;
$lang->block->moduleList['html']            = $lang->block->html;

$lang->block->tooltips = array();
$lang->block->tooltips['deliveryRate']      = "Tasa de avance de {$lang->SRCommon} por {$lang->productCommon} = Cantidad de {$lang->SRCommon} entregado por {$lang->productCommon} / Cantidad de {$lang->SRCommon} efectivo por {$lang->productCommon} * 100%";
$lang->block->tooltips['resolvedRate']      = "Tasa de corrección de Bugs por {$lang->productCommon} = Bugs corregidos por {$lang->productCommon} / Bugs válidos por {$lang->productCommon}";
$lang->block->tooltips['effectiveStory']    = "Total de {$lang->SRCommon} por {$lang->productCommon}: suma de {$lang->SRCommon} dentro de {$lang->productCommon}. (Excluye {$lang->SRCommon} y {$lang->productCommon} eliminados)";
$lang->block->tooltips['deliveredStory']    = "{$lang->SRCommon} entregado por {$lang->productCommon}: suma de {$lang->SRCommon} de {$lang->productCommon} cuya etapa es \"Lanzado\" o cuyo motivo de cierre es \"Completado\". (Excluye {$lang->SRCommon} y {$lang->productCommon} eliminados)";
$lang->block->tooltips['costs']             = "Esfuerzo total (FTE) = Horas consumidas / Capacidad diaria configurada en Administración";
$lang->block->tooltips['sv']                = "Variación del cronograma = (EV - PV) / PV * 100% ";
$lang->block->tooltips['ev']                = 'Si el estado de la tarea es "Completada", sume el esfuerzo estimado. <br/>Si el estado de la tarea es "Cerrada" y el motivo de cierre es "Completada", sume el esfuerzo estimado. <br/>Si el estado de la tarea es "En curso" o "Pausada", sume (Esfuerzo estimado * Progreso de la tarea). <br/>';
$lang->block->tooltips['pv']                = "Si la fecha límite de la tarea ≤ la fecha de fin de esta semana, sume el esfuerzo estimado. <br/>Si la fecha de inicio estimada de la tarea ≤ la fecha de fin de esta semana Y la fecha límite estimada > la fecha de fin de esta semana, sume el esfuerzo estimado = (Esfuerzo estimado / Duración de la tarea en días) x Días desde el inicio estimado hasta la fecha de fin de esta semana. <br/>";
$lang->block->tooltips['cv']                = 'Variación de costos = (EV - AC) / AC * 100%';
$lang->block->tooltips['ac']                = "Suma de todas las horas registradas antes del fin de esta semana en {$lang->projectCommon} Cascada, excluyendo {$lang->projectCommon} eliminados.";
$lang->block->tooltips['executionProgress'] = "<strong>Progreso de {$lang->execution->common}</strong> = Suma de horas consumidas de tareas por {$lang->execution->common} / (Suma de horas consumidas de tareas por {$lang->execution->common} + Suma de horas restantes de tareas por {$lang->execution->common}) <br/>
<strong>Suma de horas consumidas de tareas por {$lang->execution->common}</strong>: suma de las horas consumidas en las tareas de {$lang->execution->common}, excluyendo tareas eliminadas, tareas padre, {$lang->execution->common} eliminadas y {$lang->projectCommon} eliminados. <br/>
<strong>Suma de horas restantes de tareas por {$lang->execution->common}</strong>: suma de las horas restantes de las tareas de {$lang->execution->common}, excluyendo tareas eliminadas, tareas padre, {$lang->execution->common} eliminadas y {$lang->projectCommon} eliminados.";
$lang->block->tooltips['metricTime']        = 'Las estadísticas se actualizarán cada hora. La última hora de actualización es %s.';
