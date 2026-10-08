<?php
$lang->metric->common             = "Métrica";
$lang->metric->metric             = "Métrica";
$lang->metric->name               = "Nombre de la métrica";
$lang->metric->stage              = "Etapa";
$lang->metric->scope              = "Alcance de la métrica";
$lang->metric->object             = "Objeto de la métrica";
$lang->metric->purpose            = "Propósito de la métrica";
$lang->metric->dateType           = "Tipo de fecha";
$lang->metric->unit               = "Unidad de la métrica";
$lang->metric->alias              = "Alias de la métrica";
$lang->metric->code               = "Código de la métrica";
$lang->metric->desc               = "Descripción de la métrica";
$lang->metric->formula            = "Fórmula";
$lang->metric->when               = "Método de recopilación";
$lang->metric->createdBy          = "Creador";
$lang->metric->implement          = "Implementar";
$lang->metric->delist             = "delist";
$lang->metric->implementedBy      = "Implementado por";
$lang->metric->offlineBy          = "Desconectado por";
$lang->metric->lastEdited         = "Última edición";
$lang->metric->value              = "Valor";
$lang->metric->date               = "Fecha";
$lang->metric->metricData         = "Datos de la métrica";
$lang->metric->system             = "Sistema";
$lang->metric->weekCell           = "%s, semana %s";
$lang->metric->weekS              = "Semana %s";
$lang->metric->create             = "Crear " . $this->lang->metric->common;
$lang->metric->edit               = "Editar " . $this->lang->metric->common;
$lang->metric->view               = 'Ver' . $this->lang->metric->common;
$lang->metric->afterCreate        = "Después de guardar";
$lang->metric->definition         = "Definición";
$lang->metric->declaration        = "Definición";
$lang->metric->customUnit         = "Unidad personalizada";
$lang->metric->delist             = "Retirar";
$lang->metric->preview            = "Vista previa";
$lang->metric->metricList         = "Lista de métricas";
$lang->metric->manage             = "Administrar";
$lang->metric->exitManage         = "Salir de la gestión";
$lang->metric->filters            = 'Configuración de filtros';
$lang->metric->details            = 'Detalles';
$lang->metric->remove             = 'Quitar';
$lang->metric->zAnalysis          = 'Análisis Z';
$lang->metric->sqlStatement       = "Sentencia SQL";
$lang->metric->other              = "Otro";
$lang->metric->collectType        = 'Tipo de recopilación';
$lang->metric->oldMetricInfo      = 'Información de medición';
$lang->metric->collectConf        = 'Configuración de recopilación';
$lang->metric->verifyFile         = 'Verificar archivo';
$lang->metric->verifyResult       = 'Resultado de la verificación';
$lang->metric->publish            = 'Publicar';
$lang->metric->moveFailTip        = 'No se pudo mover el archivo de métricas.';
$lang->metric->checkFile          = 'Verificar si el archivo de la métrica existe en el directorio';
$lang->metric->deleteFile         = 'Comuníquese con el administrador para eliminar';
$lang->metric->selectCount        = '%s métricas';
$lang->metric->testMetric         = 'Métrica de pruebas';
$lang->metric->calcTime           = 'Hora de cálculo';
$lang->metric->to                 = 'to';
$lang->metric->year               = 'Año';
$lang->metric->month              = 'Mes';
$lang->metric->week               = 'Semana';
$lang->metric->day                = 'Fecha';
$lang->metric->nodate             = 'Fecha de recopilación';
$lang->metric->implementType      = 'Tipo de implementación';
$lang->metric->recalculate        = 'Recalcular todas las métricas';
$lang->metric->setting            = 'Configuración';
$lang->metric->recalculateAll     = 'Recalcular todas las métricas';
$lang->metric->recalculateHistory = 'Recalcular métricas históricas';
$lang->metric->startRecalculate   = 'Iniciar recálculo';
$lang->metric->recalculateAction  = 'Recalcular';
$lang->metric->recalculateBtnText = 'Recalcular';
$lang->metric->exit               = 'Salir';
$lang->metric->zentaoPath         = '【Ruta de AXIS FLOW】';

