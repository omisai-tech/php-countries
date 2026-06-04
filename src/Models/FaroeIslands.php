<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class FaroeIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'FO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'FRO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '234';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'FO';

    /**
     * Telephone country code
     */
    public string $callingCode = '298';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '298';

    /**
     * Capital city
     */
    public string $capital = 'Torshavn';

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
    public string $en = 'Faroe Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Faroe Szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Färöer Inseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Faroe';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Faroe';

    /**
     * French name of the country
     */
    public string $fr = 'Îles Féroé';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'ilhas Faroe';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Faroe Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'Færøerne';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Färöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Færøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Owcze';

    /**
     * Czech name of the country
     */
    public string $cs = 'Faerské ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Faerské ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Ferski otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Farski otoci';
}
