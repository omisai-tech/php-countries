<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class AntiguaAndBarbuda extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'AG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ATG';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '28';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'AC';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-268';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-268';

    /**
     * Capital city
     */
    public string $capital = "St. John's";

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
    public string $en = 'Antigua and Barbuda';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Antigua és Barbuda';

    /**
     * German name of the country
     */
    public string $de = 'Antigua und Barbuda';

    /**
     * Spanish name of the country
     */
    public string $es = 'Antigua y Barbuda';

    /**
     * Italian name of the country
     */
    public string $it = 'Antigua e Barbuda';

    /**
     * French name of the country
     */
    public string $fr = 'Antigua-et-Barbuda';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Antígua e Barbuda';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Antigua and Barbuda';

    /**
     * Danish name of the country
     */
    public string $da = 'Antigua og Barbuda';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Antigua och Barbuda';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Antigua og Barbuda';

    /**
     * Polish name of the country
     */
    public string $pl = 'Antigua i Barbuda';

    /**
     * Czech name of the country
     */
    public string $cs = 'Antigua a Barbuda';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Antigua a Barbuda';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Antigva in Barbuda';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Antigva i Barbuda';
}
