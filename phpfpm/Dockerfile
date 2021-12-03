FROM php:8.1-fpm-alpine3.15

#RUN apk add nano
RUN apk add composer

WORKDIR /appcode
#CMD sh -c "composer install"

COPY /phpfpm/php.ini /usr/local/etc/php/php.ini

#COPY /phpfpm/log.conf /usr/local/etc/php-fpm.d/zz-log.conf