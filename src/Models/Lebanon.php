<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Lebanon extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "LB";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "LBN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "422";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "LE";

    /**
     * Phone dial code
     */
    public string $dial = "961";

    /**
     * Capital city
     */
    public string $capital = "Beirut";

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
    public string $continent = "AS";

    /**
     * English name of the country
     */
    public string $en = "Lebanon";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Libanon";

    /**
     * German name of the country
     */
    public string $de = "Libanon";

    /**
     * Spanish name of the country
     */
    public string $es = "Líbano";

    /**
     * Italian name of the country
     */
    public string $it = "Libano";

    /**
     * French name of the country
     */
    public string $fr = "Liban";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Líbano";

}
