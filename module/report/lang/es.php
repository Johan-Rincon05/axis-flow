<?php
/**
 * The report module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     report
 * @version     $Id: en.php 5080 2013-07-10 00:46:59Z wyd621@gmail.com $
 * @link        https://www.zentao.net
 */
$lang->report->index     = 'Inicio de informes';
$lang->report->list      = 'Tabla dinámica';
$lang->report->item      = 'Elemento';
$lang->report->value     = 'Valor';
$lang->report->percent   = '%';
$lang->report->undefined = 'Indefinido';
$lang->report->project   = $lang->projectCommon;
$lang->report->PO        = 'PO';

$lang->report->colors[] = 'AFD8F8';
$lang->report->colors[] = 'F6BD0F';
$lang->report->colors[] = '8BBA00';
$lang->report->colors[] = 'FF8E46';
$lang->report->colors[] = '008E8E';
$lang->report->colors[] = 'D64646';
$lang->report->colors[] = '8E468E';
$lang->report->colors[] = '588526';
$lang->report->colors[] = 'B3AA00';
$lang->report->colors[] = '008ED6';
$lang->report->colors[] = '9D080D';
$lang->report->colors[] = 'A186BE';

$lang->report->assign['noassign'] = 'Sin asignar';
$lang->report->assign['assign']   = 'Asignado';

$lang->report->singleColor[] = 'F6BD0F';

$lang->report->projectDeviation = "Desviación de {$lang->execution->common}";
$lang->report->productSummary   = $lang->productCommon . ' Resumen';
$lang->report->bugCreate        = 'Resumen de Bugs reportados';
$lang->report->bugAssign        = 'Resumen de Bugs asignados';
$lang->report->workload         = 'Resumen de carga de trabajo del equipo';
$lang->report->workloadAB       = 'Carga de trabajo';
$lang->report->bugOpenedDate    = 'Bug reportado desde';
$lang->report->beginAndEnd      = ' Desde';
$lang->report->begin            = ' Inicio';
$lang->report->end              = ' Fin';
$lang->report->dept             = 'Departamento';
$lang->report->deviationChart   = "Gráfico de desviación de {$lang->projectCommon}";

$lang->report->id            = 'ID';
$lang->report->execution     = $lang->execution->common;
$lang->report->product       = $lang->productCommon;
$lang->report->user          = 'Usuario';
$lang->report->bugTotal      = 'Bug';
$lang->report->task          = 'Tarea';
$lang->report->estimate      = 'Estimaciones';
$lang->report->consumed      = 'Costo';
$lang->report->remain        = 'Izquierda';
$lang->report->deviation     = 'Desviación';
$lang->report->deviationRate = 'Tasa de desviación';
$lang->report->total         = 'Total';
$lang->report->to            = 'to';
$lang->report->taskTotal     = "Total de tareas";
$lang->report->manhourTotal  = "Total de horas";
$lang->report->validRate     = "Tasa de validez";
$lang->report->validRateTips = "La resolución es Resuelto/Pospuesto o el estado es Resuelto/Cerrado.";
$lang->report->unplanned     = 'Sin planificar';
$lang->report->workday       = 'Horas/día';
$lang->report->diffDays      = 'days';

$lang->report->typeList['default'] = 'Predeterminado';
$lang->report->typeList['pie']     = 'Circular';
$lang->report->typeList['bar']     = 'Barras';
$lang->report->typeList['line']    = 'Línea';

$lang->report->conditions    = 'Filtrar por:';
$lang->report->closedProduct = 'Cerrado ' . $lang->productCommon . 's';
$lang->report->overduePlan   = 'Planes vencidos';

/* daily reminder. */
$lang->report->idAB         = 'ID';
$lang->report->bugTitle     = 'Nombre del Bug';
$lang->report->taskName     = 'Nombre de la tarea';
$lang->report->todoName     = 'Nombre del pendiente';
$lang->report->testTaskName = 'Nombre de la solicitud';
$lang->report->cardName   = 'Nombre de la tarjeta Kanban';
$lang->report->deadline     = 'Fecha límite';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = 'Aviso: Usted tiene';
$lang->report->mailTitle->bug      = " Bug (%s),";
$lang->report->mailTitle->task     = " Tarea (%s),";
$lang->report->mailTitle->todo     = " Pendiente (%s),";
$lang->report->mailTitle->testTask = " Solicitud (%s),";
$lang->report->mailTitle->card     = " Tarjeta Kanban (%s),";

