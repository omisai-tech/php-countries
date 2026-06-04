<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Sudan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SD';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SDN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '729';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SU';

    /**
     * Telephone country code
     */
    public string $callingCode = '249';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '249';

    /**
     * Capital city
     */
    public string $capital = 'Khartoum';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,861,484.0';

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
    public string $en = 'Sudan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szudán';

    /**
     * German name of the country
     */
    public string $de = 'Sudan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Sudán';

    /**
     * Italian name of the country
     */
    public string $it = 'Sudan';

    /**
     * French name of the country
     */
    public string $fr = 'Soudan';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Sudão';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Sudan';

    /**
     * Danish name of the country
     */
    public string $da = 'Sudan';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Sudan';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Sudan';

    /**
     * Polish name of the country
     */
    public string $pl = 'Sudan';

    /**
     * Czech name of the country
     */
    public string $cs = 'Súdán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Sudán';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Sudan';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Sudan';
}
