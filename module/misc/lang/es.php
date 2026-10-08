<?php
/**
 * The misc module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     misc
 * @version     $Id: English.php 824 2010-05-02 15:32:06Z wwccss $
 * @link        https://www.zentao.net
 */
$lang->misc = new stdclass();
$lang->misc->common  = 'Varios';
$lang->misc->ping    = 'Mantener activo';
$lang->misc->view    = 'Ver';
$lang->misc->cancel  = 'Cancelar';

$lang->misc->zentao = new stdclass();
$lang->misc->zentao->version           = 'Libre %s';
$lang->misc->zentao->labels['about']   = 'Acerca de ZenTao';
$lang->misc->zentao->labels['support'] = 'Soporte técnico';
$lang->misc->zentao->labels['cowin']   = 'Ayúdenos';
$lang->misc->zentao->labels['service'] = 'Servicios';
$lang->misc->zentao->labels['others']  = 'Otros productos';

$lang->misc->zentao->icons['about']   = 'group';
$lang->misc->zentao->icons['support'] = 'question-sign';
$lang->misc->zentao->icons['cowin']   = 'hand-right';
$lang->misc->zentao->icons['service'] = 'heart';

$lang->misc->zentao->about['bizversion']   = 'Actualizar a Standard';
$lang->misc->zentao->about['official']     = "Sitio web oficial";
$lang->misc->zentao->about['changelog']    = "Notas de la versión";
$lang->misc->zentao->about['license']      = "Licencia";
$lang->misc->zentao->about['extension']    = "Marketplace de plugins";
$lang->misc->zentao->about['follow']       = "Síganos";

$lang->misc->zentao->support['vip']        = "Soporte premium";
$lang->misc->zentao->support['manual']     = "Manual del usuario";
$lang->misc->zentao->support['faq']        = "FAQ";
$lang->misc->zentao->support['ask']        = "Preguntas y respuestas";
$lang->misc->zentao->support['video']      = "Tutoriales en video";
$lang->misc->zentao->support['qqgroup']    = "Grupo oficial de QQ";

$lang->misc->zentao->cowin['reportbug']    = "Reportar un bug";
$lang->misc->zentao->cowin['feedback']     = "Sugerir una funcionalidad";
$lang->misc->zentao->cowin['recommend']    = "Recomendar a un amigo";

$lang->misc->zentao->service['zentaotrain'] = 'Capacitación de ZenTao';
$lang->misc->zentao->service['idc']         = 'ZenTao Cloud';
$lang->misc->zentao->service['custom']      = 'Desarrollo personalizado';

global $config;
$lang->misc->zentao->others['chanzhi']  = "<img src='{$config->webRoot}theme/default/images/main/chanzhi.ico' /> Zsite";
$lang->misc->zentao->others['zdoo']     = "<img src='{$config->webRoot}theme/default/images/main/zdoo.ico' /> ZDOO";

$lang->misc->zentao->others['ydisk']    = "<img src='{$config->webRoot}theme/default/images/main/ydisk.ico' /> Y Disk";
$lang->misc->zentao->others['meshiot' ] = "<img src='{$config->webRoot}theme/default/images/main/meshiot.ico' /> MeshioT";

$lang->misc->mobile      = "Acceso móvil";
$lang->misc->noGDLib     = "Acceso desde el navegador móvil: <strong>%s</strong>";
$lang->misc->copyright   = '© 2009 - ' . date("Y") . ' <a href="https://www.zentao.pm">EasyCorp</a> Correo electrónico: support@zentao.pm';
$lang->misc->checkTable  = "Verificar y reparar tablas";
$lang->misc->needRepair  = "Reparar tablas";
$lang->misc->repairTable = "Las tablas de la base de datos podrían estar dañadas por un corte de energía. Verifique y repare.";
$lang->misc->repairFail  = "Reparación fallida. Ejecute <code>myisamchk -r -f %s.MYI</code> en el directorio de la base de datos para corregirlo.";
$lang->misc->withoutCmd  = 'Reparación fallida';
$lang->misc->connectFail = "Falló la conexión con la base de datos. Error: %s.<br/>Revise el registro de errores de MySQL.";
$lang->misc->tableName   = "Nombre de la tabla";
$lang->misc->tableStatus = "Estado";
$lang->misc->novice      = "¿Es nuevo en AXIS FLOW? ¿Desea iniciar el tutorial?";
$lang->misc->showAnnual  = 'Resumen anual';
$lang->misc->annualDesc  = 'La función de Resumen anual ya está disponible (Informe -> Resumen anual). <a href="%s" class="btn btn-mini btn-primary">Ver ahora</a>';
$lang->misc->remind      = 'Aviso de nueva función';

$lang->misc->expiredTipsTitle    = 'Estimado administrador:';
$lang->misc->expiredCountTips    = 'Tiene <span class="text-blue" title="%s">%s complementos</span> próximos a vencer. Comuníquese con su administrador para renovarlos o desinstalarlos.';
$lang->misc->expiredPluginTips   = 'Complementos vencidos: %s.';
$lang->misc->expiringPluginTips  = 'Plugins próximos a vencer: %s.';
$lang->misc->expiredTipsForAdmin = '%s complementos están por vencer. Para evitar la interrupción del servicio, vaya al administrador de complementos para renovarlos o desinstalarlos.';
$lang->misc->metriclibTips       = 'Hay un nuevo índice de la biblioteca de métricas disponible. Actualizarlo mejora la velocidad de las consultas. Vaya a Administración -> Configuración -> Biblioteca de métricas para actualizarlo.';

$lang->misc->noticeRepair = "<h5>Comuníquese con su administrador para repararlo.</h5>
<h5>Si usted es administrador, inicie sesión en el servidor y cree un archivo llamado <span>%s</span>.</h5>
<p>Nota:</p>
<ol>
<li>Deje el archivo vacío.</li>
<li>Si ya existe, elimínelo y vuelva a crearlo.</li></ol>";

