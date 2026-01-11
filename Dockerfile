FROM php:8.4-cli-alpine AS base

# Dependencias del sistema para compilar extensiones PHP y runtime
RUN apk add --no-cache \
    # Herramientas básicas
    git curl unzip bash \
    # Dependencias para extensiones PHP
    libpng-dev libjpeg-turbo-dev freetype-dev \
    libzip-dev icu-dev oniguruma-dev libxml2-dev \
    # PostgreSQL y MySQL
    postgresql-dev mysql-dev \
    # Redis
    libstdc++ \
    # Swoole
    linux-headers $PHPIZE_DEPS openssl-dev curl-dev \
    # Node.js
    nodejs npm \
    # Procesos
    procps

# Extensiones PHP para Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo pdo_mysql pdo_pgsql \
    mbstring zip exif pcntl bcmath \
    sockets intl gd opcache

# Redis extension via PECL
RUN pecl install redis \
    && docker-php-ext-enable redis

# Swoole para Laravel Octane
RUN pecl install swoole \
    && docker-php-ext-enable swoole

# Limpiar cache de compilación
RUN apk del $PHPIZE_DEPS linux-headers \
    && rm -rf /var/cache/apk/* /tmp/*

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Optimizaciones de PHP para producción
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Configuración de OPcache para producción
RUN echo "opcache.enable=1" >> "$PHP_INI_DIR/conf.d/opcache.ini" \
    && echo "opcache.memory_consumption=256" >> "$PHP_INI_DIR/conf.d/opcache.ini" \
    && echo "opcache.interned_strings_buffer=16" >> "$PHP_INI_DIR/conf.d/opcache.ini" \
    && echo "opcache.max_accelerated_files=20000" >> "$PHP_INI_DIR/conf.d/opcache.ini" \
    && echo "opcache.validate_timestamps=0" >> "$PHP_INI_DIR/conf.d/opcache.ini" \
    && echo "opcache.enable_cli=1" >> "$PHP_INI_DIR/conf.d/opcache.ini"

WORKDIR /var/www

# Crear estructura de directorios de Laravel
RUN mkdir -p bootstrap/cache storage/app/public storage/framework/cache/data \
    storage/framework/sessions storage/framework/views storage/logs

# Copiar archivos de dependencias primero (cache de Docker)
COPY composer.json ./

# Instalar dependencias de Composer (sin scripts)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist --no-scripts

# Copiar archivos de Node (cache de Docker)
COPY package.json  ./
RUN npm ci

# Copiar el resto del proyecto
COPY . .

# Ejecutar scripts de Composer y optimizar autoload
RUN composer dump-autoload --optimize

# Build de assets (Laravel Mix)
RUN npm run production

# Limpiar cache de Laravel antes de runtime
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan cache:clear

# Crear usuario no-root para seguridad
RUN addgroup -g 1000 -S laravel \
    && adduser -u 1000 -S laravel -G laravel

# Permisos
RUN chown -R laravel:laravel /var/www \
    && chmod -R 775 storage bootstrap/cache

USER laravel

EXPOSE 9000

# Script de inicio
CMD ["sh", "-c", "php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan octane:start --server=swoole --host=0.0.0.0 --port=9000"]
