<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Yemen extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "YE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "YEM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "887";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "YM";

    /**
     * Phone dial code
     */
    public string $dial = "967";

    /**
     * Capital city
     */
    public string $capital = "Sanaa";

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
    public string $en = "Yemen";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Jemen";

    /**
     * German name of the country
     */
    public string $de = "Jemen";

    /**
     * Spanish name of the country
     */
    public string $es = "Yemen";

    /**
     * Italian name of the country
     */
    public string $it = "Yemen";

    /**
     * French name of the country
     */
    public string $fr = "Yémen";
    
}
