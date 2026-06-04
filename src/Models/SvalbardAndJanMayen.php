<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SvalbardAndJanMayen extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SJ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SJM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '744';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SV';

    /**
     * Telephone country code
     */
    public string $callingCode = '47';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '47';

    /**
     * Capital city
     */
    public string $capital = 'Longyearbyen';

    /**
     * Total area in square kilometers
     */
    public string $area = '62,049.0';

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
    public string $en = 'Svalbard and Jan Mayen';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Svalbard és Jan Mayen';

    /**
     * German name of the country
     */
    public string $de = 'Spitzbergen und Jan Mayen';

    /**
     * Spanish name of the country
     */
    public string $es = 'Svalbard y Jan Mayen';

    /**
     * Italian name of the country
     */
    public string $it = 'Svalbard e Jan Mayen';

    /**
     * French name of the country
     */
    public string $fr = 'Svalbard et Jan Mayen';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Svalbard e Jan Mayen';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Svalbard and Jan Mayen';

    /**
     * Danish name of the country
     */
    public string $da = 'Svalbard og Jan Mayen';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Svalbard och Jan Mayen';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Svalbard og Jan Mayen';

    /**
     * Polish name of the country
     */
    public string $pl = 'Svalbard i Jan Mayen';

    /**
     * Czech name of the country
     */
    public string $cs = 'Špicberky a Jan Mayen';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Svalbard a Jan Mayen';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Svalbard in Jan Mayen';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Svalbard i Jan Mayen';
}
