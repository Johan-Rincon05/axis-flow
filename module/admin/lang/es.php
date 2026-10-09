<?php
/**
 * The admin module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     admin
 * @version     $Id: en.php 4460 2013-02-26 02:28:02Z chencongzhi520@gmail.com $
 * @link        https://www.zentao.net
 */
$lang->admin->index           = 'Inicio de administración';
$lang->admin->sso             = 'Integrado con Zdoo';
$lang->admin->ssoAction       = 'Integrado con Zdoo';
$lang->admin->safeIndex       = 'Configuración de contraseña';
$lang->admin->checkWeak       = 'Detección de contraseñas débiles';
$lang->admin->certifyMobile   = 'Verificación móvil';
$lang->admin->certifyEmail    = 'Verificación de correo electrónico';
$lang->admin->ztCompany       = 'Verificación de la organización';
$lang->admin->captcha         = 'Código de verificación';
$lang->admin->getCaptcha      = 'Enviar código';
$lang->admin->register        = 'Registrarse';
$lang->admin->resetPWDSetting = 'Restablecer contraseña';
$lang->admin->setModuleIndex  = 'Características del sistema';

/* Common data processing. */
$lang->admin->database     = 'Procesamiento de datos';
$lang->admin->startUpdate  = 'Iniciar actualización';
$lang->admin->noNeedUpdate = 'No es necesario actualizar tablas de la base de datos.';

/* Table engine. */
$lang->admin->tableEngine     = 'Motor de tabla';
$lang->admin->tableEngineTips = 'Se detectaron %s tablas que deben actualizarse.';
$lang->admin->tableEngineFail = 'No se pudo convertir el motor de la tabla %s.';
$lang->admin->changingTable   = 'Convirtiendo el motor de almacenamiento de la tabla %s...';
$lang->admin->changeSuccess   = 'El motor de la tabla %s se convirtió correctamente a InnoDB.';
$lang->admin->changeFail      = "No se pudo convertir el motor de la tabla %s. Motivo: <span class='text-red'>%s</span>.";
$lang->admin->changeFinished  = "Conversión del motor de base de datos completada: %s correctas, %s en total.";
$lang->admin->errorInnodb     = 'Su base de datos actual no admite el motor de almacenamiento InnoDB.';
$lang->admin->engineSummary   = "%s tablas no usan el motor InnoDB.";

/* Charset. */
$lang->admin->charset         = 'Juego de caracteres';
$lang->admin->charsetHasDiff  = '%s tablas necesitan actualizarse.';
$lang->admin->charsetChanging = 'Actualizando el juego de caracteres de la tabla %s...';
$lang->admin->charsetSuccess  = 'El juego de caracteres de la tabla %s ha sido convertido.';
$lang->admin->charsetFail     = 'No se pudo convertir el juego de caracteres de la tabla %s. Motivo: %s.';
$lang->admin->charsetFailed   = 'Fallido';
$lang->admin->charsetFinished = 'Conversión de juego de caracteres completada: %s correctos, %s en total.';

/* Database views. */
$lang->admin->dbView           = 'Vistas de la base de datos';
$lang->admin->dbViewTips       = 'Se detectaron %s vistas de base de datos que pueden actualizarse.';
$lang->admin->dbViewRegenerate = 'Actualizando la vista de base de datos %s...';
$lang->admin->dbViewSuccess    = 'La vista de base de datos %s fue actualizada.';
$lang->admin->dbViewFail       = 'No se pudo actualizar la vista de base de datos %s.';
$lang->admin->dbViewResult     = 'Vistas de base de datos actualizadas: %s correctas, %s en total.';
$lang->admin->dbViewFailed     = 'Falló la actualización de algunas vistas de la base de datos. Inténtelo de nuevo más tarde.';

$lang->admin->mon              = 'mes';
$lang->admin->day              = 'día';
$lang->admin->updateDynamics   = 'Actualizar dinámicas';
$lang->admin->updatePatch      = 'Actualización de parche';
$lang->admin->upgradeRecommend = 'Actualización recomendada';
$lang->admin->zentaoUsed       = 'Lleva usando ZenTao';

