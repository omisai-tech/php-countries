<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Romania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "RO";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ROU";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "642";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "RO";

    /**
     * Phone dial code
     */
    public string $dial = "40";

    /**
     * Capital city
     */
    public string $capital = "Bucharest";

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
    public string $en = "Romania";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Románia";

    /**
     * German name of the country
     */
    public string $de = "Rumänien";

    /**
     * Spanish name of the country
     */
    public string $es = "Rumania";

    /**
     * Italian name of the country
     */
    public string $it = "Romania";

    /**
     * French name of the country
     */
    public string $fr = "Roumanie";
    
}
