<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Eswatini extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'SZ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'SWZ';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '748';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'WZ';

    /**
     * Telephone country code
     */
    public string $callingCode = '268';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '268';

    /**
     * Capital city
     */
    public string $capital = 'Mbabane';

    /**
     * Total area in square kilometers
     */
    public string $area = '17,363.0';

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
    public string $continent = 'AF';

    /**
     * English name of the country
     */
    public string $en = 'Eswatini';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Eswatini';

    /**
     * German name of the country
     */
    public string $de = 'Eswatini';

    /**
     * Spanish name of the country
     */
    public string $es = 'Esuatini';

    /**
     * Italian name of the country
     */
    public string $it = 'Swaziland';

    /**
     * French name of the country
     */
    public string $fr = 'Eswatini';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Essuatíni';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Eswatini';

    /**
     * Danish name of the country
     */
    public string $da = 'Eswatini';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Eswatini';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Eswatini';

    /**
     * Polish name of the country
     */
    public string $pl = 'Eswatini';

    /**
     * Czech name of the country
     */
    public string $cs = 'Svazijsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Eswatini';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Esvatini';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Esvatini';
}
