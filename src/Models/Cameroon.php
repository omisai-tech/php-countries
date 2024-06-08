<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Cameroon extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "CM";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "CMR";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "120";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "CM";

    /**
     * Phone dial code
     */
    public string $dial = "237";

    /**
     * Capital city
     */
    public string $capital = "Yaounde";

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
    public string $en = "Cameroon";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Kamerun";

    /**
     * German name of the country
     */
    public string $de = "Kamerun";

    /**
     * Spanish name of the country
     */
    public string $es = "Camerún";

    /**
     * Italian name of the country
     */
    public string $it = "Camerun";

    /**
     * French name of the country
     */
    public string $fr = "Cameroun";

    /**
     * Portugees name of the country
     */
    public string $pt = "Camarões";
    
}
