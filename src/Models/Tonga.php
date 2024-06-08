<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Tonga extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TON";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "776";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TN";

    /**
     * Phone dial code
     */
    public string $dial = "676";

    /**
     * Capital city
     */
    public string $capital = "Nuku'alofa";

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
    public string $en = "Tonga";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Tonga";

    /**
     * German name of the country
     */
    public string $de = "Tonga";

    /**
     * Spanish name of the country
     */
    public string $es = "Tonga";

    /**
     * Italian name of the country
     */
    public string $it = "Tonga";

    /**
     * French name of the country
     */
    public string $fr = "Tonga";
    
}
