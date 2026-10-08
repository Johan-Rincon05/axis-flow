<?php
$lang->system->dashboard       = 'Monitoreo';
$lang->system->systemInfo      = 'Información del sistema';
$lang->system->dbManagement    = 'Gestión de bases de datos';
$lang->system->ldapManagement  = 'LDAP';
$lang->system->dbList          = 'Bases de datos';
$lang->system->configDomain    = 'Gestión de dominios';
$lang->system->ossView         = 'Almacenamiento de objetos';
$lang->system->dbName          = 'Nombre';
$lang->system->dbStatus        = 'Estado';
$lang->system->dbType          = 'Tipo';
$lang->system->action          = 'Acciones';
$lang->system->management      = 'Administrar';
$lang->system->visit           = 'Acceso';
$lang->system->close           = 'Cerrar';
$lang->system->installLDAP     = 'Instalar LDAP';
$lang->system->editLDAP        = 'Editar';
$lang->system->LDAPInfo        = 'Información de LDAP';
$lang->system->accountInfo     = 'Información de la cuenta';
$lang->system->advance         = 'Avanzado';
$lang->system->verify          = 'Verificar';
$lang->system->copy            = 'Copiar';
$lang->system->copySuccess     = 'Copiado al portapapeles';
$lang->system->cneStatus       = 'Estado de la plataforma';
$lang->system->cneStatistic    = 'Estadísticas de recursos';
$lang->system->latestDynamic   = 'Últimas actualizaciones';
$lang->system->nodeQuantity    = 'Nodos';
$lang->system->serviceQuantity = 'Servicios';
$lang->system->cpuUsage        = 'CPU (núcleos)';
$lang->system->memUsage        = 'Memoria (GB)';
$lang->system->name            = ucfirst($lang->product->system) . ' name';
$lang->system->integrated      = 'Integrado ' . $lang->product->system;
$lang->system->latestRelease   = 'Última versión';
$lang->system->children        = 'Incluido ' . $lang->product->system . 's';
$lang->system->latestRelease   = 'Última versión';
$lang->system->status          = 'Estado';
$lang->system->desc            = 'Descripción';
$lang->system->browse          = ucfirst($lang->product->system) . ' list';
$lang->system->create          = 'Crear ' . ucfirst($lang->product->system);
$lang->system->edit            = 'Editar ' . ucfirst($lang->product->system);
$lang->system->delete          = 'Eliminar ' . ucfirst($lang->product->system);
$lang->system->active          = 'Publicar ' . $lang->product->system;
$lang->system->inactive        = 'Despublicar ' . $lang->product->system;
$lang->system->integratedLabel = 'Integración';
$lang->system->backupView      = 'Detalles del respaldo';

$lang->system->integratedList = array();
$lang->system->integratedList[0] = 'No';
$lang->system->integratedList[1] = 'Sí';

$lang->system->statusList = array();
$lang->system->statusList['active']   = 'Publicado';
$lang->system->statusList['inactive'] = 'Sin publicar';

$lang->system->confirmDelete   = '¿Seguro que desea eliminar este ' . $lang->product->system . '?';
$lang->system->confirmActive   = '¿Seguro que desea publicar este ' . $lang->product->system . '?';
$lang->system->confirmInactive = '¿Seguro que desea despublicar este ' . $lang->product->system . '?';
$lang->system->releaseExist    = 'El ' . $lang->product->system . ' asociado con un lanzamiento no se puede eliminar.';
$lang->system->buildExist      = 'El ' . $lang->product->system . ' asociado con un build no se puede eliminar.';

