FROM php:5.6.25-apache

RUN a2enmod rewrite

RUN docker-php-ext-install pdo_mysql

RUN echo 'date.timezone = "Europe/Paris"' > /usr/local/etc/php/conf.d/timezone.ini

COPY . /var/www/

WORKDIR /var/www/

RUN chown www-data:www-data -R /var/www

CMD ["/bin/bash", "docker-bootstrap.sh"]
