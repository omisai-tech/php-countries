<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Kuwait extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'KWT';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '414';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'KU';

    /**
     * Telephone country code
     */
    public string $callingCode = '965';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '965';

    /**
     * Capital city
     */
    public string $capital = 'Kuwait City';

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
    public string $en = 'Kuwait';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kuvait';

    /**
     * German name of the country
     */
    public string $de = 'Kuwait';

    /**
     * Spanish name of the country
     */
    public string $es = 'Kuwait';

    /**
     * Italian name of the country
     */
    public string $it = 'Kuwait';

    /**
     * French name of the country
     */
    public string $fr = 'Koweit';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Kuwait';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Kuwait';

    /**
     * Danish name of the country
     */
    public string $da = 'Kuwait';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Kuwait';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kuwait';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kuwejt';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kuvajt';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kuvajt';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kuvajt';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kuvajt';
}
