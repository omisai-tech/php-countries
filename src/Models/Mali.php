<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Mali extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ML';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MLI';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '466';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ML';

    /**
     * Telephone country code
     */
    public string $callingCode = '223';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '223';

    /**
     * Capital city
     */
    public string $capital = 'Bamako';

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
    public string $continent = 'AF';

    /**
     * English name of the country
     */
    public string $en = 'Mali';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Mali';

    /**
     * German name of the country
     */
    public string $de = 'Mali';

    /**
     * Spanish name of the country
     */
    public string $es = 'Malí';

    /**
     * Italian name of the country
     */
    public string $it = 'Mali';

    /**
     * French name of the country
     */
    public string $fr = 'Mali';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Mali';
}
