<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Paraguay extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'PY';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'PRY';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '600';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'PA';

    /**
     * Telephone country code
     */
    public string $callingCode = '595';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '595';

    /**
     * Capital city
     */
    public string $capital = 'Asuncion';

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
    public string $continent = 'SA';

    /**
     * English name of the country
     */
    public string $en = 'Paraguay';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Paraguay';

    /**
     * German name of the country
     */
    public string $de = 'Paraguay';

    /**
     * Spanish name of the country
     */
    public string $es = 'Paraguay';

    /**
     * Italian name of the country
     */
    public string $it = 'Paraguay';

    /**
     * French name of the country
     */
    public string $fr = 'Paraguay';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Paraguai';
}
