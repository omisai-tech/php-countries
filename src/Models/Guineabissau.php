<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Guineabissau extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GW';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GNB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '624';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'PU';

    /**
     * Telephone country code
     */
    public string $callingCode = '245';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '245';

    /**
     * Capital city
     */
    public string $capital = 'Bissau';

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
    public string $en = 'Guinea-Bissau';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Bissau-Guinea';

    /**
     * German name of the country
     */
    public string $de = 'Guinea-Bissau';

    /**
     * Spanish name of the country
     */
    public string $es = 'Guinea-Bisáu';

    /**
     * Italian name of the country
     */
    public string $it = 'Guinea-Bissau';

    /**
     * French name of the country
     */
    public string $fr = 'Guinée-Bissau';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Guiné-Bissau';
}