$lang->misc->feature = new stdclass();
$lang->misc->feature->lastest           = 'Última versión';
$lang->misc->feature->detailed          = 'Detalles';
$lang->misc->feature->introduction      = 'Nuevas funciones';
$lang->misc->feature->tutorial          = 'Tutorial';
$lang->misc->feature->tutorialImage     = 'theme/default/images/main/tutorial_en.png';
$lang->misc->feature->youngBlueTheme    = 'Tema azul juvenil';
$lang->misc->feature->youngBlueImage    = 'theme/default/images/main/new_theme_en.png';
$lang->misc->feature->visions           = "Cambiar vistas";
$lang->misc->feature->nextStep          = 'Siguiente';
$lang->misc->feature->prevStep          = 'Anterior';
$lang->misc->feature->close             = 'Comenzar';
$lang->misc->feature->learnMore         = 'Más información';
$lang->misc->feature->downloadFile      = 'Descargar notas de la versión';
$lang->misc->feature->tutorialDesc      = '<p>ZenTao 15 introduce varias funciones nuevas. Consulte el <strong>Tutorial</strong> para comenzar.</p><p>Pase el cursor sobre su avatar y haga clic en <span style="color: #0c60e1">[Tutorial]</span> para abrirlo.</p>';
$lang->misc->feature->themeDesc         = '<p>Descubra el nuevo tema "Azul juvenil" en ZenTao 15 para una interfaz moderna y fácil de usar.</p><p>Pase el cursor sobre su avatar, vaya a <span style="color: #0c60e1">[Tema]</span> y seleccione Azul juvenil para aplicarlo.</p>';
$lang->misc->feature->visionsDesc       = '<p>Las vistas se introdujeron en la versión 16.5. Gestione las tareas de I+D en la <span style="color: #0c60e1">[Vista de funciones completas]</span> y las tareas de oficina diarias en la <span style="color: #0c60e1">[Vista de gestión de operaciones]</span>.</p><p>Su vista actual se muestra junto a su avatar. Haga clic en ella para cambiar de vista.</p>';
$lang->misc->feature->visionsImage      = 'theme/default/images/main/visions_en.png';
$lang->misc->feature->aiPrompts         = 'Prompts de IA';
$lang->misc->feature->aiPromptsImage    = 'theme/default/images/main/ai_prompts_en.svg';
$lang->misc->feature->promptDesign      = 'Diseño del prompt';
$lang->misc->feature->promptDesignImage = 'theme/default/images/main/prompt_design_en.svg';
$lang->misc->feature->promptExec        = 'Ejecución del prompt';
$lang->misc->feature->promptExecImage   = 'theme/default/images/main/prompt_exec_en.svg';
$lang->misc->feature->promptLearnMore   = 'https://www.zentao.pm/book/zentaopms/1097.html';

