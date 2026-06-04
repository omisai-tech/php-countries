<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class DominicanRepublic extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'DO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'DOM';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '214';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'DR';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-809,1-829,1-849';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-809,1-829,1-849';

    /**
     * Capital city
     */
    public string $capital = 'Santo Domingo';

    /**
     * Total area in square kilometers
     */
    public string $area = '48,730.0';

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
    public string $en = 'Dominican Republic';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Dominikai Köztársaság';

    /**
     * German name of the country
     */
    public string $de = 'Dominikanische Republik';

    /**
     * Spanish name of the country
     */
    public string $es = 'República Dominicana';

    /**
     * Italian name of the country
     */
    public string $it = 'Repubblica Dominicana';

    /**
     * French name of the country
     */
    public string $fr = 'République dominicaine';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'República Dominicana';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Dominican Republic';

    /**
     * Danish name of the country
     */
    public string $da = 'Den Dominikanske Republik';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Dominikanska republiken';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Den dominikanske republikk';

    /**
     * Polish name of the country
     */
    public string $pl = 'Republika Dominikańska';

    /**
     * Czech name of the country
     */
    public string $cs = 'Dominikánská republika';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Dominikánska republika';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Dominikanska republika';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Dominikanska Republika';
}
