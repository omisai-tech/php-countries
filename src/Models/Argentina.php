<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Argentina extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ARG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "32";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AR";

    /**
     * Telephone country code
     */
    public string $callingCode = "54";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "54";

    /**
     * Capital city
     */
    public string $capital = "Buenos Aires";

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
    public string $en = "Argentina";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Argentína";

    /**
     * German name of the country
     */
    public string $de = "Argentinien";

    /**
     * Spanish name of the country
     */
    public string $es = "Argentina";

    /**
     * Italian name of the country
     */
    public string $it = "Argentina";

    /**
     * French name of the country
     */
    public string $fr = "Argentine";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Argentina";
    
}