$lang->metric->yearFormat      = 'Año %s';
$lang->metric->weekFormat      = 'Semana %s';
$lang->metric->monthDayFormat  = '%s-%s';
$lang->metric->yearMonthFormat = '%s-%s';

$lang->metric->tableHeader = array();
$lang->metric->tableHeader['project']   = 'Proyecto';
$lang->metric->tableHeader['product']   = 'Producto';
$lang->metric->tableHeader['execution'] = 'Ejecución';
$lang->metric->tableHeader['dept']      = 'Depto.';
$lang->metric->tableHeader['user']      = 'Nombre';
$lang->metric->tableHeader['program']   = 'Programa';

$lang->metric->placeholder = new stdclass();
$lang->metric->placeholder->select    = "Seleccione";
$lang->metric->placeholder->project   = "Todos los proyectos";
$lang->metric->placeholder->product   = "Todos los productos";
$lang->metric->placeholder->execution = "Todas las ejecuciones";
$lang->metric->placeholder->dept      = "Todos los departamentos";
$lang->metric->placeholder->user      = "Todos los usuarios";
$lang->metric->placeholder->program   = "Todos los programas";

$lang->metric->query = new stdclass();
$lang->metric->query->action = 'Consulta';

$lang->metric->calcTypeList = array();
$lang->metric->calcTypeList['cron']      = 'Instantánea';
$lang->metric->calcTypeList['inference'] = 'Recalcular';

$lang->metric->calcTitleList = array();
$lang->metric->calcTitleList['cron']      = '%user% creó instantáneas el %date%';
$lang->metric->calcTitleList['inference'] = '%user% recalculó el %date%';

$lang->metric->query->scope = array();
$lang->metric->query->scope['project']   = 'Proyecto';
$lang->metric->query->scope['product']   = 'Producto';
$lang->metric->query->scope['execution'] = 'Ejecución';
$lang->metric->query->scope['dept']      = 'Depto.';
$lang->metric->query->scope['user']      = 'Usuario';
$lang->metric->query->scope['program']   = 'Programa';

$lang->metric->query->yearLabels = array();
$lang->metric->query->yearLabels['3']   = '3 años';
$lang->metric->query->yearLabels['5']   = '5 años';
$lang->metric->query->yearLabels['10']  = '10 años';
$lang->metric->query->yearLabels['all'] = 'Todos';

$lang->metric->query->monthLabels = array();
$lang->metric->query->monthLabels['6']   = '6 meses';
$lang->metric->query->monthLabels['12']  = '12 meses';
$lang->metric->query->monthLabels['24']  = '24 meses';
$lang->metric->query->monthLabels['36']  = '36 meses';

$lang->metric->query->weekLabels = array();
$lang->metric->query->weekLabels['4']  = '4 semanas';
$lang->metric->query->weekLabels['8']  = '8 semanas';
$lang->metric->query->weekLabels['12'] = '12 semanas';
$lang->metric->query->weekLabels['16'] = '16 semanas';

$lang->metric->query->dayLabels = array();
$lang->metric->query->dayLabels['7']  = '7 días';
$lang->metric->query->dayLabels['14'] = '14 días';
$lang->metric->query->dayLabels['21'] = '21 días';
$lang->metric->query->dayLabels['28'] = '28 días';

$lang->metric->viewType = new stdclass();
$lang->metric->viewType->single   = 'Vista única';
$lang->metric->viewType->multiple = 'Vista múltiple';

