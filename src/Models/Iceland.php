<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Iceland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'IS';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ISL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '352';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'IC';

    /**
     * Telephone country code
     */
    public string $callingCode = '354';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '354';

    /**
     * Capital city
     */
    public string $capital = 'Reykjavik';

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
    public string $en = 'Iceland';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Izland';

    /**
     * German name of the country
     */
    public string $de = 'Island';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islandia';

    /**
     * Italian name of the country
     */
    public string $it = 'Islanda';

    /**
     * French name of the country
     */
    public string $fr = 'Islande';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Islândia';
}
