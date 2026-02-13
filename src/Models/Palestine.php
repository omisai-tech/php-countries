<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Palestine extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PS';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PSE';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '275';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'WE';

    /**
     * Telephone country code
     */
    public string $callingCode = '970';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '970';

    /**
     * Capital city
     */
    public string $capital = 'East Jerusalem';

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
    public string $en = 'Palestine';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Palesztina';

    /**
     * German name of the country
     */
    public string $de = 'Palästina';

    /**
     * Spanish name of the country
     */
    public string $es = 'Palestina';

    /**
     * Italian name of the country
     */
    public string $it = 'Palestina';

    /**
     * French name of the country
     */
    public string $fr = 'Palestine';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Palestina';
}
