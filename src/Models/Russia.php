<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Russia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'RU';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'RUS';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '643';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'RS';

    /**
     * Telephone country code
     */
    public string $callingCode = '7';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '7';

    /**
     * Capital city
     */
    public string $capital = 'Moscow';

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
    public string $continent = 'EU';

    /**
     * English name of the country
     */
    public string $en = 'Russia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Oroszország';

    /**
     * German name of the country
     */
    public string $de = 'Russland';

    /**
     * Spanish name of the country
     */
    public string $es = 'Rusia';

    /**
     * Italian name of the country
     */
    public string $it = 'Russia';

    /**
     * French name of the country
     */
    public string $fr = 'Russie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Rússia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Russia';

    /**
     * Danish name of the country
     */
    public string $da = 'Rusland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Ryssland';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Russland';

    /**
     * Polish name of the country
     */
    public string $pl = 'Rosja';

    /**
     * Czech name of the country
     */
    public string $cs = 'Rusko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Rusko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Rusija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Rusija';
}
