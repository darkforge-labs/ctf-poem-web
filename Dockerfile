FROM php:8.0-apache

WORKDIR /var/www/html

RUN mkdir -p /var/secret

COPY index.php /var/www/html/
COPY poem.ini /var/www/html
COPY flag.txt /var/secret/

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
