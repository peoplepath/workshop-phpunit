FROM php:8.3-apache

# Instalace závislostí potřebných pro Composer a rozšíření PHP
RUN apt-get update && apt-get install -y \
        zip \
        unzip \
        git \
        libzip-dev \
        && docker-php-ext-install zip \
        && docker-php-ext-install mysqli

# Stáhněte a nainstalujte Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Instalace Xdebug
RUN pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    docker-php-ext-enable mysqli
    
# Konfigurace Xdebug
RUN echo 'xdebug.mode=debug' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.start_with_request=yes' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.client_port=9000' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.discover_client_host=1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.client_host=host.docker.internal' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
