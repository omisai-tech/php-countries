<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Sudan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SD';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SDN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '729';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SU';

    /**
     * Telephone country code
     */
    public string $callingCode = '249';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '249';

    /**
     * Capital city
     */
    public string $capital = 'Khartoum';

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
    public string $en = 'Sudan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szudán';

    /**
     * German name of the country
     */
    public string $de = 'Sudan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Sudán';

    /**
     * Italian name of the country
     */
    public string $it = 'Sudan';

    /**
     * French name of the country
     */
    public string $fr = 'Soudan';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Sudão';
}
