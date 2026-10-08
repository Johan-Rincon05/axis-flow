<?php
/**
 * The weekly module lang file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 青島易軟天創網絡科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     weekly
 * @version     $Id
 * @link        https://www.zentao.net
 */
$lang->weekly->common   = 'Informe';
$lang->weekly->index    = 'Resumen del informe semanal';
$lang->weekly->progress = 'Progreso';
$lang->weekly->workload = 'Carga de trabajo';
$lang->weekly->total    = 'Total';

$lang->weekly->reportTtitle   = $lang->projectCommon . ': Informe semanal de % s (semana % s)';
$lang->weekly->summary        = $lang->projectCommon . ' Progreso';
$lang->weekly->finished       = 'Trabajo completado esta semana (tareas terminadas al 100%)';
$lang->weekly->postponed      = 'Trabajo incompleto de esta semana';
$lang->weekly->nextWeek       = 'Plan de trabajo para la próxima semana';
$lang->weekly->workloadByType = 'Resumen de carga de trabajo';

$lang->weekly->term            = 'Período del informe';
$lang->weekly->project         = $lang->projectCommon . ' Nombre';
$lang->weekly->master          = 'Gerente del proyecto ';
$lang->weekly->staff           = 'Participantes esta semana';
$lang->weekly->projectTemplate = "Plantilla de informe semanal de {$lang->projectCommon}";

$lang->weekly->weekDesc       = 'Semana %s (%s – %s)';
$lang->weekly->progress       = $lang->projectCommon . 'Progreso';
$lang->weekly->analysisResult = 'Análisis';
$lang->weekly->cost           = $lang->projectCommon . ' Costo';

$lang->weekly->pv = 'Valor planificado (PV)';
$lang->weekly->ev = 'Valor ganado (EV)';
$lang->weekly->ac = 'Costo real (AC)';
$lang->weekly->sv = 'Variación del cronograma (SV%)';
$lang->weekly->cv = 'Variación de costos (CV%)';

$lang->weekly->totalCount  = 'Total de %u tareas.';
$lang->weekly->builtinDesc = "Una plantilla integrada de informe semanal de {$lang->projectCommon} crea automáticamente el informe de esta semana cada lunes en el {$lang->projectCommon} correspondiente.";

$lang->weekly->exportWeeklyReport = 'Exportar informe semanal';

$lang->weekly->builtInScopes = array();
$lang->weekly->builtInScopes['rnd']  = array();
$lang->weekly->builtInScopes['rnd']['project'] = 'Proyecto';

$lang->weekly->builtInCategoryList['month']     = 'Informe mensual';
$lang->weekly->builtInCategoryList['week']      = 'Informe semanal';
$lang->weekly->builtInCategoryList['day']       = 'Informe diario';
$lang->weekly->builtInCategoryList['milestone'] = 'Informe de hitos';

$lang->weekly->reportHelpNotice = <<<EOD
<h2>PV — Planned Value </h2>
Calculation logic:
<br />1) Sum the estimated hours of tasks whose planned start and end dates both fall within this week’s start and end dates.
<br />2) Sum the estimated hours of tasks whose planned start and end dates are both before this week’s start date.
<br />3) Sum the estimated hours of tasks whose planned start date is earlier than this week’s start date, and the planned end date is between this week’s start and end dates.
<br />4) For tasks whose planned start date is after this week’s start date but before this week’s end date, and planned end date is after this week’s end date, sum (Estimated Hours ÷ Task Duration in days) × (Days from planned start to this week’s end date).
<br />5) For tasks whose planned start date equals this week’s start date and planned end date is after this week’s end date, sum (Estimated Hours ÷ Task Duration in days) × (Days from planned start to this week’s end date).
<br />6) For tasks whose planned start date is earlier than this week’s start date and planned end date equals this week’s end date, sum the estimated hours.
<br />7) For tasks whose planned start date is earlier than this week’s start date and planned end date is after this week’s end date, sum (Estimated Hours ÷ Task Duration in days) × (Days from this week’s start to this week’s end date).

<p><strong>Scope of Calculation:</strong></p>
1) This week’s start date: Monday 00:00:00; the end date is determined based on working days and holidays.
<br />2) To avoid double counting, only sub‑tasks are included; parent tasks are excluded.
<br />3) Deleted tasks are excluded.
<br />4) Canceled tasks are excluded.
<br />5) Deleted executions are excluded.
<br />6) If the task has no planned start date, use the planned start date of its parent phase.
<br />7) If the task has no planned end date, use the planned finish date of its parent phase.
<br />8) The calculation considers only working days.

