<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Slovenia extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SI';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SVN';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '705';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'SI';

    /**
     * Telephone country code
     */
    public string $callingCode = '386';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '386';

    /**
     * Capital city
     */
    public string $capital = 'Ljubljana';

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
    public string $continent = 'EU';

    /**
     * English name of the country
     */
    public string $en = 'Slovenia';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Szlovénia';

    /**
     * German name of the country
     */
    public string $de = 'Slowenien';

    /**
     * Spanish name of the country
     */
    public string $es = 'Eslovenia';

    /**
     * Italian name of the country
     */
    public string $it = 'Slovenia';

    /**
     * French name of the country
     */
    public string $fr = 'Slovénie';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Eslovênia';
}
