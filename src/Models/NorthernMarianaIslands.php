<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class NorthernMarianaIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MP";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MNP";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "580";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CQ";

    /**
     * Telephone country code
     */
    public string $callingCode = "1-670";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "1-670";

    /**
     * Capital city
     */
    public string $capital = "Saipan";

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
    public string $en = "Northern Mariana Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Észak Mariana szigetek";

    /**
     * German name of the country
     */
    public string $de = "Nördliche Marianneninseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Marianas del Norte";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Marianne settentrionali";

    /**
     * French name of the country
     */
    public string $fr = "Îles Mariannes du Nord";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Ilhas Marianas do Norte";
    
}