$lang->report->annualData = new stdclass();
$lang->report->annualData->title            = "Resumen de trabajo de %s en %s";
$lang->report->annualData->exportByZentao   = "Exportado por AXIS FLOW";
$lang->report->annualData->scope            = "Alcance";
$lang->report->annualData->allUser          = "Todos los usuarios";
$lang->report->annualData->allDept          = "Toda la empresa";
$lang->report->annualData->soFar            = " (%s)";
$lang->report->annualData->baseInfo         = "Datos básicos";
$lang->report->annualData->actionData       = "Datos de operación";
$lang->report->annualData->contributionData = "Datos de contribución";
$lang->report->annualData->radar            = "Gráfico de radar de capacidades";
$lang->report->annualData->executions       = "Datos de {$lang->executionCommon}";
$lang->report->annualData->products         = "Datos de {$lang->productCommon}";
$lang->report->annualData->stories          = "Datos de la historia";
$lang->report->annualData->tasks            = "Datos de la tarea";
$lang->report->annualData->bugs             = "Datos de Bugs";
$lang->report->annualData->cases            = "Datos del caso";
$lang->report->annualData->statusStat       = "{$lang->SRCommon}/task/bug status distribution (as of today)";

$lang->report->annualData->companyUsers     = "Número de empresas";
$lang->report->annualData->deptUsers        = "Número de departamentos";
$lang->report->annualData->logins           = "Veces de inicio de sesión";
$lang->report->annualData->actions          = "Número de operaciones";
$lang->report->annualData->contributions    = "Número de contribuciones";
$lang->report->annualData->consumed         = "Consumido";
$lang->report->annualData->todos            = "Número de pendientes";

$lang->report->annualData->storyStatusStat = "Distribución de estados de historias";
$lang->report->annualData->taskStatusStat  = "Distribución de estados de tareas";
$lang->report->annualData->bugStatusStat   = "Distribución de Bugs por estado";
$lang->report->annualData->caseResultStat  = "Distribución de resultados de casos";
$lang->report->annualData->allStory        = "Total";
$lang->report->annualData->allTask         = "Total";
$lang->report->annualData->allBug          = "Total";
$lang->report->annualData->undone          = "Sin hacer";
$lang->report->annualData->unresolve       = "Marcar como no resuelto";

$lang->report->annualData->storyMonthActions = "Operación mensual de historias";
$lang->report->annualData->taskMonthActions  = "Operación mensual de tareas";
$lang->report->annualData->bugMonthActions   = "Operación mensual de Bugs";
$lang->report->annualData->caseMonthActions  = "Operación mensual de casos";

$lang->report->annualData->executionFields['name']  = "{$lang->executionCommon} name";
$lang->report->annualData->executionFields['story'] = "Historias aceptadas";
$lang->report->annualData->executionFields['task']  = "Tareas finalizadas";
$lang->report->annualData->executionFields['bug']   = "Bugs reparados";

$lang->report->annualData->productFields['name'] = "{$lang->productCommon} name";
$lang->report->annualData->productFields['plan'] = "Planes";
$lang->report->annualData->productFields['epic'] = "{$lang->ERCommon} creado";
global $config;
if(!empty($config->URAndSR))
{
    $lang->report->annualData->productFields['requirement'] = "{$lang->URCommon} creado";
}
$lang->report->annualData->productFields['story']  = "{$lang->SRCommon} creado";
$lang->report->annualData->productFields['closed'] = "{$lang->SRCommon} cerrado";

