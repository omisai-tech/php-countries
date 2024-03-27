<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class WesternSahara extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "EH";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ESH";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "732";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "WI";

    /**
     * Capital city
     */
    public string $capital = "El-Aaiun";

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
    public string $en = "Western Sahara";

    /**
     * Hungarian name of the country
     */
    public string $hu = "nyugat-Szahara";

    /**
     * German name of the country
     */
    public string $de = "Westsahara";

    /**
     * Spanish name of the country
     */
    public string $es = "Sahara Occidental";

    /**
     * Italian name of the country
     */
    public string $it = "Sahara occidentale";

    /**
     * French name of the country
     */
    public string $fr = "Sahara occidental";
    
}
