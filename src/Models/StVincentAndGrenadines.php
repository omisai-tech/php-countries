<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class StVincentAndGrenadines extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "VC";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "VCT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "670";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "VC";

    /**
     * Phone dial code
     */
    public string $dial = "1-784";

    /**
     * Capital city
     */
    public string $capital = "Kingstown";

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
    public string $en = "St Vincent and Grenadines";

    /**
     * Hungarian name of the country
     */
    public string $hu = "St Vincent és Grenadine-szigetek";

    /**
     * German name of the country
     */
    public string $de = "St. Vincent und die Grenadinen";

    /**
     * Spanish name of the country
     */
    public string $es = "San Vicente y las Granadinas";

    /**
     * Italian name of the country
     */
    public string $it = "Saint Vincent e Grenadine";

    /**
     * French name of the country
     */
    public string $fr = "Saint-Vincent-et-les Grenadines";

    /**
     * Portugees name of the country
     */
    public string $pt = "São Vicente e Granadinas";
    
}
