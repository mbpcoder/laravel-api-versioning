# API Versioning for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mbpcoder/laravel-api-versioning.svg?style=flat-square)](https://packagist.org/packages/mbpcoder/laravel-api-versioning)
[![Total Downloads](https://img.shields.io/packagist/dt/mbpcoder/laravel-api-versioning.svg?style=flat-square)](https://packagist.org/packages/mbpcoder/laravel-api-versioning)

This is a very simple package to support API versioning in Laravel 8,7,6,5. this package provide fallback API capability for Laravel.

## Features
* If you have one API version it will automatically disable
* You can disable package in config files
* You can add countless API Versions in config file
* Does not affect routes except API

## Let's Code!
If you call for /{version_number}/version every API have it is own route.
If you call for /v2.1/hello-world it will try to call v2.1 and if it does not find a route will search v2
then if the version 2 also does not have the routes it will fallback to v1
``` php

// laravel route file
Route::prefix('v2.1')->group(function () {
    Route::get('version', function () {
        return 'API v2.1';
    });
});

Route::prefix('v2')->group(function () {
    Route::get('version', function () {
        return 'API v2';
    });
});

Route::prefix('v1')->group(function () {
    Route::get('version', function () {
        return 'API v1';
    });

    Route::get('hello-world', function () {
        return 'Hello World!';
    });
});

```

## Installation

You can install the package via composer:

```bash
composer require mbpcoder/laravel-api-versioning
```

## Usage

Publish config file

``` php
php artisan vendor:publish --provider="MbpCoder\ApiVersioning\ApiVersioningServiceProvider"
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Mahdi Bagheri](https://github.com/mbpcoder)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
