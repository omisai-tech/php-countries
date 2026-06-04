<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Uruguay extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'UY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'URY';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '858';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'UY';

    /**
     * Telephone country code
     */
    public string $callingCode = '598';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '598';

    /**
     * Capital city
     */
    public string $capital = 'Montevideo';

    /**
     * Total area in square kilometers
     */
    public string $area = '176,220.0';

    /**
     * Continent
     *
     * AF: Africa
     * AN: Antarctica
     * AS: Asia
     * EU: Europe
     * NA: North America
     * OC: Oceania
     * SA: South America
     */
    public string $continent = 'SA';

    /**
     * English name of the country
     */
    public string $en = 'Uruguay';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Uruguay';

    /**
     * German name of the country
     */
    public string $de = 'Uruguay';

    /**
     * Spanish name of the country
     */
    public string $es = 'Uruguay';

    /**
     * Italian name of the country
     */
    public string $it = 'Uruguay';

    /**
     * French name of the country
     */
    public string $fr = 'Uruguay';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Uruguai';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Uruguay';

    /**
     * Danish name of the country
     */
    public string $da = 'Uruguay';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Uruguay';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Uruguay';

    /**
     * Polish name of the country
     */
    public string $pl = 'Urugwaj';

    /**
     * Czech name of the country
     */
    public string $cs = 'Uruguay';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Uruguaj';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Urugvaj';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Urugvaj';
}
