<?php

/**
 * The ai module en lang file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2023 禅道软件（青岛）集团有限公司(ZenTao Software (Qingdao) Co., Ltd. www.zentao.net)
 * @license     ZPL(https://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Wenrui LI <liwenrui@easycorp.ltd>
 * @package     ai
 * @link        https://www.zentao.net
 */
$lang->aiapp->common           = 'IA';
$lang->aiapp->squareCategories = array('collection' => 'Mi colección', 'discovery' => 'Descubrimiento', 'latest' => 'Más reciente');
$lang->aiapp->newVersionTip    = 'El mini programa fue actualizado el %s. Lo anterior es el registro histórico.';
$lang->aiapp->noMiniProgram    = 'El mini programa que visitó no existe.';
$lang->aiapp->title            = 'Miniprogramas';
$lang->aiapp->unpublishedTip   = 'El mini programa que está usando no está publicado.';
$lang->aiapp->noModelError     = 'No hay ningún modelo de lenguaje configurado; comuníquese con el administrador.';
$lang->aiapp->chatNoResponse   = 'Algo salió mal.';
$lang->aiapp->more             = 'Más';
$lang->aiapp->collect          = 'Recopilar';
$lang->aiapp->deleted          = 'Eliminado';
$lang->aiapp->clear            = 'Restablecer';
$lang->aiapp->modelCurrent     = 'Modelo actual';
$lang->aiapp->categoryList     = array('work' => 'Trabajo', 'personal' => 'Personal', 'life' => 'Vida', 'creative' => 'Creativo', 'others' => 'Otros');
$lang->aiapp->generate         = 'Generar';
$lang->aiapp->regenerate       = 'Regenerar';
$lang->aiapp->emptyNameWarning = '「%s」 no puede estar vacío';
$lang->aiapp->chatTip          = 'Ingrese el contenido de los campos a la izquierda e intente generar los resultados.';
$lang->aiapp->noModel          = array('El modelo de lenguaje aún no ha sido configurado. Contacte al administrador o vaya al backend para configurar <a id="to-language-model"> el modelo de lenguaje.</a>。', 'Si ya se completó la configuración correspondiente, intente <a id="reload-current">recargar</a> la página.');
$lang->aiapp->clearContext     = 'El contenido del contexto ha sido borrado.';
$lang->aiapp->newChatTip       = 'Ingrese los campos a la izquierda para iniciar una nueva conversación.';
$lang->aiapp->disabledTip      = 'El mini programa actual está deshabilitado.';
$lang->aiapp->continueasking   = 'Continuar preguntando';

$lang->aiapp->miniProgramSquare  = 'Explorar lista de agentes generales';
$lang->aiapp->collectMiniProgram = 'Recopilar agente general';
$lang->aiapp->miniProgramChat    = 'Ejecutar agente general';
$lang->aiapp->view               = 'Ver detalles del agente general';
$lang->aiapp->browseConversation = 'Explorar conversaciones';
$lang->aiapp->manageGeneralAgent = 'Administrar agente general';
$lang->aiapp->models             = 'Explorar lista de modelos';
$lang->aiapp->toolkit            = 'Kit de herramientas de IA';
$lang->aiapp->viewAiToolkit      = 'Ver kit de herramientas de IA';

$lang->aiapp->id                 = 'ID';
$lang->aiapp->model              = 'Nombre del modelo';
$lang->aiapp->modelID            = 'ID del modelo';
$lang->aiapp->abilities          = 'Habilidades';
$lang->aiapp->converse           = 'Conversar';
$lang->aiapp->pageSummary        = 'Total de %s elementos.';
$lang->aiapp->searchModels       = 'Buscar modelos';
$lang->aiapp->abilityTypes       = [];

$lang->aiapp->abilityTypes['chat']             = 'Chat';
$lang->aiapp->abilityTypes['function-calling'] = 'Llamada a funciones';
$lang->aiapp->abilityTypes['reasoning']        = 'Razonamiento';
$lang->aiapp->abilityTypes['embedding']        = 'Embedding';

$lang->aiapp->tips = new stdClass();
$lang->aiapp->tips->noData = 'Sin datos';

