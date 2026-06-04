<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Austria extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AT';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'AUT';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '40';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AU';

    /**
     * Telephone country code
     */
    public string $callingCode = '43';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '43';

    /**
     * Capital city
     */
    public string $capital = 'Vienna';

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
    public string $en = 'Austria';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Ausztria';

    /**
     * German name of the country
     */
    public string $de = 'Österreich';

    /**
     * Spanish name of the country
     */
    public string $es = 'Austria';

    /**
     * Italian name of the country
     */
    public string $it = 'Austria';

    /**
     * French name of the country
     */
    public string $fr = "L'Autriche";

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Áustria';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Austria';

    /**
     * Danish name of the country
     */
    public string $da = 'Østrig';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Österrike';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Østerrike';

    /**
     * Polish name of the country
     */
    public string $pl = 'Austria';

    /**
     * Czech name of the country
     */
    public string $cs = 'Rakousko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Rakúsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Avstrija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Austrija';
}
