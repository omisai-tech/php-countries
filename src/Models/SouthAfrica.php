<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class SouthAfrica extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'ZA';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'ZAF';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '710';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SF';

    /**
     * Telephone country code
     */
    public string $callingCode = '27';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '27';

    /**
     * Capital city
     */
    public string $capital = 'Pretoria';

    /**
     * Total area in square kilometers
     */
    public string $area = '1,219,912.0';

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
    public string $en = 'South Africa';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Dél-Afrika';

    /**
     * German name of the country
     */
    public string $de = 'Südafrika';

    /**
     * Spanish name of the country
     */
    public string $es = 'Sudáfrica';

    /**
     * Italian name of the country
     */
    public string $it = 'Sud Africa';

    /**
     * French name of the country
     */
    public string $fr = 'Afrique du Sud';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'África do Sul';

    /**
     * Dutch name of the country
     */
    public string $nl = 'South Africa';

    /**
     * Danish name of the country
     */
    public string $da = 'Sydafrika';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Sydafrika';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Sør-Afrika';

    /**
     * Polish name of the country
     */
    public string $pl = 'Republika Południowej Afryki';

    /**
     * Czech name of the country
     */
    public string $cs = 'Jižní Afrika';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Južná Afrika';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Južna Afrika';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Južna Afrika';
}
