<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class ChristmasIsland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CX";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CXR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "162";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "KT";

    /**
     * Capital city
     */
    public string $capital = "Flying Fish Cove";

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
    public string $en = "Christmas Island";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Karácsony-sziget";

    /**
     * German name of the country
     */
    public string $de = "Weihnachtsinsel";

    /**
     * Spanish name of the country
     */
    public string $es = "Isla de Navidad";

    /**
     * Italian name of the country
     */
    public string $it = "Isola di Natale";

    /**
     * French name of the country
     */
    public string $fr = "L'île de noël";
    
}
