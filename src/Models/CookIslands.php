<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class CookIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CK';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'COK';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '184';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CW';

    /**
     * Telephone country code
     */
    public string $callingCode = '682';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '682';

    /**
     * Capital city
     */
    public string $capital = 'Avarua';

    /**
     * Total area in square kilometers
     */
    public string $area = '240.0';

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
    public string $en = 'Cook Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Cook-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Cookinseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Cook';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Cook';

    /**
     * French name of the country
     */
    public string $fr = 'les Îles Cook';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Cook';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Cook Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'Cookøerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Cooköarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Cookøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Cooka';

    /**
     * Czech name of the country
     */
    public string $cs = 'Cookovy ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Cookove ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Cookovi otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Cookovi otoci';
}
