<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Ireland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'IE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'IRL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '372';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'EI';

    /**
     * Telephone country code
     */
    public string $callingCode = '353';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '353';

    /**
     * Capital city
     */
    public string $capital = 'Dublin';

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
    public string $en = 'Ireland';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Írország';

    /**
     * German name of the country
     */
    public string $de = 'Irland';

    /**
     * Spanish name of the country
     */
    public string $es = 'Irlanda';

    /**
     * Italian name of the country
     */
    public string $it = 'Irlanda';

    /**
     * French name of the country
     */
    public string $fr = 'Irlande';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Irlanda';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Ireland';

    /**
     * Danish name of the country
     */
    public string $da = 'Irland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Irland';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Irland';

    /**
     * Polish name of the country
     */
    public string $pl = 'Irlandia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Irsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Írsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Irska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Irska';
}
