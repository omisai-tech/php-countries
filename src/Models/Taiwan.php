<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Taiwan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TW";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TWN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "158";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TW";

    /**
     * Phone dial code
     */
    public string $dial = "886";

    /**
     * Capital city
     */
    public string $capital = "Taipei";

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
    public string $en = "Taiwan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Tajvan";

    /**
     * German name of the country
     */
    public string $de = "Taiwan";

    /**
     * Spanish name of the country
     */
    public string $es = "Taiwán";

    /**
     * Italian name of the country
     */
    public string $it = "Taiwan";

    /**
     * French name of the country
     */
    public string $fr = "Taïwan";

    /**
     * Portugees name of the country
     */
    public string $pt = "Taiwan";
    
}
