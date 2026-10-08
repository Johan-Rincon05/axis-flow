<?php
$lang->im->common           = 'Chat';
$lang->im->turnon           = 'Activado';
$lang->im->help             = 'Ayuda';
$lang->im->settings         = 'Configuración';
$lang->im->xxdServer        = 'Servidor de ZenTao';
$lang->im->downloadXXD      = 'Descargar XXD';
$lang->im->zentaoIntegrate  = 'ZenTao Integrated';
$lang->im->zentaoClient     = '¡Se ha agregado el cliente de escritorio de ZenTao!';
$lang->im->getChatUsers     = 'Obtener usuarios de chat';
$lang->im->getChatGroups    = 'Obtener grupos de chat';
$lang->im->notifyMSG        = 'Notificación';
$lang->im->sendNotification = 'Enviar mensaje al centro de notificaciones';
$lang->im->sendChatMessage  = 'Enviar mensajes al grupo de discusión';

$lang->im->createBug   = 'Crear Bug';
$lang->im->createDoc   = 'Crear documento';
$lang->im->createStory = 'Crear historia';
$lang->im->createTask  = 'Crear tarea';
$lang->im->createTodo  = 'Crear pendiente';

$lang->im->xxdIsHttps = 'Habilitar HTTPS';

$lang->im->turnonList = array();
$lang->im->turnonList[1] = 'Habilitar';
$lang->im->turnonList[0] = 'Deshabilitar';

$lang->im->xxClientConfirm = '¡Haga clic en Descargar ZenTao Desktop en la esquina inferior derecha para descargarlo!';
$lang->im->xxServerConfirm = 'Vaya al menú desplegable de usuario para descargar ZenTao Desktop Server.';

$lang->im->xxdServerTip   = 'La dirección del servidor XXD incluye protocolo, host y puerto, por ejemplo http://192.168.1.35 o http://domain. No debe ser 127.0.0.1.';
$lang->im->xxdServerEmpty = 'La dirección del servidor XXD está vacía.';
$lang->im->xxdServerError = 'La dirección del servidor XXD no debe ser 127.0.0.1.';

if(!isset($lang->im->xxd)) $lang->im->xxd = new stdclass();
$lang->im->xxd->aes  = 'AES del lado del servidor';
$lang->im->xxdAESTip = 'Esto solo afecta el cifrado AES del lado del servidor entre XXB y XXD.';
$lang->im->aesOptions['on']  = 'Habilitado';
$lang->im->aesOptions['off'] = 'Deshabilitado';

if(!isset($lang->im->bot)) $lang->im->bot = new stdclass();
$lang->im->bot->zentaoBot = new stdclass();
$lang->im->bot->zentaoBot->name = 'ZenTao';
$lang->im->bot->zentaoBot->pageSearchRegex = '/(pageID|recPerPage)=(\d+)/';

$lang->im->bot->zentaoBot->commands = new stdclass();
$lang->im->bot->zentaoBot->commands->view = new stdclass();
$lang->im->bot->zentaoBot->commands->view->description = 'Ver tarea';
$lang->im->bot->zentaoBot->commands->start = new stdclass();
$lang->im->bot->zentaoBot->commands->start->description = 'Iniciar tarea';
$lang->im->bot->zentaoBot->commands->close = new stdclass();
$lang->im->bot->zentaoBot->commands->close->description = 'Cerrar tarea';
$lang->im->bot->zentaoBot->commands->finish = new stdclass();
$lang->im->bot->zentaoBot->commands->finish->description = 'Finalizar tarea';

$lang->im->bot->zentaoBot->condKeywords = array();
$lang->im->bot->zentaoBot->condKeywords['task']            = array('task');
$lang->im->bot->zentaoBot->condKeywords['pri']             = array('pri');
$lang->im->bot->zentaoBot->condKeywords['status']          = array('status');
$lang->im->bot->zentaoBot->condKeywords['assignTo']        = array('assignto', 'user');
$lang->im->bot->zentaoBot->condKeywords['id']              = array('id');
$lang->im->bot->zentaoBot->condKeywords['taskName']        = array('taskname');
$lang->im->bot->zentaoBot->condKeywords['comment']         = array('comment');
$lang->im->bot->zentaoBot->condKeywords['left']            = array('left');
$lang->im->bot->zentaoBot->condKeywords['consumed']        = array('consumed');
$lang->im->bot->zentaoBot->condKeywords['realStarted']     = array('realStarted');
$lang->im->bot->zentaoBot->condKeywords['pageID']          = array('pageID');
$lang->im->bot->zentaoBot->condKeywords['recPerPage']      = array('recPerPage');
$lang->im->bot->zentaoBot->condKeywords['finishedDate']    = array('finishedDate');
$lang->im->bot->zentaoBot->condKeywords['currentConsumed'] = array('currentConsumed');

