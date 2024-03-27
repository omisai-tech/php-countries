<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class BritishIndianOceanTerritory extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "IO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "IOT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "86";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "IO";

    /**
     * Capital city
     */
    public string $capital = "Diego Garcia";

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
    public string $en = "British Indian Ocean Territory";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Brit Indiai-óceáni Terület";

    /**
     * German name of the country
     */
    public string $de = "Britisches Territorium des Indischen Ozeans";

    /**
     * Spanish name of the country
     */
    public string $es = "Territorio Británico del Océano Índico";

    /**
     * Italian name of the country
     */
    public string $it = "Territorio britannico dell'Oceano Indiano";

    /**
     * French name of the country
     */
    public string $fr = "Territoire britannique de l'océan Indien";
    
}
