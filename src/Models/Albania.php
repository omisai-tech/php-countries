<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Albania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ALB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "8";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AL";

    /**
     * Phone dial code
     */
    public string $dial = "355";

    /**
     * Capital city
     */
    public string $capital = "Tirana";

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
    public string $en = "Albania";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Albánia";

    /**
     * German name of the country
     */
    public string $de = "Albanien";

    /**
     * Spanish name of the country
     */
    public string $es = "Albania";

    /**
     * Italian name of the country
     */
    public string $it = "Albania";

    /**
     * French name of the country
     */
    public string $fr = "Albanie";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Albânia";

}
