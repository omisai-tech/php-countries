<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class FalklandIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "FK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "FLK";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "238";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "FK";

    /**
     * Capital city
     */
    public string $capital = "Stanley";

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
    public string $en = "Falkland Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Falkland-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Falkland Inseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Malvinas";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Falkland";

    /**
     * French name of the country
     */
    public string $fr = "les îles Falkland";
    
}
