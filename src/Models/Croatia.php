<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Croatia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'HR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'HRV';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '191';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'HR';

    /**
     * Telephone country code
     */
    public string $callingCode = '385';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '385';

    /**
     * Capital city
     */
    public string $capital = 'Zagreb';

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
    public string $en = 'Croatia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Horvátország';

    /**
     * German name of the country
     */
    public string $de = 'Kroatien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Croacia';

    /**
     * Italian name of the country
     */
    public string $it = 'Croazia';

    /**
     * French name of the country
     */
    public string $fr = 'Croatie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Croácia';
}
