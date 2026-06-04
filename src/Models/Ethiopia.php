<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Ethiopia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ET';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ETH';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '231';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ET';

    /**
     * Telephone country code
     */
    public string $callingCode = '251';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '251';

    /**
     * Capital city
     */
    public string $capital = 'Addis Ababa';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,127,127.0';

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
    public string $en = 'Ethiopia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Etiópia';

    /**
     * German name of the country
     */
    public string $de = 'Äthiopien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Etiopía';

    /**
     * Italian name of the country
     */
    public string $it = 'Etiopia';

    /**
     * French name of the country
     */
    public string $fr = 'Ethiopie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Etiópia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Ethiopia';

    /**
     * Danish name of the country
     */
    public string $da = 'Etiopien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Etiopien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Etiopia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Etiopia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Etiopie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Etiópia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Etiopija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Etiopija';
}
