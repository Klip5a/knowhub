FROM php:8.2-apache

# Установить inotify-tools
RUN apt-get update && apt-get install -y inotify-tools

# Установить PHP-расширения
RUN docker-php-ext-install pdo pdo_mysql

# Установить Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Установить рабочую директорию
WORKDIR /var/www/html

# Добавить скрипт для наблюдения
COPY watch.sh /usr/local/bin/watch.sh
RUN chmod +x /usr/local/bin/watch.sh
