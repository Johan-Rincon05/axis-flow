/** Reduce las respuestas verbosas de ZenTao a lo que un agente necesita. */

export function stripHtml(value: unknown): string {
  if (typeof value !== "string") return "";
  return value
    .replace(/<br\s*\/?>|<\/p>|<\/li>|<\/div>/gi, "\n")
    .replace(/<[^>]+>/g, "")
    .replace(/&nbsp;/g, " ").replace(/&lt;/g, "<").replace(/&gt;/g, ">").replace(/&amp;/g, "&").replace(/&quot;/g, '"')
    .replace(/\n{3,}/g, "\n\n")
    .trim();
}

/** Usuario: puede venir como cuenta (string) o como objeto {account, realname}. */
export function who(value: any): string | null {
  if (!value) return null;
  if (typeof value === "string") return value;
  if (typeof value === "object") {
    const account = value.account ?? "";
    const name = value.realname ?? "";
    return account ? (name && name !== account ? `${account} (${name})` : account) : name || null;
  }
  return null;
}

const ZERO_DATES = new Set(["0000-00-00", "0000-00-00 00:00:00", "", null, undefined]);
export function date(value: any): string | null {
  return ZERO_DATES.has(value) ? null : String(value);
}

function actions(list: any): Array<Record<string, unknown>> {
  if (!Array.isArray(list)) return [];
  return list.slice(-10).map((a) => ({
    actor: who(a.actor),
    action: a.action,
    date: date(a.date),
    comment: stripHtml(a.comment) || undefined,
  }));
}

export const slim = {
  product: (p: any) => ({ id: p.id, name: p.name, status: p.status, type: p.type, PO: who(p.PO), QD: who(p.QD), RD: who(p.RD) }),
  project: (p: any) => ({ id: p.id, name: p.name, model: p.model, status: p.status, begin: date(p.begin), end: date(p.end), PM: who(p.PM), progress: p.progress }),
  execution: (e: any) => ({
    id: e.id, name: e.name, project: e.project, type: e.type, status: e.status,
    begin: date(e.begin), end: date(e.end), PM: who(e.PM), progress: e.progress, totalEstimate: e.totalEstimate, totalConsumed: e.totalConsumed, totalLeft: e.totalLeft,
  }),
  plan: (p: any) => ({ id: p.id, title: p.title, status: p.status, begin: date(p.begin), end: date(p.end), desc: stripHtml(p.desc) || undefined }),
  user: (u: any) => ({ account: u.account, realname: u.realname }),
  story: (s: any, detail = false) => ({
    id: s.id, title: s.title, type: s.type, product: s.product, status: s.status, stage: s.stage, pri: s.pri, estimate: s.estimate,
    plan: s.plan || undefined, module: s.module || undefined, assignedTo: who(s.assignedTo), openedBy: who(s.openedBy), reviewer: s.reviewer ?? undefined,
    ...(detail ? { spec: stripHtml(s.spec), verify: stripHtml(s.verify), keywords: s.keywords || undefined, actions: actions(s.actions) } : {}),
  }),
  task: (t: any, detail = false) => ({
    id: t.id, name: t.name, execution: t.execution, project: t.project, status: t.status, pri: t.pri, type: t.type, story: t.story || undefined,
    assignedTo: who(t.assignedTo), estimate: t.estimate, consumed: t.consumed, left: t.left, deadline: date(t.deadline), estStarted: date(t.estStarted),
    ...(detail ? { desc: stripHtml(t.desc), openedBy: who(t.openedBy), finishedBy: who(t.finishedBy), actions: actions(t.actions) } : {}),
  }),
  bug: (b: any, detail = false) => ({
    id: b.id, title: b.title, product: b.product, execution: b.execution || undefined, status: b.status, severity: b.severity, pri: b.pri, type: b.type,
    assignedTo: who(b.assignedTo), openedBy: who(b.openedBy), openedDate: date(b.openedDate), resolution: b.resolution || undefined, resolvedBy: who(b.resolvedBy),
    ...(detail ? { steps: stripHtml(b.steps), keywords: b.keywords || undefined, os: b.os || undefined, browser: b.browser || undefined, actions: actions(b.actions) } : {}),
  }),
};

export function page(data: any, key: string, map: (x: any) => unknown) {
  const items = Array.isArray(data?.[key]) ? data[key] : Object.values(data?.[key] ?? {});
  return { page: data?.page, total: data?.total, limit: data?.limit, count: items.length, items: items.map(map) };
}
