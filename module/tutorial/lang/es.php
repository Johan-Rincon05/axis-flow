<?php
/**
 * The tutorial lang file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Hao Sun <sunhao@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: zh-cn.php 5116 2013-07-12 06:37:48Z sunhao@cnezsoft.com $
 * @link        https://www.zentao.net
 */
$lang->tutorial = new stdclass();
$lang->tutorial->common           = 'Tutoriales';
$lang->tutorial->desc             = 'Aprenda los conceptos básicos de AXIS FLOW completando una serie de tareas. Puede salir en cualquier momento.';
$lang->tutorial->start            = "Comenzar";
$lang->tutorial->continue         = 'Continuar';
$lang->tutorial->exit             = 'Salir del tutorial';
$lang->tutorial->exitStep         = 'Salir';
$lang->tutorial->finish           = 'Hecho';
$lang->tutorial->congratulation   = '¡Felicitaciones! Completó todas las tareas.';
$lang->tutorial->restart          = 'Reiniciar';
$lang->tutorial->currentTask      = 'Tarea actual';
$lang->tutorial->allTasks         = 'Todas las tareas';
$lang->tutorial->previous         = 'Anterior';
$lang->tutorial->nextTask         = 'Siguiente';
$lang->tutorial->nextGuide        = 'Siguiente tutorial';
$lang->tutorial->nextStep         = 'Siguiente';
$lang->tutorial->openTargetPage   = 'Ir a la página <strong class="task-page-name">Objetivo</strong>';
$lang->tutorial->atTargetPage     = 'Actualmente en la página <strong class="task-page-name">Destino</strong>';
$lang->tutorial->reloadTargetPage = 'Recargar';
$lang->tutorial->target           = 'Objetivo';
$lang->tutorial->targetPageTip    = 'Abra la página【%s】siguiendo esta instrucción.';
$lang->tutorial->targetAppTip     = 'abra la aplicación【%s】siguiendo esta instrucción.';
$lang->tutorial->requiredTip      = '【%s】es obligatorio';
$lang->tutorial->congratulateTask = '¡Felicitaciones! ¡Completó 【<span class="task-name-current"></span>】!';
$lang->tutorial->serverErrorTip   = '¡Error!';
$lang->tutorial->ajaxSetError     = 'Debe especificarse una tarea completada. Para restablecer la tarea, borre el valor.';
$lang->tutorial->novice           = "Para comenzar rápidamente, recorramos un tutorial de dos minutos.";
$lang->tutorial->dataNotSave      = "Los datos no se guardarán en modo tutorial.";
$lang->tutorial->clickTipFormat   = "Clic en %s";
$lang->tutorial->clickAndOpenIt   = "Haga clic en %s para abrir %s.";

$lang->tutorial->guideTypes        = array();
$lang->tutorial->guideTypes['starter'] = 'Comenzar';
$lang->tutorial->guideTypes['basic']   = 'Tutorial básico';
$lang->tutorial->guideTypes['advance'] = 'Tutorial avanzado';

$lang->tutorial->tasks = new stdClass();
$lang->tutorial->tasks->createAccount = new stdClass();

$lang->tutorial->tasks->createAccount->title          = 'Crear cuenta';
$lang->tutorial->tasks->createAccount->targetPageName = 'Agregar usuario';
$lang->tutorial->tasks->createAccount->desc           = "<p>Crear un usuario: </p><ul><li data-target='nav'>Abra <span class='task-nav'>Administración <i class='icon icon-angle-right'></i> Empresa <i class='icon icon-angle-right'></i> Usuarios <i class='icon icon-angle-right'></i> Nuevo;</span></li><li data-target='form'>Complete el formulario con la información del usuario;</li><li data-target='submit'>Guardar</li></ul>";

$lang->tutorial->tasks->createProgram = new stdClass();
$lang->tutorial->tasks->createProgram->title          = 'Crear programa';
$lang->tutorial->tasks->createProgram->targetPageName = 'Agregar programa';
$lang->tutorial->tasks->createProgram->desc           = "<p>Crear un nuevo programa：</p><ul><li data-target='nav'>Abra <span class='task-nav'>Programa <i class='icon icon-angle-right'></i> Lista de programas <i class='icon icon-angle-right'></i> Crear programa</span>;</li><li data-target='form'>Complete el formulario con la información del programa;</li><li data-target='submit'>Guardar</li></ul>";

$lang->tutorial->tasks->createProduct = new stdClass();
$lang->tutorial->tasks->createProduct->title          = 'Crear producto';
$lang->tutorial->tasks->createProduct->targetPageName = 'Agregar producto';
$lang->tutorial->tasks->createProduct->desc           = "<p>Crear nuevo: {$lang->productCommon}</p><ul><li data-target='nav'>Abrir <span class='task-nav'>{$lang->productCommon} <i class='icon icon-angle-right'></i> Lista de {$lang->productCommon} <i class='icon icon-angle-right'></i> Crear {$lang->productCommon}</span>;</li><li data-target='form'>Complete el formulario de {$lang->productCommon} con la información de {$lang->productCommon};</li><li data-target='submit'>Guardar</li></ul>";

$lang->tutorial->tasks->createStory = new stdClass();
$lang->tutorial->tasks->createStory->title          = "Crear {$lang->SRCommon}";
$lang->tutorial->tasks->createStory->targetPageName = "Crear {$lang->SRCommon}";
$lang->tutorial->tasks->createStory->desc           = "<p>Crear nuevo: {$lang->SRCommon}</p><ul><li data-target='nav'>Ir a <span class='task-nav'>{$lang->productCommon} <i class='icon icon-angle-right'></i> {$lang->SRCommon} <i class='icon icon-angle-right'></i> Crear {$lang->SRCommon}</span>;</li><li data-target='form'>Complete la información de {$lang->SRCommon} en el formulario de {$lang->productCommon};</li><li data-target='submit'>Guarde la información de {$lang->SRCommon}.</li></ul>";

$lang->tutorial->tasks->createProject = new stdClass();
$lang->tutorial->tasks->createProject->title          = 'Crear proyecto';
$lang->tutorial->tasks->createProject->targetPageName = 'Agregar proyecto';
$lang->tutorial->tasks->createProject->desc           = "<p>Crear nuevo: {$lang->projectCommon}</p><ul><li data-target='nav'>Abrir <span class='task-nav'> {$lang->projectCommon} <i class='icon icon-angle-right'></i> Lista de {$lang->projectCommon} <i class='icon icon-angle-right'></i> Crear {$lang->projectCommon}</span>;</li><li data-target='form'>Complete la información requerida de {$lang->projectCommon} en el formulario de {$lang->projectCommon};</li><li data-target='submit'>Guarde la información de {$lang->projectCommon}.</li></ul>";

$lang->tutorial->tasks->manageTeam = new stdClass();
$lang->tutorial->tasks->manageTeam->title          = "Gestionar equipo de {$lang->projectCommon}";
$lang->tutorial->tasks->manageTeam->targetPageName = "Gestión del equipo";
$lang->tutorial->tasks->manageTeam->desc           = "<p>Para gestionar los miembros del equipo de {$lang->projectCommon}:</p><ul><li data-target='nav'>Ir a la página <span class='task-nav'>{$lang->projectCommon} <i class='icon icon-angle-right'></i> Configuración <i class='icon icon-angle-right'></i> Equipo <i class='icon icon-angle-right'></i> Gestión del equipo</span>;</li><li data-target='form'>Seleccione los miembros que desea agregar al equipo de {$lang->projectCommon};</li><li data-target='submit'>Guarde la información de los miembros del equipo.</li></ul>";

$lang->tutorial->tasks->createProjectExecution = new stdClass();
$lang->tutorial->tasks->createProjectExecution->title          = "Crear ejecución";
$lang->tutorial->tasks->createProjectExecution->targetPageName = "Agregar {$lang->executionCommon}";
$lang->tutorial->tasks->createProjectExecution->desc           = "<p>Para crear una nueva {$lang->executionCommon} en el sistema:</p><ul><li data-target='nav'>Ir a <span class='task-nav'>{$lang->projectCommon} <i class='icon icon-angle-right'></i> {$lang->executionCommon} <i class='icon icon-angle-right'></i> Crear {$lang->executionCommon}</span>;</li><li data-target='form'>Complete la información requerida en el formulario de {$lang->executionCommon};</li><li data-target='submit'>Guarde la información de {$lang->executionCommon}.</li></ul>";

$lang->tutorial->tasks->linkStory = new stdClass();
$lang->tutorial->tasks->linkStory->title          = "Vincular {$lang->SRCommon}";
$lang->tutorial->tasks->linkStory->targetPageName = "Vincular {$lang->SRCommon}";
$lang->tutorial->tasks->linkStory->desc           = "<p>Para vincular {$lang->SRCommon} a una ejecución:</p>
<ul><li data-target='nav'>Ir a la página <span class='task-nav'>Ejecución <i class='icon icon-angle-right'></i> {$lang->SRCommon} <i class='icon icon-angle-right'></i> Vincular {$lang->SRCommon}</span>;</li><li data-target='form'>Seleccione de la lista el elemento de {$lang->SRCommon} que desea vincular;</li><li data-target='submit'>Guarde la información vinculada de {$lang->SRCommon}.</li></ul>";

$lang->tutorial->tasks->createTask = new stdClass();
$lang->tutorial->tasks->createTask->title          = "Desglose de tareas";
$lang->tutorial->tasks->createTask->targetPageName = "Crear tarea";
$lang->tutorial->tasks->createTask->desc           = "<p>Para desglosar {$lang->SRCommon} de la ejecución en tareas:</p><ul><li data-target='nav'>Ir a la página <span class='task-nav'>Ejecución <i class='icon icon-angle-right'></i> {$lang->SRCommon} <i class='icon icon-angle-right'></i> EDT</span>;</li><li data-target='form'>Complete la información de la tarea en el formulario;</li><li data-target='submit'>Guarde la información de la tarea.</li></ul>";

$lang->tutorial->tasks->createBug = new stdClass();
$lang->tutorial->tasks->createBug->title          = "Reportar bug";
$lang->tutorial->tasks->createBug->targetPageName = "Reportar bug";
$lang->tutorial->tasks->createBug->desc           = "<p>Para reportar un bug en el sistema:</p><ul><li data-target='nav'>Vaya a <span class='task-nav'>Pruebas <i class='icon icon-angle-right'></i> Bug <i class='icon icon-angle-right'></i> Reportar bug</span>;</li><li data-target='form'>Complete la información del bug en el formulario;</li><li data-target='submit'>Guarde la información del bug.</li></ul>";

$lang->tutorial->starter = new stdClass();
$lang->tutorial->starter->title = 'Tutorial de inicio rápido';

$lang->tutorial->starter->createAccount = new stdClass();
$lang->tutorial->starter->createAccount->title = 'Crear cuenta';

$lang->tutorial->starter->createAccount->step1 = new stdClass();
$lang->tutorial->starter->createAccount->step1->name = 'Clic en Admin';
$lang->tutorial->starter->createAccount->step1->desc = 'Aquí puede gestionar cuentas y configurar todo a su gusto.';

$lang->tutorial->starter->createAccount->step2 = new stdClass();
$lang->tutorial->starter->createAccount->step2->name = 'Clic en Usuario';
$lang->tutorial->starter->createAccount->step2->desc = 'Aquí puede gestionar departamentos, agregar personal y configurar permisos de grupo.';

$lang->tutorial->starter->createAccount->step3 = new stdClass();
$lang->tutorial->starter->createAccount->step3->name = 'Clic en Usuario';
$lang->tutorial->starter->createAccount->step3->desc = 'Aquí puede gestionar su equipo y sus miembros.';

$lang->tutorial->starter->createAccount->step4 = new stdClass();
$lang->tutorial->starter->createAccount->step4->name = 'Clic en Agregar usuario';
$lang->tutorial->starter->createAccount->step4->desc = 'Haga clic para agregar un nuevo miembro del equipo.';

$lang->tutorial->starter->createAccount->step5 = new stdClass();
$lang->tutorial->starter->createAccount->step5->name = 'Completar el formulario';

$lang->tutorial->starter->createAccount->step6 = new stdClass();
$lang->tutorial->starter->createAccount->step6->name = 'Guardar el formulario';
$lang->tutorial->starter->createAccount->step6->desc = 'Después de guardar, podrá verlo en la lista de personal.';

$lang->tutorial->starter->createProgram = new stdClass();
$lang->tutorial->starter->createProgram->title = 'Crear programa';

$lang->tutorial->starter->createProgram->step1 = new stdClass();
$lang->tutorial->starter->createProgram->step1->name = 'Clic en Programa';
$lang->tutorial->starter->createProgram->step1->desc = 'Aquí puede gestionar sus programas.';

$lang->tutorial->starter->createProgram->step2 = new stdClass();
$lang->tutorial->starter->createProgram->step2->name = 'Clic en Crear programa';
$lang->tutorial->starter->createProgram->step2->desc = 'Clic para crear un programa';

$lang->tutorial->starter->createProgram->step3 = new stdClass();
$lang->tutorial->starter->createProgram->step3->name = 'Completar el formulario';

$lang->tutorial->starter->createProgram->step4 = new stdClass();
$lang->tutorial->starter->createProgram->step4->name = 'Guardar el formulario';
$lang->tutorial->starter->createProgram->step4->desc = 'Después de guardar, podrá verlo en las listas de proyectos y de productos.';

$lang->tutorial->starter->createProduct = new stdClass();
$lang->tutorial->starter->createProduct->title = 'Crear producto';

$lang->tutorial->starter->createProduct->step1 = new stdClass();
$lang->tutorial->starter->createProduct->step1->name = 'Ir al producto';
$lang->tutorial->starter->createProduct->step1->desc = 'Aquí puede gestionar sus productos.';

$lang->tutorial->starter->createProduct->step2 = new stdClass();
$lang->tutorial->starter->createProduct->step2->name = 'Clic en "Crear producto"';
$lang->tutorial->starter->createProduct->step2->desc = 'Aquí puede crear productos.';

$lang->tutorial->starter->createProduct->step3 = new stdClass();
$lang->tutorial->starter->createProduct->step3->name = 'Completar el formulario';

$lang->tutorial->starter->createProduct->step4 = new stdClass();
$lang->tutorial->starter->createProduct->step4->name = 'Guardar el formulario';
$lang->tutorial->starter->createProduct->step4->desc = 'Después de guardar, podrá verlo en la lista de productos.';

$lang->tutorial->starter->createStory = new stdClass();
$lang->tutorial->starter->createStory->title = 'Crear historia';

$lang->tutorial->starter->createStory->step1 = new stdClass();
$lang->tutorial->starter->createStory->step1->name = 'Clic en Producto';
$lang->tutorial->starter->createStory->step1->desc = 'Aquí puede gestionar sus productos.';

$lang->tutorial->starter->createStory->step2 = new stdClass();
$lang->tutorial->starter->createStory->step2->name = 'Clic en Nombre del producto';
$lang->tutorial->starter->createStory->step2->desc = 'Haga clic en el producto para ver sus detalles.';

$lang->tutorial->starter->createStory->step3 = new stdClass();
$lang->tutorial->starter->createStory->step3->name = 'Clic en Crear historia';
$lang->tutorial->starter->createStory->step3->desc = 'Aquí puede crear una historia.';

