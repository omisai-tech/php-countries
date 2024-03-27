<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Mexico extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MX";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MEX";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "484";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MX";

    /**
     * Capital city
     */
    public string $capital = "Mexico City";

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
    public string $en = "Mexico";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mexikó";

    /**
     * German name of the country
     */
    public string $de = "Mexiko";

    /**
     * Spanish name of the country
     */
    public string $es = "México";

    /**
     * Italian name of the country
     */
    public string $it = "Messico";

    /**
     * French name of the country
     */
    public string $fr = "Mexique";
    
}