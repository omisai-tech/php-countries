<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Bhutan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BT";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BTN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "64";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BT";

    /**
     * Capital city
     */
    public string $capital = "Thimphu";

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
    public string $en = "Bhutan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Bhután";

    /**
     * German name of the country
     */
    public string $de = "Bhutan";

    /**
     * Spanish name of the country
     */
    public string $es = "Bután";

    /**
     * Italian name of the country
     */
    public string $it = "Bhutan";

    /**
     * French name of the country
     */
    public string $fr = "Bhoutan";
    
}
