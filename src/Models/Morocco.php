<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Morocco extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MA';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MAR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '504';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MO';

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
    public string $capital = 'Rabat';

    /**
     * Total area in square kilometers
     */
    public string $area = '446,550.0';

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
    public string $en = 'Morocco';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Marokkó';

    /**
     * German name of the country
     */
    public string $de = 'Marokko';

    /**
     * Spanish name of the country
     */
    public string $es = 'Marruecos';

    /**
     * Italian name of the country
     */
    public string $it = 'Marocco';

    /**
     * French name of the country
     */
    public string $fr = 'Maroc';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Marrocos';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Morocco';

    /**
     * Danish name of the country
     */
    public string $da = 'Marokko';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Marocko';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Marokko';

    /**
     * Polish name of the country
     */
    public string $pl = 'Maroko';

    /**
     * Czech name of the country
     */
    public string $cs = 'Maroko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Maroko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Maroko';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Maroko';
}
