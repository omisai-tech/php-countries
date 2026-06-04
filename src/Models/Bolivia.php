<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Bolivia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BOL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '68';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BL';

    /**
     * Telephone country code
     */
    public string $callingCode = '591';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '591';

    /**
     * Capital city
     */
    public string $capital = 'Sucre';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,098,580.0';

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
    public string $continent = 'SA';

    /**
     * English name of the country
     */
    public string $en = 'Bolivia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Bolívia';

    /**
     * German name of the country
     */
    public string $de = 'Bolivien';

    /**
     * Spanish name of the country
     */
    public string $es = 'bolivia';

    /**
     * Italian name of the country
     */
    public string $it = 'Bolivia';

    /**
     * French name of the country
     */
    public string $fr = 'Bolivie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bolívia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Bolivia';

    /**
     * Danish name of the country
     */
    public string $da = 'Bolivia';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Bolivia';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Bolivia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Boliwia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Bolívie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Bolívia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Bolivija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Bolivija';
}
