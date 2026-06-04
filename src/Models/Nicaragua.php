<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Nicaragua extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NI';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NIC';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '558';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NU';

    /**
     * Telephone country code
     */
    public string $callingCode = '505';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '505';

    /**
     * Capital city
     */
    public string $capital = 'Managua';

    /**
     * Total area in square kilometers
     */
    public string $area = '129,494.0';

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
    public string $en = 'Nicaragua';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Nicaragua';

    /**
     * German name of the country
     */
    public string $de = 'Nicaragua';

    /**
     * Spanish name of the country
     */
    public string $es = 'Nicaragua';

    /**
     * Italian name of the country
     */
    public string $it = 'Nicaragua';

    /**
     * French name of the country
     */
    public string $fr = 'Nicaragua';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Nicarágua';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Nicaragua';

    /**
     * Danish name of the country
     */
    public string $da = 'Nicaragua';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Nicaragua';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Nicaragua';

    /**
     * Polish name of the country
     */
    public string $pl = 'Nikaragua';

    /**
     * Czech name of the country
     */
    public string $cs = 'Nikaragua';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Nikaragua';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Nikaragva';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Nikaragva';
}
