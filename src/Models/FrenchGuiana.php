<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class FrenchGuiana extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GF";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GUF";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "254";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "FG";

    /**
     * Capital city
     */
    public string $capital = "Cayenne";

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
    public string $en = "French Guiana";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Francia Guyana";

    /**
     * German name of the country
     */
    public string $de = "Französisch-Guayana";

    /**
     * Spanish name of the country
     */
    public string $es = "Guayana Francesa";

    /**
     * Italian name of the country
     */
    public string $it = "Guiana francese";

    /**
     * French name of the country
     */
    public string $fr = "Guyane Française";
    
}
