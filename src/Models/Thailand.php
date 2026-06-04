<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Thailand extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TH';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'THA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '764';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TH';

    /**
     * Telephone country code
     */
    public string $callingCode = '66';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '66';

    /**
     * Capital city
     */
    public string $capital = 'Bangkok';

    /**
     * Total area in square kilometers
     */
    public string $area = '514,000.0';

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
    public string $continent = 'AS';

    /**
     * English name of the country
     */
    public string $en = 'Thailand';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Thaiföld';

    /**
     * German name of the country
     */
    public string $de = 'Thailand';

    /**
     * Spanish name of the country
     */
    public string $es = 'Tailandia';

    /**
     * Italian name of the country
     */
    public string $it = 'Tailandia';

    /**
     * French name of the country
     */
    public string $fr = 'Thaïlande';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Tailândia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Thailand';

    /**
     * Danish name of the country
     */
    public string $da = 'Thailand';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Thailand';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Thailand';

    /**
     * Polish name of the country
     */
    public string $pl = 'Tajlandia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Thajsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Thajsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Tajska';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Tajland';
}
