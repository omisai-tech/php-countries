<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Guatemala extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GT';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GTM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '320';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GT';

    /**
     * Telephone country code
     */
    public string $callingCode = '502';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '502';

    /**
     * Capital city
     */
    public string $capital = 'Guatemala City';

    /**
     * Total area in square kilometers
     */
    public string $area = '108,890.0';

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
    public string $en = 'Guatemala';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Guatemala';

    /**
     * German name of the country
     */
    public string $de = 'Guatemala';

    /**
     * Spanish name of the country
     */
    public string $es = 'Guatemala';

    /**
     * Italian name of the country
     */
    public string $it = 'Guatemala';

    /**
     * French name of the country
     */
    public string $fr = 'Guatemala';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Guatemala';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Guatemala';

    /**
     * Danish name of the country
     */
    public string $da = 'Guatemala';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Guatemala';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Guatemala';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gwatemala';

    /**
     * Czech name of the country
     */
    public string $cs = 'Guatemala';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Guatemala';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Gvatemala';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Gvatemala';
}