$lang->admin->api                  = 'API';
$lang->admin->log                  = 'Registro';
$lang->admin->setting              = 'Configuración';
$lang->admin->setFlow              = 'Establecer flujo';
$lang->admin->pluginRecommendation = 'Complementos populares';
$lang->admin->zentaoInfo           = 'Noticias de ZenTao';
$lang->admin->officialAccount      = 'Redes sociales oficiales';
$lang->admin->publicClass          = 'Seminarios web';
$lang->admin->days                 = 'Días de retención de registros';
$lang->admin->resetPWDByMail       = 'Restablecer por correo';
$lang->admin->followUs             = 'Síganos';
$lang->admin->followUsContent      = 'Manténgase al día con las noticias y eventos de ZenTao, y acceda a soporte en cualquier momento.';

$lang->admin->info = new stdclass();
$lang->admin->info->version = 'La versión actual del sistema es %s, ';
$lang->admin->info->links   = 'Puede visitar el siguiente enlace: ';
$lang->admin->info->account = 'Su cuenta de la comunidad de ZenTao es %s.';
$lang->admin->info->log     = 'Los registros que superen el período de retención se eliminarán. Habilite las tareas programadas (Cron).';

$lang->admin->notice = new stdclass();
$lang->admin->notice->register                = "Puede %s la comunidad de ZenTao (www.zentao.net) para obtener las últimas novedades.";
$lang->admin->notice->ignore                  = "Ignorar";
$lang->admin->notice->int                     = "『%s』debe ser un entero positivo.";
$lang->admin->notice->confirmDisableStoryType = "Función ‘{type}’ cerrada: el sistema eliminará todas las historias asociadas con el proyecto y la ejecución. La operación es irreversible";
$lang->admin->notice->openDependFeature       = 'Usar la función "{source}" requiere habilitar también la función "{target}".';
$lang->admin->notice->closeDependFeature      = 'Cerrar la función "{source}" requiere cerrar de forma sincronizada la función "{target}".';

$lang->admin->registerNotice = new stdclass();
$lang->admin->registerNotice->common     = 'Registrarse';
$lang->admin->registerNotice->caption    = 'Registro en la comunidad de ZenTao';
$lang->admin->registerNotice->click      = 'Registrarse';
$lang->admin->registerNotice->lblAccount = 'Defina su nombre de usuario. Debe tener al menos 3 caracteres alfanuméricos (letras y números).';
$lang->admin->registerNotice->lblPasswd  = 'Defina su contraseña. Debe tener al menos 6 caracteres (letras y números combinados).';
$lang->admin->registerNotice->submit     = 'Registrarse';
$lang->admin->registerNotice->submitHere = 'Regístrate aquí';
$lang->admin->registerNotice->bind       = "Vincular cuenta existente";
$lang->admin->registerNotice->success    = "Cuenta registrada correctamente.";

$lang->admin->bind = new stdclass();
$lang->admin->bind->caption = 'Vincular cuenta de la comunidad';
$lang->admin->bind->success = "Cuenta vinculada correctamente.";
$lang->admin->bind->submit  = "Vincular";

$lang->admin->setModule = new stdclass();
$lang->admin->setModule->module   = 'Módulos';
$lang->admin->setModule->optional = 'Funciones opcionales';
$lang->admin->setModule->opened   = 'Habilitado';
$lang->admin->setModule->closed   = 'Deshabilitado';

$lang->admin->setModule->my       = 'Panel';
$lang->admin->setModule->product  = $lang->productCommon;
$lang->admin->setModule->project  = $lang->projectCommon;
$lang->admin->setModule->qa       = 'Prueba';
$lang->admin->setModule->assetlib = 'Recurso';
$lang->admin->setModule->other    = 'Módulos generales';

