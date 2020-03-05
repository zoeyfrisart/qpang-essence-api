## Installation

Make sure you have PHP ^7, composer & MySQL installed.

* Clone this repo
* Run `composer install`
* Create the `.env` file, fill these in with the correct credentials.
* Run `php artisan key:generate`
* Run `php artisan migrate`
* Run `php artisan db:seed`

Now you're good to go. Perhaps you want to run the following command: `php artisan serve` to create a quick, small easy webserver to test your stuff.

## Testing

Testing required `PHPUnit` to be installed. Please make sure your database isn't seeded before testing. You can use a testing database.

## Contributing

If you want to contribute, feel free to fork this project and create as many PR's as you want. :)

