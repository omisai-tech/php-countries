<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Gabon extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GAB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "266";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GB";

    /**
     * Phone dial code
     */
    public string $dial = "241";

    /**
     * Capital city
     */
    public string $capital = "Libreville";

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
    public string $en = "Gabon";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Gabon";

    /**
     * German name of the country
     */
    public string $de = "Gabun";

    /**
     * Spanish name of the country
     */
    public string $es = "Gabón";

    /**
     * Italian name of the country
     */
    public string $it = "Gabon";

    /**
     * French name of the country
     */
    public string $fr = "Gabon";
    
}
