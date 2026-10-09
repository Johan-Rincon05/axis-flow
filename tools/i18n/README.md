# Herramienta de traducción (en -> es)
`i18n.php extract <repo> out.json` extrae los textos visibles de los `lang/en.php`; `i18n.php inject <repo> traducciones.json` genera los `es.php`
sustituyendo solo literales de texto (el código PHP queda intacto) y descarta traducciones que alteren marcadores (%s, $var, HTML).
Ejecutar con: docker run --rm -v <dir>:/w php:8.2-cli php /w/tools/i18n/i18n.php ...

Orden de regeneracion de los `es.php`:
1. `php tools/i18n/i18n.php inject <repo> tools/i18n/data/translations-es.json report.json tools/i18n/data/trusted.json`
2. `python3 tools/i18n/postfix.py <repo>` (verbos del historial, unidades de tiempo)
3. Los textos en chino de `module/bi|metric|ai/config` se tradujeron con `han.php` (`data/translations-zh-es.json`).
