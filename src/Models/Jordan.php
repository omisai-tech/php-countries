<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Jordan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'JO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'JOR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '400';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'JO';

    /**
     * Telephone country code
     */
    public string $callingCode = '962';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '962';

    /**
     * Capital city
     */
    public string $capital = 'Amman';

    /**
     * Total area in square kilometers
     */
    public string $area = '92,300.0';

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
    public string $en = 'Jordan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Jordánia';

    /**
     * German name of the country
     */
    public string $de = 'Jordanien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Jordán';

    /**
     * Italian name of the country
     */
    public string $it = 'Giordania';

    /**
     * French name of the country
     */
    public string $fr = 'Jordan';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Jordânia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Jordan';

    /**
     * Danish name of the country
     */
    public string $da = 'Jordan';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Jordanien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Jordan';

    /**
     * Polish name of the country
     */
    public string $pl = 'Jordania';

    /**
     * Czech name of the country
     */
    public string $cs = 'Jordán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Jordánsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Jordanija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Jordan';
}
