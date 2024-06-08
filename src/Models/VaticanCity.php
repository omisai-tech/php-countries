<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class VaticanCity extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "VA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "VAT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "336";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "VT";

    /**
     * Phone dial code
     */
    public string $dial = "39-06";

    /**
     * Capital city
     */
    public string $capital = "Vatican City";

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
    public string $en = "Vatican City";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Vatikán város";

    /**
     * German name of the country
     */
    public string $de = "Vatikanstadt";

    /**
     * Spanish name of the country
     */
    public string $es = "Ciudad del Vaticano";

    /**
     * Italian name of the country
     */
    public string $it = "Città del Vaticano";

    /**
     * French name of the country
     */
    public string $fr = "Cité du Vatican";
    
}
