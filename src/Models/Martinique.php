<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Martinique extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MQ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MTQ';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '474';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MB';

    /**
     * Telephone country code
     */
    public string $callingCode = '596';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '596';

    /**
     * Capital city
     */
    public string $capital = 'Fort-de-France';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,100.0';

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
    public string $continent = 'NA';

    /**
     * English name of the country
     */
    public string $en = 'Martinique';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Martinique';

    /**
     * German name of the country
     */
    public string $de = 'Martinique';

    /**
     * Spanish name of the country
     */
    public string $es = 'Martinica';

    /**
     * Italian name of the country
     */
    public string $it = 'Martinica';

    /**
     * French name of the country
     */
    public string $fr = 'Martinique';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Martinica';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Martinique';

    /**
     * Danish name of the country
     */
    public string $da = 'Martinique';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Martinique';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Martinique';

    /**
     * Polish name of the country
     */
    public string $pl = 'Martynika';

    /**
     * Czech name of the country
     */
    public string $cs = 'Martinik';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Martinik';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Martinik';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Martinik';
}
