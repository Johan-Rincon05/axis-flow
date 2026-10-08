<?php
$lang->zahost->id             = 'ID';
$lang->zahost->common         = 'Host';
$lang->zahost->browse         = 'Lista de hosts';
$lang->zahost->create         = 'Agregar host';
$lang->zahost->view           = 'Detalles del host';
$lang->zahost->initTitle      = 'Inicializar host';
$lang->zahost->edit           = 'Editar';
$lang->zahost->editAction     = 'Editar host';
$lang->zahost->delete         = 'Eliminar';
$lang->zahost->cancel         = "Cancelar descarga";
$lang->zahost->deleteAction   = 'Eliminar host';
$lang->zahost->byQuery        = 'Buscar';
$lang->zahost->all            = 'Todos los hosts';
$lang->zahost->browseNode     = 'Nodos de ejecución';
$lang->zahost->deleted        = "Eliminado";
$lang->zahost->copy           = 'Copiar';
$lang->zahost->copied         = 'Copiado';
$lang->zahost->baseInfo       = 'Información básica';
$lang->zahost->hostType       = 'Tipo de host';

$lang->zahost->name        = 'Nombre';
$lang->zahost->IP          = 'IP/Domain';
$lang->zahost->extranet    = 'IP/Dominio externo';
$lang->zahost->memory      = 'Memoria';
$lang->zahost->cpuCores    = 'CPU';
$lang->zahost->diskSize    = 'Capacidad del disco';
$lang->zahost->desc        = 'Descripción';
$lang->zahost->type        = 'Tipo';
$lang->zahost->status      = 'Estado';

$lang->zahost->createdBy    = 'Creador';
$lang->zahost->createdDate  = 'Creado el';
$lang->zahost->editedBy     = 'Última modificación por';
$lang->zahost->editedDate   = 'Última modificación el';
$lang->zahost->registerDate = 'Fecha de registro';

$lang->zahost->memorySize    = $lang->zahost->memory;
$lang->zahost->cpuCoreNum    = $lang->zahost->cpuCores;
$lang->zahost->os            = 'Sistema operativo';
$lang->zahost->imageName     = 'Archivo de imagen';
$lang->zahost->browseImage   = 'Lista de imágenes';
$lang->zahost->downloadImage = 'Descargar imagen';

$lang->zahost->createZanode        = 'Crear nodo de ejecución';
$lang->zahost->initNotice          = 'Host guardado correctamente. Inicialícelo o regrese a la lista de hosts.';
$lang->zahost->createZanodeNotice  = 'Inicialización exitosa. Ya puede crear un nodo de ejecución.';
$lang->zahost->downloadImageNotice = 'Inicialización exitosa. Descargue la imagen para crear un nodo de ejecución.';
$lang->zahost->undeletedNotice     = "No se puede eliminar este host porque tiene nodos de ejecución asociados.";
$lang->zahost->uninitNotice        = 'Inicialice primero el host.';
$lang->zahost->netError            = 'No se puede conectar al host. Verifique su red e intente de nuevo.';

$lang->zahost->init = new stdclass;
$lang->zahost->init->statusTitle = "Estado";
$lang->zahost->init->checkStatus   = "Verificar estado de los servicios";
$lang->zahost->init->not_install   = "No instalado";
$lang->zahost->init->not_available = "Instalado, pero no iniciado";
$lang->zahost->init->ready         = "Listo";
$lang->zahost->init->next          = "Siguiente";

$lang->zahost->init->initFailNotice    = "El servicio no está listo. Ejecute el comando de instalación en el host, o <a href='...' target='_blank'>Ver ayuda</a>.";
$lang->zahost->init->initSuccessNotice = "El servicio está listo. Puede %s después de %s.";

$lang->zahost->init->serviceStatus = array();
$lang->zahost->init->serviceStatus['kvm']        = 'No instalado';
$lang->zahost->init->serviceStatus['nginx']      = 'No instalado';
$lang->zahost->init->serviceStatus['novnc']      = 'No instalado';
$lang->zahost->init->serviceStatus['websockify'] = 'No instalado';

