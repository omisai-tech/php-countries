<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SaintBarthlemy extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BL';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BLM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '652';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TB';

    /**
     * Telephone country code
     */
    public string $callingCode = '590';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '590';

    /**
     * Capital city
     */
    public string $capital = 'Gustavia';

    /**
     * Total area in square kilometers
     */
    public string $area = '21.0';

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
    public string $en = 'Saint Barthélemy';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szent Barthélemy';

    /**
     * German name of the country
     */
    public string $de = 'Heiliger Bartholomäus';

    /**
     * Spanish name of the country
     */
    public string $es = 'San Bartolomé';

    /**
     * Italian name of the country
     */
    public string $it = 'San Bartolomeo';

    /**
     * French name of the country
     */
    public string $fr = 'Saint Barthélemy';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'São Bartolomeu';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Saint Barthélemy';

    /**
     * Danish name of the country
     */
    public string $da = 'Saint-Barthélemy';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Saint Barthélemy';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Saint-Barthélemy';

    /**
     * Polish name of the country
     */
    public string $pl = 'Święty Bartłomiej';

    /**
     * Czech name of the country
     */
    public string $cs = 'Svatý Bartoloměj';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Svätý Bartolomej';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Sveti Bartolomej';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Sveti Bartolomej';
}
