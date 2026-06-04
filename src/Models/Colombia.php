<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Colombia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'COL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '170';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CO';

    /**
     * Telephone country code
     */
    public string $callingCode = '57';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '57';

    /**
     * Capital city
     */
    public string $capital = 'Bogota';

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
    public string $en = 'Colombia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Colombia';

    /**
     * German name of the country
     */
    public string $de = 'Kolumbien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Colombia';

    /**
     * Italian name of the country
     */
    public string $it = 'Colombia';

    /**
     * French name of the country
     */
    public string $fr = 'Colombie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Colômbia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Colombia';

    /**
     * Danish name of the country
     */
    public string $da = 'Colombia';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Colombia';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Colombia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Kolumbia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Kolumbie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Kolumbia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Kolumbija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Kolumbija';
}