$lang->zahost->init->title       = "Inicializar host";
$lang->zahost->init->descTitle   = "Siga estos pasos para inicializar el host:";
$lang->zahost->init->initDesc    = "Ejecute el comando en el host: %s %s. Luego haga clic en el botón Comprobar estado del servicio.";
$lang->zahost->init->statusTitle = "Estado del servicio";

$lang->zahost->image = new stdclass;
$lang->zahost->image->browseImage   = 'Lista de imágenes';
$lang->zahost->image->createImage   = 'Crear imagen';
$lang->zahost->image->choseImage    = 'Seleccionar imagen';
$lang->zahost->image->downloadImage = $lang->zahost->downloadImage;
$lang->zahost->image->startDowload  = 'Iniciar descarga';

$lang->zahost->image->common     = 'Imagen';
$lang->zahost->image->name       = 'Nombre';
$lang->zahost->image->desc       = 'Descripción';
$lang->zahost->image->path       = 'Ruta del archivo';
$lang->zahost->image->memory     = $lang->zahost->memory;
$lang->zahost->image->disk       = $lang->zahost->diskSize;
$lang->zahost->image->os         = $lang->zahost->os;
$lang->zahost->image->imageName  = $lang->zahost->imageName;
$lang->zahost->image->progress   = 'Progreso de descarga';

$lang->zahost->image->statusList['notDownloaded'] = 'Disponible para descarga';
$lang->zahost->image->statusList['created']       = 'Descargando';
$lang->zahost->image->statusList['canceled']      = 'Disponible para descarga';
$lang->zahost->image->statusList['inprogress']    = 'Descargando';
$lang->zahost->image->statusList['pending']       = 'En espera de descarga';
$lang->zahost->image->statusList['completed']     = 'Listo';
$lang->zahost->image->statusList['failed']        = 'Fallido';

$lang->zahost->image->imageEmpty            = 'No se encontraron imágenes.';
$lang->zahost->image->downloadImageFail     = 'No se pudo crear la tarea de descarga de la imagen.';
$lang->zahost->image->downloadImageSuccess  = 'La tarea de descarga de la imagen se creó correctamente.';
$lang->zahost->image->cancelDownloadFail    = 'No se pudo cancelar la tarea de descarga de la imagen.';
$lang->zahost->image->cancelDownloadSuccess = 'La tarea de descarga de la imagen se canceló correctamente.';

$lang->zahost->empty         = 'No se encontraron hosts.';

$lang->zahost->statusList['wait']    = 'Inicialización pendiente';
$lang->zahost->statusList['ready']   = 'Listo';
$lang->zahost->statusList['online']  = 'En línea';
$lang->zahost->statusList['offline'] = 'Sin conexión';
$lang->zahost->statusList['busy']    = 'Ocupado';

$lang->zahost->vsoft = 'Software de virtualización';
$lang->zahost->softwareList['kvm'] = 'KVM';

$lang->zahost->unitList['GB'] = 'GB';
$lang->zahost->unitList['TB'] = 'TB';

$lang->zahost->cpuUnit = 'Núcleos';

$lang->zahost->zaHostType                 = 'Tipo de host';
$lang->zahost->zaHostTypeList['physical'] = 'Host físico';

$lang->zahost->confirmDelete           = '¿Seguro que desea eliminar este host?';
$lang->zahost->cancelDelete            = '¿Seguro que desea cancelar esta tarea de descarga?';

$lang->zahost->notice = new stdclass();
$lang->zahost->notice->ip              = 'Formato no válido para "%s".';
$lang->zahost->notice->registerCommand = 'Comando de registro del host: ./zagent-host -t host -s http://%s:%s -i %s -p 8086 -secret %s';
$lang->zahost->notice->loading         = 'loading...';
$lang->zahost->notice->noImage         = 'No hay archivos de imagen disponibles.';