$lang->metric->descTip            = 'Ingrese el significado, el propósito y el impacto de la métrica';
$lang->metric->definitionTip      = 'Ingrese las reglas de cálculo y las condiciones de filtrado de la métrica';
$lang->metric->aliasTip           = 'Se muestra en la biblioteca de métricas como alias';
$lang->metric->collectConfText    = "%s %s %s";
$lang->metric->dirNotExist        = "No se pudo crear un directorio. Cree el directorio: <strong>%s</strong>.";
$lang->metric->fileMoveFail       = "Falló la copia del archivo, copie <strong>%s</strong> a <strong>%s</strong>.";
$lang->metric->emptyCollect       = 'Por el momento no hay métricas recopiladas.';
$lang->metric->maxSelect          = 'Se pueden seleccionar como máximo %s métricas';
$lang->metric->maxSelectTip       = 'Se pueden seleccionar varias métricas en un rango, hasta un máximo de %s.';
$lang->metric->upgradeTip         = 'Esta medida es compatible con una versión anterior. Si desea editarla, vuelva a configurarla según las reglas de configuración de medidas de la versión más reciente. Tenga en cuenta también que la nueva versión de la medida ya no admite el editor SQL y, por ahora, no puede ser referenciada por la plantilla de informes. Verifique si necesita editarla.';
$lang->metric->saveSqlMeasSuccess = "Consulta exitosa，el resultado es：%s";
$lang->metric->monthText          = "%s día";
$lang->metric->errorDateRange     = "La fecha de inicio no puede ser posterior a la fecha de fin";
$lang->metric->errorCalcTimeRange = "La hora de inicio de la recopilación no puede ser posterior a la hora de fin de la recopilación";
$lang->metric->updateTimeTip      = "Hora de actualización de la instantánea：%s";
$lang->metric->builtinMetric      = "Métrica integrada, no se puede retirar";

$lang->metric->noDesc    = "No hay descripción disponible";
$lang->metric->noFormula = "No hay reglas de cálculo disponibles";
$lang->metric->noCalc    = "El algoritmo PHP de esta métrica aún no ha sido implementado";
$lang->metric->noSQL     = "Sin SQL";

$lang->metric->noData              = "No hay datos disponibles.";
$lang->metric->noDataBeforeCollect = "No hay datos disponibles hasta la hora de recolección de datos.";
$lang->metric->noDataAfterCollect  = "No hay datos disponibles después de la hora de recolección de datos.";

$lang->metric->legendBasicInfo  = 'Información básica';
$lang->metric->legendCreateInfo = 'Información de creación y edición';

$lang->metric->confirmDelete       = "¿Seguro que desea eliminar?";
$lang->metric->confirmDelist       = "¿Seguro que desea quitarlo de la lista?";
$lang->metric->confirmDelistInUsed = "Esta métrica está referenciada por la pantalla grande. ¿Está seguro de que desea retirarla?";
$lang->metric->confirmRecalculate  = "Los resultados del recálculo pueden sobrescribir los registros de métricas existentes. ¿Desea continuar?";
$lang->metric->notExist            = "La medida no existe";

$lang->metric->browse          = 'Explorar métricas';
$lang->metric->browseAction    = 'Lista de métricas';
$lang->metric->viewAction      = 'Ver métrica';
$lang->metric->editAction      = 'Editar métrica';
$lang->metric->implementAction = 'Implementar métrica';
$lang->metric->deleteAction    = 'Eliminar métrica';
$lang->metric->delistAction    = 'Retirar métrica';
$lang->metric->detailsAction   = 'Detalle de la métrica';

$lang->metric->stageList = array();
$lang->metric->stageList['wait']     = "No lanzado";
$lang->metric->stageList['released'] = "Lanzado";

$lang->metric->featureBar['browse']['all']      = 'Todos';
$lang->metric->featureBar['browse']['wait']     = 'No lanzado';
$lang->metric->featureBar['browse']['released'] = 'Lanzado';

