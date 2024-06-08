<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Jordan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "JO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "JOR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "400";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "JO";

    /**
     * Phone dial code
     */
    public string $dial = "962";

    /**
     * Capital city
     */
    public string $capital = "Amman";

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
    public string $en = "Jordan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Jordánia";

    /**
     * German name of the country
     */
    public string $de = "Jordanien";

    /**
     * Spanish name of the country
     */
    public string $es = "Jordán";

    /**
     * Italian name of the country
     */
    public string $it = "Giordania";

    /**
     * French name of the country
     */
    public string $fr = "Jordan";
    
}
