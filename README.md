# Laravel fluent translations

[![Latest Version on Packagist](https://img.shields.io/packagist/v/maartenpaauw/laravel-fluent-translations.svg?style=flat-square)](https://packagist.org/packages/maartenpaauw/laravel-fluent-translations)
[![Tests](https://github.com/maartenpaauw/laravel-fluent-translations/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/maartenpaauw/laravel-fluent-translations/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/maartenpaauw/laravel-fluent-translations.svg?style=flat-square)](https://packagist.org/packages/maartenpaauw/laravel-fluent-translations)

This package will help you to create fluent translation messages

## Installation

You can install the package via composer:

```bash
composer require maartenpaauw/laravel-fluent-translations
```

## Usage

```php
use Maartenpaauw\Translation\Translation;

return [
    'apples' => Translation::singular('There is one apple')
        ->plural('There are many apples')
        ->toString(),
        
    'oranges' => Translation::exact(0, 'There are none')
        ->range(1, 19, 'There are some')
        ->from(20, 'There are many')
        ->toString(),
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Maarten Paauw](https://github.com/maartenpaauw)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
