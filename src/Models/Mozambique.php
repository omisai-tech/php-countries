<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Mozambique extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MOZ";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "508";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MZ";

    /**
     * Phone dial code
     */
    public string $dial = "258";

    /**
     * Capital city
     */
    public string $capital = "Maputo";

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
    public string $en = "Mozambique";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mozambik";

    /**
     * German name of the country
     */
    public string $de = "Mosambik";

    /**
     * Spanish name of the country
     */
    public string $es = "Mozambique";

    /**
     * Italian name of the country
     */
    public string $it = "Mozambico";

    /**
     * French name of the country
     */
    public string $fr = "Mozambique";

    /**
     * Portugees name of the country
     */
    public string $pt = "Moçambique";
    
}
