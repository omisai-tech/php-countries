<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Antarctica extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AQ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ATA";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "10";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AY";

    /**
     * Phone dial code
     */
    public string $dial = "672";

    /**
     * Capital city
     */
    public string $capital = "";

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
    public string $continent = "AN";

    /**
     * English name of the country
     */
    public string $en = "Antarctica";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Antarktisz";

    /**
     * German name of the country
     */
    public string $de = "Antarktis";

    /**
     * Spanish name of the country
     */
    public string $es = "Antártida";

    /**
     * Italian name of the country
     */
    public string $it = "Antartide";

    /**
     * French name of the country
     */
    public string $fr = "Antarctique";
    
}