/* Release Date. */
$lang->misc->releaseDate['22.6']        = '2026-08-24';
$lang->misc->releaseDate['22.5']        = '2026-07-23';
$lang->misc->releaseDate['22.4']        = '2026-07-21';
$lang->misc->releaseDate['22.3']        = '2026-06-08';
$lang->misc->releaseDate['22.2']        = '2026-05-09';
$lang->misc->releaseDate['22.1']        = '2026-04-13';
$lang->misc->releaseDate['22.0']        = '2026-03-05';
$lang->misc->releaseDate['22.0.beta']   = '2026-01-27';
$lang->misc->releaseDate['21.7.9']      = '2026-03-02';
$lang->misc->releaseDate['21.7.8']      = '2025-12-15';
$lang->misc->releaseDate['21.7.7']      = '2025-10-29';
$lang->misc->releaseDate['21.7.6']      = '2025-09-29';
$lang->misc->releaseDate['21.7.5']      = '2025-09-11';
$lang->misc->releaseDate['21.7.4']      = '2025-07-29';
$lang->misc->releaseDate['21.7.3']      = '2025-07-03';
$lang->misc->releaseDate['21.7.2']      = '2025-06-27';
$lang->misc->releaseDate['21.7.1']      = '2025-05-30';
$lang->misc->releaseDate['21.7']        = '2025-05-16';
$lang->misc->releaseDate['21.6.1']      = '2025-04-30';
$lang->misc->releaseDate['21.6']        = '2025-04-11';
$lang->misc->releaseDate['21.6.beta']   = '2025-03-21';
$lang->misc->releaseDate['21.5']        = '2025-03-06';
$lang->misc->releaseDate['21.4']        = '2025-01-15';
$lang->misc->releaseDate['21.3']        = '2024-12-27';
$lang->misc->releaseDate['21.2']        = '2024-12-03';
$lang->misc->releaseDate['21.1']        = '2024-11-15';
$lang->misc->releaseDate['21.0']        = '2024-11-01';
$lang->misc->releaseDate['20.8']        = '2024-10-21';
$lang->misc->releaseDate['20.7.1']      = '2024-09-30';
$lang->misc->releaseDate['20.7']        = '2024-09-14';
$lang->misc->releaseDate['20.6']        = '2024-08-30';
$lang->misc->releaseDate['20.5']        = '2024-08-16';
$lang->misc->releaseDate['18.13']       = '2024-08-09';
$lang->misc->releaseDate['20.4']        = '2024-08-02';
$lang->misc->releaseDate['20.3.0']      = '2024-07-22';
$lang->misc->releaseDate['20.2.0']      = '2024-07-10';
$lang->misc->releaseDate['20.1.1']      = '2024-06-21';
$lang->misc->releaseDate['20.1.0']      = '2024-06-03';
$lang->misc->releaseDate['20.0']        = '2024-04-30';
$lang->misc->releaseDate['18.12']       = '2024-04-12';
$lang->misc->releaseDate['20.0.beta2']  = '2024-03-15';
$lang->misc->releaseDate['18.11']       = '2024-02-28';
$lang->misc->releaseDate['18.10.1']     = '2024-01-17';
$lang->misc->releaseDate['20.0.beta1']  = '2024-01-26';
$lang->misc->releaseDate['20.0.alpha1'] = '2024-01-08';
$lang->misc->releaseDate['18.10']       = '2023-12-18';
$lang->misc->releaseDate['18.9']        = '2023-11-09';
$lang->misc->releaseDate['18.8']        = '2023-09-28';
$lang->misc->releaseDate['18.7']        = '2023-08-29';
$lang->misc->releaseDate['18.6']        = '2023-08-15';
$lang->misc->releaseDate['18.5']        = '2023-07-05';
$lang->misc->releaseDate['18.4']        = '2023-06-14';
$lang->misc->releaseDate['18.4.beta1']  = '2023-05-31';
$lang->misc->releaseDate['18.4.alpha1'] = '2023-04-21';
$lang->misc->releaseDate['18.3']        = '2023-03-15';
$lang->misc->releaseDate['18.2']        = '2023-02-27';
$lang->misc->releaseDate['18.1']        = '2023-02-08';
$lang->misc->releaseDate['18.0']        = '2023-01-03';
$lang->misc->releaseDate['18.0.beta3']  = '2022-12-26';
$lang->misc->releaseDate['18.0.beta2']  = '2022-12-14';
$lang->misc->releaseDate['18.0.beta1']  = '2022-11-16';
$lang->misc->releaseDate['17.8']        = '2022-11-02';
$lang->misc->releaseDate['17.7']        = '2022-10-19';
$lang->misc->releaseDate['17.6.2']      = '2022-09-23';
$lang->misc->releaseDate['17.6.1']      = '2022-09-08';
$lang->misc->releaseDate['17.6']        = '2022-08-26';
$lang->misc->releaseDate['17.5']        = '2022-08-11';
$lang->misc->releaseDate['17.4']        = '2022-07-27';
$lang->misc->releaseDate['17.3']        = '2022-07-13';
$lang->misc->releaseDate['17.2']        = '2022-06-29';
$lang->misc->releaseDate['17.1']        = '2022-06-16';
$lang->misc->releaseDate['17.0']        = '2022-06-02';
$lang->misc->releaseDate['17.0.beta2']  = '2022-05-26';
$lang->misc->releaseDate['17.0.beta1']  = '2022-05-06';
$lang->misc->releaseDate['16.5']        = '2022-03-24';
$lang->misc->releaseDate['16.5.beta1']  = '2022-03-16';
$lang->misc->releaseDate['16.4']        = '2022-02-15';
$lang->misc->releaseDate['16.3']        = '2022-01-26';
$lang->misc->releaseDate['16.2']        = '2022-01-17';
$lang->misc->releaseDate['16.1']        = '2022-01-11';
$lang->misc->releaseDate['16.0']        = '2021-12-24';
$lang->misc->releaseDate['16.0.beta1']  = '2021-12-06';
$lang->misc->releaseDate['15.7.1']      = '2021-11-02';
$lang->misc->releaseDate['15.7']        = '2021-10-18';
$lang->misc->releaseDate['15.6']        = '2021-10-12';
$lang->misc->releaseDate['15.5']        = '2021-09-14';
$lang->misc->releaseDate['15.4']        = '2021-08-23';
$lang->misc->releaseDate['15.3']        = '2021-08-04';
$lang->misc->releaseDate['15.2']        = '2021-07-20';
$lang->misc->releaseDate['15.0.3']      = '2021-06-24';
$lang->misc->releaseDate['15.0.2']      = '2021-06-12';
$lang->misc->releaseDate['15.0.1']      = '2021-06-06';
$lang->misc->releaseDate['15.0']        = '2021-04-30';
$lang->misc->releaseDate['15.0.rc3']    = '2021-04-16';
$lang->misc->releaseDate['15.0.rc2']    = '2021-04-09';
$lang->misc->releaseDate['15.0.rc1']    = '2021-04-05';
$lang->misc->releaseDate['12.5.3']      = '2021-01-06';
$lang->misc->releaseDate['12.5.2']      = '2020-12-18';
$lang->misc->releaseDate['12.5.1']      = '2020-11-30';
$lang->misc->releaseDate['12.5.stable'] = '2020-11-19';
// $lang->misc->releaseDate['20.0.alpha1'] = '2020-10-30';
$lang->misc->releaseDate['12.4.4']      = '2020-10-30';
$lang->misc->releaseDate['12.4.3']      = '2020-10-13';
$lang->misc->releaseDate['12.4.2']      = '2020-09-18';
$lang->misc->releaseDate['12.4.1']      = '2020-08-10';
$lang->misc->releaseDate['12.4.stable'] = '2020-07-28';
$lang->misc->releaseDate['12.3.3']      = '2020-07-02';
$lang->misc->releaseDate['12.3.2']      = '2020-06-01';
$lang->misc->releaseDate['12.3.1']      = '2020-05-15';
$lang->misc->releaseDate['12.3']        = '2020-04-08';
$lang->misc->releaseDate['12.2']        = '2020-03-25';
$lang->misc->releaseDate['12.1']        = '2020-03-10';
$lang->misc->releaseDate['12.0.1']      = '2020-02-12';
$lang->misc->releaseDate['12.0']        = '2020-01-03';
$lang->misc->releaseDate['11.7']        = '2019-11-28';
$lang->misc->releaseDate['11.6.5']      = '2019-11-08';
$lang->misc->releaseDate['11.6.4']      = '2019-10-17';
$lang->misc->releaseDate['11.6.3']      = '2019-09-24';
$lang->misc->releaseDate['11.6.2']      = '2019-09-06';
$lang->misc->releaseDate['11.6.1']      = '2019-08-23';
$lang->misc->releaseDate['11.6.stable'] = '2019-07-12';
$lang->misc->releaseDate['11.5.2']      = '2019-06-26';
$lang->misc->releaseDate['11.5.1']      = '2019-06-24';
$lang->misc->releaseDate['11.5.stable'] = '2019-05-08';
$lang->misc->releaseDate['11.4.1']      = '2019-04-08';
$lang->misc->releaseDate['11.4.stable'] = '2019-03-25';
$lang->misc->releaseDate['11.3.stable'] = '2019-02-27';
$lang->misc->releaseDate['11.2.stable'] = '2019-01-30';
$lang->misc->releaseDate['11.1.stable'] = '2019-01-04';
$lang->misc->releaseDate['11.0.stable'] = '2018-12-21';
$lang->misc->releaseDate['10.6.stable'] = '2018-11-20';
$lang->misc->releaseDate['10.5.stable'] = '2018-10-25';
$lang->misc->releaseDate['10.4.stable'] = '2018-09-28';
$lang->misc->releaseDate['10.3.stable'] = '2018-08-10';
$lang->misc->releaseDate['10.2.stable'] = '2018-08-02';
$lang->misc->releaseDate['10.0.stable'] = '2018-06-26';
$lang->misc->releaseDate['9.8.stable']  = '2018-01-17';
$lang->misc->releaseDate['9.7.stable']  = '2017-12-22';
$lang->misc->releaseDate['9.6.stable']  = '2017-11-06';
$lang->misc->releaseDate['9.5.1']       = '2017-09-27';
$lang->misc->releaseDate['9.3.beta']    = '2017-06-21';
$lang->misc->releaseDate['9.1.stable']  = '2017-03-23';
$lang->misc->releaseDate['9.0.beta']    = '2017-01-03';
$lang->misc->releaseDate['8.3.stable']  = '2016-11-09';
$lang->misc->releaseDate['8.2.stable']  = '2016-05-17';
$lang->misc->releaseDate['7.4.beta']    = '2015-11-13';
$lang->misc->releaseDate['7.2.stable']  = '2015-05-22';
$lang->misc->releaseDate['7.1.stable']  = '2015-03-07';
$lang->misc->releaseDate['6.3.stable']  = '2014-11-07';

