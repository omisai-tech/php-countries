<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Suriname extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SUR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "740";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NS";

    /**
     * Phone dial code
     */
    public string $dial = "597";

    /**
     * Capital city
     */
    public string $capital = "Paramaribo";

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
    public string $continent = "SA";

    /**
     * English name of the country
     */
    public string $en = "Suriname";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Suriname";

    /**
     * German name of the country
     */
    public string $de = "Surinam";

    /**
     * Spanish name of the country
     */
    public string $es = "Surinam";

    /**
     * Italian name of the country
     */
    public string $it = "Suriname";

    /**
     * French name of the country
     */
    public string $fr = "Surinam";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Suriname";

}
