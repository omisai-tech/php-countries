<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SriLanka extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "LK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "LKA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "144";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CE";

    /**
     * Telephone country code
     */
    public string $callingCode = "94";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "94";

    /**
     * Capital city
     */
    public string $capital = "Colombo";

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
    public string $en = "Sri Lanka";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Sri Lanka";

    /**
     * German name of the country
     */
    public string $de = "Sri Lanka";

    /**
     * Spanish name of the country
     */
    public string $es = "Sri Lanka";

    /**
     * Italian name of the country
     */
    public string $it = "Sri Lanka";

    /**
     * French name of the country
     */
    public string $fr = "Sri Lanka";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Sri Lanka";
    
}
