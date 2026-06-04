<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Palau extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PLW';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '585';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'PS';

    /**
     * Telephone country code
     */
    public string $callingCode = '680';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '680';

    /**
     * Capital city
     */
    public string $capital = 'Melekeok';

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
    public string $continent = 'OC';

    /**
     * English name of the country
     */
    public string $en = 'Palau';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Palau';

    /**
     * German name of the country
     */
    public string $de = 'Palau';

    /**
     * Spanish name of the country
     */
    public string $es = 'Palaos';

    /**
     * Italian name of the country
     */
    public string $it = 'Palau';

    /**
     * French name of the country
     */
    public string $fr = 'Palaos';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Palau';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Palau';

    /**
     * Danish name of the country
     */
    public string $da = 'Palau';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Palau';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Palau';

    /**
     * Polish name of the country
     */
    public string $pl = 'Palau';

    /**
     * Czech name of the country
     */
    public string $cs = 'Palau';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Palau';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Palau';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Palau';
}
