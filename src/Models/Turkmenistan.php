<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Turkmenistan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TKM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '795';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TX';

    /**
     * Telephone country code
     */
    public string $callingCode = '993';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '993';

    /**
     * Capital city
     */
    public string $capital = 'Ashgabat';

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
    public string $en = 'Turkmenistan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Türkmenisztán';

    /**
     * German name of the country
     */
    public string $de = 'Turkmenistan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Turkmenistán';

    /**
     * Italian name of the country
     */
    public string $it = 'Turkmenistan';

    /**
     * French name of the country
     */
    public string $fr = 'Turkménistan';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Turcomenistão';
}
