<?php
$lang->zanode->common          = 'Nodo de ejecución';
$lang->zanode->instruction     = 'Instrucciones';
$lang->zanode->browse          = 'Lista de nodos de ejecución';
$lang->zanode->nodeList        = 'Lista de nodos de ejecución';
$lang->zanode->create          = 'Crear nodo de ejecución';
$lang->zanode->edit            = 'Editar nodo de ejecución';
$lang->zanode->editAction      = 'Editar nodo de ejecución';
$lang->zanode->view            = 'Detalles del nodo de ejecución';
$lang->zanode->initTitle       = 'Inicializar nodo de ejecución';
$lang->zanode->suspend         = 'Suspender nodo de ejecución';
$lang->zanode->destroy         = 'Destruir nodo de ejecución';
$lang->zanode->boot            = 'Iniciar nodo de ejecución';
$lang->zanode->reboot          = 'Reiniciar nodo de ejecución';
$lang->zanode->shutdown        = 'Apagar nodo de ejecución';
$lang->zanode->resume          = 'Reanudar nodo de ejecución';
$lang->zanode->suspendNode     = 'Suspender';
$lang->zanode->bootNode        = 'Iniciar';
$lang->zanode->rebootNode      = 'Reiniciar';
$lang->zanode->shutdownNode    = 'Apagar';
$lang->zanode->resumeNode      = 'Reanudar';
$lang->zanode->getVNC          = 'Consola remota';
$lang->zanode->all             = 'Todos';
$lang->zanode->byQuery         = 'Buscar';
$lang->zanode->osName          = 'Sistema operativo';
$lang->zanode->osNamePhysics   = 'Sistema operativo';
$lang->zanode->image           = 'Imagen';
$lang->zanode->imageName       = 'Nombre de la imagen';
$lang->zanode->name            = 'Nombre';
$lang->zanode->start           = 'Iniciar automáticamente después de crear';
$lang->zanode->hostName        = 'Host asociado';
$lang->zanode->host            = $lang->zanode->hostName;
$lang->zanode->extranet        = 'IP/Domain';
$lang->zanode->sshCommand      = 'Comando SSH';
$lang->zanode->sshAddress      = 'Dirección SSH';
$lang->zanode->osArch          = 'Arquitectura';
$lang->zanode->cpuCores        = 'CPU';
$lang->zanode->defaultUser     = 'Usuario predeterminado';
$lang->zanode->defaultPwd      = 'Contraseña predeterminada';
$lang->zanode->memory          = 'Memoria';
$lang->zanode->diskSize        = 'Capacidad del disco';
$lang->zanode->desc            = 'Descripción';
$lang->zanode->status          = 'Estado';
$lang->zanode->mac             = 'Dirección MAC';
$lang->zanode->vnc             = 'Puerto VNC';
$lang->zanode->destroyAt       = 'Destruido el';
$lang->zanode->creater         = 'Creador';
$lang->zanode->createdDate     = 'Creado el';
$lang->zanode->confirmDelete   = "¿Seguro que desea destruir este nodo de ejecución?";
$lang->zanode->confirmBoot     = "¿Seguro que desea iniciar este nodo de ejecución?";
$lang->zanode->confirmReboot   = "¿Seguro que desea reiniciar este nodo de ejecución?";
$lang->zanode->confirmShutdown = "¿Seguro que desea apagar este nodo de ejecución?";
$lang->zanode->confirmSuspend  = "¿Seguro que desea suspender este nodo de ejecución?";
$lang->zanode->confirmResume   = "¿Seguro que desea reanudar este nodo de ejecución?";
$lang->zanode->confirmRestore  = "Este nodo de ejecución se restaurará a esta instantánea. ¿Está seguro de que desea continuar?";
$lang->zanode->actionSuccess   = 'Operación exitosa';
$lang->zanode->deleted         = "Eliminado";
$lang->zanode->scriptPath      = "Ruta del script";
$lang->zanode->syncToZentao    = "Sincronizar información del script con AXIS FLOW";
$lang->zanode->shell           = "Comando de shell";
$lang->zanode->automation      = "Configuración de automatización";
$lang->zanode->install         = "Instalar";
$lang->zanode->reinstall       = "Reinstalar";
$lang->zanode->copy            = 'Copiar';
$lang->zanode->copied          = 'Copiado';
$lang->zanode->manual          = 'Manual';
$lang->zanode->initializing    = 'Initializing...';
$lang->zanode->showPwd         = 'Mostrar contraseña';
$lang->zanode->hidePwd         = 'Ocultar contraseña';
$lang->zanode->baseInfo        = 'Información básica';
$lang->zanode->cpuUnit         = 'Núcleos';
$lang->zanode->IP              = 'IP/Domain';

