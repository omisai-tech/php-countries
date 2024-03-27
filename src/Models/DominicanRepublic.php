<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class DominicanRepublic extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "DO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "DOM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "214";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "DR";

    /**
     * Capital city
     */
    public string $capital = "Santo Domingo";

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
    public string $en = "Dominican Republic";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Dominikai Köztársaság";

    /**
     * German name of the country
     */
    public string $de = "Dominikanische Republik";

    /**
     * Spanish name of the country
     */
    public string $es = "República Dominicana";

    /**
     * Italian name of the country
     */
    public string $it = "Repubblica Dominicana";

    /**
     * French name of the country
     */
    public string $fr = "République dominicaine";
    
}
