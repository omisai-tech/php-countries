<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Ecuador extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'EC';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ECU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '218';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'EC';

    /**
     * Telephone country code
     */
    public string $callingCode = '593';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '593';

    /**
     * Capital city
     */
    public string $capital = 'Quito';

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
    public string $continent = 'SA';

    /**
     * English name of the country
     */
    public string $en = 'Ecuador';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Ecuador';

    /**
     * German name of the country
     */
    public string $de = 'Ecuador';

    /**
     * Spanish name of the country
     */
    public string $es = 'Ecuador';

    /**
     * Italian name of the country
     */
    public string $it = 'Ecuador';

    /**
     * French name of the country
     */
    public string $fr = 'Équateur';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Equador';
}
