<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Grenada extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GD";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GRD";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "308";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GJ";

    /**
     * Telephone country code
     */
    public string $callingCode = "1-473";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "1-473";

    /**
     * Capital city
     */
    public string $capital = "St. George's";

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
    public string $en = "Grenada";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Grenada";

    /**
     * German name of the country
     */
    public string $de = "Granate";

    /**
     * Spanish name of the country
     */
    public string $es = "Granada";

    /**
     * Italian name of the country
     */
    public string $it = "Bomba a mano";

    /**
     * French name of the country
     */
    public string $fr = "Grenade";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Granada";
    
}
