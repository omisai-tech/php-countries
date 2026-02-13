<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Spain extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ES';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ESP';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '724';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SP';

    /**
     * Telephone country code
     */
    public string $callingCode = '34';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '34';

    /**
     * Capital city
     */
    public string $capital = 'Madrid';

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
    public string $en = 'Spain';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Spanyolország';

    /**
     * German name of the country
     */
    public string $de = 'Spanien';

    /**
     * Spanish name of the country
     */
    public string $es = 'España';

    /**
     * Italian name of the country
     */
    public string $it = 'Spagna';

    /**
     * French name of the country
     */
    public string $fr = 'Espagne';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Espanha';
}
