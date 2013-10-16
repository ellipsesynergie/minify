# Minify

This package contain some command to minify css and javascript. This currently work only with Laravel 4.

### Status

[![Build Status](https://travis-ci.org/ellipsesynergie/laravel-command.png?branch=master)](https://travis-ci.org/ellipsesynergie/laravel-command)
[![Total Downloads](https://poser.pugx.org/ellipsesynergie/laravel-command/downloads.png)](https://packagist.org/packages/ellipsesynergie/laravel-command)
[![Latest Stable Version](https://poser.pugx.org/ellipsesynergie/laravel-command/v/stable.png)](https://packagist.org/packages/ellipsesynergie/laravel-command)

## Documentation

##Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `ellipsesynergie/laravel-command`.

```javascript
{
    "require": {
        "ellipsesynergie/laravel-command": "dev-master"
    }
}
```

Update your packages with `composer update` or install with `composer install`.

Once this operation completes, you need to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

```php
EllipseSynergie\LaravelCommand\LaravelCommandServiceProvider
```

##Configurations

To configure the package to meet your needs, you must publish the configuration in your application before you can modify them. Run this artisan command.

```bash
php artisan config:publish ellipsesynergie/laravel-command
```

##Available commands

Minify and packing CSS.
`php artisan ellipse:minifycss`

Minify and packing Javascript. (Required uglifyjs to work)
`php artisan ellipse:minifyjs`