$lang->admin->setModule->program        = 'Programa';
$lang->admin->setModule->testsuite      = 'Suites de pruebas';
$lang->admin->setModule->automated      = 'Automatización';
$lang->admin->setModule->AI             = 'Agentes';
$lang->admin->setModule->BI             = 'Informes';
$lang->admin->setModule->workestimation = 'Estimación de trabajo';
$lang->admin->setModule->score          = 'Puntos';
$lang->admin->setModule->repo           = 'Código';
$lang->admin->setModule->issue          = 'Incidencia';
$lang->admin->setModule->risk           = 'Riesgo';
$lang->admin->setModule->opportunity    = 'Oportunidad';
$lang->admin->setModule->process        = 'Proceso';
$lang->admin->setModule->auditplan      = 'QA';
$lang->admin->setModule->meeting        = 'Reunión';
$lang->admin->setModule->roadmap        = 'Hoja de ruta';
$lang->admin->setModule->track          = 'Matriz';
$lang->admin->setModule->ER             = $lang->ERCommon . 's';
$lang->admin->setModule->UR             = $lang->URCommon . 's';
$lang->admin->setModule->deliverable    = 'Entregable';
$lang->admin->setModule->cm             = 'Línea base';
$lang->admin->setModule->change         = 'Cambio del proyecto';
$lang->admin->setModule->researchplan   = 'Investigación';
$lang->admin->setModule->gapanalysis    = 'Capacitación';
$lang->admin->setModule->storylib       = 'Biblioteca de historias';
$lang->admin->setModule->caselib        = 'Biblioteca de casos';
$lang->admin->setModule->issuelib       = 'Biblioteca de incidencias';
$lang->admin->setModule->risklib        = 'Biblioteca de riesgos';
$lang->admin->setModule->opportunitylib = 'Biblioteca de oportunidades';
$lang->admin->setModule->practicelib    = ' Biblioteca de mejores prácticas';
$lang->admin->setModule->componentlib   = 'Biblioteca de componentes';
$lang->admin->setModule->devops         = 'CI&CD';
$lang->admin->setModule->deliverable    = 'Entregable';
$lang->admin->setModule->kanban         = 'Kanban';
$lang->admin->setModule->OA             = 'OA';
$lang->admin->setModule->deploy         = 'OPS';
$lang->admin->setModule->traincourse    = 'Academia';
$lang->admin->setModule->setCode        = 'Código';
$lang->admin->setModule->measrecord     = 'Métrica';

$lang->admin->safe = new stdclass();
$lang->admin->safe->common                   = 'Política de seguridad';
$lang->admin->safe->set                      = 'Configuración de contraseña';
$lang->admin->safe->password                 = 'Seguridad de la contraseña';
$lang->admin->safe->weak                     = 'Contraseñas débiles comunes';
$lang->admin->safe->reason                   = 'Tipo';
$lang->admin->safe->checkWeak                = 'Auditoría de contraseñas débiles';
$lang->admin->safe->changeWeak               = 'Cambiar contraseñas débiles';
$lang->admin->safe->loginCaptcha             = 'Habilitar CAPTCHA al iniciar sesión';
$lang->admin->safe->modifyPasswordFirstLogin = 'Forzar cambio de contraseña en el primer inicio de sesión';
$lang->admin->safe->passwordStrengthWeak     = 'La seguridad de la contraseña es inferior a la requerida por el sistema.';

$lang->admin->safe->modeList[0] = 'Ignorar';
$lang->admin->safe->modeList[1] = 'Media';
$lang->admin->safe->modeList[2] = 'Fuerte';

$lang->admin->safe->modeRuleList[1] = '≥6 caracteres:  A-Z, a-z y 0-9.';
$lang->admin->safe->modeRuleList[2] = '≥10 caracteres: A-Z, a-z, 0-9 y símbolos.';

$lang->admin->safe->reasonList['weak']     = 'Contraseñas débiles comunes';
$lang->admin->safe->reasonList['account']  = 'Igual que el nombre de usuario.';
$lang->admin->safe->reasonList['mobile']   = 'Igual que el número de celular.';
$lang->admin->safe->reasonList['phone']    = 'Igual que el número de teléfono.';
$lang->admin->safe->reasonList['birthday'] = 'Igual que la fecha de nacimiento.';

