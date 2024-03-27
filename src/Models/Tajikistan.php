<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Tajikistan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TJ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TJK";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "762";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TI";

    /**
     * Capital city
     */
    public string $capital = "Dushanbe";

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
    public string $continent = "AS";

    /**
     * English name of the country
     */
    public string $en = "Tajikistan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Tádzsikisztán";

    /**
     * German name of the country
     */
    public string $de = "Tadschikistan";

    /**
     * Spanish name of the country
     */
    public string $es = "Tayikistán";

    /**
     * Italian name of the country
     */
    public string $it = "Tagikistan";

    /**
     * French name of the country
     */
    public string $fr = "Tadjikistan";
    
}
