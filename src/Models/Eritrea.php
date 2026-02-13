<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Eritrea extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ER';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ERI';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '232';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ER';

    /**
     * Telephone country code
     */
    public string $callingCode = '291';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '291';

    /**
     * Capital city
     */
    public string $capital = 'Asmara';

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
    public string $continent = 'AF';

    /**
     * English name of the country
     */
    public string $en = 'Eritrea';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Eritrea';

    /**
     * German name of the country
     */
    public string $de = 'Eritrea';

    /**
     * Spanish name of the country
     */
    public string $es = 'Eritrea';

    /**
     * Italian name of the country
     */
    public string $it = 'Eritrea';

    /**
     * French name of the country
     */
    public string $fr = 'Érythrée';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Eritreia';
}
