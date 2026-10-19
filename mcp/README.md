# axisflow-mcp

Servidor MCP de AXIS FLOW. Documentación completa (herramientas, despliegue, conexión con Claude, seguridad):
[`docs/MCP-AXIS-FLOW.md`](../docs/MCP-AXIS-FLOW.md).

```bash
cp .env.example .env   # completa AXISFLOW_* y MCP_AUTH_TOKEN
npm install
npm run dev            # HTTP en :3100  (/mcp, /mcp/<clave>, /health)
npm run typecheck
node scripts/smoke.mjs [--write]
```
