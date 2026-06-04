<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Vanuatu extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'VU';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'VUT';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '548';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NH';

    /**
     * Telephone country code
     */
    public string $callingCode = '678';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '678';

    /**
     * Capital city
     */
    public string $capital = 'Port Vila';

    /**
     * Total area in square kilometers
     */
    public string $area = '12,200.0';

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
    public string $en = 'Vanuatu';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Vanuatu';

    /**
     * German name of the country
     */
    public string $de = 'Vanuatu';

    /**
     * Spanish name of the country
     */
    public string $es = 'Vanuatu';

    /**
     * Italian name of the country
     */
    public string $it = 'Vanuatu';

    /**
     * French name of the country
     */
    public string $fr = 'Vanuatu';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Vanuatu';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Vanuatu';

    /**
     * Danish name of the country
     */
    public string $da = 'Vanuatu';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Vanuatu';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Vanuatu';

    /**
     * Polish name of the country
     */
    public string $pl = 'Vanuatu';

    /**
     * Czech name of the country
     */
    public string $cs = 'Vanuatu';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Vanuatu';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Vanuatu';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Vanuatu';
}
