<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Nauru extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NRU";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "520";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NR";

    /**
     * Capital city
     */
    public string $capital = "Yaren";

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
    public string $en = "Nauru";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Nauru";

    /**
     * German name of the country
     */
    public string $de = "Nauru";

    /**
     * Spanish name of the country
     */
    public string $es = "Nauru";

    /**
     * Italian name of the country
     */
    public string $it = "Nauru";

    /**
     * French name of the country
     */
    public string $fr = "Nauru";
    
}
