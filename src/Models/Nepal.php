<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Nepal extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NP";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NPL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "524";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NP";

    /**
     * Phone dial code
     */
    public string $dial = "977";

    /**
     * Capital city
     */
    public string $capital = "Kathmandu";

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
    public string $en = "Nepal";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Nepál";

    /**
     * German name of the country
     */
    public string $de = "Nepal";

    /**
     * Spanish name of the country
     */
    public string $es = "Nepal";

    /**
     * Italian name of the country
     */
    public string $it = "Nepal";

    /**
     * French name of the country
     */
    public string $fr = "Népal";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Nepal";

}
