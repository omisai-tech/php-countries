<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class HongKong extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "HK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "HKG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "344";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "HK";

    /**
     * Capital city
     */
    public string $capital = "Hong Kong";

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
    public string $continent = "AS";

    /**
     * English name of the country
     */
    public string $en = "Hong Kong";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Hong Kong";

    /**
     * German name of the country
     */
    public string $de = "Hongkong";

    /**
     * Spanish name of the country
     */
    public string $es = "Hong Kong";

    /**
     * Italian name of the country
     */
    public string $it = "Hong Kong";

    /**
     * French name of the country
     */
    public string $fr = "Hong Kong";
    
}
