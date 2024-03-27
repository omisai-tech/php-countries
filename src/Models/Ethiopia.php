<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Ethiopia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "ET";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ETH";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "231";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "ET";

    /**
     * Capital city
     */
    public string $capital = "Addis Ababa";

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
    public string $en = "Ethiopia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Etiópia";

    /**
     * German name of the country
     */
    public string $de = "Äthiopien";

    /**
     * Spanish name of the country
     */
    public string $es = "Etiopía";

    /**
     * Italian name of the country
     */
    public string $it = "Etiopia";

    /**
     * French name of the country
     */
    public string $fr = "Ethiopie";
    
}
