FROM php:7.4-apache

ENV DEBIAN_FRONTEND=noninteractive

EXPOSE 80

# debian packages
RUN apt-get update && apt-get install -y --no-install-recommends \
    htop \
    wget \
    lynx \
    curl \
    tree \
    mc \
    vim \
    libmcrypt-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev \
    mariadb-client \
    unzip \
    libonig-dev \
    git \
    locales \
    tzdata \
    graphicsmagick \
    imagemagick \
    libmagickwand-dev\
    libzip-dev \
    zip \
    git

# locales
RUN printf 'en_GB.UTF-8 UTF-8\n' >> /etc/locale.gen \
    && printf 'en_US.UTF-8 UTF-8\n' >> /etc/locale.gen \
    && printf 'de_DE.UTF-8 UTF-8\n' >> /etc/locale.gen \
    && locale-gen

ENV LANGUAGE=de_DE.UTF-8
ENV LC_ALL=de_DE.UTF-8
ENV LC_CTYPE=UTF-8
ENV LANG=de_DE.UTF-8

# localtime
ENV TZ='Europe/Berlin'
RUN echo $TZ > /etc/timezone \
    && rm /etc/localtime \
    && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
    && dpkg-reconfigure -f noninteractive tzdata

# php modules
RUN docker-php-ext-install -j$(nproc) \
    mysqli \
    pdo \
    pdo_mysql \
    iconv \
    intl \
    opcache \
    xml \
    soap \
    opcache \
    zip \
    exif \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd

# php pecl modules
RUN pecl install xdebug-2.9.2 imagick \
    && docker-php-ext-enable xdebug imagick

# php composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# apache modules
RUN a2enmod rewrite

# apache rights
RUN usermod -o -u 1000 www-data

# cleanup
RUN apt-get clean \
    && rm -fr /var/lib/apt/lists/* \
    && rm -fr /tmp/* \
    && rm -fr /var/tmp/*