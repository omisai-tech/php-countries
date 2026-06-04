<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class TheNetherlands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'NL';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'NLD';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '528';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'NL';

    /**
     * Telephone country code
     */
    public string $callingCode = '31';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '31';

    /**
     * Capital city
     */
    public string $capital = 'Amsterdam';

    /**
     * Total area in square kilometers
     */
    public string $area = '41,526.0';

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
    public string $en = 'The Netherlands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Hollandia';

    /**
     * German name of the country
     */
    public string $de = 'Niederlande';

    /**
     * Spanish name of the country
     */
    public string $es = 'Países Bajos';

    /**
     * Italian name of the country
     */
    public string $it = 'Olanda';

    /**
     * French name of the country
     */
    public string $fr = 'Pays-Bas';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Os Países Baixos';

    /**
     * Dutch name of the country
     */
    public string $nl = 'The Netherlands';

    /**
     * Danish name of the country
     */
    public string $da = 'Holland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Nederländerna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Nederland';

    /**
     * Polish name of the country
     */
    public string $pl = 'Holandia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Nizozemsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Holandsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Nizozemska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Nizozemska';
}
