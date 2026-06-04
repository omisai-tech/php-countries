<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class BritishVirginIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'VG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'VGB';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '92';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'VI';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-284';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-284';

    /**
     * Capital city
     */
    public string $capital = 'Road Town';

    /**
     * Total area in square kilometers
     */
    public string $area = '153.0';

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
    public string $en = 'British Virgin Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Brit Virgin szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Britische Jungferninseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Vírgenes Británicas';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Vergini Britanniche';

    /**
     * French name of the country
     */
    public string $fr = 'Îles Vierges britanniques';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Virgens Britânicas';

    /**
     * Dutch name of the country
     */
    public string $nl = 'British Virgin Islands';

    /**
     * Danish name of the country
     */
    public string $da = 'De Britiske Jomfruøer';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Brittiska Jungfruöarna';

    /**
     * Norwegian name of the country
     */
    public string $no = 'De britiske Jomfruøyene';

    /**
     * Polish name of the country
     */
    public string $pl = 'Brytyjskie Wyspy Dziewicze';

    /**
     * Czech name of the country
     */
    public string $cs = 'Britské Panenské ostrovy';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Britské Panenské ostrovy';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Britanski Deviški otoki';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Britanski Djevičanski otoci';
}
