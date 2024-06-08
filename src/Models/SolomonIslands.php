<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SolomonIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SB";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SLB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "90";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BP";

    /**
     * Phone dial code
     */
    public string $dial = "677";

    /**
     * Capital city
     */
    public string $capital = "Honiara";

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
    public string $en = "Solomon Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Salamon-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Salomon-Inseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Salomón";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Salomone";

    /**
     * French name of the country
     */
    public string $fr = "Les îles Salomon";

    /**
     * Portugees name of the country
     */
    public string $pt = "Ilhas Salomão";
    
}
