<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Uzbekistan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'UZ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'UZB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '860';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'UZ';

    /**
     * Telephone country code
     */
    public string $callingCode = '998';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '998';

    /**
     * Capital city
     */
    public string $capital = 'Tashkent';

    /**
     * Total area in square kilometers
     */
    public string $area = '447,400.0';

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
    public string $en = 'Uzbekistan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Üzbegisztán';

    /**
     * German name of the country
     */
    public string $de = 'Usbekistan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Uzbekistán';

    /**
     * Italian name of the country
     */
    public string $it = 'Uzbekistan';

    /**
     * French name of the country
     */
    public string $fr = 'Ouzbékistan';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Uzbequistão';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Uzbekistan';

    /**
     * Danish name of the country
     */
    public string $da = 'Usbekistan';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Uzbekistan';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Usbekistan';

    /**
     * Polish name of the country
     */
    public string $pl = 'Uzbekistan';

    /**
     * Czech name of the country
     */
    public string $cs = 'Uzbekistán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Uzbekistan';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Uzbekistan';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Uzbekistan';
}
