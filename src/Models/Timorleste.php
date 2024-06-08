<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Timorleste extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TL";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "TLS";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "626";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "TT";

    /**
     * Phone dial code
     */
    public string $dial = "670";

    /**
     * Capital city
     */
    public string $capital = "Dili";

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
    public string $continent = "OC";

    /**
     * English name of the country
     */
    public string $en = "Timor-Leste";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kelet-Timor";

    /**
     * German name of the country
     */
    public string $de = "Osttimor";

    /**
     * Spanish name of the country
     */
    public string $es = "Timor Oriental";

    /**
     * Italian name of the country
     */
    public string $it = "Timor Est";

    /**
     * French name of the country
     */
    public string $fr = "Timor oriental";
    
}