/* Release Detail. */
$lang->misc->feature->all['21.7.2'][]      = array('title' => 'Se optimizó la funcionalidad de documentos. Ya está disponible la funcionalidad de plantillas de proyecto.', 'desc' => '');
$lang->misc->feature->all['21.7.1'][]      = array('title' => 'Se agregó una barra de herramientas superior al editor de documentos; se admitió la configuración de flujo de trabajo por proyecto; se optimizaron los requerimientos; se agregó la gestión de entregables.', 'desc' => '');
$lang->misc->feature->all['21.7'][]        = array('title' => 'Se admitió la edición masiva de etapas padre-hijo en proyectos Waterfall, Waterfall Plus e IPD; se habilitaron dependencias de tareas entre ejecuciones; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['21.6.1'][]      = array('title' => 'Bugs relacionados con documentos corregidos.', 'desc' => '');
$lang->misc->feature->all['21.6'][]        = array('title' => 'Se optimizó la importación desde Jira; se agregó la colaboración multiusuario en documentos.', 'desc' => '');
$lang->misc->feature->all['21.6.beta'][]   = array('title' => 'Se agregaron las importaciones de Jira 2.0 y Confluence.', 'desc' => '');
$lang->misc->feature->all['21.5'][]        = array('title' => 'Se optimizó el rendimiento del sistema y de los documentos; se mejoró la velocidad de carga de adjuntos en los comentarios.', 'desc' => '');
$lang->misc->feature->all['21.4'][]        = array('title' => 'Se refactorizó el módulo de oportunidades; se optimizaron los detalles de pruebas y flujos de trabajo.', 'desc' => '');
$lang->misc->feature->all['21.3'][]        = array('title' => 'Se agregó el filtro "Retrasado" a las listas de programas, proyectos y ejecuciones; se agregó una guía de inicio tras la creación de proyectos; se permitió dividir en subfases las fases con datos existentes en proyectos Cascada; se admitieron tooltips para los nuevos campos de flujo de trabajo; se refactorizó la página de creación de tickets; se agregó la función de oportunidades a los proyectos Ágiles; se habilitaron incidencias, riesgos, oportunidades, procesos, QA y reuniones para proyectos sin iteraciones.', 'desc' => '');
$lang->misc->feature->all['21.2'][]        = array('title' => 'Se agregaron aplicaciones en los lanzamientos; se agruparon los programas y se agregaron indicaciones de permisos en los menús desplegables de documentos; se incluyeron adjuntos al copiar tareas, requerimientos, Bugs y casos de prueba; se permitió a los administradores eliminar contactos públicos; se agregó la búsqueda de tareas y el filtro "Retrasado" a las listas de ejecuciones; se admitieron extensiones de flujo de trabajo para el inicio de proyectos; se agregó la gestión de versiones para BI; se optimizó la compatibilidad del editor de documentos; se agregó la función de copia para retroalimentación; se habilitó la gestión de módulos en las páginas de creación de retroalimentación vacías; se agregaron notificaciones para incidencias, riesgos, oportunidades y auditorías; se agregaron listas de auditorías y líneas base a Mi panel; se optimizaron las páginas de detalle de revisiones y auditorías; se admitió la búsqueda de tareas en los diagramas de Gantt; se agregó la confirmación de cambios de requerimientos para los diseños; se admitió la exportación de informes de estado de revisiones y líneas base.', 'desc' => '');
$lang->misc->feature->all['21.1'][]        = array('title' => 'Se optimizó el espacio de documentación de API y el acceso a las funciones principales; se mejoró la gestión de hosts; se refinaron las relaciones entre objetos; se agregó relleno con ceros en las métricas; se optimizaron DuckDB y las funciones de lanzamiento.', 'desc' => '');
$lang->misc->feature->all['21.0'][]        = array('title' => 'Se optimizaron las funciones de documentos; se mejoraron las plantillas de procesos de producto y proyecto en el diseñador de BI.', 'desc' => '');
$lang->misc->feature->all['20.8'][]        = array('title' => 'Se optimizaron las funciones de documentos y las dependencias de tareas; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['20.7.1'][]      = array('title' => 'Bugs conocidos corregidos.', 'desc' => '');
$lang->misc->feature->all['20.7'][]        = array('title' => 'Se optimizaron la guía de inicio, los menús personalizados y los flujos de trabajo; se agregó el módulo de Contribución a la vista OR.', 'desc' => '');
$lang->misc->feature->all['20.6'][]        = array('title' => 'Se admitió la configuración de múltiples vistas en los flujos de trabajo; se permitió usar campos del flujo de trabajo como condiciones en los flujos de aprobación; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['20.5'][]        = array('title' => 'Se optimizaron las funciones de documentos; se agregaron 23 métricas integradas.', 'desc' => '');
$lang->misc->feature->all['18.13'][]       = array('title' => 'Se optimizó el rendimiento de las listas de Mis pendientes, Requerimientos, Tareas y Bugs, y de las páginas de detalle de Producto y Proyecto; se agregó compatibilidad con la base de datos Dameng; se admitió copiar campos y valores de flujos de trabajo personalizados al duplicar requerimientos, tareas, bugs y casos de prueba; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['20.4'][]        = array('title' => 'Se agregó el Centro de mensajes; se mejoró la gestión de lanzamientos; se agregó la gestión de ramas y etiquetas; se admitió agregar firmantes en los flujos de aprobación.', 'desc' => '');
$lang->misc->feature->all['20.3.0'][]      = array('title' => 'Se admitió la profundización personalizada en tablas dinámicas; se habilitó la vista de requerimientos de pool, de negocio, de usuario y de I+D de varios niveles en la matriz del pool de requerimientos; se agregó confirmación para requerimientos descendentes cuando cambian los requerimientos ascendentes; se permitió asociar requerimientos de negocio y de usuario en cualquier nivel de la hoja de ruta del producto; se optimizaron los botones de acción y las etiquetas de búsqueda de requerimientos de pool, de negocio y de usuario; se recalculan automáticamente las etapas de los requerimientos ascendentes al restaurar requerimientos eliminados.', 'desc' => '');
$lang->misc->feature->all['20.2.0'][]      = array('title' => 'Se optimizó la matriz de productos; se agregó la configuración de aplicaciones de plataforma; se mejoraron los flujos de aprobación; se agregaron Requerimientos de negocio a la vista OR; se agregaron las etapas "Hoja de ruta definida" y "Acta de constitución iniciada" para los requerimientos de usuario; se admitieron niveles infinitos y el cálculo de la etapa de I+D para los requerimientos de negocio y de usuario; se admitió el cálculo de la etapa de entrega al distribuir o dividir requerimientos OR; se permitió distribuir requerimientos OR como requerimientos de negocio; se calcularon los requerimientos OR y de usuario durante las actualizaciones de versiones anteriores; se agregó el punto de revisión TR4A a la etapa de desarrollo.', 'desc' => '');
$lang->misc->feature->all['20.1.1'][]      = array('title' => 'Se refactorizaron los frameworks principales de PHP y de la interfaz, los formularios principales y los paneles para renovar la experiencia de usuario; se admitió la caché APCu para mejorar notablemente el rendimiento; se agregó búsqueda a las listas de revisión de líneas base; se agregó la función "Pendientes" a la vista OR; se admitieron etapas y puntos de revisión personalizados en proyectos IPD.', 'desc' => '');
$lang->misc->feature->all['20.1.0'][]      = array('title' => 'Se admitió el caché APCu para mejoras significativas de rendimiento; se optimizaron los diseños de interacción y los detalles de DevOps; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['20.0'][]        = array('title' => 'Se refactorizaron los frameworks centrales de PHP y de la interfaz, los formularios centrales y los paneles para una experiencia de usuario mejorada.', 'desc' => '');
$lang->misc->feature->all['18.12'][]       = array('title' => 'Se eliminó información y lógica para usuarios que no son de I+D; se agregaron recordatorios de vencimiento para servicios técnicos; se admitió la gestión de métricas por elementos, métricas personalizadas, biblioteca de métricas base y recálculo con un clic de métricas históricas; se agregó la matriz del pool de requerimientos; se permitió quitar requerimientos iniciados de las hojas de ruta; se agregaron configuraciones de retroalimentación a la vista de Gestión de operaciones; se agregó el filtro de búsqueda "Pool de demandas asociado" para los requerimientos del pool de demandas.', 'desc' => '');
$lang->misc->feature->all['20.0.beta2'][]  = array('title' => 'Se optimizaron los detalles; se corrigieron bugs conocidos.', 'desc' => '');
$lang->misc->feature->all['18.11'][]       = array('title' => 'Se agregaron miniprogramas de IA; se admitieron referencias a métricas y filtros globales en pantallas grandes; se agregó la función de retroalimentación a la vista OR; se agregaron palabras clave a los requerimientos del pool; se permitió redistribuir los requerimientos del pool tras retirar requerimientos de usuario.', 'desc' => '');
$lang->misc->feature->all['18.10.1'][]     = array('title' => 'Se agregaron notificaciones y se admitieron líneas de producto en el pool de requerimientos; se permitió distribuir un solo requerimiento a varios productos.', 'desc' => '');
$lang->misc->feature->all['20.0.beta1'][]  = array('title' => 'Se refactorizó el código central y se actualizó la interfaz para un mejor rendimiento, mayor seguridad y una experiencia de usuario mejorada.', 'desc' => '');
$lang->misc->feature->all['20.0.alpha1'][] = array('title' => 'Versión interna para una refactorización de código a gran escala y una actualización integral de la interfaz.', 'desc' => '');
$lang->misc->feature->all['18.10'][]       = array('title' => 'Se admitió la importación de casos de prueba desde otras bibliotecas; se permitió exportar documentos con escalado adaptativo de imágenes para Word; se guardaron en cookies las preferencias de orden del historial; se optimizó la lógica de edición de registros; se conservaron los adjuntos al convertir retroalimentaciones o tickets; se agregaron los campos de palabras clave y CC a la retroalimentación; se agregaron gráficos de medidor de llenado líquido; se optimizó la recolección y visualización de métricas.', 'desc' => '');
$lang->misc->feature->all['18.9'][]        = array('title' => 'Se integraron modelos de lenguaje de gran tamaño (LLM) de IA; se introdujo una versión mejorada del cliente para reuniones; se agregaron participantes a las solicitudes de prueba; se admite la vista previa en línea de archivos de video adjuntos; se permite personalizar las categorías de inspección de revisión.', 'desc' => '');
$lang->misc->feature->all['18.8'][]        = array('title' => 'Se agregaron a BI métricas y paneles de inspección de aplicaciones; se agregó un asistente de configuración a la plataforma DevOps; se agregó la gestión de mercado a la vista de Requerimientos y Gestión de mercado; se renovaron la navegación del cliente y el centro personal.', 'desc' => '');
$lang->misc->feature->all['18.7'][]        = array('title' => 'Se agregaron a DevOps la plataforma nativa de la nube, el repositorio de artefactos y la gestión de aplicaciones; se optimizaron la navegación y las interacciones de la interfaz;
se agregó el diseñador de prompts de IA con integración de LLM y aplicaciones de IA personalizadas.', 'desc' => '');
$lang->misc->feature->all['18.6'][]        = array('title' => 'Se optimizó el rendimiento de las listas de uso frecuente; se mejoraron los detalles de las funciones de BI y de los proyectos en cascada; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['18.5'][]        = array('title' => 'Se admitió la importación de cursos de Academy desde la nube y la vista previa de PDF dentro de los cursos; se optimizó la velocidad de carga de las listas de uso frecuente; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['18.4'][]        = array('title' => 'Se optimizó el rendimiento de las listas principales; se agregó compatibilidad con la base de datos Dameng; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['18.4.beta1'][]  = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['18.4.alpha1'][] = array('title' => 'Se optimizaron los permisos y las interacciones de documentos; se introdujeron escenarios de prueba; se admitió la importación de casos de prueba desde XMind; se actualizaron de forma integral los paneles, tablas dinámicas, gráficos y tablas de datos de BI.', 'desc' => '');
$lang->misc->feature->all['18.3'][]        = array('title' => 'Se admitió la personalización de elementos de idioma, menús y etiquetas de búsqueda en el desarrollo secundario; se agregaron funciones de editor activables en el desarrollo secundario; se admitió el autoguardado de borradores de formularios y la restauración de datos no guardados al regresar.', 'desc' => '');
$lang->misc->feature->all['18.2'][]        = array('title' => 'Se agregaron los modelos de gestión Agile Plus y Waterfall Plus; se admitieron subfases infinitas en proyectos Cascada; se renovó la interfaz de Administración; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['18.1'][]        = array('title' => 'Se optimizaron las interacciones de las soluciones de pruebas automatizadas; se agregó la gestión de instantáneas; se admitió la colaboración en PPT en línea en el cliente de ZenTao; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['18.0'][]        = array('title' => 'Se lanzaron soluciones de pruebas automatizadas; se agregaron tickets a la vista de gestión de operaciones; se admiten todos los tipos de notificación en los flujos de aprobación; se mejoraron las reglas de cálculo del valor ganado.', 'desc' => '');
$lang->misc->feature->all['18.0.beta3'][]  = array('title' => 'Se actualizó el módulo de Estadísticas a BI, con 5 paneles de macrogestión integrados.', 'desc' => '');
$lang->misc->feature->all['18.0.beta2'][]  = array('title' => 'Se optimizaron los productos multirrama y multiplataforma; se admitió la creación de requerimientos gemelos; los planes, builds y lanzamientos pueden vincular requerimientos y bugs entre ramas; se agregó un mecanismo de chat con bot al cliente de ZenTao.', 'desc' => '');
$lang->misc->feature->all['18.0.beta1'][]  = array('title' => 'Flujos de trabajo principales mejorados; se agregaron proyectos independientes y proyectos sin iteraciones; los proyectos pueden vincular productos de distintos programas; se permite alternar entre los modos ZenTao Lite y Gestión del ciclo de vida completo.', 'desc' => '');
$lang->misc->feature->all['17.8'][]        = array('title' => 'Se renovaron los colores de estado en listas y paneles; se optimizó la página de esfuerzo de tareas.', 'desc' => '');
$lang->misc->feature->all['17.7'][]        = array('title' => 'Se optimizaron las tablas en la versión de transición; se agregó la función de tickets; se optimizó la retroalimentación; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.6.2'][]      = array('title' => 'Se actualizaron los temas Verde, Azul ZenTao y Azul Juvenil; se admite la carga masiva de adjuntos; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.6.1'][]      = array('title' => 'Se optimizó la lógica de procesamiento de tareas multiusuario; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.6'][]        = array('title' => 'Se optimizó la lógica de procesamiento de requerimientos; se separaron los permisos de requerimientos de usuario y de software; se admitió arrastrar y soltar para gestionar dependencias de tareas en los diagramas de Gantt; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.5'][]        = array('title' => 'Se proporcionaron herramientas estadísticas visuales eficientes; se migró el motor de base de datos de MyISAM a InnoDB para un mejor rendimiento; se mejoraron los diagramas de Gantt; en Premium se permite copiar más datos, como tareas, al duplicar proyectos; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.4'][]        = array('title' => 'Se optimizó el aspecto visual de las páginas de detalle y la lógica de redirección de páginas; se mejoraron las funciones de Kanban; se optimizaron las páginas de creación y edición de documentos; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.3'][]        = array('title' => 'Se optimizó la interfaz de Estadísticas, Administración y otros módulos; se mejoró la sincronización de datos en la biblioteca de casos de prueba; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.2'][]        = array('title' => 'Se ajustó la visualización de los bloques de proyectos Ágiles; se optimizó la interfaz de programas, proyectos y pruebas; se mejoraron detalles de experiencia de usuario; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['17.1'][]        = array('title' => 'Problemas de interacción corregidos en los módulos de Ejecución y Proyecto; solicitudes de clientes de alta prioridad cumplidas; detalles de la experiencia de usuario mejorados; bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['17.0'][]        = array('title' => 'Se optimizaron detalles de la experiencia de usuario; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.0.beta2'][]  = array('title' => 'Se optimizaron detalles de la experiencia de usuario; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['17.0.beta1'][]  = array('title' => 'Solicitudes de clientes de alta prioridad cumplidas; bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['16.5'][]        = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['16.5.beta1'][]  = array('title' => 'Todo el código se unificó en un solo paquete; se optimizó el proceso de actualización.', 'desc' => '');
$lang->misc->feature->all['16.4'][]        = array('title' => 'Se admitió la importación desde Jira; se mejoró el mecanismo de extensión de plugins.', 'desc' => '');
$lang->misc->feature->all['16.3'][]        = array('title' => 'Se permitió a los Kanban vincular planes, lanzamientos, builds e iteraciones; se mejoraron detalles de experiencia de usuario.', 'desc' => '');
$lang->misc->feature->all['16.2'][]        = array('title' => 'Se agregó un Kanban profesional de I+D; se admitió la creación de proyectos de modelo Kanban; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['16.1'][]        = array('title' => 'Se agregaron la gestión de estados y las vistas Kanban a los planes; se optimizó el proceso de actualización; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['16.0'][]        = array('title' => 'Se agregó un Kanban general; se mejoró la gestión de ramas; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['16.0.beta1'][]  = array('title' => 'Se agregaron proyectos del modelo Cascada y Kanban de tareas; se mejoró la gestión y los detalles de ramas; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['15.7.1'][]      = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['15.7'][]        = array('title' => 'Se agregó la biblioteca de API; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['15.6'][]        = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['15.5'][]        = array('title' => 'Se agregaron vistas Kanban para programas, productos y proyectos; se agregó la función global "Agregar" y la guía de inicio; se corrigieron Bugs.', 'desc' => '');
$lang->misc->feature->all['15.4'][]        = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['15.3'][]        = array('title' => 'Se actualizaron los estilos de la UI; se optimizaron los documentos; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['15.2'][]        = array('title' => 'Se optimizó el proceso de actualización a nuevas versiones; se agregó el Kanban de ejecución.', 'desc' => '');

$lang->misc->feature->all['15.0.3'][]      = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['15.0.2'][]      = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['15.0.1'][]      = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['15.0'][]        = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['15.0.rc3'][]    = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['15.0.rc2'][]    = array('title' => 'Bugs corregidos; interacciones de la interfaz optimizadas.', 'desc' => '');
$lang->misc->feature->all['15.0.rc1'][]    = array('title' => 'Se actualizó a ZenTao 15; se reestructuraron la navegación y la biblioteca de documentos; se agregó la gestión de programas.', 'desc' => '');
$lang->misc->feature->all['12.5.3'][]      = array('title' => 'Se optimizó el Resumen anual.', 'desc' => '');
$lang->misc->feature->all['12.5.2'][]      = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['12.5.1'][]      = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['12.5.stable'][] = array('title' => 'Bugs corregidos; requerimientos de alta prioridad cumplidos.', 'desc' => '');

$lang->misc->feature->all['12.4.4'][] = array('title' => 'Se admitió la compatibilidad con las versiones Professional y Standard.', 'desc' => '');
$lang->misc->feature->all['12.4.3'][] = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['12.4.2'][] = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['12.4.1'][] = array('title' => 'Bugs corregidos.', 'desc' => '');

$lang->misc->feature->all['12.4.stable'][] = array('title' => 'Bugs corregidos.', 'desc' => '');

$lang->misc->feature->all['12.3.3'][] = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['12.3.2'][] = array('title' => 'Flujos de trabajo corregidos.', 'desc' => '');
$lang->misc->feature->all['12.3.1'][] = array('title' => 'Bugs de alta severidad corregidos.', 'desc' => '');
$lang->misc->feature->all['12.3'][]   = array('title' => 'Pruebas unitarias integradas; se completó el ciclo de integración continua.', 'desc' => '');
$lang->misc->feature->all['12.2'][]   = array('title' => 'Se agregaron requerimientos padre-hijo; se admitió la compatibilidad con la última versión de Xuanxuan IM.', 'desc' => '');
$lang->misc->feature->all['12.1'][]   = array('title' => 'Integración agregada.', 'desc' => '<p>Se agregó la integración y el build en Jenkins.</p>');
$lang->misc->feature->all['12.0.1'][] = array('title' => 'Bugs corregidos.', 'desc' => '');

$lang->misc->feature->all['12.0'][]   = array('title'=>'Mover la función de repositorio a zentao', 'desc' => '');
$lang->misc->feature->all['12.0'][]   = array('title'=>'Agregar resumen anual', 'desc' => 'Mostrar resumen anual por rol.');
$lang->misc->feature->all['12.0'][]   = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '');

$lang->misc->feature->all['11.7'][]   = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '<p>Se agregó la opción para habilitar los conceptos Agile.</p><p>Se agregó WeCom a los tipos de webhook.</p><p>Se admite el envío de notificaciones personales a DingTalk.</p>');
$lang->misc->feature->all['11.6.5'][] = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['11.6.4'][] = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['11.6.3'][] = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['11.6.2'][] = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '');
$lang->misc->feature->all['11.6.1'][] = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '');

$lang->misc->feature->all['11.6.stable'][] = array('title'=>'Mejora de la interfaz de la edición internacional', 'desc' => '');
$lang->misc->feature->all['11.6.stable'][] = array('title' => 'Se agregó la función de traducción.', 'desc' => '');

$lang->misc->feature->all['11.5.2'][] = array('title' => 'Se mejoró la seguridad de ZenTao; se agregaron verificaciones de contraseñas débiles al iniciar sesión.', 'desc' => '');
$lang->misc->feature->all['11.5.1'][] = array('title' => 'Se admitió el inicio de sesión sin contraseña mediante aplicaciones de terceros; se corrigieron bugs.', 'desc' => '');

$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Optimización de detalles y corrección de bugs.', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Se agregaron filtros a Dinámicas', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title' => 'Se integró el último cliente de ZenTao.', 'desc' => '');

$lang->misc->feature->all['11.4.1'][]      = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '');

$lang->misc->feature->all["11.4.stable"][] = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '<p>Se mejoró la gestión de tareas de prueba.</p><p>Se optimizaron las interacciones al vincular {$lang->SRCommon} y bugs a planes, lanzamientos y builds.</p><p>Se agregó una opción para mostrar u ocultar los documentos de las categorías hijas en la biblioteca de documentos.</p><p>Se optimizaron los detalles y se corrigieron bugs.</p>');

$lang->misc->feature->all['11.3.stable'][] = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '<p>Se agregaron planes hijos a los planes.</p><p>Se optimizaron las interacciones de los menús desplegables (Chosen).</p><p>Se agregó la configuración de zona horaria.</p><p>Se optimizaron la biblioteca de documentos y los módulos de documentos.</p>');

$lang->misc->feature->all['11.2.stable'][] = array('title' => 'Se optimizaron los detalles; se corrigieron bugs.', 'desc' => '<p>Se agregaron registros de actualización y verificaciones de la base de datos posteriores a la actualización.</p><p>Se corrigieron bugs de la integración con el cliente de ZenTao y se optimizaron otros detalles.</p>');

$lang->misc->feature->all['11.1.stable'][] = array('title' => 'Principalmente corrección de Bugs.', 'desc' => '');

$lang->misc->feature->all['11.0.stable'][] = array('title' => 'Xuanxuan IM integrado.', 'desc' => '');

$lang->misc->feature->all['10.6.stable'][] = array('title'=>'Ajustar el mecanismo de copia de seguridad', 'desc' => '<p>Se aumentaron los ajustes de copia de seguridad para hacerla más flexible</p><p>Se muestra el progreso de la copia de seguridad</p><p>Se cambia el directorio de la copia de seguridad</p>');
$lang->misc->feature->all['10.6.stable'][] = array('title' => 'Se optimizaron y ajustaron los menús.', 'desc' => '<p>Se ajustaron los menús de Administración.</p><p>Se ajustaron los menús secundarios de Mi panel y Proyecto.</p>');

$lang->misc->feature->all['10.5.stable'][] = array('title'=>'Ajustar el diseño del documento', 'desc' => "<p>Se ajustó el método de diseño del lado izquierdo de la biblioteca de documentos.</p><p>Se agregaron condiciones de filtro en la parte inferior del menú de la biblioteca de documentos.</p>");
$lang->misc->feature->all['10.5.stable'][] = array('title' => 'Se ajustó la lógica de las tareas hijas y se optimizó la visualización de tareas padre-hijo.', 'desc' => '');

$lang->misc->feature->all['10.4.stable'][] = array('title'=>'Optimización y ajuste de la nueva interfaz', 'desc' => '<p>La página de detalle vuelve al diseño anterior.</p><p>Se refactorizaron los formularios para agregar páginas de usuario.</p><p>Al ejecutar casos de uso, no se actualiza el estado del caso de uso si el usuario elige manualmente aprobar y registrar los resultados.</p>');
$lang->misc->feature->all['10.4.stable'][] = array('title'=>'Después de que el equipo del usuario entre en hibernación y falle el inicio de sesión, la sesión se actualizará de nuevo.', 'desc' => '');
$lang->misc->feature->all['10.4.stable'][] = array('title' => 'Se actualizaron los mecanismos de API existentes.', 'desc' => '');

$lang->misc->feature->all['10.3.stable'][] = array('title' => 'Bugs corregidos.', 'desc' => '');
$lang->misc->feature->all['10.2.stable'][] = array('title' => 'Xuanxuan IM integrado.', 'desc' => '');

$lang->misc->feature->all['10.0.stable'][] = array('title' => 'Interfaz y experiencia de interacción renovadas.', 'desc' => '<ol><li>Rediseño de Mi panel.</li><li>Rediseño de la página de Dinámicas.</li><li>Rediseño del Inicio de producto.</li><li>Rediseño de la Vista general del producto.</li><li>Rediseño de la Hoja de ruta.</li><li>Rediseño del Inicio de proyecto.</li><li>Rediseño de la Vista general del proyecto.</li><li>Rediseño del Inicio de QA.</li><li>Rediseño del Inicio de documentos.</li><li>Se agregó el bloque de estadísticas de trabajo a Mi panel.</li><li>Se permite agregar, editar y finalizar pendientes directamente en el bloque de Pendientes de Mi panel.</li><li>Se agregó el bloque de estadísticas de producto al Inicio de producto.</li><li>Se agregó el bloque de vista general del producto al Inicio de producto.</li><li>Se agregó el bloque de estadísticas de proyecto al Inicio de proyecto.</li><li>Se agregó el bloque de vista general del proyecto al Inicio de proyecto.</li><li>Se agregó el bloque de estadísticas de QA al Inicio de QA.</li><li>Se movieron los botones "Todos los productos", "Inicio de producto", "Todos los proyectos", "Inicio de proyecto" e "Inicio de QA" de la derecha a la izquierda de la navegación secundaria.</li><li>Se movieron los botones Kanban, Burndown, Vista de árbol y Vista de grupo de la lista de tareas del proyecto de la navegación terciaria a la secundaria; se integraron la Vista de árbol, la Vista de grupo y la Lista de tareas en un menú desplegable.</li><li>Se agruparon los elementos de navegación relacionados con QA (Bugs, Builds y Solicitudes de prueba) en un único menú desplegable en la navegación secundaria del proyecto.</li><li>Se agruparon las listas de Builds y Solicitudes de prueba por producto para una disposición más lógica.</li><li>Se agregó una vista de árbol al lado izquierdo de Documentos.</li><li>Se agregaron funciones de acceso rápido a Documentos, incluidas "Actualizados recientemente", "Mis documentos" y "Mi colección".</li><li>Se agregó la función "Favorito" a Documentos.</li></ol>');

$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Gestión centralizada de mensajes', 'desc' => '<p>Se reúnen el correo, los SMS y el webhook en Mensajes</p>');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Agregar pendiente recurrido', 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>"Agregar bloque de 'AssignedToMe'", 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title' => 'Se admitió seleccionar varias solicitudes de prueba en un proyecto para generar informes.', 'desc' => '');

$lang->misc->feature->all['9.7.stable'][] = array('title' => 'Se optimizó el paquete internacional; se agregaron datos de demostración en inglés.', 'desc' => '');

$lang->misc->feature->all['9.6.stable'][] = array('title'=>'Se agregó la función de interfaz Webhook', 'desc' => 'Admite comunicación con BearyChat y Dingding');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'Punto agregado', 'desc' => 'Más habilidad en la aplicación, más puntaje');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'Se agregaron tareas de varios usuarios y tareas hijas al proyecto', 'desc' => '');
$lang->misc->feature->all['9.6.stable'][] = array('title' => 'Se agregó la función de línea de producto a la vista de Producto.', 'desc' => '');

$lang->misc->feature->all['9.5.1'][] = array('title' => 'Se agregaron acciones restringidas.', 'desc' => '');

$lang->misc->feature->all['9.3.beta'][] = array('title' => 'Se actualizó el framework; se reforzó la seguridad de la aplicación.', 'desc' => '');

$lang->misc->feature->all['9.1.stable'][] = array('title'=>'optimizar la vista de pruebas', 'desc' => '<p>Se agregaron Suite de pruebas, Biblioteca de casos e Informe de QA</p>');
$lang->misc->feature->all['9.1.stable'][] = array('title' => 'Se admitió la agrupación de pasos de prueba en los casos de prueba.', 'desc' => '');

$lang->misc->feature->all['9.0.beta'][] = array('title'=>'Se ha agregado ZenTao CloudMail.', 'desc' => '<p>ZenTao CloudMail es un servicio de correo electrónico gratuito lanzado conjuntamente con SendCloud. Una vez vinculado con ZenTao y verificado, los usuarios pueden usar este servicio.</p>');
$lang->misc->feature->all['9.0.beta'][] = array('title' => 'Se optimizaron los editores de texto enriquecido y Markdown.', 'desc' => '');

$lang->misc->feature->all['8.3.stable'][] = array('title' => 'Se optimizaron las funciones de documentos.', 'desc' => '<p>Se agregó el Inicio de documentos, se reorganizó la estructura de la biblioteca de documentos y se agregaron permisos.</p><p>Se agregaron varios modos de exploración de archivos, se admite Markdown en los documentos y se agregaron permisos de documentos y gestión de versiones de archivos.</p>');

$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Inicio personalizado', 'desc' => '<p>Puede agregar bloques al Panel y organizar el diseño.</p><p> Mi zona, Producto, Proyecto y QA admiten la personalización de la página de inicio mencionada anteriormente. </p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Navegación personalizada', 'desc' => '<p>Puede decidir qué proyecto se muestra en la barra de navegación y el orden en que se muestran los proyectos en la barra.</p><p> Pase el cursor sobre la barra de navegación y aparecerá un signo a su derecha. Haga clic en el signo y se mostrará un cuadro de diálogo "Navegación personalizada". Arrastre el nombre del bloque para cambiar su orden en la barra de navegación.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Agregar/editar personalizados por lote', 'desc' => '<p>Puede agregar y editar campos por lotes en las páginas personalizadas.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Historia/Tarea/Bug/Caso personalizado', 'desc' => '<p>Puede personalizar los campos al agregar una Historia/Tarea/Bug/Caso.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Exportación personalizada', 'desc' => '<p>Puede personalizar los campos al exportar las páginas de Historias/Tareas/Bugs/Casos. También puede guardarlo como plantilla para la siguiente exportación.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Búsqueda de historia/tarea/bug/caso ', 'desc' => '<p>En las páginas de lista de Historias/Tareas/Bugs/Casos, puede realizar una búsqueda combinada por Módulos y Pestañas.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title' => 'Se agregó el tutorial de bienvenida.', 'desc' => '<p>Se agregó un tutorial de incorporación para ayudar a los nuevos usuarios a aprender rápidamente a usar ZenTao.</p>');

$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Se agregó la función de ramas de producto.', 'desc' => '<p>Se agregó la rama/plataforma del producto, y sus Historias/Planes/Bugs/Casos/Módulos relacionados también tienen rama.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Se mejoró el módulo de lanzamientos.', 'desc' => '<p>Se agregó la acción Detener. Si se detiene su gestión, el Lanzamiento no se mostrará al reportar un Bug.</p><p>Los bugs que se hayan omitido en el Lanzamiento se vincularán manualmente.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title' => 'Se optimizaron las páginas de creación de {$lang->SRCommon} y bugs.', 'desc' => '');

$lang->misc->feature->all['7.2.stable'][] = array('title'=>'Seguridad mejorada', 'desc' => '<p>Se reforzó la verificación de contraseñas débiles del administrador.</p><p>Se requiere el archivo ok al codificar o cargar una extensión.</p><p>Las acciones sensibles requieren la contraseña del administrador.</p><p>Se aplican striptags y specialchars al contenido ingresado en ZenTao.</p>');
$lang->misc->feature->all['7.2.stable'][] = array('title' => 'Se optimizaron los detalles.', 'desc' => '');

$lang->misc->feature->all['7.1.stable'][] = array('title'=>'Se agregó el framework de Cron.', 'desc' => 'Se agregó el framework de Cron. Se han agregado la notificación diaria, la actualización del burndown, la copia de seguridad, el envío de correo, etc.');
$lang->misc->feature->all['7.1.stable'][] = array('title' => 'Se proporcionaron paquetes RPM y DEB.', 'desc' => '');

$lang->misc->feature->all['6.3.stable'][] = array('title'=>'Se agregó la tabla de datos.', 'desc' => '<p>Los campos se pueden personalizar en la tabla de datos y los datos se mostrarán según los campos personalizados.</p>');
$lang->misc->feature->all['6.3.stable'][] = array('title' => 'Se continuó optimizando los detalles.', 'desc' => '');
