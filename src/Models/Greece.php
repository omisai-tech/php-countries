<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Greece extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GRC";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "300";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GR";

    /**
     * Capital city
     */
    public string $capital = "Athens";

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
    public string $en = "Greece";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Görögország";

    /**
     * German name of the country
     */
    public string $de = "Griechenland";

    /**
     * Spanish name of the country
     */
    public string $es = "Grecia";

    /**
     * Italian name of the country
     */
    public string $it = "Grecia";

    /**
     * French name of the country
     */
    public string $fr = "Grèce";
    
}
