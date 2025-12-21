<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Guinea extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GIN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "324";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GV";

    /**
     * Telephone country code
     */
    public string $callingCode = "224";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "224";

    /**
     * Capital city
     */
    public string $capital = "Conakry";

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
    public string $en = "Guinea";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Guinea";

    /**
     * German name of the country
     */
    public string $de = "Guinea";

    /**
     * Spanish name of the country
     */
    public string $es = "Guinea";

    /**
     * Italian name of the country
     */
    public string $it = "Guinea";

    /**
     * French name of the country
     */
    public string $fr = "Guinée";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Guiné";
    
}
