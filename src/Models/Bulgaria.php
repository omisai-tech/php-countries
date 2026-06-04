<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Bulgaria extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BGR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '100';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BU';

    /**
     * Telephone country code
     */
    public string $callingCode = '359';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '359';

    /**
     * Capital city
     */
    public string $capital = 'Sofia';

    /**
     * Total area in square kilometers
     */
    public string $area = '110,910.0';

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
    public string $en = 'Bulgaria';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Bulgária';

    /**
     * German name of the country
     */
    public string $de = 'Bulgarien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Bulgaria';

    /**
     * Italian name of the country
     */
    public string $it = 'Bulgaria';

    /**
     * French name of the country
     */
    public string $fr = 'Bulgarie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bulgária';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Bulgaria';

    /**
     * Danish name of the country
     */
    public string $da = 'Bulgarien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Bulgarien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Bulgaria';

    /**
     * Polish name of the country
     */
    public string $pl = 'Bułgaria';

    /**
     * Czech name of the country
     */
    public string $cs = 'Bulharsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Bulharsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Bolgarija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Bugarska';
}
