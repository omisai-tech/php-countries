<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Iraq extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "IQ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "IRQ";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "368";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "IZ";

    /**
     * Phone dial code
     */
    public string $dial = "964";

    /**
     * Capital city
     */
    public string $capital = "Baghdad";

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
    public string $en = "Iraq";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Irak";

    /**
     * German name of the country
     */
    public string $de = "Irak";

    /**
     * Spanish name of the country
     */
    public string $es = "Irak";

    /**
     * Italian name of the country
     */
    public string $it = "Iraq";

    /**
     * French name of the country
     */
    public string $fr = "Irak";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Iraque";

}
