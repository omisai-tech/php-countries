<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Oman extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'OM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'OMN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '512';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MU';

    /**
     * Telephone country code
     */
    public string $callingCode = '968';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '968';

    /**
     * Capital city
     */
    public string $capital = 'Muscat';

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
    public string $en = 'Oman';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Omán';

    /**
     * German name of the country
     */
    public string $de = 'Oman';

    /**
     * Spanish name of the country
     */
    public string $es = 'Omán';

    /**
     * Italian name of the country
     */
    public string $it = 'Oman';

    /**
     * French name of the country
     */
    public string $fr = 'Oman';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Omã';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Oman';

    /**
     * Danish name of the country
     */
    public string $da = 'Oman';

    /**
     * Swedish name of the country
     */
    public string $sv = 'oman';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Oman';

    /**
     * Polish name of the country
     */
    public string $pl = 'Oman';

    /**
     * Czech name of the country
     */
    public string $cs = 'Omán';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Omán';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Oman';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Oman';
}
