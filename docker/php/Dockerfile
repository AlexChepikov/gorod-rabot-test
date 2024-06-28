FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

RUN apk --update add wget \
    curl \
    build-base \
    libmemcached-dev \
    libmcrypt-dev \
    libxml2-dev \
    pcre-dev \
    zlib-dev \
    autoconf \
    cyrus-sasl-dev \
    libgsasl-dev \
    oniguruma-dev \
    openssl \
    openssl-dev \
    mysql-dev \
    nodejs \
    npm \
    busybox-suid \
    less

RUN docker-php-ext-install pdo_mysql pcntl dom

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN rm /var/cache/apk/*

RUN mkdir /.config  \
    && mkdir /.config/psysh  \
    && chmod 777 -R /.config/psysh \
    && mkdir "/.npm"  \
    && chown -R 1000:1000 "/.npm"
