<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Barbados extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BB';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BRB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '52';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BB';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-246';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-246';

    /**
     * Capital city
     */
    public string $capital = 'Bridgetown';

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
    public string $en = 'Barbados';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Barbados';

    /**
     * German name of the country
     */
    public string $de = 'Barbados';

    /**
     * Spanish name of the country
     */
    public string $es = 'Barbados';

    /**
     * Italian name of the country
     */
    public string $it = 'Barbados';

    /**
     * French name of the country
     */
    public string $fr = 'Barbade';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Barbados';
}
