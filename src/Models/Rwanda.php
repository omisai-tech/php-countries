<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Rwanda extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'RW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'RWA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '646';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'RW';

    /**
     * Telephone country code
     */
    public string $callingCode = '250';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '250';

    /**
     * Capital city
     */
    public string $capital = 'Kigali';

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
    public string $en = 'Rwanda';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Ruanda';

    /**
     * German name of the country
     */
    public string $de = 'Ruanda';

    /**
     * Spanish name of the country
     */
    public string $es = 'Ruanda';

    /**
     * Italian name of the country
     */
    public string $it = 'Ruanda';

    /**
     * French name of the country
     */
    public string $fr = 'Rwanda';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ruanda';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Rwanda';

    /**
     * Danish name of the country
     */
    public string $da = 'Rwanda';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Rwanda';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Rwanda';

    /**
     * Polish name of the country
     */
    public string $pl = 'Rwanda';

    /**
     * Czech name of the country
     */
    public string $cs = 'Rwanda';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Rwanda';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Ruanda';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Ruanda';
}
