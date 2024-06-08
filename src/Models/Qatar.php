<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Qatar extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "QA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "QAT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "634";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "QA";

    /**
     * Phone dial code
     */
    public string $dial = "974";

    /**
     * Capital city
     */
    public string $capital = "Doha";

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
    public string $en = "Qatar";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Katar";

    /**
     * German name of the country
     */
    public string $de = "Katar";

    /**
     * Spanish name of the country
     */
    public string $es = "Katar";

    /**
     * Italian name of the country
     */
    public string $it = "Qatar";

    /**
     * French name of the country
     */
    public string $fr = "Qatar";
    
}
