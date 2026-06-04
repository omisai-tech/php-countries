<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Philippines extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PHL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '608';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'RP';

    /**
     * Telephone country code
     */
    public string $callingCode = '63';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '63';

    /**
     * Capital city
     */
    public string $capital = 'Manila';

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
    public string $en = 'Philippines';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Fülöp-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Philippinen';

    /**
     * Spanish name of the country
     */
    public string $es = 'Filipinas';

    /**
     * Italian name of the country
     */
    public string $it = 'Filippine';

    /**
     * French name of the country
     */
    public string $fr = 'Philippines';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Filipinas';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Philippines';

    /**
     * Danish name of the country
     */
    public string $da = 'Filippinerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Filippinerna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Filippinene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Filipiny';

    /**
     * Czech name of the country
     */
    public string $cs = 'Filipíny';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Filipíny';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Filipini';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Filipini';
}