$lang->aiapp->langData                     = new stdClass();
$lang->aiapp->langData->name               = 'ZenTao';
$lang->aiapp->langData->storyReview        = 'Revisión de historia';
$lang->aiapp->langData->storyReviewHint    = 'Revisar la historia de la página actual';
$lang->aiapp->langData->storyReviewMessage = "Here is the story to be reviewed:\n\n### Story Title\n\n{title}\n\n### Story Description\n\n{spec}\n\n### Acceptance Criteria\n\n{verify}";
$lang->aiapp->langData->aiReview           = 'Revisión de IA';
$lang->aiapp->langData->currentPage        = 'Página actual';
$lang->aiapp->langData->story              = 'Historia';
$lang->aiapp->langData->demand             = 'Historia del repositorio de demandas';
$lang->aiapp->langData->bug                = 'Bug';
$lang->aiapp->langData->doc                = 'Documento';
$lang->aiapp->langData->design             = 'Diseño';
$lang->aiapp->langData->feedback           = 'Retroalimentación';
$lang->aiapp->langData->currentDocContent  = 'Documento actual';
$lang->aiapp->langData->globalMemoryTitle  = 'Todos';
$lang->aiapp->langData->zaiConfigNotValid  = 'La configuración de ZAI aún no se ha realizado. Comuníquese con el administrador para <a href="{zaiConfigUrl}">configurar ZAI</a>.<br>Si la configuración ya se completó, intente recargar la página.';
$lang->aiapp->langData->unauthorizedError  = 'Falló la autorización, clave de API no válida. Comuníquese con el administrador para <a href="{zaiConfigUrl}">configurar ZAI</a>.<br>Si la configuración ya se completó, intente recargar la página.';
$lang->aiapp->langData->processDataPrefix  = "The data to be processed is as follows:\n{data}";
$lang->aiapp->langData->promptExtraLimit   = 'Normalmente la herramienta `{toolName}` solo necesita llamarse una vez, a menos que el usuario requiera varias soluciones.';
$lang->aiapp->langData->promptResultReturn = 'Los datos procesados ya se muestran en la interfaz. No es necesario volver a mostrarlos ni describirlos o explicarlos más. No muestre al usuario los datos JSON sin procesar del resultado. Solo recuérdeme que puedo usar estos datos haciendo clic en el botón "Aplicar al formulario {formName}".';
$lang->aiapp->langData->goTesting          = 'Ir a pruebas';
$lang->aiapp->langData->notSupportPreview  = 'No se admite la vista previa de este contenido';
$lang->aiapp->langData->dataListSizeInfo   = 'Total de %s elementos';
$lang->aiapp->langData->promptTestDataIntro= 'Este es el ejemplo de {type} de {name}:';
$lang->aiapp->langData->searchingKLibs     = 'Buscando en las bibliotecas de conocimiento...';
$lang->aiapp->langData->recentChats        = 'Chats recientes';
$lang->aiapp->langData->aiTeammateTasks    = 'Tareas del compañero digital';

$lang->aiapp->langData->processedDataResult = "The processed data is as follows:\n```json\n{data}\n```";
$lang->aiapp->langData->agentResultSummary  = 'Explique los cambios de datos de la solución con una frase corta y fácil de entender. No use saltos de línea.';
$lang->aiapp->langData->promptResultTitle   = 'Título de la solución; si no hay un título adecuado, se puede omitir';
$lang->aiapp->langData->searchTasks         = 'Buscar tareas del compañero digital';
$lang->aiapp->langData->formFillTitle       = 'Llenado de formulario';
$lang->aiapp->langData->formFillUserMessage = 'Complete el formulario según la información de la página actual';
$lang->aiapp->langData->formPageContext     = 'Contexto de la página actual';
$lang->aiapp->langData->formCurrentData     = 'Datos actuales del formulario';
$lang->aiapp->langData->formFillableFields  = 'Campos completables';
$lang->aiapp->langData->formFieldDefinition = 'Definiciones de campos';
$lang->aiapp->langData->formRequiredField   = 'Obligatorio';
$lang->aiapp->langData->formReturnJSONArray = 'Devuelva un arreglo JSON; cada elemento del arreglo corresponde a una fila de datos y las claves corresponden a los nombres de campos rellenables. Los campos obligatorios deben tener valor.';
$lang->aiapp->langData->formZentaoAPITip    = "Please first use the zentao-api-readonly tool to obtain the required context data, then use the submitFormData tool to return the filled form data. Required fields must have values.\nUsually submitFormData only needs to be called once, unless the user requires multiple solutions.";
$lang->aiapp->langData->formResultGenerated = 'Se generaron los datos del formulario.';
$lang->aiapp->langData->formCurrentTarget   = 'Actual';
$lang->aiapp->langData->stepDescription     = 'Descripción del paso';
$lang->aiapp->langData->expectDescription   = 'Resultado esperado';

