<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class PapuaNewGuinea extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "PG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "PNG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "598";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "PP";

    /**
     * Phone dial code
     */
    public string $dial = "675";

    /**
     * Capital city
     */
    public string $capital = "Port Moresby";

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
    public string $en = "Papua New Guinea";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Pápua Új-Guinea";

    /**
     * German name of the country
     */
    public string $de = "Papua Neu-Guinea";

    /**
     * Spanish name of the country
     */
    public string $es = "Papúa Nueva Guinea";

    /**
     * Italian name of the country
     */
    public string $it = "Papua Nuova Guinea";

    /**
     * French name of the country
     */
    public string $fr = "Papouasie Nouvelle Guinée";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Papua Nova Guiné";

}
