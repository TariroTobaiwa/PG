## Running this app

This app uses Laravel 8 which is a web application framework with expressive, elegant syntax. Here are some prerequistes get it running:

- MySQL.
- PHP > 7.0,
- Composer,
- NPM.

## Setting up

Just follow this process to get it working in your environment.

+ **After cloning this repo, create a .env file in the project root directory using the .env.example as a template**
+ **Install dependancies using Composer and NPM**
    - composer install
    - npm install
+ **Setup application environment**
    - Create a new user and database and update the new .env 
    - php artisan key:generate
    - php artisan migrate
+ **Using two separate Terminal clients, execute the following :**
    - **php artisan serve**
    - **npm run dev**

## License

This codebase is open-source, use it however you please.
