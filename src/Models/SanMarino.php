<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SanMarino extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SMR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '674';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SM';

    /**
     * Telephone country code
     */
    public string $callingCode = '378';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '378';

    /**
     * Capital city
     */
    public string $capital = 'San Marino';

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
    public string $en = 'San Marino';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'San Marino';

    /**
     * German name of the country
     */
    public string $de = 'San Marino';

    /**
     * Spanish name of the country
     */
    public string $es = 'San Marino';

    /**
     * Italian name of the country
     */
    public string $it = 'San Marino';

    /**
     * French name of the country
     */
    public string $fr = 'Saint Marin';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'São Marino';
}
