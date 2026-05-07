#!/bin/sh

echo "Aguardando MySQL..."

sleep 10

echo "Gerando APP_KEY..."

php artisan key:generate --force

echo "Rodando migrations..."

php artisan migrate --force

echo "Iniciando PHP-FPM..."

php-fpm