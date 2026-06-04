<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Burundi extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BI';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BDI';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '108';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BY';

    /**
     * Telephone country code
     */
    public string $callingCode = '257';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '257';

    /**
     * Capital city
     */
    public string $capital = 'Gitega';

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
    public string $en = 'Burundi';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Burundi';

    /**
     * German name of the country
     */
    public string $de = 'Burundi';

    /**
     * Spanish name of the country
     */
    public string $es = 'Burundi';

    /**
     * Italian name of the country
     */
    public string $it = 'Burundi';

    /**
     * French name of the country
     */
    public string $fr = 'Burundi';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Burundi';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Burundi';

    /**
     * Danish name of the country
     */
    public string $da = 'Burundi';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Burundi';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Burundi';

    /**
     * Polish name of the country
     */
    public string $pl = 'Burundi';

    /**
     * Czech name of the country
     */
    public string $cs = 'Burundi';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Burundi';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Burundi';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Burundi';
}
