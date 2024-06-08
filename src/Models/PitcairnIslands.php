<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class PitcairnIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "PCN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "612";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "PC";

    /**
     * Phone dial code
     */
    public string $dial = "870";

    /**
     * Capital city
     */
    public string $capital = "Adamstown";

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
    public string $continent = "OC";

    /**
     * English name of the country
     */
    public string $en = "Pitcairn Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Pitcairn-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Pitcairninseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Pitcairn";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Pitcairn";

    /**
     * French name of the country
     */
    public string $fr = "Îles Pitcairn";
    
}
