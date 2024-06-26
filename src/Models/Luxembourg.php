<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Luxembourg extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "LU";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "LUX";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "442";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "LU";

    /**
     * Phone dial code
     */
    public string $dial = "352";

    /**
     * Capital city
     */
    public string $capital = "Luxembourg";

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
    public string $en = "Luxembourg";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Luxemburg";

    /**
     * German name of the country
     */
    public string $de = "Luxemburg";

    /**
     * Spanish name of the country
     */
    public string $es = "Luxemburgo";

    /**
     * Italian name of the country
     */
    public string $it = "Lussemburgo";

    /**
     * French name of the country
     */
    public string $fr = "Luxembourg";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Luxemburgo";

}