/* LDAP */
$lang->system->LDAP = new stdclass;
$lang->system->LDAP->info             = 'Información de LDAP';
$lang->system->LDAP->ldapEnabled      = 'Habilitar LDAP';
$lang->system->LDAP->ldapQucheng      = 'Qucheng integrado';
$lang->system->LDAP->ldapSource       = 'Origen';
$lang->system->LDAP->ldapInstall      = 'Instalar y habilitar';
$lang->system->LDAP->ldapUpdate       = 'Actualizar';
$lang->system->LDAP->accountInfo      = 'Información de la cuenta';
$lang->system->LDAP->account          = 'Cuenta';
$lang->system->LDAP->password         = 'Contraseña';
$lang->system->LDAP->ldapUsername     = 'Nombre de usuario';
$lang->system->LDAP->ldapName         = 'Nombre';
$lang->system->LDAP->host             = 'Host';
$lang->system->LDAP->port             = 'Puerto';
$lang->system->LDAP->account          = 'Cuenta';
$lang->system->LDAP->password         = 'Contraseña';
$lang->system->LDAP->ldapRoot         = 'Nodo raíz';
$lang->system->LDAP->filterUser       = 'Filtro de usuarios';
$lang->system->LDAP->email            = 'Campo de correo electrónico';
$lang->system->LDAP->extraAccount     = 'Campo de nombre de usuario';
$lang->system->LDAP->ldapAdvance      = 'Configuración avanzada';
$lang->system->LDAP->updateLDAP       = 'Actualizar LDAP';
$lang->system->LDAP->updateInstance   = 'Actualizar servicios asociados con LDAP';
$lang->system->LDAP->updatingProgress = 'Actualizando... faltan %s servicios.';

$lang->system->ldapTypeList = array();
$lang->system->ldapTypeList['qucheng'] = 'Qucheng integrado';
$lang->system->ldapTypeList['extra']   = 'Mapeo externo';

/* OSS */
$lang->system->oss = new stdclass;
$lang->system->oss->common    = 'Almacenamiento de objetos';
$lang->system->oss->appURL    = 'URL de la aplicación';
$lang->system->oss->user      = 'Nombre de usuario';
$lang->system->oss->password  = 'Contraseña';
$lang->system->oss->manage    = 'Administrar';
$lang->system->oss->apiURL    = 'URL de la API';
$lang->system->oss->accessKey = 'Clave de acceso';
$lang->system->oss->secretKey = 'Clave secreta';

/* SMTP */
$lang->system->SMTP = new stdclass;
$lang->system->SMTP->common   = 'Configuración de correo electrónico';
$lang->system->SMTP->enabled  = 'Habilitar SMTP';
$lang->system->SMTP->install  = 'Instalar';
$lang->system->SMTP->update   = 'Actualizar';
$lang->system->SMTP->edit     = 'Editar';
$lang->system->SMTP->editSMTP = 'Editar SMTP';
$lang->system->SMTP->account  = 'Correo del remitente';
$lang->system->SMTP->password = 'Contraseña';
$lang->system->SMTP->host     = 'Servidor SMTP';
$lang->system->SMTP->port     = 'Puerto SMTP';
$lang->system->SMTP->save     = 'Guardar';

/* Domain */
$lang->system->customDomain = 'Nuevo nombre de dominio';
$lang->system->certPem      = 'Certificado de clave pública';
$lang->system->certKey      = 'Clave privada';

$lang->system->domain = new stdclass;
$lang->system->domain->common        = 'Gestión de dominios';
$lang->system->domain->editDomain    = 'Editar configuración de dominio';
$lang->system->domain->config        = 'Configurar dominio y certificado';
$lang->system->domain->currentDomain = 'Dominio actual';
$lang->system->domain->oldDomain     = 'Dominio anterior';
$lang->system->domain->newDomain     = 'Nuevo dominio';
$lang->system->domain->expiredDate   = 'Fecha de vencimiento del certificado';
$lang->system->domain->uploadCert    = 'Cargar certificado (solo certificados comodín)';

$lang->system->domain->notReuseOldDomain     = 'No se puede volver al dominio predeterminado después de usar un dominio personalizado.';
$lang->system->domain->setDNS                = 'Configure la resolución DNS antes de modificar el dominio.';
$lang->system->domain->dnsHelperLink         = 'Ver documentación de ayuda';
$lang->system->domain->updateInstancesDomain = 'Actualizar dominio de los servicios instalados';
$lang->system->domain->totalOldDomain        = 'Total: %s.';
$lang->system->domain->updatingProgress      = 'Actualizando... faltan %s.';
$lang->system->domain->updating              = 'Actualizando...';

$lang->system->SLB = new stdclass;
$lang->system->SLB->common        = 'Balanceo de carga';
$lang->system->SLB->config        = 'Configurar balanceo de carga';
$lang->system->SLB->edit          = 'Editar balanceo de carga';
$lang->system->SLB->ipPool        = 'Rango de IP';
$lang->system->SLB->ipPoolExample = 'Ejemplo: 192.168.10.0/24 o 192.168.10.0-192.168.10.100';
$lang->system->SLB->installing    = 'Configurando balanceo de carga...';
$lang->system->SLB->leftSeconds   = 'Tiempo restante estimado';
$lang->system->SLB->second        = 'Segundos';

