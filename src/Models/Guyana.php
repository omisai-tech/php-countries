<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Guyana extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GUY';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '328';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GY';

    /**
     * Telephone country code
     */
    public string $callingCode = '592';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '592';

    /**
     * Capital city
     */
    public string $capital = 'Georgetown';

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
    public string $en = 'Guyana';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Guyana';

    /**
     * German name of the country
     */
    public string $de = 'Guayana';

    /**
     * Spanish name of the country
     */
    public string $es = 'Guayana';

    /**
     * Italian name of the country
     */
    public string $it = 'Guiana';

    /**
     * French name of the country
     */
    public string $fr = 'Guyane';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Guiana';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Guyana';

    /**
     * Danish name of the country
     */
    public string $da = 'Guyana';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Guyana';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Guyana';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gujana';

    /**
     * Czech name of the country
     */
    public string $cs = 'Guyana';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Guyana';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Gvajana';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Gvajana';
}
