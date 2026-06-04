<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Azerbaijan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AZ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'AZE';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '31';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AJ';

    /**
     * Telephone country code
     */
    public string $callingCode = '994';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '994';

    /**
     * Capital city
     */
    public string $capital = 'Baku';

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
    public string $en = 'Azerbaijan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Azerbajdzsán';

    /**
     * German name of the country
     */
    public string $de = 'Aserbaidschan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Azerbaiyán';

    /**
     * Italian name of the country
     */
    public string $it = 'Azerbaigian';

    /**
     * French name of the country
     */
    public string $fr = 'Azerbaïdjan';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Azerbaijão';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Azerbaijan';

    /**
     * Danish name of the country
     */
    public string $da = 'Aserbajdsjan';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Azerbajdzjan';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Aserbajdsjan';

    /**
     * Polish name of the country
     */
    public string $pl = 'Azerbejdżan';

    /**
     * Czech name of the country
     */
    public string $cs = 'Ázerbajdžán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Azerbajdžan';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Azerbajdžan';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Azerbejdžan';
}
