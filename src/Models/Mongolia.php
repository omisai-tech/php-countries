<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Mongolia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MNG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "496";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MG";

    /**
     * Phone dial code
     */
    public string $dial = "976";

    /**
     * Capital city
     */
    public string $capital = "Ulaanbaatar";

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
    public string $en = "Mongolia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mongólia";

    /**
     * German name of the country
     */
    public string $de = "Mongolei";

    /**
     * Spanish name of the country
     */
    public string $es = "Mongolia";

    /**
     * Italian name of the country
     */
    public string $it = "Mongolia";

    /**
     * French name of the country
     */
    public string $fr = "Mongolie";

    /**
     * Portugees name of the country
     */
    public string $pt = "Mongólia";
    
}