$lang->metric->featureBar['preview']['project']   = 'Proyecto';
$lang->metric->featureBar['preview']['product']   = 'Producto';
$lang->metric->featureBar['preview']['execution'] = 'Ejecución';
$lang->metric->featureBar['preview']['user']      = 'Individual';
$lang->metric->featureBar['preview']['program']   = 'Programa';
$lang->metric->featureBar['preview']['system']    = 'Sistema';

$lang->metric->more        = 'Más';
$lang->metric->collect     = 'Mis favoritos';
$lang->metric->collectStar = 'Recopilar';

$lang->metric->oldMetric      = new stdclass();
$lang->metric->oldMetric->sql = 'SQL';
$lang->metric->oldMetric->tip = 'Esta es la implementación de la métrica anterior';

$lang->metric->oldMetric->dayNames = array(1 => 'Lunes', 2 => 'Martes', 3 => 'Miércoles', 4 => 'Jueves', 5 => 'Viernes', 6 => 'Sábado', 0 => 'Domingo');

$lang->metric->moreSelects = array();

$lang->metric->unitList = array();
$lang->metric->unitList['count']      = 'Conteo';
$lang->metric->unitList['measure']    = 'Man-hour';
$lang->metric->unitList['hour']       = 'Hora';
$lang->metric->unitList['day']        = 'Día';
$lang->metric->unitList['manday']     = 'Man-day';
$lang->metric->unitList['percentage'] = 'Porcentaje';
$lang->metric->unitList['times']      = 'Veces';
$lang->metric->unitList['people']     = 'Personas';
$lang->metric->unitList['row']        = 'Fila';

$lang->metric->afterCreateList = array();
$lang->metric->afterCreateList['back']      = 'Volver a la página de lista';
$lang->metric->afterCreateList['implement'] = 'Implementar métrica';

$lang->metric->dateList = array();
$lang->metric->dateList['year']  = 'Año';
$lang->metric->dateList['month'] = 'Mes';
$lang->metric->dateList['week']  = 'Semana';
$lang->metric->dateList['day']   = 'Día';

$lang->metric->purposeList = array();
$lang->metric->purposeList['scale'] = "Estimación de escala";
$lang->metric->purposeList['time']  = "Control de tiempo";
$lang->metric->purposeList['cost']  = "Cálculo de costos";
$lang->metric->purposeList['hour']  = "Estadísticas por hora";
$lang->metric->purposeList['qc']    = "Control de calidad";
$lang->metric->purposeList['rate']  = "Mayor eficiencia";
$lang->metric->purposeList['other'] = "Otro";

$lang->metric->scopeList = array();
$lang->metric->scopeList['project']   = "Proyecto";
$lang->metric->scopeList['product']   = "Producto";
$lang->metric->scopeList['execution'] = "Ejecución";
$lang->metric->scopeList['user']      = "Individual";
$lang->metric->scopeList['system']    = "Sistema";
$lang->metric->scopeList['other']     = "Otro";
$lang->metric->scopeList['program']   = "Programa";

