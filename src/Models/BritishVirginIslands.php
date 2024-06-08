<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class BritishVirginIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "VG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "VGB";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "92";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "VI";

    /**
     * Phone dial code
     */
    public string $dial = "1-284";

    /**
     * Capital city
     */
    public string $capital = "Road Town";

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
    public string $en = "British Virgin Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Brit Virgin szigetek";

    /**
     * German name of the country
     */
    public string $de = "Britische Jungferninseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Vírgenes Británicas";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Vergini Britanniche";

    /**
     * French name of the country
     */
    public string $fr = "Îles Vierges britanniques";
    
}
