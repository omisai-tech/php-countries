<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class UsOutlyingIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "UM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "UMI";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "581";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "";

    /**
     * Telephone country code
     */
    public string $callingCode = " ";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = " ";

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
    public string $continent = "OC";

    /**
     * English name of the country
     */
    public string $en = "U.S. Outlying Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Az Egyesült Államok külső szigetei";

    /**
     * German name of the country
     */
    public string $de = "Äußere Inseln der USA";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas exteriores de EE. UU.";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Esterne degli Stati Uniti";

    /**
     * French name of the country
     */
    public string $fr = "Îles extérieures des États-Unis";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Ilhas Distantes dos EUA";
    
}
