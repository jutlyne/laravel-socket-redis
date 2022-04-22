<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installing Composer Dependencies For Existing Applications
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs

## Create a file .env
cp .env.example .env

## Run sail
./vendor/bin/sail up -d

## Access to container laravel sail
./vendor/bin/sail shell
## Run composer
sail@137b38de6c4b:/var/www/html$ composer install

## Run sql
sail@137b38de6c4b:/var/www/html$ php artisan migrate

## Run npm
sail@137b38de6c4b:/var/www/html$ npm install sail@137b38de6c4b:/var/www/html$ npm run dev

## Go to localhost::{APP_PORT}
APP_PORT is a param at .env (8800)