$lang->admin->safe->modifyPasswordList[1] = 'Obligatorio';
$lang->admin->safe->modifyPasswordList[0] = 'Opcional';

$lang->admin->safe->loginCaptchaList[1] = 'Sí';
$lang->admin->safe->loginCaptchaList[0] = 'No';

$lang->admin->safe->resetPWDList[1] = 'Habilitar';
$lang->admin->safe->resetPWDList[0] = 'Deshabilitar';

$lang->admin->safe->noticeMode     = 'El sistema verifica la seguridad de la contraseña al crear usuarios, editar usuarios o cambiar contraseñas.';
$lang->admin->safe->noticeWeakMode = 'El sistema verifica la seguridad de la contraseña al iniciar sesión, crear usuarios, editar usuarios y cambiar contraseñas.';
$lang->admin->safe->noticeStrong   = 'La seguridad aumenta con la longitud de la contraseña, el uso de mayúsculas, números y símbolos especiales, y con menos caracteres repetidos.';
$lang->admin->safe->noticeGd       = 'El sistema detectó que el módulo GD no está instalado o que la compatibilidad con FreeType no está habilitada en su servidor. La función CAPTCHA no está disponible actualmente. Instale las dependencias necesarias.';

$lang->admin->menuSetting['system']['name']        = 'Sistema';
$lang->admin->menuSetting['system']['desc']        = 'Configure componentes del sistema como copias de seguridad, chat y seguridad.';
$lang->admin->menuSetting['user']['name']          = 'Usuarios';
$lang->admin->menuSetting['user']['desc']          = 'Administre departamentos, usuarios y permisos.';
$lang->admin->menuSetting['switch']['name']        = 'Opciones de funcionalidad';
$lang->admin->menuSetting['switch']['desc']        = 'Habilite o deshabilite funciones específicas del sistema.';
$lang->admin->menuSetting['feature']['name']       = 'Funcionalidades';
$lang->admin->menuSetting['feature']['desc']       = 'Configure los elementos del sistema organizados por el menú de funciones.';
$lang->admin->menuSetting['template']['name']      = 'Plantilla de documento';
$lang->admin->menuSetting['template']['desc']      = 'Configure los tipos y el contenido de las plantillas de documentos.';
$lang->admin->menuSetting['message']['name']       = 'Notificaciones';
$lang->admin->menuSetting['message']['desc']       = 'Configure los canales de notificación y personalice las acciones de activación.';
$lang->admin->menuSetting['extension']['name']     = 'Complementos';
$lang->admin->menuSetting['extension']['desc']     = 'Explore e instale complementos.';
$lang->admin->menuSetting['dev']['name']           = 'Desarrollo personalizado';
$lang->admin->menuSetting['dev']['desc']           = 'Extienda la funcionalidad del sistema con código personalizado.';
$lang->admin->menuSetting['convert']['name']       = 'Importación de datos';
$lang->admin->menuSetting['convert']['desc']       = 'Migración de datos desde sistemas de terceros.';
$lang->admin->menuSetting['adminregister']['name'] = 'Comunidad de ZenTao';
$lang->admin->menuSetting['adminregister']['desc'] = 'Acceda a recursos de gestión de proyectos, soporte técnico y pruebe demos de varias versiones.';

$lang->admin->updateDynamics   = 'Recientes';
$lang->admin->updatePatch      = 'Parche';
$lang->admin->upgradeRecommend = 'Actualización de versión disponible';
$lang->admin->zentaoUsed       = 'ZenTao lleva acompañándole durante ';
$lang->admin->noPriv           = 'No tiene permiso para visitar este bloque.';

$lang->admin->openTag = 'ZenTao Community Edition';
$lang->admin->bizTag  = 'ZenTao Biz ';
$lang->admin->maxTag  = 'ZenTao Max ';
$lang->admin->ipdTag  = 'ZenTao IPD';

