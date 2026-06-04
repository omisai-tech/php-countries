<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Curaao extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CUW';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '531';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'UC';

    /**
     * Telephone country code
     */
    public string $callingCode = '599';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '599';

    /**
     * Capital city
     */
    public string $capital = 'Willemstad';

    /**
     * Total area in square kilometers
     */
    public string $area = '444.0';

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
    public string $en = 'Curaçao';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Curaçao';

    /**
     * German name of the country
     */
    public string $de = 'Curacao';

    /**
     * Spanish name of the country
     */
    public string $es = 'Curazao';

    /**
     * Italian name of the country
     */
    public string $it = 'Curacao';

    /**
     * French name of the country
     */
    public string $fr = 'Curacao';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Curaçau';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Curaçao';

    /**
     * Danish name of the country
     */
    public string $da = 'Curaçao';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Curaçao';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Curaçao';

    /**
     * Polish name of the country
     */
    public string $pl = 'Curaçao';

    /**
     * Czech name of the country
     */
    public string $cs = 'Curaçao';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Curaçao';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Curaçao';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Curaçao';
}
