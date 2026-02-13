<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Malaysia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MYS';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '458';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MY';

    /**
     * Telephone country code
     */
    public string $callingCode = '60';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '60';

    /**
     * Capital city
     */
    public string $capital = 'Kuala Lumpur';

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
    public string $en = 'Malaysia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Malaysia';

    /**
     * German name of the country
     */
    public string $de = 'Malaysia';

    /**
     * Spanish name of the country
     */
    public string $es = 'Malasia';

    /**
     * Italian name of the country
     */
    public string $it = 'Malaysia';

    /**
     * French name of the country
     */
    public string $fr = 'Malaisie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Malásia';
}
