<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Lithuania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'LT';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'LTU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '440';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'LH';

    /**
     * Telephone country code
     */
    public string $callingCode = '370';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '370';

    /**
     * Capital city
     */
    public string $capital = 'Vilnius';

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
    public string $en = 'Lithuania';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Litvánia';

    /**
     * German name of the country
     */
    public string $de = 'Litauen';

    /**
     * Spanish name of the country
     */
    public string $es = 'Lituania';

    /**
     * Italian name of the country
     */
    public string $it = 'Lituania';

    /**
     * French name of the country
     */
    public string $fr = 'Lituanie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Lituânia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Lithuania';

    /**
     * Danish name of the country
     */
    public string $da = 'Litauen';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Litauen';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Litauen';

    /**
     * Polish name of the country
     */
    public string $pl = 'Litwa';

    /**
     * Czech name of the country
     */
    public string $cs = 'Litva';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Litva';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Litva';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Litva';
}
