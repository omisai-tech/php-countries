<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Runion extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'RE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'REU';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '638';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'RE';

    /**
     * Telephone country code
     */
    public string $callingCode = '262';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '262';

    /**
     * Capital city
     */
    public string $capital = 'Saint-Denis';

    /**
     * Total area in square kilometers
     */
    public string $area = '2,517.0';

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
    public string $en = 'Réunion';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Réunion';

    /**
     * German name of the country
     */
    public string $de = 'Réunion';

    /**
     * Spanish name of the country
     */
    public string $es = 'Reunión';

    /**
     * Italian name of the country
     */
    public string $it = 'Riunione';

    /**
     * French name of the country
     */
    public string $fr = 'Réunion';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Reunião';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Réunion';

    /**
     * Danish name of the country
     */
    public string $da = 'Réunion';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Réunion';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Réunion';

    /**
     * Polish name of the country
     */
    public string $pl = 'Reunion';

    /**
     * Czech name of the country
     */
    public string $cs = 'Réunion';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Réunion';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Reunion';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Réunion';
}
