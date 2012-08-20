#! /bin/bash

clear
php artisan migrate:rollback
php artisan migrate
php artisan add_students:seed