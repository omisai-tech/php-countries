<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Dominica extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'DM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'DMA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '212';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'DO';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-767';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-767';

    /**
     * Capital city
     */
    public string $capital = 'Roseau';

    /**
     * Total area in square kilometers
     */
    public string $area = '754.0';

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
    public string $en = 'Dominica';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Dominika';

    /**
     * German name of the country
     */
    public string $de = 'Dominica';

    /**
     * Spanish name of the country
     */
    public string $es = 'Dominica';

    /**
     * Italian name of the country
     */
    public string $it = 'Dominica';

    /**
     * French name of the country
     */
    public string $fr = 'Dominique';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Domínica';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Dominica';

    /**
     * Danish name of the country
     */
    public string $da = 'Dominica';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Dominica';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Dominica';

    /**
     * Polish name of the country
     */
    public string $pl = 'Dominika';

    /**
     * Czech name of the country
     */
    public string $cs = 'Dominika';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Dominika';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Dominika';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Dominika';
}
