<?php
/**
 * The search module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     search
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->search->common        = 'Buscar';
$lang->search->id            = 'ID';
$lang->search->editedDate    = 'Editado el';
$lang->search->key           = 'Clave';
$lang->search->value         = 'Valor';
$lang->search->reset         = 'Restablecer';
$lang->search->saveQuery     = 'Guardar consulta';
$lang->search->myQuery       = 'Mis consultas';
$lang->search->group1        = 'Grupo 1';
$lang->search->group2        = 'Grupo 2';
$lang->search->buildForm     = 'Formulario de búsqueda';
$lang->search->buildQuery    = 'Buscar';
$lang->search->savedQuery    = 'Consultas guardadas';
$lang->search->deleteQuery   = 'Eliminar consulta';
$lang->search->setQueryTitle = 'Ingrese un título para la consulta (busque antes de guardar):';
$lang->search->select        = "Filtro de {$lang->SRCommon}/tarea";
$lang->search->me            = 'Yo';
$lang->search->noQuery       = 'Aún no hay consultas guardadas';
$lang->search->onMenuBar     = 'Mostrar en la barra de menú';
$lang->search->custom        = 'Personalizado';
$lang->search->setCommon     = 'Establecer como consulta pública';
$lang->search->saveCondition = 'Guardar criterios de búsqueda';
$lang->search->setCondName   = 'Ingrese un nombre para esta búsqueda';

$lang->search->account  = 'Cuenta';
$lang->search->module   = 'Módulo';
$lang->search->title    = 'Título';
$lang->search->form     = 'Campos del formulario';
$lang->search->sql      = 'Condiciones SQL';
$lang->search->shortcut = $lang->search->onMenuBar;

$lang->search->operators['=']          = '=';
$lang->search->operators['!=']         = '!=';
$lang->search->operators['>']          = '>';
$lang->search->operators['>=']         = '>=';
$lang->search->operators['<']          = '<';
$lang->search->operators['<=']         = '<=';
$lang->search->operators['include']    = 'Incluir';
$lang->search->operators['between']    = 'Entre';
$lang->search->operators['notinclude'] = 'Excluir';
$lang->search->operators['belong']     = 'Pertenece a ';

$lang->search->andor['and']         = 'Y';
$lang->search->andor['or']          = 'O';

$lang->search->null = 'Nulo';

$lang->userquery        = new stdclass();
$lang->userquery->title = 'Título';

$lang->searchObjects['todo']      = 'Pendiente';
$lang->searchObjects['effort']    = 'Esfuerzo';
$lang->searchObjects['testsuite'] = 'Suite de pruebas';

$lang->search->objectType = 'Tipo de elemento';
$lang->search->objectID   = 'ID del elemento';
$lang->search->content    = 'Contenido';
$lang->search->addedDate  = 'Agregado el';

$lang->search->index      = 'Búsqueda de texto completo';
$lang->search->buildIndex = 'Reconstruir índice';
$lang->search->preview    = 'Vista previa';

$lang->search->inputWords        = 'Buscar palabras clave...';
$lang->search->result            = 'Resultados de búsqueda';
$lang->search->resultCount       = '<strong>%s</strong> elementos';
$lang->search->buildSuccessfully = 'Índice de búsqueda inicializado';
$lang->search->executeInfo       = '%s resultados encontrados en %s segundos';
$lang->search->buildResult       = "Creando índice %s: <strong class='%scount'>%s</strong> registros creados;";
$lang->search->queryTips         = "Separe los ids con comas";
$lang->search->confirmDelete     = '¿Seguro que desea eliminar este registro?';

$lang->search->modules['all']         = 'Todos';
$lang->search->modules['task']        = 'Tarea';
$lang->search->modules['bug']         = 'Bug';
$lang->search->modules['case']        = 'Caso';
$lang->search->modules['doc']         = 'Documento';
$lang->search->modules['todo']        = 'Pendiente';
$lang->search->modules['build']       = 'Builds';
$lang->search->modules['effort']      = 'Esfuerzo';
$lang->search->modules['caselib']     = 'Biblioteca de pruebas';
$lang->search->modules['product']     = $lang->productCommon;
$lang->search->modules['release']     = 'Lanzamientos';
$lang->search->modules['testtask']    = 'Solicitudes de prueba';
$lang->search->modules['testsuite']   = 'Suites de pruebas';
$lang->search->modules['testreport']  = 'Informes de pruebas';
$lang->search->modules['productplan'] = 'Planes';
$lang->search->modules['program']     = 'Programas';
$lang->search->modules['project']     = $lang->projectCommon;
$lang->search->modules['execution']   = $lang->execution->common;
$lang->search->modules['story']       = $lang->SRCommon;
$lang->search->modules['requirement'] = $lang->URCommon;
$lang->search->modules['epic']        = $lang->ERCommon;
$lang->search->modules['aiapp']       = 'IA';

$lang->search->objectTypeList['story']            = $lang->SRCommon;
$lang->search->objectTypeList['requirement']      = $lang->URCommon;
$lang->search->objectTypeList['epic']             = $lang->ERCommon;
$lang->search->objectTypeList['stage']            = 'Fases';
$lang->search->objectTypeList['sprint']           = $lang->execution->common;
$lang->search->objectTypeList['kanban']           = 'kanban';
$lang->search->objectTypeList['commonIssue']      = 'Incidencias';
$lang->search->objectTypeList['stakeholderIssue'] = 'Incidencias de interesados';

if(!helper::hasFeature('testsuite') ) unset($lang->searchObjects['testsuite']);
