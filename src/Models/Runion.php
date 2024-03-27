<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Runion extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "RE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "REU";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "638";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "RE";

    /**
     * Capital city
     */
    public string $capital = "Saint-Denis";

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
    public string $en = "Réunion";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Réunion";

    /**
     * German name of the country
     */
    public string $de = "Wiedervereinigung";

    /**
     * Spanish name of the country
     */
    public string $es = "Reunión";

    /**
     * Italian name of the country
     */
    public string $it = "Riunione";

    /**
     * French name of the country
     */
    public string $fr = "Réunion";
    
}
