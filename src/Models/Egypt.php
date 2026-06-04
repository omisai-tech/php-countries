<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Egypt extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'EG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'EGY';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '818';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'EG';

    /**
     * Telephone country code
     */
    public string $callingCode = '20';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '20';

    /**
     * Capital city
     */
    public string $capital = 'Cairo';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,001,450.0';

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
    public string $en = 'Egypt';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Egyiptom';

    /**
     * German name of the country
     */
    public string $de = 'Ägypten';

    /**
     * Spanish name of the country
     */
    public string $es = 'Egipto';

    /**
     * Italian name of the country
     */
    public string $it = 'Egitto';

    /**
     * French name of the country
     */
    public string $fr = 'Egypte';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Egito';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Egypt';

    /**
     * Danish name of the country
     */
    public string $da = 'Egypten';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Egypten';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Egypt';

    /**
     * Polish name of the country
     */
    public string $pl = 'Egipt';

    /**
     * Czech name of the country
     */
    public string $cs = 'Egypt';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Egypt';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Egipt';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Egipat';
}
