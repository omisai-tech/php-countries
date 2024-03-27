<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Rwanda extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "RW";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "RWA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "646";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "RW";

    /**
     * Capital city
     */
    public string $capital = "Kigali";

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
    public string $en = "Rwanda";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Ruanda";

    /**
     * German name of the country
     */
    public string $de = "Ruanda";

    /**
     * Spanish name of the country
     */
    public string $es = "Ruanda";

    /**
     * Italian name of the country
     */
    public string $it = "Ruanda";

    /**
     * French name of the country
     */
    public string $fr = "Rwanda";
    
}
