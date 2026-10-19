import { StdioServerTransport } from "@modelcontextprotocol/sdk/server/stdio.js";
import { AxisFlowClient } from "./client.js";
import { loadConfig } from "./config.js";
import { buildServer } from "./server.js";

const cfg = loadConfig(false);
const server = buildServer(new AxisFlowClient(cfg), cfg);
await server.connect(new StdioServerTransport());
