<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Canada extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CAN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "124";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CA";

    /**
     * Telephone country code
     */
    public string $callingCode = "1";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "1";

    /**
     * Capital city
     */
    public string $capital = "Ottawa";

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
    public string $en = "Canada";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kanada";

    /**
     * German name of the country
     */
    public string $de = "Kanada";

    /**
     * Spanish name of the country
     */
    public string $es = "Canadá";

    /**
     * Italian name of the country
     */
    public string $it = "Canada";

    /**
     * French name of the country
     */
    public string $fr = "Canada";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Canadá";
    
}
