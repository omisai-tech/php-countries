<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Belarus extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BLR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '112';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BO';

    /**
     * Telephone country code
     */
    public string $callingCode = '375';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '375';

    /**
     * Capital city
     */
    public string $capital = 'Minsk';

    /**
     * Total area in square kilometers
     */
    public string $area = '207,600.0';

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
    public string $en = 'Belarus';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Fehéroroszország';

    /**
     * German name of the country
     */
    public string $de = 'Weißrussland';

    /**
     * Spanish name of the country
     */
    public string $es = 'Bielorrusia';

    /**
     * Italian name of the country
     */
    public string $it = 'Bielorussia';

    /**
     * French name of the country
     */
    public string $fr = 'Biélorussie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bielorrússia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Belarus';

    /**
     * Danish name of the country
     */
    public string $da = 'Hviderusland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Belarus';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Hviterussland';

    /**
     * Polish name of the country
     */
    public string $pl = 'Białoruś';

    /**
     * Czech name of the country
     */
    public string $cs = 'Bělorusko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Bielorusko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Belorusija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Bjelorusija';
}
