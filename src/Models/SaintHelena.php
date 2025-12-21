<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SaintHelena extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SH";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SHN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "654";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SH";

    /**
     * Telephone country code
     */
    public string $callingCode = "290";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "290";

    /**
     * Capital city
     */
    public string $capital = "Jamestown";

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
    public string $en = "Saint Helena";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szent Ilona";

    /**
     * German name of the country
     */
    public string $de = "St. Helena";

    /**
     * Spanish name of the country
     */
    public string $es = "santa elena";

    /**
     * Italian name of the country
     */
    public string $it = "Sant'Elena";

    /**
     * French name of the country
     */
    public string $fr = "Sainte-Hélène";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Santa Helena";
    
}
