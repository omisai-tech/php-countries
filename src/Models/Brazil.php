<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Brazil extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BRA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "76";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BR";

    /**
     * Phone dial code
     */
    public string $dial = "55";

    /**
     * Capital city
     */
    public string $capital = "Brasilia";

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
    public string $en = "Brazil";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Brazília";

    /**
     * German name of the country
     */
    public string $de = "Brasilien";

    /**
     * Spanish name of the country
     */
    public string $es = "Brasil";

    /**
     * Italian name of the country
     */
    public string $it = "Brasile";

    /**
     * French name of the country
     */
    public string $fr = "Brésil";
    
}
