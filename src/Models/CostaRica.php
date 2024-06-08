<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class CostaRica extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CRI";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "188";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CS";

    /**
     * Phone dial code
     */
    public string $dial = "506";

    /**
     * Capital city
     */
    public string $capital = "San Jose";

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
    public string $continent = "NA";

    /**
     * English name of the country
     */
    public string $en = "Costa Rica";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Costa Rica";

    /**
     * German name of the country
     */
    public string $de = "Costa Rica";

    /**
     * Spanish name of the country
     */
    public string $es = "Costa Rica";

    /**
     * Italian name of the country
     */
    public string $it = "Costa Rica";

    /**
     * French name of the country
     */
    public string $fr = "Costa Rica";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Costa Rica";

}
