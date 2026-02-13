<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Germany extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'DE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'DEU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '276';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GM';

    /**
     * Telephone country code
     */
    public string $callingCode = '49';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '49';

    /**
     * Capital city
     */
    public string $capital = 'Berlin';

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
    public string $en = 'Germany';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Németország';

    /**
     * German name of the country
     */
    public string $de = 'Deutschland';

    /**
     * Spanish name of the country
     */
    public string $es = 'Alemania';

    /**
     * Italian name of the country
     */
    public string $it = 'Germania';

    /**
     * French name of the country
     */
    public string $fr = 'Allemagne';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Alemanha';
}
