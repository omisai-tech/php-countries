<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Bermuda extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BMU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '60';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BD';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-441';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-441';

    /**
     * Capital city
     */
    public string $capital = 'Hamilton';

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
    public string $en = 'Bermuda';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Bermuda';

    /**
     * German name of the country
     */
    public string $de = 'Bermuda';

    /**
     * Spanish name of the country
     */
    public string $es = 'islas Bermudas';

    /**
     * Italian name of the country
     */
    public string $it = 'Bermude';

    /**
     * French name of the country
     */
    public string $fr = 'Bermudes';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bermudas';
}
