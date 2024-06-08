<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class NorthMacedonia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MKD";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "807";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MK";

    /**
     * Phone dial code
     */
    public string $dial = "389";

    /**
     * Capital city
     */
    public string $capital = "Skopje";

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
    public string $en = "North Macedonia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Észak-Macedónia";

    /**
     * German name of the country
     */
    public string $de = "Nordmazedonien";

    /**
     * Spanish name of the country
     */
    public string $es = "Macedonia del Norte";

    /**
     * Italian name of the country
     */
    public string $it = "Macedonia del Nord";

    /**
     * French name of the country
     */
    public string $fr = "Macédoine du Nord";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Macedônia do Norte";

}
