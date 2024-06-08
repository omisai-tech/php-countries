<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class ElSalvador extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SV";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SLV";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "222";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "ES";

    /**
     * Phone dial code
     */
    public string $dial = "503";

    /**
     * Capital city
     */
    public string $capital = "San Salvador";

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
    public string $en = "El Salvador";

    /**
     * Hungarian name of the country
     */
    public string $hu = "El Salvador";

    /**
     * German name of the country
     */
    public string $de = "El Salvador";

    /**
     * Spanish name of the country
     */
    public string $es = "El Salvador";

    /**
     * Italian name of the country
     */
    public string $it = "El Salvador";

    /**
     * French name of the country
     */
    public string $fr = "Le Salvador";
    
}
