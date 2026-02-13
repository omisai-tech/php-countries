<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Maldives extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MV';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MDV';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '462';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MV';

    /**
     * Telephone country code
     */
    public string $callingCode = '960';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '960';

    /**
     * Capital city
     */
    public string $capital = 'Male';

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
    public string $en = 'Maldives';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Maldív-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Malediven';

    /**
     * Spanish name of the country
     */
    public string $es = 'Maldivas';

    /**
     * Italian name of the country
     */
    public string $it = 'Maldive';

    /**
     * French name of the country
     */
    public string $fr = 'Maldives';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Maldivas';
}
