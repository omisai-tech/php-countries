<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class FalklandIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'FK';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'FLK';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '238';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'FK';

    /**
     * Telephone country code
     */
    public string $callingCode = '500';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '500';

    /**
     * Capital city
     */
    public string $capital = 'Stanley';

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
    public string $en = 'Falkland Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Falkland-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Falkland Inseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Malvinas';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Falkland';

    /**
     * French name of the country
     */
    public string $fr = 'les îles Falkland';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Malvinas';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Falkland Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'Falklandsøerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Falklandsöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Falklandsøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Falklandy';

    /**
     * Czech name of the country
     */
    public string $cs = 'Falklandské ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Falklandské ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Falklandski otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Falklandski otoci';
}
