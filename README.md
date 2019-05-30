# Essence site

This is the source code for the https://qpang.io website. In here, you can find the database structure, which is also being used for the game.

It's not completely finished, but we're trying to sync the `master` branch with the webserver.

## Installation

Make sure you have PHP ^7, composer & MySQL installed.

* Clone this repo
* Run `composer install`
* Create the `.env` file, fill these in with the correct credentials.
* Run `php artisan key:generate`
* Run `php artisan migrate`
* Run `php artisan db:seed`

Now you're good to go. Perhaps you want to run the following command: `php artisan serve` to create a quick, small easy webserver to test your stuff.

## Contributing

If you want to contribute, feel free to fork this project and create as many PR's as you want. :)

