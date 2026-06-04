<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Grenada extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GD';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GRD';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '308';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GJ';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-473';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-473';

    /**
     * Capital city
     */
    public string $capital = "St. George's";

    /**
     * Total area in square kilometers
     */
    public string $area = '344.0';

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
    public string $en = 'Grenada';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Grenada';

    /**
     * German name of the country
     */
    public string $de = 'Granate';

    /**
     * Spanish name of the country
     */
    public string $es = 'Granada';

    /**
     * Italian name of the country
     */
    public string $it = 'Bomba a mano';

    /**
     * French name of the country
     */
    public string $fr = 'Grenade';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Granada';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Grenada';

    /**
     * Danish name of the country
     */
    public string $da = 'Grenada';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Grenada';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Grenada';

    /**
     * Polish name of the country
     */
    public string $pl = 'Grenada';

    /**
     * Czech name of the country
     */
    public string $cs = 'Grenada';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Grenada';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Grenada';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Grenada';
}
