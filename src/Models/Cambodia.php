<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Cambodia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'KHM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '116';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CB';

    /**
     * Telephone country code
     */
    public string $callingCode = '855';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '855';

    /**
     * Capital city
     */
    public string $capital = 'Phnom Penh';

    /**
     * Total area in square kilometers
     */
    public string $area = '181,040.0';

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
    public string $continent = 'AS';

    /**
     * English name of the country
     */
    public string $en = 'Cambodia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kambodzsa';

    /**
     * German name of the country
     */
    public string $de = 'Kambodscha';

    /**
     * Spanish name of the country
     */
    public string $es = 'Camboya';

    /**
     * Italian name of the country
     */
    public string $it = 'Cambogia';

    /**
     * French name of the country
     */
    public string $fr = 'Cambodge';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Camboja';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Cambodia';

    /**
     * Danish name of the country
     */
    public string $da = 'Cambodja';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Kambodja';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kambodsja';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kambodża';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kambodža';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kambodža';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kambodža';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kambodža';
}
