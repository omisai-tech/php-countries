<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class CaboVerde extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CV";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CPV";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "132";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CV";

    /**
     * Capital city
     */
    public string $capital = "Praia";

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
    public string $en = "Cabo Verde";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Cabo Verde";

    /**
     * German name of the country
     */
    public string $de = "Kap Verde";

    /**
     * Spanish name of the country
     */
    public string $es = "Cabo Verde";

    /**
     * Italian name of the country
     */
    public string $it = "capo Verde";

    /**
     * French name of the country
     */
    public string $fr = "Cap-Vert";
    
}
