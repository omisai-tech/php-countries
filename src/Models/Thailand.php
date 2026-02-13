<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Thailand extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'THA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '764';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TH';

    /**
     * Telephone country code
     */
    public string $callingCode = '66';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '66';

    /**
     * Capital city
     */
    public string $capital = 'Bangkok';

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
    public string $continent = 'AS';

    /**
     * English name of the country
     */
    public string $en = 'Thailand';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Thaiföld';

    /**
     * German name of the country
     */
    public string $de = 'Thailand';

    /**
     * Spanish name of the country
     */
    public string $es = 'Tailandia';

    /**
     * Italian name of the country
     */
    public string $it = 'Tailandia';

    /**
     * French name of the country
     */
    public string $fr = 'Thaïlande';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Tailândia';
}
