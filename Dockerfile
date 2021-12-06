FROM php:7.4-apache
RUN a2enmod rewrite
RUN rmdir /var/www/html && \
    ln -s /docker/webroot /var/www/html
