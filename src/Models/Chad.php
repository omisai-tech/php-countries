<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Chad extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TD";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TCD";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "148";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CD";

    /**
     * Telephone country code
     */
    public string $callingCode = "235";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "235";

    /**
     * Capital city
     */
    public string $capital = "N'Djamena";

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
    public string $en = "Chad";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Csád";

    /**
     * German name of the country
     */
    public string $de = "Tschad";

    /**
     * Spanish name of the country
     */
    public string $es = "Chad";

    /**
     * Italian name of the country
     */
    public string $it = "Chad";

    /**
     * French name of the country
     */
    public string $fr = "Tchad";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Chade";
    
}
