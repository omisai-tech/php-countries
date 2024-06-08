<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Iran extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "IR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "IRN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "364";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "IR";

    /**
     * Phone dial code
     */
    public string $dial = "98";

    /**
     * Capital city
     */
    public string $capital = "Tehran";

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
    public string $en = "Iran";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Irán";

    /**
     * German name of the country
     */
    public string $de = "Iran";

    /**
     * Spanish name of the country
     */
    public string $es = "Irán";

    /**
     * Italian name of the country
     */
    public string $it = "Iran";

    /**
     * French name of the country
     */
    public string $fr = "L'Iran";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Irã";

}
