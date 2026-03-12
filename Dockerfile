# Use official PHP image with Apache
FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy all project files
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache
RUN chmod -R 777 /var/www/html/database

# Copy Apache config
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN a2enmod rewrite

EXPOSE 80