<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Bangladesh extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BD";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BGD";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "50";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BG";

    /**
     * Phone dial code
     */
    public string $dial = "880";

    /**
     * Capital city
     */
    public string $capital = "Dhaka";

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
    public string $en = "Bangladesh";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Banglades";

    /**
     * German name of the country
     */
    public string $de = "Bangladesch";

    /**
     * Spanish name of the country
     */
    public string $es = "Bangladesh";

    /**
     * Italian name of the country
     */
    public string $it = "Bangladesh";

    /**
     * French name of the country
     */
    public string $fr = "Bangladesh";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Bangladesh";

}
