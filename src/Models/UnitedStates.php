<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class UnitedStates extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "US";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "USA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "840";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "US";

    /**
     * Phone dial code
     */
    public string $dial = "1";

    /**
     * Capital city
     */
    public string $capital = "Washington";

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
    public string $en = "United States";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Egyesült Államok";

    /**
     * German name of the country
     */
    public string $de = "Vereinigte Staaten";

    /**
     * Spanish name of the country
     */
    public string $es = "Estados Unidos";

    /**
     * Italian name of the country
     */
    public string $it = "stati Uniti";

    /**
     * French name of the country
     */
    public string $fr = "États-Unis";

    /**
     * Portugees name of the country
     */
    public string $pt = "Estados Unidos";
    
}
