<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Angola extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'AGO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '24';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AO';

    /**
     * Telephone country code
     */
    public string $callingCode = '244';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '244';

    /**
     * Capital city
     */
    public string $capital = 'Luanda';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,246,700.0';

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
    public string $en = 'Angola';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Angola';

    /**
     * German name of the country
     */
    public string $de = 'Angola';

    /**
     * Spanish name of the country
     */
    public string $es = 'Angola';

    /**
     * Italian name of the country
     */
    public string $it = "L'Angola";

    /**
     * French name of the country
     */
    public string $fr = 'Angola';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Angola';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Angola';

    /**
     * Danish name of the country
     */
    public string $da = 'Angola';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Angola';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Angola';

    /**
     * Polish name of the country
     */
    public string $pl = 'Angola';

    /**
     * Czech name of the country
     */
    public string $cs = 'Angola';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Angola';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Angola';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Angola';
}
