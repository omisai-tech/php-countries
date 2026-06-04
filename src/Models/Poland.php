<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Poland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PL';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'POL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '616';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'PL';

    /**
     * Telephone country code
     */
    public string $callingCode = '48';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '48';

    /**
     * Capital city
     */
    public string $capital = 'Warsaw';

    /**
     * Total area in square kilometers
     */
    public string $area = '312,685.0';

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
    public string $en = 'Poland';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Lengyelország';

    /**
     * German name of the country
     */
    public string $de = 'Polen';

    /**
     * Spanish name of the country
     */
    public string $es = 'Polonia';

    /**
     * Italian name of the country
     */
    public string $it = 'Polonia';

    /**
     * French name of the country
     */
    public string $fr = 'Pologne';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Polônia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Poland';

    /**
     * Danish name of the country
     */
    public string $da = 'Polen';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Polen';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Polen';

    /**
     * Polish name of the country
     */
    public string $pl = 'Polska';

    /**
     * Czech name of the country
     */
    public string $cs = 'Polsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Poľsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Poljska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Poljska';
}
