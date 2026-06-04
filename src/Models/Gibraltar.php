<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Gibraltar extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GI';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GIB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '292';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GI';

    /**
     * Telephone country code
     */
    public string $callingCode = '350';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '350';

    /**
     * Capital city
     */
    public string $capital = 'Gibraltar';

    /**
     * Total area in square kilometers
     */
    public string $area = '6.5';

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
    public string $en = 'Gibraltar';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Gibraltár';

    /**
     * German name of the country
     */
    public string $de = 'Gibraltar';

    /**
     * Spanish name of the country
     */
    public string $es = 'Gibraltar';

    /**
     * Italian name of the country
     */
    public string $it = 'Gibilterra';

    /**
     * French name of the country
     */
    public string $fr = 'Gibraltar';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Gibraltar';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Gibraltar';

    /**
     * Danish name of the country
     */
    public string $da = 'Gibraltar';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Gibraltar';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Gibraltar';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gibraltar';

    /**
     * Czech name of the country
     */
    public string $cs = 'Gibraltar';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Gibraltár';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Gibraltar';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Gibraltar';
}
