<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Belize extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BLZ";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "84";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BH";

    /**
     * Phone dial code
     */
    public string $dial = "501";

    /**
     * Capital city
     */
    public string $capital = "Belmopan";

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
    public string $en = "Belize";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Belize";

    /**
     * German name of the country
     */
    public string $de = "Belize";

    /**
     * Spanish name of the country
     */
    public string $es = "Belice";

    /**
     * Italian name of the country
     */
    public string $it = "Belize";

    /**
     * French name of the country
     */
    public string $fr = "Bélize";
    
}