$lang->report->annualData->objectTypeList['product']     = $lang->productCommon;
$lang->report->annualData->objectTypeList['story']       = $lang->SRCommon;
$lang->report->annualData->objectTypeList['productplan'] = "Plan";
$lang->report->annualData->objectTypeList['release']     = "Lanzamiento";
$lang->report->annualData->objectTypeList['project']     = $lang->projectCommon;
$lang->report->annualData->objectTypeList['execution']   = $lang->executionCommon;
$lang->report->annualData->objectTypeList['task']        = 'Tarea';
$lang->report->annualData->objectTypeList['repo']        = 'Código';
$lang->report->annualData->objectTypeList['bug']         = 'Bug';
$lang->report->annualData->objectTypeList['build']       = 'Build';
$lang->report->annualData->objectTypeList['testtask']    = 'Tarea de prueba';
$lang->report->annualData->objectTypeList['case']        = 'Caso';
$lang->report->annualData->objectTypeList['doc']         = 'Documento';

$lang->report->annualData->actionList['create']    = 'Creado';
$lang->report->annualData->actionList['edit']      = 'Editado';
$lang->report->annualData->actionList['close']     = 'Cerrado';
$lang->report->annualData->actionList['review']    = 'Revisado';
$lang->report->annualData->actionList['gitCommit'] = 'Commit de GIT realizado';
$lang->report->annualData->actionList['svnCommit'] = 'Commit SVN realizado';
$lang->report->annualData->actionList['start']     = 'Iniciado';
$lang->report->annualData->actionList['finish']    = 'Finalizado';
$lang->report->annualData->actionList['assign']    = 'Asignado';
$lang->report->annualData->actionList['activate']  = 'Activado';
$lang->report->annualData->actionList['resolve']   = 'Resuelto';
$lang->report->annualData->actionList['run']       = 'Ejecutar';
$lang->report->annualData->actionList['stop']      = 'Detener mantenimiento';
$lang->report->annualData->actionList['putoff']    = 'Pospuesto ';
$lang->report->annualData->actionList['suspend']   = 'Suspendido';
$lang->report->annualData->actionList['change']    = 'Cambiado';
$lang->report->annualData->actionList['pause']     = 'Pausado';
$lang->report->annualData->actionList['cancel']    = 'Cancelado';
$lang->report->annualData->actionList['confirm']   = 'Confirmado';
$lang->report->annualData->actionList['createBug'] = 'Convertir a bug';
$lang->report->annualData->actionList['delete']    = 'Eliminar';
$lang->report->annualData->actionList['toAudit']   = 'Por auditar';
$lang->report->annualData->actionList['audit']     = 'Auditoría';

$lang->report->annualData->todoStatus['all']    = 'Todos';
$lang->report->annualData->todoStatus['undone'] = 'Sin hacer';
$lang->report->annualData->todoStatus['done']   = 'Hecho';

$lang->report->annualData->radarItems['product']   = $lang->productCommon;
$lang->report->annualData->radarItems['execution'] = $lang->projectCommon;
$lang->report->annualData->radarItems['devel']     = "Desarrollo";
$lang->report->annualData->radarItems['qa']        = "QA";
$lang->report->annualData->radarItems['other']     = "Otro";

$lang->report->companyRadar        = "公司能力雷达图";
$lang->report->outputData          = "产出数据";
$lang->report->outputTotal         = "产出总数";
$lang->report->storyOutput         = "需求产出";
$lang->report->planOutput          = "计划产出";
$lang->report->releaseOutput       = "发布产出";
$lang->report->executionOutput     = "执行产出";
$lang->report->taskOutput          = "任务产出";
$lang->report->bugOutput           = "Producción de Bugs";
$lang->report->caseOutput          = "用例产出";
$lang->report->bugProgress         = "Avance de Bugs";
$lang->report->productProgress     = "{$lang->productCommon}进展";
$lang->report->executionProgress   = "执行进展";
$lang->report->projectProgress     = "{$lang->projectCommon}进展";
$lang->report->yearProjectOverview = "Resumen anual de {$lang->projectCommon}";
$lang->report->projectOverview     = "Resumen de {$lang->projectCommon} a la fecha";

