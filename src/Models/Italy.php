<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Italy extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'IT';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ITA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '380';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'IT';

    /**
     * Telephone country code
     */
    public string $callingCode = '39';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '39';

    /**
     * Capital city
     */
    public string $capital = 'Rome';

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
    public string $en = 'Italy';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Olaszország';

    /**
     * German name of the country
     */
    public string $de = 'Italien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Italia';

    /**
     * Italian name of the country
     */
    public string $it = 'Italia';

    /**
     * French name of the country
     */
    public string $fr = 'Italie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Itália';
}
