<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Kosovo extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'XK';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'XKX';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '0';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'KV';

    /**
     * Telephone country code
     */
    public string $callingCode = '#HI�NYZIK';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '#HI�NYZIK';

    /**
     * Capital city
     */
    public string $capital = 'Pristina';

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
    public string $en = 'Kosovo';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Koszovó';

    /**
     * German name of the country
     */
    public string $de = 'Kosovo';

    /**
     * Spanish name of the country
     */
    public string $es = 'Kosovo';

    /**
     * Italian name of the country
     */
    public string $it = 'Kosovo';

    /**
     * French name of the country
     */
    public string $fr = 'Kosovo';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Kosovo';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Kosovo';

    /**
     * Danish name of the country
     */
    public string $da = 'Kosovo';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Kosovo';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kosovo';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kosowo';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kosovo';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kosovo';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kosovo';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kosovo';
}
