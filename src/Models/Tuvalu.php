<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Tuvalu extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TV";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TUV";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "798";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TV";

    /**
     * Phone dial code
     */
    public string $dial = "688";

    /**
     * Capital city
     */
    public string $capital = "Funafuti";

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
    public string $en = "Tuvalu";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Tuvalu";

    /**
     * German name of the country
     */
    public string $de = "Tuvalu";

    /**
     * Spanish name of the country
     */
    public string $es = "Tuvalu";

    /**
     * Italian name of the country
     */
    public string $it = "Tuvalu";

    /**
     * French name of the country
     */
    public string $fr = "Tuvalu";

    /**
     * Portugees name of the country
     */
    public string $pt = "Tuvalu";
    
}
