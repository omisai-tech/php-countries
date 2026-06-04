<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SoTomAndPrncipe extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ST';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'STP';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '678';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TP';

    /**
     * Telephone country code
     */
    public string $callingCode = '239';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '239';

    /**
     * Capital city
     */
    public string $capital = 'Sao Tome';

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
    public string $en = 'São Tomé and Príncipe';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'São Tomé és Príncipe';

    /**
     * German name of the country
     */
    public string $de = 'São Tomé und Príncipe';

    /**
     * Spanish name of the country
     */
    public string $es = 'Santo Tomé y Príncipe';

    /**
     * Italian name of the country
     */
    public string $it = 'San Tommaso e Principe';

    /**
     * French name of the country
     */
    public string $fr = 'São Tomé et Príncipe';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'São Tomé e Príncipe';

    /**
     * Dutch name of the country
     */
    public string $nl = 'São Tomé and Príncipe';

    /**
     * Danish name of the country
     */
    public string $da = 'São Tomé og Príncipe';

    /**
     * Swedish name of the country
     */
    public string $sv = 'São Tomé och Príncipe';

    /**
     * Norwegian name of the country
     */
    public string $no = 'São Tomé og Príncipe';

    /**
     * Polish name of the country
     */
    public string $pl = 'Wyspy Świętego Tomasza i Książęca';

    /**
     * Czech name of the country
     */
    public string $cs = 'Svatý Tomáš a Princův ostrov';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Svätý Tomáš a Princov ostrov';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Sao Tomé in Principe';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Sveti Toma i Prinsipe';
}