$lang->tutorial->starter->createStory->step4 = new stdClass();
$lang->tutorial->starter->createStory->step4->name = 'Completar el formulario';

$lang->tutorial->starter->createStory->step5 = new stdClass();
$lang->tutorial->starter->createStory->step5->name = 'Guardar el formulario';
$lang->tutorial->starter->createStory->step5->desc = 'Después de guardar, podrá verlo en la lista de historias del producto.';

$lang->tutorial->starter->createProject = new stdClass();
$lang->tutorial->starter->createProject->title = 'Crear proyecto';

$lang->tutorial->starter->createProject->step1 = new stdClass();
$lang->tutorial->starter->createProject->step1->name = 'Clic en Proyecto';
$lang->tutorial->starter->createProject->step1->desc = 'Aquí puede crear proyectos.';

$lang->tutorial->starter->createProject->step2 = new stdClass();
$lang->tutorial->starter->createProject->step2->name = 'Clic en Crear proyecto';
$lang->tutorial->starter->createProject->step2->desc = 'Aquí puede elegir distintos métodos de gestión de proyectos para crear diferentes tipos de proyectos.';

$lang->tutorial->starter->createProject->step3 = new stdClass();
$lang->tutorial->starter->createProject->step3->name = 'Clic en Scrum';
$lang->tutorial->starter->createProject->step3->desc = 'Haga clic en Scrum para crear un proyecto Scrum';

$lang->tutorial->starter->createProject->step4 = new stdClass();
$lang->tutorial->starter->createProject->step4->name = 'Completar el formulario';

$lang->tutorial->starter->createProject->step5 = new stdClass();
$lang->tutorial->starter->createProject->step5->name = 'Guardar el formulario';
$lang->tutorial->starter->createProject->step5->desc = 'Después de guardar, podrá verlo en la lista de proyectos.';

$lang->tutorial->starter->manageTeam = new stdClass();
$lang->tutorial->starter->manageTeam->title = 'Administrar equipo del proyecto';

$lang->tutorial->starter->manageTeam->step1 = new stdClass();
$lang->tutorial->starter->manageTeam->step1->name = 'Clic en Proyecto';
$lang->tutorial->starter->manageTeam->step1->desc = 'Aquí puede gestionar su proyecto';

$lang->tutorial->starter->manageTeam->step2 = new stdClass();
$lang->tutorial->starter->manageTeam->step2->name = 'Clic en Nombre del proyecto';
$lang->tutorial->starter->manageTeam->step2->desc = 'Haga clic en el nombre del proyecto para entrar al proyecto';

$lang->tutorial->starter->manageTeam->step3 = new stdClass();
$lang->tutorial->starter->manageTeam->step3->name = 'Clic en Configuración';
$lang->tutorial->starter->manageTeam->step3->desc = 'Haga clic en configuración para comenzar a gestionar el equipo.';

$lang->tutorial->starter->manageTeam->step4 = new stdClass();
$lang->tutorial->starter->manageTeam->step4->name = 'Clic en Equipo';
$lang->tutorial->starter->manageTeam->step4->desc = 'Haga clic en equipo para ver los miembros del proyecto.';

$lang->tutorial->starter->manageTeam->step5 = new stdClass();
$lang->tutorial->starter->manageTeam->step5->name = 'Clic en Gestionar equipo';
$lang->tutorial->starter->manageTeam->step5->desc = 'Al hacer clic en gestionar equipo podrá gestionar los miembros del equipo del proyecto actual.';

$lang->tutorial->starter->manageTeam->step6 = new stdClass();
$lang->tutorial->starter->manageTeam->step6->name = 'Completar el formulario';

$lang->tutorial->starter->manageTeam->step7 = new stdClass();
$lang->tutorial->starter->manageTeam->step7->name = 'Guardar el formulario';
$lang->tutorial->starter->manageTeam->step7->desc = 'Después de guardar, podrá ver los miembros del equipo en el Equipo.';

$lang->tutorial->starter->createProjectExecution = new stdClass();
$lang->tutorial->starter->createProjectExecution->title = 'Crear ejecución';

$lang->tutorial->starter->createProjectExecution->step1 = new stdClass();
$lang->tutorial->starter->createProjectExecution->step1->name = 'Clic en Proyecto';
$lang->tutorial->starter->createProjectExecution->step1->desc = 'Aquí puede gestionar el proyecto';

$lang->tutorial->starter->createProjectExecution->step2 = new stdClass();
$lang->tutorial->starter->createProjectExecution->step2->name = 'Clic en Nombre del proyecto';
$lang->tutorial->starter->createProjectExecution->step2->desc = 'Haga clic en el nombre del proyecto para entrar al proyecto';

$lang->tutorial->starter->createProjectExecution->step3 = new stdClass();
$lang->tutorial->starter->createProjectExecution->step3->name = 'Clic en Iteración';
$lang->tutorial->starter->createProjectExecution->step3->desc = 'Haga clic en iteración para agregar una nueva iteración';

$lang->tutorial->starter->createProjectExecution->step4 = new stdClass();
$lang->tutorial->starter->createProjectExecution->step4->name = 'Clic en Crear iteración';
$lang->tutorial->starter->createProjectExecution->step4->desc = 'Aquí puede crear nuevas iteraciones';

$lang->tutorial->starter->createProjectExecution->step5 = new stdClass();
$lang->tutorial->starter->createProjectExecution->step5->name = 'Completar el formulario';

$lang->tutorial->starter->createProjectExecution->step6 = new stdClass();
$lang->tutorial->starter->createProjectExecution->step6->name = 'Guardar el formulario';
$lang->tutorial->starter->createProjectExecution->step6->desc = 'Después de guardar, podrá gestionar el equipo, vincular historias, crear tareas o volver a las listas de tareas y ejecuciones.';

$lang->tutorial->starter->linkStory = new stdClass();
$lang->tutorial->starter->linkStory->title = "Vincular {$lang->SRCommon}";

$lang->tutorial->starter->linkStory->step1 = new stdClass();
$lang->tutorial->starter->linkStory->step1->name = 'Clic en Iteración';
$lang->tutorial->starter->linkStory->step1->desc = 'Aquí puede gestionar las iteraciones.';

$lang->tutorial->starter->linkStory->step2 = new stdClass();
$lang->tutorial->starter->linkStory->step2->name = 'Clic en Historia';
$lang->tutorial->starter->linkStory->step2->desc = 'Haga clic en Historia para ver las historias vinculadas.';

$lang->tutorial->starter->linkStory->step3 = new stdClass();
$lang->tutorial->starter->linkStory->step3->name = 'Clic en Vincular historia';
$lang->tutorial->starter->linkStory->step3->desc = 'Haga clic en Vincular historia para entrar a la lista de historias vinculadas';

$lang->tutorial->starter->linkStory->step4 = new stdClass();
$lang->tutorial->starter->linkStory->step4->name = 'Seleccionar historia';

$lang->tutorial->starter->linkStory->step5 = new stdClass();
$lang->tutorial->starter->linkStory->step5->name = 'Clic en Guardar';
$lang->tutorial->starter->linkStory->step5->desc = 'Haga clic en "Guardar" para vincular estas historias y volver a la lista.';

$lang->tutorial->starter->createTask = new stdClass();
$lang->tutorial->starter->createTask->title = 'Descomponer tareas';

$lang->tutorial->starter->createTask->step1 = new stdClass();
$lang->tutorial->starter->createTask->step1->name = 'Clic en Ejecución';
$lang->tutorial->starter->createTask->step1->desc = 'Aquí puede gestionar las iteraciones.';

$lang->tutorial->starter->createTask->step2 = new stdClass();
$lang->tutorial->starter->createTask->step2->name = 'Clic en Historia';
$lang->tutorial->starter->createTask->step2->desc = 'Entre a la lista de historias y verá aquí las historias vinculadas anteriormente.';

$lang->tutorial->starter->createTask->step3 = new stdClass();
$lang->tutorial->starter->createTask->step3->name = 'Descomponer tareas';
$lang->tutorial->starter->createTask->step3->desc = 'Aquí puede descomponer historias en tareas, incluso de forma masiva.';

$lang->tutorial->starter->createTask->step4 = new stdClass();
$lang->tutorial->starter->createTask->step4->name = 'Completar el formulario';

$lang->tutorial->starter->createTask->step5 = new stdClass();
$lang->tutorial->starter->createTask->step5->name = 'Guardar el formulario';
$lang->tutorial->starter->createTask->step5->desc = 'Después de guardar, podrá ver las tareas descompuestas en la lista de tareas';

$lang->tutorial->starter->createBug = new stdClass();
$lang->tutorial->starter->createBug->title = 'Crear Bug';

$lang->tutorial->starter->createBug->step1 = new stdClass();
$lang->tutorial->starter->createBug->step1->name = 'Clic en Prueba';
$lang->tutorial->starter->createBug->step1->desc = 'Aquí puede gestionar sus actividades de prueba.';

$lang->tutorial->starter->createBug->step2 = new stdClass();
$lang->tutorial->starter->createBug->step2->name = 'Clic en Bug';
$lang->tutorial->starter->createBug->step2->desc = 'Aquí puede gestionar los Bugs.';

$lang->tutorial->starter->createBug->step3 = new stdClass();
$lang->tutorial->starter->createBug->step3->name = 'Clic en Reportar Bug';
$lang->tutorial->starter->createBug->step3->desc = 'Aquí puede crear Bugs.';

$lang->tutorial->starter->createBug->step4 = new stdClass();
$lang->tutorial->starter->createBug->step4->name = 'Completar el formulario';

$lang->tutorial->starter->createBug->step5 = new stdClass();
$lang->tutorial->starter->createBug->step5->name = 'Guardar el formulario';
$lang->tutorial->starter->createBug->step5->desc = 'Después de guardar, accederá a la lista de Bugs.';

$lang->tutorial->scrumProjectManage = new stdClass();
$lang->tutorial->scrumProjectManage->title = 'Tutorial de gestión de proyectos Scrum';

$lang->tutorial->scrumProjectManage->manageProject = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->title = 'Gestión de proyectos';

$lang->tutorial->scrumProjectManage->manageProject->step1 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step1->name = 'Clic en Proyecto';
$lang->tutorial->scrumProjectManage->manageProject->step1->desc = 'Aquí puede crear proyectos.';

$lang->tutorial->scrumProjectManage->manageProject->step2 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step2->name = 'Clic en Crear proyecto';
$lang->tutorial->scrumProjectManage->manageProject->step2->desc = 'Puede elegir distintos métodos de gestión de proyectos para crear diferentes tipos de proyectos.';

$lang->tutorial->scrumProjectManage->manageProject->step3 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step3->name = 'Clic en Proyecto Scrum';
$lang->tutorial->scrumProjectManage->manageProject->step3->desc = 'Haga clic en Scrum para crear un proyecto Scrum.';

$lang->tutorial->scrumProjectManage->manageProject->step4 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step4->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageProject->step5 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step5->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageProject->step5->desc = 'Después de guardar, podrá verlo en la lista de proyectos.';

$lang->tutorial->scrumProjectManage->manageProject->step6 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step6->name = 'Clic en Nombre del proyecto';
$lang->tutorial->scrumProjectManage->manageProject->step6->desc = 'Haga clic en el nombre del proyecto para entrar al proyecto';

$lang->tutorial->scrumProjectManage->manageProject->step7 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step7->name = 'Clic en Configuración';
$lang->tutorial->scrumProjectManage->manageProject->step7->desc = 'Haga clic en Configuración para gestionar el equipo.';

$lang->tutorial->scrumProjectManage->manageProject->step8 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step8->name = 'Clic en Equipo';
$lang->tutorial->scrumProjectManage->manageProject->step8->desc = 'Haga clic en Equipo y podrá ver aquí los miembros del equipo del proyecto.';

$lang->tutorial->scrumProjectManage->manageProject->step9 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step9->name = 'Clic en Gestionar equipo';
$lang->tutorial->scrumProjectManage->manageProject->step9->desc = 'Haga clic en gestionar equipo y podrá gestionar los miembros del equipo del proyecto actual.';

$lang->tutorial->scrumProjectManage->manageProject->step10 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step10->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageProject->step11 = new stdClass();
$lang->tutorial->scrumProjectManage->manageProject->step11->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageProject->step11->desc = 'Después de guardar, podrá ver los miembros del equipo en el Equipo.';

$lang->tutorial->scrumProjectManage->manageExecution = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->title = 'Gestión de ejecuciones';

$lang->tutorial->scrumProjectManage->manageExecution->step1 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step1->name = 'Clic en Ejecución';
$lang->tutorial->scrumProjectManage->manageExecution->step1->desc = 'Clic en Ejecución para agregar nuevas ejecuciones.';

$lang->tutorial->scrumProjectManage->manageExecution->step2 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step2->name = 'Clic en Crear ejecución';
$lang->tutorial->scrumProjectManage->manageExecution->step2->desc = 'Aquí puede agregar ejecuciones.';

$lang->tutorial->scrumProjectManage->manageExecution->step3 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step3->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageExecution->step4 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step4->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageExecution->step4->desc = 'Después de guardar, podrá configurar el equipo, vincular requerimientos, crear tareas o volver a las listas de tareas y ejecuciones.';

$lang->tutorial->scrumProjectManage->manageExecution->step5 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step5->name = 'Clic en Ejecución';
$lang->tutorial->scrumProjectManage->manageExecution->step5->desc = 'Haga clic en el nombre de la ejecución para entrar a la ejecución.';

$lang->tutorial->scrumProjectManage->manageExecution->step6 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step6->name = 'Clic en Historia';
$lang->tutorial->scrumProjectManage->manageExecution->step6->desc = 'Aquí puede gestionar las historias.';

$lang->tutorial->scrumProjectManage->manageExecution->step7 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step7->name = 'Clic en Vincular historia';
$lang->tutorial->scrumProjectManage->manageExecution->step7->desc = 'Puede vincular historias con la ejecución';

$lang->tutorial->scrumProjectManage->manageExecution->step8 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step8->name = 'Seleccionar historias';

$lang->tutorial->scrumProjectManage->manageExecution->step9 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step9->name = 'Clic en Guardar';
$lang->tutorial->scrumProjectManage->manageExecution->step9->desc = 'Haga clic en Guardar para vincular esta historia a la lista y volver a la lista de historias.';

$lang->tutorial->scrumProjectManage->manageExecution->step10 = new stdClass();
$lang->tutorial->scrumProjectManage->manageExecution->step10->name = 'Clic en Burndown';
$lang->tutorial->scrumProjectManage->manageExecution->step10->desc = 'Al hacer clic en el gráfico burndown podrá ver el gráfico burndown dentro de una ejecución.';

$lang->tutorial->scrumProjectManage->manageTask = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->title = 'Gestión de tareas';

$lang->tutorial->scrumProjectManage->manageTask->step1 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step1->name = 'Clic en Historia';
$lang->tutorial->scrumProjectManage->manageTask->step1->desc = 'Entre a la lista de historias y verá las historias vinculadas anteriormente.';

$lang->tutorial->scrumProjectManage->manageTask->step3 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step3->name = 'Desglosar tareas';
$lang->tutorial->scrumProjectManage->manageTask->step3->desc = 'Aquí puede dividir historias en tareas, incluso de forma masiva.';

$lang->tutorial->scrumProjectManage->manageTask->step4 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step4->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageTask->step5 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step5->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageTask->step5->desc = 'Después de guardar, podrá ver las tareas desglosadas en la lista de tareas.';