$lang->im->bot->zentaoBot->success        = 'Comando ejecutado correctamente.';
$lang->im->bot->zentaoBot->tasksFound     = 'Se encontraron %d tareas.';
$lang->im->bot->zentaoBot->prevPage       = 'Página anterior';
$lang->im->bot->zentaoBot->nextPage       = 'Página siguiente';
$lang->im->bot->zentaoBot->effortRecorded = 'Esfuerzo registrado para la tarea #%d.';

$lang->im->bot->zentaoBot->finishCommand = 'finish';
$lang->im->bot->zentaoBot->closeCommand  = 'close';
$lang->im->bot->zentaoBot->startCommand  = 'start';
$lang->im->bot->zentaoBot->viewCommand   = 'view';

$lang->im->bot->zentaoBot->errors = new stdclass();
$lang->im->bot->zentaoBot->errors->emptyResult     = 'No se encontró la tarea.';
$lang->im->bot->zentaoBot->errors->invalidCommand  = 'Comando no válido.';
$lang->im->bot->zentaoBot->errors->invalidStatus   = 'No se puede realizar esa acción en una tarea con estado %s.';
$lang->im->bot->zentaoBot->errors->unauthorized    = 'No está autorizado para realizar esta acción.';
$lang->im->bot->zentaoBot->errors->taskIDRequired  = 'El ID de la tarea es obligatorio.';
$lang->im->bot->zentaoBot->errors->taskNotFound    = 'Tarea no encontrada.';

$lang->im->bot->zentaoBot->finish = new stdclass();
$lang->im->bot->zentaoBot->finish->tip             = 'Haga clic en el siguiente enlace para finalizar la tarea. Se requieren el tiempo consumido y la hora de inicio de esta tarea.';
$lang->im->bot->zentaoBot->finish->tipLinkTitle    = 'Finalizar tarea';
$lang->im->bot->zentaoBot->finish->done            = 'La tarea #%d está finalizada, terminó el: %s, tiempo consumido: %.1f horas.';
$lang->im->bot->zentaoBot->finish->bugTip          = 'La tarea #%d está asociada a un bug; puede marcar el bug como resuelto haciendo clic en el siguiente enlace.';
$lang->im->bot->zentaoBot->finish->bugTipLinkTitle = 'Resolver bug';

$lang->im->bot->zentaoBot->start = new stdclass();
$lang->im->bot->zentaoBot->start->tip                = 'Haga clic en el siguiente enlace para iniciar la tarea #%d.';
$lang->im->bot->zentaoBot->start->tipLinkTitle       = 'Iniciar tarea';
$lang->im->bot->zentaoBot->start->finishWithZeroLeft = 'Las horas restantes son 0, por lo que la tarea está finalizada.';

$lang->im->bot->zentaoBot->help = <<<EOT
### 1. Task command

Command：`view task condition...`
Example：`view task dev1 P1 doing` Displays tasks assigned to dev1, with priority P1 and status in progress

| Command | Description |
| ---- | ---- |
| view task | Show all open tasks under the current username |
| view task Name Keyword | Show tasks that match the name keyword |
| view task Assignor | Show tasks whose assignor is the entered value |
| view task Priority | Show tasks with priority as entered |
| view task Status | Show tasks with status as input |
| view task ID | Show tasks with ID as input |

### 2. Task Edit command
The Task Edit command supports making status changes to tasks.

| Command | Description |
| ---- | ---- |
| start task #ID | Start the task and record its consumption/remaining hours |
| complete task #ID | Complete the task and record its consumption/remaining hours |
| close task #ID | Close the task and record its consumption/remaining work hours |
EOT;

$lang->im->bot->upgradeWelcome->link = 'https://www.zentao.net/downloads.html';

$lang->im->jitsiConferenceInviteFailMessage->upgradeWithLink = 'Ha recibido una invitación a una conferencia. Dado que su versión es demasiado antigua, no puede unirse a la conferencia desde ZenDesktop. Puede hacer clic en el siguiente enlace para unirse desde el navegador. Se recomienda actualizar a la versión 9.0 o superior para poder usar normalmente las funciones de conferencia. ';