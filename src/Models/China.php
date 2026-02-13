<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class China extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CHN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '156';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CH';

    /**
     * Telephone country code
     */
    public string $callingCode = '86';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '86';

    /**
     * Capital city
     */
    public string $capital = 'Beijing';

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
    public string $en = 'China';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kína';

    /**
     * German name of the country
     */
    public string $de = 'China';

    /**
     * Spanish name of the country
     */
    public string $es = 'Porcelana';

    /**
     * Italian name of the country
     */
    public string $it = 'Cina';

    /**
     * French name of the country
     */
    public string $fr = 'Chine';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'China';
}
