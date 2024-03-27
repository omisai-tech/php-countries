<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Martinique extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MQ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MTQ";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "474";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MB";

    /**
     * Capital city
     */
    public string $capital = "Fort-de-France";

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
    public string $en = "Martinique";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Martinique";

    /**
     * German name of the country
     */
    public string $de = "Martinique";

    /**
     * Spanish name of the country
     */
    public string $es = "Martinica";

    /**
     * Italian name of the country
     */
    public string $it = "Martinica";

    /**
     * French name of the country
     */
    public string $fr = "Martinique";
    
}
