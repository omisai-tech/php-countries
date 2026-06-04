<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Niger extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NER';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '562';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NG';

    /**
     * Telephone country code
     */
    public string $callingCode = '227';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '227';

    /**
     * Capital city
     */
    public string $capital = 'Niamey';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,267,000.0';

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
    public string $en = 'Niger';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Niger';

    /**
     * German name of the country
     */
    public string $de = 'Niger';

    /**
     * Spanish name of the country
     */
    public string $es = 'Níger';

    /**
     * Italian name of the country
     */
    public string $it = 'Niger';

    /**
     * French name of the country
     */
    public string $fr = 'Niger';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Níger';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Niger';

    /**
     * Danish name of the country
     */
    public string $da = 'Niger';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Niger';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Niger';

    /**
     * Polish name of the country
     */
    public string $pl = 'Niger';

    /**
     * Czech name of the country
     */
    public string $cs = 'Niger';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Niger';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Niger';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Niger';
}
