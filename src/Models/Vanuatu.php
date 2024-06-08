<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Vanuatu extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "VU";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "VUT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "548";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NH";

    /**
     * Phone dial code
     */
    public string $dial = "678";

    /**
     * Capital city
     */
    public string $capital = "Port Vila";

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
    public string $continent = "OC";

    /**
     * English name of the country
     */
    public string $en = "Vanuatu";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Vanuatu";

    /**
     * German name of the country
     */
    public string $de = "Vanuatu";

    /**
     * Spanish name of the country
     */
    public string $es = "Vanuatu";

    /**
     * Italian name of the country
     */
    public string $it = "Vanuatu";

    /**
     * French name of the country
     */
    public string $fr = "Vanuatu";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Vanuatu";

}
