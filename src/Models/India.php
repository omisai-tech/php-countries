<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class India extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "IN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "IND";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "356";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "IN";

    /**
     * Capital city
     */
    public string $capital = "New Delhi";

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
    public string $en = "India";

    /**
     * Hungarian name of the country
     */
    public string $hu = "India";

    /**
     * German name of the country
     */
    public string $de = "Indien";

    /**
     * Spanish name of the country
     */
    public string $es = "India";

    /**
     * Italian name of the country
     */
    public string $it = "India";

    /**
     * French name of the country
     */
    public string $fr = "Inde";
    
}
