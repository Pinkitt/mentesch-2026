# Alap PHP-FPM image
FROM php:8.2-fpm

WORKDIR /var/www/html

# Rendszer dependencies telepítése
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer telepítése
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Projekt másolása a konténerbe
COPY . /var/www/html
COPY --chown=www-data:www-data . /var/www/html

# Port 9000 nyitása
EXPOSE 9000

# PHP-FPM indítása
CMD ["php-fpm"]
