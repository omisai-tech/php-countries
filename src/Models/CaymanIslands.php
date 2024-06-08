<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class CaymanIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "KY";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CYM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "136";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CJ";

    /**
     * Phone dial code
     */
    public string $dial = "1-345";

    /**
     * Capital city
     */
    public string $capital = "George Town";

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
    public string $continent = "NA";

    /**
     * English name of the country
     */
    public string $en = "Cayman Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kajmán-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Cayman Inseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Caimán";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Cayman";

    /**
     * French name of the country
     */
    public string $fr = "Îles Caïmans";
    
}
