<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Samoa extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "WS";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "WSM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "882";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "WS";

    /**
     * Capital city
     */
    public string $capital = "Apia";

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
    public string $en = "Samoa";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szamoa";

    /**
     * German name of the country
     */
    public string $de = "Samoa";

    /**
     * Spanish name of the country
     */
    public string $es = "Samoa";

    /**
     * Italian name of the country
     */
    public string $it = "Samoa";

    /**
     * French name of the country
     */
    public string $fr = "Samoa";
    
}
