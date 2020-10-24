FROM php:7.3-cli-alpine
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN mkdir /app
COPY . /app
WORKDIR /app

RUN apk add --no-cache bash coreutils grep sed
RUN composer install
