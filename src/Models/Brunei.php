<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Brunei extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BRN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "96";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BX";

    /**
     * Phone dial code
     */
    public string $dial = "673";

    /**
     * Capital city
     */
    public string $capital = "Bandar Seri Begawan";

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
    public string $en = "Brunei";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Brunei";

    /**
     * German name of the country
     */
    public string $de = "Brunei";

    /**
     * Spanish name of the country
     */
    public string $es = "Brunéi";

    /**
     * Italian name of the country
     */
    public string $it = "Brunei";

    /**
     * French name of the country
     */
    public string $fr = "Brunéi";
    
}
