<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class FrenchSouthernTerritories extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "TF";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ATF";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "260";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "FS";

    /**
     * Telephone country code
     */
    public string $callingCode = "262";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "262";

    /**
     * Capital city
     */
    public string $capital = "Port-aux-Francais";

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
    public string $en = "French Southern Territories";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Francia déli területek";

    /**
     * German name of the country
     */
    public string $de = "Südfranzösische Territorien";

    /**
     * Spanish name of the country
     */
    public string $es = "Territorios Franceses del Sur";

    /**
     * Italian name of the country
     */
    public string $it = "Territori della Francia del sud";

    /**
     * French name of the country
     */
    public string $fr = "Territoires du Sud français";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Territórios Franceses do Sul";
    
}
