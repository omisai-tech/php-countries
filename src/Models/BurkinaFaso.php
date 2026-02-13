<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class BurkinaFaso extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BF';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BFA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '854';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'UV';

    /**
     * Telephone country code
     */
    public string $callingCode = '226';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '226';

    /**
     * Capital city
     */
    public string $capital = 'Ouagadougou';

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
    public string $en = 'Burkina Faso';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Burkina Faso';

    /**
     * German name of the country
     */
    public string $de = 'Burkina Faso';

    /**
     * Spanish name of the country
     */
    public string $es = 'Burkina Faso';

    /**
     * Italian name of the country
     */
    public string $it = 'Burkina Faso';

    /**
     * French name of the country
     */
    public string $fr = 'Burkina Faso';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Burkina Faso';
}
