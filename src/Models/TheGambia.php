<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class TheGambia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GMB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "270";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GA";

    /**
     * Phone dial code
     */
    public string $dial = "220";

    /**
     * Capital city
     */
    public string $capital = "Banjul";

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
    public string $en = "The Gambia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Gambia";

    /**
     * German name of the country
     */
    public string $de = "Gambia";

    /**
     * Spanish name of the country
     */
    public string $es = "Gambia";

    /**
     * Italian name of the country
     */
    public string $it = "Gambia";

    /**
     * French name of the country
     */
    public string $fr = "Gambie";

    /**
     * Portugees name of the country
     */
    public string $pt = "A Gâmbia";
    
}
