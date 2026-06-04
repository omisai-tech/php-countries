<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Somalia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SOM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '706';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SO';

    /**
     * Telephone country code
     */
    public string $callingCode = '252';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '252';

    /**
     * Capital city
     */
    public string $capital = 'Mogadishu';

    /**
     * Total area in square kilometers
     */
    public string $area = '637,657.0';

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
    public string $en = 'Somalia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szomália';

    /**
     * German name of the country
     */
    public string $de = 'Somalia';

    /**
     * Spanish name of the country
     */
    public string $es = 'Somalia';

    /**
     * Italian name of the country
     */
    public string $it = 'Somalia';

    /**
     * French name of the country
     */
    public string $fr = 'Somalie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Somália';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Somalia';

    /**
     * Danish name of the country
     */
    public string $da = 'Somalia';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Somalia';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Somalia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Somali';

    /**
     * Czech name of the country
     */
    public string $cs = 'Somálsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Somálsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Somalija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Somalija';
}
