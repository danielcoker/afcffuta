## Apostolic Faith Campus Fellowship

Website for the Apostolic Faith Campus Fellowship, FUTA.

### Steps to setup this repo locally

1. Clone repo by running command `git clone https://github.com/danielcoker/afcffuta.git`
2. cd into directory.
3. Run `composer install` command. This will install all the project dependencies, including Laravel and Passport.
4. Create a copy of .env file. `cp .env.example .env`
5. Generate app key. `php artisan key:generate`
6. Create and empty database `cipefy` and ad database information to .env file.
7. Run `php artisan migrate` to migrate database.
8. Run `php artisan serve` to start up the development server.