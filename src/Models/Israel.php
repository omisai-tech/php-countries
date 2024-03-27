<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Israel extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "IL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ISR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "376";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "IS";

    /**
     * Capital city
     */
    public string $capital = "Jerusalem";

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
    public string $en = "Israel";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Izrael";

    /**
     * German name of the country
     */
    public string $de = "Israel";

    /**
     * Spanish name of the country
     */
    public string $es = "Israel";

    /**
     * Italian name of the country
     */
    public string $it = "Israele";

    /**
     * French name of the country
     */
    public string $fr = "Israël";
    
}