$lang->report->contributionCountObject = array();
$lang->report->contributionCountObject['task']        = "Tareas: Crear, Completar, Cerrar, Cancelar, Asignar";
$lang->report->contributionCountObject['story']       = "Historias: crear, revisar, cerrar, asignar";
$lang->report->contributionCountObject['requirement'] = "Funcionalidades: crear, revisar, cerrar, asignar";
$lang->report->contributionCountObject['epic']        = "Épicas: crear, revisar, cerrar, asignar";
$lang->report->contributionCountObject['bug']         = "Bugs: Crear, Resolver, Cerrar, Asignar";
$lang->report->contributionCountObject['testcase']    = "Casos de prueba: Crear";
$lang->report->contributionCountObject['testtask']    = "Tareas de prueba: Cerradas";
$lang->report->contributionCountObject['audit']       = "Auditoría: Iniciar, Auditar";
$lang->report->contributionCountObject['doc']         = "Documento: Crear, Editar";
$lang->report->contributionCountObject['issue']       = "Incidencia: crear, cerrar, asignar";
$lang->report->contributionCountObject['risk']        = "Riesgo: crear, cerrar, asignar";
$lang->report->contributionCountObject['qa']          = "QA: Crear, Resolver, Cerrar, Asignar";
$lang->report->contributionCountObject['feedback']    = "Retroalimentación: crear, revisar, asignar, cerrar";
$lang->report->contributionCountObject['ticket']      = "Tickets: Crear, Resolver, Asignar, Cerrar";

$lang->report->tips = new stdclass();
$lang->report->tips->basic = array();
$lang->report->tips->basic['company'] = '
1.Número de empresa: suma el número de todos los usuarios del sistema y filtra los usuarios eliminados. <br>
2.Número de operaciones: suma el número de operaciones realizadas por el sistema en un año determinado. <br>
3.Consumido: suma el tiempo consumido por el sistema en un año determinado. <br>
4.Número de pendientes: suma los pendientes de todos los usuarios del sistema. <br>
5.Número de contribuciones: suma las contribuciones de todos los usuarios del sistema.';
$lang->report->tips->basic['dept'] = '
1.Número de departamentos: suma el número de todos los usuarios de un departamento y filtra los usuarios eliminados. <br>
2.Número de operaciones: suma el número de operaciones realizadas por los usuarios de un departamento en un año determinado. <br>
3.Consumido: suma las horas de trabajo consumidas por un usuario del departamento en un año determinado. <br>
4.Número de pendientes: suma los pendientes de los usuarios de un departamento. <br>
5.Número de contribuciones: suma los datos de contribución de los usuarios de un departamento.';
$lang->report->tips->basic['user'] = '
1.Veces de inicio de sesión: suma las veces que un usuario inició sesión en un año determinado. <br>
2.Número de operaciones: suma el número de operaciones realizadas por un usuario en un año determinado. <br>
3.Consumido: suma las horas consumidas por un usuario en un año determinado. <br>
4.Número de pendientes: suma los pendientes de un usuario. <br>
5.Número de contribuciones: suma los datos de contribución de un usuario.';

$lang->report->tips->contributionCount['company'] = "Datos de contribución de todos los usuarios en el año seleccionado, que incluyen:";
$lang->report->tips->contributionCount['dept']    = "Datos de contribución del departamento seleccionado en el año seleccionado, que incluyen:";
$lang->report->tips->contributionCount['user']    = "Datos de contribución del usuario seleccionado en el año seleccionado, que incluyen:";

$lang->report->tips->contribute['company'] = 'Suma la cantidad de operaciones en distintos objetos del sistema en un año determinado.';
$lang->report->tips->contribute['dept']    = 'Suma la cantidad de operaciones realizadas en distintos objetos del sistema en un año determinado. El usuario de la operación debe pertenecer al departamento seleccionado.';
$lang->report->tips->contribute['user']    = 'Suma la cantidad de operaciones realizadas en distintos objetos del sistema en un año determinado. Asegúrese de que el usuario de la operación pertenezca al usuario seleccionado.';

$lang->report->tips->radar = '
1.Gestión de productos incluye: datos operativos relacionados con productos, planes, requerimientos y lanzamientos.<br>
2.Gestión de proyectos incluye: datos operativos relacionados con proyectos, iteraciones, versiones y tareas.<br>
3.Desarrollo incluye: datos operativos relacionados con tareas, código y resolución de Bugs.<br>
4.Pruebas incluye: datos operativos relacionados con creación, activación y cierre de Bugs, casos de prueba y tareas de prueba.<br>
5.Otros incluye: otros datos de actividad dispersos.';

