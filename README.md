# Tutorial Laravel 9 - Restaurant Reservation Website

https://www.youtube.com/watch?v=8KaBeq9JzrQ

## Concepts seen in the tutorial 
* PHP
* Laravel
* Composer
* Tailwind CSS

## Notes and differences with respect to the tutorial
* I used Docker.
* Use spatie/laravel-permission instead of a boolean (is_admin) to determine the user's role.
* The admin middleware it was replaced by middleware of spatie/laravel-permission.
* I added more validations on forms.
* It is assumed that a table is occupied between 1 and 2 hours.
* The app is prepared to work in English or Spanish.
* I added the links for sorting in the lists.
* The app has light theme and dark theme.
* I added pagination.
* I added the Fontawesome icons.
* The location of tables was changed to a new model (the locations of tables changes for each restaurant).

# App
Restaurant Reservation Website

# Composer packages used
* laravel/breeze
* spatie/laravel-permission
* kyslik/column-sortable
* bensampo/laravel-enum

# Deployment

First you have to download the repository 

    git clone https://github.com/demiancy/tutorial-laravel-2.git

Setting environment variables for Laravel in app/.env file, you can use app/.env.example file as an example. 

Use composer for install dependencies

    docker-compose run app composer install

You must prepare your database (which must be previously created and emptied), for this you must first run the migrations and then load the test data: 

    docker-compose run app php artisan migrate:fresh
    docker-compose run app php artisan db:seed

With the next command you start the app in the port 3000 and phpmyadmin in port 80

    docker-compose up

In case of not have Docker, you can run the app into your server.

# Screenshots