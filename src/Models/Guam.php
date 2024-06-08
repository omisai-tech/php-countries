<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Guam extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GU";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GUM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "316";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GQ";

    /**
     * Phone dial code
     */
    public string $dial = "1-671";

    /**
     * Capital city
     */
    public string $capital = "Hagatna";

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
    public string $en = "Guam";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Guam";

    /**
     * German name of the country
     */
    public string $de = "Guam";

    /**
     * Spanish name of the country
     */
    public string $es = "Guam";

    /**
     * Italian name of the country
     */
    public string $it = "Guam";

    /**
     * French name of the country
     */
    public string $fr = "Guam";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Guam";

}
