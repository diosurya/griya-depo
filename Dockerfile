# Gunakan image resmi PHP sebagai image dasar
FROM php:8.1.0-apache

# Aktifkan mod_rewrite
RUN a2enmod rewrite

# Tambahkan ServerName ke konfigurasi Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Atur working directory ke direktori aplikasi Laravel
WORKDIR /var/www/html

# Install dependensi PHP yang dibutuhkan
RUN docker-php-ext-install pdo pdo_mysql

# Instalasi utilitas yang dibutuhkan dan ekstensi PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
&& docker-php-ext-install zip \
&& rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Salin file-filr sumber aplikasi Laravel ke dalam container
COPY . /var/www/html

# Install dependensi aplikasi Laravel menggunakan Composer
RUN composer install --no-interaction --optimize-autoloader

# Set up permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# CMD untuk menjalankan server Apache
CMD ["apache2-foreground"]
