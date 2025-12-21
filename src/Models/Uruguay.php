<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Uruguay extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "UY";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "URY";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "858";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "UY";

    /**
     * Telephone country code
     */
    public string $callingCode = "598";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "598";

    /**
     * Capital city
     */
    public string $capital = "Montevideo";

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
    public string $continent = "SA";

    /**
     * English name of the country
     */
    public string $en = "Uruguay";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Uruguay";

    /**
     * German name of the country
     */
    public string $de = "Uruguay";

    /**
     * Spanish name of the country
     */
    public string $es = "Uruguay";

    /**
     * Italian name of the country
     */
    public string $it = "Uruguay";

    /**
     * French name of the country
     */
    public string $fr = "Uruguay";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Uruguai";
    
}
