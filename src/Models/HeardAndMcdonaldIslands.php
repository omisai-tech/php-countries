<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class HeardAndMcdonaldIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'HM';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'HMD';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '334';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'HM';

    /**
     * Telephone country code
     */
    public string $callingCode = '672';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '672';

    /**
     * Capital city
     */
    public string $capital = '';

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
    public string $continent = 'AN';

    /**
     * English name of the country
     */
    public string $en = 'Heard and McDonald Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Heard és McDonald-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Heard- und McDonald-Inseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Heard y McDonald';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Heard e McDonald';

    /**
     * French name of the country
     */
    public string $fr = 'Îles Heard et McDonald';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Heard e McDonald';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Heard and McDonald Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'Heard- og McDonaldøerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Heard- och McDonaldöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Heard- og McDonaldøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Heard i McDonalda';

    /**
     * Czech name of the country
     */
    public string $cs = 'Heardovy a McDonaldovy ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Heardove a McDonaldove ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Heardovi in ​​McDonaldovi otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Otoci Heard i McDonald';
}
