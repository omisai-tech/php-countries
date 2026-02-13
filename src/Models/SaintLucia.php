<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SaintLucia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'LC';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'LCA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '662';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ST';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-758';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-758';

    /**
     * Capital city
     */
    public string $capital = 'Castries';

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
    public string $en = 'Saint Lucia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szent Lucia';

    /**
     * German name of the country
     */
    public string $de = 'St. Lucia';

    /**
     * Spanish name of the country
     */
    public string $es = 'Santa Lucía';

    /**
     * Italian name of the country
     */
    public string $it = 'Santa Lucia';

    /**
     * French name of the country
     */
    public string $fr = 'Sainte-Lucie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Santa Lúcia';
}
