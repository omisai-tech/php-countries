<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class NorfolkIsland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NF";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NFK";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "574";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NF";

    /**
     * Capital city
     */
    public string $capital = "Kingston";

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
    public string $continent = "OC";

    /**
     * English name of the country
     */
    public string $en = "Norfolk Island";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Norfolk-sziget";

    /**
     * German name of the country
     */
    public string $de = "Norfolkinsel";

    /**
     * Spanish name of the country
     */
    public string $es = "Isla Norfolk";

    /**
     * Italian name of the country
     */
    public string $it = "Isola Norfolk";

    /**
     * French name of the country
     */
    public string $fr = "l'ile de Norfolk";
    
}
