<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class CentralAfricanRepublic extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CF';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'CAF';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '140';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CT';

    /**
     * Telephone country code
     */
    public string $callingCode = '236';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '236';

    /**
     * Capital city
     */
    public string $capital = 'Bangui';

    /**
     * Total area in square kilometers
     */
    public string $area = '622,984.0';

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
    public string $en = 'Central African Republic';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Közép-Afrikai Köztársaság';

    /**
     * German name of the country
     */
    public string $de = 'Zentralafrikanische Republik';

    /**
     * Spanish name of the country
     */
    public string $es = 'República Centroafricana';

    /**
     * Italian name of the country
     */
    public string $it = 'Repubblica Centrafricana';

    /**
     * French name of the country
     */
    public string $fr = 'République centrafricaine';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'República Centro-Africana';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Central African Republic';

    /**
     * Danish name of the country
     */
    public string $da = 'Centralafrikanske Republik';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Centralafrikanska republiken';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Den sentralafrikanske republikk';

    /**
     * Polish name of the country
     */
    public string $pl = 'Republika Środkowoafrykańska';

    /**
     * Czech name of the country
     */
    public string $cs = 'Středoafrická republika';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Stredoafrická republika';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Srednjeafriška republika';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Srednjoafrička Republika';
}
