<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Sweden extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SWE';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '752';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SW';

    /**
     * Telephone country code
     */
    public string $callingCode = '46';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '46';

    /**
     * Capital city
     */
    public string $capital = 'Stockholm';

    /**
     * Total area in square kilometers
     */
    public string $area = '449,964.0';

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
    public string $en = 'Sweden';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Svédország';

    /**
     * German name of the country
     */
    public string $de = 'Schweden';

    /**
     * Spanish name of the country
     */
    public string $es = 'Suecia';

    /**
     * Italian name of the country
     */
    public string $it = 'Svezia';

    /**
     * French name of the country
     */
    public string $fr = 'Suède';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Suécia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Sweden';

    /**
     * Danish name of the country
     */
    public string $da = 'Sverige';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Sverige';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Sverige';

    /**
     * Polish name of the country
     */
    public string $pl = 'Szwecja';

    /**
     * Czech name of the country
     */
    public string $cs = 'Švédsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Švédsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Švedska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Švedska';
}
