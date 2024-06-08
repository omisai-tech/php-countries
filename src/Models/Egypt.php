<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Egypt extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "EG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "EGY";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "818";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "EG";

    /**
     * Phone dial code
     */
    public string $dial = "20";

    /**
     * Capital city
     */
    public string $capital = "Cairo";

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
    public string $continent = "AF";

    /**
     * English name of the country
     */
    public string $en = "Egypt";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Egyiptom";

    /**
     * German name of the country
     */
    public string $de = "Ägypten";

    /**
     * Spanish name of the country
     */
    public string $es = "Egipto";

    /**
     * Italian name of the country
     */
    public string $it = "Egitto";

    /**
     * French name of the country
     */
    public string $fr = "Egypte";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Egito";

}
