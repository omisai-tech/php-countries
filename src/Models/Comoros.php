<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Comoros extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "COM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "174";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CN";

    /**
     * Phone dial code
     */
    public string $dial = "269";

    /**
     * Capital city
     */
    public string $capital = "Moroni";

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
    public string $en = "Comoros";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Comore-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Komoren-Inseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Comoras";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Comore";

    /**
     * French name of the country
     */
    public string $fr = "Îles Comores";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Comores";

}
