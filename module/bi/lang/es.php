<?php
$lang->bi->binNotExists        = 'El binario de DuckDB no existe.';
$lang->bi->tmpPermissionDenied = 'El directorio tmp de DuckDB no tiene permisos; debe cambiar los permisos del directorio "%s". El <br /> comando es: <br />chmod 777 -R %s.';

$lang->bi->acl = 'Control de acceso';

$lang->bi->driver = 'Controlador';
$lang->bi->driverList = array();
$lang->bi->driverList['mysql'] = 'MySQL';

$lang->bi->query      = 'Consulta';
$lang->bi->sqlQuery   = 'Consulta de sentencias SQL';
$lang->bi->sqlBuilder = 'Constructor SQL';
$lang->bi->dictionary = 'Diccionario de datos';

$lang->bi->toggleSqlText    = 'Escribir sentencias SQL manualmente';
$lang->bi->toggleSqlBuilder = 'Constructor SQL';

$lang->bi->builderStepList = array();
$lang->bi->builderStepList['table'] = 'Seleccionar tablas';
$lang->bi->builderStepList['field'] = 'Seleccionar campos';
$lang->bi->builderStepList['func']  = 'agregar campo de función';
$lang->bi->builderStepList['where'] = 'Agregar where';
$lang->bi->builderStepList['query'] = 'Agregar filtro de consulta';
$lang->bi->builderStepList['group'] = 'establecer agrupación por';

$lang->bi->stepTableTitle = 'Seleccione la tabla de datos a consultar';
$lang->bi->stepTableTip   = 'Seleccione la tabla de datos a consultar, que especifica de qué tabla o tablas desea obtener datos.';
$lang->bi->changeModeTip  = "Este cambio borrará la configuración actual del constructor y trasladará la sentencia SQL construida a la sentencia SQL manual. No podrá volver al modo Constructor SQL. ¿Desea continuar?";
$lang->bi->modeDisableTip = 'Las sentencias SQL escritas a mano son más flexibles, y no se admite volver al modo de generador de SQL';

$lang->bi->fromTable     = 'Tabla principal';
$lang->bi->leftTable     = 'Left join';
$lang->bi->joinCondition = 'Condición';
$lang->bi->joinTable     = '%s';
$lang->bi->of            = 'De';
$lang->bi->do            = 'Hacer';
$lang->bi->set           = 'Establecer';
$lang->bi->funcAs        = 'calcular, renombrar el resultado como';
$lang->bi->enable        = 'Habilitar';
$lang->bi->previewSql    = 'Vista previa de la sentencia SQL';
$lang->bi->addFunc       = 'Agregar función';
$lang->bi->emptyFuncs    = 'Función vacía。';
$lang->bi->addWhere      = 'Agregar grupo';
$lang->bi->emptyWheres   = 'Where vacío。';
$lang->bi->checkAll      = 'Marcar todo';
$lang->bi->cancelAll     = 'Cancelar todo';
$lang->bi->groupField    = 'Campo de grupo';
$lang->bi->aggField      = 'Campo de agregación';
$lang->bi->allFields     = 'Campo seleccionado/función';
$lang->bi->addQuery      = 'Agregar un filtro de consulta dinámica';
$lang->bi->emptyQuerys   = 'Filtro de consulta dinámica vacío.';
$lang->bi->emptySelect   = 'Seleccione al menos un campo.';
$lang->bi->length        = 'Longitud';

$lang->bi->allFieldsTip  = 'El campo Seleccionado y función ya está marcado.';
$lang->bi->groupFieldTip = 'Agrupar el resultado según el campo de grupo.';
$lang->bi->aggFieldTip   = 'Se configura la operación de función de agregación para el campo de agregación, a fin de obtener los datos resumidos de los distintos grupos.';

$lang->bi->aggTipA = 'Para %s';
$lang->bi->aggTipB = 'calcular, renombrar a %s';

$lang->bi->fieldTypeList = array();
$lang->bi->fieldTypeList['string'] = 'Cadena';
$lang->bi->fieldTypeList['number'] = 'Número';
$lang->bi->fieldTypeList['date']   = 'Fecha';
$lang->bi->fieldTypeList['option'] = 'Opción';
$lang->bi->fieldTypeList['object'] = 'Objeto';

$lang->bi->aggList = array();
$lang->bi->aggList['count']         = 'Conteo';
$lang->bi->aggList['countdistinct'] = 'Conteo distinto';
$lang->bi->aggList['avg']           = 'Promedio';
$lang->bi->aggList['sum']           = 'Suma';
$lang->bi->aggList['max']           = 'Máx';
$lang->bi->aggList['min']           = 'Mín';

