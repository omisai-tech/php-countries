<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Haiti extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "HT";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "HTI";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "332";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "HA";

    /**
     * Phone dial code
     */
    public string $dial = "509";

    /**
     * Capital city
     */
    public string $capital = "Port-au-Prince";

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
    public string $en = "Haiti";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Haiti";

    /**
     * German name of the country
     */
    public string $de = "Haiti";

    /**
     * Spanish name of the country
     */
    public string $es = "Haití";

    /**
     * Italian name of the country
     */
    public string $it = "Haiti";

    /**
     * French name of the country
     */
    public string $fr = "Haïti";

    /**
     * Portugees name of the country
     */
    public string $pt = "Haiti";
    
}
