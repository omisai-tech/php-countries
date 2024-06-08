<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class AmericanSamoa extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AS";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ASM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "16";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AQ";

    /**
     * Phone dial code
     */
    public string $dial = "1-684";

    /**
     * Capital city
     */
    public string $capital = "Pago Pago";

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
    public string $en = "American Samoa";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Amerikai Szamoa";

    /**
     * German name of the country
     */
    public string $de = "Amerikanischen Samoa-Inseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Samoa Americana";

    /**
     * Italian name of the country
     */
    public string $it = "Samoa americane";

    /**
     * French name of the country
     */
    public string $fr = "Samoa américaines";
    
}
