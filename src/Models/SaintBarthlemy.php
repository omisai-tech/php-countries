<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SaintBarthlemy extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BLM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "652";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TB";

    /**
     * Phone dial code
     */
    public string $dial = "590";

    /**
     * Capital city
     */
    public string $capital = "Gustavia";

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
    public string $en = "Saint Barthélemy";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szent Barthélemy";

    /**
     * German name of the country
     */
    public string $de = "Heiliger Bartholomäus";

    /**
     * Spanish name of the country
     */
    public string $es = "San Bartolomé";

    /**
     * Italian name of the country
     */
    public string $it = "San Bartolomeo";

    /**
     * French name of the country
     */
    public string $fr = "Saint Barthélemy";

    /**
     * Portuguese name of the country
     */
    public string $pt = "São Bartolomeu";

}
