<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Mongolia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MNG';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '496';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MG';

    /**
     * Telephone country code
     */
    public string $callingCode = '976';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '976';

    /**
     * Capital city
     */
    public string $capital = 'Ulaanbaatar';

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
    public string $en = 'Mongolia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Mongólia';

    /**
     * German name of the country
     */
    public string $de = 'Mongolei';

    /**
     * Spanish name of the country
     */
    public string $es = 'Mongolia';

    /**
     * Italian name of the country
     */
    public string $it = 'Mongolia';

    /**
     * French name of the country
     */
    public string $fr = 'Mongolie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Mongólia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Mongolia';

    /**
     * Danish name of the country
     */
    public string $da = 'Mongoliet';

    /**
     * Swedish name of the country
     */
    public string $sv = 'mongoliet';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Mongolia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Mongolia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Mongolsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Mongolsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Mongolija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Mongolija';
}
