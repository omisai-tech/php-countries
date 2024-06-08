<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Georgia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GEO";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "268";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GG";

    /**
     * Phone dial code
     */
    public string $dial = "995";

    /**
     * Capital city
     */
    public string $capital = "Tbilisi";

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
    public string $en = "Georgia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Grúzia";

    /**
     * German name of the country
     */
    public string $de = "Georgia";

    /**
     * Spanish name of the country
     */
    public string $es = "Georgia";

    /**
     * Italian name of the country
     */
    public string $it = "Georgia";

    /**
     * French name of the country
     */
    public string $fr = "Géorgie";
    
}
