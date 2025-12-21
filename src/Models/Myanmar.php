<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Myanmar extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MMR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "104";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BM";

    /**
     * Telephone country code
     */
    public string $callingCode = "95";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "95";

    /**
     * Capital city
     */
    public string $capital = "Nay Pyi Taw";

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
    public string $en = "Myanmar";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mianmar";

    /**
     * German name of the country
     */
    public string $de = "Myanmar";

    /**
     * Spanish name of the country
     */
    public string $es = "Birmania";

    /**
     * Italian name of the country
     */
    public string $it = "Myanmar";

    /**
     * French name of the country
     */
    public string $fr = "Birmanie";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Mianmar";
    
}
