# PHP wrapper around Confetti API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/karabin/laravel-confetti.svg?style=flat-square)](https://packagist.org/packages/karabin/laravel-confetti)
<!-- [![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/karabin/laravel-confetti/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/karabin/laravel-confetti/actions?query=workflow%3Arun-tests+branch%3Amain) -->
<!-- [![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/karabin/laravel-confetti/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/karabin/laravel-confetti/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain) -->
[![Total Downloads](https://img.shields.io/packagist/dt/karabin/laravel-confetti.svg?style=flat-square)](https://packagist.org/packages/karabin/laravel-confetti)

Basic API wrapper for [Confetti](https://confetti.events/) events api

## Installation

You can install the package via composer:

```bash
composer require karabin/laravel-confetti
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-confetti-config"
```

This is the contents of the published config file:

```php
return [
    'token' => env('CONFETTI_API_KEY', ''),
];
```

## Usage

Get all events
```php
use Karabin\Confetti\Facades\Confetti;

$params = [
    'filter[signupType]' => 'rsvp',
    'filter[type]' => 'future',
    'page[size]' => 10,
    'page[number]' => $request->input('page', 1),
    'include' => 'categories,pages,pages.blocks,pages.blocks.images,images.image',
];
$events = Confetti::getEvents($params);
```

Get open events
```php
use Karabin\Confetti\Facades\Confetti;

$params = [
    'filter[signupType]' => 'rsvp',
    'filter[type]' => 'future',
    'page[size]' => 10,
    'page[number]' => $request->input('page', 1),
    'include' => 'categories,pages,pages.blocks,pages.blocks.images,images.image',
];
$events = Confetti::getOpenEvents($params);
```

Get single event
```php
use Karabin\Confetti\Facades\Confetti;

$params = [
    'include' => 'categories,pages,pages.blocks,pages.blocks.images,images.image',
];
$event = Confetti::getEvent($id, $params);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Albin J Nilsson](https://github.com/KarabinSE)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
