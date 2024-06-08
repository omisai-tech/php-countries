<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Moldova extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MD";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MDA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "498";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MD";

    /**
     * Phone dial code
     */
    public string $dial = "373";

    /**
     * Capital city
     */
    public string $capital = "Chisinau";

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
    public string $continent = "EU";

    /**
     * English name of the country
     */
    public string $en = "Moldova";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Moldova";

    /**
     * German name of the country
     */
    public string $de = "Moldawien";

    /**
     * Spanish name of the country
     */
    public string $es = "Moldavia";

    /**
     * Italian name of the country
     */
    public string $it = "Moldavia";

    /**
     * French name of the country
     */
    public string $fr = "Moldavie";

    /**
     * Portugees name of the country
     */
    public string $pt = "Moldávia";
    
}
