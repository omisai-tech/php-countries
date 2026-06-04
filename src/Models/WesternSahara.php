<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class WesternSahara extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'EH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ESH';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '732';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'WI';

    /**
     * Telephone country code
     */
    public string $callingCode = '212';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '212';

    /**
     * Capital city
     */
    public string $capital = 'El-Aaiun';

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
    public string $en = 'Western Sahara';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'nyugat-Szahara';

    /**
     * German name of the country
     */
    public string $de = 'Westsahara';

    /**
     * Spanish name of the country
     */
    public string $es = 'Sahara Occidental';

    /**
     * Italian name of the country
     */
    public string $it = 'Sahara occidentale';

    /**
     * French name of the country
     */
    public string $fr = 'Sahara occidental';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Saara Ocidental';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Western Sahara';

    /**
     * Danish name of the country
     */
    public string $da = 'Vestsahara';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Västsahara';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Vest-Sahara';

    /**
     * Polish name of the country
     */
    public string $pl = 'Sahara Zachodnia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Západní Sahara';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Západná Sahara';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Zahodna Sahara';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Zapadna Sahara';
}
