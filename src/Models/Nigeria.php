<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Nigeria extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NGA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '566';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NI';

    /**
     * Telephone country code
     */
    public string $callingCode = '234';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '234';

    /**
     * Capital city
     */
    public string $capital = 'Abuja';

    /**
     * Total area in square kilometers
     */
    public string $area = '923,768.0';

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
    public string $en = 'Nigeria';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Nigéria';

    /**
     * German name of the country
     */
    public string $de = 'Nigeria';

    /**
     * Spanish name of the country
     */
    public string $es = 'Nigeria';

    /**
     * Italian name of the country
     */
    public string $it = 'Nigeria';

    /**
     * French name of the country
     */
    public string $fr = 'Nigeria';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Nigéria';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Nigeria';

    /**
     * Danish name of the country
     */
    public string $da = 'Nigeria';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Nigeria';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Nigeria';

    /**
     * Polish name of the country
     */
    public string $pl = 'Nigeria';

    /**
     * Czech name of the country
     */
    public string $cs = 'Nigérie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Nigéria';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Nigerija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Nigerija';
}
