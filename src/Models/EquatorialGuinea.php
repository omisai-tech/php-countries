<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class EquatorialGuinea extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'GQ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'GNQ';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '226';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'EK';

    /**
     * Telephone country code
     */
    public string $callingCode = '240';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '240';

    /**
     * Capital city
     */
    public string $capital = 'Ciudad de la Paz';

    /**
     * Total area in square kilometers
     */
    public string $area = '28,051.0';

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
    public string $en = 'Equatorial Guinea';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Egyenlítői-Guinea';

    /**
     * German name of the country
     */
    public string $de = 'Äquatorialguinea';

    /**
     * Spanish name of the country
     */
    public string $es = 'Guinea Ecuatorial';

    /**
     * Italian name of the country
     */
    public string $it = 'Guinea Equatoriale';

    /**
     * French name of the country
     */
    public string $fr = 'Guinée Équatoriale';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Guiné Equatorial';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Equatorial Guinea';

    /**
     * Danish name of the country
     */
    public string $da = 'Ækvatorialguinea';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Ekvatorialguinea';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Ekvatorial-Guinea';

    /**
     * Polish name of the country
     */
    public string $pl = 'Gwinea Równikowa';

    /**
     * Czech name of the country
     */
    public string $cs = 'Rovníková Guinea';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Rovníková Guinea';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Ekvatorialna Gvineja';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Ekvatorijalna Gvineja';
}
