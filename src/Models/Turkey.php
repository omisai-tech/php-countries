<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Turkey extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TUR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "792";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TU";

    /**
     * Phone dial code
     */
    public string $dial = "90";

    /**
     * Capital city
     */
    public string $capital = "Ankara";

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
    public string $continent = "AS";

    /**
     * English name of the country
     */
    public string $en = "Turkey";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Törökország";

    /**
     * German name of the country
     */
    public string $de = "Truthahn";

    /**
     * Spanish name of the country
     */
    public string $es = "Pavo";

    /**
     * Italian name of the country
     */
    public string $it = "Tacchino";

    /**
     * French name of the country
     */
    public string $fr = "Turquie";

    /**
     * Portugees name of the country
     */
    public string $pt = "Peru";
    
}
