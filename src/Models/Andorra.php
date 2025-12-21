<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Andorra extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AD";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "AND";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "20";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AN";

    /**
     * Telephone country code
     */
    public string $callingCode = "376";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "376";

    /**
     * Capital city
     */
    public string $capital = "Andorra la Vella";

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
    public string $en = "Andorra";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Andorra";

    /**
     * German name of the country
     */
    public string $de = "Andorra";

    /**
     * Spanish name of the country
     */
    public string $es = "Andorra";

    /**
     * Italian name of the country
     */
    public string $it = "Andorra";

    /**
     * French name of the country
     */
    public string $fr = "Andorre";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Andorra";
    
}
