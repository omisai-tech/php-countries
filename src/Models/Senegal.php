<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Senegal extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SEN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "686";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SG";

    /**
     * Phone dial code
     */
    public string $dial = "221";

    /**
     * Capital city
     */
    public string $capital = "Dakar";

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
    public string $en = "Senegal";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szenegál";

    /**
     * German name of the country
     */
    public string $de = "Senegal";

    /**
     * Spanish name of the country
     */
    public string $es = "Senegal";

    /**
     * Italian name of the country
     */
    public string $it = "Senegal";

    /**
     * French name of the country
     */
    public string $fr = "Sénégal";
    
}
