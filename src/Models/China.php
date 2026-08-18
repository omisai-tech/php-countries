<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class China extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CHN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '156';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CH';

    /**
     * Telephone country code
     */
    public string $callingCode = '86';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '86';

    /**
     * Capital city
     */
    public string $capital = 'Beijing';

    /**
     * Total area in square kilometers
     */
    public string $area = '9,596,960.0';

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
    public string $en = 'China';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kína';

    /**
     * German name of the country
     */
    public string $de = 'China';

    /**
     * Spanish name of the country
     */
    public string $es = 'China';

    /**
     * Italian name of the country
     */
    public string $it = 'Cina';

    /**
     * French name of the country
     */
    public string $fr = 'Chine';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'China';

    /**
     * Dutch name of the country
     */
    public string $nl = 'China';

    /**
     * Danish name of the country
     */
    public string $da = 'Kina';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Kina';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kina';

    /**
     * Polish name of the country
     */
    public string $pl = 'Chiny';

    /**
     * Czech name of the country
     */
    public string $cs = 'Čína';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Čína';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kitajska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kina';
}