$lang->admin->bizInfoURL    = 'https://www.zentao.net/page/enterprise.html';
$lang->admin->maxInfoURL    = 'https://www.zentao.net/page/max.html';
$lang->admin->productDetail = 'Detalles';
$lang->admin->productFeature['biz'][] = 'Gestión de retroalimentación';
$lang->admin->productFeature['biz'][] = 'Gantt/Calendario/Esfuerzo de tareas';
$lang->admin->productFeature['biz'][] = 'Importación y exportación de MS Word/Excel';
$lang->admin->productFeature['biz'][] = 'Precios competitivos con soporte técnico dedicado.';
$lang->admin->productFeature['max'][] = 'Métricas del proyecto';
$lang->admin->productFeature['max'][] = 'Biblioteca de recursos';
$lang->admin->productFeature['max'][] = 'Plan de QA';
$lang->admin->productFeature['max'][] = 'Controles de permisos estrictos con acceso flexible y seguro.';
$lang->admin->productFeature['ipd'][] = 'Gestión de reserva de requerimientos integrada para la recopilación y distribución de requerimientos';
$lang->admin->productFeature['ipd'][] = 'Soporte completo para la planificación de la hoja de ruta del producto y el proceso de inicio de proyectos';
$lang->admin->productFeature['ipd'][] = 'Proporciona una gestión integral de mercado, de investigación y de informes';
$lang->admin->productFeature['ipd'][] = 'Proporciona un flujo de trabajo completo de I+D IPD con revisiones TR y DCP integradas.';

$lang->admin->community = new stdclass();
$lang->admin->community->registerTitle       = 'Unirse a la comunidad de ZenTao';
$lang->admin->community->skip                = 'Omitir';
$lang->admin->community->uxPlanTitle         = 'Programa de mejora de la experiencia de usuario de ZenTao';
$lang->admin->community->loginFailed         = 'Error al iniciar sesión.';
$lang->admin->community->loginFailedMobile   = 'Ingrese su número de celular.';
$lang->admin->community->loginFailedCode     = 'Ingrese el código de verificación.';
$lang->admin->community->officialWebsite     = 'Sitio web de ZenTao';
$lang->admin->community->uxPlanWithBookTitle = 'Programa de mejora de la experiencia de usuario de ZenTao';
$lang->admin->community->uxPlanStatusTitle   = 'Ayúdenos a entender cómo podemos mejorar.';
$lang->admin->community->mobile              = 'Número de móvil';
$lang->admin->community->smsCode             = 'Código de verificación';
$lang->admin->community->sendCode            = 'Enviar código';
$lang->admin->community->join                = 'Unirse';
$lang->admin->community->joinDesc            = 'Ayúdenos a entender cómo se usa el producto.';
$lang->admin->community->captchaTip          = 'Ingrese el código de verificación.';
$lang->admin->community->sure                = '<span style="font-size: 15px;">&nbsp;&nbsp;Confirm</span>';
$lang->admin->community->unBindText          = 'Desvincular';
$lang->admin->community->welcome             = 'Unirse a la comunidad de ZenTao';
$lang->admin->community->welcomeForBound     = "Se ha unido a la comunidad de ZenTao. Su cuenta es: ";
$lang->admin->community->advantage1          = 'Recursos de PM';
$lang->admin->community->advantage2          = 'Soporte técnico';
$lang->admin->community->advantage3          = 'Demos';
$lang->admin->community->advantage4          = 'Manual del software ZenTao';
$lang->admin->community->goCommunity         = 'Visitar la comunidad';
$lang->admin->community->giftPackage         = 'Complete sus datos para reclamar su kit de recursos.';
$lang->admin->community->enterMobile         = 'Ingrese su número de celular.';
$lang->admin->community->enterCode           = 'Ingrese el código de verificación.';
$lang->admin->community->goBack              = 'back';
$lang->admin->community->reSend              = 'resend';
$lang->admin->community->unbindTitle         = '¿Seguro que desea desvincular su cuenta del sitio web de ZenTao?';
$lang->admin->community->unbindContent       = 'Una vez desvinculado, ya no podrá acceder directamente al sitio web de ZenTao desde el software.';
$lang->admin->community->cancelButton        = 'Cancelar';
$lang->admin->community->unbindButton        = 'Desvincular';
$lang->admin->community->joinSuccess         = 'Se ha unido a la comunidad de ZenTao.';
$lang->admin->community->receiveGiftPackage  = 'Reclame su kit de recursos';
$lang->admin->community->giftPackageSuccess  = 'Enviado correctamente.';

