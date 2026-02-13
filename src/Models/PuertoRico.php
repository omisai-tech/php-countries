<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class PuertoRico extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PRI';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '630';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'RQ';

    /**
     * Telephone country code
     */
    public string $callingCode = '1';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1';

    /**
     * Capital city
     */
    public string $capital = 'San Juan';

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
    public string $en = 'Puerto Rico';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Puerto Rico';

    /**
     * German name of the country
     */
    public string $de = 'Puerto Rico';

    /**
     * Spanish name of the country
     */
    public string $es = 'Puerto Rico';

    /**
     * Italian name of the country
     */
    public string $it = 'Porto Rico';

    /**
     * French name of the country
     */
    public string $fr = 'Porto Rico';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Porto Rico';
}
