<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Monaco extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MC';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MCO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '492';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MN';

    /**
     * Telephone country code
     */
    public string $callingCode = '377';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '377';

    /**
     * Capital city
     */
    public string $capital = 'Monaco';

    /**
     * Total area in square kilometers
     */
    public string $area = '1.9';

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
    public string $en = 'Monaco';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Monaco';

    /**
     * German name of the country
     */
    public string $de = 'Monaco';

    /**
     * Spanish name of the country
     */
    public string $es = 'Mónaco';

    /**
     * Italian name of the country
     */
    public string $it = 'Monaco';

    /**
     * French name of the country
     */
    public string $fr = 'Monaco';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Mônaco';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Monaco';

    /**
     * Danish name of the country
     */
    public string $da = 'Monaco';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Monaco';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Monaco';

    /**
     * Polish name of the country
     */
    public string $pl = 'Monako';

    /**
     * Czech name of the country
     */
    public string $cs = 'Monako';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Monako';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Monako';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Monako';
}
