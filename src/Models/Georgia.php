<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Georgia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GEO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '268';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GG';

    /**
     * Telephone country code
     */
    public string $callingCode = '995';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '995';

    /**
     * Capital city
     */
    public string $capital = 'Tbilisi';

    /**
     * Total area in square kilometers
     */
    public string $area = '69,700.0';

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
    public string $en = 'Georgia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Grúzia';

    /**
     * German name of the country
     */
    public string $de = 'Georgia';

    /**
     * Spanish name of the country
     */
    public string $es = 'Georgia';

    /**
     * Italian name of the country
     */
    public string $it = 'Georgia';

    /**
     * French name of the country
     */
    public string $fr = 'Géorgie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Geórgia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Georgia';

    /**
     * Danish name of the country
     */
    public string $da = 'Georgien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Georgien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Georgia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gruzja';

    /**
     * Czech name of the country
     */
    public string $cs = 'Gruzie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Gruzínsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Gruzija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Gruzija';
}
