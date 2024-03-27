<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Norway extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NOR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "578";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NO";

    /**
     * Capital city
     */
    public string $capital = "Oslo";

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
    public string $en = "Norway";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Norvégia";

    /**
     * German name of the country
     */
    public string $de = "Norwegen";

    /**
     * Spanish name of the country
     */
    public string $es = "Noruega";

    /**
     * Italian name of the country
     */
    public string $it = "Norvegia";

    /**
     * French name of the country
     */
    public string $fr = "Norvège";
    
}
