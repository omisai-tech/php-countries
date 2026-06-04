<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Iran extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'IR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'IRN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '364';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'IR';

    /**
     * Telephone country code
     */
    public string $callingCode = '98';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '98';

    /**
     * Capital city
     */
    public string $capital = 'Tehran';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,648,000.0';

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
    public string $continent = 'AS';

    /**
     * English name of the country
     */
    public string $en = 'Iran';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Irán';

    /**
     * German name of the country
     */
    public string $de = 'Iran';

    /**
     * Spanish name of the country
     */
    public string $es = 'Irán';

    /**
     * Italian name of the country
     */
    public string $it = 'Iran';

    /**
     * French name of the country
     */
    public string $fr = "L'Iran";

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Irã';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Iran';

    /**
     * Danish name of the country
     */
    public string $da = 'Iran';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Iran';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Iran';

    /**
     * Polish name of the country
     */
    public string $pl = 'Iran';

    /**
     * Czech name of the country
     */
    public string $cs = 'Írán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Irán';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Iran';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Iran';
}