$lang->zanode->typeList['node']    = 'Máquina virtual';
$lang->zanode->typeList['physics'] = 'Máquina física';

$lang->automation = new stdClass();
$lang->automation->scriptPath = $lang->zanode->scriptPath;
$lang->automation->node       = $lang->zanode->common;

$lang->zanode->notFoundAgent  = 'No se encontró el servicio del agente.';
$lang->zanode->busy           = 'Este nodo está actualmente en estado %s. Espere a que finalice la operación.';
$lang->zanode->createVmFail   = 'No se pudo crear el nodo de ejecución.';
$lang->zanode->noVncPort      = 'No se pudo recuperar el puerto del nodo de ejecución.';
$lang->zanode->nameValid      = "El nombre solo puede contener letras, números, guiones (-), guiones bajos (_) y puntos (.), y no puede comenzar con un símbolo.";
$lang->zanode->empty          = 'No se encontraron nodos de ejecución.';
$lang->zanode->runCaseConfirm = 'El sistema detectó un script de automatización para el caso de prueba seleccionado. ¿Desea ejecutarlo automáticamente?';
$lang->zanode->netError       = 'No se puede conectar a la máquina física. Verifique su red e intente de nuevo.';

$lang->zanode->createImage        = 'Exportar imagen';
$lang->zanode->createImaging      = 'Exportando imagen...';
$lang->zanode->pending            = 'Exportación de imagen pendiente';
$lang->zanode->createImageNotice  = 'El sistema exportará una imagen basada en el nodo de ejecución actual. Este proceso requiere apagar el nodo. ¿Está seguro de que desea continuar?';
$lang->zanode->createImageSuccess = 'Imagen exportada correctamente. Puede usar esta imagen para crear nodos de ejecución.';
$lang->zanode->createImageFail    = 'No se pudo exportar la imagen';
$lang->zanode->createImageButton  = 'Crear imagen';

$lang->zanode->snapshotName          = 'Nombre de la instantánea';
$lang->zanode->browseSnapshot        = 'Lista de instantáneas';
$lang->zanode->createSnapshot        = 'Crear snapshot';
$lang->zanode->editSnapshot          = 'Editar snapshot';
$lang->zanode->restoreSnapshot       = 'Restaurar a esta instantánea';
$lang->zanode->deleteSnapshot        = 'Eliminar snapshot';
$lang->zanode->snapshotEmpty         = 'No se encontraron instantáneas';
$lang->zanode->confirmDeleteSnapshot = "Las instantáneas no se pueden recuperar de la papelera una vez eliminadas. ¿Está seguro de que desea continuar?";

$lang->zanode->snapshot = new stdClass();
$lang->zanode->snapshot->statusList['creating']          = 'Creando';
$lang->zanode->snapshot->statusList['inprogress']        = 'Creando';
$lang->zanode->snapshot->statusList['completed']         = 'Listo';
$lang->zanode->snapshot->statusList['failed']            = 'Error en la creación';
$lang->zanode->snapshot->statusList['restoring']         = 'Restaurando';
$lang->zanode->snapshot->statusList['restore_failed']    = 'Restauración fallida';
$lang->zanode->snapshot->statusList['restore_completed'] = 'Listo';

$lang->zanode->snapshot->defaultSnapName = 'Instantánea inicial';
$lang->zanode->snapshot->defaultSnapUser = 'Sistema';

$lang->zanode->imageNameEmpty  = 'El nombre no puede estar vacío.';
$lang->zanode->snapStatusError = 'La instantánea no está disponible.';
$lang->zanode->snapRestoring   = 'Restaurando instantánea';

