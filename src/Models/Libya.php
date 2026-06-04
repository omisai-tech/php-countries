<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Libya extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'LY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'LBY';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '434';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'LY';

    /**
     * Telephone country code
     */
    public string $callingCode = '218';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '218';

    /**
     * Capital city
     */
    public string $capital = 'Tripoli';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,759,540.0';

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
    public string $en = 'Libya';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Líbia';

    /**
     * German name of the country
     */
    public string $de = 'Libyen';

    /**
     * Spanish name of the country
     */
    public string $es = 'Libia';

    /**
     * Italian name of the country
     */
    public string $it = 'Libia';

    /**
     * French name of the country
     */
    public string $fr = 'Libye';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Líbia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Libya';

    /**
     * Danish name of the country
     */
    public string $da = 'Libyen';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Libyen';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Libya';

    /**
     * Polish name of the country
     */
    public string $pl = 'Libia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Libye';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Líbya';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Libija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Libija';
}
