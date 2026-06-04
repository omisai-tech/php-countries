<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class FrenchGuiana extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GF';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GUF';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '254';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'FG';

    /**
     * Telephone country code
     */
    public string $callingCode = '594';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '594';

    /**
     * Capital city
     */
    public string $capital = 'Cayenne';

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
    public string $continent = 'SA';

    /**
     * English name of the country
     */
    public string $en = 'French Guiana';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Francia Guyana';

    /**
     * German name of the country
     */
    public string $de = 'Französisch-Guayana';

    /**
     * Spanish name of the country
     */
    public string $es = 'Guayana Francesa';

    /**
     * Italian name of the country
     */
    public string $it = 'Guiana francese';

    /**
     * French name of the country
     */
    public string $fr = 'Guyane Française';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Guiana Francesa';

    /**
     * Dutch name of the country
     */
    public string $nl = 'French Guiana';

    /**
     * Danish name of the country
     */
    public string $da = 'Fransk Guyana';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Franska Guyana';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Fransk Guyana';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gujana Francuska';

    /**
     * Czech name of the country
     */
    public string $cs = 'Francouzská Guyana';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Francúzska Guyana';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Francoska Gvajana';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Francuska Gvajana';
}
