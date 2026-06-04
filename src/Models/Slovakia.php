<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Slovakia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SK';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SVK';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '703';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'LO';

    /**
     * Telephone country code
     */
    public string $callingCode = '421';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '421';

    /**
     * Capital city
     */
    public string $capital = 'Bratislava';

    /**
     * Total area in square kilometers
     */
    public string $area = '48,845.0';

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
    public string $en = 'Slovakia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szlovákia';

    /**
     * German name of the country
     */
    public string $de = 'Slowakei';

    /**
     * Spanish name of the country
     */
    public string $es = 'Eslovaquia';

    /**
     * Italian name of the country
     */
    public string $it = 'Slovacchia';

    /**
     * French name of the country
     */
    public string $fr = 'Slovaquie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Eslováquia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Slovakia';

    /**
     * Danish name of the country
     */
    public string $da = 'Slovakiet';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Slovakien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Slovakia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Słowacja';

    /**
     * Czech name of the country
     */
    public string $cs = 'Slovensko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Slovensko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Slovaška';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Slovačka';
}
