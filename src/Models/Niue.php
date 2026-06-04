<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Niue extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NU';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NIU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '570';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NE';

    /**
     * Telephone country code
     */
    public string $callingCode = '683';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '683';

    /**
     * Capital city
     */
    public string $capital = 'Alofi';

    /**
     * Total area in square kilometers
     */
    public string $area = '260.0';

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
    public string $en = 'Niue';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Niue';

    /**
     * German name of the country
     */
    public string $de = 'Niue';

    /**
     * Spanish name of the country
     */
    public string $es = 'Niue';

    /**
     * Italian name of the country
     */
    public string $it = 'Niue';

    /**
     * French name of the country
     */
    public string $fr = 'Nioué';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Niue';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Niue';

    /**
     * Danish name of the country
     */
    public string $da = 'Niue';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Niue';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Niue';

    /**
     * Polish name of the country
     */
    public string $pl = 'Niue';

    /**
     * Czech name of the country
     */
    public string $cs = 'Niue';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Niue';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Niue';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Niue';
}
