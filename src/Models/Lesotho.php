<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Lesotho extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'LS';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'LSO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '426';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'LT';

    /**
     * Telephone country code
     */
    public string $callingCode = '266';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '266';

    /**
     * Capital city
     */
    public string $capital = 'Maseru';

    /**
     * Total area in square kilometers
     */
    public string $area = '30,355.0';

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
    public string $en = 'Lesotho';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Lesotho';

    /**
     * German name of the country
     */
    public string $de = 'Lesotho';

    /**
     * Spanish name of the country
     */
    public string $es = 'Lesoto';

    /**
     * Italian name of the country
     */
    public string $it = 'Lesoto';

    /**
     * French name of the country
     */
    public string $fr = 'Lesotho';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Lesoto';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Lesotho';

    /**
     * Danish name of the country
     */
    public string $da = 'Lesotho';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Lesotho';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Lesotho';

    /**
     * Polish name of the country
     */
    public string $pl = 'Lesotho';

    /**
     * Czech name of the country
     */
    public string $cs = 'Lesotho';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Lesotho';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Lesoto';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Lesoto';
}
