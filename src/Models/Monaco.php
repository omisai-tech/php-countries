<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Monaco extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MC";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MCO";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "492";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MN";

    /**
     * Phone dial code
     */
    public string $dial = "377";

    /**
     * Capital city
     */
    public string $capital = "Monaco";

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
    public string $en = "Monaco";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Monaco";

    /**
     * German name of the country
     */
    public string $de = "Monaco";

    /**
     * Spanish name of the country
     */
    public string $es = "Mónaco";

    /**
     * Italian name of the country
     */
    public string $it = "Monaco";

    /**
     * French name of the country
     */
    public string $fr = "Monaco";

    /**
     * Portugees name of the country
     */
    public string $pt = "Mônaco";
    
}
