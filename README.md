# Laravel Rules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zhanang19/laravel-rules.svg?style=flat-square)](https://packagist.org/packages/zhanang19/laravel-rules)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zhanang19/laravel-rules/run-tests?label=tests)](https://github.com/zhanang19/laravel-rules/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/zhanang19/laravel-rules.svg?style=flat-square)](https://packagist.org/packages/zhanang19/laravel-rules)

This package provides a library of reusable validation rules for your Laravel projects.

## Installation

You can install the package via composer:

```bash
composer require zhanang19/laravel-rules
```

## Usage

```php
use Zhanang19\LaravelRules\Rules\LinkedinUrl;

$request->validate([
    'linkedin_url' => ['required', 'string', new LinkedinUrl],
]);
```

You can use all available rule directly as Rule object. See https://laravel.com/docs/8.x/validation#using-rule-objects

> You must specify the validation rules as an array instead of using the `|` character to delimit your validation rules

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

- [Zainal Hasan](https://github.com/zhanang19)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
