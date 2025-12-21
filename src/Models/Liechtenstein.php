<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Liechtenstein extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "LI";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "LIE";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "438";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "LS";

    /**
     * Telephone country code
     */
    public string $callingCode = "423";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "423";

    /**
     * Capital city
     */
    public string $capital = "Vaduz";

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
    public string $continent = "EU";

    /**
     * English name of the country
     */
    public string $en = "Liechtenstein";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Liechtenstein";

    /**
     * German name of the country
     */
    public string $de = "Liechtenstein";

    /**
     * Spanish name of the country
     */
    public string $es = "Liechtenstein";

    /**
     * Italian name of the country
     */
    public string $it = "Liechtenstein";

    /**
     * French name of the country
     */
    public string $fr = "Liechtenstein";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Liechtenstein";
    
}
