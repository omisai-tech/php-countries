<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class TurksAndCaicosIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'TC';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'TCA';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '796';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'TK';

    /**
     * Telephone country code
     */
    public string $callingCode = '1-649';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '1-649';

    /**
     * Capital city
     */
    public string $capital = 'Cockburn Town';

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
    public string $en = 'Turks and Caicos Islands';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Turks-és Caicos-szigetek';

    /**
     * German name of the country
     */
    public string $de = 'Turks- und Caicosinseln';

    /**
     * Spanish name of the country
     */
    public string $es = 'Islas Turcas y Caicos';

    /**
     * Italian name of the country
     */
    public string $it = 'Isole Turks e Caicos';

    /**
     * French name of the country
     */
    public string $fr = 'îles Turques-et-Caïques';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Ilhas Turcas e Caicos';
}
