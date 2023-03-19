# Laravel - Yegara SMS API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/takiwos/laravel-yegara-sms.svg?style=flat-square)](https://packagist.org/packages/takiwos/laravel-yegara-sms)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/takiwos/laravel-yegara-sms/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/takiwos/laravel-yegara-sms/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/takiwos/laravel-yegara-sms/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/takiwos/laravel-yegara-sms/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/takiwos/laravel-yegara-sms.svg?style=flat-square)](https://packagist.org/packages/takiwos/laravel-yegara-sms)

A robust and user-friendly Laravel package for seamless SMS integration. This SMS API gateway is provided for free by Yegara Host and can be found on the yegara.com website. With this package, you can effortlessly integrate SMS functionality into your Laravel application and start sending messages to your users with ease.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-yegara-sms.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-yegara-sms)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require takiwos/laravel-yegara-sms
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-yegara-sms-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-yegara-sms-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-yegara-sms-views"
```

## Usage

```php
$yegaraSms = new Takiwos\YegaraSms();
echo $yegaraSms->echoPhrase('Hello, Takiwos!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Micheal Ataklt](https://github.com/matakltm-code)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
