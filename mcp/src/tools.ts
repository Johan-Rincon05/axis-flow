import { McpServer } from "@modelcontextprotocol/sdk/server/mcp.js";
import { z } from "zod";
import { AxisFlowClient } from "./client.js";
import { page, slim } from "./format.js";

const limit = z.number().int().min(1).max(100).default(20).describe("Resultados por pagina (max 100)");
const pageNo = z.number().int().min(1).default(1).describe("Numero de pagina");
const pri = z.number().int().min(1).max(4).describe("Prioridad: 1 (alta) a 4 (baja)");

const text = (value: unknown) => ({ content: [{ type: "text" as const, text: JSON.stringify(value, null, 1) }] });
const fail = (error: unknown) => ({ isError: true, content: [{ type: "text" as const, text: error instanceof Error ? error.message : String(error) }] });

/** Quita los campos sin definir para no enviar nulos a la API. */
/** La API de ZenTao a veces responde 200 vacio cuando no pudo crear; lo convertimos en un error claro. */
function created<T extends { id?: unknown }>(res: T, what: string, hint = ""): T {
  if (!res || res.id === undefined) throw new Error(`AXIS FLOW no creo ${what}.${hint ? " " + hint : ""}`);
  return res;
}

const now = () => new Date().toISOString().slice(0, 19).replace("T", " ");

const clean = (obj: Record<string, unknown>) => Object.fromEntries(Object.entries(obj).filter(([, v]) => v !== undefined));

