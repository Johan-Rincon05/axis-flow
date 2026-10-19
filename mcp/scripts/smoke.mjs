// Prueba de humo: arranca el servidor por stdio y recorre las herramientas.
// Uso: AXISFLOW_URL=... AXISFLOW_ACCOUNT=... AXISFLOW_PASSWORD=... node scripts/smoke.mjs [--write]
import { Client } from "@modelcontextprotocol/sdk/client/index.js";
import { StdioClientTransport } from "@modelcontextprotocol/sdk/client/stdio.js";

const write = process.argv.includes("--write");
const client = new Client({ name: "smoke", version: "0.0.0" });
await client.connect(new StdioClientTransport({ command: "npx", args: ["tsx", "src/stdio.ts"], env: process.env, stderr: "inherit" }));

const call = async (name, args = {}) => {
  const res = await client.callTool({ name, arguments: args });
  const text = res.content?.[0]?.text ?? "";
  console.log(`\n# ${name} ${JSON.stringify(args)} ${res.isError ? "  [ERROR]" : ""}\n${text.length > 700 ? text.slice(0, 700) + " ..." : text}`);
  return res.isError ? null : JSON.parse(text);
};

const tools = await client.listTools();
console.log(`Herramientas (${tools.tools.length}):`, tools.tools.map((t) => t.name).join(", "));

await call("whoami");
const products = await call("list_products");
const productId = products?.items?.[0]?.id;
const projects = await call("list_projects");
const projectId = projects?.items?.[0]?.id;
const executions = projectId ? await call("list_executions", { projectId }) : null;
const executionId = executions?.items?.[0]?.id;
if (productId) { await call("list_stories", { productId, limit: 3 }); await call("list_bugs", { productId, limit: 3 }); await call("list_plans", { productId }); }
if (executionId) { await call("get_execution", { executionId }); await call("list_tasks", { executionId, limit: 3 }); }
await call("list_my_tasks");
await call("list_users", { limit: 5 });
await call("get_story", { storyId: 1 });
await call("get_task", { taskId: 1 });
await call("get_bug", { bugId: 1 });

if (write && productId && executionId) {
  const tag = `[smoke ${new Date().toISOString().slice(0, 16)}]`;
  const story = await call("create_story", { productId, title: `${tag} Historia de prueba MCP`, spec: "Creada por la prueba de humo del MCP.", verify: "Aparece en la lista.", pri: 3, estimate: 2, reviewer: ["productManager"] });
  if (story?.id) { await call("update_story", { storyId: story.id, pri: 2 }); await call("get_story", { storyId: story.id }); }
  const task = await call("create_task", { executionId, name: `${tag} Tarea de prueba MCP`, type: "devel", estimate: 3, story: story?.id, assignedTo: process.env.AXISFLOW_ACCOUNT, estStarted: "2026-10-19", deadline: "2026-10-30" });
  if (task?.id) {
    await call("update_task", { taskId: task.id, desc: "Editada por el MCP", pri: 2 });
    await call("start_task", { taskId: task.id, left: 3 });
    await call("log_effort", { taskId: task.id, date: "2026-10-19", consumed: 1, left: 2, work: "Prueba de esfuerzo" });
    await call("finish_task", { taskId: task.id, currentConsumed: 1 });
    await call("get_task", { taskId: task.id });
  }
  const bug = await call("create_bug", { productId, title: `${tag} Bug de prueba MCP`, steps: "1. Abrir\n2. Ver el error", severity: 3, execution: executionId });
  if (bug?.id) {
    await call("update_bug", { bugId: bug.id, severity: 2 });
    await call("assign_bug", { bugId: bug.id, assignedTo: process.env.AXISFLOW_ACCOUNT });
    await call("resolve_bug", { bugId: bug.id, resolution: "fixed" });
    await call("close_bug", { bugId: bug.id, comment: "Cerrado por la prueba" });
    await call("get_bug", { bugId: bug.id });
  }
}
await client.close();
