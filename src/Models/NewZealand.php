<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class NewZealand extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NZL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "554";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NZ";

    /**
     * Phone dial code
     */
    public string $dial = "64";

    /**
     * Capital city
     */
    public string $capital = "Wellington";

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
    public string $en = "New Zealand";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Új Zéland";

    /**
     * German name of the country
     */
    public string $de = "Neuseeland";

    /**
     * Spanish name of the country
     */
    public string $es = "Nueva Zelanda";

    /**
     * Italian name of the country
     */
    public string $it = "Nuova Zelanda";

    /**
     * French name of the country
     */
    public string $fr = "Nouvelle-Zélande";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Nova Zelândia";

}
