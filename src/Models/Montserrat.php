<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Montserrat extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MS';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MSR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '500';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MH';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-664';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-664';

    /**
     * Capital city
     */
    public string $capital = 'Plymouth';

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
    public string $en = 'Montserrat';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Montserrat';

    /**
     * German name of the country
     */
    public string $de = 'Montserrat';

    /**
     * Spanish name of the country
     */
    public string $es = 'Montserrat';

    /**
     * Italian name of the country
     */
    public string $it = 'Montserrat';

    /**
     * French name of the country
     */
    public string $fr = 'Montserrat';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Montserrate';
}
