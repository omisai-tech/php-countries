<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Tonga extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TON';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '776';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TN';

    /**
     * Telephone country code
     */
    public string $callingCode = '676';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '676';

    /**
     * Capital city
     */
    public string $capital = "Nuku'alofa";

    /**
     * Total area in square kilometers
     */
    public string $area = '748.0';

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
    public string $en = 'Tonga';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Tonga';

    /**
     * German name of the country
     */
    public string $de = 'Tonga';

    /**
     * Spanish name of the country
     */
    public string $es = 'Tonga';

    /**
     * Italian name of the country
     */
    public string $it = 'Tonga';

    /**
     * French name of the country
     */
    public string $fr = 'Tonga';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Tonga';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Tonga';

    /**
     * Danish name of the country
     */
    public string $da = 'Tonga';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Tonga';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Tonga';

    /**
     * Polish name of the country
     */
    public string $pl = 'Tonga';

    /**
     * Czech name of the country
     */
    public string $cs = 'Tonga';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Tonga';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Tonga';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Laka dvokolica';
}
