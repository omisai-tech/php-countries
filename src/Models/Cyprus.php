<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Cyprus extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CYP';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '196';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CY';

    /**
     * Telephone country code
     */
    public string $callingCode = '357';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '357';

    /**
     * Capital city
     */
    public string $capital = 'Nicosia';

    /**
     * Total area in square kilometers
     */
    public string $area = '9,250.0';

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
    public string $en = 'Cyprus';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Ciprus';

    /**
     * German name of the country
     */
    public string $de = 'Zypern';

    /**
     * Spanish name of the country
     */
    public string $es = 'Chipre';

    /**
     * Italian name of the country
     */
    public string $it = 'Cipro';

    /**
     * French name of the country
     */
    public string $fr = 'Chypre';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Chipre';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Cyprus';

    /**
     * Danish name of the country
     */
    public string $da = 'Cypern';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Cypern';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kypros';

    /**
     * Polish name of the country
     */
    public string $pl = 'Cypr';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kypr';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Cyprus';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Ciper';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Cipar';
}
