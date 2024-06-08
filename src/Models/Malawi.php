<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Malawi extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MW";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MWI";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "454";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MI";

    /**
     * Phone dial code
     */
    public string $dial = "265";

    /**
     * Capital city
     */
    public string $capital = "Lilongwe";

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
    public string $en = "Malawi";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Malawi";

    /**
     * German name of the country
     */
    public string $de = "Malawi";

    /**
     * Spanish name of the country
     */
    public string $es = "Malaui";

    /**
     * Italian name of the country
     */
    public string $it = "Malawi";

    /**
     * French name of the country
     */
    public string $fr = "Malawi";
    
}
