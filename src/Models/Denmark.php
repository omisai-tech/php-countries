<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Denmark extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'DK';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'DNK';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '208';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'DA';

    /**
     * Telephone country code
     */
    public string $callingCode = '45';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '45';

    /**
     * Capital city
     */
    public string $capital = 'Copenhagen';

    /**
     * Total area in square kilometers
     */
    public string $area = '43,094.0';

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
    public string $en = 'Denmark';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Dánia';

    /**
     * German name of the country
     */
    public string $de = 'Dänemark';

    /**
     * Spanish name of the country
     */
    public string $es = 'Dinamarca';

    /**
     * Italian name of the country
     */
    public string $it = 'Danimarca';

    /**
     * French name of the country
     */
    public string $fr = 'Danemark';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Dinamarca';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Denmark';

    /**
     * Danish name of the country
     */
    public string $da = 'Danmark';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Danmark';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Danmark';

    /**
     * Polish name of the country
     */
    public string $pl = 'Dania';

    /**
     * Czech name of the country
     */
    public string $cs = 'Dánsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Dánsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Danska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Danska';
}
