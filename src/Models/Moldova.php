<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Moldova extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MD';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MDA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '498';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MD';

    /**
     * Telephone country code
     */
    public string $callingCode = '373';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '373';

    /**
     * Capital city
     */
    public string $capital = 'Chisinau';

    /**
     * Total area in square kilometers
     */
    public string $area = '33,843.0';

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
    public string $en = 'Moldova';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Moldova';

    /**
     * German name of the country
     */
    public string $de = 'Moldawien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Moldavia';

    /**
     * Italian name of the country
     */
    public string $it = 'Moldavia';

    /**
     * French name of the country
     */
    public string $fr = 'Moldavie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Moldávia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Moldova';

    /**
     * Danish name of the country
     */
    public string $da = 'Moldova';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Moldavien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Moldova';

    /**
     * Polish name of the country
     */
    public string $pl = 'Moldova';

    /**
     * Czech name of the country
     */
    public string $cs = 'Moldavsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Moldavsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Moldavija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Moldavija';
}
