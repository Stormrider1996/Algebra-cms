<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to run this laravel app

1. Set up a database for this project in phpmyadmin
2. In the .env file change the values to your credentials and the name of the database you've created
3. Run npm install && npm run dev for all of the js files in the project (make sure you are in the correct directory)
4. run php artisan migrate to migrate all the data to the database 
5. run php artisan serve 

If everything was settup correctly you should be getting an error "Attempt to read property "title" on null" because a homepage does not exist, an admin has the ability to create a homepage of his choosing.

1. In order to fix this go to the register route http://127.0.0.1:8000/register and make an account which will by default be user
2. In your database rename the role of the account to admin 
3. Since that account now has access to all the apps routes, go to http://127.0.0.1:8000/pages and create your own homepage and 404 not found page in order to remove the formentioned errors.
