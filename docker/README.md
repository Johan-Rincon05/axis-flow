# AXIS FLOW (basado en ZenTao)

Fork de `easysoft/zentaopms` (se conserva la atribución a ZenTao exigida por la licencia) (licencia dual ZPL 1.2 / AGPL 3.0, ver `LICENSE.EN`).

- `Dockerfile`: PHP 8.2 + Apache, arbol listo como el `Makefile` upstream.
- `docker-compose.yml`: app + MariaDB. Variables requeridas: `DB_ROOT_PASSWORD`, `DB_PASSWORD`.
- Persistencia: `www/data`, `config` (incluye `my.php`) y `extension/custom`.
- En el instalador usar host `db`, base `zentao`, usuario `zentao`, y la clave `DB_PASSWORD`.
- Personalizar via `extension/custom` y `module/*/ext` antes que editar el core, para facilitar el merge de `upstream/main`.
