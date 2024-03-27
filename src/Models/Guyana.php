<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Guyana extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GY";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GUY";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "328";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GY";

    /**
     * Capital city
     */
    public string $capital = "Georgetown";

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
    public string $continent = "SA";

    /**
     * English name of the country
     */
    public string $en = "Guyana";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Guyana";

    /**
     * German name of the country
     */
    public string $de = "Guayana";

    /**
     * Spanish name of the country
     */
    public string $es = "Guayana";

    /**
     * Italian name of the country
     */
    public string $it = "Guiana";

    /**
     * French name of the country
     */
    public string $fr = "Guyane";
    
}