$lang->aiapp->langData->submitFormDisplayName = 'Enviar datos del formulario';
$lang->aiapp->langData->submitFormDescription = 'Devolver al usuario los datos del formulario completado';
$lang->aiapp->langData->vectorizedData        = 'Datos vectorizados';

$lang->aiapp->toolkitTitle = 'ZenTao Toolkit';
$lang->aiapp->toolkitItems = array();
$lang->aiapp->toolkitItems['cli']    = array('title' => 'Skill de CLI');
$lang->aiapp->toolkitItems['mcp']    = array('title' => 'Servicio MCP');
$lang->aiapp->toolkitItems['cli']['image']    = 'static/images/zentao-cli.png';
$lang->aiapp->toolkitItems['cli']['subtitle'] = 'Permitir que las herramientas de agentes usen ZenTao mediante línea de comandos';
$lang->aiapp->toolkitItems['cli']['intro']    = <<<'MARKDOWN'
ZenTao CLI es más que una herramienta de línea de comandos. Conecta a los agentes de IA con los datos de gestión de I+D de su organización.

Después de instalar la skill de ZenTao, agentes de IA como Cursor y Claude Code pueden consultar el estado de los proyectos, evaluar riesgos de bugs e incluso generar documentos de requerimientos. La skill lee y escribe datos de ZenTao a través de ZenTao CLI, convirtiendo sus herramientas basadas en LLM en asistentes prácticos de gestión de I+D.

#### Características principales

* Construido sobre la API RESTful 2.0 de ZenTao
* Se ejecuta al instante con un solo comando: `npx zentao-cli`
* Autenticación segura con cambio entre múltiples usuarios
* Filtre, ordene y procese datos con conversión automática de HTML a Markdown
* Amigable para agentes de IA, con documentación de ayuda integrada y salida nativa en Markdown
* Úselo como skill de IA: instálelo en cualquier agente con `zentao add-skill`
* Servicio MCP integrado: inícielo con `npx zentao-cli mcp`

#### Herramientas de agentes compatibles

ZenTao CLI se puede usar en todas las herramientas de agentes que admiten skills o MCP. La siguiente tabla lista opciones comunes ordenadas por facilidad de uso, de la más sencilla a la más avanzada:

