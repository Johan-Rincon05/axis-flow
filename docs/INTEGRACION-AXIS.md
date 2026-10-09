# Integración con AXIS (SSO)

AXIS FLOW acepta inicio de sesión único desde **AXIS** (el sistema interno de Emprende Tu Carrera). Documento completo (flujo, roles,
puesta en marcha, métricas y Jira) en el repo de AXIS: `docs/INTEGRACION-AXIS-FLOW.md`.

## Cómo funciona aquí
- `module/axissso/` recibe por POST el token que firma AXIS (JWT HS256, 60 s, un solo uso) en `index.php?m=axissso&f=login`.
  Valida firma, emisor (`axis`), destino (`axisflow`), vencimiento y reutilización; crea o actualiza el usuario **por correo**,
  sincroniza sus grupos según su rol en AXIS y abre la sesión.
- `module/user/model.php` (`identify`): con `AXIS_SSO_ENFORCE=1`, solo las cuentas de `AXIS_SSO_LOCAL_ACCOUNTS` pueden entrar con
  usuario y contraseña (login web, API REST y autenticación HTTP).
- `module/user/control.php` (`login`): con el SSO activo, quien llega sin sesión es enviado a `AXIS_SSO_LOGIN_URL`. El acceso de emergencia
  es `…/index.php?m=user&f=login&local=1`.
- `module/common/model.php`: `axissso` está en la lista blanca de páginas que no se abren dentro del marco (iframe) de ZenTao.
- `config/privilege.php`: `axissso.login` es un método abierto (se autentica con el token).

## Variables de entorno
| Variable | Valor por defecto | Descripción |
|---|---|---|
| `AXIS_SSO_SECRET` | — | Secreto compartido con AXIS (≥ 32 caracteres, igual a `AXISFLOW_SSO_SECRET` de AXIS). Sin él, el SSO queda deshabilitado |
| `AXIS_SSO_ENFORCE` | `0` | `1` = solo ingreso por AXIS (más las cuentas locales) |
| `AXIS_SSO_LOGIN_URL` | — | URL de AXIS a donde se envía a quien llega sin sesión |
| `AXIS_SSO_LOCAL_ACCOUNTS` | `admin` | Cuentas con acceso local de emergencia (separadas por coma). **Nunca** se les inicia sesión por SSO |
| `AXIS_SSO_ROLE_MAP` | — | (Opcional) JSON `{"RolAXIS":["codigoGrupo",…]}` para cambiar la correspondencia de roles |

Se definen en Dokploy (servicio `axis-flow` → Environment); `docker-compose.yml` ya las pasa al contenedor.

Roles por defecto: SuperUser → admin, top, pm, qa · Director/Gerente → top, pm, qa · Coordinador → pm, qa · Asistencia → dev · Empleado → others
(códigos de grupo de ZenTao).

## Operación
- El orden de puesta en marcha (primero secreto en ambos lados, después `ENFORCE=1`) está en el documento de AXIS.
- Errores del SSO: `tmp/log/axissso.log` dentro del contenedor.
- Los usuarios creados por SSO tienen una contraseña aleatoria que nadie conoce: solo entran por AXIS.
