<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Cameroon extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CMR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '120';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CM';

    /**
     * Telephone country code
     */
    public string $callingCode = '237';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '237';

    /**
     * Capital city
     */
    public string $capital = 'Yaounde';

    /**
     * Total area in square kilometers
     */
    public string $area = '475,440.0';

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
    public string $en = 'Cameroon';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kamerun';

    /**
     * German name of the country
     */
    public string $de = 'Kamerun';

    /**
     * Spanish name of the country
     */
    public string $es = 'Camerún';

    /**
     * Italian name of the country
     */
    public string $it = 'Camerun';

    /**
     * French name of the country
     */
    public string $fr = 'Cameroun';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Camarões';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Cameroon';

    /**
     * Danish name of the country
     */
    public string $da = 'Cameroun';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Kamerun';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kamerun';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kamerun';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kamerun';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kamerun';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kamerun';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kamerun';
}
