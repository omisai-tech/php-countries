<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SintMaarten extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SX";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SXM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "534";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NN";

    /**
     * Phone dial code
     */
    public string $dial = "1-721";

    /**
     * Capital city
     */
    public string $capital = "Philipsburg";

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
    public string $en = "Sint Maarten";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Sint Maarten";

    /**
     * German name of the country
     */
    public string $de = "Sint Maarten";

    /**
     * Spanish name of the country
     */
    public string $es = "San Martín";

    /**
     * Italian name of the country
     */
    public string $it = "Sint Maarten";

    /**
     * French name of the country
     */
    public string $fr = "Saint-Martin";
    
}
