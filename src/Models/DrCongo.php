<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class DrCongo extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CD';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'COD';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '180';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CG';

    /**
     * Telephone country code
     */
    public string $callingCode = '243';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '243';

    /**
     * Capital city
     */
    public string $capital = 'Kinshasa';

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
    public string $en = 'DR Congo';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kongói DR';

    /**
     * German name of the country
     */
    public string $de = 'Kongolesische DR';

    /**
     * Spanish name of the country
     */
    public string $es = 'República Democrática del Congo';

    /**
     * Italian name of the country
     */
    public string $it = 'DR congolese';

    /**
     * French name of the country
     */
    public string $fr = 'RD Congolaise';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'RD Congo';
}
