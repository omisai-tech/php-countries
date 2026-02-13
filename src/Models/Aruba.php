<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Aruba extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ABW';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '533';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AA';

    /**
     * Telephone country code
     */
    public string $callingCode = '297';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '297';

    /**
     * Capital city
     */
    public string $capital = 'Oranjestad';

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
    public string $en = 'Aruba';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Aruba';

    /**
     * German name of the country
     */
    public string $de = 'Aruba';

    /**
     * Spanish name of the country
     */
    public string $es = 'Aruba';

    /**
     * Italian name of the country
     */
    public string $it = 'Aruba';

    /**
     * French name of the country
     */
    public string $fr = 'Aruba';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Aruba';
}
