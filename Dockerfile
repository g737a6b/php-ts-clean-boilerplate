FROM php:7.4-apache

RUN a2enmod rewrite

RUN apt-get update && \
    apt-get install -y \
    zip \
    unzip && \
    docker-php-ext-install pdo_mysql

RUN rmdir /var/www/html && \
    ln -s /docker/webroot /var/www/html
