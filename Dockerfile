# Use official PHP image with Apache
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your project files into the web server directory
COPY . /var/www/html/

# Expose port 80 for the web server
EXPOSE 80
