<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class BonaireSintEustatiusAndSaba extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'BQ';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'BES';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '535';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = '';

    /**
     * Telephone country code
     */
    public string $callingCode = '599';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '599';

    /**
     * Capital city
     */
    public string $capital = '';

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
    public string $en = 'Bonaire, Sint Eustatius, and Saba';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Bonaire, Sint Eustatius és Saba';

    /**
     * German name of the country
     */
    public string $de = 'Bonaire, Sint Eustatius und Saba';

    /**
     * Spanish name of the country
     */
    public string $es = 'Bonaire, San Eustaquio y Saba';

    /**
     * Italian name of the country
     */
    public string $it = 'Bonaire, Sint Eustatius e Saba';

    /**
     * French name of the country
     */
    public string $fr = 'Bonaire, Saint-Eustache et Saba';

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Bonaire, Santo Eustáquio e Saba';

    /**
     * Dutch name of the country
     */
    public string $nl = 'Bonaire, Sint Eustatius, and Saba';

    /**
     * Danish name of the country
     */
    public string $da = 'Bonaire, Sint Eustatius og Saba';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Bonaire, Sint Eustatius och Saba';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Bonaire, Sint Eustatius og Saba';

    /**
     * Polish name of the country
     */
    public string $pl = 'Bonaire, Sint Eustatius i Saba';

    /**
     * Czech name of the country
     */
    public string $cs = 'Bonaire, Sint Eustatius a Saba';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Bonaire, Sint Eustatius a Saba';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Bonaire, Sint Eustatius in Saba';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Bonaire, Sint Eustatius i Saba';
}
