# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql gd curl

# Enable Apache mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Optional: Copy custom configuration files
# COPY php.ini /usr/local/etc/php/
# COPY .htaccess /var/www/html/

# Set file ownership and permissions (optional)
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
