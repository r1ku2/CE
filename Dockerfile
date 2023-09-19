FROM php:7.2-apache

COPY info.php /var/www/html
COPY index.php /var/www/html
COPY developer.png /var/www/html

WORKDIR /var/www/html

EXPOSE 80