$lang->system->notices = new stdclass;
$lang->system->notices->success               = 'Éxito';
$lang->system->notices->fail                  = 'Fallido';
$lang->system->notices->attention             = 'Nota';
$lang->system->notices->noLDAP                = 'No se encontraron datos de configuración de LDAP.';
$lang->system->notices->ldapUsed              = '%s servicios están asociados con LDAP.';
$lang->system->notices->ldapInstallSuccess    = 'LDAP instalado correctamente.';
$lang->system->notices->ldapUpdateSuccess     = 'LDAP actualizado correctamente.';
$lang->system->notices->confirmUpdateLDAP     = 'Modificar LDAP actualizará y reiniciará automáticamente los servicios asociados. ¿Desea continuar?';
$lang->system->notices->verifyLDAPSuccess     = '¡Verificación de LDAP exitosa!';
$lang->system->notices->fillAllRequiredFields = 'Complete todos los campos obligatorios.';
$lang->system->notices->smtpInstallSuccess    = 'SMTP instalado correctamente.';
$lang->system->notices->smtpUpdateSuccess     = 'SMTP actualizado correctamente.';
$lang->system->notices->smtpWhiteList         = "Para evitar que los correos sean bloqueados, agregue el correo del remitente a la lista blanca de su servidor.";
$lang->system->notices->smtpAuthCode          = 'Algunos proveedores de correo requieren una contraseña específica de aplicación. Revise la configuración de su proveedor.';
$lang->system->notices->smtpUsed              = '%s servicios están asociados con SMTP.';
$lang->system->notices->verifySMTPSuccess     = '¡Verificación exitosa!';
$lang->system->notices->pleaseCheckSMTPInfo   = '¡Falló la verificación! Revise su nombre de usuario y contraseña.';
$lang->system->notices->confirmUpdateDomain   = 'Modificar el dominio lo actualizará automáticamente en todos los servicios instalados. ¿Desea continuar?';
$lang->system->notices->updateDomainSuccess   = 'Dominio actualizado correctamente.';
$lang->system->notices->configSLBSuccess      = 'Balanceo de carga configurado correctamente.';
$lang->system->notices->validCert             = 'Verificación exitosa.';

$lang->system->errors = new stdclass;
$lang->system->errors->notFoundDB                  = 'Base de datos no encontrada.';
$lang->system->errors->notFoundLDAP                = 'No se encontraron datos de LDAP.';
$lang->system->errors->dbNameIsEmpty               = 'El nombre de la base de datos no puede estar vacío.';
$lang->system->errors->notSupportedLDAP            = 'Este tipo de LDAP no es compatible actualmente.';
$lang->system->errors->failToInstallLDAP           = 'No se pudo instalar el LDAP integrado.';
$lang->system->errors->failToInstallExtraLDAP      = 'No se pudo conectar al LDAP externo.';
$lang->system->errors->failToUpdateExtraLDAP       = 'No se pudo actualizar el LDAP externo.';
$lang->system->errors->failToUninstallQuChengLDAP  = 'No se pudo desinstalar el LDAP Qucheng integrado.';
$lang->system->errors->failToUninstallExtraLDAP    = 'No se pudo desinstalar el LDAP externo.';
$lang->system->errors->failToDeleteLDAPSnippet     = 'No se pudo eliminar el fragmento de LDAP.';
$lang->system->errors->verifyLDAPFailed            = 'Falló la verificación de LDAP.';
$lang->system->errors->LDAPLinked                  = 'Ya hay un servicio asociado a LDAP.';
$lang->system->errors->SMTPLinked                  = 'Ya hay un servicio asociado a SMTP.';
$lang->system->errors->failGetOssAccount           = 'No se pudo recuperar la cuenta de almacenamiento de objetos.';
$lang->system->errors->failToInstallSMTP           = 'No se pudo instalar SMTP.';
$lang->system->errors->failToUninstallSMTP         = 'No se pudo desinstalar SMTP.';
$lang->system->errors->failToUpdateSMTP            = 'No se pudo actualizar SMTP.';
$lang->system->errors->verifySMTPFailed            = 'Falló la verificación de SMTP.';
$lang->system->errors->notFoundSMTPApp             = 'No se encontró la aplicación proxy SMTP.';
$lang->system->errors->notFoundSMTPService         = 'No se encontró el servicio proxy SMTP.';
$lang->system->errors->domainIsRequired            = 'El dominio es obligatorio.';
$lang->system->errors->invalidDomain               = 'Formato de dominio no válido. Solo se permiten letras minúsculas, números, puntos (.) y guiones (-).';
$lang->system->errors->failToUpdateDomain          = 'No se pudo actualizar el dominio.';
$lang->system->errors->forbiddenOriginalDomain     = 'No se puede cambiar al dominio predeterminado de la plataforma.';
$lang->system->errors->newDomainIsSameWithOld      = 'El nuevo dominio no puede ser igual al actual.';
$lang->system->errors->failedToConfigSLB           = 'No se pudo configurar el balanceo de carga.';
$lang->system->errors->wrongIPRange                = 'Formato de rango de IP no válido. Consulte el ejemplo: ' . $lang->system->SLB->ipPoolExample;
$lang->system->errors->ippoolRequired              = 'El rango de IP es obligatorio.';
$lang->system->errors->failedToInstallSLBComponent = 'No se pudo instalar el componente de balanceo de carga.';
$lang->system->errors->tryReinstallSLB             = 'Se agotó el tiempo de instalación del componente de balanceo de carga. Intente de nuevo.';

