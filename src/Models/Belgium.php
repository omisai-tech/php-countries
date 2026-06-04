<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Belgium extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BE';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BEL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '56';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'BE';

    /**
     * Telephone country code
     */
    public string $callingCode = '32';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '32';

    /**
     * Capital city
     */
    public string $capital = 'Brussels';

    /**
     * Total area in square kilometers
     */
    public string $area = '30,510.0';

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
    public string $en = 'Belgium';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Belgium';

    /**
     * German name of the country
     */
    public string $de = 'Belgien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Bélgica';

    /**
     * Italian name of the country
     */
    public string $it = 'Belgio';

    /**
     * French name of the country
     */
    public string $fr = 'Belgique';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bélgica';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Belgium';

    /**
     * Danish name of the country
     */
    public string $da = 'Belgien';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Belgien';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Belgia';

    /**
     * Polish name of the country
     */
    public string $pl = 'Belgia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Belgie';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Belgicko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Belgija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Belgija';
}
