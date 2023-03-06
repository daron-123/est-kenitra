FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get upgrade -y
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite