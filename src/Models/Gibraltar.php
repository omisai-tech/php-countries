<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Gibraltar extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GI";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GIB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "292";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GI";

    /**
     * Capital city
     */
    public string $capital = "Gibraltar";

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
    public string $continent = "EU";

    /**
     * English name of the country
     */
    public string $en = "Gibraltar";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Gibraltár";

    /**
     * German name of the country
     */
    public string $de = "Gibraltar";

    /**
     * Spanish name of the country
     */
    public string $es = "Gibraltar";

    /**
     * Italian name of the country
     */
    public string $it = "Gibilterra";

    /**
     * French name of the country
     */
    public string $fr = "Gibraltar";
    
}
