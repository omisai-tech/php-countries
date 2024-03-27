<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class IvoryCoast extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CI";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CIV";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "384";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "IV";

    /**
     * Capital city
     */
    public string $capital = "Yamoussoukro";

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
    public string $en = "Ivory Coast";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Elefántcsontpart";

    /**
     * German name of the country
     */
    public string $de = "Elfenbeinküste";

    /**
     * Spanish name of the country
     */
    public string $es = "Costa de Marfil";

    /**
     * Italian name of the country
     */
    public string $it = "Costa d'Avorio";

    /**
     * French name of the country
     */
    public string $fr = "Côte d'Ivoire";
    
}
