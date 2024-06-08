<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SouthGeorgiaAndSouthSandwichIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "GS";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SGS";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "239";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SX";

    /**
     * Phone dial code
     */
    public string $dial = "500";

    /**
     * Capital city
     */
    public string $capital = "Grytviken";

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
    public string $en = "South Georgia and South Sandwich Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Dél-Georgia és a Déli Sandwich-szigetek";

    /**
     * German name of the country
     */
    public string $de = "Süd-Georgien und die südlichen Sandwich-Inseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Georgia del sur y las islas Sandwich del sur";

    /**
     * Italian name of the country
     */
    public string $it = "Georgia del Sud e Isole Sandwich Meridionali";

    /**
     * French name of the country
     */
    public string $fr = "Géorgie du Sud et îles Sandwich du Sud";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Ilhas Geórgia do Sul e Sandwich do Sul";

}
