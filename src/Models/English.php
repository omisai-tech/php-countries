<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class English extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ISO 3166-1 alpha-2 code';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ISO 3166-1 alpha-3 code';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = 'ISO 3166-1 numeric code';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'FIPS code';

    /**
     * Telephone country code
     */
    public string $callingCode = 'Telephone country code';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = 'Telephone country code';

    /**
     * Capital city
     */
    public string $capital = 'Capital city';

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
    public string $continent = 'Continent';

    /**
     * English name of the country
     */
    public string $en = 'English';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Hungarian';

    /**
     * German name of the country
     */
    public string $de = 'German';

    /**
     * Spanish name of the country
     */
    public string $es = 'Spanish';

    /**
     * Italian name of the country
     */
    public string $it = 'Italian';

    /**
     * French name of the country
     */
    public string $fr = 'French';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Portuguese';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Dutch';

    /**
     * Danish name of the country
     */
    public string $da = 'Danish';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Swedish';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Norwegian';

    /**
     * Polish name of the country
     */
    public string $pl = 'Polish';

    /**
     * Czech name of the country
     */
    public string $cs = 'Czech';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Slovak';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Slovenian';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Croatian';
}