$lang->tutorial->scrumProjectManage->manageTask->step6 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step6->name = 'Clic en Asignado a';
$lang->tutorial->scrumProjectManage->manageTask->step6->desc = 'Aquí puede asignar tareas a los usuarios correspondientes.';

$lang->tutorial->scrumProjectManage->manageTask->step7 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step7->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageTask->step8 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step8->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageTask->step8->desc = 'Al guardar, el campo Asignado a de la lista de tareas mostrará al usuario asignado.';

$lang->tutorial->scrumProjectManage->manageTask->step9 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step9->name = 'Clic en Iniciar tarea';
$lang->tutorial->scrumProjectManage->manageTask->step9->desc = "Aquí puede iniciar tareas y registrar las horas de 'Consumo' y 'Restante'.";

$lang->tutorial->scrumProjectManage->manageTask->step10 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step10->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageTask->step11 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step11->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageTask->step11->desc = 'Después de guardar, se vuelve a la lista de tareas.';

$lang->tutorial->scrumProjectManage->manageTask->step12 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step12->name = 'Clic en Registrar horas';
$lang->tutorial->scrumProjectManage->manageTask->step12->desc = "Aquí puede registrar el consumo y el tiempo restante. Cuando el valor 'Restante' llegue a 0, la tarea se completará automáticamente.";

$lang->tutorial->scrumProjectManage->manageTask->step13 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step13->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageTask->step14 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step14->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageTask->step14->desc = 'Después de guardar, se vuelve a la lista de tareas';

$lang->tutorial->scrumProjectManage->manageTask->step15 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step15->name = 'Clic en Completar tarea';
$lang->tutorial->scrumProjectManage->manageTask->step15->desc = 'Aquí puede finalizar tareas.';

$lang->tutorial->scrumProjectManage->manageTask->step16 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step16->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageTask->step17 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step17->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageTask->step17->desc = 'Después de guardar, se vuelve a la lista de tareas';

$lang->tutorial->scrumProjectManage->manageTask->step18 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step18->name = 'Clic en Build';
$lang->tutorial->scrumProjectManage->manageTask->step18->desc = 'Ingrese al módulo Build para crear un build.';

$lang->tutorial->scrumProjectManage->manageTask->step19 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step19->name = 'Clic en Crear Build';
$lang->tutorial->scrumProjectManage->manageTask->step19->desc = 'Aquí puede crear nuevos Builds.';

$lang->tutorial->scrumProjectManage->manageTask->step20 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step20->name = 'Completar el formulario';

$lang->tutorial->scrumProjectManage->manageTask->step21 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step21->name = 'Guardar el formulario';
$lang->tutorial->scrumProjectManage->manageTask->step21->desc = 'Después de guardar, se accede a los detalles del build.';

$lang->tutorial->scrumProjectManage->manageTask->step22 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step22->name = 'Vincular historias';
$lang->tutorial->scrumProjectManage->manageTask->step22->desc = 'Puede vincular al Build las historias de I+D completadas.';

$lang->tutorial->scrumProjectManage->manageTask->step23 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step23->name = 'Seleccionar historias';
$lang->tutorial->scrumProjectManage->manageTask->step23->desc = 'Aquí puede seleccionar las historias que desea vincular.';

$lang->tutorial->scrumProjectManage->manageTask->step24 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTask->step24->name = 'Guardar historias vinculadas';
$lang->tutorial->scrumProjectManage->manageTask->step24->desc = 'Puede vincular las historias completadas con el Build actual.';

$lang->tutorial->scrumProjectManage->manageTest = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->title = 'Gestión de pruebas';

$lang->tutorial->scrumProjectManage->manageTest->step1 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step1->name = 'Clic en Prueba';
$lang->tutorial->scrumProjectManage->manageTest->step1->desc = 'Aquí puede gestionar sus pruebas.';

$lang->tutorial->scrumProjectManage->manageTest->step2 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step2->name = 'Clic en Caso';
$lang->tutorial->scrumProjectManage->manageTest->step2->desc = 'Aquí puede ver los casos.';

$lang->tutorial->scrumProjectManage->manageTest->step3 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step3->name = 'Clic en Crear caso';
$lang->tutorial->scrumProjectManage->manageTest->step3->desc = 'Aquí puede crear nuevos casos.';

$lang->tutorial->scrumProjectManage->manageTest->step4 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step4->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageTest->step5 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step5->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageTest->step5->desc = 'Al guardar, se accederá a la lista de casos.';

$lang->tutorial->scrumProjectManage->manageTest->step6 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step6->name = 'Clic en Ejecutar';
$lang->tutorial->scrumProjectManage->manageTest->step6->desc = 'Haga clic en ejecutar para correr el caso.';

$lang->tutorial->scrumProjectManage->manageTest->step7 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step7->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageTest->step8 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step8->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageTest->step8->desc = 'Después de guardar, se vuelve a la lista de casos.';

$lang->tutorial->scrumProjectManage->manageTest->step9 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step9->name = 'Clic en Resultados';
$lang->tutorial->scrumProjectManage->manageTest->step9->desc = 'Haga clic en Resultado para ver los resultados de ejecución del caso.';

$lang->tutorial->scrumProjectManage->manageTest->step10 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step10->name = 'Seleccionar paso';

$lang->tutorial->scrumProjectManage->manageTest->step11 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step11->name = 'Clic en Reportar Bug';
$lang->tutorial->scrumProjectManage->manageTest->step11->desc = 'Aquí, los resultados de ejecución fallidos pueden convertirse en Bugs.';

$lang->tutorial->scrumProjectManage->manageTest->step12 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step12->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageTest->step13 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step13->name = 'Guardar formulario';

$lang->tutorial->scrumProjectManage->manageTest->step14 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step14->name = 'Clic en Solicitud';
$lang->tutorial->scrumProjectManage->manageTest->step14->desc = 'Haga clic para gestionar la solicitud de prueba.';

$lang->tutorial->scrumProjectManage->manageTest->step15 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step15->name = 'Clic en Enviar solicitud de prueba';
$lang->tutorial->scrumProjectManage->manageTest->step15->desc = 'Aquí puede crear una solicitud de prueba.';

$lang->tutorial->scrumProjectManage->manageTest->step16 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step16->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageTest->step17 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step17->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageTest->step17->desc = 'Después de guardar, se vuelve a la lista de solicitudes de prueba.';

$lang->tutorial->scrumProjectManage->manageTest->step18 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step18->name = 'Clic en Nombre de la solicitud';
$lang->tutorial->scrumProjectManage->manageTest->step18->desc = 'Aquí puede ver los detalles de la solicitud de prueba.';

$lang->tutorial->scrumProjectManage->manageTest->step19 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step19->name = 'Clic en Vincular caso';
$lang->tutorial->scrumProjectManage->manageTest->step19->desc = 'Aquí puede vincular casos.';

$lang->tutorial->scrumProjectManage->manageTest->step20 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step20->name = 'Seleccione los casos a vincular';

$lang->tutorial->scrumProjectManage->manageTest->step21 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step21->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageTest->step21->desc = 'Puede vincular casos a una solicitud de prueba. Vea aquí los casos disponibles para asociar.';

$lang->tutorial->scrumProjectManage->manageTest->step22 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step22->name = 'Clic en Solicitud de prueba';
$lang->tutorial->scrumProjectManage->manageTest->step22->desc = 'Haga clic aquí para volver a la lista de solicitudes de prueba.';

$lang->tutorial->scrumProjectManage->manageTest->step23 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step23->name = 'Seleccionar solicitud de prueba';

$lang->tutorial->scrumProjectManage->manageTest->step24 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step24->name = 'Clic en Informe de pruebas';
$lang->tutorial->scrumProjectManage->manageTest->step24->desc = 'Aquí puede generar informes de pruebas.';

$lang->tutorial->scrumProjectManage->manageTest->step25 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step25->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageTest->step26 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step26->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageTest->step26->desc = 'Después de guardar, podrá generar el informe de pruebas.';

$lang->tutorial->scrumProjectManage->manageTest->step27 = new stdClass();
$lang->tutorial->scrumProjectManage->manageTest->step27->name = 'Clic en Informe de pruebas';
$lang->tutorial->scrumProjectManage->manageTest->step27->desc = 'Aquí puede ver las listas de informes de pruebas.';

$lang->tutorial->scrumProjectManage->manageBug = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->title = 'Gestión de Bugs';

$lang->tutorial->scrumProjectManage->manageBug->step1 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step1->name = 'Clic en Prueba';
$lang->tutorial->scrumProjectManage->manageBug->step1->desc = 'Aquí puede gestionar los Bugs.';

$lang->tutorial->scrumProjectManage->manageBug->step2 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step2->name = 'Clic en Reportar Bug';
$lang->tutorial->scrumProjectManage->manageBug->step2->desc = 'Aquí puede crear Bugs.';

$lang->tutorial->scrumProjectManage->manageBug->step3 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step3->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageBug->step4 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step4->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageBug->step4->desc = 'Después de guardar, se navega a la lista de Bugs.';

$lang->tutorial->scrumProjectManage->manageBug->step5 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step5->name = 'Confirmar Bug';
$lang->tutorial->scrumProjectManage->manageBug->step5->desc = 'aquí puede confirmar Bugs';

$lang->tutorial->scrumProjectManage->manageBug->step6 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step6->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageBug->step7 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step7->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageBug->step7->desc = 'Después de guardar, se navega a la lista de Bugs.';

$lang->tutorial->scrumProjectManage->manageBug->step8 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step8->name = 'Resolver bug';
$lang->tutorial->scrumProjectManage->manageBug->step8->desc = 'Aquí puede resolver Bugs.';

$lang->tutorial->scrumProjectManage->manageBug->step9 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step9->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageBug->step10 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step10->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageBug->step10->desc = 'Después de guardar, podrá verificar los Bugs resueltos.';

$lang->tutorial->scrumProjectManage->manageBug->step11 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step11->name = 'Cerrar Bug';
$lang->tutorial->scrumProjectManage->manageBug->step11->desc = 'Clic para cerrar Bugs.';

$lang->tutorial->scrumProjectManage->manageBug->step12 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step12->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageBug->step13 = new stdClass();
$lang->tutorial->scrumProjectManage->manageBug->step13->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageBug->step13->desc = 'Cerrar Bugs verificados después de guardar';

$lang->tutorial->scrumProjectManage->manageIssue = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->title = 'Gestión de incidencias';

$lang->tutorial->scrumProjectManage->manageIssue->step1 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step1->name = 'Clic en Otros';

$lang->tutorial->scrumProjectManage->manageIssue->step2 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step2->name = 'Clic en Incidencias';
$lang->tutorial->scrumProjectManage->manageIssue->step2->desc = 'Aquí puede gestionar incidencias.';

$lang->tutorial->scrumProjectManage->manageIssue->step3 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step3->name = 'Clic en Crear incidencia';
$lang->tutorial->scrumProjectManage->manageIssue->step3->desc = 'Cree incidencias aquí, incluso puede crearlas de forma masiva.';

$lang->tutorial->scrumProjectManage->manageIssue->step4 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step4->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageIssue->step5 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step5->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageIssue->step5->desc = 'Ir a la lista de incidencias después de guardar';

$lang->tutorial->scrumProjectManage->manageIssue->step6 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step6->name = 'Confirmar incidencia';
$lang->tutorial->scrumProjectManage->manageIssue->step6->desc = 'Aquí puede confirmar las incidencias del proyecto actual.';

$lang->tutorial->scrumProjectManage->manageIssue->step7 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step7->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageIssue->step8 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step8->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageIssue->step8->desc = 'Volver a la lista de incidencias después de confirmar';

$lang->tutorial->scrumProjectManage->manageIssue->step9 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step9->name = 'Resolver incidencia';
$lang->tutorial->scrumProjectManage->manageIssue->step9->desc = 'Aquí puede resolver incidencias.';

$lang->tutorial->scrumProjectManage->manageIssue->step10 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step10->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageIssue->step11 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step11->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageIssue->step11->desc = 'Volver a la lista de incidencias después de guardar.';

$lang->tutorial->scrumProjectManage->manageIssue->step12 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step12->name = 'Cerrar incidencia';
$lang->tutorial->scrumProjectManage->manageIssue->step12->desc = 'Aquí puede cerrar las incidencias resueltas.';

$lang->tutorial->scrumProjectManage->manageIssue->step13 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step13->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageIssue->step14 = new stdClass();
$lang->tutorial->scrumProjectManage->manageIssue->step14->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageIssue->step14->desc = 'Cierre las incidencias aquí.';

$lang->tutorial->scrumProjectManage->manageRisk = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->title = 'Gestión de riesgos';

$lang->tutorial->scrumProjectManage->manageRisk->step1 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step1->name = 'Clic en Otros';

$lang->tutorial->scrumProjectManage->manageRisk->step2 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step2->name = 'Clic en Riesgos';
$lang->tutorial->scrumProjectManage->manageRisk->step2->desc = 'Aquí puede gestionar riesgos.';

$lang->tutorial->scrumProjectManage->manageRisk->step3 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step3->name = 'Clic en Agregar riesgo';
$lang->tutorial->scrumProjectManage->manageRisk->step3->desc = 'Agregue aquí los riesgos del proyecto; incluso puede crearlos de forma masiva.';

$lang->tutorial->scrumProjectManage->manageRisk->step4 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step4->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageRisk->step5 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step5->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageRisk->step5->desc = 'Agregue aquí riesgos a la lista de riesgos';

$lang->tutorial->scrumProjectManage->manageRisk->step6 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step6->name = 'Seguir los riesgos';
$lang->tutorial->scrumProjectManage->manageRisk->step6->desc = 'Aquí puede hacer seguimiento de los riesgos.';

$lang->tutorial->scrumProjectManage->manageRisk->step7 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step7->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageRisk->step8 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step8->name = 'Guardar formulario';
$lang->tutorial->scrumProjectManage->manageRisk->step8->desc = 'Volver a la lista de riesgos después de guardar';

$lang->tutorial->scrumProjectManage->manageRisk->step9 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step9->name = 'Cerrar riesgo';
$lang->tutorial->scrumProjectManage->manageRisk->step9->desc = 'Aquí puede cerrar riesgos.';

$lang->tutorial->scrumProjectManage->manageRisk->step10 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step10->name = 'Completar formulario';

$lang->tutorial->scrumProjectManage->manageRisk->step11 = new stdClass();
$lang->tutorial->scrumProjectManage->manageRisk->step11->name = 'Guardar formulario';

$lang->tutorial->waterfallProjectManage = new stdClass();
$lang->tutorial->waterfallProjectManage->title = 'Tutorial de gestión de proyectos en cascada';

$lang->tutorial->waterfallProjectManage->manageProject = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->title = 'Gestión de proyectos';

$lang->tutorial->waterfallProjectManage->manageProject->step1 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step1->name = 'Clic en Proyecto';
$lang->tutorial->waterfallProjectManage->manageProject->step1->desc = 'Aquí puede crear proyectos.';

$lang->tutorial->waterfallProjectManage->manageProject->step2 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step2->name = 'Clic en Crear proyecto';
$lang->tutorial->waterfallProjectManage->manageProject->step2->desc = 'Puede elegir distintos métodos de gestión de proyectos para crear diferentes tipos de proyectos';

