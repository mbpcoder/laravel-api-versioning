# API Versioning for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mbpcoder/api-versioning.svg?style=flat-square)](https://packagist.org/packages/mbpcoder/api-versioning)
[![Build Status](https://img.shields.io/travis/mbpcoder/api-versioning/master.svg?style=flat-square)](https://travis-ci.org/mbpcoder/api-versioning)
[![Quality Score](https://img.shields.io/scrutinizer/g/mbpcoder/api-versioning.svg?style=flat-square)](https://scrutinizer-ci.com/g/mbpcoder/api-versioning)
[![Total Downloads](https://img.shields.io/packagist/dt/mbpcoder/api-versioning.svg?style=flat-square)](https://packagist.org/packages/mbpcoder/api-versioning)

this is a very simple package to support API versioning in Laravel 7.

## Installation

You can install the package via composer:

```bash
composer require mbpcoder/api-versioning
```

## Usage

Publish config file

``` php
php artisan vendor:publish --provider="MbpCoder\ApiVersioning\ApiVersioningServiceProvider"
```

### Testing

``` bash
composer test
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
