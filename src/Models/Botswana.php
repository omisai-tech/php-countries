<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Botswana extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BWA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '72';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BC';

    /**
     * Telephone country code
     */
    public string $callingCode = '267';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '267';

    /**
     * Capital city
     */
    public string $capital = 'Gaborone';

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
    public string $en = 'Botswana';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Botswana';

    /**
     * German name of the country
     */
    public string $de = 'Botswana';

    /**
     * Spanish name of the country
     */
    public string $es = 'Botsuana';

    /**
     * Italian name of the country
     */
    public string $it = 'Botswana';

    /**
     * French name of the country
     */
    public string $fr = 'Botswana';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Botsuana';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Botswana';

    /**
     * Danish name of the country
     */
    public string $da = 'Botswana';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Botswana';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Botswana';

    /**
     * Polish name of the country
     */
    public string $pl = 'Botswana';

    /**
     * Czech name of the country
     */
    public string $cs = 'Botswana';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Botswana';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Bocvana';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Bocvana';
}