$lang->tutorial->waterfallProjectManage->manageProject->step3 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step3->name = 'Clic en Proyecto en cascada';
$lang->tutorial->waterfallProjectManage->manageProject->step3->desc = 'Aquí puede crear proyectos en cascada';

$lang->tutorial->waterfallProjectManage->manageProject->step4 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step4->name = 'Completar formulario';

$lang->tutorial->waterfallProjectManage->manageProject->step5 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step5->name = 'Guardar formulario';
$lang->tutorial->waterfallProjectManage->manageProject->step5->desc = 'Después de guardar, se mostrará en la lista de proyectos';

$lang->tutorial->waterfallProjectManage->manageProject->step6 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step6->name = 'Clic en Nombre del proyecto';
$lang->tutorial->waterfallProjectManage->manageProject->step6->desc = 'Haga clic en el nombre del proyecto para entrar al proyecto en cascada';

$lang->tutorial->waterfallProjectManage->manageProject->step7 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step7->name = 'Clic en Configuración';
$lang->tutorial->waterfallProjectManage->manageProject->step7->desc = 'Haga clic en Configuración para gestionar el equipo.';

$lang->tutorial->waterfallProjectManage->manageProject->step8 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step8->name = 'Clic en Equipo';
$lang->tutorial->waterfallProjectManage->manageProject->step8->desc = 'Haga clic en Equipo para ver los miembros del equipo del proyecto.';

$lang->tutorial->waterfallProjectManage->manageProject->step9 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step9->name = 'Clic en Gestionar equipo';
$lang->tutorial->waterfallProjectManage->manageProject->step9->desc = 'Haga clic en Gestión del equipo para gestionar los miembros del equipo del proyecto actual';

$lang->tutorial->waterfallProjectManage->manageProject->step10 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step10->name = 'Completar formulario';

$lang->tutorial->waterfallProjectManage->manageProject->step11 = new stdClass();
$lang->tutorial->waterfallProjectManage->manageProject->step11->name = 'Guardar formulario';
$lang->tutorial->waterfallProjectManage->manageProject->step11->desc = 'Después de guardar, podrá ver los miembros del equipo en el equipo';

$lang->tutorial->waterfallProjectManage->setStage = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->title = 'Configuración de etapas';

$lang->tutorial->waterfallProjectManage->setStage->step1 = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->step1->name = 'Clic en Fase';
$lang->tutorial->waterfallProjectManage->setStage->step1->desc = 'Aquí puede gestionar las fases.';

$lang->tutorial->waterfallProjectManage->setStage->step2 = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->step2->name = 'Clic en Definir fase';
$lang->tutorial->waterfallProjectManage->setStage->step2->desc = 'Haga clic en Configuración de fases para definir las fases de su proyecto. Marque una fase como hito para ver su informe de hito específico.';

$lang->tutorial->waterfallProjectManage->setStage->step3 = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->step3->name = 'Completar formulario';

$lang->tutorial->waterfallProjectManage->setStage->step4 = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->step4->name = 'Guardar formulario';
$lang->tutorial->waterfallProjectManage->setStage->step4->desc = 'Establezca las fechas de inicio y fin de cada fase. Una vez guardadas, podrá ver el cronograma completo en la Lista de fases.';

$lang->tutorial->waterfallProjectManage->setStage->step5 = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->step5->name = 'Cambiar vista';
$lang->tutorial->waterfallProjectManage->setStage->step5->desc = 'Puede cambiar a la vista de lista para ver las fases.';

$lang->tutorial->waterfallProjectManage->setStage->step6 = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->step6->name = 'Clic en Fase de desarrollo';
$lang->tutorial->waterfallProjectManage->setStage->step6->desc = 'Aquí puede asignar recursos y tareas en cada fase.';

$lang->tutorial->waterfallProjectManage->setStage->step7 = new stdClass();
$lang->tutorial->waterfallProjectManage->setStage->step7->name = 'Clic en Burndown';
$lang->tutorial->waterfallProjectManage->setStage->step7->desc = 'Consulte el gráfico de Burndown para seguir su avance en las distintas fases.';

$lang->tutorial->waterfallProjectManage->manageTask = new stdClass();
$lang->tutorial->waterfallProjectManage->manageTask = $lang->tutorial->scrumProjectManage->manageTask;

$lang->tutorial->waterfallProjectManage->manageTest = new stdClass();
$lang->tutorial->waterfallProjectManage->manageTest = $lang->tutorial->scrumProjectManage->manageTest;

$lang->tutorial->waterfallProjectManage->manageBug = new stdClass();
$lang->tutorial->waterfallProjectManage->manageBug = $lang->tutorial->scrumProjectManage->manageBug;

$lang->tutorial->waterfallProjectManage->design = new stdClass();
$lang->tutorial->waterfallProjectManage->design->title = 'Gestión de diseño';

$lang->tutorial->waterfallProjectManage->design->step1 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step1->name = 'Clic en Diseño';
$lang->tutorial->waterfallProjectManage->design->step1->desc = 'Aquí puede gestionar los diseños.';

$lang->tutorial->waterfallProjectManage->design->step2 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step2->name = 'Clic en Crear diseño';
$lang->tutorial->waterfallProjectManage->design->step2->desc = 'Aquí puede crear diseños.';

$lang->tutorial->waterfallProjectManage->design->step3 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step3->name = 'Completar el formulario';

$lang->tutorial->waterfallProjectManage->design->step4 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step4->name = 'Guardar el formulario';
$lang->tutorial->waterfallProjectManage->design->step4->desc = 'Después de guardar, podrá ver todos los diseños en la lista de diseños.';

$lang->tutorial->waterfallProjectManage->design->step5 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step5->name = 'Clic en Nombre del diseño';
$lang->tutorial->waterfallProjectManage->design->step5->desc = 'Aquí puede ingresar los detalles del diseño.';

$lang->tutorial->waterfallProjectManage->design->step6 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step6->name = 'Clic en Vincular commit';
$lang->tutorial->waterfallProjectManage->design->step6->desc = 'Aquí puede vincular un commit.';

$lang->tutorial->waterfallProjectManage->design->step7 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step7->name = 'Seleccionar commit';

$lang->tutorial->waterfallProjectManage->design->step8 = new stdClass();
$lang->tutorial->waterfallProjectManage->design->step8->name = 'Guardar el formulario';
$lang->tutorial->waterfallProjectManage->design->step8->desc = 'Después de guardar, podrá ver los commits vinculados en los detalles del diseño.';

$lang->tutorial->waterfallProjectManage->review = new stdClass();
$lang->tutorial->waterfallProjectManage->review->title = 'Gestión de revisión y configuración';

$lang->tutorial->waterfallProjectManage->review->step1 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step1->name = 'Clic en Revisión';
$lang->tutorial->waterfallProjectManage->review->step1->desc = 'Aquí puede gestionar las revisiones.';

$lang->tutorial->waterfallProjectManage->review->step2 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step2->name = 'Clic en Lista de revisiones';
$lang->tutorial->waterfallProjectManage->review->step2->desc = 'Aquí puede ver todos los elementos de revisión.';

$lang->tutorial->waterfallProjectManage->review->step3 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step3->name = 'Clic en Iniciar revisión';
$lang->tutorial->waterfallProjectManage->review->step3->desc = 'Aquí puede iniciar una revisión.';

$lang->tutorial->waterfallProjectManage->review->step4 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step4->name = 'Completar el formulario';

$lang->tutorial->waterfallProjectManage->review->step5 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step5->name = 'Guardar el formulario';
$lang->tutorial->waterfallProjectManage->review->step5->desc = 'Al guardar, aparecerá en la lista de revisiones. Puede configurar plantillas en Administración y referenciarlas en los campos de plantilla correspondientes.';

$lang->tutorial->waterfallProjectManage->review->step6 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step6->name = 'Clic en Enviar auditoría';
$lang->tutorial->waterfallProjectManage->review->step6->desc = 'Aquí puede enviar una auditoría. Para las revisiones no aprobadas, puede ver y agregar incidencias en la lista de incidencias.';

$lang->tutorial->waterfallProjectManage->review->step7 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step7->name = 'Completar el formulario';

$lang->tutorial->waterfallProjectManage->review->step8 = new stdClass();
$lang->tutorial->waterfallProjectManage->review->step8->name = 'Guardar el formulario';
$lang->tutorial->waterfallProjectManage->review->step8->desc = 'Después de guardar, se vuelve a la lista de revisiones.';

$lang->tutorial->waterfallProjectManage->manageIssue = new stdClass();
$lang->tutorial->waterfallProjectManage->manageIssue = $lang->tutorial->scrumProjectManage->manageIssue;

$lang->tutorial->waterfallProjectManage->manageRisk = new stdClass();
$lang->tutorial->waterfallProjectManage->manageRisk = $lang->tutorial->scrumProjectManage->manageRisk;

$lang->tutorial->kanbanProjectManage = new stdClass();
$lang->tutorial->kanbanProjectManage->title = 'Tutorial de gestión de proyectos Kanban';

$lang->tutorial->kanbanProjectManage->manageProject = new stdClass();
$lang->tutorial->kanbanProjectManage->manageProject = clone $lang->tutorial->scrumProjectManage->manageProject;

$lang->tutorial->kanbanProjectManage->manageProject->step3 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageProject->step3->name = 'Clic en Kanban';
$lang->tutorial->kanbanProjectManage->manageProject->step3->desc = 'Aquí puede crear un proyecto Kanban.';

$lang->tutorial->kanbanProjectManage->manageKanban = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->title = 'Gestión de Kanban';

$lang->tutorial->kanbanProjectManage->manageKanban->step1 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step1->name = 'Clic en Crear Kanban';
$lang->tutorial->kanbanProjectManage->manageKanban->step1->desc = 'Aquí puede agregar un nuevo Kanban.';

$lang->tutorial->kanbanProjectManage->manageKanban->step2 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step2->name = 'Completar el formulario';

$lang->tutorial->kanbanProjectManage->manageKanban->step3 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step3->name = 'Guardar el formulario';
$lang->tutorial->kanbanProjectManage->manageKanban->step3->desc = 'Aquí puede completar la creación del Kanban.';

$lang->tutorial->kanbanProjectManage->manageKanban->step4 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step4->name = 'Clic en Más';

$lang->tutorial->kanbanProjectManage->manageKanban->step5 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step5->name = 'Clic en Crear área';
$lang->tutorial->kanbanProjectManage->manageKanban->step5->desc = 'Aquí puede agregar una nueva área.';

$lang->tutorial->kanbanProjectManage->manageKanban->step6 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step6->name = 'Completar el formulario';

$lang->tutorial->kanbanProjectManage->manageKanban->step7 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step7->name = 'Guardar el formulario';
$lang->tutorial->kanbanProjectManage->manageKanban->step7->desc = 'Puede agregar nuevas áreas a su proyecto Kanban.';

$lang->tutorial->kanbanProjectManage->manageKanban->step8 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step8->name = 'Clic en Crear';
$lang->tutorial->kanbanProjectManage->manageKanban->step8->desc = 'Puede elegir vincular o crear historias.';

$lang->tutorial->kanbanProjectManage->manageKanban->step9 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step9->name = 'Clic en Vincular historias';
$lang->tutorial->kanbanProjectManage->manageKanban->step9->desc = 'Puede vincular o crear historias dentro del carril de historias.';

$lang->tutorial->kanbanProjectManage->manageKanban->step10 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step10->name = 'Completar el formulario';

$lang->tutorial->kanbanProjectManage->manageKanban->step11 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step11->name = 'Guardar el formulario';
$lang->tutorial->kanbanProjectManage->manageKanban->step11->desc = 'Puede vincular historias al carril de historias.';

$lang->tutorial->kanbanProjectManage->manageKanban->step12 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step12->name = 'Clic en Más';

$lang->tutorial->kanbanProjectManage->manageKanban->step13 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step13->name = 'Clic en Crear tarea';
$lang->tutorial->kanbanProjectManage->manageKanban->step13->desc = 'Aquí puede desglosar las historias en tareas detalladas.';

$lang->tutorial->kanbanProjectManage->manageKanban->step14 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step14->name = 'Completar el formulario';

$lang->tutorial->kanbanProjectManage->manageKanban->step15 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step15->name = 'Guardar el formulario';
$lang->tutorial->kanbanProjectManage->manageKanban->step15->desc = 'Puede agregar tareas al carril de tareas.';

$lang->tutorial->kanbanProjectManage->manageKanban->step16 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step16->name = 'Clic en Crear';

$lang->tutorial->kanbanProjectManage->manageKanban->step17 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step17->name = 'Clic en Reportar Bug';
$lang->tutorial->kanbanProjectManage->manageKanban->step17->desc = 'Aquí puede reportar un Bug.';

$lang->tutorial->kanbanProjectManage->manageKanban->step18 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step18->name = 'Completar el formulario';

$lang->tutorial->kanbanProjectManage->manageKanban->step19 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step19->name = 'Guardar el formulario';
$lang->tutorial->kanbanProjectManage->manageKanban->step19->desc = 'Puede agregar el Bug al carril de Bugs.';

$lang->tutorial->kanbanProjectManage->manageKanban->step20 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step20->name = 'Clic en Más';

$lang->tutorial->kanbanProjectManage->manageKanban->step21 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step21->name = 'Clic en Configuración de WIP';
$lang->tutorial->kanbanProjectManage->manageKanban->step21->desc = 'Aquí, configure con flexibilidad los límites WIP según sus necesidades.';

$lang->tutorial->kanbanProjectManage->manageKanban->step22 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step22->name = 'Completar el formulario';

$lang->tutorial->kanbanProjectManage->manageKanban->step23 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageKanban->step23->name = 'Guardar el formulario';

$lang->tutorial->kanbanProjectManage->manageBuild = new stdClass();
$lang->tutorial->kanbanProjectManage->manageBuild->title = 'Gestión de Builds';

$lang->tutorial->kanbanProjectManage->manageBuild->step1 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageBuild->step1->name = 'Clic en Build';
$lang->tutorial->kanbanProjectManage->manageBuild->step1->desc = 'Aquí puede gestionar los Builds.';

$lang->tutorial->kanbanProjectManage->manageBuild->step2 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageBuild->step2->name = 'Clic en Crear Build';
$lang->tutorial->kanbanProjectManage->manageBuild->step2->desc = 'Aquí puede crear un nuevo Build.';

$lang->tutorial->kanbanProjectManage->manageBuild->step3 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageBuild->step3->name = 'Completar el formulario';

$lang->tutorial->kanbanProjectManage->manageBuild->step4 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageBuild->step4->name = 'Guardar el formulario';
$lang->tutorial->kanbanProjectManage->manageBuild->step4->desc = 'Después de guardar, podrá verlo en la lista de builds.';

$lang->tutorial->kanbanProjectManage->manageBuild->step5 = new stdClass();
$lang->tutorial->kanbanProjectManage->manageBuild->step5->name = 'Clic en Diagramas de flujo acumulado';
$lang->tutorial->kanbanProjectManage->manageBuild->step5->desc = "Aquí puede ver el diagrama de flujo acumulativo para hacer seguimiento del avance de su Kanban.";

$lang->tutorial->taskManage = new stdClass();
$lang->tutorial->taskManage->title = 'Tutorial de gestión de tareas';

