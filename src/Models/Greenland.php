<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Greenland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GRL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "304";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GL";

    /**
     * Phone dial code
     */
    public string $dial = "299";

    /**
     * Capital city
     */
    public string $capital = "Nuuk";

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
    public string $continent = "NA";

    /**
     * English name of the country
     */
    public string $en = "Greenland";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Grönland";

    /**
     * German name of the country
     */
    public string $de = "Grönland";

    /**
     * Spanish name of the country
     */
    public string $es = "Groenlandia";

    /**
     * Italian name of the country
     */
    public string $it = "Groenlandia";

    /**
     * French name of the country
     */
    public string $fr = "Groenland";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Groenlândia";

}
