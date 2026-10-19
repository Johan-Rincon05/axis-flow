import { timingSafeEqual } from "node:crypto";
import express from "express";
import { StreamableHTTPServerTransport } from "@modelcontextprotocol/sdk/server/streamableHttp.js";
import { AxisFlowClient } from "./client.js";
import { loadConfig } from "./config.js";
import { buildServer } from "./server.js";

const cfg = loadConfig(true);
const api = new AxisFlowClient(cfg);

const safeEqual = (a: string, b: string) => {
  const x = Buffer.from(a), y = Buffer.from(b);
  return x.length === y.length && timingSafeEqual(x, y);
};

/** Acepta la clave como "Authorization: Bearer <clave>" o como ultimo segmento de la ruta (/mcp/<clave>). */
function authorized(req: express.Request): boolean {
  const header = req.header("authorization") ?? "";
  const bearer = header.startsWith("Bearer ") ? header.slice(7).trim() : "";
  const fromPath = typeof req.params.key === "string" ? req.params.key : "";
  return safeEqual(bearer, cfg.authToken) || safeEqual(fromPath, cfg.authToken);
}

const app = express();
app.disable("x-powered-by");
app.use(express.json({ limit: "1mb" }));

app.get("/health", (_req, res) => { res.json({ ok: true, name: "axisflow-mcp" }); });

async function handle(req: express.Request, res: express.Response) {
  if (!authorized(req)) {
    res.status(401).json({ jsonrpc: "2.0", error: { code: -32001, message: "No autorizado" }, id: null });
    return;
  }
  if (req.method !== "POST") {
    res.status(405).set("Allow", "POST").json({ jsonrpc: "2.0", error: { code: -32000, message: "Usa POST" }, id: null });
    return;
  }
  /* Sin estado: un servidor y un transporte por peticion. */
  const server = buildServer(api, cfg);
  const transport = new StreamableHTTPServerTransport({ sessionIdGenerator: undefined });
  res.on("close", () => { void transport.close(); void server.close(); });
  try {
    await server.connect(transport);
    await transport.handleRequest(req, res, req.body);
  } catch (error) {
    console.error("Error en /mcp:", error);
    if (!res.headersSent) res.status(500).json({ jsonrpc: "2.0", error: { code: -32603, message: "Error interno" }, id: null });
  }
}

app.all("/mcp", handle);
app.all("/mcp/:key", handle);

app.listen(cfg.port, () => {
  console.log(`axisflow-mcp escuchando en :${cfg.port} (${cfg.readOnly ? "solo lectura" : "lectura y escritura"}) -> ${cfg.baseUrl}`);
});
