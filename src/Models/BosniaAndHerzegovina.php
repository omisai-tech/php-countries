<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class BosniaAndHerzegovina extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "BA";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "BIH";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "70";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "BK";

    /**
     * Telephone country code
     */
    public string $callingCode = "387";

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = "387";

    /**
     * Capital city
     */
    public string $capital = "Sarajevo";

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
    public string $continent = "EU";

    /**
     * English name of the country
     */
    public string $en = "Bosnia and Herzegovina";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Bosznia és Hercegovina";

    /**
     * German name of the country
     */
    public string $de = "Bosnien und Herzegowina";

    /**
     * Spanish name of the country
     */
    public string $es = "Bosnia y Herzegovina";

    /**
     * Italian name of the country
     */
    public string $it = "Bosnia Erzegovina";

    /**
     * French name of the country
     */
    public string $fr = "Bosnie Herzégovine";

    /**
     * Portuguese name of the country
     */
    public string $pt = "Bósnia e Herzegovina";
    
}