$lang->system->backup = new stdclass();
$lang->system->backup->common       = 'Copia de seguridad del sistema';
$lang->system->backup->shortCommon  = 'Respaldo';
$lang->system->backup->systemInfo   = 'Información del sistema';
$lang->system->backup->index        = 'Resumen de respaldos';
$lang->system->backup->history      = 'Historial de respaldos';
$lang->system->backup->delete       = 'Eliminar copia de seguridad';
$lang->system->backup->backup       = 'Respaldo';
$lang->system->backup->change       = 'Período de retención';
$lang->system->backup->changeAB     = 'Editar';
$lang->system->backup->rmPHPHeader  = 'Quitar configuración de seguridad';
$lang->system->backup->setting      = 'Configuración';
$lang->system->backup->creator      = 'Creador';
$lang->system->backup->type         = 'Tipo de respaldo';

$lang->system->backup->settingAction = 'Configuración de respaldo';

$lang->system->backup->name           = 'Nombre';
$lang->system->backup->currentVersion = 'Versión actual';
$lang->system->backup->latestVersion  = 'Última versión';

$lang->system->backup->files    = 'Respaldar archivos';
$lang->system->backup->allCount = 'Total de archivos';
$lang->system->backup->count    = 'Cantidad de archivos de respaldo';
$lang->system->backup->size     = 'size';
$lang->system->backup->status   = 'Estado';
$lang->system->backup->running  = 'En ejecución';
$lang->system->backup->done     = 'Completado';

$lang->system->backup->backupName   = 'Nombre del respaldo:';
$lang->system->backup->backupSql    = 'Respaldar base de datos:';
$lang->system->backup->backupFile   = 'Respaldar adjuntos:';
$lang->system->backup->restoreImage = 'Revertir imagen de la plataforma:';
$lang->system->backup->restoreSQL   = 'Revertir base de datos:';
$lang->system->backup->restoreFile  = 'Revertir adjuntos:';
$lang->system->backup->checkService = 'Verificar servicios:';

$lang->system->backup->upgrade  = 'Actualizar versión';
$lang->system->backup->rollback = 'Revertir';
$lang->system->backup->restart  = 'Reiniciar';
$lang->system->backup->delete   = 'Eliminar';

$lang->system->backup->statusList['pending']       = 'Pendiente';
$lang->system->backup->statusList['inprogress']    = 'En progreso';
$lang->system->backup->statusList['completed']     = 'Completado';
$lang->system->backup->statusList['failed']        = 'Fallido';
$lang->system->backup->statusList['deleting']      = 'Eliminando';
$lang->system->backup->statusList['executeFailed'] = 'Ejecución fallida';

$lang->system->backup->restoreProgress['doing'] = 'En progreso';
$lang->system->backup->restoreProgress['done']  = 'Completado';

$lang->system->backup->typeList['manual']  = 'Copia de seguridad manual';
$lang->system->backup->typeList['upgrade'] = 'Respaldo automático antes de actualizar';
$lang->system->backup->typeList['restore'] = 'Respaldo automático antes de restaurar';

