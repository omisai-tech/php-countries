<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class TrinidadAndTobago extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TT';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TTO';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '780';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TD';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-868';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-868';

    /**
     * Capital city
     */
    public string $capital = 'Port of Spain';

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
    public string $en = 'Trinidad and Tobago';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Trinidad és Tobago';

    /**
     * German name of the country
     */
    public string $de = 'Trinidad und Tobago';

    /**
     * Spanish name of the country
     */
    public string $es = 'Trinidad y Tobago';

    /**
     * Italian name of the country
     */
    public string $it = 'Trinidad e Tobago';

    /**
     * French name of the country
     */
    public string $fr = 'Trinité-et-Tobago';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Trinidad e Tobago';
}
