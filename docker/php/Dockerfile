FROM php:8.1.2-fpm-alpine
COPY php.ini /usr/local/etc/php/

RUN apk --no-cache update && \
    apk --no-cache upgrade && \
    apk --no-cache add zlib-dev libzip-dev mariadb mariadb-client vim \
    && docker-php-ext-install zip pdo pdo_mysql mysqli

# RUN apt-get update \
#   && apt-get install -y zlib1g-dev libzip-dev mariadb-client vim \
#   && docker-php-ext-install zip pdo_mysql mysqli

WORKDIR /var/www