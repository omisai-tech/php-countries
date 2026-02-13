<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Niue extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NU';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NIU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '570';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NE';

    /**
     * Telephone country code
     */
    public string $callingCode = '683';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '683';

    /**
     * Capital city
     */
    public string $capital = 'Alofi';

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
    public string $continent = 'OC';

    /**
     * English name of the country
     */
    public string $en = 'Niue';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Niue';

    /**
     * German name of the country
     */
    public string $de = 'Niue';

    /**
     * Spanish name of the country
     */
    public string $es = 'Niue';

    /**
     * Italian name of the country
     */
    public string $it = 'Niue';

    /**
     * French name of the country
     */
    public string $fr = 'Nioué';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Niue';
}
