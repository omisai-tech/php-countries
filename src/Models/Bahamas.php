<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Bahamas extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BS';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BHS';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '44';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BF';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-242';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-242';

    /**
     * Capital city
     */
    public string $capital = 'Nassau';

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
    public string $en = 'Bahamas';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Bahamák';

    /**
     * German name of the country
     */
    public string $de = 'Bahamas';

    /**
     * Spanish name of the country
     */
    public string $es = 'bahamas';

    /**
     * Italian name of the country
     */
    public string $it = 'Bahamas';

    /**
     * French name of the country
     */
    public string $fr = 'Bahamas';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bahamas';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Bahamas';

    /**
     * Danish name of the country
     */
    public string $da = 'Bahamas';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Bahamas';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Bahamas';

    /**
     * Polish name of the country
     */
    public string $pl = 'Bahamy';

    /**
     * Czech name of the country
     */
    public string $cs = 'Bahamy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Bahamy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Bahami';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Bahami';
}
