<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Latvia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'LV';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'LVA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '428';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'LG';

    /**
     * Telephone country code
     */
    public string $callingCode = '371';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '371';

    /**
     * Capital city
     */
    public string $capital = 'Riga';

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
    public string $en = 'Latvia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Lettország';

    /**
     * German name of the country
     */
    public string $de = 'Lettland';

    /**
     * Spanish name of the country
     */
    public string $es = 'Letonia';

    /**
     * Italian name of the country
     */
    public string $it = 'Lettonia';

    /**
     * French name of the country
     */
    public string $fr = 'Lettonie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Letônia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Latvia';

    /**
     * Danish name of the country
     */
    public string $da = 'Letland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Lettland';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Latvia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Łotwa';

    /**
     * Czech name of the country
     */
    public string $cs = 'Lotyšsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Lotyšsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Latvija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Latvija';
}
