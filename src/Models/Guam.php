<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Guam extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GU';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GUM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '316';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GQ';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-671';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-671';

    /**
     * Capital city
     */
    public string $capital = 'Hagatna';

    /**
     * Total area in square kilometers
     */
    public string $area = '549.0';

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
    public string $continent = 'OC';

    /**
     * English name of the country
     */
    public string $en = 'Guam';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Guam';

    /**
     * German name of the country
     */
    public string $de = 'Guam';

    /**
     * Spanish name of the country
     */
    public string $es = 'Guam';

    /**
     * Italian name of the country
     */
    public string $it = 'Guam';

    /**
     * French name of the country
     */
    public string $fr = 'Guam';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Guam';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Guam';

    /**
     * Danish name of the country
     */
    public string $da = 'Guam';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Guam';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Guam';

    /**
     * Polish name of the country
     */
    public string $pl = 'Guam';

    /**
     * Czech name of the country
     */
    public string $cs = 'Guam';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Guam';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Guam';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Guam';
}
