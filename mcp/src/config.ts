export interface Config {
  baseUrl: string;
  account: string;
  password: string;
  authToken: string;
  port: number;
  readOnly: boolean;
}

export function loadConfig(requireAuthToken: boolean): Config {
  const need = (name: string): string => {
    const value = process.env[name]?.trim();
    if (!value) throw new Error(`Falta la variable de entorno ${name}`);
    return value;
  };
  const authToken = requireAuthToken ? need("MCP_AUTH_TOKEN") : process.env.MCP_AUTH_TOKEN?.trim() ?? "";
  if (requireAuthToken && authToken.length < 24) {
    throw new Error("MCP_AUTH_TOKEN debe tener al menos 24 caracteres");
  }
  return {
    baseUrl: need("AXISFLOW_URL").replace(/\/+$/, ""),
    account: need("AXISFLOW_ACCOUNT"),
    password: need("AXISFLOW_PASSWORD"),
    authToken,
    port: Number(process.env.PORT ?? 3100),
    readOnly: process.env.MCP_READ_ONLY === "1",
  };
}
