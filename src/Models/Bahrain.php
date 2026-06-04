<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Bahrain extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BHR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '48';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BA';

    /**
     * Telephone country code
     */
    public string $callingCode = '973';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '973';

    /**
     * Capital city
     */
    public string $capital = 'Manama';

    /**
     * Total area in square kilometers
     */
    public string $area = '665.0';

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
    public string $en = 'Bahrain';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Bahrein';

    /**
     * German name of the country
     */
    public string $de = 'Bahrain';

    /**
     * Spanish name of the country
     */
    public string $es = 'Bahréin';

    /**
     * Italian name of the country
     */
    public string $it = 'Bahrein';

    /**
     * French name of the country
     */
    public string $fr = 'Bahreïn';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bahrein';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Bahrain';

    /**
     * Danish name of the country
     */
    public string $da = 'Bahrain';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Bahrain';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Bahrain';

    /**
     * Polish name of the country
     */
    public string $pl = 'Bahrajn';

    /**
     * Czech name of the country
     */
    public string $cs = 'Bahrajn';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Bahrajn';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Bahrajn';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Bahrein';
}
