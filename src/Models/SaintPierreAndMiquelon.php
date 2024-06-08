<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class SaintPierreAndMiquelon extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SPM";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "666";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "SB";

    /**
     * Phone dial code
     */
    public string $dial = "508";

    /**
     * Capital city
     */
    public string $capital = "Saint-Pierre";

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
    public string $en = "Saint Pierre and Miquelon";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Saint Pierre és Miquelon";

    /**
     * German name of the country
     */
    public string $de = "Saint-Pierre und Miquelon";

    /**
     * Spanish name of the country
     */
    public string $es = "San Pedro y Miquelón";

    /**
     * Italian name of the country
     */
    public string $it = "Saint Pierre e Miquelon";

    /**
     * French name of the country
     */
    public string $fr = "Saint-Pierre-et-Miquelon";

    /**
     * Portugees name of the country
     */
    public string $pt = "São Pedro e Miquelon";
    
}
