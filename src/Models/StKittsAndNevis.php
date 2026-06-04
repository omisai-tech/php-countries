<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class StKittsAndNevis extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'KN';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'KNA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '659';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SC';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-869';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-869';

    /**
     * Capital city
     */
    public string $capital = 'Basseterre';

    /**
     * Total area in square kilometers
     */
    public string $area = '261.0';

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
    public string $en = 'St Kitts and Nevis';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'St Kitts és Nevis';

    /**
     * German name of the country
     */
    public string $de = 'St. Kitts und Nevis';

    /**
     * Spanish name of the country
     */
    public string $es = 'Saint Kitts y Nevis';

    /**
     * Italian name of the country
     */
    public string $it = 'Saint Kitts e Nevis';

    /**
     * French name of the country
     */
    public string $fr = 'Saint-Kitts-et-Nevis';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'São Cristóvão e Nevis';

    /**
     * Dutch name of the country
     */
    public string $nl = 'St Kitts and Nevis';

    /**
     * Danish name of the country
     */
    public string $da = 'St. Kitts og Nevis';

    /**
     * Swedish name of the country
     */
    public string $sv = 'St Kitts och Nevis';

    /**
     * Norwegian name of the country
     */
    public string $no = 'St. Kitts og Nevis';

    /**
     * Polish name of the country
     */
    public string $pl = 'Saint Kitts i Nevis';

    /**
     * Czech name of the country
     */
    public string $cs = 'Svatý Kryštof a Nevis';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Svätý Krištof a Nevis';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Sveti Krištof in Nevis';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Sveti Kitts i Nevis';
}
