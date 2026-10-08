#!/bin/sh
set -e

ROOT="${ZENTAO_ROOT:-/var/www/zentao}"
DEFAULTS="${ZENTAO_DEFAULTS:-/opt/zentao-defaults}"

# config/ es un volumen: en cada arranque se sincronizan los archivos base de la
# imagen (para recibir cambios de nuevas versiones) sin tocar config/my.php,
# que es donde ZenTao guarda la configuracion de la instalacion.
rsync -a --exclude='my.php' --exclude='ext/' "${DEFAULTS}/config/" "${ROOT}/config/"
[ -d "${ROOT}/config/ext" ] || cp -a "${DEFAULTS}/config/ext" "${ROOT}/config/ext" 2>/dev/null || true

mkdir -p "${ROOT}/www/data/upload" "${ROOT}/extension/custom" \
         "${ROOT}/tmp/cache" "${ROOT}/tmp/log" "${ROOT}/tmp/model" "${ROOT}/tmp/extension"
chown -R www-data:www-data "${ROOT}/www/data" "${ROOT}/config" "${ROOT}/extension/custom" "${ROOT}/tmp"

# Idioma por defecto de la instalacion (AXIS_DEFAULT_LANG, por defecto "es").
if [ -f "${ROOT}/config/my.php" ]; then
    sed -i "s/\(\$config->default->lang *= *\)'[^']*'/\1'${AXIS_DEFAULT_LANG:-es}'/" "${ROOT}/config/my.php"
fi

# Zona horaria de la instalacion (AXIS_TIMEZONE, por defecto America/Bogota).
if [ -f "${ROOT}/config/my.php" ]; then
    sed -i "s#\(\$config->timezone *= *\)'[^']*'#\1'${AXIS_TIMEZONE:-America/Bogota}'#" "${ROOT}/config/my.php"
fi

# Una vez instalado (existe config/my.php) ZenTao exige borrar los asistentes de
# instalacion/actualizacion. Para actualizar ZenTao de version, definir
# ZENTAO_ALLOW_UPGRADE=1 en el entorno durante ese despliegue.
if [ -f "${ROOT}/config/my.php" ]; then
    rm -f "${ROOT}/www/install.php"
    [ "${ZENTAO_ALLOW_UPGRADE:-0}" = "1" ] || rm -f "${ROOT}/www/upgrade.php"
fi

# Filas de idioma "es" en la base de datos (nombres de historias/requerimientos, relaciones, navegadores...).
php "${ROOT}/docker/axis-seed-es.php" || true
# Nombres integrados de graficos/metricas/tablas dinamicas (una vez por version del contenido).
php "${ROOT}/docker/axis-refresh-bi.php" || true

exec docker-php-entrypoint "$@"
