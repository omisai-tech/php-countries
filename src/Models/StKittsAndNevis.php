<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class StKittsAndNevis extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "KNA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "659";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SC";

    /**
     * Phone dial code
     */
    public string $dial = "1-869";

    /**
     * Capital city
     */
    public string $capital = "Basseterre";

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
    public string $continent = "NA";

    /**
     * English name of the country
     */
    public string $en = "St Kitts and Nevis";

    /**
     * Hungarian name of the country
     */
    public string $hu = "St Kitts és Nevis";

    /**
     * German name of the country
     */
    public string $de = "St. Kitts und Nevis";

    /**
     * Spanish name of the country
     */
    public string $es = "Saint Kitts y Nevis";

    /**
     * Italian name of the country
     */
    public string $it = "Saint Kitts e Nevis";

    /**
     * French name of the country
     */
    public string $fr = "Saint-Kitts-et-Nevis";

    /**
     * Portugees name of the country
     */
    public string $pt = "São Cristóvão e Nevis";
    
}
