<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class CookIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CK";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "COK";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "184";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CW";

    /**
     * Telephone country code
     */
    public string $callingCode = "682";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "682";

    /**
     * Capital city
     */
    public string $capital = "Avarua";

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
    public string $en = "Cook Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Cook-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Cookinseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Cook";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Cook";

    /**
     * French name of the country
     */
    public string $fr = "les Îles Cook";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Ilhas Cook";
    
}
