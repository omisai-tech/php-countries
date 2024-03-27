<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Belarus extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BY";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BLR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "112";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BO";

    /**
     * Capital city
     */
    public string $capital = "Minsk";

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
    public string $en = "Belarus";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Fehéroroszország";

    /**
     * German name of the country
     */
    public string $de = "Weißrussland";

    /**
     * Spanish name of the country
     */
    public string $es = "Bielorrusia";

    /**
     * Italian name of the country
     */
    public string $it = "Bielorussia";

    /**
     * French name of the country
     */
    public string $fr = "Biélorussie";
    
}
