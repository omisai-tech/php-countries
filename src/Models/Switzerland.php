<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Switzerland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CHE';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '756';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SZ';

    /**
     * Telephone country code
     */
    public string $callingCode = '41';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '41';

    /**
     * Capital city
     */
    public string $capital = 'Bern';

    /**
     * Total area in square kilometers
     */
    public string $area = '41,290.0';

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
    public string $en = 'Switzerland';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Svájc';

    /**
     * German name of the country
     */
    public string $de = 'Schweiz';

    /**
     * Spanish name of the country
     */
    public string $es = 'Suiza';

    /**
     * Italian name of the country
     */
    public string $it = 'Svizzera';

    /**
     * French name of the country
     */
    public string $fr = 'Suisse';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Suíça';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Switzerland';

    /**
     * Danish name of the country
     */
    public string $da = 'Schweiz';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Schweiz';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Sveits';

    /**
     * Polish name of the country
     */
    public string $pl = 'Szwajcaria';

    /**
     * Czech name of the country
     */
    public string $cs = 'Švýcarsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Švajčiarsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Švica';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Švicarska';
}
