<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Finland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "FI";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "FIN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "246";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "FI";

    /**
     * Phone dial code
     */
    public string $dial = "358";

    /**
     * Capital city
     */
    public string $capital = "Helsinki";

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
    public string $en = "Finland";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Finnország";

    /**
     * German name of the country
     */
    public string $de = "Finnland";

    /**
     * Spanish name of the country
     */
    public string $es = "Finlandia";

    /**
     * Italian name of the country
     */
    public string $it = "Finlandia";

    /**
     * French name of the country
     */
    public string $fr = "Finlande";

    /**
     * Portugees name of the country
     */
    public string $pt = "Finlândia";
    
}
