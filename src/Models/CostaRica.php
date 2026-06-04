<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class CostaRica extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CRI';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '188';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CS';

    /**
     * Telephone country code
     */
    public string $callingCode = '506';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '506';

    /**
     * Capital city
     */
    public string $capital = 'San Jose';

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
    public string $en = 'Costa Rica';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Costa Rica';

    /**
     * German name of the country
     */
    public string $de = 'Costa Rica';

    /**
     * Spanish name of the country
     */
    public string $es = 'Costa Rica';

    /**
     * Italian name of the country
     */
    public string $it = 'Costa Rica';

    /**
     * French name of the country
     */
    public string $fr = 'Costa Rica';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Costa Rica';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Costa Rica';

    /**
     * Danish name of the country
     */
    public string $da = 'Costa Rica';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Costa Rica';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Costa Rica';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kostaryka';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kostarika';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kostarika';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kostarika';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kostarika';
}
