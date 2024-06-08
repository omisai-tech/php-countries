<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Honduras extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "HN";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "HND";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "340";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "HO";

    /**
     * Phone dial code
     */
    public string $dial = "504";

    /**
     * Capital city
     */
    public string $capital = "Tegucigalpa";

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
    public string $en = "Honduras";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Honduras";

    /**
     * German name of the country
     */
    public string $de = "Honduras";

    /**
     * Spanish name of the country
     */
    public string $es = "Honduras";

    /**
     * Italian name of the country
     */
    public string $it = "Honduras";

    /**
     * French name of the country
     */
    public string $fr = "Honduras";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Honduras";

}
