<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Zambia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ZM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ZMB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '894';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ZA';

    /**
     * Telephone country code
     */
    public string $callingCode = '260';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '260';

    /**
     * Capital city
     */
    public string $capital = 'Lusaka';

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
    public string $en = 'Zambia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Zambia';

    /**
     * German name of the country
     */
    public string $de = 'Sambia';

    /**
     * Spanish name of the country
     */
    public string $es = 'Zambia';

    /**
     * Italian name of the country
     */
    public string $it = 'Zambia';

    /**
     * French name of the country
     */
    public string $fr = 'Zambie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Zâmbia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Zambia';

    /**
     * Danish name of the country
     */
    public string $da = 'Zambia';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Zambia';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Zambia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Zambia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Zambie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Zambia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Zambija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Zambija';
}
