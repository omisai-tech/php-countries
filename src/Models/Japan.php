<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Japan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'JP';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'JPN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '392';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'JA';

    /**
     * Telephone country code
     */
    public string $callingCode = '81';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '81';

    /**
     * Capital city
     */
    public string $capital = 'Tokyo';

    /**
     * Total area in square kilometers
     */
    public string $area = '377,835.0';

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
    public string $en = 'Japan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Japán';

    /**
     * German name of the country
     */
    public string $de = 'Japan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Japón';

    /**
     * Italian name of the country
     */
    public string $it = 'Giappone';

    /**
     * French name of the country
     */
    public string $fr = 'Japon';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Japão';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Japan';

    /**
     * Danish name of the country
     */
    public string $da = 'Japan';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Japan';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Japan';

    /**
     * Polish name of the country
     */
    public string $pl = 'Japonia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Japonsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Japonsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Japonska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Japan';
}
