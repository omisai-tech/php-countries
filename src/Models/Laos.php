<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Laos extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'LA';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'LAO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '418';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'LA';

    /**
     * Telephone country code
     */
    public string $callingCode = '856';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '856';

    /**
     * Capital city
     */
    public string $capital = 'Vientiane';

    /**
     * Total area in square kilometers
     */
    public string $area = '236,800.0';

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
    public string $continent = 'AS';

    /**
     * English name of the country
     */
    public string $en = 'Laos';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Laosz';

    /**
     * German name of the country
     */
    public string $de = 'Laos';

    /**
     * Spanish name of the country
     */
    public string $es = 'Laos';

    /**
     * Italian name of the country
     */
    public string $it = 'Laos';

    /**
     * French name of the country
     */
    public string $fr = 'Laos';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Laos';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Laos';

    /**
     * Danish name of the country
     */
    public string $da = 'Laos';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Laos';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Laos';

    /**
     * Polish name of the country
     */
    public string $pl = 'Laos';

    /**
     * Czech name of the country
     */
    public string $cs = 'Laos';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Laos';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Laos';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Laos';
}
