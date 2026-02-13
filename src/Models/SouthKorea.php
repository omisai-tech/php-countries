<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SouthKorea extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'KOR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '410';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'KS';

    /**
     * Telephone country code
     */
    public string $callingCode = '82';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '82';

    /**
     * Capital city
     */
    public string $capital = 'Seoul';

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
    public string $en = 'South Korea';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Dél-Korea';

    /**
     * German name of the country
     */
    public string $de = 'Südkorea';

    /**
     * Spanish name of the country
     */
    public string $es = 'Corea del Sur';

    /**
     * Italian name of the country
     */
    public string $it = 'Corea del Sud';

    /**
     * French name of the country
     */
    public string $fr = 'Corée du Sud';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Coreia do Sul';
}
