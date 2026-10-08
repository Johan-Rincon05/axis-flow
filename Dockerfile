# ZenTao PMS (fork) - imagen propia para Dokploy
# Build:  docker build -t zentao-custom .
FROM php:8.2-apache

ENV ZENTAO_ROOT=/var/www/zentao \
    ZENTAO_DEFAULTS=/opt/zentao-defaults \
    APACHE_DOCUMENT_ROOT=/var/www/zentao/www

RUN apt-get update && apt-get install -y --no-install-recommends \
        libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev libldap2-dev \
        libonig-dev libxml2-dev libcurl4-openssl-dev libicu-dev rsync unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" pdo_mysql mysqli gd zip ldap mbstring \
        xml curl bcmath intl opcache \
    && a2enmod rewrite headers \
    && printf '<Directory /var/www/zentao/www/>\n    AllowOverride All\n    Require all granted\n</Directory>\n' > /etc/apache2/conf-available/zentao.conf \
    && a2enconf zentao \
    && sed -ri "s#/var/www/html#${APACHE_DOCUMENT_ROOT}#g" /etc/apache2/sites-available/*.conf \
    && sed -ri "s#/var/www/#/var/www/zentao/#g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && rm -rf /var/lib/apt/lists/*

COPY docker/php.ini /usr/local/etc/php/conf.d/zentao.ini

WORKDIR ${ZENTAO_ROOT}
COPY . ${ZENTAO_ROOT}

# Mismos pasos que el Makefile de upstream para dejar el arbol ejecutable
RUN set -eux; \
    mv www/install.php.tmp www/install.php; \
    mv www/upgrade.php.tmp www/upgrade.php; \
    rm -f www/cache.php; \
    mkdir -p tmp/cache tmp/duckdb tmp/extension tmp/log tmp/model \
             www/data/upload www/data/course www/data/notify \
             extension/custom; \
    rm -rf .git test doc; \
    chown -R www-data:www-data ${ZENTAO_ROOT}; \
    chmod -R 775 tmp www/data config extension/custom; \
    chmod a+rx bin/*; \
    # copia base de directorios persistentes (se sincroniza al arrancar)
    mkdir -p ${ZENTAO_DEFAULTS}; \
    cp -a config ${ZENTAO_DEFAULTS}/config

COPY docker/entrypoint.sh /usr/local/bin/zentao-entrypoint
RUN chmod +x /usr/local/bin/zentao-entrypoint

# Datos que deben persistir entre despliegues
VOLUME ["/var/www/zentao/www/data", "/var/www/zentao/config", "/var/www/zentao/extension/custom"]

EXPOSE 80
ENTRYPOINT ["zentao-entrypoint"]
CMD ["apache2-foreground"]
