<?php

use Omisai\Countries\Collection;
use Omisai\Countries\Country;

it('loads countries on construction', function () {
    $collection = new Collection();
    $countries = $collection->getCountries();

    expect($countries)->toBeArray();
    expect($countries)->toHaveCount(250);
    foreach ($countries as $country) {
        expect($country)->toBeInstanceOf(Country::class);
    }
});

it('returns country by alpha2', function () {
    $collection = new Collection();
    $country = $collection->getCountryByAlpha2('US');

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->alpha2)->toBe('US');
});

it('returns null when country by alpha2 is not found', function () {
    $collection = new Collection();
    $country = $collection->getCountryByAlpha2('ZZ');

    expect($country)->toBeNull();
});

it('returns country by alpha3', function () {
    $collection = new Collection();
    $country = $collection->getCountryByAlpha3('USA');

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->alpha3)->toBe('USA');
});

it('returns null when country by alpha3 is not found', function () {
    $collection = new Collection();
    $country = $collection->getCountryByAlpha3('ZZZ');

    expect($country)->toBeNull();
});

it('returns country by numeric', function () {
    $collection = new Collection();
    $country = $collection->getCountryByNumeric('840');

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->numeric)->toBe('840');
});

it('returns null when country by numeric is not found', function () {
    $collection = new Collection();
    $country = $collection->getCountryByNumeric('999');

    expect($country)->toBeNull();
});

it('returns country by FIPS code', function () {
    $collection = new Collection();
    $country = $collection->getCountryByFipCode('US');

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->fipCode)->toBe('US');
});

it('returns null when country by FIPS code is not found', function () {
    $collection = new Collection();
    $country = $collection->getCountryByFipCode('ZZ');

    expect($country)->toBeNull();
});

it('returns country by capital', function () {
    $collection = new Collection();
    $country = $collection->getCountryByCapital('Budapest');

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->capital)->toBe('Budapest');
});

it('returns null when country by capital is not found', function () {
    $collection = new Collection();
    $country = $collection->getCountryByCapital('ZZZ');

    expect($country)->toBeNull();
});

it('returns countries by continent', function () {
    $collection = new Collection();
    $countries = $collection->getCountriesByContinent('NA');

    expect($countries)->toBeArray();
    expect($countries)->not->toBeEmpty();
    foreach ($countries as $country) {
        expect($country)->toBeInstanceOf(Country::class);
        expect($country->continent)->toBe('NA');
    }
});

it('throws an exception for invalid continent code', function () {
    $collection = new Collection();
    $collection->getCountriesByContinent('XX');
})->throws(\InvalidArgumentException::class);

it('returns country by name', function () {
    $collection = new Collection();
    $country = $collection->getCountryByName('United States');

    expect($country)->toBeInstanceOf(Country::class);
    expect($country->en)->toBe('United States');
});

it('returns null when country by name is not found', function () {
    $collection = new Collection();
    $country = $collection->getCountryByName('Unknown Country');

    expect($country)->toBeNull();
});

it('returns countries with alpha2 codes', function () {
    $collection = new Collection();
    $countries = $collection->getCountriesAlpha2();

    expect($countries)->toBeArray();
    expect($countries)->not->toBeEmpty();
    foreach ($countries as $name => $alpha2) {
        expect($name)->toBeString();
        expect($alpha2)->toBeString();
    }
});

it('returns countries with alpha3 codes', function () {
    $collection = new Collection();
    $countries = $collection->getCountriesAlpha3();

    expect($countries)->toBeArray();
    expect($countries)->not->toBeEmpty();
    foreach ($countries as $name => $alpha3) {
        expect($name)->toBeString();
        expect($alpha3)->toBeString();
    }
});

it('returns countries with numeric codes', function () {
    $collection = new Collection();
    $countries = $collection->getCountriesNumeric();

    expect($countries)->toBeArray();
    expect($countries)->not->toBeEmpty();
    foreach ($countries as $name => $numeric) {
        expect($name)->toBeString();
        expect($numeric)->toBeString();
    }
});

it('returns countries with FIPS codes', function () {
    $collection = new Collection();
    $countries = $collection->getCountriesFipCode();

    expect($countries)->toBeArray();
    expect($countries)->not->toBeEmpty();
    foreach ($countries as $name => $fipCode) {
        expect($name)->toBeString();
        expect($fipCode)->toBeString();
    }
});

it('throws an exception for invalid locale', function () {
    $collection = new Collection();
    $collection->validateLocale('xx');
})->throws(\InvalidArgumentException::class);
