<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Mauritania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MRT';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '478';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MR';

    /**
     * Telephone country code
     */
    public string $callingCode = '222';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '222';

    /**
     * Capital city
     */
    public string $capital = 'Nouakchott';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,030,700.0';

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
    public string $en = 'Mauritania';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Mauritánia';

    /**
     * German name of the country
     */
    public string $de = 'Mauretanien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Mauritania';

    /**
     * Italian name of the country
     */
    public string $it = 'La Mauritania';

    /**
     * French name of the country
     */
    public string $fr = 'Mauritanie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Mauritânia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Mauritania';

    /**
     * Danish name of the country
     */
    public string $da = 'Mauretanien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Mauretanien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Mauritania';

    /**
     * Polish name of the country
     */
    public string $pl = 'Mauretania';

    /**
     * Czech name of the country
     */
    public string $cs = 'Mauritánie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Mauritánia';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Mavretanija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Mauritanija';
}
