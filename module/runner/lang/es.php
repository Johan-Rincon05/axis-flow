<?php
$lang->runner->manageRunner = 'Gestión de runners';
$lang->runner->browse       = 'Lista de runners';
$lang->runner->create       = 'Agregar runner';
$lang->runner->createGuide  = 'Guía para agregar runner';
$lang->runner->edit         = 'Editar runner';
$lang->runner->enable       = 'Habilitar';
$lang->runner->disable      = 'Suspender';
$lang->runner->delete       = 'Eliminar runner';
$lang->runner->changeState  = 'Habilitar/Suspender runner';

$lang->runner->name        = 'Nombre';
$lang->runner->status      = 'Estado';
$lang->runner->platOrArch  = 'Platform/Arch';
$lang->runner->plat        = 'Plataforma';
$lang->runner->arch        = 'Arq.';
$lang->runner->version     = 'Versión';
$lang->runner->ip          = 'Dirección IP';
$lang->runner->package     = 'Paquete';
$lang->runner->cmd         = 'Comando';
$lang->runner->copyCmd     = 'Copiar comando';
$lang->runner->copySuccess = 'Copiado';
$lang->runner->copyFail    = 'Su navegador no admite copiar. Cópielo manualmente.';
$lang->runner->desc        = 'Descripción';
$lang->runner->labels      = 'Etiquetas';
$lang->runner->runtime     = 'Tiempo de ejecución';

$lang->runner->statusList = array();
$lang->runner->statusList['online']  = 'En línea';
$lang->runner->statusList['offline'] = 'Sin conexión';
$lang->runner->statusList['suspend'] = 'Suspender';

$lang->runner->osList = array();
$lang->runner->osList['linux']   = 'Linux';
$lang->runner->osList['windows'] = 'Windows';

$lang->runner->typeList = array();
$lang->runner->typeList['docker'] = 'Docker';
$lang->runner->typeList['k8s']    = 'Kubernetes';

$lang->runner->archList = array();
$lang->runner->archList['amd64'] = 'amd64';
$lang->runner->archList['arm64'] = 'arm64';

$lang->runner->cmdList = array();
$lang->runner->cmdList['windows'] = <<<EOF
# 1. Download runner executable file
powershell -command "Invoke-WebRequest -Uri '%PACKAGE_URL%' -OutFile 'gitfox-runner.tar.gz'"

# 2. Uncompress executable file

# 3. Install service
.\install.bat %GITFOX_URL% %GITFOX_TOKEN% %RUNNER_RUNTIME% %RUNNER_LABELS%
EOF;
$lang->runner->cmdList['linux'] = <<<EOF
# 1. Download runner executable file to specified path
sudo curl --output "gitfox-runner.tar.gz" "%PACKAGE_URL%" %RUNNER_RUNTIME%

# 2. Uncompress executable file to /usr/local/bin
sudo tar -zxvf gitfox-runner.tar.gz -C /usr/local/bin

# 3. Install service
sudo gitfox-runner install --url=%GITFOX_URL% --token=%GITFOX_TOKEN% --runtime=%RUNNER_RUNTIME% %RUNNER_LABELS%

# 4. Start service
sudo gitfox-runner start
EOF;
$lang->runner->cmdList['docker'] = <<<EOF
docker run -d --name gitfox-runner --restart always \
    -v /srv/gitfox-runner/config:/etc/gitfox-runner \
    -v /var/run/docker.sock:/var/run/docker.sock \
    gitfox/gitfox-runner:latest
EOF;
$lang->runner->cmdList['k8s'] = <<<EOF
# 1. Add repository source
helm repo add gitfox https://hub.qucheng.com/chartrepo/stable

# 2. Install
helm install --namespace <NAMESPACE> --name gitfox-runner -f <CONFIG_VALUES_FILE> gitfox/gitfox-runner
EOF;

$lang->runner->notice = new stdclass();
$lang->runner->notice->confirmDelete    = '¿Seguro que desea eliminar este runner?';
$lang->runner->notice->confirmDisable   = '¿Seguro que desea suspender este runner?';
$lang->runner->notice->disableDelete    = 'No se puede eliminar un ejecutor en estado en línea';
$lang->runner->notice->nameLength       = 'El nombre no puede exceder 200 caracteres';
$lang->runner->notice->descLength       = 'La descripción no puede exceder 500 caracteres';
$lang->runner->notice->newLabelsInvalid = 'Solo se permiten letras, dígitos, guiones bajos, puntos, guiones y caracteres chinos.';

$lang->runner->apiError = array();
