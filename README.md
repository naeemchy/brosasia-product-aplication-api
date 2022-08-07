## brosasia-product-aplication-api
By, Md Naeem Uddin
Software Engineer

## Development environment setup
Used [Laravel](https://laravel.com/docs/9.x) for local development.

## About Project(brosasia-product-aplication-api)
Here, I Made products search and pagination api by laravel.

## Tools(Laravel-blog)
- HTML
- CSS
- PHP
- Laravel Framework
- MySQL database etc.

#### For a fresh installation of the project: 
- Clone this project:
    `git clone https://github.com/naeemchy/brosasia-product-aplication-api.git`

- Move inside:
    `cd brosasia-product-aplication-api`

- Copy the `.env` by running this command:
    `cp .env.example .env`

- Install composer dependencies:
    `composer install`
    
- Create an App key by running this command (if you didn't do it already):
    `php artisan key:generate`
    
- Then, run:
    `php artisan serve`

The project can now be browsed from here: http://127.0.0.1:8000/

## Database Migration and Seed:
Run following command to prepare the Database:
    `php artisan migrate:fresh --seed`