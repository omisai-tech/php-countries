<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class FrenchPolynesia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PF";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "PYF";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "258";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "FP";

    /**
     * Phone dial code
     */
    public string $dial = "689";

    /**
     * Capital city
     */
    public string $capital = "Papeete";

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
    public string $en = "French Polynesia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Francia Polinézia";

    /**
     * German name of the country
     */
    public string $de = "Französisch Polynesien";

    /**
     * Spanish name of the country
     */
    public string $es = "Polinesia francés";

    /**
     * Italian name of the country
     */
    public string $it = "Polinesia francese";

    /**
     * French name of the country
     */
    public string $fr = "Polynésie française";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Polinésia Francesa";

}
