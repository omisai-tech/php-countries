<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Liberia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "LR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "LBR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "430";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "LI";

    /**
     * Phone dial code
     */
    public string $dial = "231";

    /**
     * Capital city
     */
    public string $capital = "Monrovia";

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
    public string $en = "Liberia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Libéria";

    /**
     * German name of the country
     */
    public string $de = "Liberia";

    /**
     * Spanish name of the country
     */
    public string $es = "Liberia";

    /**
     * Italian name of the country
     */
    public string $it = "Liberia";

    /**
     * French name of the country
     */
    public string $fr = "Libéria";
    
}
