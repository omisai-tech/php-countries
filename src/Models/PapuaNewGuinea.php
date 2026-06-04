<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class PapuaNewGuinea extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PNG';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '598';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'PP';

    /**
     * Telephone country code
     */
    public string $callingCode = '675';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '675';

    /**
     * Capital city
     */
    public string $capital = 'Port Moresby';

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
    public string $continent = 'OC';

    /**
     * English name of the country
     */
    public string $en = 'Papua New Guinea';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Pápua Új-Guinea';

    /**
     * German name of the country
     */
    public string $de = 'Papua Neu-Guinea';

    /**
     * Spanish name of the country
     */
    public string $es = 'Papúa Nueva Guinea';

    /**
     * Italian name of the country
     */
    public string $it = 'Papua Nuova Guinea';

    /**
     * French name of the country
     */
    public string $fr = 'Papouasie Nouvelle Guinée';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Papua Nova Guiné';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Papua New Guinea';

    /**
     * Danish name of the country
     */
    public string $da = 'Papua Ny Guinea';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Papua Nya Guinea';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Papua Ny-Guinea';

    /**
     * Polish name of the country
     */
    public string $pl = 'Papua-Nowa Gwinea';

    /**
     * Czech name of the country
     */
    public string $cs = 'Papua Nová Guinea';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Papua-Nová Guinea';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Papua Nova Gvineja';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Papua Nova Gvineja';
}
