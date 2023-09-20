#Base image
FROM php:8.1-apache

#Install pdo_mysql
RUN docker-php-ext-install pdo_mysql
