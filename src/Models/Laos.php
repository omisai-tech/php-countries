<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Laos extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "LA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "LAO";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "418";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "LA";

    /**
     * Capital city
     */
    public string $capital = "Vientiane";

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
    public string $en = "Laos";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Laosz";

    /**
     * German name of the country
     */
    public string $de = "Laos";

    /**
     * Spanish name of the country
     */
    public string $es = "Laos";

    /**
     * Italian name of the country
     */
    public string $it = "Laos";

    /**
     * French name of the country
     */
    public string $fr = "Laos";
    
}