| Para principiantes | Para desarrolladores | Avanzado/Premium |
|:-----------------:|:------------------:|:----------------:|
| [Cursor](https://www.cursor.com/) | [Cline](https://cline.bot/) | [Trae](https://www.trae.ai/) |
| [VS Code Copilot](https://code.visualstudio.com/docs/copilot/overview) | [OpenClaw](https://www.openclaw.ai/) | [Codex](https://openai.com/codex/) |
| [Cherry Studio](https://www.cherry-ai.com/) | [OpenCode](https://www.opencode.ai/) | [Antigravity](https://antigravity.google/) |
| | [Claude Code](https://docs.anthropic.com/en/docs/claude-code.md) | [Codex CLI](https://developers.openai.com/codex/cli/reference) |

#### Inicio rápido

##### Paso 1: Instalar la skill

**1. Deje que su agente la instale automáticamente**: La mayoría de las herramientas de agentes modernas admiten el descubrimiento e instalación automática de skills. Simplemente envíe el siguiente mensaje al agente:

```
Please install the ZenTao CLI skill from https://cn.clawhub-mirror.com/catouse/zentao-cli and set up the required zentao-cli command-line tool.
```

**2. Instalación manual**: Los desarrolladores también pueden instalarla directamente desde la terminal:

```
# Instalar zentao-cli de forma global
$ npm install -g zentao-cli
# Otras opciones de instalación y ejecución
# bun install -g zentao-cli  # ← Instalar con bun
# npx zentao-cli             # ← Ejecutar sin instalación con npx
# pnpm dlx zentao-cli        # ← Ejecutar sin instalación con pnpm

# Después de la instalación, instale la skill en el agente con un solo comando
$ zentao add-skill
Please select the AI Agent to install:
  1) Claude Code
  2) Cursor
  3) Cherry Studio
  4) Codex
  5) OpenCode
  6) VS Code
  7) Antigravity
  8) Gemini
  9) Install all
Enter a number (1-9):9
```

##### Paso 2: Inicio de sesión y autenticación de la cuenta

Después de la instalación, debe iniciar sesión una vez. Por seguridad de su cuenta, se recomienda encarecidamente no compartir las credenciales de su cuenta con los agentes de IA. En su lugar, use los siguientes métodos de configuración local:

1. Variables de entorno (recomendado): Defina la URL de ZenTao, el usuario y la contraseña como variables de entorno. La herramienta iniciará sesión y renovará los tokens automáticamente.

```sh
export ZENTAO_URL=https://zentao.example.com
export ZENTAO_ACCOUNT=admin
export ZENTAO_PASSWORD=123456
```

2. Inicio de sesión por línea de comandos: También puede iniciar sesión manualmente desde la línea de comandos:

```sh
zentao login -s https://zentao.example.com -u admin -p 123456
```

##### Paso 3: Conversaciones en la práctica

Una vez configurado, puede usar ZenTao en la herramienta de agente correspondiente como si conversara con un colega. Estos son algunos ejemplos prácticos:

* Requerimientos y planeación: "Quiero crear un producto para recopilar información de usuarios en línea. Ayúdame a organizar mis ideas y a generar la primera versión de requerimientos y planes. Hazme las preguntas que necesites."
* Seguimiento del avance: "¿Qué requerimientos nuevos se agregaron la semana pasada? ¿Cuáles son más complejos? Quisiera desarrollar con anticipación los planes para los difíciles."
* Análisis de defectos: "¿De qué trata el Bug 329? ¿Cuáles pueden ser las causas? ¿Hay soluciones?"
* Análisis de riesgos: "¿Cómo va el Sprint 10? ¿Cuáles son los riesgos?"

#### Actualizaciones y mantenimiento

Cuando haya nuevas versiones de ZenTao CLI o de la skill, puede actualizar de la siguiente manera:

```sh
# Actualizar el CLI en sí
zentao upgrade
# Reinstalar la skill con el comando add-skill
zentao add-skill
```

También puede pedirle al agente que le ayude a actualizar:

```
Please help me upgrade zentao-cli and reinstall the latest skill using the zentao add-skill command.
```

#### Preguntas frecuentes

##### P: ¿En qué se diferencia la skill de ZenTao CLI de la anterior skill de la API de ZenTao? ¿Cuál debo usar?

R: Recomendamos encarecidamente la skill de ZenTao CLI. Encapsula los detalles de bajo nivel de la API, admite más capacidades como el filtrado de datos y la conversión a Markdown, y usa los tokens de forma más eficiente. Con la skill de CLI, los LLM pueden concentrarse en resolver tareas reales en lugar de gestionar directamente las llamadas a la API. La skill de la API de ZenTao da al modelo acceso directo a las APIs, pero ese enfoque es más propenso a errores.

##### P: No estoy familiarizado con los agentes ni las skills. ¿Cómo debo empezar?

R: No se preocupe. No necesita dominar todo desde el primer día. Dadas las limitaciones actuales de los agentes de IA, aún no pueden reemplazar por completo la interfaz gráfica de ZenTao. Recomendamos empezar con consultas sencillas, o probar la skill integrada ZenTao Tour, que lo guía paso a paso por los flujos de trabajo más comunes.

##### P: ¿Puedo usar esto en ZenTao AI?

R: Todavía no se admite el uso directo del CLI dentro de ZenTao AI. Estamos desarrollando activamente la plataforma ZAI Agents, que en el futuro permitirá instalar skills directamente dentro de ZenTao.

##### P: ¿Por qué no puedo realizar ciertas operaciones, como operaciones con módulos o leer y escribir documentos?

R: Actualmente el CLI depende de la API 2.0 de ZenTao, y algunos endpoints de la API aún se están mejorando. Se agregarán más capacidades en próximas actualizaciones.

#### Recursos relacionados

* Biblioteca oficial de skills de ZenTao: https://github.com/easysoft/zentao-skills
* Repositorio de código abierto de ZenTao CLI: https://github.com/easysoft/zentao-cli
MARKDOWN;

$lang->aiapp->toolkitItems['mcp']['image']    = 'static/images/zentao-mcp.png';
$lang->aiapp->toolkitItems['mcp']['subtitle'] = 'Permitir que las herramientas de agentes usen ZenTao mediante el protocolo MCP';
$lang->aiapp->toolkitItems['mcp']['intro']    = <<<'MARKDOWN'
ZenTao MCP es un servicio proxy puente basado en MCP (Model Context Protocol). Convierte automáticamente la API 2.0 de ZenTao y otras interfaces REST compatibles con OpenAPI en herramientas MCP estándar, permitiendo que asistentes de IA como Claude, Cursor y CodeBuddy las invoquen de manera uniforme, habilitando la interacción bidireccional con los datos de ZenTao (tanto lectura como escritura).

#### Características principales

* **Conversión automática**: Genera automáticamente herramientas MCP a partir de documentos OpenAPI/Swagger sin código adaptador manual. Compatible con todas las APIs REST que siguen la especificación.
* **Soporte de protocolos de transporte**: Admite Streamable HTTP y SSE (Server-Sent Events), equilibrando compatibilidad (HTTP) y rendimiento en tiempo real (SSE) para distintos clientes de IA.
* **Trazabilidad distribuida**: Incluye trazabilidad y recopilación de métricas con OpenTelemetry para monitorear las cadenas de llamadas del servicio y reunir métricas de ejecución, facilitando el diagnóstico y la optimización.
* **Proxy multiservicio**: Una sola instancia de ZenTao MCP puede hacer proxy de varios servicios de API distintos de forma simultánea, no solo la API de ZenTao, sino cualquier otro sistema compatible con OpenAPI. Altamente extensible.
* **Multiplataforma**: Compatible con Linux, macOS y Windows.

#### Inicio rápido

##### (1) Configurar el servicio MCP (elija una de las cuatro opciones)

###### 1. Configuración en Windows

**Paso 1: Descargar el paquete**

* [Paquete AMD 64 bits](https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-windows-amd64.zip)
* [Paquete ARM 64 bits](https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-windows-arm64.zip)

**Paso 2: Extraer el paquete**

Tomando AMD-64 como ejemplo, extraiga el paquete descargado en `D:\zentao-mcp`.

**Paso 3: Editar la configuración de MCP**

```sh
# Copiar la plantilla de configuración:
copy D:\zentao-mcp\config.example.yaml D:\zentao-mcp\config.yaml

# Editar el archivo de configuración:
D:\zentao-mcp\config.yaml
schema_url: "D:/zentao-mcp/docs/zentao-openapi.json" # Actualice con la ruta real del archivo
base_url: "https://your-zentao-domain/api.php/v2"    # Actualice con su dominio de ZenTao
```

**Paso 4: Iniciar el servicio MCP**

```sh
# Ejecute el siguiente comando en cmd:
D:\zentao-mcp\bin\zentao-mcp-windows-amd64.exe -config D:\zentao-mcp\config.yaml
```

###### 2. Configuración en Linux

**Paso 1: Descargar el paquete**

```sh
# AMD-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-linux-amd64.tar.gz
# ARM-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-linux-arm64.tar.gz
```

**Paso 2: Extraer el paquete**

Tomando AMD-64 como ejemplo:

```sh
# Crear el directorio:
mkdir -p /opt/zentao-mcp
# Extraer:
tar -zxvf zentao-mcp-linux-amd64.tar.gz -C /opt/zentao-mcp
```

**Paso 3: Editar la configuración de MCP**

```sh
# Copiar la plantilla de configuración:
cp /opt/zentao-mcp/config.example.yaml /opt/zentao-mcp/config.yaml

# Editar el archivo de configuración:
/opt/zentao-mcp/config.yaml
schema_url: "/opt/zentao-mcp/docs/zentao-openapi.json" # Actualice con la ruta real del archivo
base_url: "https://your-zentao-domain/api.php/v2"       # Actualice con su dominio de ZenTao
```

**Paso 4: Iniciar el servicio MCP**

```sh
/opt/zentao-mcp/bin/zentao-mcp-linux-amd64 -config /opt/zentao-mcp/config.yaml
```

###### 3. Configuración en macOS

**Paso 1: Descargar el paquete**

```sh
# AMD-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-darwin-amd64.tar.gz
# ARM-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-darwin-arm64.tar.gz
```

**Paso 2: Extraer el paquete**

Tomando AMD-64 como ejemplo:

```sh
# Crear el directorio:
mkdir /opt/zentao-mcp
# Extraer:
tar -zxvf zentao-mcp-darwin-amd64.tar.gz -C /opt/zentao-mcp
```

**Paso 3: Editar la configuración de MCP**

```sh
# Copiar la plantilla de configuración:
cp /opt/zentao-mcp/config.example.yaml /opt/zentao-mcp/config.yaml

# Editar el archivo de configuración:
/opt/zentao-mcp/config.yaml
schema_url: "/opt/zentao-mcp/docs/zentao-openapi.json" # Actualice con la ruta real del archivo
base_url: "https://your-zentao-domain/api.php/v2"       # Actualice con su dominio de ZenTao
```

**Paso 4: Iniciar el servicio MCP**

```sh
/opt/zentao-mcp/bin/zentao-mcp-darwin-amd64 -config /opt/zentao-mcp/config.yaml
```

###### 4. Compilar desde el código fuente (para desarrolladores)

**Paso 1: Clonar el repositorio**

```sh
git clone https://github.com/easysoft/zentao-mcp.git
```

**Paso 2: Iniciar el proyecto**

```sh
# Entrar al directorio del proyecto:
cd zentao-mcp
# Descargar dependencias:
go mod tidy
# Compilar:
go build -o zentao-mcp ./cmd/app
```

##### (2) Configurar el cliente MCP (asistente de IA)

**Paso 1: Obtener el token mediante la API V2 de ZenTao**

```sh
curl -X POST "http://your-zentao-domain/api.php/v2/user/login" \
   -H "Content-Type: application/json" \
   -d '{"account":"username","password":"password"}'
```

El campo `token` del JSON devuelto es el token.

**Paso 2: Configurar MCP en su asistente de IA**

```json
{
  "mcpServers": {
    "zentao": {
      "disabled": false,
      "type": "mcp",
      "url": "http://127.0.0.1:9090/zentao/mcp",
      "timeout": 60000,
      "headers": {
        "token": "ZenTao API V2 Token",
        "Authorization": ""
      }
    },
    "gitfox": {
      "disabled": false,
      "type": "sse",
      "url": "http://127.0.0.1:9090/gitfox/sse",
      "timeout": 60000,
      "headers": {
        "Authorization": "GitFox Token"
      }
    }
  }
}
```

#### Escenarios de ejemplo

* **Crear un producto**: Cree un producto llamado "Operations Monitoring Platform" en ZenTao.
* **Crear una historia**: Cree una historia en un producto específico de ZenTao.
* **Crear un repositorio**: Cree un repositorio llamado example-repo en GitFox.
* **Generar y enviar código**: Genere código base (scaffold) en un repositorio de GitFox y envíelo.

#### Enlaces relacionados

* Documentación de la API de ZenTao: https://www.zentao.net/book/api/2309.html
* Introducción a GitFox: https://www.gitfox.net/
* Código fuente del proyecto: https://github.com/easysoft/zentao-mcp
MARKDOWN;
