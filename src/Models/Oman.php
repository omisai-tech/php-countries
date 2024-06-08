<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Oman extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "OM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "OMN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "512";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MU";

    /**
     * Phone dial code
     */
    public string $dial = "968";

    /**
     * Capital city
     */
    public string $capital = "Muscat";

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
    public string $en = "Oman";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Omán";

    /**
     * German name of the country
     */
    public string $de = "Oman";

    /**
     * Spanish name of the country
     */
    public string $es = "Omán";

    /**
     * Italian name of the country
     */
    public string $it = "Oman";

    /**
     * French name of the country
     */
    public string $fr = "Oman";

    /**
     * Portugees name of the country
     */
    public string $pt = "Omã";
    
}
