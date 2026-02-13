<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Nicaragua extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NI';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NIC';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '558';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NU';

    /**
     * Telephone country code
     */
    public string $callingCode = '505';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '505';

    /**
     * Capital city
     */
    public string $capital = 'Managua';

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
    public string $en = 'Nicaragua';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Nicaragua';

    /**
     * German name of the country
     */
    public string $de = 'Nicaragua';

    /**
     * Spanish name of the country
     */
    public string $es = 'Nicaragua';

    /**
     * Italian name of the country
     */
    public string $it = 'Nicaragua';

    /**
     * French name of the country
     */
    public string $fr = 'Nicaragua';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Nicarágua';
}
