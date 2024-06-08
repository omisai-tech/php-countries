<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Mayotte extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "YT";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MYT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "175";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MF";

    /**
     * Phone dial code
     */
    public string $dial = "262";

    /**
     * Capital city
     */
    public string $capital = "Mamoudzou";

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
    public string $continent = "AF";

    /**
     * English name of the country
     */
    public string $en = "Mayotte";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mayotte";

    /**
     * German name of the country
     */
    public string $de = "Mayotte";

    /**
     * Spanish name of the country
     */
    public string $es = "Mayotte";

    /**
     * Italian name of the country
     */
    public string $it = "Mayotte";

    /**
     * French name of the country
     */
    public string $fr = "Mayotte";
    
}
