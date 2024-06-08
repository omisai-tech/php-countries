<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class IsleOfMan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "IM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "IMN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "833";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "IM";

    /**
     * Phone dial code
     */
    public string $dial = "44";

    /**
     * Capital city
     */
    public string $capital = "Douglas";

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
    public string $en = "Isle of Man";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Man-sziget";

    /**
     * German name of the country
     */
    public string $de = "Isle of Man";

    /**
     * Spanish name of the country
     */
    public string $es = "Isla del hombre";

    /**
     * Italian name of the country
     */
    public string $it = "Isola di Man";

    /**
     * French name of the country
     */
    public string $fr = "île de Man";
    
}
