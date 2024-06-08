<?php

use Omisai\Countries\Country;
use Omisai\Countries\Models\Hungary;
use Omisai\Countries\Models\Germany;

it('can get the name in English', function () {
    $country = new Hungary();

    expect($country->getName('en'))->toBe('Hungary');
});

it('can get the name in Hungarian', function () {
    $country = new Hungary();

    expect($country->getName('de'))->toBe('Ungarn');
});

it('throws an exception for invalid locale', function () {
    $country = new Hungary();
    $country->getName('invalid');
})->throws(\InvalidArgumentException::class);

it('can get the alpha2 code', function () {
    $country = new Germany();

    expect($country->alpha2)->toBe('DE');
});

it('can get the alpha3 code', function () {
    $country = new Germany();

    expect($country->alpha3)->toBe('DEU');
});

it('can get the numeric code', function () {
    $country = new Germany();

    expect($country->numeric)->toBe('276');
});

it('can get the FIPS code', function () {
    $country = new Germany();

    expect($country->fipCode)->toBe('GM');
});

it('can get the phone dial', function () {
    $country = new Hungary();

    expect($country->dial)->toBe('36');
});

it('can get the capital city', function () {
    $country = new Hungary();

    expect($country->capital)->toBe('Budapest');
});

it('can get the continent', function () {
    $country = new Hungary();

    expect($country->continent)->toBe('EU');
});

it('can get the English name of the country', function () {
    $country = new Germany();

    expect($country->en)->toBe('Germany');
});

it('can get the Hungarian name of the country', function () {
    $country = new Germany();

    expect($country->hu)->toBe('Németország');
});

it('can get the German name of the country', function () {
    $country = new Germany();

    expect($country->de)->toBe('Deutschland');
});

it('can get the Spanish name of the country', function () {
    $country = new Germany();

    expect($country->es)->toBe('Alemania');
});

it('can get the Italian name of the country', function () {
    $country = new Germany();

    expect($country->it)->toBe('Germania');
});

it('can get the French name of the country', function () {
    $country = new Germany();

    expect($country->fr)->toBe('Allemagne');
});
