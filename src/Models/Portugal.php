<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Portugal extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PT';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PRT';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '620';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'PO';

    /**
     * Telephone country code
     */
    public string $callingCode = '351';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '351';

    /**
     * Capital city
     */
    public string $capital = 'Lisbon';

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
    public string $en = 'Portugal';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Portugália';

    /**
     * German name of the country
     */
    public string $de = 'Portugal';

    /**
     * Spanish name of the country
     */
    public string $es = 'Portugal';

    /**
     * Italian name of the country
     */
    public string $it = 'Portogallo';

    /**
     * French name of the country
     */
    public string $fr = 'le Portugal';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Portugal';
}
