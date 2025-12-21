<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Mauritius extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "MU";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "MUS";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "480";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "MP";

    /**
     * Telephone country code
     */
    public string $callingCode = "230";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "230";

    /**
     * Capital city
     */
    public string $capital = "Port Louis";

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
    public string $en = "Mauritius";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Mauritius";

    /**
     * German name of the country
     */
    public string $de = "Mauritius";

    /**
     * Spanish name of the country
     */
    public string $es = "Mauricio";

    /**
     * Italian name of the country
     */
    public string $it = "Maurizio";

    /**
     * French name of the country
     */
    public string $fr = "Maurice";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Maurício";
    
}
