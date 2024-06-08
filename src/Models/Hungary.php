<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Hungary extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "HU";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "HUN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "348";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "HU";

    /**
     * Phone dial code
     */
    public string $dial = "36";

    /**
     * Capital city
     */
    public string $capital = "Budapest";

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
    public string $en = "Hungary";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Magyarország";

    /**
     * German name of the country
     */
    public string $de = "Ungarn";

    /**
     * Spanish name of the country
     */
    public string $es = "Hungría";

    /**
     * Italian name of the country
     */
    public string $it = "Ungheria";

    /**
     * French name of the country
     */
    public string $fr = "Hongrie";
    
}
