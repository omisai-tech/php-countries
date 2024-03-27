<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Tunisia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TUN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "788";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TS";

    /**
     * Capital city
     */
    public string $capital = "Tunis";

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
    public string $en = "Tunisia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Tunézia";

    /**
     * German name of the country
     */
    public string $de = "Tunesien";

    /**
     * Spanish name of the country
     */
    public string $es = "Túnez";

    /**
     * Italian name of the country
     */
    public string $it = "Tunisia";

    /**
     * French name of the country
     */
    public string $fr = "Tunisie";
    
}
