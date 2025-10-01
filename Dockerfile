# Use official PHP-FPM image
FROM php:8.3-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd zip bcmath

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose Laravel port
EXPOSE 8000

# Start PHP's built-in web server from /public
# Also clear caches at container startup to ensure Livewire config is fresh
CMD sh -c "php artisan config:clear && \
           php artisan cache:clear && \
           php artisan view:clear && \
           php artisan route:clear && \
           php -S 0.0.0.0:8000 -t public"
