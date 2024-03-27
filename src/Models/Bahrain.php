<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Bahrain extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BH";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BHR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "48";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BA";

    /**
     * Capital city
     */
    public string $capital = "Manama";

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
    public string $en = "Bahrain";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Bahrein";

    /**
     * German name of the country
     */
    public string $de = "Bahrain";

    /**
     * Spanish name of the country
     */
    public string $es = "Bahréin";

    /**
     * Italian name of the country
     */
    public string $it = "Bahrein";

    /**
     * French name of the country
     */
    public string $fr = "Bahreïn";
    
}
