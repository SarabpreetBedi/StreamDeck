# Use official PHP Apache image
FROM php:8.2-apache

# Enable mod_rewrite if needed
RUN a2enmod rewrite

# Copy your site files into the container's web root
COPY ./ /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set permissions (optional, depends on your files)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