$lang->zahost->tips = 'Los hosts incluyen hosts físicos, clústeres de Kubernetes (K8s), servidores en la nube e instancias de contenedores en la nube. Se utilizan principalmente para crear máquinas virtuales o instancias de contenedores. El sistema operativo recomendado para el host es Ubuntu o una versión LTS de CentOS.';

$lang->zahost->automation = new stdclass();
$lang->zahost->automation->title = 'Solución de automatización de pruebas';
$lang->zahost->automation->abstract      = 'Introducción';
$lang->zahost->automation->abstractSpec  = 'La solución de automatización de pruebas de ZenTao ofrece gestión centralizada de casos de prueba, scripts de prueba, ejecución de scripts, resultados de pruebas y entornos de prueba. Reduce los costos de gestión de pruebas y mejora la eficiencia de ejecución. Esta solución le ayuda a establecer fácilmente un sistema de pruebas automatizadas adaptado a sus flujos actuales de gestión de proyectos y desarrollo, minimizando el esfuerzo de pruebas manuales.';
$lang->zahost->automation->framework     = 'Arquitectura';
$lang->zahost->automation->frameworkSpec = 'Arquitectura de la solución basada en virtualización KVM:';

$lang->zahost->automation->feature1           = '1. Conceptos básicos';
$lang->zahost->automation->feature1Spec       = "Los hosts incluyen hosts físicos, clústeres de Kubernetes (K8s), servidores en la nube e instancias de contenedores en la nube, y se utilizan principalmente para crear máquinas virtuales o instancias de contenedores. El sistema operativo recomendado para el host es Ubuntu o una versión LTS de CentOS.<br/> Un nodo de ejecución es una máquina virtual o instancia de contenedor creada por el host, que sirve como entorno de pruebas donde se ejecutan las tareas.
";
$lang->zahost->automation->feature2           = '2. Resumen de la aplicación';
$lang->zahost->automation->feature2ZenAgent   = 'ZAgent es la plataforma de código abierto de pruebas automatizadas y programación de ZenTao. Mediante tecnología de virtualización, ofrece a los usuarios un entorno de pruebas distribuido y gestionado de forma centralizada.';
$lang->zahost->automation->feature2ZTF        = 'ZTF es el framework de pruebas automatizadas de código abierto de ZenTao, que ayuda a los usuarios a gestionar de forma unificada los scripts de prueba. ZTF está profundamente integrado con ZenTao; cada script puede vincularse a un caso de prueba del sistema, lo que permite sincronizar sin problemas la información de pasos y casos.';
$lang->zahost->automation->feature2KVM        = 'KVM (Kernel-based Virtual Machine) es una solución de virtualización completa para Linux sobre hardware x86 con extensiones de virtualización (Intel VT o AMD-V).';
$lang->zahost->automation->feature2Nginx      = 'Nginx es un servidor web HTTP y proxy inverso de alto rendimiento que también ofrece servicios IMAP/POP3/SMTP.';
$lang->zahost->automation->feature2noVNC      = 'noVNC es una biblioteca JavaScript y aplicación cliente VNC en HTML. Funciona sin problemas en cualquier navegador web importante, incluidos los navegadores móviles (iOS y Android).';
$lang->zahost->automation->feature2Websockify = 'Websockify actúa como un puente que convierte el tráfico de WebSockets en tráfico de socket normal. Acepta el protocolo de enlace de WebSockets, lo analiza y luego reenvía el tráfico en ambas direcciones entre el cliente y el servidor de destino.';
$lang->zahost->automation->support            = 'Soporte';
$lang->zahost->automation->supportSpec        = 'Puede visitar el sitio web oficial de ZenTao para consultar el manual de usuario:';
$lang->zahost->automation->groupTitle         = "Escanee el código QR para obtener ayuda";
