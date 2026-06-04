<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class ElSalvador extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SV';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SLV';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '222';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ES';

    /**
     * Telephone country code
     */
    public string $callingCode = '503';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '503';

    /**
     * Capital city
     */
    public string $capital = 'San Salvador';

    /**
     * Total area in square kilometers
     */
    public string $area = '21,040.0';

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
    public string $continent = 'NA';

    /**
     * English name of the country
     */
    public string $en = 'El Salvador';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'El Salvador';

    /**
     * German name of the country
     */
    public string $de = 'El Salvador';

    /**
     * Spanish name of the country
     */
    public string $es = 'El Salvador';

    /**
     * Italian name of the country
     */
    public string $it = 'El Salvador';

    /**
     * French name of the country
     */
    public string $fr = 'Le Salvador';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'El Salvador';

    /**
     * Dutch name of the country
     */
    public string $nl = 'El Salvador';

    /**
     * Danish name of the country
     */
    public string $da = 'El Salvador';

    /**
     * Swedish name of the country
     */
    public string $sv = 'El Salvador';

    /**
     * Norwegian name of the country
     */
    public string $no = 'El Salvador';

    /**
     * Polish name of the country
     */
    public string $pl = 'Salwador';

    /**
     * Czech name of the country
     */
    public string $cs = 'Salvador';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Salvádor';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Salvador';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Salvador';
}
