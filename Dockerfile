FROM php:7.3-apache

# Install Vim
RUN apt-get update && apt-get install apt-file -y && apt-file update && apt-get install vim -y

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

# Install database driver
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql

# Enable apache modules
RUN a2enmod rewrite headers