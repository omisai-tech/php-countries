<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Namibia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NA';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NAM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '516';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'WA';

    /**
     * Telephone country code
     */
    public string $callingCode = '264';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '264';

    /**
     * Capital city
     */
    public string $capital = 'Windhoek';

    /**
     * Total area in square kilometers
     */
    public string $area = '825,418.0';

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
    public string $en = 'Namibia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Namíbia';

    /**
     * German name of the country
     */
    public string $de = 'Namibia';

    /**
     * Spanish name of the country
     */
    public string $es = 'Namibia';

    /**
     * Italian name of the country
     */
    public string $it = 'Namibia';

    /**
     * French name of the country
     */
    public string $fr = 'Namibie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Namíbia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Namibia';

    /**
     * Danish name of the country
     */
    public string $da = 'Namibia';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Namibia';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Namibia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Namibia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Namibie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Namíbia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Namibija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Namibija';
}