$lang->tutorial->taskManage->step1 = new stdClass();
$lang->tutorial->taskManage->step1->name = 'Clic en Proyecto';
$lang->tutorial->taskManage->step1->desc = 'Haga clic para entrar al proyecto y gestionar sus tareas.';

$lang->tutorial->taskManage->step2 = new stdClass();
$lang->tutorial->taskManage->step2->name = 'Clic en Crear proyecto';
$lang->tutorial->taskManage->step2->desc = 'Clic para crear una tarea de gestión de proyecto sin iteraciones';

$lang->tutorial->taskManage->step3 = new stdClass();
$lang->tutorial->taskManage->step3->name = 'Clic en Proyecto Scrum';
$lang->tutorial->taskManage->step3->desc = 'Clic para crear un proyecto sin iteraciones';

$lang->tutorial->taskManage->step4 = new stdClass();
$lang->tutorial->taskManage->step4->name = 'Completar el formulario';
$lang->tutorial->taskManage->step4->desc = "Seleccione 'Categoría' y desmarque 'Multi-iteración' para crear un proyecto sin iteraciones.";

$lang->tutorial->taskManage->step5 = new stdClass();
$lang->tutorial->taskManage->step5->name = 'Guardar el formulario';
$lang->tutorial->taskManage->step5->desc = 'Después de guardar, podrá verlo en la lista de proyectos.';

$lang->tutorial->taskManage->step6 = new stdClass();
$lang->tutorial->taskManage->step6->name = 'Clic en Nombre del proyecto';
$lang->tutorial->taskManage->step6->desc = 'Haga clic en el nombre del proyecto para entrar al proyecto';

$lang->tutorial->taskManage->step7 = new stdClass();
$lang->tutorial->taskManage->step7->name = 'Clic en Crear tarea';
$lang->tutorial->taskManage->step7->desc = 'Haga clic para crear tareas para el proyecto.';

$lang->tutorial->taskManage->step8 = new stdClass();
$lang->tutorial->taskManage->step8->name = 'Completar el formulario';

$lang->tutorial->taskManage->step9 = new stdClass();
$lang->tutorial->taskManage->step9->name = 'Guardar el formulario';
$lang->tutorial->taskManage->step9->desc = 'Después de guardar, podrá ver las tareas en la lista de tareas.';

$lang->tutorial->taskManage->step10 = new stdClass();
$lang->tutorial->taskManage->step10->name = 'Clic en Asignado a';
$lang->tutorial->taskManage->step10->desc = 'Haga clic para asignar tareas a personas.';

$lang->tutorial->taskManage->step11 = new stdClass();
$lang->tutorial->taskManage->step11->name = 'Completar el formulario';

$lang->tutorial->taskManage->step12 = new stdClass();
$lang->tutorial->taskManage->step12->name = 'Guardar el formulario';
$lang->tutorial->taskManage->step12->desc = 'Después de guardar, el campo Asignado a de la lista de tareas mostrará el usuario asignado.';

$lang->tutorial->taskManage->step13 = new stdClass();
$lang->tutorial->taskManage->step13->name = 'Clic en Iniciar tarea';
$lang->tutorial->taskManage->step13->desc = 'Aquí puede iniciar tareas y hacer seguimiento del consumo y el tiempo restante.';

$lang->tutorial->taskManage->step14 = new stdClass();
$lang->tutorial->taskManage->step14->name = 'Completar el formulario';

$lang->tutorial->taskManage->step15 = new stdClass();
$lang->tutorial->taskManage->step15->name = 'Guardar el formulario';
$lang->tutorial->taskManage->step15->desc = 'Después de guardar, el estado de la tarea cambia a "En curso".';

$lang->tutorial->taskManage->step16 = new stdClass();
$lang->tutorial->taskManage->step16->name = 'Clic en Registrar horas';
$lang->tutorial->taskManage->step16->desc = "Aquí puede registrar el consumo y el tiempo restante. Cuando el valor 'Restante' llegue a 0, la tarea se completará automáticamente.";

$lang->tutorial->taskManage->step17 = new stdClass();
$lang->tutorial->taskManage->step17->name = 'Completar el formulario';

$lang->tutorial->taskManage->step18 = new stdClass();
$lang->tutorial->taskManage->step18->name = 'Guardar el formulario';
$lang->tutorial->taskManage->step18->desc = 'Después de guardar, se vuelve a la lista de tareas.';

$lang->tutorial->taskManage->step19 = new stdClass();
$lang->tutorial->taskManage->step19->name = 'Clic en Completar tarea';
$lang->tutorial->taskManage->step19->desc = 'Aquí puede finalizar una tarea.';

$lang->tutorial->taskManage->step20 = new stdClass();
$lang->tutorial->taskManage->step20->name = 'Completar el formulario';

$lang->tutorial->taskManage->step21 = new stdClass();
$lang->tutorial->taskManage->step21->name = 'Guardar el formulario';
$lang->tutorial->taskManage->step21->desc = 'Después de guardar, el estado de la tarea cambia a "Completada".';

$lang->tutorial->taskManage->step22 = new stdClass();
$lang->tutorial->taskManage->step22->name = 'Clic en Cerrar tarea';
$lang->tutorial->taskManage->step22->desc = 'Haga clic para cerrar la tarea después de confirmar que está completada.';

$lang->tutorial->taskManage->step23 = new stdClass();
$lang->tutorial->taskManage->step23->name = 'Completar el formulario';

$lang->tutorial->taskManage->step24 = new stdClass();
$lang->tutorial->taskManage->step24->name = 'Guardar el formulario';
$lang->tutorial->taskManage->step24->desc = 'Después de guardar, el estado de la tarea cambia a "Cerrada"';

$lang->tutorial->testManage = new stdClass();
$lang->tutorial->testManage->title = 'Tutorial de gestión de pruebas';

$lang->tutorial->testManage->step1 = new stdClass();
$lang->tutorial->testManage->step1->name = 'Clic en Prueba';
$lang->tutorial->testManage->step1->desc = 'Haga clic para gestionar las pruebas.';

$lang->tutorial->testManage->step2 = new stdClass();
$lang->tutorial->testManage->step2->name = 'Clic en Caso';
$lang->tutorial->testManage->step2->desc = 'Haga clic para gestionar casos.';

$lang->tutorial->testManage->step3 = new stdClass();
$lang->tutorial->testManage->step3->name = 'Clic en Agregar caso';
$lang->tutorial->testManage->step3->desc = 'Aquí puede crear casos.';

$lang->tutorial->testManage->step4 = new stdClass();
$lang->tutorial->testManage->step4->name = 'Completar formulario';

$lang->tutorial->testManage->step5 = new stdClass();
$lang->tutorial->testManage->step5->name = 'Guardar formulario';
$lang->tutorial->testManage->step5->desc = 'Después de guardar, podrá ver los casos en la lista de casos.';

$lang->tutorial->testManage->step6 = new stdClass();
$lang->tutorial->testManage->step6->name = 'Clic en Solicitud de prueba';
$lang->tutorial->testManage->step6->desc = 'Haga clic para gestionar la información de la solicitud de prueba.';

$lang->tutorial->testManage->step7 = new stdClass();
$lang->tutorial->testManage->step7->name = 'Clic en Enviar solicitud';
$lang->tutorial->testManage->step7->desc = 'Al hacer clic en enviar se generará una solicitud de prueba.';

$lang->tutorial->testManage->step8 = new stdClass();
$lang->tutorial->testManage->step8->name = 'Completar formulario';

$lang->tutorial->testManage->step9 = new stdClass();
$lang->tutorial->testManage->step9->name = 'Guardar formulario';
$lang->tutorial->testManage->step9->desc = 'Véalo en la lista de solicitudes de prueba después de guardar.';

$lang->tutorial->testManage->step10 = new stdClass();
$lang->tutorial->testManage->step10->name = 'Clic en Nombre de la solicitud de prueba';
$lang->tutorial->testManage->step10->desc = 'Haga clic para ver los detalles de las solicitudes de prueba.';

$lang->tutorial->testManage->step11 = new stdClass();
$lang->tutorial->testManage->step11->name = 'Clic en Vincular caso';
$lang->tutorial->testManage->step11->desc = 'Vincule casos con la solicitud de prueba haciendo clic.';

$lang->tutorial->testManage->step12 = new stdClass();
$lang->tutorial->testManage->step12->name = 'Verificar casos';
$lang->tutorial->testManage->step12->desc = 'Puede vincular casos con la solicitud de prueba.';

$lang->tutorial->testManage->step13 = new stdClass();
$lang->tutorial->testManage->step13->name = 'Clic en Guardar';
$lang->tutorial->testManage->step13->desc = 'Después de guardar, los casos se vincularán correctamente a la solicitud de prueba.';

$lang->tutorial->testManage->step14 = new stdClass();
$lang->tutorial->testManage->step14->name = 'Clic en Ejecutar';
$lang->tutorial->testManage->step14->desc = 'Haga clic para ejecutar casos.';

$lang->tutorial->testManage->step15 = new stdClass();
$lang->tutorial->testManage->step15->name = 'Completar formulario';

$lang->tutorial->testManage->step16 = new stdClass();
$lang->tutorial->testManage->step16->name = 'Guardar formulario';
$lang->tutorial->testManage->step16->desc = 'Completar la ejecución del caso después de guardar.';

$lang->tutorial->testManage->step17 = new stdClass();
$lang->tutorial->testManage->step17->name = 'Clic en Resultados';
$lang->tutorial->testManage->step17->desc = 'Ejecute los casos aquí.';

$lang->tutorial->testManage->step18 = new stdClass();
$lang->tutorial->testManage->step18->name = 'Seleccionar paso del caso';

$lang->tutorial->testManage->step19 = new stdClass();
$lang->tutorial->testManage->step19->name = 'Clic en Reportar Bug';
$lang->tutorial->testManage->step19->desc = 'Convierta los pasos de prueba fallidos en informes de bug.';

$lang->tutorial->testManage->step20 = new stdClass();
$lang->tutorial->testManage->step20->name = 'Completar formulario';

$lang->tutorial->testManage->step21 = new stdClass();
$lang->tutorial->testManage->step21->name = 'Guardar formulario';

$lang->tutorial->testManage->step22 = new stdClass();
$lang->tutorial->testManage->step22->name = 'Clic en Solicitud de prueba ';

$lang->tutorial->testManage->step23 = new stdClass();
$lang->tutorial->testManage->step23->name = 'Generar informes de pruebas';
$lang->tutorial->testManage->step23->desc = 'Aquí puede generar informes de pruebas.';

$lang->tutorial->testManage->step24 = new stdClass();
$lang->tutorial->testManage->step24->name = 'Completar formulario';

$lang->tutorial->testManage->step25 = new stdClass();
$lang->tutorial->testManage->step25->name = 'Guardar formulario';
$lang->tutorial->testManage->step25->desc = 'Generar informe de pruebas después de guardar.';

$lang->tutorial->accountManage = new stdClass();
$lang->tutorial->accountManage->title = 'Tutorial de gestión de cuentas';

$lang->tutorial->accountManage->deptManage = new stdClass();
$lang->tutorial->accountManage->deptManage->title = 'Gestión de departamentos';

$lang->tutorial->accountManage->deptManage->step1 = new stdClass();
$lang->tutorial->accountManage->deptManage->step1->name = 'Clic en Admin';
$lang->tutorial->accountManage->deptManage->step1->desc = 'Aquí puede gestionar las cuentas y configurar diversos ajustes.';

$lang->tutorial->accountManage->deptManage->step2 = new stdClass();
$lang->tutorial->accountManage->deptManage->step2->name = 'Clic en Gestión de usuarios';
$lang->tutorial->accountManage->deptManage->step2->desc = 'Aquí puede gestionar departamentos, agregar usuarios y gestionar los permisos de los grupos.';

$lang->tutorial->accountManage->deptManage->step3 = new stdClass();
$lang->tutorial->accountManage->deptManage->step3->name = 'Clic en Departamento';
$lang->tutorial->accountManage->deptManage->step3->desc = 'Puede hacer clic aquí para gestionar los departamentos.';

$lang->tutorial->accountManage->deptManage->step4 = new stdClass();
$lang->tutorial->accountManage->deptManage->step4->name = 'Completar el formulario';

$lang->tutorial->accountManage->deptManage->step5 = new stdClass();
$lang->tutorial->accountManage->deptManage->step5->name = 'Guardar el formulario';
$lang->tutorial->accountManage->deptManage->step5->desc = 'Después de guardar, podrá verlo en el directorio de la izquierda.';

$lang->tutorial->accountManage->addUser = new stdClass();
$lang->tutorial->accountManage->addUser->title = 'Agregar usuario';

$lang->tutorial->accountManage->addUser->step1 = new stdClass();
$lang->tutorial->accountManage->addUser->step1->name = 'Clic en Usuario';
$lang->tutorial->accountManage->addUser->step1->desc = 'Aquí puede gestionar los usuarios de la empresa.';

$lang->tutorial->accountManage->addUser->step2 = new stdClass();
$lang->tutorial->accountManage->addUser->step2->name = 'Clic en Agregar usuario';
$lang->tutorial->accountManage->addUser->step2->desc = 'Haga clic para agregar usuarios de la empresa.';

$lang->tutorial->accountManage->addUser->step3 = new stdClass();
$lang->tutorial->accountManage->addUser->step3->name = 'Completar el formulario';

$lang->tutorial->accountManage->addUser->step4 = new stdClass();
$lang->tutorial->accountManage->addUser->step4->name = 'Guardar el formulario';
$lang->tutorial->accountManage->addUser->step4->desc = 'Después de guardar, podrá verlo en la lista de usuarios.';

$lang->tutorial->accountManage->privManage = new stdClass();
$lang->tutorial->accountManage->privManage->title = 'Gestión de permisos';

$lang->tutorial->accountManage->privManage->step1 = new stdClass();
$lang->tutorial->accountManage->privManage->step1->name = 'Clic en Permiso';
$lang->tutorial->accountManage->privManage->step1->desc = 'Aquí puede ver los miembros del grupo y gestionar sus permisos.';

$lang->tutorial->accountManage->privManage->step2 = new stdClass();
$lang->tutorial->accountManage->privManage->step2->name = 'Clic en Crear grupo';
$lang->tutorial->accountManage->privManage->step2->desc = 'Haga clic para agregar un nuevo grupo de miembros.';

$lang->tutorial->accountManage->privManage->step3 = new stdClass();
$lang->tutorial->accountManage->privManage->step3->name = 'Completar el formulario';

$lang->tutorial->accountManage->privManage->step4 = new stdClass();
$lang->tutorial->accountManage->privManage->step4->name = 'Guardar el formulario';
$lang->tutorial->accountManage->privManage->step4->desc = 'Después de guardar, podrá verlo en la lista de usuarios.';

$lang->tutorial->accountManage->privManage->step5 = new stdClass();
$lang->tutorial->accountManage->privManage->step5->name = 'Clic en Gestión de miembros';
$lang->tutorial->accountManage->privManage->step5->desc = 'Puede agregar miembros de la empresa al grupo de permisos para autorizaciones grupales futuras.';

$lang->tutorial->accountManage->privManage->step6 = new stdClass();
$lang->tutorial->accountManage->privManage->step6->name = 'Completar el formulario';

