<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Honduras extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'HN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'HND';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '340';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'HO';

    /**
     * Telephone country code
     */
    public string $callingCode = '504';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '504';

    /**
     * Capital city
     */
    public string $capital = 'Tegucigalpa';

    /**
     * Total area in square kilometers
     */
    public string $area = '112,090.0';

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
    public string $en = 'Honduras';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Honduras';

    /**
     * German name of the country
     */
    public string $de = 'Honduras';

    /**
     * Spanish name of the country
     */
    public string $es = 'Honduras';

    /**
     * Italian name of the country
     */
    public string $it = 'Honduras';

    /**
     * French name of the country
     */
    public string $fr = 'Honduras';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Honduras';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Honduras';

    /**
     * Danish name of the country
     */
    public string $da = 'Honduras';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Honduras';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Honduras';

    /**
     * Polish name of the country
     */
    public string $pl = 'Honduras';

    /**
     * Czech name of the country
     */
    public string $cs = 'Honduras';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Honduras';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Honduras';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Honduras';
}
