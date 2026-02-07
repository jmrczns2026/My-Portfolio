# Use official PHP image with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libonig-dev \
    libzip-dev \
    zip \
    curl \
    npm \
    nodejs \
    && docker-php-ext-install pdo_mysql mbstring zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files
COPY . .

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader

# Install Node dependencies and build Tailwind CSS
RUN npm install
RUN npm run build

# Expose port 80
EXPOSE 80

# Set environment variables (override with Render ENV)
ENV APP_ENV=production
ENV APP_DEBUG=false

# Start Apache
CMD ["apache2-foreground"]
