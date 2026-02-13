<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SaintMartin extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MF';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MAF';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '663';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'RN';

    /**
     * Telephone country code
     */
    public string $callingCode = '590';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '590';

    /**
     * Capital city
     */
    public string $capital = 'Marigot';

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
    public string $en = 'Saint Martin';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szent Márton';

    /**
     * German name of the country
     */
    public string $de = 'Sankt Martin';

    /**
     * Spanish name of the country
     */
    public string $es = 'San Martín';

    /**
     * Italian name of the country
     */
    public string $it = 'San Martino';

    /**
     * French name of the country
     */
    public string $fr = 'Saint Martin';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'são Martinho';
}
