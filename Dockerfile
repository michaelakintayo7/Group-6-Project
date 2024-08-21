FROM php:8.1-apache

# Install system dependencies and tools required for building PHP extensions
RUN apt-get update && apt-get install -y \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    g++ \
    libtool \
    autoconf \
    automake \
    make \
    && docker-php-ext-install mysqli pdo pdo_mysql gd curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Optional: If you have a custom php.ini configuration, copy it here
# COPY php.ini /usr/local/etc/php/

# Ensure proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Copy application files (if any)
# COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
