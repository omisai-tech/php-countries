<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Czechia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CZE";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "203";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "EZ";

    /**
     * Telephone country code
     */
    public string $callingCode = "420";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "420";

    /**
     * Capital city
     */
    public string $capital = "Prague";

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
    public string $continent = "EU";

    /**
     * English name of the country
     */
    public string $en = "Czechia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Csehország";

    /**
     * German name of the country
     */
    public string $de = "Tschechien";

    /**
     * Spanish name of the country
     */
    public string $es = "República Checa";

    /**
     * Italian name of the country
     */
    public string $it = "Repubblica Ceca";

    /**
     * French name of the country
     */
    public string $fr = "République tchèque";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Tcheca";
    
}
