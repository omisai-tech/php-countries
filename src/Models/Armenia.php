<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Armenia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ARM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '51';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AM';

    /**
     * Telephone country code
     */
    public string $callingCode = '374';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '374';

    /**
     * Capital city
     */
    public string $capital = 'Yerevan';

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
    public string $en = 'Armenia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Örményország';

    /**
     * German name of the country
     */
    public string $de = 'Armenien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Armenia';

    /**
     * Italian name of the country
     */
    public string $it = 'Armenia';

    /**
     * French name of the country
     */
    public string $fr = 'Arménie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Armênia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Armenia';

    /**
     * Danish name of the country
     */
    public string $da = 'Armenien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Armenien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Armenia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Armenia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Arménie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Arménsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Armenija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Armenija';
}
