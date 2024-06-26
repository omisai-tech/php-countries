<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SaudiArabia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SAU";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "682";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SA";

    /**
     * Phone dial code
     */
    public string $dial = "966";

    /**
     * Capital city
     */
    public string $capital = "Riyadh";

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
    public string $en = "Saudi Arabia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Szaud-Arábia";

    /**
     * German name of the country
     */
    public string $de = "Saudi-Arabien";

    /**
     * Spanish name of the country
     */
    public string $es = "Arabia Saudita";

    /**
     * Italian name of the country
     */
    public string $it = "Arabia Saudita";

    /**
     * French name of the country
     */
    public string $fr = "Arabie Saoudite";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Arábia Saudita";

}
