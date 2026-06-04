<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Senegal extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SEN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '686';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SG';

    /**
     * Telephone country code
     */
    public string $callingCode = '221';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '221';

    /**
     * Capital city
     */
    public string $capital = 'Dakar';

    /**
     * Total area in square kilometers
     */
    public string $area = '196,190.0';

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
    public string $en = 'Senegal';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szenegál';

    /**
     * German name of the country
     */
    public string $de = 'Senegal';

    /**
     * Spanish name of the country
     */
    public string $es = 'Senegal';

    /**
     * Italian name of the country
     */
    public string $it = 'Senegal';

    /**
     * French name of the country
     */
    public string $fr = 'Sénégal';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Senegal';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Senegal';

    /**
     * Danish name of the country
     */
    public string $da = 'Senegal';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Senegal';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Senegal';

    /**
     * Polish name of the country
     */
    public string $pl = 'Senegal';

    /**
     * Czech name of the country
     */
    public string $cs = 'Senegal';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Senegal';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Senegal';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Senegal';
}
