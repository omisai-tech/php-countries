<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Poland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "POL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "616";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "PL";

    /**
     * Phone dial code
     */
    public string $dial = "48";

    /**
     * Capital city
     */
    public string $capital = "Warsaw";

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
    public string $en = "Poland";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Lengyelország";

    /**
     * German name of the country
     */
    public string $de = "Polen";

    /**
     * Spanish name of the country
     */
    public string $es = "Polonia";

    /**
     * Italian name of the country
     */
    public string $it = "Polonia";

    /**
     * French name of the country
     */
    public string $fr = "Pologne";
    
}
