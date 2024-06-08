<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Zimbabwe extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "ZW";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ZWE";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "716";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "ZI";

    /**
     * Phone dial code
     */
    public string $dial = "263";

    /**
     * Capital city
     */
    public string $capital = "Harare";

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
    public string $en = "Zimbabwe";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Zimbabwe";

    /**
     * German name of the country
     */
    public string $de = "Zimbabwe";

    /**
     * Spanish name of the country
     */
    public string $es = "Zimbabue";

    /**
     * Italian name of the country
     */
    public string $it = "Zimbabwe";

    /**
     * French name of the country
     */
    public string $fr = "Zimbabwe";
    
}
