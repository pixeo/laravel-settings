# Laravel settings

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pixeo/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/pixeo/laravel-settings)
[![Build Status](https://img.shields.io/travis/pixeo/laravel-settings/master.svg?style=flat-square)](https://travis-ci.org/pixeo/laravel-settings)
[![Total Downloads](https://img.shields.io/packagist/dt/pixeo/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/pixeo/laravel-settings)

Persist you settings in the database

## Installation

You can install the package via composer:

```bash
composer require pixeo/laravel-settings
```

## Usage

``` php
\Pixeo\Settings\Setting::create(['key' => 'foo', 'value' => 'bar']);
echo setting('foo'); // => bar
```

### Testing

``` bash
composer test
```

## Credits

- [Pixeo](https://github.com/pixeo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
