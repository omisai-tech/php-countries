<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Cambodia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KH";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "KHM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "116";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CB";

    /**
     * Phone dial code
     */
    public string $dial = "855";

    /**
     * Capital city
     */
    public string $capital = "Phnom Penh";

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
    public string $en = "Cambodia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kambodzsa";

    /**
     * German name of the country
     */
    public string $de = "Kambodscha";

    /**
     * Spanish name of the country
     */
    public string $es = "Camboya";

    /**
     * Italian name of the country
     */
    public string $it = "Cambogia";

    /**
     * French name of the country
     */
    public string $fr = "Cambodge";

    /**
     * Portugees name of the country
     */
    public string $pt = "Camboja";
    
}
