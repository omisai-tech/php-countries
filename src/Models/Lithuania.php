<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Lithuania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "LT";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "LTU";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "440";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "LH";

    /**
     * Phone dial code
     */
    public string $dial = "370";

    /**
     * Capital city
     */
    public string $capital = "Vilnius";

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
    public string $continent = "EU";

    /**
     * English name of the country
     */
    public string $en = "Lithuania";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Litvánia";

    /**
     * German name of the country
     */
    public string $de = "Litauen";

    /**
     * Spanish name of the country
     */
    public string $es = "Lituania";

    /**
     * Italian name of the country
     */
    public string $it = "Lituania";

    /**
     * French name of the country
     */
    public string $fr = "Lituanie";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Lituânia";

}
