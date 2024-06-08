<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Kiribati extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KI";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "KIR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "296";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "KR";

    /**
     * Phone dial code
     */
    public string $dial = "686";

    /**
     * Capital city
     */
    public string $capital = "Tarawa";

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
    public string $en = "Kiribati";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kiribati";

    /**
     * German name of the country
     */
    public string $de = "Kiribati";

    /**
     * Spanish name of the country
     */
    public string $es = "Kiribati";

    /**
     * Italian name of the country
     */
    public string $it = "Kiribati";

    /**
     * French name of the country
     */
    public string $fr = "Kiribati";

    /**
     * Portugees name of the country
     */
    public string $pt = "Quiribáti";
    
}
