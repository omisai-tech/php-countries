<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Niger extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "NE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "NER";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "562";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "NG";

    /**
     * Telephone country code
     */
    public string $callingCode = "227";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "227";

    /**
     * Capital city
     */
    public string $capital = "Niamey";

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
    public string $en = "Niger";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Niger";

    /**
     * German name of the country
     */
    public string $de = "Niger";

    /**
     * Spanish name of the country
     */
    public string $es = "Níger";

    /**
     * Italian name of the country
     */
    public string $it = "Niger";

    /**
     * French name of the country
     */
    public string $fr = "Niger";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Níger";
    
}
