<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Cuba extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CU';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CUB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '192';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CU';

    /**
     * Telephone country code
     */
    public string $callingCode = '53';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '53';

    /**
     * Capital city
     */
    public string $capital = 'Havana';

    /**
     * Total area in square kilometers
     */
    public string $area = '110,860.0';

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
    public string $continent = 'NA';

    /**
     * English name of the country
     */
    public string $en = 'Cuba';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kuba';

    /**
     * German name of the country
     */
    public string $de = 'Kuba';

    /**
     * Spanish name of the country
     */
    public string $es = 'Cuba';

    /**
     * Italian name of the country
     */
    public string $it = 'Cuba';

    /**
     * French name of the country
     */
    public string $fr = 'Cuba';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Cuba';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Cuba';

    /**
     * Danish name of the country
     */
    public string $da = 'Cuba';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Kuba';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Cuba';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kuba';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kuba';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kuba';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kuba';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kuba';
}
