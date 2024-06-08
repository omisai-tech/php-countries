<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Angola extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "AGO";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "24";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AO";

    /**
     * Phone dial code
     */
    public string $dial = "244";

    /**
     * Capital city
     */
    public string $capital = "Luanda";

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
    public string $en = "Angola";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Angola";

    /**
     * German name of the country
     */
    public string $de = "Angola";

    /**
     * Spanish name of the country
     */
    public string $es = "Angola";

    /**
     * Italian name of the country
     */
    public string $it = "L'Angola";

    /**
     * French name of the country
     */
    public string $fr = "Angola";
    
}