global $config;
$lang->metric->objectList = array();
if(helper::hasFeature('program')) $lang->metric->objectList['program'] = "Conjunto de programas";
$lang->metric->objectList['line']          = "Línea de producto";
$lang->metric->objectList['product']       = "Producto";
$lang->metric->objectList['project']       = "Proyecto";
$lang->metric->objectList['productplan']   = "Plan";
$lang->metric->objectList['execution']     = "Ejecución";
$lang->metric->objectList['release']       = "Lanzamiento";
$lang->metric->objectList['epic']          = $lang->ERCommon;
$lang->metric->objectList['story']         = $lang->SRCommon;
$lang->metric->objectList['requirement']   = $lang->URCommon;
$lang->metric->objectList['task']          = "Tarea";
$lang->metric->objectList['bug']           = "Bug";
$lang->metric->objectList['case']          = "Caso de prueba";
$lang->metric->objectList['user']          = "Usuario";
$lang->metric->objectList['effort']        = "Esfuerzo";
$lang->metric->objectList['doc']           = "Documento";
if(in_array($config->edition, array('biz', 'max', 'ipd'))) $lang->metric->objectList['feedback'] = "Retroalimentación";
$lang->metric->objectList['review']        = "Revisión";
if($config->edition == 'ipd' && $config->vision == 'or') $lang->metric->objectList['demand'] = "Demanda";
$lang->metric->objectList['codebase']      = "Repositorio";
$lang->metric->objectList['pipeline']      = "Pipeline";
$lang->metric->objectList['artifact']      = "Artefacto";
$lang->metric->objectList['deployment']    = "Despliegue";
$lang->metric->objectList['node']          = "Nodo";
$lang->metric->objectList['application']   = "Aplicación";
$lang->metric->objectList['cpu']           = "CPU";
$lang->metric->objectList['memory']        = "Memoria";
$lang->metric->objectList['commit']        = "Commit";
$lang->metric->objectList['mergeRequest']  = 'Solicitudes de combinación';
$lang->metric->objectList['code']          = "Código";
$lang->metric->objectList['vulnerability'] = "Vulnerabilidad";
$lang->metric->objectList['codeAnalysis']  = "Análisis de código";
if(in_array($config->edition, array('biz', 'max', 'ipd'))) $lang->metric->objectList['ticket'] = "Ticket";
if(in_array($config->edition, array('max', 'ipd')))
{
    $lang->metric->objectList['risk']  = "Riesgo";
    $lang->metric->objectList['issue'] = "Incidencia";
    $lang->metric->objectList['qa']    = "QA";
}
if(helper::hasFeature('devops')) $lang->metric->objectList['host'] = "Host";
$lang->metric->objectList['other'] = "Otro";

$lang->metric->chartTypeList = array();
$lang->metric->chartTypeList['line'] = 'Línea';
$lang->metric->chartTypeList['barX'] = 'Barras X';
$lang->metric->chartTypeList['barY'] = 'Barras Y';
$lang->metric->chartTypeList['pie']  = 'Circular';

$lang->metric->dateTypeList['nodate'] = 'Sin fecha';
$lang->metric->dateTypeList['year']   = 'Año';
$lang->metric->dateTypeList['month']  = 'Mes';
$lang->metric->dateTypeList['week']   = 'Semana';
$lang->metric->dateTypeList['day']    = 'Día';

$lang->metric->filter = new stdclass();
$lang->metric->filter->common  = 'Filtro';
$lang->metric->filter->scope   = 'Alcance';
$lang->metric->filter->object  = 'Objeto';
$lang->metric->filter->purpose = 'Propósito';
$lang->metric->filter->clear   = 'Limpiar todo';

$lang->metric->filter->clearAction = 'Limpiar %s seleccionados';
$lang->metric->filter->checkedInfo = 'Seleccionado：Alcance(%s)、Objeto(%s)、Propósito(%s)';
$lang->metric->filter->filterTotal = 'Resultado del filtro (%s)';

$lang->metric->implement = new stdclass();
$lang->metric->implement->common      = "Implementar";
$lang->metric->implement->tip         = "Implemente la lógica de cálculo de esta métrica mediante PHP.";
$lang->metric->implement->instruction = "Instrucción";
$lang->metric->implement->downloadPHP = "Descargar plantilla de métrica";

$lang->metric->implement->instructionTips = array();
$lang->metric->implement->instructionTips[] = '1. Descargue el archivo de plantilla de métrica y realice las operaciones de codificación y desarrollo sobre él. Para más detalles, consulte el manual de operación.<a class="btn text-primary ghost" target="_blank" href="https://www.zentao.net/book/zentaopms/1103.html">Manual>></a>';
$lang->metric->implement->instructionTips[] = '2. Coloque el archivo desarrollado en el siguiente directorio,<strong>mantenga el nombre del archivo igual al código de la métrica</strong>.<br/> <span class="label code-slate">{tmpRoot}metric</span>';

