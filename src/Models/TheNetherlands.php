<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class TheNetherlands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NLD";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "528";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NL";

    /**
     * Telephone country code
     */
    public string $callingCode = "31";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "31";

    /**
     * Capital city
     */
    public string $capital = "Amsterdam";

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
    public string $en = "The Netherlands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Hollandia";

    /**
     * German name of the country
     */
    public string $de = "Niederlande";

    /**
     * Spanish name of the country
     */
    public string $es = "Países Bajos";

    /**
     * Italian name of the country
     */
    public string $it = "Olanda";

    /**
     * French name of the country
     */
    public string $fr = "Pays-Bas";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Os Países Baixos";
    
}
