<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Turkey extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TR';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TUR';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '792';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TU';

    /**
     * Telephone country code
     */
    public string $callingCode = '90';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '90';

    /**
     * Capital city
     */
    public string $capital = 'Ankara';

    /**
     * Total area in square kilometers
     */
    public string $area = '780,580.0';

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
    public string $en = 'Turkey';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Törökország';

    /**
     * German name of the country
     */
    public string $de = 'Truthahn';

    /**
     * Spanish name of the country
     */
    public string $es = 'Pavo';

    /**
     * Italian name of the country
     */
    public string $it = 'Tacchino';

    /**
     * French name of the country
     */
    public string $fr = 'Turquie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Peru';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Turkey';

    /**
     * Danish name of the country
     */
    public string $da = 'Kalkun';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Turkiet';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Kalkun';

    /**
     * Polish name of the country
     */
    public string $pl = 'Indyk';

    /**
     * Czech name of the country
     */
    public string $cs = 'Turecko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Turecko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Turčija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Turska';
}
