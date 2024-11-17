# Use an official PHP image
FROM php:7.4-fpm

# Install MySQL client and other dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your PHP application to the container
COPY . /var/www/html

# Expose port 9000 for PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
