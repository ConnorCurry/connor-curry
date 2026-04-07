FROM php:8.4.12-fpm

# Update package list and install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libicu-dev \
    libpng-dev \
    libsqlite3-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1

# Install required PHP extensions
RUN docker-php-ext-install pdo gd bcmath zip intl pdo_sqlite

WORKDIR /usr/share/nginx/html/

# Copy the codebase
COPY . ./

# Run composer install for production and give permissions
RUN sed 's_@php artisan package:discover_/bin/true_;' -i composer.json \
    && composer install --ignore-platform-req=php --no-dev --optimize-autoloader \
    && composer clear-cache \
    && php artisan package:discover --ansi \
    && chmod -R 775 storage \
    && chown -R www-data:www-data storage \
    && mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache \
    && chown -R :www-data . \
    && chmod -R 775 .

RUN chown -R www-data:www-data /usr/share/nginx/html/database \
    && chmod -R 775 /usr/share/nginx/html/database

RUN sed -i 's/listen = 127.0.0.1:9000/listen = 9000/' /usr/local/etc/php-fpm.d/www.conf

RUN php artisan down \
	&& php artisan migrate --force \
	&& php artisan up

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs

# Install JS dependencies and build asset
RUN npm ci
RUN npm run build

# Give permissions to everything in bin/
RUN chmod a+x /usr/local/bin/*

RUN docker-php-ext-enable pdo_sqlite

CMD ["php-fpm"]
