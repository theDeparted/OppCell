#! /bin/bash
cd /home/gps/web/laravel-project/
php artisan migrate:reset
php artisan migrate
php artisan add_students:seed