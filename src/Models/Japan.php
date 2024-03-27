<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Japan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "JP";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "JPN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "392";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "JA";

    /**
     * Capital city
     */
    public string $capital = "Tokyo";

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
    public string $en = "Japan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Japán";

    /**
     * German name of the country
     */
    public string $de = "Japan";

    /**
     * Spanish name of the country
     */
    public string $es = "Japón";

    /**
     * Italian name of the country
     */
    public string $it = "Giappone";

    /**
     * French name of the country
     */
    public string $fr = "Japon";
    
}
