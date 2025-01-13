# Imagen base con PHP y Apache
FROM php:8.1-apache

# Instalar dependencias del sistema
RUN apt-get update && \
    apt-get install -y \
        git \
        unzip \
        default-jre \
        libfontconfig1 \
        && rm -rf /var/lib/apt/lists/*

# Habilitar la extensión mysqli
RUN docker-php-ext-install mysqli

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar todo el proyecto al contenedor
WORKDIR /var/www/html
COPY . .

# Instalar dependencias de Composer
RUN composer install
