<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Nepal extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NP';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NPL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '524';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NP';

    /**
     * Telephone country code
     */
    public string $callingCode = '977';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '977';

    /**
     * Capital city
     */
    public string $capital = 'Kathmandu';

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
    public string $en = 'Nepal';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Nepál';

    /**
     * German name of the country
     */
    public string $de = 'Nepal';

    /**
     * Spanish name of the country
     */
    public string $es = 'Nepal';

    /**
     * Italian name of the country
     */
    public string $it = 'Nepal';

    /**
     * French name of the country
     */
    public string $fr = 'Népal';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Nepal';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Nepal';

    /**
     * Danish name of the country
     */
    public string $da = 'Nepal';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Nepal';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Nepal';

    /**
     * Polish name of the country
     */
    public string $pl = 'Nepal';

    /**
     * Czech name of the country
     */
    public string $cs = 'Nepál';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Nepál';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Nepal';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Nepal';
}
