<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Benin extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BJ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BEN";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "204";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BN";

    /**
     * Capital city
     */
    public string $capital = "Porto-Novo";

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
    public string $en = "Benin";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Benin";

    /**
     * German name of the country
     */
    public string $de = "In Benin";

    /**
     * Spanish name of the country
     */
    public string $es = "En Benín";

    /**
     * Italian name of the country
     */
    public string $it = "Nel Benin";

    /**
     * French name of the country
     */
    public string $fr = "Au Bénin";
    
}
