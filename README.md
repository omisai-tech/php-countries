[![License](https://img.shields.io/packagist/l/omisai/php-countries?style=for-the-badge)](https://packagist.org/packages/omisai/omisai/php-countries)
[![Latest Stable Version](https://img.shields.io/packagist/v/omisai/php-countries?style=for-the-badge)](https://packagist.org/packages/omisai/php-countries)
[![PHP Version Require](https://img.shields.io/packagist/dependency-v/omisai/php-countries/php?style=for-the-badge)](https://packagist.org/packages/omisai/php-countries)

# PHP Countries Package

The PHP Countries Package provides a convenient and object-oriented approach to working with country data. Designed to integrate country information into any PHP applications with ease. This package offers easy access to country names, ISO 3166-1 alpha-2 code, ISO 3166-1 alpha-3 code, ISO 3166-1 numeric code, FIPS code, phone dial, country's capital city, continent code.

## Features

- Easy retrieval of country names and codes, capital city and/or continent.
- Object-Oriented Programming (OOP) approach for better data management and integration.
- Lightweight and simple to integrate into any PHP project. (8.1+)
- Currently supporting English, Hungarian, German, Spanish, Italian, French and Portuguese languages.
- Future support for multiple locales, making it versatile for international applications.

## Installation

The PHP Countries Package can be easily installed via Composer.

```bash
composer require omisai/php-countries
```

## Usage

After installing the package, you can begin to work with any country data. You can work with country model directly or access all of them through a Collection class.

```php

/**
 * Access through the Collection
 *
 * Consider using the Collection class, if you
 * plan to register it to a service container.
 * It eagerly loads all the countries.
 */
use Omisai\Countries\Collection;

$collection = new Collection();
$countries = $collection->getCountries();

/**
 * Shorthand to use the default english locale
 */
$countries[4]->name; // "Finland"

/**
 * Or using different locale
 */
$countries[4]->getName('fr'); // "Finlande"

/**
 * Search for a specific country based on different criteria
 */
$collection->getCountryByAlpha2('FI'); // Omisai\Countries\Models\Finland
$collection->getCountryByAlpha3('FIN'); // Omisai\Countries\Models\Finland
$collection->getCountryByNumeric('246'); // Omisai\Countries\Models\Finland
$collection->getCountryByFipCode('FI'); // Omisai\Countries\Models\Finland
$collection->getCountryByDial('358'); // Omisai\Countries\Models\Finland
$collection->getCountryByCapital('Helsinki'); // Omisai\Countries\Models\Finland
$collection->getCountryByName('Finland'); // Omisai\Countries\Models\Finland
$collection->getCountryByName('Finlande', "fr"); // Omisai\Countries\Models\Finland

/**
 * Get only a part of data from the countries
 */
$collection->getCountriesAlpha2(); // ['country_name' => 'country_alpha2']
$collection->getCountriesAlpha3(); // ['country_name' => 'country_alpha3']
$collection->getCountriesNumeric(); // ['country_name' => 'country_numeric']
$collection->getCountriesFipCode(); // ['country_name' => 'country_fipCode']
$collection->getCountriesDial(); // ['country_name' => 'country_dial']

$collection->getCountriesAlpha2('fr'); // ['fr:country_name' => 'country_alpha2'] -> ['Finlande' => 'FI']

$collection->getCountriesByContinent('EU'); // [Omisai\Countries\Models\Finland, Omisai\Countries\Models\Hungary, ...]

/**
 * Use any country directly
 */
use Omisai\Countries\Models\Finland;

$europe = new Finland();
$europe->alpha2; // "FI"
$europe->alpha3; // "FIN"
$europe->numeric; // "246"
$europe->fipCode; // "FI"
$europe->dial; // "358"
$europe->capital; // "Helsinki"
$europe->continent; // "EU"
$europe->hu; // "Finnország"
$europe->name; // "Finland"
$europe->getName('it'); // "Finlandia"

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Testing

```bash
./vendor/bin/pest

# or

composer test
```


## Security

If you discover any security-related issues, please email [security@omisai.com](mailto:security@omisai.com) instead of using the issue tracker.


## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
