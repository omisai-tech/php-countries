<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class UsVirginIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'VI';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'VIR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '850';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'VQ';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-340';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-340';

    /**
     * Capital city
     */
    public string $capital = 'Charlotte Amalie';

    /**
     * Total area in square kilometers
     */
    public string $area = '352.0';

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
    public string $continent = 'NA';

    /**
     * English name of the country
     */
    public string $en = 'U.S. Virgin Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Amerikai Virgin-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'US Jungferninseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Vírgenes de EE.UU';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Vergini americane';

    /**
     * French name of the country
     */
    public string $fr = 'Îles Vierges américaines';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Virgens dos EUA';

    /**
     * Dutch name of the country
     */
    public string $nl = 'U.S. Virgin Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'De Amerikanske Jomfruøer';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Amerikanska Jungfruöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'De amerikanske Jomfruøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Dziewicze Stanów Zjednoczonych';

    /**
     * Czech name of the country
     */
    public string $cs = 'Americké Panenské ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Americké Panenské ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Ameriški Deviški otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Američki Djevičanski otoci';
}
