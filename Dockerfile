FROM php:7.3-apache

# Install database driver
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql

# Enable apache modules
RUN a2enmod rewrite headers