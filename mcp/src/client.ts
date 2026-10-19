import type { Config } from "./config.js";

export class AxisFlowError extends Error {
  constructor(message: string, public status: number) {
    super(message);
  }
}

type Query = Record<string, string | number | boolean | undefined>;

/** Cliente de la API REST v1 de AXIS FLOW (ZenTao). El token es el id de sesion y se renueva solo. */
export class AxisFlowClient {
  private token?: string;

  constructor(private cfg: Config) {}

  private async login(): Promise<void> {
    const res = await fetch(`${this.cfg.baseUrl}/api.php/v1/tokens`, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ account: this.cfg.account, password: this.cfg.password }),
    });
    const data = (await res.json().catch(() => ({}))) as { token?: string; error?: string };
    if (!res.ok || !data.token) {
      throw new AxisFlowError(`No se pudo iniciar sesion en AXIS FLOW: ${data.error ?? res.status}`, res.status);
    }
    this.token = data.token;
  }

  async request<T = any>(method: string, path: string, opts: { query?: Query; body?: unknown } = {}): Promise<T> {
    if (!this.token) await this.login();
    const url = new URL(`${this.cfg.baseUrl}/api.php/v1/${path.replace(/^\/+/, "")}`);
    for (const [key, value] of Object.entries(opts.query ?? {})) {
      if (value !== undefined && value !== "") url.searchParams.set(key, String(value));
    }
    for (let attempt = 0; attempt < 2; attempt++) {
      const res = await fetch(url, {
        method,
        headers: { Token: this.token!, "Content-Type": "application/json" },
        body: opts.body === undefined ? undefined : JSON.stringify(opts.body),
      });
      if (res.status === 401 && attempt === 0) {
        await this.login();
        continue;
      }
      const text = await res.text();
      let data: any = {};
      try { data = text ? JSON.parse(text) : {}; } catch { data = { raw: text }; }
      if (!res.ok) {
        const msg = typeof data === "object" && data ? (data.error ?? data.message ?? JSON.stringify(data)) : String(data);
        throw new AxisFlowError(`AXIS FLOW respondio ${res.status}: ${typeof msg === "string" ? msg : JSON.stringify(msg)}`, res.status);
      }
      return data as T;
    }
    throw new AxisFlowError("No se pudo autenticar contra AXIS FLOW", 401);
  }

  get<T = any>(path: string, query?: Query) { return this.request<T>("GET", path, { query }); }
  post<T = any>(path: string, body: unknown) { return this.request<T>("POST", path, { body }); }
  put<T = any>(path: string, body: unknown) { return this.request<T>("PUT", path, { body }); }
}
