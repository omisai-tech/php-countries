<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Australia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AU";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "AUS";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "36";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AS";

    /**
     * Phone dial code
     */
    public string $dial = "61";

    /**
     * Capital city
     */
    public string $capital = "Canberra";

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
    public string $continent = "OC";

    /**
     * English name of the country
     */
    public string $en = "Australia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Ausztrália";

    /**
     * German name of the country
     */
    public string $de = "Australien";

    /**
     * Spanish name of the country
     */
    public string $es = "Australia";

    /**
     * Italian name of the country
     */
    public string $it = "Australia";

    /**
     * French name of the country
     */
    public string $fr = "Australie";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Austrália";

}
