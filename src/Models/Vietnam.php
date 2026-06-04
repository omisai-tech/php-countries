<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Vietnam extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'VN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'VNM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '704';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'VM';

    /**
     * Telephone country code
     */
    public string $callingCode = '84';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '84';

    /**
     * Capital city
     */
    public string $capital = 'Hanoi';

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
    public string $en = 'Vietnam';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Vietnam';

    /**
     * German name of the country
     */
    public string $de = 'Vietnam';

    /**
     * Spanish name of the country
     */
    public string $es = 'Vietnam';

    /**
     * Italian name of the country
     */
    public string $it = 'Vietnam';

    /**
     * French name of the country
     */
    public string $fr = 'Viêt Nam';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Vietnã';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Vietnam';

    /**
     * Danish name of the country
     */
    public string $da = 'Vietnam';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Vietnam';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Vietnam';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wietnam';

    /**
     * Czech name of the country
     */
    public string $cs = 'Vietnam';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Vietnam';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Vietnam';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Vijetnam';
}
