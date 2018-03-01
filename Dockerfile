FROM php:7.1-apache

COPY ./apache/php.ini /usr/local/etc/php/

COPY ./apache/site.conf /etc/apache2/sites-available/

RUN a2dissite \* && mkdir -p /srv && \
    a2enmod headers rewrite && a2ensite site.conf

WORKDIR /srv

COPY . /srv

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
   php composer-setup.php && \
   php -r "unlink('composer-setup.php');" && \
   mv composer.phar / && \
   php /composer.phar install -o
