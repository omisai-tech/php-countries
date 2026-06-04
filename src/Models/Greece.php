<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Greece extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GRC';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '300';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GR';

    /**
     * Telephone country code
     */
    public string $callingCode = '30';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '30';

    /**
     * Capital city
     */
    public string $capital = 'Athens';

    /**
     * Total area in square kilometers
     */
    public string $area = '131,940.0';

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
    public string $en = 'Greece';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Görögország';

    /**
     * German name of the country
     */
    public string $de = 'Griechenland';

    /**
     * Spanish name of the country
     */
    public string $es = 'Grecia';

    /**
     * Italian name of the country
     */
    public string $it = 'Grecia';

    /**
     * French name of the country
     */
    public string $fr = 'Grèce';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Grécia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Greece';

    /**
     * Danish name of the country
     */
    public string $da = 'Grækenland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Grekland';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Hellas';

    /**
     * Polish name of the country
     */
    public string $pl = 'Grecja';

    /**
     * Czech name of the country
     */
    public string $cs = 'Řecko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Grécko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Grčija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Grčka';
}