$lang->tutorial->accountManage->privManage->step7 = new stdClass();
$lang->tutorial->accountManage->privManage->step7->name = 'Guardar el formulario';
$lang->tutorial->accountManage->privManage->step7->desc = 'Después de guardar, podrá verlo en la lista de usuarios.';

$lang->tutorial->accountManage->privManage->step8 = new stdClass();
$lang->tutorial->accountManage->privManage->step8->name = 'Clic en Asignar permisos';
$lang->tutorial->accountManage->privManage->step8->desc = 'Haga clic para gestionar los permisos del grupo de usuarios.';

$lang->tutorial->accountManage->privManage->step9 = new stdClass();
$lang->tutorial->accountManage->privManage->step9->name = 'Clic en el botón Expandir del paquete de permisos';
$lang->tutorial->accountManage->privManage->step9->desc = 'Haga clic para ver los permisos del paquete de permisos.';

$lang->tutorial->accountManage->privManage->step10 = new stdClass();
$lang->tutorial->accountManage->privManage->step10->name = 'Guardar el formulario';
$lang->tutorial->accountManage->privManage->step10->desc = 'Después de guardar, los miembros de este grupo tendrán los permisos asignados.';

$lang->tutorial->productManage = new stdClass();
$lang->tutorial->productManage->title = 'Tutorial de gestión de productos';

$lang->tutorial->productManage->addProduct = new stdClass();
$lang->tutorial->productManage->addProduct->title = 'Mantenimiento del producto';

$lang->tutorial->productManage->addProduct->step1 = new stdClass();
$lang->tutorial->productManage->addProduct->step1->name = 'Clic en Crear producto';
$lang->tutorial->productManage->addProduct->step1->desc = 'Clic para agregar un producto';

$lang->tutorial->productManage->addProduct->step2 = new stdClass();
$lang->tutorial->productManage->addProduct->step2->name = 'Completar el formulario';

$lang->tutorial->productManage->addProduct->step3 = new stdClass();
$lang->tutorial->productManage->addProduct->step3->name = 'Guardar el formulario';
$lang->tutorial->productManage->addProduct->step3->desc = 'Después de guardar, podrá verlo en la lista de productos.';

$lang->tutorial->productManage->moduleManage = new stdClass();
$lang->tutorial->productManage->moduleManage->title = 'Mantenimiento de módulos del producto';

$lang->tutorial->productManage->moduleManage->step1 = new stdClass();
$lang->tutorial->productManage->moduleManage->step1->name = 'Clic en el nombre del producto';
$lang->tutorial->productManage->moduleManage->step1->desc = 'Haga clic para entrar al producto y ver información detallada.';

$lang->tutorial->productManage->moduleManage->step2 = new stdClass();
$lang->tutorial->productManage->moduleManage->step2->name = 'Clic en Definir módulo';
$lang->tutorial->productManage->moduleManage->step2->desc = 'Clic para gestionar los módulos del producto';

$lang->tutorial->productManage->moduleManage->step3 = new stdClass();
$lang->tutorial->productManage->moduleManage->step3->name = 'Completar el formulario';

$lang->tutorial->productManage->moduleManage->step4 = new stdClass();
$lang->tutorial->productManage->moduleManage->step4->name = 'Guardar el formulario';
$lang->tutorial->productManage->moduleManage->step4->desc = 'Después de guardar, podrá clasificar módulos al crear historias.';

$lang->tutorial->productManage->storyManage = new stdClass();
$lang->tutorial->productManage->storyManage->title = 'Gestión de historias';

$lang->tutorial->productManage->storyManage->step1 = new stdClass();
$lang->tutorial->productManage->storyManage->step1->name = 'Clic en Épica';
$lang->tutorial->productManage->storyManage->step1->desc = 'Aquí puede gestionar las épicas del producto.';

$lang->tutorial->productManage->storyManage->step2 = new stdClass();
$lang->tutorial->productManage->storyManage->step2->name = 'Clic en Crear épica';
$lang->tutorial->productManage->storyManage->step2->desc = 'Haga clic para crear épicas del producto.';

$lang->tutorial->productManage->storyManage->step3 = new stdClass();
$lang->tutorial->productManage->storyManage->step3->name = 'Completar el formulario';

$lang->tutorial->productManage->storyManage->step4 = new stdClass();
$lang->tutorial->productManage->storyManage->step4->name = 'Guardar el formulario';
$lang->tutorial->productManage->storyManage->step4->desc = 'Después de guardar, podrá verlo en la lista de épicas.';

$lang->tutorial->productManage->storyManage->step5 = new stdClass();
$lang->tutorial->productManage->storyManage->step5->name = 'Clic en Dividir épica';
$lang->tutorial->productManage->storyManage->step5->desc = 'Haga clic para dividir la épica en funcionalidades.';

$lang->tutorial->productManage->storyManage->step6 = new stdClass();
$lang->tutorial->productManage->storyManage->step6->name = 'Completar el formulario';

$lang->tutorial->productManage->storyManage->step7 = new stdClass();
$lang->tutorial->productManage->storyManage->step7->name = 'Guardar el formulario';
$lang->tutorial->productManage->storyManage->step7->desc = 'Después de guardar, podrá verlo en la lista de épicas.';

$lang->tutorial->productManage->storyManage->step8 = new stdClass();
$lang->tutorial->productManage->storyManage->step8->name = 'Clic en Dividir funcionalidad';
$lang->tutorial->productManage->storyManage->step8->desc = 'Haga clic para dividir la funcionalidad en historias.';

$lang->tutorial->productManage->storyManage->step9 = new stdClass();
$lang->tutorial->productManage->storyManage->step9->name = 'Completar el formulario';

$lang->tutorial->productManage->storyManage->step10 = new stdClass();
$lang->tutorial->productManage->storyManage->step10->name = 'Guardar el formulario';
$lang->tutorial->productManage->storyManage->step10->desc = 'Después de guardar, podrá verlo en la lista de historias.';

$lang->tutorial->productManage->storyManage->step11 = new stdClass();
$lang->tutorial->productManage->storyManage->step11->name = 'Clic en Revisión';
$lang->tutorial->productManage->storyManage->step11->desc = 'Haga clic para revisar las historias.';

$lang->tutorial->productManage->storyManage->step12 = new stdClass();
$lang->tutorial->productManage->storyManage->step12->name = 'Completar el formulario';

$lang->tutorial->productManage->storyManage->step13 = new stdClass();
$lang->tutorial->productManage->storyManage->step13->name = 'Guardar el formulario';
$lang->tutorial->productManage->storyManage->step13->desc = 'Después de guardar, el estado de la historia cambiará según el resultado de la revisión.';

$lang->tutorial->productManage->storyManage->step14 = new stdClass();
$lang->tutorial->productManage->storyManage->step14->name = 'Clic en Cambiar';
$lang->tutorial->productManage->storyManage->step14->desc = 'Haga clic para modificar las historias';

$lang->tutorial->productManage->storyManage->step15 = new stdClass();
$lang->tutorial->productManage->storyManage->step15->name = 'Completar el formulario';

$lang->tutorial->productManage->storyManage->step16 = new stdClass();
$lang->tutorial->productManage->storyManage->step16->name = 'Guardar el formulario';
$lang->tutorial->productManage->storyManage->step16->desc = 'Después de guardar, los cambios de la historia quedan completados.';

$lang->tutorial->productManage->storyManage->step17 = new stdClass();
$lang->tutorial->productManage->storyManage->step17->name = 'Clic en Matriz';
$lang->tutorial->productManage->storyManage->step17->desc = 'Aquí puede dar seguimiento al progreso de las historias.';

$lang->tutorial->productManage->planManage = new stdClass();
$lang->tutorial->productManage->planManage->title = 'Gestión de planes';

$lang->tutorial->productManage->planManage->step1 = new stdClass();
$lang->tutorial->productManage->planManage->step1->name = 'Clic en Plan';
$lang->tutorial->productManage->planManage->step1->desc = 'Aquí puede gestionar los planes del producto.';

$lang->tutorial->productManage->planManage->step2 = new stdClass();
$lang->tutorial->productManage->planManage->step2->name = 'Clic en Crear plan';
$lang->tutorial->productManage->planManage->step2->desc = 'Haga clic para crear un plan para el producto.';

$lang->tutorial->productManage->planManage->step3 = new stdClass();
$lang->tutorial->productManage->planManage->step3->name = 'Completar el formulario';

$lang->tutorial->productManage->planManage->step4 = new stdClass();
$lang->tutorial->productManage->planManage->step4->name = 'Guardar el formulario';
$lang->tutorial->productManage->planManage->step4->desc = 'Después de guardar, podrá verlo en la lista de planes.';

$lang->tutorial->productManage->planManage->step5 = new stdClass();
$lang->tutorial->productManage->planManage->step5->name = 'Clic en Nombre del plan';
$lang->tutorial->productManage->planManage->step5->desc = 'Haga clic para ver los detalles del plan y gestionar su información.';

$lang->tutorial->productManage->planManage->step6 = new stdClass();
$lang->tutorial->productManage->planManage->step6->name = 'Clic para vincular historia';
$lang->tutorial->productManage->planManage->step6->desc = 'Vincule al plan las historias planificadas.';

$lang->tutorial->productManage->planManage->step7 = new stdClass();
$lang->tutorial->productManage->planManage->step7->name = 'Verificar historias';

$lang->tutorial->productManage->planManage->step8 = new stdClass();
$lang->tutorial->productManage->planManage->step8->name = 'Clic en Vincular historia';
$lang->tutorial->productManage->planManage->step8->desc = 'Al hacer clic, las historias se vincularán correctamente al plan.';

$lang->tutorial->productManage->planManage->step9 = new stdClass();
$lang->tutorial->productManage->planManage->step9->name = 'Clic en Bug';
$lang->tutorial->productManage->planManage->step9->desc = 'Vincule los Bugs que se resolverán con este plan.';

$lang->tutorial->productManage->planManage->step10 = new stdClass();
$lang->tutorial->productManage->planManage->step10->name = 'Clic en Vincular Bug';
$lang->tutorial->productManage->planManage->step10->desc = 'Haga clic para vincular los Bugs que se resolverán con este plan.';

$lang->tutorial->productManage->planManage->step11 = new stdClass();
$lang->tutorial->productManage->planManage->step11->name = 'Verificar Bug';

$lang->tutorial->productManage->planManage->step12 = new stdClass();
$lang->tutorial->productManage->planManage->step12->name = 'Clic en Vincular Bug';
$lang->tutorial->productManage->planManage->step12->desc = 'Al hacer clic, los Bugs se vincularán correctamente al plan.';

$lang->tutorial->productManage->releaseManage = new stdClass();
$lang->tutorial->productManage->releaseManage->title = 'Gestión de lanzamientos';

$lang->tutorial->productManage->releaseManage->step1 = new stdClass();
$lang->tutorial->productManage->releaseManage->step1->name = 'Clic en Lanzamiento';
$lang->tutorial->productManage->releaseManage->step1->desc = 'Aquí puede gestionar la información de lanzamientos del producto.';

$lang->tutorial->productManage->releaseManage->step2 = new stdClass();
$lang->tutorial->productManage->releaseManage->step2->name = 'Clic en Crear lanzamiento';
$lang->tutorial->productManage->releaseManage->step2->desc = 'Haga clic para crear un lanzamiento para el producto.';

$lang->tutorial->productManage->releaseManage->step3 = new stdClass();
$lang->tutorial->productManage->releaseManage->step3->name = 'Completar el formulario';

$lang->tutorial->productManage->releaseManage->step4 = new stdClass();
$lang->tutorial->productManage->releaseManage->step4->name = 'Guardar el formulario';
$lang->tutorial->productManage->releaseManage->step4->desc = 'Después de guardar, podrá verlo en la lista de lanzamientos.';

$lang->tutorial->productManage->releaseManage->step5 = new stdClass();
$lang->tutorial->productManage->releaseManage->step5->name = 'Clic en Nombre del lanzamiento';
$lang->tutorial->productManage->releaseManage->step5->desc = 'Haga clic para entrar al lanzamiento, ver y gestionar su información detallada.';

$lang->tutorial->productManage->releaseManage->step6 = new stdClass();
$lang->tutorial->productManage->releaseManage->step6->name = 'Clic en Vincular historia';
$lang->tutorial->productManage->releaseManage->step6->desc = 'Haga clic para vincular las historias que se lanzarán esta vez.';

$lang->tutorial->productManage->releaseManage->step7 = new stdClass();
$lang->tutorial->productManage->releaseManage->step7->name = 'Verificar historias';

$lang->tutorial->productManage->releaseManage->step8 = new stdClass();
$lang->tutorial->productManage->releaseManage->step8->name = 'Clic en Vincular historia';
$lang->tutorial->productManage->releaseManage->step8->desc = 'Al hacer clic, las historias se vincularán correctamente al lanzamiento.';

$lang->tutorial->productManage->releaseManage->step9 = new stdClass();
$lang->tutorial->productManage->releaseManage->step9->name = 'Clic en Bug corregido';
$lang->tutorial->productManage->releaseManage->step9->desc = 'Haga clic para ver y gestionar los Bugs resueltos en este lanzamiento.';

$lang->tutorial->productManage->releaseManage->step10 = new stdClass();
$lang->tutorial->productManage->releaseManage->step10->name = 'Clic en Vincular Bug';
$lang->tutorial->productManage->releaseManage->step10->desc = 'Haga clic para vincular al lanzamiento los Bugs resueltos en este lanzamiento.';

$lang->tutorial->productManage->releaseManage->step11 = new stdClass();
$lang->tutorial->productManage->releaseManage->step11->name = 'Verificar Bugs';

$lang->tutorial->productManage->releaseManage->step12 = new stdClass();
$lang->tutorial->productManage->releaseManage->step12->name = 'Clic en Vincular Bug';
$lang->tutorial->productManage->releaseManage->step12->desc = 'Al hacer clic, los Bugs se vincularán correctamente al lanzamiento.';

$lang->tutorial->productManage->releaseManage->step13 = new stdClass();
$lang->tutorial->productManage->releaseManage->step13->name = 'Clic en Activar Bug';
$lang->tutorial->productManage->releaseManage->step13->desc = 'Haga clic para ver y gestionar los Bugs sin resolver en este lanzamiento.';

$lang->tutorial->productManage->releaseManage->step14 = new stdClass();
$lang->tutorial->productManage->releaseManage->step14->name = 'Clic en Vincular Bug';
$lang->tutorial->productManage->releaseManage->step14->desc = 'Haga clic para vincular al lanzamiento los Bugs que siguen sin resolver en este lanzamiento.';

$lang->tutorial->productManage->releaseManage->step15 = new stdClass();
$lang->tutorial->productManage->releaseManage->step15->name = 'Verificar Bugs';

$lang->tutorial->productManage->releaseManage->step16 = new stdClass();
$lang->tutorial->productManage->releaseManage->step16->name = 'Clic en Vincular Bug';
$lang->tutorial->productManage->releaseManage->step16->desc = 'Al hacer clic, los Bugs se vincularán correctamente al lanzamiento.';

$lang->tutorial->productManage->releaseManage->step17 = new stdClass();
$lang->tutorial->productManage->releaseManage->step17->name = 'Clic en Publicar';
$lang->tutorial->productManage->releaseManage->step17->desc = 'Haga clic para continuar con el lanzamiento.';

$lang->tutorial->productManage->releaseManage->step18 = new stdClass();
$lang->tutorial->productManage->releaseManage->step18->name = 'Completar el formulario';

