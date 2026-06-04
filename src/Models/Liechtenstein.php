<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Liechtenstein extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'LI';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'LIE';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '438';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'LS';

    /**
     * Telephone country code
     */
    public string $callingCode = '423';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '423';

    /**
     * Capital city
     */
    public string $capital = 'Vaduz';

    /**
     * Total area in square kilometers
     */
    public string $area = '160.0';

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
    public string $continent = 'EU';

    /**
     * English name of the country
     */
    public string $en = 'Liechtenstein';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Liechtenstein';

    /**
     * German name of the country
     */
    public string $de = 'Liechtenstein';

    /**
     * Spanish name of the country
     */
    public string $es = 'Liechtenstein';

    /**
     * Italian name of the country
     */
    public string $it = 'Liechtenstein';

    /**
     * French name of the country
     */
    public string $fr = 'Liechtenstein';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Liechtenstein';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Liechtenstein';

    /**
     * Danish name of the country
     */
    public string $da = 'Liechtenstein';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Liechtenstein';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Liechtenstein';

    /**
     * Polish name of the country
     */
    public string $pl = 'Liechtenstein';

    /**
     * Czech name of the country
     */
    public string $cs = 'Lichtenštejnsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Lichtenštajnsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Lihtenštajn';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Lihtenštajn';
}
