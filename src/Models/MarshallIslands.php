<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class MarshallIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MHL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '584';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'RM';

    /**
     * Telephone country code
     */
    public string $callingCode = '692';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '692';

    /**
     * Capital city
     */
    public string $capital = 'Majuro';

    /**
     * Total area in square kilometers
     */
    public string $area = '181.3';

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
    public string $continent = 'OC';

    /**
     * English name of the country
     */
    public string $en = 'Marshall Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Marshall-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Marshallinseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Marshall';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Marshall';

    /**
     * French name of the country
     */
    public string $fr = 'Iles Marshall';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Marshall';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Marshall Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'Marshalløerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Marshallöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Marshalløyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Marshalla';

    /**
     * Czech name of the country
     */
    public string $cs = 'Marshallovy ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Marshallove ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Marshallovi otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Maršalovi Otoci';
}
