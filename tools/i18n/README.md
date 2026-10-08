# Herramienta de traducción (en -> es)
`i18n.php extract <repo> out.json` extrae los textos visibles de los `lang/en.php`; `i18n.php inject <repo> traducciones.json` genera los `es.php`
sustituyendo solo literales de texto (el código PHP queda intacto) y descarta traducciones que alteren marcadores (%s, $var, HTML).
Ejecutar con: docker run --rm -v <dir>:/w php:8.2-cli php /w/tools/i18n/i18n.php ...
