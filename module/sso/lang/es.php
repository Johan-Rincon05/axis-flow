<?php
/**
 * The sso module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     sso
 * @version     $Id$
 * @link        https://www.zentao.net
 */
$lang->sso = new stdclass();
$lang->sso->settings = 'Configuración';
$lang->sso->turnon   = 'Acceder a ZDOO';
$lang->sso->redirect = 'Redirigir a ZDOO';
$lang->sso->code     = 'Código';
$lang->sso->key      = 'Clave secreta';
$lang->sso->addr     = 'URL del endpoint';
$lang->sso->bind     = 'Vinculación de usuarios';
$lang->sso->addrNotice = 'Ejemplo: http://www.ranzhi.com/sys/sso-check.html';

$lang->sso->turnonList = array();
$lang->sso->turnonList[1] = 'Activado';
$lang->sso->turnonList[0] = 'Desactivado';

$lang->sso->bindType = 'Métodos de conexión';
$lang->sso->bindUser = 'Conectar usuario';

$lang->sso->bindTypeList['bind'] = 'Conectar usuario existente';
$lang->sso->bindTypeList['add']  = 'Agregar usuario';

$lang->sso->help = new stdclass();
$lang->sso->help->addr = 'Formato de URL del endpoint:
Para PATH_INFO: http://your zdoo url/sys/sso-check.html
Para GET: http://your zdoo url/sys/index.php?m=sso&f=check';
$lang->sso->help->code = 'Asegúrese de que el código sea idéntico al de ZDOO.';
$lang->sso->help->key  = 'Asegúrese de que la clave secreta sea idéntica a la de ZDOO.';

$lang->sso->deny           = 'Acceso restringido';
$lang->sso->bindNotice     = 'Sin permisos. Solicite acceso al administrador de AXIS FLOW.';
$lang->sso->bindNoPassword = 'La contraseña es obligatoria';
$lang->sso->bindNoUser     = 'Usuario o contraseña no válidos';
$lang->sso->bindHasAccount = 'El nombre de usuario ya existe. Elija otro o vincule la cuenta existente.';

$lang->sso->homeURL             = 'URL de la página de inicio de Feishu:';
$lang->sso->redirectURL         = 'URL de redirección de Feishu:';
$lang->sso->feishuConfigEmpty   = 'Configure (Notificaciones de Feishu Messenger) en [Administración]-[Notificaciones]-[Webhook].';
$lang->sso->feishuResponseEmpty = 'Se recibió una respuesta vacía';
$lang->sso->unbound             = 'Falta la vinculación de usuarios de Feishu en la configuración de Webhook de AXIS FLOW.';
