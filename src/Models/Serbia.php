<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Serbia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "RS";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SRB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "688";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "RI";

    /**
     * Phone dial code
     */
    public string $dial = "381";

    /**
     * Capital city
     */
    public string $capital = "Belgrade";

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
    public string $en = "Serbia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szerbia";

    /**
     * German name of the country
     */
    public string $de = "Serbien";

    /**
     * Spanish name of the country
     */
    public string $es = "Serbia";

    /**
     * Italian name of the country
     */
    public string $it = "Serbia";

    /**
     * French name of the country
     */
    public string $fr = "Serbie";
    
}
