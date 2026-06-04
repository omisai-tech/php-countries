<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class France extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'FR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'FRA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '250';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'FR';

    /**
     * Telephone country code
     */
    public string $callingCode = '33';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '33';

    /**
     * Capital city
     */
    public string $capital = 'Paris';

    /**
     * Total area in square kilometers
     */
    public string $area = '547,030.0';

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
    public string $en = 'France';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Franciaország';

    /**
     * German name of the country
     */
    public string $de = 'Frankreich';

    /**
     * Spanish name of the country
     */
    public string $es = 'Francia';

    /**
     * Italian name of the country
     */
    public string $it = 'Francia';

    /**
     * French name of the country
     */
    public string $fr = 'France';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'França';

    /**
     * Dutch name of the country
     */
    public string $nl = 'France';

    /**
     * Danish name of the country
     */
    public string $da = 'Frankrig';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Frankrike';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Frankrike';

    /**
     * Polish name of the country
     */
    public string $pl = 'Francja';

    /**
     * Czech name of the country
     */
    public string $cs = 'Francie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Francúzsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Francija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Francuska';
}
