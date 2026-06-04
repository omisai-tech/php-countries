<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class India extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'IN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'IND';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '356';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'IN';

    /**
     * Telephone country code
     */
    public string $callingCode = '91';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '91';

    /**
     * Capital city
     */
    public string $capital = 'New Delhi';

    /**
     * Total area in square kilometers
     */
    public string $area = '3,287,590.0';

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
    public string $en = 'India';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'India';

    /**
     * German name of the country
     */
    public string $de = 'Indien';

    /**
     * Spanish name of the country
     */
    public string $es = 'India';

    /**
     * Italian name of the country
     */
    public string $it = 'India';

    /**
     * French name of the country
     */
    public string $fr = 'Inde';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Índia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'India';

    /**
     * Danish name of the country
     */
    public string $da = 'Indien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Indien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'India';

    /**
     * Polish name of the country
     */
    public string $pl = 'Indie';

    /**
     * Czech name of the country
     */
    public string $cs = 'Indie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'India';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Indija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Indija';
}
