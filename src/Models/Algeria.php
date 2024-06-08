<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Algeria extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "DZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "DZA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "12";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AG";

    /**
     * Phone dial code
     */
    public string $dial = "213";

    /**
     * Capital city
     */
    public string $capital = "Algiers";

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
    public string $en = "Algeria";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Algéria";

    /**
     * German name of the country
     */
    public string $de = "Algerien";

    /**
     * Spanish name of the country
     */
    public string $es = "Argelia";

    /**
     * Italian name of the country
     */
    public string $it = "Algeria";

    /**
     * French name of the country
     */
    public string $fr = "Algérie";
    
}
