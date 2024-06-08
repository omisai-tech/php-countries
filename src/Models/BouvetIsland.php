<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class BouvetIsland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BV";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BVT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "74";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BV";

    /**
     * Phone dial code
     */
    public string $dial = "47";

    /**
     * Capital city
     */
    public string $capital = "";

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
    public string $continent = "AN";

    /**
     * English name of the country
     */
    public string $en = "Bouvet Island";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Bouvet-sziget";

    /**
     * German name of the country
     */
    public string $de = "Bouvetinsel";

    /**
     * Spanish name of the country
     */
    public string $es = "Isla Bouvet";

    /**
     * Italian name of the country
     */
    public string $it = "Isola Bouvet";

    /**
     * French name of the country
     */
    public string $fr = "Île Bouvet";
    
}
