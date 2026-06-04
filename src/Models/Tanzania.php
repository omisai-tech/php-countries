<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Tanzania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TZ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TZA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '834';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TZ';

    /**
     * Telephone country code
     */
    public string $callingCode = '255';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '255';

    /**
     * Capital city
     */
    public string $capital = 'Dodoma';

    /**
     * Total area in square kilometers
     */
    public string $area = '945,087.0';

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
    public string $en = 'Tanzania';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Tanzánia';

    /**
     * German name of the country
     */
    public string $de = 'Tansania';

    /**
     * Spanish name of the country
     */
    public string $es = 'Tanzania';

    /**
     * Italian name of the country
     */
    public string $it = 'Tanzania';

    /**
     * French name of the country
     */
    public string $fr = 'Tanzanie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Tanzânia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Tanzania';

    /**
     * Danish name of the country
     */
    public string $da = 'Tanzania';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Tanzania';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Tanzania';

    /**
     * Polish name of the country
     */
    public string $pl = 'Tanzania';

    /**
     * Czech name of the country
     */
    public string $cs = 'Tanzanie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Tanzánia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Tanzanija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Tanzanija';
}
