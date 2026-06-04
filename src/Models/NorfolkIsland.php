<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class NorfolkIsland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NF';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NFK';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '574';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NF';

    /**
     * Telephone country code
     */
    public string $callingCode = '672';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '672';

    /**
     * Capital city
     */
    public string $capital = 'Kingston';

    /**
     * Total area in square kilometers
     */
    public string $area = '34.6';

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
    public string $en = 'Norfolk Island';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Norfolk-sziget';

    /**
     * German name of the country
     */
    public string $de = 'Norfolkinsel';

    /**
     * Spanish name of the country
     */
    public string $es = 'Isla Norfolk';

    /**
     * Italian name of the country
     */
    public string $it = 'Isola Norfolk';

    /**
     * French name of the country
     */
    public string $fr = "l'ile de Norfolk";

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilha Norfolk';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Norfolk Island';

    /**
     * Danish name of the country
     */
    public string $da = 'Norfolkøen';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Norfolkön';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Norfolkøya';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspa Norfolk';

    /**
     * Czech name of the country
     */
    public string $cs = 'Norfolkský ostrov';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Norfolkský ostrov';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Norfolški otok';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Otok Norfolk';
}
