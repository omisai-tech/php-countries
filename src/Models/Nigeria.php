<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Nigeria extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NGA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "566";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NI";

    /**
     * Capital city
     */
    public string $capital = "Abuja";

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
    public string $en = "Nigeria";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Nigéria";

    /**
     * German name of the country
     */
    public string $de = "Nigeria";

    /**
     * Spanish name of the country
     */
    public string $es = "Nigeria";

    /**
     * Italian name of the country
     */
    public string $it = "Nigeria";

    /**
     * French name of the country
     */
    public string $fr = "Nigeria";
    
}