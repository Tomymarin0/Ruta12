FROM php:7.4-apache

COPY ./theside /var/www/html/theside

WORKDIR /var/www/html

RUN mkdir /var/www/html/public
RUN chown -R www-data:www-data /var/www/html/public

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

RUN apt-get install sendmail

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" 
COPY ./php.ini $PHP_INI_DIR/php.ini

EXPOSE 80