$lang->metric->verifyCustom = new stdclass();
$lang->metric->verifyCustom->checkCustomCalcExists = array();
$lang->metric->verifyCustom->checkCustomCalcExists['text']       = 'Verificar si el archivo de la métrica existe';
$lang->metric->verifyCustom->checkCustomCalcExists['error']      = 'El archivo de métrica no existe';

$lang->metric->verifyCustom->checkCustomCalcSyntax = array();
$lang->metric->verifyCustom->checkCustomCalcSyntax['text']       = 'Verificar si la sintaxis del archivo de la métrica es correcta';
$lang->metric->verifyCustom->checkCustomCalcSyntax['error']      = 'La sintaxis del archivo de métrica es incorrecta';

$lang->metric->verifyCustom->checkCustomCalcClassName = array();
$lang->metric->verifyCustom->checkCustomCalcClassName['text']    = 'Verificar si el nombre de la clase del archivo de la métrica es correcto';
$lang->metric->verifyCustom->checkCustomCalcClassName['error']   = 'El nombre de la clase del archivo de métrica es incorrecto';

$lang->metric->verifyCustom->checkCustomCalcClassMethod = array();
$lang->metric->verifyCustom->checkCustomCalcClassMethod['text']  = 'Verificar si el método de la clase del archivo de la métrica es correcto';
$lang->metric->verifyCustom->checkCustomCalcClassMethod['error'] = 'El método de la clase del archivo de métrica es incorrecto';

$lang->metric->verifyCustom->checkCustomCalcRuntime = array();
$lang->metric->verifyCustom->checkCustomCalcRuntime['text']      = 'Verificar si el archivo de la métrica se puede ejecutar';
$lang->metric->verifyCustom->checkCustomCalcRuntime['error']     = '';

$lang->metric->weekList = array();
$lang->metric->weekList['1'] = 'Lunes';
$lang->metric->weekList['2'] = 'Martes';
$lang->metric->weekList['3'] = 'Miércoles';
$lang->metric->weekList['4'] = 'Jueves';
$lang->metric->weekList['5'] = 'Viernes';
$lang->metric->weekList['6'] = 'Sábado';
$lang->metric->weekList['0'] = 'Domingo';

$lang->metric->old = new stdclass();

$lang->metric->old->scopeList = array();
$lang->metric->old->scopeList['project'] = 'project';
$lang->metric->old->scopeList['product'] = $lang->productCommon;
$lang->metric->old->scopeList['sprint']  = 'stage';

$lang->metric->old->purposeList = array();
$lang->metric->old->purposeList['scale']    = 'Escala';
$lang->metric->old->purposeList['duration'] = 'Duración';
$lang->metric->old->purposeList['workload'] = 'Carga de trabajo';
$lang->metric->old->purposeList['cost']     = 'Costo';
$lang->metric->old->purposeList['quality']  = 'Calidad';

$lang->metric->old->objectList = array();
$lang->metric->old->objectList['staff']       = 'Personal';
$lang->metric->old->objectList['finance']     = 'Finanzas';
$lang->metric->old->objectList['case']        = 'case';
$lang->metric->old->objectList['bug']         = 'Bug';
$lang->metric->old->objectList['review']      = 'Revisión';
$lang->metric->old->objectList['stage']       = 'Etapa';
$lang->metric->old->objectList['program']     = 'Programa';
$lang->metric->old->objectList['softRequest'] = 'SoftRequest';
$lang->metric->old->objectList['userRequest'] = 'UserRequest';

$lang->metric->old->collectTypeList = array();
$lang->metric->old->collectTypeList['crontab'] = 'Crontab';
$lang->metric->old->collectTypeList['action']  = 'Acción';

