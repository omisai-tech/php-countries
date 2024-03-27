<?php
namespace Omisai\Countries\Models;

use Omisai\Countries\Country;
use Omisai\Countries\Continent;

class Eswatini extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = "SZ";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = "SWZ";

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = "748";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = "WZ";

    /**
     * Capital city
     */
    public string $capital = "Mbabane";

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
    public string $en = "Eswatini";

    /**
     * Hungarian name of the country
     */
    public string $hu = "Eswatini";

    /**
     * German name of the country
     */
    public string $de = "Eswatini";

    /**
     * Spanish name of the country
     */
    public string $es = "Esuatini";

    /**
     * Italian name of the country
     */
    public string $it = "Swaziland";

    /**
     * French name of the country
     */
    public string $fr = "Eswatini";
    
}
