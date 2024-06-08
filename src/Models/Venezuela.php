<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Venezuela extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "VE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "VEN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "862";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "VE";

    /**
     * Phone dial code
     */
    public string $dial = "58";

    /**
     * Capital city
     */
    public string $capital = "Caracas";

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
    public string $en = "Venezuela";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Venezuela";

    /**
     * German name of the country
     */
    public string $de = "Venezuela";

    /**
     * Spanish name of the country
     */
    public string $es = "Venezuela";

    /**
     * Italian name of the country
     */
    public string $it = "Venezuela";

    /**
     * French name of the country
     */
    public string $fr = "Venezuela";
    
}
