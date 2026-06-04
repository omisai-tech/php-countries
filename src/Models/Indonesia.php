<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Indonesia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ID';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'IDN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '360';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'ID';

    /**
     * Telephone country code
     */
    public string $callingCode = '62';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '62';

    /**
     * Capital city
     */
    public string $capital = 'Jakarta';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,919,440.0';

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
    public string $en = 'Indonesia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Indonézia';

    /**
     * German name of the country
     */
    public string $de = 'Indonesien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Indonesia';

    /**
     * Italian name of the country
     */
    public string $it = 'Indonesia';

    /**
     * French name of the country
     */
    public string $fr = 'Indonésie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Indonésia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Indonesia';

    /**
     * Danish name of the country
     */
    public string $da = 'Indonesien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Indonesien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Indonesia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Indonezja';

    /**
     * Czech name of the country
     */
    public string $cs = 'Indonésie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Indonézia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Indonezija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Indonezija';
}
