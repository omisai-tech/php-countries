<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Cyprus extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CYP';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '196';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CY';

    /**
     * Telephone country code
     */
    public string $callingCode = '357';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '357';

    /**
     * Capital city
     */
    public string $capital = 'Nicosia';

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
    public string $en = 'Cyprus';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Ciprus';

    /**
     * German name of the country
     */
    public string $de = 'Zypern';

    /**
     * Spanish name of the country
     */
    public string $es = 'Chipre';

    /**
     * Italian name of the country
     */
    public string $it = 'Cipro';

    /**
     * French name of the country
     */
    public string $fr = 'Chypre';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Chipre';
}