$lang->zanode->runTimeout = 'Falló la ejecución automatizada. Verifique el estado del host y del nodo de ejecución.';

$lang->zanode->apiError['-10100']     = 'No se encontró el nodo de ejecución.';
$lang->zanode->apiError['fail']       = 'La ejecución falló. Verifique el estado del host y del nodo de ejecución.';
$lang->zanode->apiError['notRunning'] = 'Verifique el estado del nodo de ejecución.';

$lang->zanode->publicList[0] = 'Privado';
$lang->zanode->publicList[1] = 'Público';

$lang->zanode->statusList['created']      = 'Creado';
$lang->zanode->statusList['launch']       = 'Iniciando';
$lang->zanode->statusList['ready']        = 'Listo';
$lang->zanode->statusList['running']      = 'En ejecución';
$lang->zanode->statusList['suspend']      = 'Suspendido';
$lang->zanode->statusList['offline']      = 'Sin conexión';
$lang->zanode->statusList['destroy']      = 'Destruido';
$lang->zanode->statusList['shutoff']      = 'Apagar';
$lang->zanode->statusList['destroy_fail'] = 'Error en la destrucción';
$lang->zanode->statusList['wait']         = 'Initializing...';
$lang->zanode->statusList['online']       = 'En línea';
$lang->zanode->statusList['restoring']    = 'Restaurando';
$lang->zanode->statusList['creating_snap'] = 'Creando snapshot';
$lang->zanode->statusList['creating_img']  = 'Exportando imagen';

$lang->zanode->initNotice = "Guardado correctamente. Inicialice el nodo de ejecución o regrese a la lista.";
$lang->zanode->initButton = "Inicializar";

$lang->zanode->init = new stdClass();
$lang->zanode->init->statusTitle   = "Estado del servicio";
$lang->zanode->init->checkStatus   = "Verificar estado de los servicios";
$lang->zanode->init->not_install   = "No instalado";
$lang->zanode->init->unknown       = "Desconocido";
$lang->zanode->init->not_available = "Instalado, pero no iniciado";
$lang->zanode->init->ready         = "Listo";
$lang->zanode->init->next          = "Siguiente";
$lang->zanode->init->button        = "Ir a configuración";

$lang->zanode->init->initSuccessNoticeTitle  = "El servicio está listo. Se requieren dos pasos más para ejecutar pruebas automatizadas en el nodo de ejecución:<br/>1. Configure el entorno de pruebas automatizadas según %s. <br/>2. Continúe con %s.";
$lang->zanode->init->initFailNotice          = "El servicio no está listo. Ejecute el comando de instalación en el nodo de ejecución. <a href='https://github.com/easysoft/zenagent/' target='_blank'>Ver ayuda</a>";
$lang->zanode->init->initFailNoticeOnPhysics = "El servicio no está instalado. Verifique el estado del servicio después de ejecutar el siguiente comando en el nodo de ejecución. <a href='https://github.com/easysoft/zenagent/' target='_blank'>Ver ayuda</a>";

$lang->zanode->init->serviceStatus = array(
    "ZenAgent" => 'not_install',
    "ZTF"      => 'not_install',
);
$lang->zanode->init->title          = "Inicializar nodo de ejecución";
$lang->zanode->init->descTitle      = "Siga estos pasos para inicializar el nodo de ejecución:";
$lang->zanode->init->initDesc       = "Ejecute el comando en el nodo de ejecución: %s %s <br>- Haga clic en el botón Comprobar estado del servicio.";

$lang->zanode->tips           = "Un nodo de ejecución es una máquina virtual o instancia de contenedor creada por el host. Sirve como entorno de pruebas para ejecutar tareas de prueba. Una vez configurado el entorno de pruebas automatizadas en el nodo, los scripts se pueden ejecutar automáticamente y los resultados se pueden ver en los resultados de ejecución de casos de prueba de AXIS FLOW correspondientes.";
$lang->zanode->scriptTips     = 'Ingrese la ruta del directorio donde se encuentran los scripts de pruebas automatizadas en el nodo de ejecución.';
$lang->zanode->shellTips      = 'Antes de ejecutar el script de pruebas automatizadas en el nodo de ejecución, puede ejecutar un comando shell personalizado.';
$lang->zanode->automationTips = "Before executing test tasks on the node, you need to configure the execution node corresponding to the {$lang->productCommon}, the directory of the automated test scripts, and any custom shell commands to execute.
";
$lang->zanode->nameUnique     = $lang->zanode->name . ' ya existe';

