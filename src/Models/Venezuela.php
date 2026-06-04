<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Venezuela extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'VE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'VEN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '862';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'VE';

    /**
     * Telephone country code
     */
    public string $callingCode = '58';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '58';

    /**
     * Capital city
     */
    public string $capital = 'Caracas';

    /**
     * Total area in square kilometers
     */
    public string $area = '912,050.0';

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
    public string $continent = 'SA';

    /**
     * English name of the country
     */
    public string $en = 'Venezuela';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Venezuela';

    /**
     * German name of the country
     */
    public string $de = 'Venezuela';

    /**
     * Spanish name of the country
     */
    public string $es = 'Venezuela';

    /**
     * Italian name of the country
     */
    public string $it = 'Venezuela';

    /**
     * French name of the country
     */
    public string $fr = 'Venezuela';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Venezuela';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Venezuela';

    /**
     * Danish name of the country
     */
    public string $da = 'Venezuela';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Venezuela';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Venezuela';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wenezuela';

    /**
     * Czech name of the country
     */
    public string $cs = 'Venezuela';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Venezuela';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Venezuela';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Venezuela';
}