export function registerTools(server: McpServer, api: AxisFlowClient, readOnly: boolean) {
  function read<S extends z.ZodRawShape>(name: string, title: string, description: string, schema: S, run: (args: z.infer<z.ZodObject<S>>) => Promise<unknown>) {
    server.registerTool(
      name,
      { title, description, inputSchema: schema, annotations: { readOnlyHint: true, openWorldHint: false } },
      (async (args: any) => { try { return text(await run(args)); } catch (e) { return fail(e); } }) as any,
    );
  }
  function write<S extends z.ZodRawShape>(name: string, title: string, description: string, schema: S, run: (args: z.infer<z.ZodObject<S>>) => Promise<unknown>) {
    if (readOnly) return;
    server.registerTool(
      name,
      { title, description, inputSchema: schema, annotations: { readOnlyHint: false, destructiveHint: false, idempotentHint: false, openWorldHint: false } },
      (async (args: any) => { try { return text(await run(args)); } catch (e) { return fail(e); } }) as any,
    );
  }

  /* ------------------------------- Lectura ------------------------------- */

  read("whoami", "Cuenta conectada", "Devuelve la cuenta de AXIS FLOW con la que actua este conector.", {}, async () => {
    const me = await api.get("user");
    return { account: me.profile?.account, realname: me.profile?.realname, role: me.profile?.role?.name };
  });

  read("list_products", "Listar productos", "Lista los productos visibles para la cuenta de servicio.", { page: pageNo, limit }, async ({ page: p, limit: l }) =>
    page(await api.get("products", { page: p, limit: l }), "products", slim.product));

  read("list_projects", "Listar proyectos", "Lista los proyectos.", { page: pageNo, limit }, async ({ page: p, limit: l }) =>
    page(await api.get("projects", { page: p, limit: l }), "projects", slim.project));

  read("list_executions", "Listar ejecuciones (sprints)", "Lista las ejecuciones (sprints) de un proyecto.", { projectId: z.number().int(), page: pageNo, limit }, async ({ projectId, page: p, limit: l }) =>
    page(await api.get(`projects/${projectId}/executions`, { page: p, limit: l }), "executions", slim.execution));

  read("get_execution", "Ver ejecucion", "Detalle de una ejecucion (sprint) con su avance y horas.", { executionId: z.number().int() }, async ({ executionId }) =>
    slim.execution(await api.get(`executions/${executionId}`)));

  read("list_plans", "Listar planes de producto", "Lista los planes (versiones/hojas de ruta) de un producto.", { productId: z.number().int(), page: pageNo, limit }, async ({ productId, page: p, limit: l }) =>
    page(await api.get(`products/${productId}/plans`, { page: p, limit: l }), "plans", slim.plan));

  read("list_users", "Listar usuarios", "Lista cuentas y nombres de usuarios, util para asignar trabajo.", { page: pageNo, limit }, async ({ page: p, limit: l }) =>
    page(await api.get("users", { page: p, limit: l }), "users", slim.user));

  read(
    "list_stories",
    "Listar historias",
    "Lista historias de usuario de un producto, un proyecto o una ejecucion (indica exactamente uno). 'status' del producto: all, unclosed, draft, active, closed, changing, reviewing.",
    {
      productId: z.number().int().optional(), projectId: z.number().int().optional(), executionId: z.number().int().optional(),
      status: z.string().optional().describe("Solo para productId; por defecto 'unclosed'"), page: pageNo, limit,
    },
    async ({ productId, projectId, executionId, status, page: p, limit: l }) => {
      const given = [productId, projectId, executionId].filter((v) => v !== undefined).length;
      if (given !== 1) throw new Error("Indica exactamente uno: productId, projectId o executionId");
      const path = productId ? "stories" : projectId ? `projects/${projectId}/stories` : `executions/${executionId}/stories`;
      const query = productId ? { product: productId, status, page: p, limit: l } : { page: p, limit: l };
      return page(await api.get(path, query), "stories", (s) => slim.story(s));
    },
  );

  read("get_story", "Ver historia", "Detalle completo de una historia: descripcion, criterios de aceptacion e historial.", { storyId: z.number().int() }, async ({ storyId }) =>
    slim.story(await api.get(`stories/${storyId}`), true));

  read(
    "list_tasks",
    "Listar tareas",
    "Lista las tareas de una ejecucion. 'status': all, wait, doing, done, closed, cancel, unclosed.",
    { executionId: z.number().int(), status: z.string().optional(), page: pageNo, limit },
    async ({ executionId, status, page: p, limit: l }) => page(await api.get(`executions/${executionId}/tasks`, { status, page: p, limit: l }), "tasks", (t) => slim.task(t)),
  );

  read(
    "list_my_tasks",
    "Mis tareas",
    "Tareas de la cuenta conectada. 'type': assignedTo (por defecto), openedBy, finishedBy, closedBy.",
    { type: z.enum(["assignedTo", "openedBy", "finishedBy", "closedBy"]).default("assignedTo"), page: pageNo, limit },
    async ({ type, page: p, limit: l }) => page(await api.get("tasks", { type, page: p, limit: l }), "tasks", (t) => slim.task(t)),
  );

  read("get_task", "Ver tarea", "Detalle de una tarea con descripcion e historial.", { taskId: z.number().int() }, async ({ taskId }) =>
    slim.task(await api.get(`tasks/${taskId}`), true));

  read(
    "list_bugs",
    "Listar bugs",
    "Lista bugs de un producto o de una ejecucion (indica exactamente uno). 'status' (producto): all, unclosed, active, resolved, closed.",
    { productId: z.number().int().optional(), executionId: z.number().int().optional(), status: z.string().optional(), page: pageNo, limit },
    async ({ productId, executionId, status, page: p, limit: l }) => {
      if ((productId === undefined) === (executionId === undefined)) throw new Error("Indica exactamente uno: productId o executionId");
      const path = productId ? "bugs" : `executions/${executionId}/bugs`;
      const query = productId ? { product: productId, status, page: p, limit: l } : { page: p, limit: l };
      return page(await api.get(path, query), "bugs", (b) => slim.bug(b));
    },
  );

  read("get_bug", "Ver bug", "Detalle de un bug: pasos para reproducir e historial.", { bugId: z.number().int() }, async ({ bugId }) =>
    slim.bug(await api.get(`bugs/${bugId}`), true));

  /* ------------------------ Escritura (sin borrados) ------------------------ */

  write(
    "create_story",
    "Crear historia",
    "Crea una historia de usuario en un producto. 'spec' es la descripcion y 'verify' los criterios de aceptacion (texto o HTML simple).",
    {
      productId: z.number().int(), title: z.string().min(1), spec: z.string().optional(), verify: z.string().optional(),
      pri: pri.default(3), estimate: z.number().min(0).optional().describe("Horas estimadas"),
      category: z.string().default("feature").describe("feature, interface, performance, safe, experience, improve, other"),
      reviewer: z.array(z.string()).min(1).describe("Cuentas revisoras (obligatorio: en esta instancia toda historia pasa por revision). Usa list_users."), module: z.number().int().optional(), keywords: z.string().optional(),
    },
    async ({ productId, ...body }) => {
      const res = await api.post("stories", { product: productId, ...clean(body) });
      return slim.story(created(res, "la historia", "Revisa que el producto exista y que los revisores sean cuentas validas."), true);
    },
  );

  write(
    "update_story",
    "Editar historia",
    "Modifica campos de una historia existente. Solo se envian los campos indicados.",
    {
      storyId: z.number().int(), title: z.string().optional(), pri: pri.optional(), estimate: z.number().min(0).optional(),
      category: z.string().optional(), keywords: z.string().optional(), module: z.number().int().optional(), plan: z.string().optional(),
    },
    async ({ storyId, ...body }) => {
      const res = await api.put(`stories/${storyId}`, clean(body));
      return res?.id ? slim.story(res) : res;
    },
  );

  write("assign_story", "Asignar historia", "Asigna una historia a una cuenta.", { storyId: z.number().int(), assignedTo: z.string(), comment: z.string().optional() }, async ({ storyId, ...body }) => {
    const res = await api.post(`stories/${storyId}/assign`, clean(body));
    return res?.id ? slim.story(res) : res;
  });

  write(
    "close_story",
    "Cerrar historia",
    "Cierra una historia indicando el motivo: done, subdivided, duplicate, postponed, willnotdo, cancel, bydesign.",
    { storyId: z.number().int(), closedReason: z.string().default("done"), duplicateStory: z.number().int().optional(), comment: z.string().optional() },
    async ({ storyId, ...body }) => {
      const res = await api.post(`stories/${storyId}/close`, clean(body));
      return res?.id ? slim.story(res) : res;
    },
  );

  write(
    "create_task",
    "Crear tarea",
    "Crea una tarea dentro de una ejecucion (sprint). 'type': design, devel, request, test, study, discuss, ui, affair, misc.",
    {
      executionId: z.number().int(), name: z.string().min(1), type: z.string().default("devel"), assignedTo: z.string().optional(),
      estimate: z.number().min(0).optional().describe("Horas estimadas"), story: z.number().int().optional().describe("Id de la historia vinculada"),
      pri: pri.default(3), desc: z.string().optional(), estStarted: z.string().optional().describe("AAAA-MM-DD"), deadline: z.string().optional().describe("AAAA-MM-DD"),
    },
    async ({ executionId, ...body }) => {
      const res = await api.post(`executions/${executionId}/tasks`, clean(body));
      return slim.task(created(res, "la tarea"), true);
    },
  );

  write(
    "update_task",
    "Editar tarea",
    "Modifica campos de una tarea existente. Solo se envian los campos indicados.",
    {
      taskId: z.number().int(), name: z.string().optional(), desc: z.string().optional(), assignedTo: z.string().optional(), pri: pri.optional(),
      estimate: z.number().min(0).optional(), left: z.number().min(0).optional().describe("Horas restantes"), deadline: z.string().optional(), estStarted: z.string().optional(),
    },
    async ({ taskId, ...body }) => {
      const res = await api.put(`tasks/${taskId}`, clean(body));
      return res?.id ? slim.task(res) : res;
    },
  );

  write("assign_task", "Asignar tarea", "Asigna una tarea a una cuenta.", { taskId: z.number().int(), assignedTo: z.string(), comment: z.string().optional() }, async ({ taskId, ...body }) => {
    const res = await api.post(`tasks/${taskId}/assignto`, clean(body));
    return res?.id ? slim.task(res) : res;
  });

  write(
    "start_task",
    "Iniciar tarea",
    "Pasa una tarea a 'en curso'. 'left' son las horas que quedan por hacer.",
    { taskId: z.number().int(), left: z.number().min(0).optional(), consumed: z.number().min(0).optional(), comment: z.string().optional() },
    async ({ taskId, ...body }) => {
      const res = await api.post(`tasks/${taskId}/start`, clean(body));
      return res?.id ? slim.task(res) : res;
    },
  );

  write(
    "finish_task",
    "Finalizar tarea",
    "Marca una tarea como hecha. 'currentConsumed' son las horas dedicadas en esta ultima sesion.",
    { taskId: z.number().int(), currentConsumed: z.number().min(0).default(0), finishedDate: z.string().optional().describe("AAAA-MM-DD HH:mm:ss; por defecto, ahora"), comment: z.string().optional() },
    async ({ taskId, ...body }) => {
      const res = await api.post(`tasks/${taskId}/finish`, { ...clean(body), finishedDate: body.finishedDate ?? now() });
      return res?.id ? slim.task(res) : res;
    },
  );

  write(
    "log_effort",
    "Registrar esfuerzo",
    "Registra horas trabajadas en una tarea (fecha, horas consumidas, horas restantes y nota).",
    { taskId: z.number().int(), date: z.string().describe("AAAA-MM-DD"), consumed: z.number().positive(), left: z.number().min(0), work: z.string().optional() },
    async ({ taskId, ...body }) => {
      const res = await api.post(`tasks/${taskId}/estimate`, { ...clean(body), work: body.work ?? "" });
      return res?.id ? slim.task(res) : res;
    },
  );

  write(
    "create_bug",
    "Reportar bug",
    "Crea un bug en un producto. 'severity' 1 (critico) a 4 (menor).",
    {
      productId: z.number().int(), title: z.string().min(1), steps: z.string().optional().describe("Pasos para reproducir"), severity: z.number().int().min(1).max(4).default(3),
      pri: pri.default(3), type: z.string().default("codeerror").describe("codeerror, config, install, security, performance, standard, automation, designdefect, others"),
      assignedTo: z.string().optional(), execution: z.number().int().optional(), project: z.number().int().optional(), story: z.number().int().optional(),
      task: z.number().int().optional(), keywords: z.string().optional(), os: z.string().optional(), browser: z.string().optional(),
    },
    async ({ productId, ...body }) => {
      const res = await api.post("bugs", { product: productId, ...clean(body) });
      return slim.bug(created(res, "el bug"), true);
    },
  );

  write(
    "update_bug",
    "Editar bug",
    "Modifica campos de un bug existente. Solo se envian los campos indicados.",
    {
      bugId: z.number().int(), title: z.string().optional(), steps: z.string().optional(), severity: z.number().int().min(1).max(4).optional(), pri: pri.optional(),
      type: z.string().optional(), assignedTo: z.string().optional(), keywords: z.string().optional(),
    },
    async ({ bugId, ...body }) => {
      const res = await api.put(`bugs/${bugId}`, clean(body));
      return res?.id ? slim.bug(res) : res;
    },
  );

  write("assign_bug", "Asignar bug", "Asigna un bug a una cuenta.", { bugId: z.number().int(), assignedTo: z.string(), comment: z.string().optional() }, async ({ bugId, ...body }) => {
    const res = await api.post(`bugs/${bugId}/assign`, clean(body));
    return res?.id ? slim.bug(res) : res;
  });

  write(
    "resolve_bug",
    "Resolver bug",
    "Marca un bug como resuelto. 'resolution': fixed, bydesign, duplicate, external, notrepro, postponed, willnotfix, tostory.",
    { bugId: z.number().int(), resolution: z.string().default("fixed"), resolvedBuild: z.string().default("trunk").describe("Build donde se corrigio; 'trunk' = rama principal"), duplicateBug: z.number().int().optional(), comment: z.string().optional() },
    async ({ bugId, ...body }) => {
      const res = await api.post(`bugs/${bugId}/resolve`, clean(body));
      return res?.id ? slim.bug(res) : res;
    },
  );

  write("close_bug", "Cerrar bug", "Cierra un bug ya resuelto.", { bugId: z.number().int(), comment: z.string().optional() }, async ({ bugId, ...body }) => {
    const res = await api.post(`bugs/${bugId}/close`, clean(body));
    return res?.id ? slim.bug(res) : res;
  });

  write("activate_bug", "Reactivar bug", "Reabre un bug resuelto o cerrado.", { bugId: z.number().int(), assignedTo: z.string().optional(), openedBuild: z.array(z.string()).default(["trunk"]).describe("Versiones afectadas; 'trunk' = rama principal"), comment: z.string().optional() }, async ({ bugId, ...body }) => {
    const res = await api.post(`bugs/${bugId}/active`, clean(body));
    return res?.id ? slim.bug(res) : res;
  });
}
