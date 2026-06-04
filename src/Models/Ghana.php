<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Ghana extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GHA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '288';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GH';

    /**
     * Telephone country code
     */
    public string $callingCode = '233';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '233';

    /**
     * Capital city
     */
    public string $capital = 'Accra';

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
    public string $en = 'Ghana';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Ghána';

    /**
     * German name of the country
     */
    public string $de = 'Ghana';

    /**
     * Spanish name of the country
     */
    public string $es = 'Ghana';

    /**
     * Italian name of the country
     */
    public string $it = 'Ghana';

    /**
     * French name of the country
     */
    public string $fr = 'Ghana';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Gana';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Ghana';

    /**
     * Danish name of the country
     */
    public string $da = 'Ghana';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Ghana';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Ghana';

    /**
     * Polish name of the country
     */
    public string $pl = 'Ghana';

    /**
     * Czech name of the country
     */
    public string $cs = 'Ghana';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Ghana';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Gana';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Gana';
}
