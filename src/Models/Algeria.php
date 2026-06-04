<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Algeria extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'DZ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'DZA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '12';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AG';

    /**
     * Telephone country code
     */
    public string $callingCode = '213';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '213';

    /**
     * Capital city
     */
    public string $capital = 'Algiers';

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
    public string $en = 'Algeria';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Algéria';

    /**
     * German name of the country
     */
    public string $de = 'Algerien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Argelia';

    /**
     * Italian name of the country
     */
    public string $it = 'Algeria';

    /**
     * French name of the country
     */
    public string $fr = 'Algérie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Argélia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Algeria';

    /**
     * Danish name of the country
     */
    public string $da = 'Algeriet';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Algeriet';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Algerie';

    /**
     * Polish name of the country
     */
    public string $pl = 'Algieria';

    /**
     * Czech name of the country
     */
    public string $cs = 'Alžírsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Alžírsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Alžirija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Alžir';
}
