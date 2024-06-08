<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Macao extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MAC";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "446";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MC";

    /**
     * Phone dial code
     */
    public string $dial = "853";

    /**
     * Capital city
     */
    public string $capital = "Macao";

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
    public string $continent = "AS";

    /**
     * English name of the country
     */
    public string $en = "Macao";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Makaó";

    /**
     * German name of the country
     */
    public string $de = "Macau";

    /**
     * Spanish name of the country
     */
    public string $es = "Macao";

    /**
     * Italian name of the country
     */
    public string $it = "Macao";

    /**
     * French name of the country
     */
    public string $fr = "Macao";
    
}