<h2>EV — Earned Value</h2>
Calculation logic:
<br />1) For tasks marked as “Completed,” sum the estimated hours.
<br />2) For tasks marked as “Closed” with the close reason “Completed,” sum the estimated hours.
<br />3) For tasks “Doing” or “On Hold,” sum (Estimated Hours × Completion Percentage).

<p><strong>Scope of Calculation:</strong></p>
1) Tasks that have non‑zero spent hours before this week’s end date.
<br />2) To avoid double counting, only sub‑tasks are included; parent tasks are excluded.
<br />3) Deleted tasks are excluded.
<br />4) Canceled tasks are excluded.
<br />5) Deleted executions are excluded.
<br />6) Completion Percentage = Cost Hours ÷ (Cost Hours + Hours Left).

<h2>AC — Actual Cost</h2>
Calculation logic:
<br />1) Sum all spent hours before this week’s end date.

<p><strong>Scope of Calculation:</strong></p>
1) Include spent hours from all work items: tasks, stories, bugs, test cases, builds, test requests, issues, risks, documents, and reviews.
<br />2) To avoid double counting, only sub‑tasks are included; parent tasks are excluded.
<br />3) Include spent hours from deleted tasks, stories, bugs, test cases, builds, test requests, issues, risks, documents, and reviews.
<br />4) Include spent hours from deleted executions of tasks, stories, bugs, test cases, builds, and documents.
<br />5) Include spent hours of canceled tasks, issues, and risks.

<h2>SV(%) — Schedule Variance </h2>
Formula: SV(%) = −1 × (1 − (EV / PV))%

<h2>CV(%) — Cost Variance </h2>
Formula: CV(%) = −1 × (1 − (EV / AC))%;
EOD;

$lang->weekly->blockHelpNotice = '<h2>Avance de esta semana</h2>
Lógica de cálculo: 
<br />1) Avance del proyecto = (Horas consumidas en tareas ÷ (Horas consumidas en tareas + Horas restantes de tareas)) × 100%

<p><strong>Alcance del cálculo:</strong></p>
1) Solo se incluyen los datos de horas de trabajo de las tareas.
<br />2) Para evitar el conteo doble, solo se incluyen las subtareas; se excluyen las tareas padre.
<br />3) Se incluyen las horas consumidas de las tareas canceladas.
<br />4) Se excluyen las horas consumidas de las tareas eliminadas.
<br />5) Se excluyen las horas consumidas de las ejecuciones eliminadas.
<br />6) Se excluyen las horas restantes de las tareas canceladas.
<br />7) Se excluyen las horas restantes de las ejecuciones eliminadas.

<h2>PV — Valor planificado</h2>
Lógica de cálculo:
<br />1) Sume las horas estimadas de las tareas cuyas fechas planificadas de inicio y fin estén ambas dentro de las fechas de inicio y fin de esta semana.
<br />2) Sume las horas estimadas de las tareas cuyas fechas planificadas de inicio y fin sean ambas anteriores a la fecha de inicio de esta semana.
<br />3) Sume las horas estimadas de las tareas cuya fecha planificada de inicio sea anterior a la fecha de inicio de esta semana y cuya fecha planificada de fin esté entre las fechas de inicio y fin de esta semana.
<br />4) Para las tareas cuya fecha planificada de inicio sea posterior a la fecha de inicio de esta semana pero anterior a la fecha de fin de esta semana, y cuya fecha planificada de fin sea posterior a la fecha de fin de esta semana, sume (Horas estimadas ÷ Duración de la tarea en días) × (Días desde el inicio planificado hasta la fecha de fin de esta semana).
<br />5) Para las tareas cuya fecha planificada de inicio sea igual a la fecha de inicio de esta semana y cuya fecha planificada de fin sea posterior a la fecha de fin de esta semana, sume (Horas estimadas ÷ Duración de la tarea en días) × (Días desde el inicio planificado hasta la fecha de fin de esta semana).  
<br />6) Para las tareas cuya fecha planificada de inicio sea anterior a la fecha de inicio de esta semana y cuya fecha planificada de fin sea igual a la fecha de fin de esta semana, sume las horas estimadas.
<br />7) Para las tareas cuya fecha planificada de inicio sea anterior a la fecha de inicio de esta semana y cuya fecha planificada de fin sea posterior a la fecha de fin de esta semana, sume (Horas estimadas ÷ Duración de la tarea en días) × (Días desde el inicio hasta el fin de esta semana).

