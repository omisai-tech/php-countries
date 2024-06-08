<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class CongoRepublic extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "COG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "178";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CF";

    /**
     * Phone dial code
     */
    public string $dial = "242";

    /**
     * Capital city
     */
    public string $capital = "Brazzaville";

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
    public string $en = "Congo Republic";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kongói Köztársaság";

    /**
     * German name of the country
     */
    public string $de = "Republik Kongo";

    /**
     * Spanish name of the country
     */
    public string $es = "República del Congo";

    /**
     * Italian name of the country
     */
    public string $it = "Repubblica del Congo";

    /**
     * French name of the country
     */
    public string $fr = "République du Congo";

    /**
     * Portugees name of the country
     */
    public string $pt = "República do Congo";
    
}
