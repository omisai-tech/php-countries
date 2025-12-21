<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Peru extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "PER";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "604";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "PE";

    /**
     * Telephone country code
     */
    public string $callingCode = "51";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "51";

    /**
     * Capital city
     */
    public string $capital = "Lima";

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
    public string $en = "Peru";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Peru";

    /**
     * German name of the country
     */
    public string $de = "Peru";

    /**
     * Spanish name of the country
     */
    public string $es = "Perú";

    /**
     * Italian name of the country
     */
    public string $it = "Perù";

    /**
     * French name of the country
     */
    public string $fr = "Pérou";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Peru";
    
}
