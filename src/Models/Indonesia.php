<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Indonesia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "ID";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "IDN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "360";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "ID";

    /**
     * Phone dial code
     */
    public string $dial = "62";

    /**
     * Capital city
     */
    public string $capital = "Jakarta";

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
    public string $en = "Indonesia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Indonézia";

    /**
     * German name of the country
     */
    public string $de = "Indonesien";

    /**
     * Spanish name of the country
     */
    public string $es = "Indonesia";

    /**
     * Italian name of the country
     */
    public string $it = "Indonesia";

    /**
     * French name of the country
     */
    public string $fr = "Indonésie";

    /**
     * Portugees name of the country
     */
    public string $pt = "Indonésia";
    
}
