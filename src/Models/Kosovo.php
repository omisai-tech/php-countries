<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Kosovo extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "XK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "XKX";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "0";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "KV";

    /**
     * Capital city
     */
    public string $capital = "Pristina";

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
    public string $en = "Kosovo";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Koszovó";

    /**
     * German name of the country
     */
    public string $de = "Kosovo";

    /**
     * Spanish name of the country
     */
    public string $es = "Kosovo";

    /**
     * Italian name of the country
     */
    public string $it = "Kosovo";

    /**
     * French name of the country
     */
    public string $fr = "Kosovo";
    
}
