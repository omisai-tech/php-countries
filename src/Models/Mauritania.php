<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Mauritania extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MR";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MRT";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "478";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MR";

    /**
     * Phone dial code
     */
    public string $dial = "222";

    /**
     * Capital city
     */
    public string $capital = "Nouakchott";

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
    public string $continent = "AF";

    /**
     * English name of the country
     */
    public string $en = "Mauritania";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mauritánia";

    /**
     * German name of the country
     */
    public string $de = "Mauretanien";

    /**
     * Spanish name of the country
     */
    public string $es = "Mauritania";

    /**
     * Italian name of the country
     */
    public string $it = "La Mauritania";

    /**
     * French name of the country
     */
    public string $fr = "Mauritanie";

    /**
     * Portugees name of the country
     */
    public string $pt = "Mauritânia";
    
}
