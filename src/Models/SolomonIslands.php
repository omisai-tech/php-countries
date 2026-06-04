<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SolomonIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SB';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SLB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '90';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BP';

    /**
     * Telephone country code
     */
    public string $callingCode = '677';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '677';

    /**
     * Capital city
     */
    public string $capital = 'Honiara';

    /**
     * Total area in square kilometers
     */
    public string $area = '28,450.0';

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
    public string $continent = 'OC';

    /**
     * English name of the country
     */
    public string $en = 'Solomon Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Salamon-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Salomon-Inseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Salomón';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Salomone';

    /**
     * French name of the country
     */
    public string $fr = 'Les îles Salomon';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Salomão';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Solomon Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'Salomonøerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Salomonöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Salomonøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Salomona';

    /**
     * Czech name of the country
     */
    public string $cs = 'Šalamounovy ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Šalamúnove ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Salomonovi otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Salomonski Otoci';
}
