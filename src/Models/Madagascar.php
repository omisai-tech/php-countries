<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Madagascar extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MDG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "450";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MA";

    /**
     * Phone dial code
     */
    public string $dial = "261";

    /**
     * Capital city
     */
    public string $capital = "Antananarivo";

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
    public string $continent = "AF";

    /**
     * English name of the country
     */
    public string $en = "Madagascar";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Madagaszkár";

    /**
     * German name of the country
     */
    public string $de = "Madagaskar";

    /**
     * Spanish name of the country
     */
    public string $es = "Madagascar";

    /**
     * Italian name of the country
     */
    public string $it = "Madagascar";

    /**
     * French name of the country
     */
    public string $fr = "Madagascar";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Madagáscar";

}
