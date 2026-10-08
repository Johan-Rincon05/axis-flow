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

exec docker-php-entrypoint "$@"
