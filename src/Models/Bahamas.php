<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Bahamas extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BS";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BHS";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "44";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BF";

    /**
     * Phone dial code
     */
    public string $dial = "1-242";

    /**
     * Capital city
     */
    public string $capital = "Nassau";

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
    public string $en = "Bahamas";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Bahamák";

    /**
     * German name of the country
     */
    public string $de = "Bahamas";

    /**
     * Spanish name of the country
     */
    public string $es = "bahamas";

    /**
     * Italian name of the country
     */
    public string $it = "Bahamas";

    /**
     * French name of the country
     */
    public string $fr = "Bahamas";

    /**
     * Portugees name of the country
     */
    public string $pt = "Bahamas";
    
}
