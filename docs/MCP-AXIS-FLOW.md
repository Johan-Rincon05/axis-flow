# MCP de AXIS FLOW

Servidor [MCP](https://modelcontextprotocol.io) que permite a Claude (y a otros agentes) **consultar y editar** AXIS FLOW:
productos, proyectos, ejecuciones (sprints), historias, tareas y bugs. Código en `mcp/` (TypeScript, SDK oficial).

## Cómo funciona
```
Claude ──HTTPS + clave──▶ mcp (contenedor, :3100) ──HTTP interno──▶ AXIS FLOW /api.php/v1/…
                                   └─ inicia sesión con una cuenta de servicio y renueva el token solo
```
- No toca el código PHP: usa la API REST v1 que ya trae ZenTao, así que no complica los merges con upstream.
- Cada acción queda en el historial del elemento a nombre de la **cuenta de servicio** (no de quien le habla al agente).
- Sin estado: un servidor MCP por petición, por lo que se puede reiniciar sin perder nada.

## Herramientas (30)
| Área | Lectura | Escritura |
|---|---|---|
| Cuenta / catálogo | `whoami`, `list_products`, `list_projects`, `list_executions`, `get_execution`, `list_plans`, `list_users` | — |
| Historias | `list_stories`, `get_story` | `create_story`, `update_story`, `assign_story`, `close_story` |
| Tareas | `list_tasks`, `list_my_tasks`, `get_task` | `create_task`, `update_task`, `assign_task`, `start_task`, `finish_task`, `log_effort` |
| Bugs | `list_bugs`, `get_bug` | `create_bug`, `update_bug`, `assign_bug`, `resolve_bug`, `close_bug`, `activate_bug` |

**No hay herramientas de borrado**: un agente no puede eliminar nada. Con `MCP_READ_ONLY=1` solo se exponen las de lectura.
Las respuestas están recortadas (sin HTML, sin los ~100 campos de ZenTao) para gastar pocos tokens.

Reglas de la instancia que el MCP ya respeta:
- `create_story` **exige revisor** (`reviewer`): con la revisión obligatoria, la API responde 200 vacío si falta.
- `create_task`/`create_bug`/`create_story` usan prioridad 3 por defecto; `resolve_bug` usa el build `trunk`; `finish_task` fecha de cierre = ahora.

## Puesta en marcha
1. **Cuenta de servicio.** En AXIS FLOW crea un usuario (p. ej. `axismcp`) con contraseña larga y asígnale los grupos que necesite
   (mínimo: los de lectura del trabajo que quieras exponer; para escribir, p. ej. `po`, `pm`, `dev`, `qa`). Con el SSO forzado
   (`AXIS_SSO_ENFORCE=1`) añade `axismcp` a `AXIS_SSO_LOCAL_ACCOUNTS`, si no la API le negará el acceso.
2. **Variables** (en Dokploy, servicio `axis-flow`):

   | Variable | Descripción |
   |---|---|
   | `COMPOSE_PROFILES=mcp` | Activa el servicio `mcp` (por defecto no se despliega) |
   | `MCP_AXISFLOW_ACCOUNT` | Cuenta de servicio (por defecto `axismcp`) |
   | `MCP_AXISFLOW_PASSWORD` | Contraseña de esa cuenta |
   | `MCP_AUTH_TOKEN` | Clave que deben presentar los clientes (≥ 24 caracteres; genérala con `openssl rand -hex 32`) |
   | `MCP_READ_ONLY` | `1` = solo lectura (por defecto `0`) |
3. **Dominio.** En Dokploy publica el servicio `mcp` (puerto 3100) con HTTPS, p. ej. `https://mcp.<tu-dominio>`. **Sin HTTPS no uses la clave.**
4. Comprueba: `curl https://mcp.<tu-dominio>/health` → `{"ok":true,…}`.

## Conectar con Claude
- **claude.ai / app de escritorio (conector personalizado):** Ajustes → Conectores → Añadir conector personalizado →
  URL `https://mcp.<tu-dominio>/mcp/<MCP_AUTH_TOKEN>` (la clave va en la ruta porque este formulario no admite cabeceras).
- **Claude Code:**
  ```bash
  claude mcp add --transport http axisflow https://mcp.<tu-dominio>/mcp \
    --header "Authorization: Bearer <MCP_AUTH_TOKEN>"
  ```
- **Local sin Docker (stdio):** `cd mcp && npm i && npm run build`, y en la configuración de Claude Desktop:
  ```json
  { "mcpServers": { "axisflow": { "command": "node", "args": ["/ruta/axis-flow/mcp/dist/stdio.js"],
    "env": { "AXISFLOW_URL": "https://…", "AXISFLOW_ACCOUNT": "axismcp", "AXISFLOW_PASSWORD": "…" } } } }
  ```
Prueba rápida: «Lista mis productos de AXIS FLOW y las tareas en curso del sprint actual».

## Seguridad
- La clave del MCP equivale a poder editar AXIS FLOW con los permisos de la cuenta de servicio: trátala como una contraseña y **rótala**
  cambiando `MCP_AUTH_TOKEN` y reiniciando. Al ir en la ruta puede aparecer en logs de proxies; por eso HTTPS y rotación.
- Da a la cuenta solo los grupos necesarios. Para exponerlo solo a consultas, usa `MCP_READ_ONLY=1`.
- La comparación de la clave es en tiempo constante y no hay endpoints sin autenticar salvo `/health`.

## Pruebas
`cd mcp && AXISFLOW_URL=… AXISFLOW_ACCOUNT=… AXISFLOW_PASSWORD=… node scripts/smoke.mjs` recorre las herramientas de lectura;
con `--write` crea y edita una historia, una tarea y un bug de prueba (no se pueden borrar desde el MCP).

## Hoja de ruta
1. ✅ Lectura y escritura de historias, tareas y bugs; HTTP con clave y stdio; contenedor.
2. Autenticación **por persona** (cada agente actúa como su usuario): módulo PHP que cambie un token firmado por AXIS por una sesión de API, como `axissso`.
3. OAuth para conectores que lo exijan.
4. Más herramientas: planes y releases, casos de prueba, documentos, comentarios, reportes de avance, esfuerzo por persona.
