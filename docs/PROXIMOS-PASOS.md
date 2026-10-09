# Próximos pasos de AXIS FLOW

## Siguiente: activar CI&CD (código, pipelines, despliegue)
Estado actual: el menú **CI&CD** pide instalar GitFox (motor propio de ZenTao, no instalable en Docker/Dokploy). Mientras tanto no se usa.

Plan acordado (pendiente de arrancar):
1. Desplegar **Gitea** en Dokploy (dominio sugerido `git.emprendetucarrera.com.co`). Alternativa: GitLab, si hay RAM suficiente.
2. Integrarlo en AXIS FLOW desde Administración → integraciones de repositorio (vincular commits a tareas, historias y bugs).
3. Añadir **Jenkins** o **Gitea Actions** solo si se necesitan pipelines de compilación/despliegue.
4. Ajustar el menú CI&CD en el código para que no fuerce la pantalla de GitFox (verificar primero).
Decisiones abiertas: Gitea vs GitLab; mantener GitHub como origen; RAM libre del VPS.

## Otros pendientes
- Integración con el sistema interno de Emprende Tu Carrera.
- Editor de texto (KindEditor) en español; revisión de redacción de traducciones automáticas.
- Backups de volúmenes y base de datos en Dokploy.
