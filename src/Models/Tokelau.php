<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Tokelau extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TKL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "772";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TL";

    /**
     * Phone dial code
     */
    public string $dial = "690";

    /**
     * Capital city
     */
    public string $capital = "";

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
    public string $en = "Tokelau";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Tokelau";

    /**
     * German name of the country
     */
    public string $de = "Tokelau";

    /**
     * Spanish name of the country
     */
    public string $es = "Tokelau";

    /**
     * Italian name of the country
     */
    public string $it = "Tokelau";

    /**
     * French name of the country
     */
    public string $fr = "Tokélaou";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Toquelau";

}
