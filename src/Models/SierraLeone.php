<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SierraLeone extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SL';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SLE';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '694';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SL';

    /**
     * Telephone country code
     */
    public string $callingCode = '232';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '232';

    /**
     * Capital city
     */
    public string $capital = 'Freetown';

    /**
     * Total area in square kilometers
     */
    public string $area = '71,740.0';

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
    public string $en = 'Sierra Leone';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Sierra Leone';

    /**
     * German name of the country
     */
    public string $de = 'Sierra Leone';

    /**
     * Spanish name of the country
     */
    public string $es = 'Sierra Leona';

    /**
     * Italian name of the country
     */
    public string $it = 'Sierra Leone';

    /**
     * French name of the country
     */
    public string $fr = 'Sierra Leone';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Serra Leoa';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Sierra Leone';

    /**
     * Danish name of the country
     */
    public string $da = 'Sierra Leone';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Sierra Leone';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Sierra Leone';

    /**
     * Polish name of the country
     */
    public string $pl = 'Sierra Leone';

    /**
     * Czech name of the country
     */
    public string $cs = 'Sierra Leone';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Sierra Leone';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Sierra Leone';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Sijera Leone';
}
