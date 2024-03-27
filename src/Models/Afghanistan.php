<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Afghanistan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AF";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "AFG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "4";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AF";

    /**
     * Capital city
     */
    public string $capital = "Kabul";

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
    public string $en = "Afghanistan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Afganisztán";

    /**
     * German name of the country
     */
    public string $de = "Afghanistan";

    /**
     * Spanish name of the country
     */
    public string $es = "Afganistán";

    /**
     * Italian name of the country
     */
    public string $it = "Afghanistan";

    /**
     * French name of the country
     */
    public string $fr = "Afghanistan";
    
}
