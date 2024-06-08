<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Estonia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "EE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "EST";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "233";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "EN";

    /**
     * Phone dial code
     */
    public string $dial = "372";

    /**
     * Capital city
     */
    public string $capital = "Tallinn";

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
    public string $en = "Estonia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Észtország";

    /**
     * German name of the country
     */
    public string $de = "Estland";

    /**
     * Spanish name of the country
     */
    public string $es = "Estonia";

    /**
     * Italian name of the country
     */
    public string $it = "Estonia";

    /**
     * French name of the country
     */
    public string $fr = "Estonie";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Estônia";

}
