<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Seychelles extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SC';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SYC';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '690';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SE';

    /**
     * Telephone country code
     */
    public string $callingCode = '248';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '248';

    /**
     * Capital city
     */
    public string $capital = 'Victoria';

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
    public string $en = 'Seychelles';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Seychelle-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Seychellen-Inseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Seychelles';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Seychelles';

    /**
     * French name of the country
     */
    public string $fr = 'Îles Seychelles';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Seicheles';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Seychelles';

    /**
     * Danish name of the country
     */
    public string $da = 'Seychellerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Seychellerna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Seychellene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Seszele';

    /**
     * Czech name of the country
     */
    public string $cs = 'Seychely';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Seychely';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Sejšeli';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Sejšeli';
}
