FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    nginx git unzip zip libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY .env.example .env


WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data storage bootstrap/cache

# Nginx config
COPY nginx.conf /etc/nginx/sites-available/default

EXPOSE 80

CMD service nginx start && php-fpm