$lang->metric->tips = new stdclass();
$lang->metric->tips->nameError               = 'Error en el nombre de la función de MySQL, verifique el nombre de la función.';
$lang->metric->tips->createError             = 'No se pudo crear una función personalizada para MySQL. Mensaje de error:<br/> %s';
$lang->metric->tips->noticeSelect            = 'Las sentencias SQL solo pueden ser sentencias de consulta';
$lang->metric->tips->noticeBlack             = 'El SQL contiene la palabra clave SQL deshabilitada %s';
$lang->metric->tips->noticeVarName           = 'No se ha establecido el nombre de la variable';
$lang->metric->tips->noticeVarType           = 'No se ha establecido el tipo de la variable %s';
$lang->metric->tips->noticeShowName          = 'El nombre para mostrar de la variable %s no está definido';
$lang->metric->tips->noticeQueryValue        = 'El valor de consulta de la variable %s no está definido';
$lang->metric->tips->showNameMissed          = 'El nombre para mostrar de la variable %s no está definido';
$lang->metric->tips->errorSql                = '¡Error en la sentencia SQL! Error:';
$lang->metric->tips->click2SetParams         = 'Haga clic en el bloque de variable rojo para definir los parámetros y luego';
$lang->metric->tips->view                    = 'Ver';
$lang->metric->tips->click2InsertData        = "Haga clic en <span class='ke-icon-holder'></span> para insertar una métrica o un informe";
$lang->metric->tips->noticeUnchangeable      = "[Alcance], [Objeto], [Propósito], [Tipo de fecha] y [Código] afectan la obtención de los valores de medición y no se pueden cambiar después de la creación.";
$lang->metric->tips->noticeCode              = "El código debe ser una combinación de letras inglesas, números o guiones bajos.";
$lang->metric->tips->noticeRecalculate       = "Actualizando datos..., no manipule los datos de las métricas.";
$lang->metric->tips->noticeRepublish         = "Si hay varios lanzamientos, recalcule desde antes de la hora del último lanzamiento.";
$lang->metric->tips->banRecalculate          = "La métrica no ha sido publicada o no tiene tipo fecha";
$lang->metric->tips->noticeDeduplication     = "Deduplication...";
$lang->metric->tips->noticeDoneDeduplication = "Deduplicación completada";

$lang->metric->tips->noticeRecalculateConfig = array();
$lang->metric->tips->noticeRecalculateConfig['all']    = "De forma predeterminada, el sistema recalculará los datos históricos recopilados por tareas no programadas en las métricas publicadas.";
$lang->metric->tips->noticeRecalculateConfig['single'] = "De forma predeterminada, el sistema recalculará los datos históricos recopilados por tareas no programadas en esta métrica.";

$lang->metric->tips->noticeRewriteHistoryLib = array();
$lang->metric->tips->noticeRewriteHistoryLib['all']    = "(Si se marca, el sistema recalculará las métricas publicadas de tipo fecha con base en los datos históricos y sobrescribirá todos los registros de métricas existentes)";
$lang->metric->tips->noticeRewriteHistoryLib['single'] = "(Si se marca, el sistema recalculará esta métrica con base en los datos históricos y sobrescribirá todos los valores de métricas existentes)";

$lang->metric->recalculateLog = "%s计算完成";

$lang->metric->param = new stdclass();
$lang->metric->param->varName      = 'Nombre de la variable';
$lang->metric->param->showName     = 'Mostrar nombre';
$lang->metric->param->varType      = 'Tipo';
$lang->metric->param->defaultValue = 'Valor predeterminado';
$lang->metric->param->queryValue   = 'Valor de consulta';

$lang->metric->param->typeList['input']   = 'Entrada';
$lang->metric->param->typeList['date']    = 'Fecha';
$lang->metric->param->typeList['select']  = 'Seleccionar';

$lang->metric->param->options['project'] = $lang->projectCommon . 'Lista';
$lang->metric->param->options['product'] = $lang->productCommon . 'Lista';
$lang->metric->param->options['sprint']  = $lang->projectCommon . 'Lista';
