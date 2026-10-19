import { McpServer } from "@modelcontextprotocol/sdk/server/mcp.js";
import { AxisFlowClient } from "./client.js";
import type { Config } from "./config.js";
import { registerTools } from "./tools.js";

export const INSTRUCTIONS = `Conector de AXIS FLOW (gestion de proyectos: productos, historias, tareas, bugs).
Flujo habitual: list_products / list_projects -> list_executions -> list_stories, list_tasks, list_bugs -> get_* para el detalle.
Para escribir: usa los ids reales que devuelvan las consultas; no inventes ids ni cuentas (usa list_users para asignar).
Las acciones se ejecutan con una cuenta de servicio y quedan registradas en el historial de cada elemento. No existen herramientas de borrado.`;

export function buildServer(api: AxisFlowClient, cfg: Config): McpServer {
  const server = new McpServer({ name: "axisflow", version: "0.1.0" }, { instructions: INSTRUCTIONS });
  registerTools(server, api, cfg.readOnly);
  return server;
}
