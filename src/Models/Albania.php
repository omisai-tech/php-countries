<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Albania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AL';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ALB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '8';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AL';

    /**
     * Telephone country code
     */
    public string $callingCode = '355';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '355';

    /**
     * Capital city
     */
    public string $capital = 'Tirana';

    /**
     * Total area in square kilometers
     */
    public string $area = '28,748.0';

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
    public string $en = 'Albania';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Albánia';

    /**
     * German name of the country
     */
    public string $de = 'Albanien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Albania';

    /**
     * Italian name of the country
     */
    public string $it = 'Albania';

    /**
     * French name of the country
     */
    public string $fr = 'Albanie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Albânia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Albania';

    /**
     * Danish name of the country
     */
    public string $da = 'Albanien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Albanien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Albania';

    /**
     * Polish name of the country
     */
    public string $pl = 'Albania';

    /**
     * Czech name of the country
     */
    public string $cs = 'Albánie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Albánsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Albanija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Albanija';
}
