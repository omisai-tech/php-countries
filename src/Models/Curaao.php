<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Curaao extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CW";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CUW";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "531";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "UC";

    /**
     * Capital city
     */
    public string $capital = "Willemstad";

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
    public string $continent = "NA";

    /**
     * English name of the country
     */
    public string $en = "Curaçao";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Curaçao";

    /**
     * German name of the country
     */
    public string $de = "Curacao";

    /**
     * Spanish name of the country
     */
    public string $es = "Curazao";

    /**
     * Italian name of the country
     */
    public string $it = "Curacao";

    /**
     * French name of the country
     */
    public string $fr = "Curacao";
    
}
