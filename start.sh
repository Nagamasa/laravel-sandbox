#!/bin/sh

composer install

npm install

# PHP-FPMをバックグラウンドで起動
php-fpm &

# npm run devを実行
npm run dev