$lang->tutorial->productManage->releaseManage->step19 = new stdClass();
$lang->tutorial->productManage->releaseManage->step19->name = 'Guardar el formulario';
$lang->tutorial->productManage->releaseManage->step19->desc = 'Después de guardar, las historias cambiarán de etapa según el estado del lanzamiento.';

$lang->tutorial->productManage->releaseManage->step20 = new stdClass();
$lang->tutorial->productManage->releaseManage->step20->name = 'Clic en Gestionar aplicación';
$lang->tutorial->productManage->releaseManage->step20->desc = 'Aquí puede mantener y gestionar la información de las aplicaciones del producto.';

$lang->tutorial->productManage->releaseManage->step21 = new stdClass();
$lang->tutorial->productManage->releaseManage->step21->name = 'Clic en Crear aplicación';
$lang->tutorial->productManage->releaseManage->step21->desc = 'Haga clic para crear una aplicación para el producto. ';

$lang->tutorial->productManage->releaseManage->step22 = new stdClass();
$lang->tutorial->productManage->releaseManage->step22->name = 'Completar el formulario';

$lang->tutorial->productManage->releaseManage->step23 = new stdClass();
$lang->tutorial->productManage->releaseManage->step23->name = 'Guardar el formulario';
$lang->tutorial->productManage->releaseManage->step23->desc = 'Después de guardar, podrá verlo en la lista de aplicaciones.';

$lang->tutorial->productManage->releaseManage->step24 = new stdClass();
$lang->tutorial->productManage->releaseManage->step24->name = 'Clic en Volver';
$lang->tutorial->productManage->releaseManage->step24->desc = 'Haga clic para volver a la página anterior. ';

$lang->tutorial->productManage->lineManage = new stdClass();
$lang->tutorial->productManage->lineManage->title = 'Gestión de líneas de producto';

$lang->tutorial->productManage->lineManage->step1 = new stdClass();
$lang->tutorial->productManage->lineManage->step1->name = 'Clic en Producto';
$lang->tutorial->productManage->lineManage->step1->desc = 'Aquí puede mantener y gestionar productos.';

$lang->tutorial->productManage->lineManage->step2 = new stdClass();
$lang->tutorial->productManage->lineManage->step2->name = 'Clic en Línea de producto';
$lang->tutorial->productManage->lineManage->step2->desc = 'Haga clic para gestionar las líneas de producto.';

$lang->tutorial->productManage->lineManage->step3 = new stdClass();
$lang->tutorial->productManage->lineManage->step3->name = 'Completar el formulario';

$lang->tutorial->productManage->lineManage->step4 = new stdClass();
$lang->tutorial->productManage->lineManage->step4->name = 'Guardar el formulario';
$lang->tutorial->productManage->lineManage->step4->desc = 'Después de guardar, podrá elegir la línea de producto correspondiente al gestionar productos.';

$lang->tutorial->productManage->branchManage = new stdClass();
$lang->tutorial->productManage->branchManage->title = 'Gestión de múltiples ramas/plataformas';

$lang->tutorial->productManage->branchManage->step1 = new stdClass();
$lang->tutorial->productManage->branchManage->step1->name = 'Clic en Producto';
$lang->tutorial->productManage->branchManage->step1->desc = 'Aquí puede mantener y gestionar productos.';

$lang->tutorial->productManage->branchManage->step2 = new stdClass();
$lang->tutorial->productManage->branchManage->step2->name = 'Clic en Crear producto';
$lang->tutorial->productManage->branchManage->step2->desc = 'Haga clic para agregar un producto.';

$lang->tutorial->productManage->branchManage->step3 = new stdClass();
$lang->tutorial->productManage->branchManage->step3->name = 'Completar el formulario';

$lang->tutorial->productManage->branchManage->step4 = new stdClass();
$lang->tutorial->productManage->branchManage->step4->name = 'Guardar el formulario';

$lang->tutorial->productManage->branchManage->step5 = new stdClass();
$lang->tutorial->productManage->branchManage->step5->name = 'Clic en Configuración';
$lang->tutorial->productManage->branchManage->step5->desc = 'Haga clic para gestionar la información del producto.';

$lang->tutorial->productManage->branchManage->step6 = new stdClass();
$lang->tutorial->productManage->branchManage->step6->name = 'Clic en Rama';
$lang->tutorial->productManage->branchManage->step6->desc = 'Haga clic para gestionar las ramas del producto.';

$lang->tutorial->productManage->branchManage->step7 = new stdClass();
$lang->tutorial->productManage->branchManage->step7->name = 'Clic en Crear rama';
$lang->tutorial->productManage->branchManage->step7->desc = 'Haga clic para agregar una nueva rama al producto.';

$lang->tutorial->productManage->branchManage->step8 = new stdClass();
$lang->tutorial->productManage->branchManage->step8->name = 'Completar el formulario';

$lang->tutorial->productManage->branchManage->step9 = new stdClass();
$lang->tutorial->productManage->branchManage->step9->name = 'Guardar el formulario';
$lang->tutorial->productManage->branchManage->step9->desc = 'Después de guardar, podrá ver las ramas en la lista de ramas.';

$lang->tutorial->productManage->branchManage->step10 = new stdClass();
$lang->tutorial->productManage->branchManage->step10->name = 'Verificar la rama';

$lang->tutorial->productManage->branchManage->step11 = new stdClass();
$lang->tutorial->productManage->branchManage->step11->name = 'Clic en Fusionar';

$lang->tutorial->productManage->branchManage->step12 = new stdClass();
$lang->tutorial->productManage->branchManage->step12->name = 'Seleccionar una rama';

$lang->tutorial->productManage->branchManage->step13 = new stdClass();
$lang->tutorial->productManage->branchManage->step13->name = 'Guardar el formulario';
$lang->tutorial->productManage->branchManage->step13->desc = 'Después de guardar, todos los elementos de la rama (como lanzamientos, planes, versiones, módulos, historias, Bugs y casos de prueba) se fusionan en la nueva rama.';

$lang->tutorial->productManage->branchManage->step14 = new stdClass();
$lang->tutorial->productManage->branchManage->step14->name = 'Clic en Historia de I+D';
$lang->tutorial->productManage->branchManage->step14->desc = 'Aquí puede gestionar las historias de I+D del producto.';

$lang->tutorial->productManage->branchManage->step15 = new stdClass();
$lang->tutorial->productManage->branchManage->step15->name = 'Clic en Crear historia';
$lang->tutorial->productManage->branchManage->step15->desc = 'Haga clic para crear una historia gemela.';

$lang->tutorial->productManage->branchManage->step16 = new stdClass();
$lang->tutorial->productManage->branchManage->step16->name = 'Completar el formulario';

$lang->tutorial->productManage->branchManage->step17 = new stdClass();
$lang->tutorial->productManage->branchManage->step17->name = 'Guardar el formulario';
$lang->tutorial->productManage->branchManage->step17->desc = 'Después de guardar, cada rama tendrá una historia correspondiente y estas historias serán gemelas. Las historias gemelas se mantendrán sincronizadas, excepto en los campos de producto, rama, módulo, plan y etapa. Puede desvincular las historias gemelas en la página de detalles de la historia.';

$lang->tutorial->programManage = new stdClass();
$lang->tutorial->programManage->title = 'Tutorial de gestión del portafolio de programas';

$lang->tutorial->programManage->addProgram = new stdClass();
$lang->tutorial->programManage->addProgram->title = 'Agregar programas';

$lang->tutorial->programManage->addProgram->step1 = new stdClass();
$lang->tutorial->programManage->addProgram->step1->name = 'Clic en Programa';
$lang->tutorial->programManage->addProgram->step1->desc = 'Aquí puede gestionar los portafolios de programas.';

$lang->tutorial->programManage->addProgram->step2 = new stdClass();
$lang->tutorial->programManage->addProgram->step2->name = 'Clic en Crear programa';
$lang->tutorial->programManage->addProgram->step2->desc = 'Haga clic para agregar un nuevo programa.';

$lang->tutorial->programManage->addProgram->step3 = new stdClass();
$lang->tutorial->programManage->addProgram->step3->name = 'Completar el formulario';

$lang->tutorial->programManage->addProgram->step4 = new stdClass();
$lang->tutorial->programManage->addProgram->step4->name = 'Guardar el formulario';
$lang->tutorial->programManage->addProgram->step4->desc = 'Después de guardar, podrá verlo en las listas de proyectos y de productos.';

$lang->tutorial->programManage->addProgram->step5 = new stdClass();
$lang->tutorial->programManage->addProgram->step5->name = 'Clic en Crear proyecto';
$lang->tutorial->programManage->addProgram->step5->desc = 'Haga clic para gestionar los proyectos del portafolio de programas.';

$lang->tutorial->programManage->addProgram->step6 = new stdClass();
$lang->tutorial->programManage->addProgram->step6->name = 'Clic en Scrum';
$lang->tutorial->programManage->addProgram->step6->desc = 'Aquí puede agregar proyectos a este portafolio de programas.';

$lang->tutorial->programManage->addProgram->step7 = new stdClass();
$lang->tutorial->programManage->addProgram->step7->name = 'Completar el formulario';

$lang->tutorial->programManage->addProgram->step8 = new stdClass();
$lang->tutorial->programManage->addProgram->step8->name = 'Guardar el formulario';
$lang->tutorial->programManage->addProgram->step8->desc = 'Al guardar, podrá verlo en la lista de proyectos.';

$lang->tutorial->programManage->addProgram->step9 = new stdClass();
$lang->tutorial->programManage->addProgram->step9->name = 'Clic en Vista de producto';
$lang->tutorial->programManage->addProgram->step9->desc = 'Aquí puede ver y gestionar la relación entre programas y productos.';

$lang->tutorial->programManage->addProgram->step10 = new stdClass();
$lang->tutorial->programManage->addProgram->step10->name = 'Clic en Expandir';

$lang->tutorial->programManage->addProgram->step11 = new stdClass();
$lang->tutorial->programManage->addProgram->step11->name = 'Clic en Crear producto';
$lang->tutorial->programManage->addProgram->step11->desc = 'Haga clic para gestionar los productos del portafolio de programas.';

$lang->tutorial->programManage->addProgram->step12 = new stdClass();
$lang->tutorial->programManage->addProgram->step12->name = 'Completar el formulario';

$lang->tutorial->programManage->addProgram->step13 = new stdClass();
$lang->tutorial->programManage->addProgram->step13->name = 'Guardar el formulario';
$lang->tutorial->programManage->addProgram->step13->desc = 'Al guardar, podrá verlo en la lista de productos.';

$lang->tutorial->programManage->whitelistManage = new stdClass();
$lang->tutorial->programManage->whitelistManage->title = 'Gestión de lista blanca';

$lang->tutorial->programManage->whitelistManage->step1 = new stdClass();
$lang->tutorial->programManage->whitelistManage->step1->name = 'Clic en Nombre del programa';
$lang->tutorial->programManage->whitelistManage->step1->desc = 'Haga clic para entrar al portafolio de programas y ver información detallada.';

$lang->tutorial->programManage->whitelistManage->step2 = new stdClass();
$lang->tutorial->programManage->whitelistManage->step2->name = 'Clic en Miembro';
$lang->tutorial->programManage->whitelistManage->step2->desc = 'Haga clic para ver el personal involucrado en el programa, el personal con acceso y la información de la lista blanca.';

$lang->tutorial->programManage->whitelistManage->step3 = new stdClass();
$lang->tutorial->programManage->whitelistManage->step3->name = 'Clic en Lista blanca';
$lang->tutorial->programManage->whitelistManage->step3->desc = 'Haga clic para gestionar la lista blanca del portafolio de programas.';

$lang->tutorial->programManage->whitelistManage->step4 = new stdClass();
$lang->tutorial->programManage->whitelistManage->step4->name = 'Clic en Agregar lista blanca';
$lang->tutorial->programManage->whitelistManage->step4->desc = 'Haga clic para gestionar al personal de la lista blanca.';

$lang->tutorial->programManage->whitelistManage->step5 = new stdClass();
$lang->tutorial->programManage->whitelistManage->step5->name = 'Completar el formulario';

$lang->tutorial->programManage->whitelistManage->step6 = new stdClass();
$lang->tutorial->programManage->whitelistManage->step6->name = 'Guardar el formulario';
$lang->tutorial->programManage->whitelistManage->step6->desc = 'Al guardar, el personal de la lista blanca podrá ver el portafolio de programas.';

$lang->tutorial->programManage->addStakeholder = new stdClass();
$lang->tutorial->programManage->addStakeholder->title = 'Crear interesados';

$lang->tutorial->programManage->addStakeholder->step1 = new stdClass();
$lang->tutorial->programManage->addStakeholder->step1->name = 'Clic en Interesado';
$lang->tutorial->programManage->addStakeholder->step1->desc = 'Haga clic para gestionar los interesados del portafolio de programas.';

$lang->tutorial->programManage->addStakeholder->step2 = new stdClass();
$lang->tutorial->programManage->addStakeholder->step2->name = 'Clic en Crear interesado';
$lang->tutorial->programManage->addStakeholder->step2->desc = 'Haga clic para agregar interesados internos y externos del portafolio de programas.';

$lang->tutorial->programManage->addStakeholder->step3 = new stdClass();
$lang->tutorial->programManage->addStakeholder->step3->name = 'Completar el formulario';

$lang->tutorial->programManage->addStakeholder->step4 = new stdClass();
$lang->tutorial->programManage->addStakeholder->step4->name = 'Guardar el formulario';
$lang->tutorial->programManage->addStakeholder->step4->desc = 'Al guardar, los interesados podrán ver el portafolio de programas.';

$lang->tutorial->feedbackManage = new stdClass();
$lang->tutorial->feedbackManage->title = 'Tutorial de gestión de retroalimentación';

$lang->tutorial->feedbackManage->feedback = new stdClass();
$lang->tutorial->feedbackManage->feedback->title = 'Gestión de retroalimentación';

$lang->tutorial->feedbackManage->feedback->step1 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step1->name = 'Clic en Retroalimentación';
$lang->tutorial->feedbackManage->feedback->step1->desc = 'Aquí puede agregar y gestionar entradas de retroalimentación.';

$lang->tutorial->feedbackManage->feedback->step2 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step2->name = 'Clic en Crear retroalimentación';
$lang->tutorial->feedbackManage->feedback->step2->desc = 'Haga clic para enviar retroalimentación sobre un producto específico.';

$lang->tutorial->feedbackManage->feedback->step3 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step3->name = 'Completar el formulario';

$lang->tutorial->feedbackManage->feedback->step4 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step4->name = 'Guardar el formulario';
$lang->tutorial->feedbackManage->feedback->step4->desc = 'Al guardar, la retroalimentación se listará para su seguimiento y avance del procesamiento.';

$lang->tutorial->feedbackManage->feedback->step5 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step5->name = 'Clic en Revisión';
$lang->tutorial->feedbackManage->feedback->step5->desc = 'Haga clic para revisar y evaluar la retroalimentación.';

$lang->tutorial->feedbackManage->feedback->step6 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step6->name = 'Completar el formulario';

$lang->tutorial->feedbackManage->feedback->step7 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step7->name = 'Guardar el formulario';
$lang->tutorial->feedbackManage->feedback->step7->desc = 'Al guardar el formulario de revisión se actualizará el estado de la entrada de retroalimentación en consecuencia.';