$lang->bi->whereGroupTitle  = 'El grupo %s';
$lang->bi->addWhereGroup    = 'Agregar grupo';
$lang->bi->removeWhereGroup = 'Eliminar grupo';

$lang->bi->selectTableTip = 'Seleccionar tabla';
$lang->bi->selectFieldTip = 'Seleccionar campo';
$lang->bi->selectFuncTip  = 'Seleccionar función';
$lang->bi->selectInputTip = 'Ingrese algo';

$lang->bi->funcList = array();
$lang->bi->funcList['date']  = 'Fecha';
$lang->bi->funcList['month'] = 'Mes';
$lang->bi->funcList['year']  = 'Año';

$lang->bi->whereOperatorList = array();
$lang->bi->whereOperatorList['and'] = 'Y';
$lang->bi->whereOperatorList['or']  = 'O';

$lang->bi->whereItemOperatorList = array();
$lang->bi->whereItemOperatorList['=']     = '=';
$lang->bi->whereItemOperatorList['!=']    = '!=';
$lang->bi->whereItemOperatorList['>']     = '>';
$lang->bi->whereItemOperatorList['>=']    = '>=';
$lang->bi->whereItemOperatorList['<']     = '<';
$lang->bi->whereItemOperatorList['<=']    = '<=';
$lang->bi->whereItemOperatorList['in']    = 'IN';
$lang->bi->whereItemOperatorList['notIn'] = 'NOT IN';
$lang->bi->whereItemOperatorList['like']  = 'LIKE';

$lang->bi->queryFilterFormHeader = array();
$lang->bi->queryFilterFormHeader['table']   = 'Seleccionar tabla';
$lang->bi->queryFilterFormHeader['field']   = 'Seleccionar campo';
$lang->bi->queryFilterFormHeader['name']    = 'Nombre del filtro';
$lang->bi->queryFilterFormHeader['type']    = 'Tipo de filtro';
$lang->bi->queryFilterFormHeader['default'] = 'Valor predeterminado';

$lang->bi->emptyError     = 'No puede estar vacío';
$lang->bi->duplicateError = 'Duplicado';
$lang->bi->noSql          = 'Sin SQL.';

$lang->bi->stepFieldTitle = 'Seleccione un campo de la tabla de búsqueda';
$lang->bi->stepFieldTip   = 'Los campos de la tabla de consulta seleccionada se usan para obtener los datos requeridos de dicha tabla.';
$lang->bi->leftTableTip   = 'En SQL, un Left join es una unión entre tablas que devuelve todas las filas de la tabla izquierda y las filas coincidentes de la tabla derecha. El left join combina datos de dos tablas según los criterios especificados, donde la tabla izquierda es la tabla principal de la consulta y la tabla derecha es la tabla a unir. Consulte la forma común de consulta de tablas: left join.';

$lang->bi->stepFuncTitle = 'Nuevos campos de función';
$lang->bi->stepFuncTip   = 'Puede establecer funciones en los campos de la tabla de consulta para agregar al resultado una nueva columna con los datos que desee.';

$lang->bi->stepWhereTitle = 'Agregar condiciones de consulta deterministas';
$lang->bi->stepWhereTip   = '(1) Query criteria are used to filter the data that does not meet the requirements. You can add query criteria as needed to get the corresponding query results.<br/>(2)Use =,! For =, >, >=, <, <=, and fuzzy matching (like) condition symbols, enter the corresponding condition value in the input box to the right of the symbol.<br/>(3) When using the include (in) condition symbol, please enter one or more condition values in the input box to the right of the symbol, separated by English commas, for example: task type include (in) development, test.';

$lang->bi->stepQueryTitle = 'Agregar un filtro de consulta dinámica';
$lang->bi->stepQueryTip   = 'Agregar un filtro de consulta dinámica. El filtro de consulta dinámica es un método de filtrado que implementa consultas dinámicas insertando variables en el SQL. El filtro de resultados configurado en el tercer paso sirve para filtrar aún más los resultados de la consulta SQL.';

$lang->bi->stepGroupTitle = 'Configurar grupos y agregación';
$lang->bi->stepGroupTip   = 'La configuración de agrupación se usa para agrupar los resultados de la consulta según los valores de columnas especificadas y aplicar funciones de agregación a los demás datos agrupados para obtener información resumida.';
$lang->bi->emptyGroups    = 'Después de habilitar "Establecer grupo y agregación", el sistema mostrará aquí automáticamente el campo de consulta seleccionado y el campo de función recién agregado; <br />puede configurar el campo de agrupación en orden, así como cualquier otro campo que deba agregarse.';
