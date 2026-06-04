<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SouthSudan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SS';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SSD';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '728';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'OD';

    /**
     * Telephone country code
     */
    public string $callingCode = '211';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '211';

    /**
     * Capital city
     */
    public string $capital = 'Juba';

    /**
     * Total area in square kilometers
     */
    public string $area = '644,329.0';

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
    public string $en = 'South Sudan';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Dél Szudán';

    /**
     * German name of the country
     */
    public string $de = 'Südsudan';

    /**
     * Spanish name of the country
     */
    public string $es = 'Sudán del Sur';

    /**
     * Italian name of the country
     */
    public string $it = 'Sudan del Sud';

    /**
     * French name of the country
     */
    public string $fr = 'Soudan du sud';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Sudão do Sul';

    /**
     * Dutch name of the country
     */
    public string $nl = 'South Sudan';

    /**
     * Danish name of the country
     */
    public string $da = 'Sydsudan';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Sydsudan';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Sør-Sudan';

    /**
     * Polish name of the country
     */
    public string $pl = 'Sudan Południowy';

    /**
     * Czech name of the country
     */
    public string $cs = 'Jižní Súdán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Južný Sudán';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Južni Sudan';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Južni Sudan';
}
