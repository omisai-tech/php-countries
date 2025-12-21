<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Singapore extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SGP";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "702";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SN";

    /**
     * Telephone country code
     */
    public string $callingCode = "65";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "65";

    /**
     * Capital city
     */
    public string $capital = "Singapore";

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
    public string $en = "Singapore";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szingapúr";

    /**
     * German name of the country
     */
    public string $de = "Singapur";

    /**
     * Spanish name of the country
     */
    public string $es = "Singapur";

    /**
     * Italian name of the country
     */
    public string $it = "Singapore";

    /**
     * French name of the country
     */
    public string $fr = "Singapour";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Cingapura";
    
}
