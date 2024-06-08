<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class CocoskeelingIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CC";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CCK";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "166";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CK";

    /**
     * Phone dial code
     */
    public string $dial = "61";

    /**
     * Capital city
     */
    public string $capital = "West Island";

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
    public string $en = "Cocos (Keeling) Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kókusz (Keeling)-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Kokosinseln (Keelinginseln).";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Cocos (Keeling)";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Cocos (Keeling).";

    /**
     * French name of the country
     */
    public string $fr = "Îles Cocos (Keeling)";

    /**
     * Portugees name of the country
     */
    public string $pt = "Ilhas Cocos (Keeling)";
    
}
