<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Kenya extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "KEN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "404";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "KE";

    /**
     * Phone dial code
     */
    public string $dial = "254";

    /**
     * Capital city
     */
    public string $capital = "Nairobi";

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
    public string $en = "Kenya";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kenya";

    /**
     * German name of the country
     */
    public string $de = "Kenia";

    /**
     * Spanish name of the country
     */
    public string $es = "Kenia";

    /**
     * Italian name of the country
     */
    public string $it = "Kenia";

    /**
     * French name of the country
     */
    public string $fr = "Kenya";

    /**
     * Portugees name of the country
     */
    public string $pt = "Quênia";
    
}
