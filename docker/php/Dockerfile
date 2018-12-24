FROM php:7.1-fpm
 
ARG WEB_USER=www-data
ARG WEB_GROUP=www-data
ARG PHP_ROOT_DIR=/usr/local/etc
 
COPY www.conf ${PHP_ROOT_DIR}/php-fpm.d/www.conf

RUN apt-get update
RUN apt-get install -y --no-install-recommends libxml2-dev curl openssl
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install json
RUN docker-php-ext-install ctype
RUN docker-php-ext-install dom
RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install iconv
RUN docker-php-ext-install simplexml
RUN docker-php-ext-install intl 

RUN usermod -u 1000 ${WEB_USER} \
 && groupmod -g 1000 ${WEB_GROUP} \
 && chgrp -R staff ${PHP_ROOT_DIR}/php-fpm.d/www.conf