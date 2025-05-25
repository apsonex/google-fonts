# apsonex/google-fonts

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apsonex/google-fonts.svg?style=flat-square)](https://packagist.org/packages/apsonex/google-fonts)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/apsonex/google-fonts/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/apsonex/google-fonts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/apsonex/google-fonts/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/apsonex/google-fonts/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/apsonex/google-fonts.svg?style=flat-square)](https://packagist.org/packages/apsonex/google-fonts)


## Installation

You can install the package via composer:

```bash
composer require apsonex/google-fonts

// ADD Google Fonts API Key to .env file
GOOGLE_FONTS_API_KEY=<api-key>
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="google-fonts-config"
```

## Usage

```php
\Apsonex\GoogleFonts\GoogleFonts::make()->all();
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

- [Gurinder Chauhan](https://github.com/apsonex)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

guzzlehttp/guzzle illuminate/contracts illuminate/http spatie/laravel-package-tools

composer require --dev nunomaduro/collision orchestra/testbench pestphp/pest pestphp/pest-plugin-faker pestphp/pest-plugin-laravel pestphp/pest-plugin-livewire pestphp/pest-plugin-mock phpunit/phpunit