$lang->admin->community->positionList['Project Manager']        = 'Gerente del proyecto';
$lang->admin->community->positionList['R&D Supervisor']         = 'Gerente técnico';
$lang->admin->community->positionList['Operation']              = 'Operaciones';
$lang->admin->community->positionList['Procurement']            = 'Adquisiciones';
$lang->admin->community->positionList['Product Manager']        = 'Product Owner';
$lang->admin->community->positionList['UI/UX Design']           = 'Diseñador UI/UX';
$lang->admin->community->positionList['Front Development']      = 'Desarrollador front-end';
$lang->admin->community->positionList['Backend Development']    = 'Desarrollador back-end';
$lang->admin->community->positionList['Full Stack Development'] = 'Desarrollador full stack';
$lang->admin->community->positionList['Testing/QA']             = 'Ingeniero de QA';
$lang->admin->community->positionList['Architect']              = 'Arquitecto de software';

$lang->admin->community->solvedProblems['Product Management']    = 'Gestión de productos';
$lang->admin->community->solvedProblems['Project Management']    = 'Gestión de proyectos';
$lang->admin->community->solvedProblems['BUG Management']        = 'Gestión de BUG';
$lang->admin->community->solvedProblems['Workflow Management']   = 'Gestión de flujos de trabajo';
$lang->admin->community->solvedProblems['Efficiency Management'] = 'Gestión de eficiencia';
$lang->admin->community->solvedProblems['Document Management']   = 'Gestión de documentos';
$lang->admin->community->solvedProblems['Feedback Management']   = 'Gestión de retroalimentación';
$lang->admin->community->solvedProblems['Other']                 = 'Otros';

$lang->admin->community->giftPackageFormNickname = '¿Cómo debemos dirigirnos a usted?';
$lang->admin->community->giftPackageFormPosition = 'Su cargo';
$lang->admin->community->giftPackageFormCompany  = 'Nombre de la empresa';
$lang->admin->community->giftPackageFormQuestion = '¿Qué desafíos de gestión de proyectos desea resolver con ZenTao?';

$lang->admin->community->giftPackageFailed         = 'Error en el envío.';
$lang->admin->community->giftPackageFailedNickname = 'Ingrese su nombre.';
$lang->admin->community->giftPackageFailedPosition = 'Ingrese su cargo.';
$lang->admin->community->giftPackageFailedCompany  = 'Ingrese el nombre de su empresa.';

$lang->admin->community->uxPlan = new stdclass();
$lang->admin->community->uxPlan->agree  = 'Acordado';
$lang->admin->community->uxPlan->cancel = 'Cancelado';

$lang->admin->community->unBind = new stdclass();
$lang->admin->community->unBind->success = 'Desvinculado';

$lang->admin->nickname       = 'Nombre';
$lang->admin->position       = 'Cargo';
$lang->admin->company        = 'Nombre de la empresa';
$lang->admin->solvedProblems = 'Desafíos de la gestión de proyectos';

$lang->admin->mobile  = 'Número de móvil';
$lang->admin->code    = 'Código de verificación SMS';
$lang->admin->agreeUX = 'Programa de experiencia de usuario';

$lang->admin->metricLib = new stdclass();
$lang->admin->metricLib->startUpdate = 'Iniciar actualización';
$lang->admin->metricLib->updating    = 'Actualizando';
$lang->admin->metricLib->updated     = 'Actualización completada';
$lang->admin->metricLib->tips        = "Debido al gran volumen de datos en las tablas de métricas, actualizar el índice puede tomar bastante tiempo. Realice esta operación en horarios de baja demanda. Puede continuar con otras tareas, pero no cierre esta página ni el navegador.";

include dirname(__FILE__) . '/menu.php';
