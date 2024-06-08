<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Guatemala extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GT";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "GTM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "320";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "GT";

    /**
     * Phone dial code
     */
    public string $dial = "502";

    /**
     * Capital city
     */
    public string $capital = "Guatemala City";

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
    public string $en = "Guatemala";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Guatemala";

    /**
     * German name of the country
     */
    public string $de = "Guatemala";

    /**
     * Spanish name of the country
     */
    public string $es = "Guatemala";

    /**
     * Italian name of the country
     */
    public string $it = "Guatemala";

    /**
     * French name of the country
     */
    public string $fr = "Guatemala";
    
}
