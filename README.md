# Simple Change FilamentAdmin Login Page Screen

[![Latest Version on Packagist](https://img.shields.io/packagist/v/solutionforest/filamentloginscreen.svg?style=flat-square)](https://packagist.org/packages/solutionforest/filamentloginscreen)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/solutionforest/filamentloginscreen/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/solutionforest/filamentloginscreen/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/solutionforest/filamentloginscreen/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/solutionforest/filamentloginscreen/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/solutionforest/filamentloginscreen.svg?style=flat-square)](https://packagist.org/packages/solutionforest/filamentloginscreen)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require solutionforest/filamentloginscreen
```

## Usage

In Admin Panel

```php
use Solutionforest\FilamentLoginScreen\Filament\Pages\Auth\Themes\Theme1\LoginScreenPage as LoginScreenPage; // See which login theme you want to use

return $panel->login(LoginScreenPage::class) 
```

## Testing

```bash
composer test
```

## Screenshots

Theme 1
<img width="1400" alt="image" src="https://github.com/solutionforest/FilamentLoginScreen/assets/68211972/a64f5333-bdaa-438b-99dd-363162f4880f">

Theme 2
<img width="1395" alt="image" src="https://github.com/solutionforest/FilamentLoginScreen/assets/68211972/b51ad589-e4f3-411a-b7f3-499139da19eb">

Theme 3
<img width="1380" alt="image" src="https://github.com/solutionforest/FilamentLoginScreen/assets/68211972/78ec4072-118d-4a27-a19a-49fec63936be">


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [alan](https://github.com/solutionforest)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
