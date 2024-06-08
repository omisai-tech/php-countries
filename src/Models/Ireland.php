<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Ireland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "IE";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "IRL";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "372";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "EI";

    /**
     * Phone dial code
     */
    public string $dial = "353";

    /**
     * Capital city
     */
    public string $capital = "Dublin";

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
    public string $en = "Ireland";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Írország";

    /**
     * German name of the country
     */
    public string $de = "Irland";

    /**
     * Spanish name of the country
     */
    public string $es = "Irlanda";

    /**
     * Italian name of the country
     */
    public string $it = "Irlanda";

    /**
     * French name of the country
     */
    public string $fr = "Irlande";

    /**
     * Portugees name of the country
     */
    public string $pt = "Irlanda";
    
}
