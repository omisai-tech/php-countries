<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SouthSudan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SS";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SSD";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "728";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "OD";

    /**
     * Capital city
     */
    public string $capital = "Juba";

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
    public string $en = "South Sudan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Dél Szudán";

    /**
     * German name of the country
     */
    public string $de = "Südsudan";

    /**
     * Spanish name of the country
     */
    public string $es = "Sudán del Sur";

    /**
     * Italian name of the country
     */
    public string $it = "Sudan del Sud";

    /**
     * French name of the country
     */
    public string $fr = "Soudan du sud";
    
}
