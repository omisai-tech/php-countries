<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Micronesia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "FM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "FSM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "583";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "FM";

    /**
     * Phone dial code
     */
    public string $dial = "691";

    /**
     * Capital city
     */
    public string $capital = "Palikir";

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
    public string $en = "Micronesia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mikronézia";

    /**
     * German name of the country
     */
    public string $de = "Mikronesien";

    /**
     * Spanish name of the country
     */
    public string $es = "Micronesia";

    /**
     * Italian name of the country
     */
    public string $it = "Micronesia";

    /**
     * French name of the country
     */
    public string $fr = "Micronésie";
    
}