$lang->report->tips->execution['company'] = '
Historias aceptadas: suma el número de historias creadas en un año determinado que cumplen las siguientes condiciones: la etapa es aceptada, publicada o cerrada por el motivo de historia completada, y se filtran las historias eliminadas.<br>
Tareas finalizadas: suma el número de tareas en curso creadas en un año determinado. El estado es finalizado. Se filtran las tareas eliminadas.<br>
Bugs resueltos: número de Bugs creados en un año determinado cuyo estado de ejecución es cerrado y cuya solución es resuelto.';
$lang->report->tips->execution['dept'] = '
Historias aceptadas: suma el número de historias creadas en un año determinado que cumplen las siguientes condiciones: la etapa es aceptada, publicada o cerrada por el motivo de historia completada, se filtran las historias eliminadas y el creador es un usuario del departamento seleccionado.<br>
Tareas finalizadas: suma el número de tareas creadas en un año determinado que están en proceso de ejecución. El estado es finalizado, se filtran las tareas eliminadas y los creadores son usuarios del departamento seleccionado. Número de tareas completadas: suma el número de tareas creadas en un año determinado que están en proceso de ejecución. El estado es finalizado, se filtran las tareas eliminadas y los creadores son usuarios del departamento seleccionado.<br>
Bugs resueltos: número de Bugs creados en un año determinado cuyo estado de ejecución es cerrado y cuya solución es resuelto. El creador es un usuario del departamento seleccionado.';
$lang->report->tips->execution['user'] = '
Historias aceptadas: suma el número de historias creadas en un año determinado que cumplen las siguientes condiciones: la etapa es aceptada, publicada o cerrada por el motivo de historia completada, se filtran las historias eliminadas y el creador es el usuario seleccionado.<br>
Tareas finalizadas: suma el número de tareas en curso creadas en un año determinado. El estado es finalizado. Se filtran las tareas eliminadas y el creador es el usuario seleccionado.<br>
Bugs resueltos: número de Bugs creados en un año determinado cuyo estado de ejecución es cerrado y cuya solución es resuelto, y el creador es el usuario seleccionado.';

$lang->report->tips->product['company'] = '
Planes: número de planes creados en un producto en un año determinado.<br>
Épicas creadas: indica el número de épicas creadas en un año determinado.<br>
Requerimientos creados: indica el número de requerimientos de usuario creados en un año determinado.<br>
Historias creadas: número de historias de un producto creadas en un año determinado.<br>
Historias cerradas: número de historias de un producto cuya fecha de cierre corresponde a un año determinado.';
$lang->report->tips->product['dept'] = '
Planes: número de planes creados en un producto en un año determinado. El creador es un usuario del departamento seleccionado.<br>
Épicas creadas: indica el número de épicas creadas en un año determinado. El creador es un usuario del departamento seleccionado.<br>
Requerimientos creados: indica el número de requerimientos de usuario creados en un año determinado. El creador es un usuario del departamento seleccionado.<br>
Historias creadas: número de historias de un producto creadas en un año determinado. El creador es un usuario del departamento seleccionado.<br>
Historias cerradas: número de historias de un producto cuya fecha de cierre corresponde a un año determinado, y quien las cerró es un usuario del departamento seleccionado.';
$lang->report->tips->product['user'] = '
Planes: número de planes creados en el producto en un año determinado. El creador es el usuario seleccionado.<br>
Épicas creadas: indica el número de épicas creadas en un año determinado. El creador es el usuario seleccionado.<br>
Requerimientos creados: indica el número de requerimientos de usuario creados en un año determinado. El creador es el usuario seleccionado.<br>
Historias creadas: número de historias creadas en un producto en un año determinado. El creador es el usuario seleccionado.<br>
Historias cerradas: número de historias del producto que se cerraron en un año determinado, y quien las cerró es el usuario seleccionado.';

