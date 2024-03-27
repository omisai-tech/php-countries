<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Botswana extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BW";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BWA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "72";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BC";

    /**
     * Capital city
     */
    public string $capital = "Gaborone";

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
    public string $en = "Botswana";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Botswana";

    /**
     * German name of the country
     */
    public string $de = "Botswana";

    /**
     * Spanish name of the country
     */
    public string $es = "Botsuana";

    /**
     * Italian name of the country
     */
    public string $it = "Botswana";

    /**
     * French name of the country
     */
    public string $fr = "Botswana";
    
}
