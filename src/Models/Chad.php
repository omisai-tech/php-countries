<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Chad extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TD';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TCD';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '148';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CD';

    /**
     * Telephone country code
     */
    public string $callingCode = '235';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '235';

    /**
     * Capital city
     */
    public string $capital = "N'Djamena";

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
    public string $en = 'Chad';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Csád';

    /**
     * German name of the country
     */
    public string $de = 'Tschad';

    /**
     * Spanish name of the country
     */
    public string $es = 'Chad';

    /**
     * Italian name of the country
     */
    public string $it = 'Chad';

    /**
     * French name of the country
     */
    public string $fr = 'Tchad';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Chade';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Chad';

    /**
     * Danish name of the country
     */
    public string $da = 'Tchad';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Tchad';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Tsjad';

    /**
     * Polish name of the country
     */
    public string $pl = 'Czad';

    /**
     * Czech name of the country
     */
    public string $cs = 'Čad';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Čad';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Čad';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Čad';
}
