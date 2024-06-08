<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Sweden extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SWE";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "752";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SW";

    /**
     * Phone dial code
     */
    public string $dial = "46";

    /**
     * Capital city
     */
    public string $capital = "Stockholm";

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
    public string $en = "Sweden";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Svédország";

    /**
     * German name of the country
     */
    public string $de = "Schweden";

    /**
     * Spanish name of the country
     */
    public string $es = "Suecia";

    /**
     * Italian name of the country
     */
    public string $it = "Svezia";

    /**
     * French name of the country
     */
    public string $fr = "Suède";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Suécia";

}
