<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Uganda extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "UG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "UGA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "800";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "UG";

    /**
     * Telephone country code
     */
    public string $callingCode = "256";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "256";

    /**
     * Capital city
     */
    public string $capital = "Kampala";

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
    public string $en = "Uganda";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Uganda";

    /**
     * German name of the country
     */
    public string $de = "Uganda";

    /**
     * Spanish name of the country
     */
    public string $es = "Uganda";

    /**
     * Italian name of the country
     */
    public string $it = "Uganda";

    /**
     * French name of the country
     */
    public string $fr = "Ouganda";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Uganda";
    
}
