<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class UnitedKingdom extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GB";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GBR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "826";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "UK";

    /**
     * Capital city
     */
    public string $capital = "London";

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
    public string $en = "United Kingdom";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Egyesült Királyság";

    /**
     * German name of the country
     */
    public string $de = "Großbritannien";

    /**
     * Spanish name of the country
     */
    public string $es = "Reino Unido";

    /**
     * Italian name of the country
     */
    public string $it = "Regno Unito";

    /**
     * French name of the country
     */
    public string $fr = "Royaume-Uni";
    
}
