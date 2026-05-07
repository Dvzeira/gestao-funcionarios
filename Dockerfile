FROM php:8.4-fpm

# Dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev

# Extensões PHP
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Diretório da aplicação
WORKDIR /var/www

# Copia os arquivos do projeto
COPY . .

# Instala dependências do Laravel
RUN composer install

# Permissões
RUN chown -R www-data:www-data /var/www/storage
RUN chown -R www-data:www-data /var/www/bootstrap/cache

# Copia entrypoint
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh

# Dá permissão de execução
RUN chmod +x /usr/local/bin/entrypoint.sh

# Porta PHP-FPM
EXPOSE 9000

# Inicialização automática
CMD ["entrypoint.sh"]