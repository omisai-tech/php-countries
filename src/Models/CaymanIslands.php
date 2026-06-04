<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class CaymanIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CYM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '136';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CJ';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-345';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-345';

    /**
     * Capital city
     */
    public string $capital = 'George Town';

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
    public string $continent = 'NA';

    /**
     * English name of the country
     */
    public string $en = 'Cayman Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kajmán-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Cayman Inseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Caimán';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Cayman';

    /**
     * French name of the country
     */
    public string $fr = 'Îles Caïmans';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Cayman';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Cayman Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'Caymanøerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Caymanöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Caymanøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Kajmany';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kajmanské ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kajmanské ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kajmanski otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kajmanski otoci';
}
