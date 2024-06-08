<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class NewCaledonia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NC";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NCL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "540";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NC";

    /**
     * Phone dial code
     */
    public string $dial = "687";

    /**
     * Capital city
     */
    public string $capital = "Noumea";

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
    public string $en = "New Caledonia";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Új-Kaledónia";

    /**
     * German name of the country
     */
    public string $de = "Neu-Kaledonien";

    /**
     * Spanish name of the country
     */
    public string $es = "Nueva Caledonia";

    /**
     * Italian name of the country
     */
    public string $it = "Nuova Caledonia";

    /**
     * French name of the country
     */
    public string $fr = "Nouvelle Calédonie";

    /**
     * Portugees name of the country
     */
    public string $pt = "Nova Caledônia";
    
}
