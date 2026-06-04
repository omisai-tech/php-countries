<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Brunei extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BRN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '96';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BX';

    /**
     * Telephone country code
     */
    public string $callingCode = '673';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '673';

    /**
     * Capital city
     */
    public string $capital = 'Bandar Seri Begawan';

    /**
     * Total area in square kilometers
     */
    public string $area = '5,770.0';

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
    public string $en = 'Brunei';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Brunei';

    /**
     * German name of the country
     */
    public string $de = 'Brunei';

    /**
     * Spanish name of the country
     */
    public string $es = 'Brunéi';

    /**
     * Italian name of the country
     */
    public string $it = 'Brunei';

    /**
     * French name of the country
     */
    public string $fr = 'Brunéi';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Brunei';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Brunei';

    /**
     * Danish name of the country
     */
    public string $da = 'Brunei';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Brunei';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Brunei';

    /**
     * Polish name of the country
     */
    public string $pl = 'Brunei';

    /**
     * Czech name of the country
     */
    public string $cs = 'Brunej';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Brunej';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Brunej';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Brunej';
}
