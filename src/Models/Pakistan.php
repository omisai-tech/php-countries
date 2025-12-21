<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Pakistan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "PAK";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "586";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "PK";

    /**
     * Telephone country code
     */
    public string $callingCode = "92";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "92";

    /**
     * Capital city
     */
    public string $capital = "Islamabad";

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
    public string $en = "Pakistan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Pakisztán";

    /**
     * German name of the country
     */
    public string $de = "Pakistan";

    /**
     * Spanish name of the country
     */
    public string $es = "Pakistán";

    /**
     * Italian name of the country
     */
    public string $it = "Pakistan";

    /**
     * French name of the country
     */
    public string $fr = "Pakistan";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Paquistão";
    
}
