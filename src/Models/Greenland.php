<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class Greenland extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GL';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GRL';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '304';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'GL';

    /**
     * Telephone country code
     */
    public string $callingCode = '299';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '299';

    /**
     * Capital city
     */
    public string $capital = 'Nuuk';

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
    public string $continent = 'NA';

    /**
     * English name of the country
     */
    public string $en = 'Greenland';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Grönland';

    /**
     * German name of the country
     */
    public string $de = 'Grönland';

    /**
     * Spanish name of the country
     */
    public string $es = 'Groenlandia';

    /**
     * Italian name of the country
     */
    public string $it = 'Groenlandia';

    /**
     * French name of the country
     */
    public string $fr = 'Groenland';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Groenlândia';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Greenland';

    /**
     * Danish name of the country
     */
    public string $da = 'Grønland';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Grönland';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Grønland';

    /**
     * Polish name of the country
     */
    public string $pl = 'Grenlandia';

    /**
     * Czech name of the country
     */
    public string $cs = 'Grónsko';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Grónsko';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Grenlandija';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Grenland';
}