$lang->tutorial->feedbackManage->feedback->step8 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step8->name = 'Clic en Convertir en Bug';
$lang->tutorial->feedbackManage->feedback->step8->desc = 'Haga clic para elegir el método de gestión de la retroalimentación.';

$lang->tutorial->feedbackManage->feedback->step9 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step9->name = 'Completar el formulario';

$lang->tutorial->feedbackManage->feedback->step10 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step10->name = 'Guardar el formulario';
$lang->tutorial->feedbackManage->feedback->step10->desc = 'Al guardar, el estado de la entrada de retroalimentación cambiará a "En progreso". El estado se actualizará a "Resuelto" cuando se completen las tareas o historias relacionadas.';

$lang->tutorial->feedbackManage->feedback->step11 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step11->name = 'Cerrar retroalimentación';
$lang->tutorial->feedbackManage->feedback->step11->desc = 'Haga clic para cerrar la retroalimentación resuelta y marcarla como completada.';

$lang->tutorial->feedbackManage->feedback->step12 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step12->name = 'Completar el formulario';

$lang->tutorial->feedbackManage->feedback->step13 = new stdClass();
$lang->tutorial->feedbackManage->feedback->step13->name = 'Guardar el formulario';

$lang->tutorial->docManage = new stdClass();
$lang->tutorial->docManage->title = 'Tutorial de gestión de documentos';

$lang->tutorial->docManage->step1 = new stdClass();
$lang->tutorial->docManage->step1->name = 'Clic en Documento';
$lang->tutorial->docManage->step1->desc = 'Aquí puede gestionar documentos de productos, proyectos, equipos y personales.';

$lang->tutorial->docManage->step2 = new stdClass();
$lang->tutorial->docManage->step2->name = 'Clic en Espacio del equipo';
$lang->tutorial->docManage->step2->desc = 'Los espacios de producto gestionan los documentos de cada producto y los espacios de proyecto gestionan los de cada proyecto. Los espacios de equipo son para los documentos de los equipos de la organización, y los espacios de API están dedicados a la documentación de API. Haga clic en Espacio de equipo para ingresar.';

$lang->tutorial->docManage->step3 = new stdClass();
$lang->tutorial->docManage->step3->name = 'Clic en Más';

$lang->tutorial->docManage->step4 = new stdClass();
$lang->tutorial->docManage->step4->name = 'Clic en Crear espacio';

$lang->tutorial->docManage->step5 = new stdClass();
$lang->tutorial->docManage->step5->name = 'Completar el formulario';

$lang->tutorial->docManage->step6 = new stdClass();
$lang->tutorial->docManage->step6->name = 'Guardar el formulario';
$lang->tutorial->docManage->step6->desc = 'Después de guardar, podrá gestionar bibliotecas y documentos en el espacio.';

$lang->tutorial->docManage->step7 = new stdClass();
$lang->tutorial->docManage->step7->name = 'Clic en Crear biblioteca';
$lang->tutorial->docManage->step7->desc = 'Haga clic para crear una biblioteca de documentos.';

$lang->tutorial->docManage->step8 = new stdClass();
$lang->tutorial->docManage->step8->name = 'Completar el formulario';

$lang->tutorial->docManage->step9 = new stdClass();
$lang->tutorial->docManage->step9->name = 'Guardar el formulario';
$lang->tutorial->docManage->step9->desc = 'Después de guardar, podrá verlo en el árbol de navegación de la izquierda.';

$lang->tutorial->docManage->step10 = new stdClass();
$lang->tutorial->docManage->step10->name = 'Pase el cursor y haga clic en Más.';

$lang->tutorial->docManage->step11 = new stdClass();
$lang->tutorial->docManage->step11->name = 'Clic en Agregar directorio';
$lang->tutorial->docManage->step11->desc = 'Haga clic para agregar directorios a la biblioteca de documentos.';

$lang->tutorial->docManage->step12 = new stdClass();
$lang->tutorial->docManage->step12->name = 'Ingrese el nombre del directorio';

$lang->tutorial->docManage->step13 = new stdClass();
$lang->tutorial->docManage->step13->name = 'Clic en Crear documento';
$lang->tutorial->docManage->step13->desc = 'Haga clic para crear un documento.';

$lang->tutorial->docManage->step14 = new stdClass();
$lang->tutorial->docManage->step14->name = 'Completar el formulario';

$lang->tutorial->docManage->step15 = new stdClass();
$lang->tutorial->docManage->step15->name = 'Clic en Publicar';

$lang->tutorial->docManage->step16 = new stdClass();
$lang->tutorial->docManage->step16->name = 'Completar el formulario';

$lang->tutorial->docManage->step17 = new stdClass();
$lang->tutorial->docManage->step17->name = 'Guardar y publicar';
$lang->tutorial->docManage->step17->desc = 'Después de guardar, podrá verlo en la lista de documentos.';

$lang->tutorial->docManage->step18 = new stdClass();
$lang->tutorial->docManage->step18->name = 'Clic en Título del documento';
$lang->tutorial->docManage->step18->desc = 'Haga clic para ver los detalles del documento; permite marcarlo como favorito, editarlo, exportarlo y ver el historial y la información de actualización del documento.';

$lang->tutorial->docManage->step19 = new stdClass();
$lang->tutorial->docManage->step19->name = 'Clic en Editar';
$lang->tutorial->docManage->step19->desc = 'Haga clic para editar el contenido del documento.';

$lang->tutorial->docManage->step20 = new stdClass();
$lang->tutorial->docManage->step20->name = 'Editar documento';

$lang->tutorial->docManage->step21 = new stdClass();
$lang->tutorial->docManage->step21->name = 'Clic en Publicar';
$lang->tutorial->docManage->step21->desc = 'Haga clic para guardar el contenido editado.';

$lang->tutorial->docManage->step22 = new stdClass();
$lang->tutorial->docManage->step22->name = 'Clic en Versiones';
$lang->tutorial->docManage->step22->desc = 'Aquí puede cambiar las versiones del documento para ver el historial de versiones.';

$lang->tutorial->docManage->step23 = new stdClass();
$lang->tutorial->docManage->step23->name = 'Clic en Versión #1';
$lang->tutorial->docManage->step23->desc = 'Haga clic para ver el contenido del documento de la Versión #1.';

$lang->tutorial->orTutorial = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->title = 'Tutorial de gestión del pool de historias';

$lang->tutorial->orTutorial->demandpoolManage->demandManage = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->title = 'Gestión de historias';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step1 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step1->name = 'Clic en Crear historia';
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step1->desc = 'Clic para crear una nueva historia';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step2 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step2->name = 'Completar el formulario';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step3 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step3->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step3->desc = 'Después de guardar, podrá ver la demanda en la lista de historias.';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step4 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step4->name = 'Clic en Revisión';
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step4->desc = 'Clic para revisar la historia';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step5 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step5->name = 'Completar el formulario';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step6 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step6->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step6->desc = 'Después de guardar, el estado de la demanda cambia según el resultado de la revisión.';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step7 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step7->name = 'Clic en Cambiar';
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step7->desc = 'Haga clic para modificar la historia.';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step8 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step8->name = 'Completar el formulario';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step9 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step9->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step9->desc = 'Después de guardar, los cambios de la historia quedan completados.';

$lang->tutorial->orTutorial->demandpoolManage->demandManage->step10 = new stdClass();
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step10->name = 'Clic en Seguimiento';
$lang->tutorial->orTutorial->demandpoolManage->demandManage->step10->desc = 'Aquí puede hacer seguimiento del avance de las historias.';

$lang->tutorial->orTutorial->marketManage = new stdClass();
$lang->tutorial->orTutorial->marketManage->title = 'Tutorial de gestión de mercado';

$lang->tutorial->orTutorial->marketManage->researchManage = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->title = 'Gestión de investigación';

$lang->tutorial->orTutorial->marketManage->researchManage->step1 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step1->name = 'Clic en Mercado';
$lang->tutorial->orTutorial->marketManage->researchManage->step1->desc = 'Aquí puede gestionar las actividades de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step2 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step2->name = 'Clic en Investigación';
$lang->tutorial->orTutorial->marketManage->researchManage->step2->desc = 'Aquí puede gestionar las actividades de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step3 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step3->name = 'Clic en Crear';
$lang->tutorial->orTutorial->marketManage->researchManage->step3->desc = 'Haga clic para iniciar una actividad de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step4 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step4->name = 'Completar el formulario';

$lang->tutorial->orTutorial->marketManage->researchManage->step5 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step5->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->marketManage->researchManage->step5->desc = 'Después de guardar, podrá verlo en la lista de investigaciones.';

$lang->tutorial->orTutorial->marketManage->researchManage->step6 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step6->name = 'Clic en Nombre de la investigación';
$lang->tutorial->orTutorial->marketManage->researchManage->step6->desc = 'Haga clic para gestionar las actividades de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step7 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step7->name = 'Clic en Crear etapa';
$lang->tutorial->orTutorial->marketManage->researchManage->step7->desc = 'Haga clic para definir la etapa de la actividad de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step8 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step8->name = 'Completar el formulario';

$lang->tutorial->orTutorial->marketManage->researchManage->step9 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step9->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->marketManage->researchManage->step9->desc = 'Después de guardar, podrá verlo en la lista de tareas de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step10 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step10->name = 'Clic en Crear tarea';
$lang->tutorial->orTutorial->marketManage->researchManage->step10->desc = 'Haga clic para crear tareas para la actividad de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step11 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step11->name = 'Completar el formulario';

$lang->tutorial->orTutorial->marketManage->researchManage->step12 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step12->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->marketManage->researchManage->step12->desc = 'Después de guardar, podrá verlo en la lista de tareas de investigación.';

$lang->tutorial->orTutorial->marketManage->researchManage->step13 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step13->name = 'Iniciar tarea';
$lang->tutorial->orTutorial->marketManage->researchManage->step13->desc = 'Inicie tareas aquí y registre el costo y las horas restantes.';

$lang->tutorial->orTutorial->marketManage->researchManage->step14 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step14->name = 'Completar el formulario';

$lang->tutorial->orTutorial->marketManage->researchManage->step15 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step15->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->marketManage->researchManage->step15->desc = 'El estado de la tarea cambiará a "En curso" después de guardar.';

$lang->tutorial->orTutorial->marketManage->researchManage->step16 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step16->name = 'Clic en Esfuerzo';
$lang->tutorial->orTutorial->marketManage->researchManage->step16->desc = 'Haga clic para registrar esfuerzo de la tarea.';

$lang->tutorial->orTutorial->marketManage->researchManage->step17 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step17->name = 'Completar el formulario';

$lang->tutorial->orTutorial->marketManage->researchManage->step18 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step18->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->marketManage->researchManage->step18->desc = 'Las horas de la tarea se actualizarán según los registros después de guardar.';

$lang->tutorial->orTutorial->marketManage->researchManage->step19 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step19->name = 'Completar tarea';
$lang->tutorial->orTutorial->marketManage->researchManage->step19->desc = 'Haga clic para completar la tarea.';

$lang->tutorial->orTutorial->marketManage->researchManage->step20 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step20->name = 'Completar el formulario';

$lang->tutorial->orTutorial->marketManage->researchManage->step21 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step21->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->marketManage->researchManage->step21->desc = 'El estado de la tarea cambiará a "Completada" después de guardar.';

$lang->tutorial->orTutorial->marketManage->researchManage->step22 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step22->name = 'Cerrar tarea';
$lang->tutorial->orTutorial->marketManage->researchManage->step22->desc = 'Haga clic para cerrar la tarea completada.';

$lang->tutorial->orTutorial->marketManage->researchManage->step23 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step23->name = 'Completar el formulario';

$lang->tutorial->orTutorial->marketManage->researchManage->step24 = new stdClass();
$lang->tutorial->orTutorial->marketManage->researchManage->step24->name = 'Guardar el formulario';
$lang->tutorial->orTutorial->marketManage->researchManage->step24->desc = 'El estado de la tarea cambiará a "Cerrada" después de guardar.';

$lang->tutorial->orTutorial->roadmapManage = new stdClass();
$lang->tutorial->orTutorial->roadmapManage->title = 'Tutorial de gestión de la hoja de ruta de producto';

$lang->tutorial->orTutorial->roadmapManage->lineManage = new stdClass();
$lang->tutorial->orTutorial->roadmapManage->lineManage = clone $lang->tutorial->productManage->lineManage;

$lang->tutorial->orTutorial->roadmapManage->addProduct = new stdClass();
$lang->tutorial->orTutorial->roadmapManage->addProduct = clone $lang->tutorial->productManage->addProduct;

$lang->tutorial->orTutorial->roadmapManage->moduleManage = new stdClass();
$lang->tutorial->orTutorial->roadmapManage->moduleManage = clone $lang->tutorial->productManage->moduleManage;

$lang->tutorial->orTutorial->roadmapManage->storyManage = new stdClass();
$lang->tutorial->orTutorial->roadmapManage->storyManage = clone $lang->tutorial->productManage->storyManage;

$lang->tutorial->orTutorial->roadmapManage->branchManage = new stdClass();
$lang->tutorial->orTutorial->roadmapManage->branchManage = clone $lang->tutorial->productManage->branchManage;

$lang->tutorial->orTutorial->charterManage = new stdClass();
$lang->tutorial->orTutorial->charterManage->title = 'Tutorial del acta de constitución del proyecto';

$lang->tutorial->orTutorial->charterManage->step1 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step1->name = "Clic en Acta de constitución";
$lang->tutorial->orTutorial->charterManage->step1->desc = "Aquí puede gestionar el inicio del Acta de constitución";

$lang->tutorial->orTutorial->charterManage->step2 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step2->name = "Clic en Crear acta de constitución";
$lang->tutorial->orTutorial->charterManage->step2->desc = "Clic para enviar la solicitud de inicio del acta de constitución";

$lang->tutorial->orTutorial->charterManage->step3 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step3->name = "Completar el formulario";

$lang->tutorial->orTutorial->charterManage->step4 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step4->name = "Guardar el formulario";
$lang->tutorial->orTutorial->charterManage->step4->desc = "Después de guardar, siga el progreso de la solicitud en la lista de inicios";

$lang->tutorial->orTutorial->charterManage->step5 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step5->name = "Clic en Resultado de la revisión";
$lang->tutorial->orTutorial->charterManage->step5->desc = "Clic para revisar la solicitud de inicio";

$lang->tutorial->orTutorial->charterManage->step6 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step6->name = "Completar el formulario";

$lang->tutorial->orTutorial->charterManage->step7 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step7->name = "Guardar el formulario";
$lang->tutorial->orTutorial->charterManage->step7->desc = "Después de guardar, el estado del inicio se actualizará según los resultados de la revisión.";

$lang->tutorial->orTutorial->charterManage->step8 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step8->name = "Clic en Cerrar";
$lang->tutorial->orTutorial->charterManage->step8->desc = "Haga clic en el botón de cerrar para finalizar el acta de constitución una vez completada.";

$lang->tutorial->orTutorial->charterManage->step9 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step9->name = "Completar el formulario";

$lang->tutorial->orTutorial->charterManage->step10 = new stdClass();
$lang->tutorial->orTutorial->charterManage->step10->name = "Guardar el formulario";
$lang->tutorial->orTutorial->charterManage->step10->desc = 'Después de guardar, el estado del inicio cambiará a "Cerrado".';
