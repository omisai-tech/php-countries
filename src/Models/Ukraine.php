<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Ukraine extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "UA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "UKR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "804";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "UP";

    /**
     * Phone dial code
     */
    public string $dial = "380";

    /**
     * Capital city
     */
    public string $capital = "Kyiv";

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
    public string $en = "Ukraine";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Ukrajna";

    /**
     * German name of the country
     */
    public string $de = "Ukraine";

    /**
     * Spanish name of the country
     */
    public string $es = "Ucrania";

    /**
     * Italian name of the country
     */
    public string $it = "Ucraina";

    /**
     * French name of the country
     */
    public string $fr = "Ukraine";

    /**
     * Portugees name of the country
     */
    public string $pt = "Ucrânia";
    
}
