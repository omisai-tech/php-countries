<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class WallisAndFutuna extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "WF";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "WLF";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "876";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "WF";

    /**
     * Capital city
     */
    public string $capital = "Mata Utu";

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
    public string $en = "Wallis and Futuna";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Wallis és Futuna";

    /**
     * German name of the country
     */
    public string $de = "Wallis und Futuna";

    /**
     * Spanish name of the country
     */
    public string $es = "Wallis y Futuna";

    /**
     * Italian name of the country
     */
    public string $it = "Wallis e Futuna";

    /**
     * French name of the country
     */
    public string $fr = "Wallis et Futuna";
    
}
