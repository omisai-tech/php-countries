<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Slovakia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SVK";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "703";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "LO";

    /**
     * Phone dial code
     */
    public string $dial = "421";

    /**
     * Capital city
     */
    public string $capital = "Bratislava";

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
    public string $en = "Slovakia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szlovákia";

    /**
     * German name of the country
     */
    public string $de = "Slowakei";

    /**
     * Spanish name of the country
     */
    public string $es = "Eslovaquia";

    /**
     * Italian name of the country
     */
    public string $it = "Slovacchia";

    /**
     * French name of the country
     */
    public string $fr = "Slovaquie";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Eslováquia";

}