$lang->report->tips->story['company'] = '
Distribución de historias por estado: distribución de los datos de historias en los diferentes estados. La fecha de creación debe corresponder a un año determinado.<br>
Operaciones mensuales de historias: suma el número de operaciones de historias. La fecha de la operación debe corresponder a un año determinado.';
$lang->report->tips->story['dept'] = '
Distribución de historias por estado: indica la distribución de los datos de historias en los diferentes estados. La fecha de creación debe corresponder a un año y el usuario creador debe ser un usuario del departamento seleccionado.<br>
Operaciones mensuales de historias: suma el número de operaciones de historias. La fecha de la operación corresponde a un año y el usuario de la operación es un usuario del departamento seleccionado.';
$lang->report->tips->story['user'] = '
Distribución de historias por estado: indica la distribución de los datos de historias en los diferentes estados. La fecha de creación corresponde a un año y el usuario creador es el usuario seleccionado.<br>
Operaciones mensuales de historias: suma el número de operaciones de historias. La fecha de la operación corresponde a un año y el usuario de la operación es el usuario seleccionado.';

$lang->report->tips->bug['company'] = '
Distribución de Bugs por estado: distribución de los datos de Bugs en los diferentes estados. La fecha de creación debe corresponder a un año determinado.<br>
Operaciones mensuales de Bugs: suma el número de operaciones de Bugs. La fecha de la operación debe corresponder a un año.';
$lang->report->tips->bug['dept'] = '
Distribución de Bugs por estado: distribución de los datos de Bugs en los diferentes estados. La fecha de creación debe corresponder a un año y el usuario creador debe ser un usuario del departamento seleccionado.<br>
Operaciones mensuales de Bugs: suma el número de operaciones de Bugs. La fecha de la operación corresponde a un año y el usuario de la operación es un usuario del departamento seleccionado.';
$lang->report->tips->bug['user'] = '
Distribución de Bugs por estado: distribución de los datos de Bugs en los diferentes estados. La fecha de creación debe corresponder a un año y el usuario creador es el usuario seleccionado.<br>
Operaciones mensuales de Bugs: suma el número de operaciones de Bugs. La fecha de la operación corresponde a un año y el usuario de la operación es el usuario seleccionado.';

$lang->report->tips->case['company'] = '
Distribución de resultados de casos: distribución de los datos de casos de prueba según los diferentes resultados de ejecución. Deben haberse creado en un año determinado.<br>
Operaciones mensuales de casos: suma el número de operaciones del caso de prueba. La fecha de la operación debe corresponder a un año determinado.';
$lang->report->tips->case['dept'] = '
Distribución de casos por estado: distribución de los datos de casos de prueba según los diferentes resultados de ejecución. La fecha de creación debe corresponder a un año y el usuario que ejecuta debe ser un usuario del departamento seleccionado.<br>
Operaciones mensuales de casos: suma las veces que se operó el caso de prueba. La fecha de la operación debe corresponder a un año y el usuario de la operación debe ser un usuario del departamento seleccionado.';
$lang->report->tips->case['user'] = '
Distribución de casos por estado: distribución de los datos de casos de prueba según los diferentes resultados de ejecución. La fecha de creación debe corresponder a un año determinado y el usuario que ejecuta es el usuario seleccionado.<br>
Operaciones mensuales de casos: suma el número de operaciones de un caso de prueba. La fecha de la operación debe corresponder a un año y el usuario de la operación es el usuario seleccionado.';

$lang->report->tips->task['company'] = '
Distribución de tareas por estado: los datos de tareas en los diferentes estados deben haberse creado en un año determinado.<br>
Operaciones mensuales de tareas: suma el número de tareas realizadas en un año.';
$lang->report->tips->task['dept'] = '
Distribución de tareas por estado: distribución de los datos de tareas en los diferentes estados. La fecha de creación debe corresponder a un año y el usuario creador debe ser un usuario del departamento seleccionado.<br>
Información mensual de operaciones: suma las veces que se operó una tarea. La fecha de la operación debe corresponder a un año y el usuario de la operación debe ser un usuario del departamento seleccionado.';
$lang->report->tips->task['user'] = '
Distribución de tareas por estado: distribución de los datos de tareas en los diferentes estados. La fecha de creación debe corresponder a un año y el usuario creador es el usuario seleccionado.<br>
Operaciones mensuales de tareas: suma el número de operaciones realizadas sobre una tarea. La fecha de la operación corresponde a un año y el usuario de la operación es el usuario seleccionado.';
