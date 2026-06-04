<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Benin extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BJ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BEN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '204';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BN';

    /**
     * Telephone country code
     */
    public string $callingCode = '229';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '229';

    /**
     * Capital city
     */
    public string $capital = 'Porto-Novo';

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
    public string $en = 'Benin';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Benin';

    /**
     * German name of the country
     */
    public string $de = 'In Benin';

    /**
     * Spanish name of the country
     */
    public string $es = 'En Benín';

    /**
     * Italian name of the country
     */
    public string $it = 'Nel Benin';

    /**
     * French name of the country
     */
    public string $fr = 'Au Bénin';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Benim';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Benin';

    /**
     * Danish name of the country
     */
    public string $da = 'Benin';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Benin';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Benin';

    /**
     * Polish name of the country
     */
    public string $pl = 'Benin';

    /**
     * Czech name of the country
     */
    public string $cs = 'Benin';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Benin';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Benin';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Benin';
}
