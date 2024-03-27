<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Togo extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TGO";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "768";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TO";

    /**
     * Capital city
     */
    public string $capital = "Lome";

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
    public string $en = "Togo";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Menni";

    /**
     * German name of the country
     */
    public string $de = "Gehen";

    /**
     * Spanish name of the country
     */
    public string $es = "Ir";

    /**
     * Italian name of the country
     */
    public string $it = "Andare";

    /**
     * French name of the country
     */
    public string $fr = "Aller";
    
}