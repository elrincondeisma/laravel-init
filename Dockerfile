FROM php:8.5-cli AS base

# System packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libonig-dev libxml2-dev \
    libzip-dev libpq-dev libcurl4-openssl-dev libssl-dev \
    zlib1g-dev libicu-dev g++ libevent-dev procps \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath sockets intl

# Swoole is installed from GitHub
RUN curl -L -o swoole.tar.gz https://github.com/swoole/swoole-src/archive/refs/tags/v5.1.0.tar.gz \
    && tar -xf swoole.tar.gz \
    && cd swoole-src-5.1.0 \
    && phpize \
    && ./configure \
    && make -j$(nproc) \
    && make install \
    && docker-php-ext-enable swoole

# Node.js 18 (Vite compatible) and Yarn installation
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn

# Composer installation
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy composer files and artisan file
COPY composer.json ./

# Create Laravel's basic directory structure
RUN mkdir -p bootstrap/cache storage/app storage/framework/cache/data \
    storage/framework/sessions storage/framework/views storage/logs

# Install Composer dependencies (without post-scripts)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist --no-scripts

# Node files (cache for Vite build)
COPY package.json yarn.lock ./
RUN yarn install --frozen-lockfile

# Copy the rest of the project files
COPY . .

# Run Composer post-scripts
RUN composer dump-autoload --optimize

# Vite build
RUN yarn build

# Laravel config cache (to be done at runtime, not during build)
RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

# File permissions
RUN chown -R www-data:www-data /var/www \
 && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000

# Startup script
RUN echo '#!/bin/bash\n\
# Cache configurations after environment variables are loaded\n\
php artisan config:cache\n\
php artisan route:cache\n\
php artisan view:cache\n\
# Start the server\n\
exec php artisan octane:start --server=swoole --host=0.0.0.0 --port=9000\n\
' > /start.sh && chmod +x /start.sh

CMD ["sh", "-c", "echo 'APP_KEY:' $APP_KEY && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan octane:start --server=swoole --host=0.0.0.0 --port=9000"]