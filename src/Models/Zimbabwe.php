<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Zimbabwe extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ZW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ZWE';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '716';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ZI';

    /**
     * Telephone country code
     */
    public string $callingCode = '263';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '263';

    /**
     * Capital city
     */
    public string $capital = 'Harare';

    /**
     * Total area in square kilometers
     */
    public string $area = '390,580.0';

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
    public string $en = 'Zimbabwe';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Zimbabwe';

    /**
     * German name of the country
     */
    public string $de = 'Zimbabwe';

    /**
     * Spanish name of the country
     */
    public string $es = 'Zimbabue';

    /**
     * Italian name of the country
     */
    public string $it = 'Zimbabwe';

    /**
     * French name of the country
     */
    public string $fr = 'Zimbabwe';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Zimbábue';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Zimbabwe';

    /**
     * Danish name of the country
     */
    public string $da = 'Zimbabwe';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Zimbabwe';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Zimbabwe';

    /**
     * Polish name of the country
     */
    public string $pl = 'Zimbabwe';

    /**
     * Czech name of the country
     */
    public string $cs = 'Zimbabwe';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Zimbabwe';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Zimbabve';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Zimbabve';
}
