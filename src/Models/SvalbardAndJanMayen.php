<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SvalbardAndJanMayen extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SJ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SJM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "744";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SV";

    /**
     * Phone dial code
     */
    public string $dial = "47";

    /**
     * Capital city
     */
    public string $capital = "Longyearbyen";

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
    public string $en = "Svalbard and Jan Mayen";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Svalbard és Jan Mayen";

    /**
     * German name of the country
     */
    public string $de = "Spitzbergen und Jan Mayen";

    /**
     * Spanish name of the country
     */
    public string $es = "Svalbard y Jan Mayen";

    /**
     * Italian name of the country
     */
    public string $it = "Svalbard e Jan Mayen";

    /**
     * French name of the country
     */
    public string $fr = "Svalbard et Jan Mayen";
    
}
