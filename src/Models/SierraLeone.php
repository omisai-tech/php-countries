<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SierraLeone extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SLE";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "694";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SL";

    /**
     * Phone dial code
     */
    public string $dial = "232";

    /**
     * Capital city
     */
    public string $capital = "Freetown";

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
    public string $en = "Sierra Leone";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Sierra Leone";

    /**
     * German name of the country
     */
    public string $de = "Sierra Leone";

    /**
     * Spanish name of the country
     */
    public string $es = "Sierra Leona";

    /**
     * Italian name of the country
     */
    public string $it = "Sierra Leone";

    /**
     * French name of the country
     */
    public string $fr = "Sierra Leone";

    /**
     * Portugees name of the country
     */
    public string $pt = "Serra Leoa";
    
}
