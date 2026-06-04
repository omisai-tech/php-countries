<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class HongKong extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'HK';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'HKG';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '344';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'HK';

    /**
     * Telephone country code
     */
    public string $callingCode = '852';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '852';

    /**
     * Capital city
     */
    public string $capital = 'Hong Kong';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,092.0';

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
    public string $en = 'Hong Kong';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Hong Kong';

    /**
     * German name of the country
     */
    public string $de = 'Hongkong';

    /**
     * Spanish name of the country
     */
    public string $es = 'Hong Kong';

    /**
     * Italian name of the country
     */
    public string $it = 'Hong Kong';

    /**
     * French name of the country
     */
    public string $fr = 'Hong Kong';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Hong Kong';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Hong Kong';

    /**
     * Danish name of the country
     */
    public string $da = 'Hongkong';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Hongkong';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Hongkong';

    /**
     * Polish name of the country
     */
    public string $pl = 'Hongkong';

    /**
     * Czech name of the country
     */
    public string $cs = 'Hongkong';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Hongkong';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Hongkong';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Hong Kong';
}
