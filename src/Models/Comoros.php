<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Comoros extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'COM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '174';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CN';

    /**
     * Telephone country code
     */
    public string $callingCode = '269';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '269';

    /**
     * Capital city
     */
    public string $capital = 'Moroni';

    /**
     * Total area in square kilometers
     */
    public string $area = '2,170.0';

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
    public string $en = 'Comoros';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Comore-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Komoren-Inseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Comoras';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Comore';

    /**
     * French name of the country
     */
    public string $fr = 'Îles Comores';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Comores';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Comoros';

    /**
     * Danish name of the country
     */
    public string $da = 'Comorerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Komorerna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Komorene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Komory';

    /**
     * Czech name of the country
     */
    public string $cs = 'Komory';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Komory';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Komori';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Komori';
}
