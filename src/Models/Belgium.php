<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Belgium extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BEL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "56";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BE";

    /**
     * Telephone country code
     */
    public string $callingCode = "32";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "32";

    /**
     * Capital city
     */
    public string $capital = "Brussels";

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
    public string $en = "Belgium";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Belgium";

    /**
     * German name of the country
     */
    public string $de = "Belgien";

    /**
     * Spanish name of the country
     */
    public string $es = "Bélgica";

    /**
     * Italian name of the country
     */
    public string $it = "Belgio";

    /**
     * French name of the country
     */
    public string $fr = "Belgique";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Bélgica";
    
}
