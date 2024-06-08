<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Bolivia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BOL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "68";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BL";

    /**
     * Phone dial code
     */
    public string $dial = "591";

    /**
     * Capital city
     */
    public string $capital = "Sucre";

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
    public string $en = "Bolivia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Bolívia";

    /**
     * German name of the country
     */
    public string $de = "Bolivien";

    /**
     * Spanish name of the country
     */
    public string $es = "bolivia";

    /**
     * Italian name of the country
     */
    public string $it = "Bolivia";

    /**
     * French name of the country
     */
    public string $fr = "Bolivie";
    
}
