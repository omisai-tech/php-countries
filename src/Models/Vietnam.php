<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Vietnam extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "VN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "VNM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "704";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "VM";

    /**
     * Capital city
     */
    public string $capital = "Hanoi";

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
    public string $en = "Vietnam";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Vietnam";

    /**
     * German name of the country
     */
    public string $de = "Vietnam";

    /**
     * Spanish name of the country
     */
    public string $es = "Vietnam";

    /**
     * Italian name of the country
     */
    public string $it = "Vietnam";

    /**
     * French name of the country
     */
    public string $fr = "Viêt Nam";
    
}
