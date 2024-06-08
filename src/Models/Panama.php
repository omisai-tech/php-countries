<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Panama extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "PAN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "591";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "PM";

    /**
     * Phone dial code
     */
    public string $dial = "507";

    /**
     * Capital city
     */
    public string $capital = "Panama City";

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
    public string $en = "Panama";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Panama";

    /**
     * German name of the country
     */
    public string $de = "Panama";

    /**
     * Spanish name of the country
     */
    public string $es = "Panamá";

    /**
     * Italian name of the country
     */
    public string $it = "Panama";

    /**
     * French name of the country
     */
    public string $fr = "Panama";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Panamá";

}
