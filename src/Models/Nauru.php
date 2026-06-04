<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Nauru extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NRU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '520';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NR';

    /**
     * Telephone country code
     */
    public string $callingCode = '674';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '674';

    /**
     * Capital city
     */
    public string $capital = 'Yaren';

    /**
     * Total area in square kilometers
     */
    public string $area = '21.0';

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
    public string $continent = 'OC';

    /**
     * English name of the country
     */
    public string $en = 'Nauru';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Nauru';

    /**
     * German name of the country
     */
    public string $de = 'Nauru';

    /**
     * Spanish name of the country
     */
    public string $es = 'Nauru';

    /**
     * Italian name of the country
     */
    public string $it = 'Nauru';

    /**
     * French name of the country
     */
    public string $fr = 'Nauru';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Nauru';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Nauru';

    /**
     * Danish name of the country
     */
    public string $da = 'Nauru';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Nauru';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Nauru';

    /**
     * Polish name of the country
     */
    public string $pl = 'Nauru';

    /**
     * Czech name of the country
     */
    public string $cs = 'Nauru';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Nauru';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Nauru';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Nauru';
}
