<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Kyrgyzstan extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "KGZ";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "417";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "KG";

    /**
     * Phone dial code
     */
    public string $dial = "996";

    /**
     * Capital city
     */
    public string $capital = "Bishkek";

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
    public string $en = "Kyrgyzstan";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kirgizisztán";

    /**
     * German name of the country
     */
    public string $de = "Kirgisistan";

    /**
     * Spanish name of the country
     */
    public string $es = "Kirguistán";

    /**
     * Italian name of the country
     */
    public string $it = "Kirghizistan";

    /**
     * French name of the country
     */
    public string $fr = "Kirghizistan";
    
}
