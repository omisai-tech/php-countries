<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class TheGambia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GMB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '270';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GA';

    /**
     * Telephone country code
     */
    public string $callingCode = '220';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '220';

    /**
     * Capital city
     */
    public string $capital = 'Banjul';

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
    public string $en = 'The Gambia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Gambia';

    /**
     * German name of the country
     */
    public string $de = 'Gambia';

    /**
     * Spanish name of the country
     */
    public string $es = 'Gambia';

    /**
     * Italian name of the country
     */
    public string $it = 'Gambia';

    /**
     * French name of the country
     */
    public string $fr = 'Gambie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'A Gâmbia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'The Gambia';

    /**
     * Danish name of the country
     */
    public string $da = 'Gambia';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Gambia';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Gambia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gambia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Gambie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Gambia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Gambija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Gambija';
}
