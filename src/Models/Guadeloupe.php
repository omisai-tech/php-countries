<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Guadeloupe extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GP';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GLP';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '312';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GP';

    /**
     * Telephone country code
     */
    public string $callingCode = '590';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '590';

    /**
     * Capital city
     */
    public string $capital = 'Basse-Terre';

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
    public string $en = 'Guadeloupe';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Guadeloupe';

    /**
     * German name of the country
     */
    public string $de = 'Guadeloupe';

    /**
     * Spanish name of the country
     */
    public string $es = 'Guadalupe';

    /**
     * Italian name of the country
     */
    public string $it = 'Guadalupa';

    /**
     * French name of the country
     */
    public string $fr = 'Guadeloupe';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Guadalupe';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Guadeloupe';

    /**
     * Danish name of the country
     */
    public string $da = 'Guadeloupe';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Guadeloupe';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Guadeloupe';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gwadelupa';

    /**
     * Czech name of the country
     */
    public string $cs = 'Guadeloupe';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Guadeloupe';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Gvadalupe';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Gvadalupa';
}
