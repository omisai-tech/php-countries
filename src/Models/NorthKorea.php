<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class NorthKorea extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KP';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PRK';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '408';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'KN';

    /**
     * Telephone country code
     */
    public string $callingCode = '850';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '850';

    /**
     * Capital city
     */
    public string $capital = 'Pyongyang';

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
    public string $en = 'North Korea';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Észak Kórea';

    /**
     * German name of the country
     */
    public string $de = 'Nord Korea';

    /**
     * Spanish name of the country
     */
    public string $es = 'Corea del Norte';

    /**
     * Italian name of the country
     */
    public string $it = 'Corea del nord';

    /**
     * French name of the country
     */
    public string $fr = 'Corée du Nord';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Coréia do Norte';

    /**
     * Dutch name of the country
     */
    public string $nl = 'North Korea';

    /**
     * Danish name of the country
     */
    public string $da = 'Nordkorea';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Nordkorea';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Nord-Korea';

    /**
     * Polish name of the country
     */
    public string $pl = 'Korea Północna';

    /**
     * Czech name of the country
     */
    public string $cs = 'Severní Korea';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Severná Kórea';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Severna Koreja';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Sjeverna Koreja';
}
