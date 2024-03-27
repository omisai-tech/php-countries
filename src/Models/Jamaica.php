<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Jamaica extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "JM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "JAM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "388";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "JM";

    /**
     * Capital city
     */
    public string $capital = "Kingston";

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
    public string $en = "Jamaica";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Jamaica";

    /**
     * German name of the country
     */
    public string $de = "Jamaika";

    /**
     * Spanish name of the country
     */
    public string $es = "Jamaica";

    /**
     * Italian name of the country
     */
    public string $it = "Giamaica";

    /**
     * French name of the country
     */
    public string $fr = "Jamaïque";
    
}