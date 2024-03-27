<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Malta extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MT";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MLT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "470";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MT";

    /**
     * Capital city
     */
    public string $capital = "Valletta";

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
    public string $en = "Malta";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Málta";

    /**
     * German name of the country
     */
    public string $de = "Malta";

    /**
     * Spanish name of the country
     */
    public string $es = "Malta";

    /**
     * Italian name of the country
     */
    public string $it = "Malta";

    /**
     * French name of the country
     */
    public string $fr = "Malte";
    
}
