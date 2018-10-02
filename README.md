# Laravel settings

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pixeo/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/pixeo/laravel-settings)
[![Build Status](https://img.shields.io/travis/pixeo/laravel-settings/master.svg?style=flat-square)](https://travis-ci.org/pixeo/laravel-settings)
[![Total Downloads](https://img.shields.io/packagist/dt/pixeo/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/pixeo/laravel-settings)

Persist your settings in the database

## Installation

You can install the package via composer:

```bash
composer require pixeo/laravel-settings
```

The package will automatically register itself.

You can publish the config-file with:

php artisan vendor:publish --provider="Pixeo\Settings\SettingServiceProvider" --tag="config"

This is the contents of the published config file:

```php

<?php

return [
    /*
     * The model that is used to fetch the settings
     */
    'model' => Pixeo\Settings\Setting::class,

    /**
     * The cache key the package will use
     */
    'cache_key' => 'pixeo.settings',
];

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
