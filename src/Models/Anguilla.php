<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Anguilla extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AI";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "AIA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "660";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AV";

    /**
     * Phone dial code
     */
    public string $dial = "1-264";

    /**
     * Capital city
     */
    public string $capital = "The Valley";

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
    public string $en = "Anguilla";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Anguilla";

    /**
     * German name of the country
     */
    public string $de = "Anguilla";

    /**
     * Spanish name of the country
     */
    public string $es = "Anguila";

    /**
     * Italian name of the country
     */
    public string $it = "Anguilla";

    /**
     * French name of the country
     */
    public string $fr = "Anguilla";

    /**
     * Portugees name of the country
     */
    public string $pt = "Anguila";
    
}
