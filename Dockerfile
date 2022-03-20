

FROM php:8.1-fpm
LABEL maintainer="Miro Rauhala"
ENV TZ=UTC
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

COPY . /var/www/html


EXPOSE 8000
