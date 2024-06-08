<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class UsVirginIslands extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "VI";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "VIR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "850";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "VQ";

    /**
     * Phone dial code
     */
    public string $dial = "1-340";

    /**
     * Capital city
     */
    public string $capital = "Charlotte Amalie";

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
    public string $en = "U.S. Virgin Islands";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Amerikai Virgin-szigetek";

    /**
     * German name of the country
     */
    public string $de = "US Jungferninseln";

    /**
     * Spanish name of the country
     */
    public string $es = "Islas Vírgenes de EE.UU";

    /**
     * Italian name of the country
     */
    public string $it = "Isole Vergini americane";

    /**
     * French name of the country
     */
    public string $fr = "Îles Vierges américaines";

    /**
     * Portugees name of the country
     */
    public string $pt = "Ilhas Virgens dos EUA";
    
}
