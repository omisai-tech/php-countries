<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Chile extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CL';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CHL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '152';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CI';

    /**
     * Telephone country code
     */
    public string $callingCode = '56';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '56';

    /**
     * Capital city
     */
    public string $capital = 'Santiago';

    /**
     * Total area in square kilometers
     */
    public string $area = '756,950.0';

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
    public string $en = 'Chile';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Chile';

    /**
     * German name of the country
     */
    public string $de = 'Chile';

    /**
     * Spanish name of the country
     */
    public string $es = 'Chile';

    /**
     * Italian name of the country
     */
    public string $it = 'Chile';

    /**
     * French name of the country
     */
    public string $fr = 'Chili';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Chile';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Chile';

    /**
     * Danish name of the country
     */
    public string $da = 'Chile';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Chile';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Chile';

    /**
     * Polish name of the country
     */
    public string $pl = 'Chile';

    /**
     * Czech name of the country
     */
    public string $cs = 'Chile';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Čile';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Čile';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Čile';
}
