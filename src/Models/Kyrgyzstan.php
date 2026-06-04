<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Kyrgyzstan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'KGZ';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '417';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'KG';

    /**
     * Telephone country code
     */
    public string $callingCode = '996';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '996';

    /**
     * Capital city
     */
    public string $capital = 'Bishkek';

    /**
     * Total area in square kilometers
     */
    public string $area = '198,500.0';

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
    public string $en = 'Kyrgyzstan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kirgizisztán';

    /**
     * German name of the country
     */
    public string $de = 'Kirgisistan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Kirguistán';

    /**
     * Italian name of the country
     */
    public string $it = 'Kirghizistan';

    /**
     * French name of the country
     */
    public string $fr = 'Kirghizistan';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Quirguistão';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Kyrgyzstan';

    /**
     * Danish name of the country
     */
    public string $da = 'Kirgisistan';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Kirgizistan';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kirgisistan';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kirgistan';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kyrgyzstán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kirgizsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kirgizistan';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kirgistan';
}
