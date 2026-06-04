<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class CongoRepublic extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'CG';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'COG';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '178';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'CF';

    /**
     * Telephone country code
     */
    public string $callingCode = '242';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '242';

    /**
     * Capital city
     */
    public string $capital = 'Brazzaville';

    /**
     * Total area in square kilometers
     */
    public string $area = '342,000.0';

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
    public string $en = 'Congo Republic';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Kongói Köztársaság';

    /**
     * German name of the country
     */
    public string $de = 'Republik Kongo';

    /**
     * Spanish name of the country
     */
    public string $es = 'República del Congo';

    /**
     * Italian name of the country
     */
    public string $it = 'Repubblica del Congo';

    /**
     * French name of the country
     */
    public string $fr = 'République du Congo';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'República do Congo';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Congo Republic';

    /**
     * Danish name of the country
     */
    public string $da = 'Republikken Congo';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Republiken Kongo';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Republikken Kongo';

    /**
     * Polish name of the country
     */
    public string $pl = 'Republika Konga';

    /**
     * Czech name of the country
     */
    public string $cs = 'Konžská republika';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Konžská republika';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Republika Kongo';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Republika Kongo';
}
