<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Togo extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TGO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '768';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TO';

    /**
     * Telephone country code
     */
    public string $callingCode = '228';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '228';

    /**
     * Capital city
     */
    public string $capital = 'Lome';

    /**
     * Total area in square kilometers
     */
    public string $area = '56,785.0';

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
    public string $en = 'Togo';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Menni';

    /**
     * German name of the country
     */
    public string $de = 'Gehen';

    /**
     * Spanish name of the country
     */
    public string $es = 'Ir';

    /**
     * Italian name of the country
     */
    public string $it = 'Andare';

    /**
     * French name of the country
     */
    public string $fr = 'Aller';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ir';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Togo';

    /**
     * Danish name of the country
     */
    public string $da = 'Togo';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Togo';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Togo';

    /**
     * Polish name of the country
     */
    public string $pl = 'Togo';

    /**
     * Czech name of the country
     */
    public string $cs = 'Togo';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Togo';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Togo';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Togo';
}
