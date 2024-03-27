<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Syria extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SY";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SYR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "760";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SY";

    /**
     * Capital city
     */
    public string $capital = "Damascus";

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
    public string $en = "Syria";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szíria";

    /**
     * German name of the country
     */
    public string $de = "Syrien";

    /**
     * Spanish name of the country
     */
    public string $es = "Siria";

    /**
     * Italian name of the country
     */
    public string $it = "Siria";

    /**
     * French name of the country
     */
    public string $fr = "Syrie";
    
}
