<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Uzbekistan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "UZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "UZB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "860";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "UZ";

    /**
     * Phone dial code
     */
    public string $dial = "998";

    /**
     * Capital city
     */
    public string $capital = "Tashkent";

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
    public string $en = "Uzbekistan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Üzbegisztán";

    /**
     * German name of the country
     */
    public string $de = "Usbekistan";

    /**
     * Spanish name of the country
     */
    public string $es = "Uzbekistán";

    /**
     * Italian name of the country
     */
    public string $it = "Uzbekistan";

    /**
     * French name of the country
     */
    public string $fr = "Ouzbékistan";
    
}
