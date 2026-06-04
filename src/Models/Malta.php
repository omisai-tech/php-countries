<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Malta extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'MT';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'MLT';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '470';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'MT';

    /**
     * Telephone country code
     */
    public string $callingCode = '356';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '356';

    /**
     * Capital city
     */
    public string $capital = 'Valletta';

    /**
     * Total area in square kilometers
     */
    public string $area = '316.0';

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
    public string $en = 'Malta';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Málta';

    /**
     * German name of the country
     */
    public string $de = 'Malta';

    /**
     * Spanish name of the country
     */
    public string $es = 'Malta';

    /**
     * Italian name of the country
     */
    public string $it = 'Malta';

    /**
     * French name of the country
     */
    public string $fr = 'Malte';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Malta';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Malta';

    /**
     * Danish name of the country
     */
    public string $da = 'Malta';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Malta';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Malta';

    /**
     * Polish name of the country
     */
    public string $pl = 'Malta';

    /**
     * Czech name of the country
     */
    public string $cs = 'Malta';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Malta';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Malta';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Malta';
}
