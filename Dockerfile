# Menggunakan image dasar PHP
FROM php:8.2-fpm

# Menginstal ekstensi yang diperlukan
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Mengatur direktori kerja di dalam container
WORKDIR /var/www

# Menyalin file composer.json dan composer.lock
COPY composer.json composer.lock ./

# Menginstal Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-autoloader --no-scripts

# Menyalin semua file aplikasi ke dalam container
COPY . .

# Menginstal autoloader dan menjalankan skrip
RUN composer dump-autoload

# Menentukan perintah yang dijalankan saat container dimulai
CMD ["php-fpm"]

# Memaparkan port untuk aplikasi Laravel (opsional)
EXPOSE 9000
