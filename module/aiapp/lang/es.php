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
ZenTao CLI is more than a command-line tool. It connects AI agents with your R&D management data.

After installing the ZenTao skill, AI agents such as Cursor and Claude Code can check project status, assess bug risks, and even generate requirements documents. The skill reads and writes ZenTao data through ZenTao CLI, turning your LLM-powered tools into practical R&D management assistants.

#### Key Features

* Built on ZenTao RESTful API 2.0
* Run instantly with a single command: `npx zentao-cli`
* Secure authentication with multi-user switching
* Filter, sort, and process data with automatic HTML-to-Markdown conversion
* AI Agent-friendly with built-in help documentation and native Markdown output
* Use as an AI skill — install to any Agent with `zentao add-skill`
* Built-in MCP service — start with `npx zentao-cli mcp`

#### Supported Agent Tools

ZenTao CLI can be used in all agent tools that support skills or MCP. The table below lists common options sorted by ease of use, from easiest to most advanced:

| Beginner-Friendly | Developer-Friendly | Advanced/Premium |
|:-----------------:|:------------------:|:----------------:|
| [Cursor](https://www.cursor.com/) | [Cline](https://cline.bot/) | [Trae](https://www.trae.ai/) |
| [VS Code Copilot](https://code.visualstudio.com/docs/copilot/overview) | [OpenClaw](https://www.openclaw.ai/) | [Codex](https://openai.com/codex/) |
| [Cherry Studio](https://www.cherry-ai.com/) | [OpenCode](https://www.opencode.ai/) | [Antigravity](https://antigravity.google/) |
| | [Claude Code](https://docs.anthropic.com/en/docs/claude-code.md) | [Codex CLI](https://developers.openai.com/codex/cli/reference) |

#### Quick Start

##### Step 1: Install the Skill

**1. Let your agent install it automatically**: Most modern Agent tools support automatic discovery and installation of skills. Simply send the following message to the Agent:

```
Please install the ZenTao CLI skill from https://cn.clawhub-mirror.com/catouse/zentao-cli and set up the required zentao-cli command-line tool.
```

**2. Manual installation**: Developers can also install directly via the terminal:

```
# Install zentao-cli globally
$ npm install -g zentao-cli
# Other installation and runtime options
# bun install -g zentao-cli  # ← Install with bun
# npx zentao-cli             # ← Run without installation via npx
# pnpm dlx zentao-cli        # ← Run without installation via pnpm

# After installation, install the skill to the Agent with one command
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

##### Step 2: Account Login and Authentication

After installation, you need to log in once. For account security, it is strongly recommended not to share your account credentials with AI Agents. Instead, use the following local configuration methods:

1. Environment variables (recommended): Set the ZenTao URL, username, and password as environment variables. The tool will automatically log in and refresh tokens.

```sh
export ZENTAO_URL=https://zentao.example.com
export ZENTAO_ACCOUNT=admin
export ZENTAO_PASSWORD=123456
```

2. Command-line login: You can also log in manually via the command line:

```sh
zentao login -s https://zentao.example.com -u admin -p 123456
```

##### Step 3: Conversations in Practice

Once configured, you can use ZenTao in the corresponding Agent tool just like chatting with a colleague. Here are some practical examples:

* Requirements & Planning: "I want to create a product to collect user information online. Please help me organize my thoughts and generate the first version of requirements and plans. Feel free to ask me any questions."
* Progress Tracking: "What new requirements were added last week? Which ones are more challenging? I'd like to develop plans for the difficult ones in advance."
* Defect Analysis: "What is Bug 329 about? What are the possible causes? Are there any solutions?"
* Risk Analysis: "How is Sprint 10 progressing? What are the risks?"

#### Upgrades and Maintenance

When new versions of ZenTao CLI or the skill are available, you can upgrade as follows:

```sh
# Upgrade the CLI itself
zentao upgrade
# Reinstall the skill with the add-skill command
zentao add-skill
```

You can also ask the Agent to help you upgrade:

```
Please help me upgrade zentao-cli and reinstall the latest skill using the zentao add-skill command.
```

#### FAQ

##### Q: How is the ZenTao CLI skill different from the earlier ZenTao API skill? Which one should I use?

A: We strongly recommend the ZenTao CLI skill. It wraps the lower-level API details, supports more capabilities such as data filtering and Markdown conversion, and uses tokens more efficiently. With the CLI skill, LLMs can focus on solving real tasks instead of managing API calls directly. The ZenTao API skill gives the model direct access to the APIs, but that approach is more error-prone.

##### Q: I'm not familiar with agents or skills. How should I get started?

A: No worries. You don't need to master everything on day one. Given the current limitations of AI agents, they cannot fully replace the ZenTao GUI yet. We recommend starting with simple queries first, or trying the built-in ZenTao Tour skill, which guides you through common workflows step by step.

##### Q: Can I use this in ZenTao AI?

A: Direct CLI usage inside ZenTao AI is not supported yet. We are actively developing the ZAI Agents platform, which will support installing skills directly inside ZenTao in the future.

##### Q: Why can't I perform certain operations, such as module operations or reading and writing documents?

A: The CLI currently relies on ZenTao API 2.0, and some API endpoints are still being improved. More capabilities will be added in future updates.

#### Related Resources

* ZenTao Official Skill Library: https://github.com/easysoft/zentao-skills
* ZenTao CLI Open Source Repository: https://github.com/easysoft/zentao-cli
MARKDOWN;

$lang->aiapp->toolkitItems['mcp']['image']    = 'static/images/zentao-mcp.png';
$lang->aiapp->toolkitItems['mcp']['subtitle'] = 'Permitir que las herramientas de agentes usen ZenTao mediante el protocolo MCP';
$lang->aiapp->toolkitItems['mcp']['intro']    = <<<'MARKDOWN'
ZenTao MCP is a bridge proxy service based on the MCP (Model Context Protocol). It automatically converts ZenTao API 2.0 and other OpenAPI-compliant REST interfaces into standard MCP tools, allowing AI assistants such as Claude, Cursor, and CodeBuddy to call them uniformly, enabling bidirectional interaction with ZenTao data (both reading from and writing to ZenTao).

#### Core Features

* **Automatic Conversion**: Automatically generates MCP tools from OpenAPI/Swagger documents without manual adapter code. Compatible with all REST APIs following the specification.
* **Transport Protocol Support**: Supports both Streamable HTTP and SSE (Server-Sent Events), balancing compatibility (HTTP) and real-time performance (SSE) for different AI clients.
* **Distributed Tracing**: Built-in OpenTelemetry tracing and metrics collection to monitor service call chains and gather runtime metrics, making troubleshooting and optimization easier.
* **Multi-Service Proxy**: A single ZenTao MCP instance can proxy multiple different API services simultaneously — not just ZenTao API, but any other OpenAPI-compliant system. Highly extensible.
* **Cross-Platform**: Supports Linux, macOS, and Windows.

#### Quick Start

##### (1) Configure MCP Service (choose one of four options)

###### 1. Windows Configuration

**Step 1: Download the package**

* [AMD 64-bit package](https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-windows-amd64.zip)
* [ARM 64-bit package](https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-windows-arm64.zip)

**Step 2: Extract the package**

Using AMD-64 as an example, extract the downloaded package to `D:\zentao-mcp`.

**Step 3: Edit MCP configuration**

```sh
# Copy the configuration template:
copy D:\zentao-mcp\config.example.yaml D:\zentao-mcp\config.yaml

# Edit the configuration file:
D:\zentao-mcp\config.yaml
schema_url: "D:/zentao-mcp/docs/zentao-openapi.json" # Update to actual file path
base_url: "https://your-zentao-domain/api.php/v2"    # Update your ZenTao domain
```

**Step 4: Start the MCP service**

```sh
# Run the following command in cmd:
D:\zentao-mcp\bin\zentao-mcp-windows-amd64.exe -config D:\zentao-mcp\config.yaml
```

###### 2. Linux Configuration

**Step 1: Download the package**

```sh
# AMD-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-linux-amd64.tar.gz
# ARM-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-linux-arm64.tar.gz
```

**Step 2: Extract the package**

Using AMD-64 as an example:

```sh
# Create directory:
mkdir -p /opt/zentao-mcp
# Extract:
tar -zxvf zentao-mcp-linux-amd64.tar.gz -C /opt/zentao-mcp
```

**Step 3: Edit MCP configuration**

```sh
# Copy the configuration template:
cp /opt/zentao-mcp/config.example.yaml /opt/zentao-mcp/config.yaml

# Edit the configuration file:
/opt/zentao-mcp/config.yaml
schema_url: "/opt/zentao-mcp/docs/zentao-openapi.json" # Update to actual file path
base_url: "https://your-zentao-domain/api.php/v2"       # Update your ZenTao domain
```

**Step 4: Start the MCP service**

```sh
/opt/zentao-mcp/bin/zentao-mcp-linux-amd64 -config /opt/zentao-mcp/config.yaml
```

###### 3. macOS Configuration

**Step 1: Download the package**

```sh
# AMD-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-darwin-amd64.tar.gz
# ARM-64:
curl -k -L -O https://pkg.zentao.net/zentao-mcp/1.0.1/zentao-mcp-darwin-arm64.tar.gz
```

**Step 2: Extract the package**

Using AMD-64 as an example:

```sh
# Create directory:
mkdir /opt/zentao-mcp
# Extract:
tar -zxvf zentao-mcp-darwin-amd64.tar.gz -C /opt/zentao-mcp
```

**Step 3: Edit MCP configuration**

```sh
# Copy the configuration template:
cp /opt/zentao-mcp/config.example.yaml /opt/zentao-mcp/config.yaml

# Edit the configuration file:
/opt/zentao-mcp/config.yaml
schema_url: "/opt/zentao-mcp/docs/zentao-openapi.json" # Update to actual file path
base_url: "https://your-zentao-domain/api.php/v2"       # Update your ZenTao domain
```

**Step 4: Start the MCP service**

```sh
/opt/zentao-mcp/bin/zentao-mcp-darwin-amd64 -config /opt/zentao-mcp/config.yaml
```

###### 4. Build from Source (for developers)

**Step 1: Clone the repository**

```sh
git clone https://github.com/easysoft/zentao-mcp.git
```

**Step 2: Start the project**

```sh
# Enter project directory:
cd zentao-mcp
# Download dependencies:
go mod tidy
# Build:
go build -o zentao-mcp ./cmd/app
```

##### (2) Configure MCP Client (AI Assistant)

**Step 1: Get the Token via ZenTao API V2**

```sh
curl -X POST "http://your-zentao-domain/api.php/v2/user/login" \
   -H "Content-Type: application/json" \
   -d '{"account":"username","password":"password"}'
```

The `token` field in the returned JSON is the Token.

**Step 2: Configure MCP in your AI assistant**

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

#### Example Scenarios

* **Create a product**: Create a product named "Operations Monitoring Platform" in ZenTao.
* **Create a story**: Create a story in a specific ZenTao product.
* **Create a repository**: Create a repository named example-repo in GitFox.
* **Generate and push code**: Generate scaffold code in a GitFox repository and push it.

#### Related Links

* ZenTao API Documentation: https://www.zentao.net/book/api/2309.html
* GitFox Introduction: https://www.gitfox.net/
* Project Source Code: https://github.com/easysoft/zentao-mcp
MARKDOWN;
