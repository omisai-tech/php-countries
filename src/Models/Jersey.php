<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Jersey extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'JE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'JEY';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '832';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'JE';

    /**
     * Telephone country code
     */
    public string $callingCode = '44';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '44';

    /**
     * Capital city
     */
    public string $capital = 'Saint Helier';

    /**
     * Total area in square kilometers
     */
    public string $area = '116.0';

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
    public string $continent = 'EU';

    /**
     * English name of the country
     */
    public string $en = 'Jersey';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Jersey';

    /**
     * German name of the country
     */
    public string $de = 'Jersey';

    /**
     * Spanish name of the country
     */
    public string $es = 'Jersey';

    /**
     * Italian name of the country
     */
    public string $it = 'Maglia';

    /**
     * French name of the country
     */
    public string $fr = 'Jersey';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Jersey';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Jersey';

    /**
     * Danish name of the country
     */
    public string $da = 'Jersey';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Jersey';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Jersey';

    /**
     * Polish name of the country
     */
    public string $pl = 'Golf';

    /**
     * Czech name of the country
     */
    public string $cs = 'Trikot';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Jersey';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Jersey';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Dres';
}
