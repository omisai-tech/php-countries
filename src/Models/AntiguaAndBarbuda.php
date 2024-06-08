<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class AntiguaAndBarbuda extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "AG";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "ATG";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "28";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "AC";

    /**
     * Phone dial code
     */
    public string $dial = "1-268";

    /**
     * Capital city
     */
    public string $capital = "St. John's";

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
    public string $en = "Antigua and Barbuda";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Antigua és Barbuda";

    /**
     * German name of the country
     */
    public string $de = "Antigua und Barbuda";

    /**
     * Spanish name of the country
     */
    public string $es = "Antigua y Barbuda";

    /**
     * Italian name of the country
     */
    public string $it = "Antigua e Barbuda";

    /**
     * French name of the country
     */
    public string $fr = "Antigua-et-Barbuda";

    /**
     * Portugees name of the country
     */
    public string $pt = "Antígua e Barbuda";
    
}
