<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SoTomAndPrncipe extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "ST";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "STP";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "678";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TP";

    /**
     * Phone dial code
     */
    public string $dial = "239";

    /**
     * Capital city
     */
    public string $capital = "Sao Tome";

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
    public string $en = "São Tomé and Príncipe";

    /**
     * Hungarian name of the country
     */
    public string $hu = "São Tomé és Príncipe";

    /**
     * German name of the country
     */
    public string $de = "São Tomé und Príncipe";

    /**
     * Spanish name of the country
     */
    public string $es = "Santo Tomé y Príncipe";

    /**
     * Italian name of the country
     */
    public string $it = "San Tommaso e Principe";

    /**
     * French name of the country
     */
    public string $fr = "São Tomé et Príncipe";

    /**
     * Portuguese name of the country
     */
    public string $pt = "São Tomé e Príncipe";

}
