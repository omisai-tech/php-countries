<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Djibouti extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'DJ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'DJI';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '262';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'DJ';

    /**
     * Telephone country code
     */
    public string $callingCode = '253';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '253';

    /**
     * Capital city
     */
    public string $capital = 'Djibouti';

    /**
     * Total area in square kilometers
     */
    public string $area = '23,000.0';

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
    public string $continent = 'AF';

    /**
     * English name of the country
     */
    public string $en = 'Djibouti';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Dzsibuti';

    /**
     * German name of the country
     */
    public string $de = 'Dschibuti';

    /**
     * Spanish name of the country
     */
    public string $es = 'Yibuti';

    /**
     * Italian name of the country
     */
    public string $it = 'Gibuti';

    /**
     * French name of the country
     */
    public string $fr = 'Djibouti';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Djibuti';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Djibouti';

    /**
     * Danish name of the country
     */
    public string $da = 'Djibouti';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Djibouti';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Djibouti';

    /**
     * Polish name of the country
     */
    public string $pl = 'Dżibuti';

    /**
     * Czech name of the country
     */
    public string $cs = 'Džibutsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Džibutsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Džibuti';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Džibuti';
}
