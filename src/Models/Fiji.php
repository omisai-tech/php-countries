<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Fiji extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "FJ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "FJI";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "242";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "FJ";

    /**
     * Phone dial code
     */
    public string $dial = "679";

    /**
     * Capital city
     */
    public string $capital = "Suva";

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
    public string $en = "Fiji";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Fidzsi-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Fidschi-Inseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Fiyi";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Fiji";

    /**
     * French name of the country
     */
    public string $fr = "Îles Fidji";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Fiji";

}