$lang->system->backup->waiting         = 'El respaldo está en curso. Espere...';
$lang->system->backup->waitingStore    = 'Restaurando datos de la aplicación. Espere...';
$lang->system->backup->progress        = 'Respaldando... Progreso: %d/%d';
$lang->system->backup->progressStore   = 'Restaurando... Progreso: %d/%d';
$lang->system->backup->progressSQL     = 'Respaldando... %s respaldados.';
$lang->system->backup->progressAttach  = 'Respaldando... %s de %s archivos respaldados.';
$lang->system->backup->progressCode    = 'Respaldando código... %s de %s archivos respaldados.';
$lang->system->backup->confirmDelete   = '¿Seguro que desea eliminar esta copia de seguridad?';
$lang->system->backup->confirmRestore  = 'La plataforma se reiniciará durante el proceso de restauración, interrumpiendo todas las operaciones actuales. ¿Seguro que desea continuar?';
$lang->system->backup->holdDays        = 'Los respaldos se conservan durante los últimos %s días.';
$lang->system->backup->copiedFail      = 'Archivos que no se pudieron copiar:';
$lang->system->backup->restoreTip      = 'Nota: la función de restauración solo aplica a la base de datos.';
$lang->system->backup->versionInfo     = 'Ver detalles de la nueva versión';
$lang->system->backup->confirmUpgrade  = 'ZenTao no estará disponible durante la actualización. ¿Desea continuar?';
$lang->system->backup->confirmBackup   = 'AXIS FLOW no estará disponible para los usuarios regulares durante la copia de seguridad. ¿Seguro que desea iniciar la copia de seguridad?';
$lang->system->backup->upgrading       = 'Actualizando versión...';
$lang->system->backup->backupTitle     = 'Respaldando la plataforma Qucheng...';
$lang->system->backup->restoreTitle    = 'Revirtiendo la plataforma Qucheng...';
$lang->system->backup->backingUp       = 'En progreso';
$lang->system->backup->restoring       = 'En progreso';
$lang->system->backup->backupSucceed   = 'Respaldo completado correctamente.';
$lang->system->backup->restoreSucceed  = 'Restauración completada correctamente.';

$lang->system->backup->success = new stdclass();
$lang->system->backup->success->upgrade = '¡Actualización completada correctamente!';
$lang->system->backup->success->degrade = '¡Reversión de versión completada correctamente!';

$lang->system->backup->error = new stdclass();
$lang->system->backup->error->backupFail        = "Falló el respaldo.";
$lang->system->backup->error->restoreFail       = "Restauración fallida.";
$lang->system->backup->error->upgradeFail       = "Falló la actualización.";
$lang->system->backup->error->upgradeOvertime   = "Se agotó el tiempo de la actualización.";
$lang->system->backup->error->degradeFail       = "Falló la reversión de versión.";
$lang->system->backup->error->beenLatestVersion = "Ya cuenta con la última versión. No es necesario actualizar.";
$lang->system->backup->error->requireVersion    = "El número de versión es obligatorio.";
$lang->system->backup->error->backupFailNotice  = "Falló el respaldo. Motivo: %s";

$lang->system->backup->backupTypeList = array();
$lang->system->backup->backupTypeList['db']     = 'Base de datos';
$lang->system->backup->backupTypeList['volume'] = 'Volumen de datos';

$lang->system->maintenance = new stdclass();
$lang->system->maintenance->reason['backup']  = 'La plataforma está realizando una copia de seguridad. Vuelva a consultar más tarde.';
$lang->system->maintenance->reason['restore'] = 'La plataforma se está restaurando. Vuelva a consultar más tarde.';
$lang->system->maintenance->reason['upgrade'] = 'La plataforma se está actualizando. Vuelva a consultar más tarde.';

$lang->system->platform = new stdclass();
$lang->system->platform->navs['dblist']     = 'Bases de datos';
$lang->system->platform->navs['domainView'] = 'Dominios';
$lang->system->platform->navs['ossview']    = 'Almacenamiento de objetos';

$lang->system->runningStatus['normal'] = 'Normal';
$lang->system->runningStatus['error']  = 'Error';

$lang->system->serviceNotice = 'Solo se incluyen en las estadísticas los servicios instalados desde el Marketplace. Los servicios configurados manualmente se excluyen.';
$lang->system->nodeNotice    = 'Error del nodo (%s). Motivo: %s';

$lang->system->view    = 'view';
$lang->system->product = 'product';
$lang->system->release = 'release';
$lang->system->appdesc = 'descripción de la app';
