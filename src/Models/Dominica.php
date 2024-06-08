<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Dominica extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "DM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "DMA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "212";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "DO";

    /**
     * Phone dial code
     */
    public string $dial = "1-767";

    /**
     * Capital city
     */
    public string $capital = "Roseau";

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
    public string $en = "Dominica";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Dominika";

    /**
     * German name of the country
     */
    public string $de = "Dominica";

    /**
     * Spanish name of the country
     */
    public string $es = "república dominicana";

    /**
     * Italian name of the country
     */
    public string $it = "Dominica";

    /**
     * French name of the country
     */
    public string $fr = "Dominique";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Domínica";

}
