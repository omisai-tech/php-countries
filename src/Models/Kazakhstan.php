<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Kazakhstan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "KAZ";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "398";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "KZ";

    /**
     * Capital city
     */
    public string $capital = "Nur-Sultan";

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
    public string $en = "Kazakhstan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kazahsztán";

    /**
     * German name of the country
     */
    public string $de = "Kasachstan";

    /**
     * Spanish name of the country
     */
    public string $es = "Kazajstán";

    /**
     * Italian name of the country
     */
    public string $it = "Kazakistan";

    /**
     * French name of the country
     */
    public string $fr = "Kazakhstan";
    
}
