FROM php:8.0-fpm

ARG DOCKER_HOST_IP
ARG XDEBUG_IDE_KEY

# Install common softwares
COPY ./scripts /tmp/scripts
RUN chmod 755 /tmp/scripts/install.sh
RUN /tmp/scripts/install.sh

# Install xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug,develop" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=trigger" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=${DOCKER_HOST_IP}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey=${XDEBUG_IDE_KEY}" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install pgsql PDO extension
RUN docker-php-ext-install pdo_pgsql