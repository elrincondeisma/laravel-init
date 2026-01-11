# ==================================================
# Proyecto Laravel – Dokploy
# ==================================================

FROM elrincondeisma/laravel-docker-images:latest

WORKDIR /var/www

# ==================================================
# Copiar proyecto con permisos correctos
# ==================================================
COPY --chown=laravel:laravel . .

# ==================================================
# Dependencias PHP
# ==================================================
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# ==================================================
# Frontend (Vite)
# ==================================================
RUN npm install \
    && npm run build

# ==================================================
# Optimización Laravel
# ==================================================
RUN php artisan key:generate --force \
    && php artisan storage:link \
    && php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# ==================================================
# Exponer puerto Octane
# ==================================================
EXPOSE 8000

# ==================================================
# Arranque Octane
# ==================================================
CMD ["php", "artisan", "octane:start", "--server=swoole", "--host=0.0.0.0", "--port=8000"]
