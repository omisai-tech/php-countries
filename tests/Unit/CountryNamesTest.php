<?php

use Omisai\Countries\Collection;

function localizedCountryNames(Collection $collection, string $locale): array
{
    $names = [];

    foreach ($collection->getCountries() as $country) {
        $names[$country->alpha2] = $country->{$locale};
    }

    return $names;
}

it('uses toponyms instead of common-noun translations', function (string $alpha2, string $locale, string $expected) {
    $country = (new Collection)->getCountryByAlpha2($alpha2);

    expect($country)->not->toBeNull()
        ->and($country->{$locale})->toBe($expected);
})->with([
    ['CN', 'es', 'China'],
    ['TR', 'es', 'Turquía'],
    ['TR', 'de', 'Türkei'],
    ['TR', 'it', 'Turchia'],
    ['TR', 'pt', 'Turquia'],
    ['TR', 'nl', 'Turkije'],
    ['TR', 'da', 'Tyrkiet'],
    ['TR', 'no', 'Tyrkia'],
    ['TR', 'pl', 'Turcja'],
    ['IM', 'es', 'Isla de Man'],
    ['SX', 'es', 'Sint Maarten'],
    ['MF', 'es', 'San Martín'],
    ['AX', 'de', 'Ålandinseln'],
    ['AX', 'es', 'Islas Åland'],
    ['AX', 'it', 'Isole Åland'],
    ['AX', 'fr', 'Îles Åland'],
    ['AX', 'pt', 'Ilhas Åland'],
    ['JE', 'it', 'Jersey'],
    ['JE', 'pl', 'Jersey'],
    ['JE', 'cs', 'Jersey'],
    ['JE', 'hr', 'Jersey'],
    ['RE', 'de', 'Réunion'],
    ['RE', 'da', 'Réunion'],
    ['RE', 'sv', 'Réunion'],
    ['RE', 'no', 'Réunion'],
    ['RE', 'pl', 'Reunion'],
    ['RE', 'cs', 'Réunion'],
    ['DM', 'es', 'Dominica'],
    ['JO', 'es', 'Jordania'],
    ['JO', 'fr', 'Jordanie'],
    ['JO', 'cs', 'Jordánsko'],
]);

it('keeps Saint Martin and Sint Maarten distinguishable in every locale', function () {
    $collection = new Collection;
    $saintMartin = $collection->getCountryByAlpha2('MF');
    $sintMaarten = $collection->getCountryByAlpha2('SX');
    $locales = ['en', 'hu', 'de', 'es', 'it', 'fr', 'pt', 'nl', 'da', 'sv', 'no', 'pl', 'cs', 'sk', 'sl', 'hr'];

    foreach ($locales as $locale) {
        expect(mb_strtolower($sintMaarten->{$locale}))
            ->not->toBe(mb_strtolower($saintMartin->{$locale}), "MF and SX collide in [{$locale}]");
    }
});

it('does not collide Turkey with Peru in Portuguese', function () {
    $collection = new Collection;
    $turkey = $collection->getCountryByAlpha2('TR');
    $peru = $collection->getCountryByAlpha2('PE');

    expect($turkey->pt)->not->toBe($peru->pt)
        ->and($turkey->pt)->toBe('Turquia')
        ->and($peru->pt)->toBe('Peru');
});

it('does not repeat a localized name within a locale', function (string $locale) {
    $names = localizedCountryNames(new Collection, $locale);
    $duplicates = array_filter(array_count_values($names), fn (int $count) => $count > 1);

    expect($duplicates)->toBe(
        [],
        "Duplicate country names in [{$locale}]: ".json_encode($duplicates, JSON_UNESCAPED_UNICODE)
    );
})->with(['en', 'hu', 'de', 'es', 'it', 'fr', 'pt', 'nl', 'da', 'sv', 'no', 'pl', 'cs', 'sk', 'sl', 'hr']);

it('exposes unique Spanish names through the collection API', function () {
    $names = (new Collection)->getCountriesName('es');
    $duplicates = array_filter(array_count_values($names), fn (int $count) => $count > 1);

    expect($names['CN'])->toBe('China')
        ->and($names['TR'])->toBe('Turquía')
        ->and($names['IM'])->toBe('Isla de Man')
        ->and($names['SX'])->not->toBe($names['MF'])
        ->and($duplicates)->toBe([]);
});
