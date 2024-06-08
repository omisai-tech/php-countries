<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Montenegro extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "ME";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MNE";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "499";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MJ";

    /**
     * Phone dial code
     */
    public string $dial = "382";

    /**
     * Capital city
     */
    public string $capital = "Podgorica";

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
    public string $en = "Montenegro";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Montenegró";

    /**
     * German name of the country
     */
    public string $de = "Montenegro";

    /**
     * Spanish name of the country
     */
    public string $es = "Montenegro";

    /**
     * Italian name of the country
     */
    public string $it = "Montenegro";

    /**
     * French name of the country
     */
    public string $fr = "Monténégro";

    /**
     * Portugees name of the country
     */
    public string $pt = "Montenegro";
    
}