<p><strong>Alcance del cálculo:</strong></p>
1) Fecha de inicio de la semana: lunes 00:00:00. La fecha de fin se determina con base en los días laborables y los festivos.
<br />2) Para evitar el conteo doble, incluya solo las subtareas y excluya las tareas padre.
<br />3) Se excluyen las tareas eliminadas.
<br />4) Se excluyen las tareas canceladas.
<br />5) Se excluyen las ejecuciones eliminadas.
<br />6) Si una tarea no tiene fecha planificada de inicio, se usa la fecha planificada de inicio de su fase padre.
<br />7) Si una tarea no tiene fecha planificada de fin, se usa la fecha planificada de finalización de su fase padre.
<br />8) El cálculo considera solo los días laborables.

<h2>EV — Valor ganado </h2>
Lógica de cálculo:
<br />1) Para las tareas marcadas como “Completadas”, sume las horas estimadas.
<br />2) Para las tareas marcadas como “Cerradas” con el motivo de cierre “Completada”, sume las horas estimadas.
<br />3) Para las tareas en estado “En curso” o “En pausa”, sume (Horas estimadas × Porcentaje de avance).

<p><strong>Alcance del cálculo:</strong></p>
1) Se incluyen las tareas con horas consumidas distintas de cero antes de la fecha de fin de esta semana.
<br />2) Para evitar el conteo doble, incluya solo las subtareas y excluya las tareas padre.
<br />3) Se excluyen las tareas eliminadas.
<br />4) Se excluyen las tareas canceladas.
<br />5) Se excluyen las ejecuciones eliminadas.
<br />6) Porcentaje de avance = Horas consumidas ÷ (Horas consumidas + Horas restantes).

<h2>AC — Costo real </h2>
Lógica de cálculo:
<br />1) Sume todas las horas consumidas antes de la fecha de fin de esta semana.

<p><strong>Alcance del cálculo:</strong></p>
1) Se incluyen las horas consumidas de tareas, historias, bugs, casos de prueba, builds, solicitudes de prueba, incidencias, riesgos, documentos y revisiones.
<br />2) Para evitar el conteo doble, incluya solo las subtareas y excluya las tareas padre.
<br />3) Se incluyen las horas consumidas de tareas, historias, bugs, casos de prueba, builds, solicitudes de prueba, incidencias, riesgos, documentos y revisiones eliminados.
<br />4) Se incluyen las horas consumidas de tareas, historias, bugs, casos de prueba, builds y documentos de ejecuciones eliminadas.
<br />5) Se incluyen las horas consumidas de tareas, incidencias y riesgos cancelados.

<h2>SV(%) — Variación del cronograma</h2>
Fórmula: SV(%) = −1 × (1 − (EV ÷ PV))%

<h2>CV(%) — Variación del costo</h2>
Fórmula: CV(%) = −1 × (1 − (EV ÷ AC))%';

