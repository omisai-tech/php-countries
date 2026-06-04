<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Aland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AX';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ALA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '248';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = '';

    /**
     * Telephone country code
     */
    public string $callingCode = '358';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '358';

    /**
     * Capital city
     */
    public string $capital = 'Mariehamn';

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
    public string $en = 'Aland';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Åland';

    /**
     * German name of the country
     */
    public string $de = 'Ein Land';

    /**
     * Spanish name of the country
     */
    public string $es = 'Una tierra';

    /**
     * Italian name of the country
     */
    public string $it = 'Una terra';

    /**
     * French name of the country
     */
    public string $fr = 'Un terrain';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Uma terra';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Aland';

    /**
     * Danish name of the country
     */
    public string $da = 'Åland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Åland';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Åland';

    /**
     * Polish name of the country
     */
    public string $pl = 'Aland';

    /**
     * Czech name of the country
     */
    public string $cs = 'Åland';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Åland';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Åland';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Åland';
}
