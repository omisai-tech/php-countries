<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Guernsey extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GGY";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "831";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GK";

    /**
     * Phone dial code
     */
    public string $dial = "44";

    /**
     * Capital city
     */
    public string $capital = "St Peter Port";

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
    public string $en = "Guernsey";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Guernsey";

    /**
     * German name of the country
     */
    public string $de = "Guernsey";

    /**
     * Spanish name of the country
     */
    public string $es = "Guernesey";

    /**
     * Italian name of the country
     */
    public string $it = "Guernsey";

    /**
     * French name of the country
     */
    public string $fr = "Guernesey";
    
}