$lang->zanode->instructionPage = new stdClass();
$lang->zanode->instructionPage->title            = "Solución de automatización de pruebas de AXIS FLOW";
$lang->zanode->instructionPage->desc             = "La solución de automatización de pruebas de ZenTao ofrece gestión centralizada de casos de prueba, scripts de prueba, ejecución de scripts, resultados de pruebas y entornos de prueba. Reduce los costos de gestión de pruebas y mejora la eficiencia de ejecución. Esta solución le ayuda a establecer fácilmente un sistema de pruebas automatizadas adaptado a sus flujos actuales de gestión de proyectos y desarrollo, minimizando el esfuerzo de pruebas manuales.";
$lang->zanode->instructionPage->imageInstruction = 'Diagrama de arquitectura: ';
$lang->zanode->instructionPage->image            = 'static/svg/zanode_instruction_en.svg';
$lang->zanode->instructionPage->concept          = '1. Conceptos básicos';
$lang->zanode->instructionPage->conceptDesc      = 'Los hosts incluyen hosts físicos, clústeres de Kubernetes (K8s), servidores en la nube e instancias de contenedores en la nube, y se utilizan principalmente para crear máquinas virtuales o instancias de contenedores. El sistema operativo recomendado para el host es Ubuntu o una versión LTS de CentOS. Un nodo de ejecución es una máquina virtual o instancia de contenedor creada por el host, que sirve como entorno de pruebas donde se ejecutan las tareas.';
$lang->zanode->instructionPage->appIntroduction  = '2. Resumen de la aplicación';
$lang->zanode->instructionPage->ZAgentDesc       = 'ZAgent es la plataforma de código abierto de pruebas automatizadas y programación de ZenTao. Mediante tecnología de virtualización, ofrece a los usuarios un entorno de pruebas distribuido y gestionado de forma centralizada.';
$lang->zanode->instructionPage->ZAgentUrl        = 'https://github.com/easysoft/zagent/blob/main/guide/deploy/index.md';
$lang->zanode->instructionPage->ZTFDesc          = "ZTF es el framework de pruebas automatizadas de código abierto de ZenTao, que ayuda a los usuarios a gestionar de forma unificada los scripts de prueba. ZTF está profundamente integrado con ZenTao; cada script puede vincularse a un caso de prueba del sistema, lo que permite sincronizar sin problemas la información de pasos y casos.";
$lang->zanode->instructionPage->ZTFUrl           = 'https://ztf.im/';
$lang->zanode->instructionPage->KVMDesc          = 'KVM (Kernel-based Virtual Machine) es una solución de virtualización completa para Linux sobre hardware x86 con extensiones de virtualización (Intel VT o AMD-V).';
$lang->zanode->instructionPage->KVMUrl           = 'https://www.linux-kvm.org/page/Documents';
$lang->zanode->instructionPage->NginxDesc        = 'Nginx es un servidor web HTTP y proxy inverso de alto rendimiento que también ofrece servicios IMAP/POP3/SMTP.';
$lang->zanode->instructionPage->NginxUrl         = 'http://nginx.org/en/docs/';
$lang->zanode->instructionPage->noVNCDesc        = 'noVNC es una biblioteca JavaScript y aplicación cliente VNC en HTML. Funciona sin problemas en cualquier navegador web importante, incluidos los navegadores móviles (iOS y Android).';
$lang->zanode->instructionPage->noVNCUrl         = 'https://novnc.com/info.html';
$lang->zanode->instructionPage->WebsockifyDesc   = 'Websockify solo convierte el tráfico de WebSockets en tráfico de socket normal. Websockify acepta el protocolo de enlace de WebSockets, lo analiza y luego comienza a reenviar el tráfico en ambas direcciones entre el cliente y el destino.';
$lang->zanode->instructionPage->WebsockifyUrl    = 'https://github.com/novnc/websockify';