$lang->weekly->builtinRawContent = '{"type":"page","meta":{"id":"mKJhETwxpP","title":"Project Weekly Report Template","createDate":1758524215597,"tags":[]},"blocks":{"type":"block","id":"leP1pQM_0N","flavour":"affine:page","version":2,"props":{"title":{"$blocksuite:internal:text$":true,"delta":[{"insert":"Project Weekly Report Template"}]}},"children":[{"type":"block","id":"cDel0u6OKK","flavour":"affine:note","version":1,"props":{"xywh":"[0,0,498,92]","background":"--affine-note-background-white","index":"a0","lockedBySelf":false,"hidden":false,"displayMode":"both","edgeless":{"style":{"borderRadius":8,"borderSize":4,"borderStyle":"none","shadowType":"--affine-note-shadow-box"}}},"children":[{"type":"block","id":"57JpxtRtgl","flavour":"affine:paragraph","version":1,"props":{"align":"left","type":"text","text":{"$blocksuite:internal:text$":true,"delta":[{"insert":" ","attributes":{"holder":{"id":"-bGoKXonda","name":"weekly_term","text":"Report Duration","hint":"Filter: Date Range is within this week.","data":{"type":"weekly_term","blockID":1538,"hint":"Filter: Date Range is within this week.","text":"Report Duration"}}}},{"insert":"Weekly Report"},{"insert":" ","attributes":{"holder":{"id":"ZZ2iJ1NbSm","name":"property_name","text":"Project Name","hint":"Project Name"}}},{"insert":"by project manager"},{"insert":" ","attributes":{"holder":{"id":"No8p_noVvo","name":"property_PM","text":"Manager","hint":"Manager"}}},{"insert":"Managed, participants"},{"insert":" ","attributes":{"holder":{"id":"yMx6IXU_PN","name":"weekly_staff","text":"Participants","hint":"Filter: Data Range is within this week","data":{"type":"weekly_staff","blockID":1539,"hint":"Filter: Data Range is within this week","text":"Participants"}}}}]},"collapsed":false},"children":[]},{"type":"block","id":"u_7TkQplvX","flavour":"affine:embed-zui-custom","version":1,"props":{"index":"a0","xywh":"[0,0,0,0]","lockedBySelf":false,"rotate":0,"content":{"exportUrl":"exportZentaoChart___TML_ZENTAOCHART__{project_progress_summary}","fetcher":[{"module":"reporttemplate","method":"ajaxZentaoChart","params":"type=project_progress_summary&blockID=__TML_ZENTAOCHART__{project_progress_summary}"}],"clearBeforeLoad":false,"isTemplate":true,"title":"Project Progress"}},"children":[]},{"type":"block","id":"JF8LjhZ00l","flavour":"affine:embed-zui-custom","version":1,"props":{"index":"a0","xywh":"[0,0,0,0]","lockedBySelf":false,"rotate":0,"content":{"exportUrl":"exportZentaoChart___TML_ZENTAOCHART__{task_basicStatistic_finished}","fetcher":[{"module":"reporttemplate","method":"ajaxZentaoChart","params":"type=task_basicStatistic_finished&blockID=__TML_ZENTAOCHART__{task_basicStatistic_finished}"}],"clearBeforeLoad":false,"isTemplate":true,"title":"Completed Tasks Overview"}},"children":[]},{"type":"block","id":"vLxMdWbsaL","flavour":"affine:embed-zui-custom","version":1,"props":{"index":"a0","xywh":"[0,0,0,0]","lockedBySelf":false,"rotate":0,"content":{"exportUrl":"exportZentaoChart___TML_ZENTAOCHART__{task_basicStatistic_unfinished}","fetcher":[{"module":"reporttemplate","method":"ajaxZentaoChart","params":"type=task_basicStatistic_unfinished&blockID=__TML_ZENTAOCHART__{task_basicStatistic_unfinished}"}],"clearBeforeLoad":false,"isTemplate":true,"title":"Uncompleted Tasks Overview"}},"children":[]},{"type":"block","id":"2kIWtGbWIc","flavour":"affine:embed-zui-custom","version":1,"props":{"index":"a0","xywh":"[0,0,0,0]","lockedBySelf":false,"rotate":0,"content":{"exportUrl":"exportZentaoChart___TML_ZENTAOCHART__{task_basicStatistic_workplan}","fetcher":[{"module":"reporttemplate","method":"ajaxZentaoChart","params":"type=task_basicStatistic_workplan&blockID=__TML_ZENTAOCHART__{task_basicStatistic_workplan}"}],"clearBeforeLoad":false,"isTemplate":true,"title":"Work Plan"}},"children":[]},{"type":"block","id":"YQQsS51bpa","flavour":"affine:embed-zui-custom","version":1,"props":{"index":"a0","xywh":"[0,0,0,0]","lockedBySelf":false,"rotate":0,"content":{"exportUrl":"exportZentaoChart___TML_ZENTAOCHART__{project_basicStatistic_workload}","fetcher":[{"module":"reporttemplate","method":"ajaxZentaoChart","params":"type=project_basicStatistic_workload&blockID=__TML_ZENTAOCHART__{project_basicStatistic_workload}"}],"clearBeforeLoad":false,"isTemplate":true,"title":"Planned Value Summary"}},"children":[]},{"type":"block","id":"woAbzWK8vw","flavour":"affine:paragraph","version":1,"props":{"align":"left","type":"text","text":{"$blocksuite:internal:text$":true,"delta":[]},"collapsed":false},"children":[]}]}]}}';
