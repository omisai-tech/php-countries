<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Chile extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CHL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "152";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CI";

    /**
     * Phone dial code
     */
    public string $dial = "56";

    /**
     * Capital city
     */
    public string $capital = "Santiago";

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
    public string $en = "Chile";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Chile";

    /**
     * German name of the country
     */
    public string $de = "Chile";

    /**
     * Spanish name of the country
     */
    public string $es = "Chile";

    /**
     * Italian name of the country
     */
    public string $it = "Chile";

    /**
     * French name of the country
     */
    public string $fr = "Chili";
    
}
