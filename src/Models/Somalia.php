<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Somalia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SOM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "706";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SO";

    /**
     * Phone dial code
     */
    public string $dial = "252";

    /**
     * Capital city
     */
    public string $capital = "Mogadishu";

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
    public string $en = "Somalia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szomália";

    /**
     * German name of the country
     */
    public string $de = "Somalia";

    /**
     * Spanish name of the country
     */
    public string $es = "Somalia";

    /**
     * Italian name of the country
     */
    public string $it = "Somalia";

    /**
     * French name of the country
     */
    public string $fr = "Somalie";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Somália";

}
