<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class MarshallIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MH";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MHL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "584";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "RM";

    /**
     * Phone dial code
     */
    public string $dial = "692";

    /**
     * Capital city
     */
    public string $capital = "Majuro";

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
    public string $continent = "OC";

    /**
     * English name of the country
     */
    public string $en = "Marshall Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Marshall-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Marshallinseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Marshall";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Marshall";

    /**
     * French name of the country
     */
    public string $fr = "Iles Marshall";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Ilhas Marshall";

}
